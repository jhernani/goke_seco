

		<?php $attribute = array('class' => 'ui form segment hp');
			echo form_open('site/signup_validation',$attribute);
			echo validation_errors(); ?>

			<h2>Sign up</h2>
			<br>
			<div class="three fields">
				<div class="field">
					<label for="first-name">First Name</label>
					<input type="text" placeholder="First Name" name="first-name" id="first-name">
				</div>
				<div class="field">
					<label for="middle-name">Middle Name</label>
					<input type="text" placeholder="Middle Name" name="middle-name" id="middle-name">
				</div>
				<div class="field">
					<label for="last-name">Last Name</label>
					<input type="text" placeholder="Last Name" name="last-name" id="last-name">
				</div>	
			</div>

			<div class="field">
				<label for="username">Username</label>
				<input type="text" placeholder="Username" name="username" id="username">
			</div>
			<div class="field">
				<label for="password">Password</label>
				<input type="password" placeholder="Password" name="password" id="password" >
			</div>
			<div class="field">
				<label for="cpassword">Confirm Password</label>
				<input type="password" placeholder="Comfirm Password" name="cpassword" id="cpassword">
			</div>
			<div class="field">
				<label for="email">Email</label>
				<input type="text" placeholder="Email" name="email" id="email">
			</div>
			<div class="field">
				<label for="phone">Phone</label>
				<input type="text" placeholder="Phone" name="phone" id="phone">
			</div>

			<button class= "ui green submit button">Submit</button>
			
		</form>

