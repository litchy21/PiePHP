<div id="body-content">
	<section id="page" class="container">
		<section class="row">
			<form class="form-horizontal formulaire" method="POST">
				<fieldset>
					<legend>Register</legend>
					<div class="form-group">
						<label class="col-md-4 control-label" for="name">First Name</label>  
						<div class="col-md-4">
							<input id="name" name="name" type="text" placeholder="Enter your first name ..." class="form-control input-md" required="">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="surname">Surname</label>  
						<div class="col-md-4">
							<input id="surname" name="surname" type="text" placeholder="Enter your surname ..." class="form-control input-md" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="city">City</label>  
						<div class="col-md-4">
							<input id="city" name="city" type="text" placeholder="Enter your city ..." class="form-control input-md" required="">
						</div>
					</div>
					<div class="form-group">
						<label class="col-md-4 control-label" for="birth">Birth Date</label>  
						<div class="col-md-4">
							<input id="birth" name="birth" type="text" placeholder="Enter your birth date (yyyy-mm-dd) ..." class="form-control input-md" required="">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="email">Email</label>  
						<div class="col-md-4">
							<input id="email" name="email" type="text" placeholder="Enter your email ..." class="form-control input-md" required="">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="password">Password</label>
						<div class="col-md-4">
							<input id="password" name="password" type="password" placeholder="Enter your password ..." class="form-control input-md" required="">
						</div>
					</div>

					<div class="form-group">
						<label class="col-md-4 control-label" for="submit"></label>
						<div class="col-md-4">
							<button id="submit" class="btn btn-success">Register</button>
						</div>
					</div>
				</fieldset>
			</form>
		</section>
		<button class="btn log btn-lg" id="button-login" style="width:auto; margin-bottom: 50px;" onclick="window.location.href='login'">Already registered ?</button>
		<section>
			<?php 
            if (isset($error)) {
                echo $error;
            }
            if (isset($success)) {
                echo $success;
            }
            ?>
		</section>
	</section>
</div>