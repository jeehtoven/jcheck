<!DOCTYPE html>
<html lang="en">
	<head>
		<meta charset="utf-8">
			<meta http-equiv="X-UA-Compatible" content="IE=edge">
				<meta name="viewport" content="width=device-width, initial-scale=1">
					<!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
					<title>jcheck</title>

					<!-- Bootstrap -->
					<link href="bootstrap-3.3.7-dist/css/bootstrap.min.css" rel="stylesheet">
						<link href="bootstrap-3.3.7-dist/custom/styles.css" rel="stylesheet">

							<!-- HTML5 shim and Respond.js for IE8 support of HTML5 elements and media queries -->
							<!-- WARNING: Respond.js doesn't work if you view the page via file:// -->
							<!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
						</head>
						<body>
							<div class="container">
								<div class="row">
									<div class="col-sm-6 col-md-4 col-md-offset-4">
										<h1 class="text-center login-title">jcheck Registration Form</h1>
										<div class="account-wall">
											<img class="profile-img" src="login.png"
                    alt="">
												<form class="form-horizontal" action='adduser.php' method="POST">
													<fieldset>
														<div class="control-group">
															<!-- First Name -->
															<label class="control-label"  for="firstname">First Name</label>
															<div class="controls">
																<input type="text" id="firstname" name="firstname" placeholder="" class="input-xlarge">
																	<p class="help-block">Enter your first name.</p>
																</div>
															</div>

															<div class="control-group">
																<!-- Last Name -->
																<label class="control-label"  for="firstname">Last Name</label>
																<div class="controls">
																	<input type="text" id="lastname" name="lastname" placeholder="" class="input-xlarge">
																		<p class="help-block">Enter your last name.</p>
																	</div>
																</div>

																<div class="control-group">
																	<!-- Handle -->
																	<label class="control-label"  for="handle">Handle</label>
																	<div class="controls">
																		<input type="text" id="handle" name="handle" placeholder="" class="input-xlarge">
																			<p class="help-block">Your handle can contain any letters or numbers, without spaces</p>
																		</div>
																	</div>

																	<div class="control-group">
																		<!-- E-mail -->
																		<label class="control-label" for="email">E-mail</label>
																		<div class="controls">
																			<input type="text" id="email" name="email" placeholder="" class="input-xlarge">
																				<p class="help-block">Please provide your E-mail</p>
																			</div>
																		</div>

																		<div class="control-group">
																			<!-- Password-->
																			<label class="control-label" for="password">Password</label>
																			<div class="controls">
																				<input type="password" id="password" name="password" placeholder="" class="input-xlarge">
																					<p class="help-block">Password should be at least 4 characters</p>
																				</div>
																			</div>

																			<div class="control-group">
																				<!-- Password -->
																				<label class="control-label"  for="password_confirm">Password (Confirm)</label>
																				<div class="controls">
																					<input type="password" id="password_confirm" name="password_confirm" placeholder="" class="input-xlarge">
																						<p class="help-block">Please confirm password</p>
																					</div>
																				</div>

																				<div class="control-group">
																					<!-- Button -->
																					<div class="controls">
																						<button class="btn btn-success">Register</button>
																					</div>
																				</div>
																			</fieldset>
																		</form>
																	</div>
																</div>
															</div>
														</div>
														<!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
														<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"/>
														<!-- Include all compiled plugins (below), or include individual files as needed -->
														<script src="bootstrap-3.3.7-dist/js/bootstrap.min.js"/>
													</body>
												</html>