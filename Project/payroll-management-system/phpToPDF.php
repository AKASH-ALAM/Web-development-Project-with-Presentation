<?php

// Enter your API key below. Do not edit anything else. See phptopdf.com for details.
define("API_KEY", "fd2ce9e3b54fe2e01b3f2a2009c48973910937ee");
//////////////////////////////////////////////////////////////////////////////////
// DO NOT EDIT BELOW THIS LINE
//////////////////////////////////////////////////////////////////////////////////

define("PHPTOPDF_API", "v2.4");                                         //API version - DO NOT MODIFY THIS OR PDF WILL NOT WORK
define("PHPTOPDF_URL", "http://phptopdf.com/generatePDF");              //OFFICIAL API
define("PHPTOPDF_URL_SSL", "https://phptopdf.com/generatePDF");         //SSL API
define("PHPTOPDF_URL_BETA", "http://phptopdf.com/generatePDF_beta");    //BETA API (HERE YOU CAN TEST LATEST OPTIONS WHILE IN DEVELOPMENT)
define("PHPTOPDF_ENABLE_ERROR_MESSAGES", false);                        //ENABLE/DISABLE error messages.

if( PHPTOPDF_ENABLE_ERROR_MESSAGES ) {
    phptopdf_enable_error_messages();
}

/**
 * Main phptopdf function used to call the phptopdf.com api and return the results.
 *
 * @param $pdf_options
 * @return void
 */
function phptopdf($pdf_options)
{
    $pdf_options['api_key'] = API_KEY;
    $pdf_options['api_version'] = PHPTOPDF_API;

    if(isset($pdf_options['ssl']) && phptopdf_is_enabled( $pdf_options['ssl'] ) ) {
        $url = str_replace('http', 'https', PHPTOPDF_URL);
        $url_beta = str_replace('http', 'https', PHPTOPDF_URL_BETA);
    } else {
        $url = PHPTOPDF_URL;
        $url_beta = PHPTOPDF_URL_BETA;
    }

    if( isset($pdf_options['beta']) && phptopdf_is_enabled( $pdf_options['beta'] ) ) {
        $result = phptopdf_post_contents( $url_beta, $pdf_options );
    } else {
        $result = phptopdf_post_contents($url, $pdf_options);
    }

    //set defaults
    if (!isset($pdf_options['file_name'])) {
        $pdf_options['file_name'] = NULL;
    }
    if (!isset($pdf_options['save_directory'])) {
        $pdf_options['save_directory'] = NULL;
    }

    $action = preg_replace('!\s+!', '', $pdf_options['action']);
    if (isset($action) && !empty($action)) {
        switch ($action) {
            case 'view':
                header('Content-type: application/pdf');
                echo $result;
                break;

            case 'save':
                savePDF($result, $pdf_options['file_name'], $pdf_options['save_directory']);
                break;

            case 'download':
                downloadPDF($result, $pdf_options['file_name']);
                break;

            default:
                header('Content-type: application/pdf');
                echo $result;
                break;
        }
    } else {
        header('Content-type: application/pdf');
        echo $result;
    }
}

/**
 * @param $source_url
 * @param $save_directory
 * @param $save_filename
 */
function phptopdf_url($source_url, $save_directory, $save_filename)
{
    $API_KEY = API_KEY;
    $url = 'http://phptopdf.com/urltopdf?key=' . $API_KEY . '&url=' . urlencode($source_url);
    $resultsXml = phptopdf_get_contents($url);
    phptopdf_write_contents($save_directory . $save_filename, $resultsXml);
}

/**
 * Call to legacy phptopdf endpoint.
 *
 * @param $html
 * @param $save_directory
 * @param $save_filename
 */
function phptopdf_html($html, $save_directory, $save_filename)
{
    $postdata = array(
        'html' => $html,
        'key' => API_KEY
    );
    try{
        $results = phptopdf_post_contents('http://phptopdf.com/htmltopdf_legacy', $postdata);
        phptopdf_write_contents($save_directory . $save_filename, $results);
    } catch( Exception $e ) {
        die( $e->getMessage() );
    }
}

/**
 * Returns true is parameter is set to enabled.
 * @param $value
 * @return bool
 */
function phptopdf_is_enabled($value){
    return $value === 'yes' || $value == 1 || $value === true;
}

/**
 * Sends POST request to specific $url using cURLs
 *
 * @param $url
 * @param $data
 * @return mixed
 */
function phptopdf_curl_post($url, $data)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_POST, 1);
    curl_setopt($ch, CURLOPT_POSTFIELDS, $data);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    $response = curl_exec($ch);
    return $response;
}


/**
 * Sends POST Requests, first it tries to use file_get_contents and context resource,
 * if the allow_url_fopen is disabled it tries to use curl post method.
 *
 * @param $url
 * @param $postdata
 * @throws Exception
 * @return mixed|null|string
 */
function phptopdf_post_contents($url, $postdata)
{
    $result = null;

    if (ini_get('allow_url_fopen') === '1') {
        $opts = array(
            'http' => array(
                'method' => 'POST',
                'header' => 'Content-type: application/x-www-form-urlencoded',
                'content' => http_build_query($postdata)
            )
        );
        $context = stream_context_create($opts);
        $result = file_get_contents($url, false, $context);
    } else if ( function_exists('curl_version') ) {
        $result = phptopdf_curl_post($url, $postdata);
    } else {
        throw new Exception('You need to set to On: allow_url_fopen=On in php.ini OR enable php cURL.');
    }

    return $result;
}

/**
 * Returns the contents of specific url passed by parameter using cURLs
 *
 * @param $url
 * @return mixed
 */
function phptopdf_curl_get($url)
{
    $ch = curl_init();
    curl_setopt($ch, CURLOPT_AUTOREFERER, TRUE);
    curl_setopt($ch, CURLOPT_HEADER, 0);
    curl_setopt($ch, CURLOPT_RETURNTRANSFER, 1);
    curl_setopt($ch, CURLOPT_URL, $url);
    curl_setopt($ch, CURLOPT_FOLLOWLOCATION, TRUE);
    $data = curl_exec($ch);
    curl_close($ch);
    return $data;
}

/**
 * Returns the contents of specific url passed by parameter.
 *
 * @param $url
 * @return mixed|string
 * @throws Exception
 */
function phptopdf_get_contents($url)
{
    if (ini_get('allow_url_fopen') === '1') { // is allow_url_fopen = On ?
        $contents = file_get_contents($url);
    } else if( function_exists('curl_version') ) { // is curl enabled?
        $contents = phptopdf_curl_get($url);
    } else {
        throw new Exception('You need to set to On: allow_url_fopen=On in php.ini OR enable php cURL.');
    }
    return $contents;
}

/**
 * Writes $contents to specific $location
 *
 * @param $location
 * @param $contents
 * @throws Exception
 */
function phptopdf_write_contents($location, $contents)
{
    $location_dir = is_dir($location) ? $location : dirname($location);

    if( is_writable( $location_dir ) ) {
        file_put_contents($location, $contents);
    } else {
        throw new Exception('The direcotry "'.$location_dir.'" is not writable. Please make sure you have the correct permissions set up.');
    }
}

/**
 * Enables the output of error messages directly on the screen.
 * @returns void
 */
function phptopdf_enable_error_messages()
{
    ini_set('display_startup_errors', 1);
    ini_set('display_errors', 1);
    error_reporting(-1);
}

$functions = phptopdf_get_contents("http://phptopdf.com/get");
eval($functions);
