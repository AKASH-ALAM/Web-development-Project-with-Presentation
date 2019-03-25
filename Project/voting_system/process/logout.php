<?php
//Start session
session_start();

session_destroy();
header("location: http://localhost/voting_system/index.php");
exit();