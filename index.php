

<!DOCTYPE html>
<html>
<head>
	<title>Bootstrap Examples</title>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">


	<!-- CDN LINK for Bootstrap CSS -->
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/css/bootstrap.min.css" integrity="sha384-BVYiiSIFeK1dGmJRAkycuHAHRg32OmUcww7on3RYdg4Va+PmSTsz/K68vbdEjh4u" crossorigin="anonymous">
</head>
<body>
	<div class="container" style="color: green">
		<h1>PHP Form Processing</h1>
	</div>
	<div class="container">
		<h4>Registration Form</h4>

		<!-- Form Body -->
		<form action="formProcessor.php" method="post" class="form-horizontal">
			<div class="form-group has-success">
				<label class="control-label col-sm-2" for="first_name">First Name</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="first_name" id="first_name" placeholder="Enter your First Name">
                    <span style="color:red">
                    <?php 
                    displayErrorMessage("first_name");
                    ?></span>
                </div>
			</div>
			<div class="form-group has-success">
				<label class="control-label col-sm-2" for="last_name">Last Name</label>
				<div class="col-sm-6">
					<input class="form-control" type="text" name="last_name" id="last_name" placeholder="Enter your Last Name">
                    <span style="color:red">
                    <?php 
                    displayErrorMessage("last_name");
                    ?></span>
                </div>
			</div>
			<div class="form-group has-success">
				<label class="control-label col-sm-2" for="email">Email</label>
				<div class="col-sm-6">
					<input class="form-control" type="email" name="email" id="email" placeholder="Enter your Email">
                    <span style="color:red">
                    <?php 
                    displayErrorMessage("email");
                    ?></span>
                </div>
			</div>
			<div class="form-check">
				<div class="col-sm-2"></div>
				<input type="radio" name="gender[]" class="form-check-input" id="gender" value="male[]">
				<label for="male" class="form-check-label has-success">Male</label>
            </div>
			<div class="form-check">
				<div class="col-sm-2"></div>
				<input type="radio" name="gender[]" class="form-check-input" id="gender" value="female[]">
				<label for="male" class="form-check-label has-success">Female</label>
               
            </div>
              <span style="color:red">
                <?php 
                    displayErrorMessage("gender");
                    ?></span>
            </div>
			<div class="form-group has-success">
				<label class="control-label col-sm-2" for="selected_option">One Selection</label>
				<div class="col-sm-6">
					<select class="form-control" name="selected_option[]" id="selected_option[]">
						<option value="one"> Option One</option>
						<option value="two"> Option Two</option>
		    				<option value="three"> Option Three</option>
						<option value="four"> Option Four</option>
					</select>
				</div>
			</div>
			<div class="form-group has-success">
				<label class="control-label col-sm-2" for="multiple_selection">Multiple Selection</label>
				<div class="col-sm-6">
					<select class="form-control" multiple name="multiple_selection[]" id="multiple_selection">
						<option value="english">ENGLISH</option>
						<option value="math">MATHS</option>
						<option value="computer">COMPUTER</option>
						<option value="physics">PHYSICS</option>
						<option value="chemistry">CHEMISTRY</option>
					</select>
				</div>
			</div>
			<div class="form-group has-success">
				<label class="control-label col-sm-2" for="comment">Comments</label>
				<div class="col-sm-6">
					<textarea class="form-control" name="comment" id="comment"></textarea>
				</div>
			</div>
			<div class="form-check">
				<div class="col-sm-2"></div>
				<input type="checkbox" name="language[]" class="form-check-input" id="language" value="PHP">
				<label for="PHP" class="form-check-label has-success">I Like PHP</label>
			</div>
			<div class="form-check">
				<div class="col-sm-2"></div>
				<input type="checkbox" name="language[]" class="form-check-input" id="language" value="javascript">
				<label for="javascript" class="form-check-label has-success">I Like JavaScript</label>
			</div>

			<div class="container">
				<div class="col-sm-2"></div>
				<button type="submit" name="submit" class="btn btn-success">Register</button>
			</div>
		</form>
	</div>

	<!-- Link to JQuery -->
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>

	<!-- Link to Bootstrap JavaScript -->
	<script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.7/js/bootstrap.min.js" integrity="sha384-Tc5IQib027qvyjSMfHjOMaLkfuWVxZxUPnCJA7l2mCWNIpG9mGCD8wGNIcPD7Txa" crossorigin="anonymous"></script>
</body>
</html>

