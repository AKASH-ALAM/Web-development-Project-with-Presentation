<?php
@session_start();
require_once 'model/singupModel.php';
/**
 *
 */
class singupController {

	function __construct() {

	}

	public function redirect($location) {
		header('Location: ' . $location);
	}

	public function handleRequest() {
		
		
		if (isset($_POST['signup'])) {
			$obs = new singupModel();
			$obs -> singup($_POST['email'], $_POST['firstname'], $_POST['lastname'], $_POST['number'], $_POST['passwd']);
			include 'view/home.php';
		} 
		
		else if (isset($_POST['signin'])) {
			$obs = new singupModel();			
			$r = $obs -> login($_POST['user'], $_POST['password']);
			if ($r == FALSE) {
				echo "<script type='text/javascript'>alert('Invalied user name or password')</script>";
				include 'view/home.php';
			} 
			else {				
				$_SESSION['user'] = $r -> Email;				
				$this->redirect('index.php');
				}
			
		}
		
		

		
		else if(isset($_POST['logout'])){
			$obs = new singupModel();
			$obs ->logout();
			$this -> redirect('index.php');
			
		}
	}

}
?>