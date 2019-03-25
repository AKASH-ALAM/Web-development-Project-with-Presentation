<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <!--[if IE]><meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1"><![endif]-->
    
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <meta name="description" content="Neon Admin Panel" />
    <meta name="author" content="Laborator.co" />
    
    <title>Sam's Slim Gym | Login</title>

    <link rel="stylesheet" href="../neon/js/jquery-ui/css/no-theme/jquery-ui-1.10.3.custom.min.css"  id="style-resource-1">
    <link rel="stylesheet" href="../neon/css/font-icons/entypo/css/entypo.css"  id="style-resource-2">
    <link rel="stylesheet" href="../neon/css/font-icons/entypo/css/animation.css"  id="style-resource-3">
    <link rel="stylesheet" href="../neon/css/neon.css"  id="style-resource-5">
    <link rel="stylesheet" href="../neon/css/custom.css"  id="style-resource-6">

    <script src="../neon/js/jquery-1.10.2.min.js"></script>

</head>

<body class="page-body login-page login-form-fall">
	<div id="container">
		<div class="login-container">
			
			<div class="login-header login-caret">
				
				<div class="login-content">
					
					<a href="#" class="logo">
						<img src="icon.png" alt="" />
					</a>
			
				</div>
				
			</div>
			
			<div class="login-form">
				
				<div class="login-content">
					
					<form action="change_s_pwd.php" method="POST" id="bb">	

						<div class="form-group">					
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-user"></i>
								</div>
									<input type="text" class="form-control" name="login_id" placeholder="Your Login ID" data-rule-required="true" data-rule-minlength="6"/>
							</div>
						</div>				
										
						<div class="form-group">					
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-key"></i>
								</div>
								<input type="text" name="login_key"  class="form-control" placeholder="Your secert key" data-rule-required="true" data-rule-minlength="6">
							</div>				
						</div>

						<div class="form-group">					
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-key"></i>
								</div>
								<input type="password" name="pwfield" id="pwfield" class="form-control" data-rule-required="true" data-rule-minlength="6" placeholder="Your new passowrd">
							</div>				
						</div>

						<div class="form-group">					
							<div class="input-group">
								<div class="input-group-addon">
									<i class="entypo-key"></i>
								</div>
								<input type="password" name="confirmfield" id="confirmfield" class="form-control" data-rule-equalto="#pwfield" data-rule-required="true" data-rule-minlength="6" placeholder="Confirm Your new passowrd">
							</div>				
						</div>
						
						<div class="form-group">
							<button type="Submit" name="btnLogin" class="btn btn-primary">
								Login In
								<i class="entypo-login"></i>
							</button>
							<button type="button" class="btn btn-primary">Cancel</button>
						</div>
					</form>
				
				</div>
				
			</div>
			
		</div>
	</div>	
		
    <script src="../neon/js/gsap/main-gsap.js" id="script-resource-1"></script>
    <script src="../neon/js/jquery-ui/js/jquery-ui-1.10.3.minimal.min.js" id="script-resource-2"></script>
    <script src="../neon/js/bootstrap.min.js" id="script-resource-3"></script>
    <script src="../neon/js/joinable.js" id="script-resource-4"></script>
    <script src="../neon/js/resizeable.js" id="script-resource-5"></script>
    <script src="../neon/js/neon-api.js" id="script-resource-6"></script>
    <script src="../neon/js/jquery.validate.min.js" id="script-resource-7"></script>
    <script src="../neon/js/neon-login.js" id="script-resource-8"></script>
    <script src="../neon/js/neon-custom.js" id="script-resource-9"></script>
    <script src="../neon/js/neon-demo.js" id="script-resource-10"></script>
    </body>
</html>    	


