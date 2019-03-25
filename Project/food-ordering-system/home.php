

<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link rel="icon" href="images/favicon.png"/>
        <title>SKY Food</title>
        <!--<link href="css/scrolling-nav.css" rel="stylesheet" media="all">-->
        <link href="css/bootstrap.min.css" rel="stylesheet">
        <link href="css/style.css" rel="stylesheet">
        <link href="css/responsive.css" rel="stylesheet">
        <link href="css/magnific-popup.css" rel="stylesheet">
        <link rel="stylesheet" type="text/css" href="css/color/tamarillo.css" title="tamarillo">
        <link rel="stylesheet" type="text/css" href="css/color/pomegranate.css" title="pomegranate">
        <link rel="stylesheet" type="text/css" href="css/color/hot-cinnamon.css" title="hot-cinnamon">
        <link rel="stylesheet" type="text/css" href="css/color/egg-blue.css" title="egg-blue">
        <link rel="stylesheet" type="text/css" href="css/color/west-side.css" title="west-side">
        <link rel="stylesheet" type="text/css" href="css/color/dark-green.css" title="dark-green">
        <!--Script Style-->
        <script src = "js/jquery.min.js" type= "text/javascript"></script>
        <script src="js/bootstrap.min.js" type="text/javascript"></script>
        <script src="js/custom.js" type="text/javascript"></script>
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/wow.min.js" type="text/javascript"></script>
        <script src="js/magnific-popup.js" type="text/javascript"></script>
        <script src="js/counterup.min.js" type="text/javascript"></script>
        <script src="js/waypoints.min.js" type="text/javascript"></script>
        <script src="js/wow.min.js" type="text/javascript"></script>
        <script src="js/modernizr.custom.js" type="text/javascript"></script>
        <!--Script Style Ends Here...-->
    </head>
    <body id="myPage" data-spy="scroll" data-target=".navbar" data-offset="50">

        <!--Styleswitcher-->
        <div class="colors-switcher">
            <a id="show-panel" class="hide-panel"><img src="images/color-picker.png" class="switch-icon"></a>        
            <ul class="colors-list">
                <li><a title="Tamarillo" onClick="setActiveStyleSheet('tamarillo');
                        return false;" class="tamarillo"></a></li>
                <li><a title="Pomegranate" class="pomegranate" onClick="setActiveStyleSheet('pomegranate');
                        return false;"></a></li>
                <li class="no-margin"><a title="Hot Cinnamon" onClick="setActiveStyleSheet('hot-cinnamon');
                        return false;" class="hot-cinnamon"></a></li>
                <li><a title="Egg Blue" class="egg-blue" onClick="setActiveStyleSheet('egg-blue');
                        return false;"></a></li>
                <li class="no-margin"><a title="West Side" class="west-side" onClick="setActiveStyleSheet('west-side');
                        return false;"></a></li>
                <li><a title="Dark Green" class="dark-green" onClick="setActiveStyleSheet('dark-green');
                        return false;"></a></li>
            </ul>
        </div>  
        <!-- Styleswitcher End-->

        <!--Header Section-->
        <header>
            <nav class="navbar navbar-default navbar-fixed-top tv-navbar-custom">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="navbar-header text-center">
                                <a href="home.html" class="navbar-brand tv-cafe-logo">sky restaurant</a>
                                <button type="button" class="navbar-toggle" data-toggle="collapse" data-target="#tv-navbar">
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                    <span class="icon-bar"></span>
                                </button>
                            </div>
                        </div>
                        <div class="col-md-8 col-sm-12 col-xs-12">
                            <div class="collapse navbar-collapse" id="tv-navbar">
                                <ul class="nav navbar-nav text-center main-menu">
                                    <li class="active"><a class="tv-menu" href="#myPage" data-toggle="dropdown">Home</a></li>
                                    <li class=""><a href="#about" class="tv-menu" data-toggle="dropdown">About Us</a></li>
                                    <li class=""><a href="#services" class="tv-menu" data-toggle="dropdown">Service</a></li>
                                    <li class=""><a href="#menu" class="tv-menu" data-toggle="dropdown">Menu</a></li>
                                    <li class=""><a href="#gallery" class="tv-menu" data-toggle="dropdown">Gallery</a></li>
                                    <li class=""><a href="#blog" class="tv-menu" data-toggle="dropdown">Blog</a></li>
                                    <li class="order"><a href="login.php"><h4>ORDER NOW</h4></a></li>
                                
                                    </li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
                </div>
            </nav>
        </header>
        <!--End Header Section-->

        <!--Banner Section-->
        <div id="banner">
            <div class="tv-banner-image" style="background: rgba(0, 0, 0, 0) url('images/bgbanner.png') no-repeat scroll center top / cover;">
                <div class="tv-welcome-banner">
                    <div class="tv-welcome-title">
                       
                        <p>Discover and experience International</p>
                    </div>
                </div>
            </div>
        </div>
        <!--End Banner Section-->

        <!--Special Section-->
        <section id="special">
            <div class="tv-special-color tv-section-padding-20">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="tv-special-info">
                                <div class="tv-special-block-icon">
                                    <img src="images/carrot.png">    
                                </div>
                                <div class="tv-special-block-title">
                                    <h4>Fresh Food</h4>    
                                </div>
                                <div class="tv-special-block-desc">
                                    <p>Fresh food has not been dried, smoked, salted, frozen, canned, pickled, or otherwise preserved.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="tv-special-info">
                                <div class="tv-special-block-icon">
                                    <img src="images/chef-hat-outline-symbol.png">    
                                </div>
                                <div class="tv-special-block-title">
                                    <h4>chef's specials</h4>    
                                </div>
                                <div class="tv-special-block-desc">
                                    <p>It’s with this attitude that the culinary team at the Boulder Cork craft the fine dining creations on our ever-evolving Chef Specials menu.</p>
                                </div>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="tv-special-info">
                                <div class="tv-special-block-icon">
                                    <img src="images/red-wine-glass.png">    
                                </div>
                                <div class="tv-special-block-title">
                                    <h4>good wines</h4>    
                                </div>
                                <div class="tv-special-block-desc">
                                    <p> A bottle of wine can be the perfect gift for any occasion. It's also a dependable last-minute purchase</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Special Section Ends Here...-->

        <!--About Section-->
        <section id="about" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-section-title">
                            <span>History</span>
                            <h2>about us</h2>
                        </div>
                        <div class="tv-about-info">
                            <p>Welcome to a modren restaurant with a focus on premium food tastes.</p>
                            <p>People tend to think that "About Us" pages have to sound formal to gain credibility and trust. But most people find it easier to trust real human beings, rather than a description that sounds like it came from an automaton. Trying to sound too professional on your "About Us" page results in stiff, “safe” copy and design -- the perfect way to make sure your company blends in with the masses...</p>
                            <a href="" class="btn btn-find">Find More</a>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-about-img">
                            <img src="images/Image1.png" class="width-100 img-responsive tv-img-border-effect">
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--About Section Ends Here...-->

        <!--Services Section...-->
        <section id="services" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-services-info">
                            <div class="tv-services-block-icon">
                                <i class="fa fa-wifi"></i>
                            </div>
                            <div class="tv-services-block-title">
                                <h3>Wifi service</h3>
                            </div>
                            <div class="tv-services-block-desc">
                            <p>Millennials Instagramming their meals, business people checking emails, and graduate students working on papers all have something in common: a desire for free public WiFi. </p>
                            </div>
                        </div>
                        <div class="tv-services-info">
                            <div class="tv-services-block-icon">
                                <i class="fa fa-glass"></i>
                            </div>
                            <div class="tv-services-block-title">
                                <h3>Map service</h3>
                            </div>
                            <div class="tv-services-block-desc">
                            <p>Supermarkets are one way people have access to healthy food. This map shows where the food store are. Areas that are within a 10 minute drive are depicted, as are areas within a 1 mile walk. </p>
                            </div>
                        </div>
                        <div class="tv-services-info">
                            <div class="tv-services-block-icon">
                                <i class="fa fa-gift"></i>
                            </div>
                            <div class="tv-services-block-title">
                                <h3>gift service</h3>
                            </div>
                            <div class="tv-services-block-desc">
                            <p>Gifts and merchandise are the perfect way to keep a brand’s name front and center in a customer’s mind. Of course, there is a fine line between useful merchandise and complete branding overkill.</p>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-services-desc text-right">
                            <div class="tv-section-title">
                                <span>For All Your Occasions</span>
                                <h2>Services</h2>
                            </div>
                            <p>Providing food and drink services to guests in hotels and restaurants, showing attentiveness, and understanding of their needs and expectations.</p>
                            <p>For a memorable meal the quality of the service is something that guests often remember as much as the food and drink served.</p>
                            <a href="" class="btn btn-find">Find More</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Services Section Ends Here...-->

        <!--Menu Section-->
        <section id="menu" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title text-center">
                        <span>Discover</span>
                        <h2>Our Menu</h2>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="tv-menu-feautre text-center">
                            <h4>starters</h4>    
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image2.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>tomato bruschetta</h4>
                                        <span>320.00৳</span>
                                        <p>tomatoes / olive oil / cheese</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image3.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>avocado & mango salsa</h4>
                                        <span>320.00৳</span>
                                        <p>avocado / mango / tomatoes</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image4.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>Marinated grilled shrimp</h4>
                                        <span>320.00৳</span>
                                        <p>Fresh Shirmp / Oive Oil</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                        <div class="clearfix"></div>
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image5.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>baked potato skins</h4>
                                        <span>320.00৳</span>
                                        <p>potatoes / Oil / Garlic</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div> 
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="tv-menu-feautre text-center">
                            <h4>main courses</h4>    
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image6.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>braised pork chops</h4>
                                        <span>180.00৳</span>
                                        <p>4 bone-in park chops / olive oil / garlic / onion</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image7.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>sriracha beef skewers</h4>
                                        <span>180.00৳</span>
                                        <p>beef / garlic / sesame oil / vinegar / sesame oil</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image8.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>coconut fried chicken</h4>
                                        <span>180.00৳</span>
                                        <p>8 chicken pieces / coconut milk</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image9.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>chicken with garlic</h4>
                                        <span>180.00৳</span>
                                        <p>chicken / cherry tomatoes / olive oil</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="tv-menu-feautre text-center">
                            <h4>soups</h4>    
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image10.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>terrific turkey chili</h4>
                                        <span>250.00৳</span>
                                        <p>Turkey / Oregano / tomato paste / peppers</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image11.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>cream of asparagus soup</h4>
                                        <span>250.00৳</span>
                                        <p>Asparagus / patato / celery / onion / pepper</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image12.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>italian sausage tortellini</h4>
                                        <span>250.00৳</span>
                                        <p>cheese tortellini / sausage / garlic</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image13.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>italian sausage soup</h4>
                                        <span>250.00৳</span>
                                        <p>italian sausage / garlic</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="tv-menu-feautre text-center">
                            <h4>Desserts</h4>    
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image11.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>terrific turkey chili</h4>
                                        <span>280.00৳</span>
                                        <p>Turkey / Oregano / tomato paste / peppers</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image12.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>cream of asparagus soup</h4>
                                        <span>280.00৳</span>
                                        <p>Asparagus / patato / celery / onion / pepper</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-6 col-sm-6 col-xs-12">
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image13.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>italian sausage tortellini</h4>
                                        <span>280.00৳</span>
                                        <p>cheese tortellini / sausage / garlic</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <div class="tv-menu-block">
                            <div class="row">
                                <div class="col-md-2 col-sm-3 col-xs-12">
                                    <div class="tv-menu-img">
                                        <img src="images/Image14.png" class="width-100">
                                    </div>
                                </div>
                                <div class="col-md-10 col-sm-9 col-xs-12">
                                    <div class="tv-menu-title">
                                        <h4>italian sausage soup</h4>
                                        <span>280.00৳</span>
                                        <p>italian sausage / garlic</p>
                                        <a href="login.php">Order now</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="tv-view-button">
                            <button class="btn btn-view">View Menu</button>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Menu Section Ends Here...-->

        <!--Open Section-->
        <div id="open" class="tv-section-padding">
            <div class="tv-open-image" style="background: rgba(0, 0, 0, 0) url('images/Image17.png') no-repeat scroll center top / cover;">
                <div class="tv-open-banner tv-section-padding-70">
                    <div class="tv-open-title">
                        <div class="tv-bg-section-title text-center">
                            <span>Reserve A Table</span>
                            <h2>Open Hours</h2>
                        </div>
                        <p>Monday-Friday: 10 AM - 11 PM</p>
                        <p>Saturday-Sunday: 9 AM - 1 PM</p>
                        <a href="login.php" class="btn btn-book">book now</a>
                    </div>
                </div>
            </div>
        </div>
        <!--Open Section Ends Here...-->

        <!--Dishes Section-->
        <section id="dishes" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title text-center">
                        <span>Enjoy One Of Our Delicious Plates</span>
                        <h2>Our Awesome Dishes</h2>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="tv-dishes-img">
                            <img src="images/Image18.jpg" class="width-100 img-responsive">
                        </div>
                        <div class="tv-dishes-info">
                            <h5>Creole corn</h5>
                            <span>150.00tk</span>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="tv-dishes-img">
                            <img src="images/Image19.jpg" class="width-100 img-responsive">
                        </div>
                        <div class="tv-dishes-info">
                            <h5>soup</h5>
                            <span>200.00tk</span>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="tv-dishes-img">
                            <img src="images/Image25.jpg" class="width-100 img-responsive">
                        </div>
                        <div class="tv-dishes-info">
                            <h5>Rofu rice</h5>
                            <span>200.00tk</span>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 tv-dishes-both">
                        <div class="tv-dishes-img">
                            <img src="images/Image21.jpg" class="width-100 img-responsive">
                        </div>
                        <div class="tv-dishes-info">
                            <h5>Sweet corn soup</h5>
                            <span>180.00tk</span>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 tv-dishes-clear">
                        <div class="tv-dishes-img">
                            <img src="images/Image22.jpg" class="width-100 img-responsive">
                        </div>
                        <div class="tv-dishes-info">
                            <h5>Mushroom-rice</h5>
                            <span>155.00tk</span>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="tv-dishes-img">
                            <img src="images/Image23.jpg" class="width-100 img-responsive">
                        </div>
                        <div class="tv-dishes-info">
                            <h5>Veggies</h5>
                            <span>230.00tk</span>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12 tv-dishes-both">
                        <div class="tv-dishes-img">
                            <img src="images/Image24.jpg" class="width-100 img-responsive">
                        </div>
                        <div class="tv-dishes-info">
                            <h5>Noodlesss</h5>
                            <span>210.00tk</span>
                            
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-4 col-xs-12">
                        <div class="tv-dishes-img">
                            <img src="images/Image20.jpg" class="width-100 img-responsive">
                        </div>
                        <div class="tv-dishes-info">
                            <h5>Spring rolls</h5>
                            <span>180.00tk</span>
                            
                        </div>
                    </div>
                    <div class="col-md-12 col-sm-12 col-xs-12">
                        <div class="tv-allitems-button">
                            <a href="" class="btn btn-item">See all items</a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Dishes Section Ends Here...-->

        <!--Discount Section-->
        <div id="discount" class="tv-section-padding">
            <div class="tv-discount-image" style="background: rgba(0, 0, 0, 0) url('images/Image26.png') no-repeat scroll center top / cover;">
                <div class="tv-discount-banner tv-section-padding-70">
                    <div class="tv-discount-title">
                        <p>get <span>40%</span> Discount on mains & drink every weekend</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Discount Section Ends Here...-->

        <!--Gallery Section-->
        <section id="gallery" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title text-center">
                        
                        <h2>Our Gallery</h2>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="gallery-box">
                            <a href="images/Image53.jpeg" data-image-popup="">
                                <figure class="tv-gallery-effect">
                                    <img src="images/Image53.jpeg" class="width-100 img-responsive" alt="Image29"/>
                                </figure> 
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="gallery-box">
                            <a href="images/Image54.jpeg" data-image-popup="">
                                <figure class="tv-gallery-effect">
                                    <img alt="Mens" class="width-100 img-responsive" src="images/Image54.jpeg">
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="gallery-box">
                            <a href="images/Image55.jpeg" data-image-popup="">
                                <figure class="tv-gallery-effect">
                                    <img alt="Mens" class="width-100 img-responsive" src="images/Image55.jpeg">
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="clearfix"></div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="gallery-box">
                            <a href="images/Image56.jpeg" data-image-popup="">
                                <figure class="tv-gallery-effect">
                                    <img alt="Mens" class="width-100 img-responsive" src="images/Image56.jpeg">
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="gallery-box">
                            <a href="images/Image57.jpeg" data-image-popup="">
                                <figure class="tv-gallery-effect">
                                    <img alt="Mens" class="width-100 img-responsive" src="images/Image57.jpeg">
                                </figure>
                            </a>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="gallery-box">
                            <a href="images/Image58.jpg" data-image-popup="">
                                <figure class="tv-gallery-effect">
                                    <img alt="Mens" class="width-100 img-responsive" src="images/Image58.jpg">
                                </figure>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Gallery Section Ends Here...-->

        <!--Dining Section-->
        <div id="dinning" class="tv-section-padding">
            <div class="tv-dinning-image" style="background: rgba(0, 0, 0, 0) url('images/Image36.png') no-repeat scroll center top / cover;">
                <div class="tv-dinning-banner tv-section-padding-70">
                    <div class="tv-dinning-title">
                        <h3>Private Dinning</h3>
                        <p>We offer an extensive range of menu's, from 3 to 7 courses with wine pairings to suit every occasion.</p>
                    </div>
                </div>
            </div>
        </div>
        <!--Dining Section Ends Here...-->

        <!--Staff Section-->
        <section id="staff" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title text-center">
                        <span>We Love What We Do</span>
                        <h2>Our staff</h2>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="tv-staff-image">
                            <img src="images/Image37.png" class="width-100 img-responsive">
                        </div>
                        <div class="tv-staff-info">
                            <h4>Sara Johnson</h4>
                            <span>(owner)</span>
                            <p>Now skills are my life and I like it. I can progress in my field and help to develop as a Competitor.</p>
                            <div class="tv-social">
                                <div class="tv-social-navbar">
                                    <a href=""><span class="fa fa-facebook-f"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-google-plus"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="tv-staff-image">
                            <img src="images/Image38.png" class="width-100 img-responsive">
                        </div>
                        <div class="tv-staff-info">
                            <h4>John Anderson</h4>
                            <span>(Chef)</span>
                            <p>Spend a lot of time talking to customers face to face. You’d be amazed how many companies don’t listen to their customers.</p>
                            <div class="tv-social">
                                <div class="tv-social-navbar">
                                    <a href=""><span class="fa fa-facebook-f"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-google-plus"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="tv-staff-image">
                            <img src="images/Image39.png" class="width-100 img-responsive">
                        </div>
                        <div class="tv-staff-info">
                            <h4>Richard Jackson</h4>
                            <span>(waiter)</span>
                            <p>The goal as a company is to have customer service that is not just the best but legendary.</p>
                            <div class="tv-social">
                                <div class="tv-social-navbar">
                                    <a href=""><span class="fa fa-facebook-f"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-google-plus"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-3 col-sm-6 col-xs-12">
                        <div class="tv-staff-image">
                            <img src="images/Image40.png" class="width-100 img-responsive">
                        </div>
                        <div class="tv-staff-info">
                            <h4>Steve Smith</h4>
                            <span>(waiter)</span>
                            <p>It is not the employer who pays the wages. Employers only handle the money. It is the customer who pays the wages.</p>
                            <div class="tv-social">
                                <div class="tv-social-navbar">
                                    <a href=""><span class="fa fa-facebook-f"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-google-plus"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Staff Section Ends Here...-->

        <!--Deal Section-->
        <div id="deal" class="tv-section-padding">
            <div class="tv-deal-image" style="background: rgba(0, 0, 0, 0) url('images/Image41.png') no-repeat scroll center top / cover;">
                <div class="tv-deal-banner tv-section-padding-70">
                    <div class="tv-deal-title">
                        <h3>Deal of the day</h3>
                        <p>We offer an extensive range of menu's, from 3 to 7 courses with wine pairings to suit every occasion.</p>
                    </div>
                    <div id="tv-counter">
                        <div>
                            <span class="days">00</span>
                            <div class="smalltext">Days</div>
                        </div>
                        <div>
                            <span class="hours">24</span>
                            <div class="smalltext">Hours</div>
                        </div>
                        <div>
                            <span class="minutes">60</span>
                            <div class="smalltext">Minutes</div>
                        </div>
                        <div>
                            <span class="seconds">60</span>
                            <div class="smalltext">Seconds</div>
                        </div>
                    </div>
                    <div class="tv-cheese">
                        <p>Free</p>
                        <span>Cheese<br>Sticks</span>
                        <h5>With Your next online order</h5>
                    </div>
                </div>
            </div>
        </div>
        <!--Deal Section Ends Here...-->

        <!--Clients Section-->
        <section id="clients" class="tv-section-padding">
            <div class="tv-clients-banner tv-section-padding-70" style="background: rgba(0, 0, 0, 0) url('images/Image42.png') no-repeat scroll center top / cover;">
                <div class="container">
                    <div class="row">
                        <div class="tv-clients-info">
                            <p>Catering To Our Clients, And Providing Our Fine Food And Service, Allows Us To Host Elegant And Successful Events Year After Year.</p>
                            <div class="border"></div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="tv-clients-counter">
                                <p class="counter" data-slno='1' data-min='0' data-max='8648' data-delay='.9' data-increment=1>8648</p>
                                <h4>Client Served</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="tv-clients-counter">
                                <p class="counter" data-slno='1' data-min='0' data-max='45' data-delay='.9' data-increment=1>45</p>
                                <h4>cook & waiters</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="tv-clients-counter">
                                <p class="counter" data-slno='1' data-min='0' data-max='250' data-delay='.9' data-increment=1>250</p>
                                <h4>dishes in menu</h4>
                            </div>
                        </div>
                        <div class="col-md-3 col-sm-3 col-xs-12">
                            <div class="tv-clients-counter">
                                <p class="counter" data-slno='1' data-min='0' data-max='95' data-delay='.9' data-increment=1>95</p>
                                <h4>beverages</h4>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="tv-clients-block">
                                <span>01.</span>
                                <h4>Professional Staff</h4>
                                <p>Your staff represents you in front of customers. They are a key bridge to building good customer relationships and running your business at a profit. </p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="tv-clients-block">
                                <span>02.</span>
                                <h4>Consistency</h4>
                                <p>It’s important for restaurant managers and owners to be able to pinpoint where things need to improve in their restaurant. Often, when the food, the service,it’s a case of inconsistency.</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12">
                            <div class="tv-clients-block">
                                <span>03.</span>
                                <h4>Catering Service</h4>
                                <p>People already love our food, so why not capitalize on that and offer catering services as well? To help readers get started, I’ve put together a quick guide to restaurant catering.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Clients Section Ends Here...-->

        <!--Testimonials Section-->
        <section id="testimonials" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title text-center">
                        <span>Happy Customer Says</span>
                        <h2>Our Testimonials</h2>
                    </div>
                    <div id="myCarousel" class="carousel slide" data-ride="carousel">
                        <ol class="carousel-indicators">
                            <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                            <li data-target="#myCarousel" data-slide-to="1" class=""></li>
                            <li data-target="#myCarousel" data-slide-to="2" class=""></li>
                        </ol>
                        <div class="carousel-inner" role="listbox">
                            <div class="item active">
                                <div class="col-md-12">
                                    <div class="testimonial-slider">
                                        <p class="description">
                                        "The four of us had a wonderful time dining on delicious southern cuisine at LL Dents that satisfied our soul. Just as soul music touches deep into your emotions, so to does Dents food. And oh Lord that Peach Cobbler was smoking!!!"
                                        </p>
                                        <i class="fa fa-quote-left"></i>
                                        <h3 class="title">
                                            David Warner
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="testimonial-slider">
                                        <p class="description">
                                        A group of us from work went in tonight for our dinner break. Our server, Keith, was great, especially highlighting the specials. The food was outstanding, (Mom, don't look at this) better than homemade. We had a special treat when Ms. Dent came and sat with us and brought a sample of a drink she made. Go out of your way and try this place. It's worth the trip."
                                        </p>
                                        <i class="fa fa-quote-left"></i>
                                        <h3 class="title">
                                            Akash Alam
                                        </h3>
                                    </div>
                                </div>
                            </div>
                            <div class="item">
                                <div class="col-md-12 col-sm-12 col-xs-12">
                                    <div class="testimonial-slider">
                                        <p class="description">
                                        "I love receiving emails to see what's cookin' from time to time. My son will not let me forget how delicious your mashed potatoes were. We went to a soul food restaurant for my son's 23rd birthday on Saturday and he ordered mashed potatoes. One bite and he replied, " Nope. Not like LL Dent!"
                                        </p>
                                        <i class="fa fa-quote-left"></i>
                                        <h3 class="title">
                                            Sohel Rana
                                        </h3>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Testimonials Section Ends Here...-->

        <!--Blog Section-->
        <section id="blog" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="tv-section-title text-center">
                        <span>View The Latest Articles</span>
                        <h2>Our Blog</h2>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="tv-blog-img">
                            <div class="view view-fifth">
                                <img src="images/image43.jpg" class="width-100 img-responsive">
                                <div class="mask">
                                    <div class="tv-blog-info">
                                        <span>April 17,2018</span>
                                        <h4>Fried chicken</h4>
                                        <p>Fried chicken is a dish consisting of chicken pieces usually from broiler chickens which have been floured or battered and then pan-fried, deep fried, or pressure fried. </p>
                                        <a href="" class="btn btn-read">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="tv-blog-img">
                            <div class="view view-fifth">
                                <img src="images/Image45.jpg" class="width-100 img-responsive">
                                <div class="mask">
                                    <div class="tv-blog-info">
                                        <span>April 17,2017</span>
                                        <h4>Chicken sandwich</h4>
                                        <p>In North America, a chicken sandwich is a sandwich which typically consists of a boneless, skinless breast of chicken served between slices of bread, on a bun, or on a roll.</p>
                                        <a href="" class="btn btn-read">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-4 col-xs-12">
                        <div class="tv-blog-img">
                            <div class="view view-fifth">
                                <img src="images/Image44.jpg" class="width-100 img-responsive">
                                <div class="mask">
                                    <div class="tv-blog-info">
                                        <span>April 17,2018</span>
                                        <h4>Chicken Burgers</h4>
                                        <p>Bread crumbs and milk keep these chicken burgers unbelievably moist and flavourful. Try them at your next barbeque!</p>
                                        <a href="" class="btn btn-read">Read More</a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Blog Section Ends Here...-->

        <!--NewsLetter Section-->
        <section id="newsletter" class="tv-section-padding">
            <div class="newsletter-bg-img" style="background: rgba(0, 0, 0, 0) url('images/Image46.png') no-repeat scroll center top / cover;">
                <div class="container">
                    <div class="row">
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="tv-newsletter-title">
                                <h3>News Letter</h3>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-6 col-xs-12">
                            <div class="tv-newsletter-title">
                                <p>Sign up with your email to get updates fresh updates about our events...</p>
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-12 col-xs-12">
                            <div class="tv-newsletter-title">
                                <form>
                                    <div id="subscribe-block">
                                        <input class="form-control tv-newsletter-input" value="" required="" name="subscribe" placeholder="Enter Your Email Address" type="text">
                                        <button type="submit" href="login.php" class="btn subscribe-button">Sign Up</button>
                                    </div>
                                </form>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--NewsLetter Section Ends Here...-->

        <!--Footer Section-->
        <footer id="foodfooter" class="tv-section-padding">
            <div class="container">
                <div class="row">
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tv-footer-title">
                            <h3>Contact us</h3>
                        </div>
                        <div class="tv-footer-info">
                            <p>Zinda bazar, Sylhet <br>
                            Blue water shopping city: 5th floor <br>
                                Phone: +8801774334979 <br>
                                Telephone: +000000000 <br>
                                G-mail: akash.ap006@gmail.com
                            </p>
                            <div class="tv-social">
                                <div class="tv-social-navbar">
                                    <a href="http://www.fb.com/Abhra.Akash" target = "_blank"><span class="fa fa-facebook-f"></span></a>
                                    <a href=""><span class="fa fa-twitter"></span></a>
                                    <a href=""><span class="fa fa-google-plus"></span></a>
                                    <a href=""><span class="fa fa-linkedin"></span></a>
                                    <a href=""><span class="fa fa-pinterest"></span></a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="tv-clear-both col-md-4 col-sm-6 col-xs-12">
                        <div class="tv-footer-title">
                            <h3>Working Time</h3>
                        </div>
                        <div class="padding-0 col-md-6 col-sm-6 col-xs-6">
                            <div class="tv-footer-info">
                                <h5>Mon-Tue</h5>
                                <h5>Wed</h5>
                                <h5>Thu-Fri</h5>
                                <h5>Sat</h5>
                                <h5>Sun</h5>
                                <h5>Holidays</h5>
                            </div>
                        </div>
                        <div class="padding-0 col-md-6 col-sm-6 col-xs-6">
                            <div class="tv-footer-info">
                                <h5>09.00-22.00</h5>
                                <h5>08.30-20.30</h5>
                                <h5>9.45-19.55</h5>
                                <h5>10.00-20.45</h5>
                                <h5>08.00-19.10</h5>
                                <h5>Holidays</h5>
                            </div>
                        </div>
                    </div>
                    <div class="col-md-4 col-sm-6 col-xs-12">
                        <div class="tv-footer-title">
                            <h3>Menu Categories</h3>
                        </div>
                        <div class="padding-0 col-md-6 col-sm-6 col-xs-6">
                            <div class="tv-footer-info">
                                <ul class="footer-menu">
                                    <li>appetizers</li>
                                    <li>breakfast</li>
                                    <li>lunch</li>
                                    <li>dinner</li>
                                    <li>soups</li>
                                </ul>
                            </div>
                        </div>
                        <div class="padding-0 col-md-6 col-sm-6 col-xs-6">
                            <div class="tv-footer-info">
                                <ul class="footer-menu">
                                    <li>appetizers</li>
                                    <li>breakfast</li>
                                    <li>lunch</li>
                                    <li>dinner</li>
                                    <li>soups</li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
        <!--Footer Section Ends Here...-->

        <!--Backlink Section-->
        <section id="backlink" class="tv-section-padding">
            <div class="tv-backlink-bg-color">
                <div class="container">
                    <div class="row">
                        <div class="col-md-12 col-xs-12">
                            <div class="tv-backlink-info">
                                <!--Do not remove Backlink from footer of the template. To remove it you can purchase the Backlink !-->
                                <p>&copy;2019 Sky Food All right reserved. Design and Developed by <a href="https://www.github.com/AKASH-ALAM" target="_blank">Md. Labu mia</a> </p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
        <!--Backlink Section Ends Here...-->

        <a id="back-to-top" style="display: none;"><i class="tv-bounce fa fa-angle-double-up"></i></a>

        <!--Magnefic Popup Script-->
        <script>
            $(document).ready(function () {
                var $imagePopup = $('[data-image-popup]');
                /*Image*/
                $imagePopup.magnificPopup({
                    type: 'image',
                    gallery: {
                        enabled: true
                    }
                });
            });
        </script>
        <!--Magnefic Popup Script Ends Here..-->

        <!--Timer Script-->
        <script>
            function getTimeRemaining(endtime) {
                var t = Date.parse(endtime) - Date.parse(new Date());
                var seconds = Math.floor((t / 1000) % 60);
                var minutes = Math.floor((t / 1000 / 60) % 60);
                var hours = Math.floor((t / (1000 * 60 * 60)) % 24);
                var days = Math.floor(t / (1000 * 60 * 60 * 24) % 30.5);
                return {
                    'total': t,
                    'days': days,
                    'hours': hours,
                    'minutes': minutes,
                    'seconds': seconds,
                };
            }

            function initializeClock(id, endtime) {
                var clock = document.getElementById(id);
                var daysSpan = clock.querySelector('.days');
                var hoursSpan = clock.querySelector('.hours');
                var minutesSpan = clock.querySelector('.minutes');
                var secondsSpan = clock.querySelector('.seconds');

                function updateClock() {
                    var t = getTimeRemaining(endtime);
                    daysSpan.innerHTML = (('0' + t.days).slice(-2));
                    hoursSpan.innerHTML = ('0' + t.hours).slice(-2);
                    minutesSpan.innerHTML = ('0' + t.minutes).slice(-2);
                    secondsSpan.innerHTML = ('0' + t.seconds).slice(-2);

                    if (t.total <= 0) {
                        clearInterval(timeinterval);
                    }
                }

                updateClock();
                var timeinterval = setInterval(updateClock, 1000);
            }

            var deadline = new Date(Date.parse(new Date()) + 15 * 24 * 60 * 60 * 1000);
            initializeClock('tv-counter', deadline);
        </script>
        <!--Timer Script Ends Here...-->

        <!--Counter Script-->
        <script type="text/javascript">
            jQuery(document).ready(function ($) {
                $('.counter').counterUp({
                    delay: 20,
                    time: 1000
                });
            });
        </script>
        <!--Counter Script Ends Here...-->

        <!--Scrolling Script-->
        <script>
            $(document).ready(function () {
                $('[data-toggle="tooltip"]').tooltip();
                $(".navbar a, footer a[href='#myPage']").on('click', function (event) {

                    if (this.hash !== "") {

                        event.preventDefault();

                        // Store hash
                        var hash = this.hash;

                        $('html, body').animate({
                            scrollTop: $(hash).offset().top
                        }, 900, function () {

                            // Add hash (#) to URL when done scrolling (default click behavior)
                            window.location.hash = hash;
                        });
                    } // End if
                });
            });
        </script>
        <!--End Scrolling Script-->
        <script src="js/styleswitcher.js"></script>
    </body>
</html>