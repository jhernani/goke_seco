	<div class="ui grid container">

		<div class="forteen wide column">

			<div class="column">

		<?php $attribute = array('class' => 'ui form segment');
			echo form_open('site/update_user',$attribute);
			echo validation_errors(); 
			 ?>
			

			<h2>Update User</h2>
			<br>

				<input type="hidden" name="user-id" value=""> 

			<div class="three fields">
				<div class="field">
					<label for="first-name">First Name</label>
					<input type="text" value="" name="first-name" id="first-name">
				</div>
				<div class="field">
					<label for="middle-name">Middle Name</label>
					<input type="text" value="" name="middle-name" id="middle-name">
				</div>
				<div class="field">
					<label for="last-name">Last Name</label>
					<input type="text" value="" name="last-name" id="last-name">
				</div>	
			</div>
			<div class="two fields">
				<div class="field">
					<label for="username">Username</label>
					<input type="text" value="" name="username" id="username">
				</div>
				<div class="field">
					<label for="password">Password</label>
					<input type="password" value="" name="password" id="password" >
				</div>
			</div>
			<div class="field">
				<label for="email">Email</label>
				<input type="text" value="" name="email" id="email">
			</div>
			<div class="field">
				<label for="phone">Phone</label>
				<input type="text" value="" name="phone" id="phone">
			</div>

			<button class= "ui green submit button">Submit</button>
			
		</form>

		</div>
		</div>
		</div>