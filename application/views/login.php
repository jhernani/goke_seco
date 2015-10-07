	
	<?php $attribute = array('class' => 'ui form segment hp','id' => 'id_ni');
	echo form_open('site/login_validation',$attribute);
	echo validation_errors(); ?>
	<!-- <form class="ui form segment"> -->
	<h2>Sign In</h2>
	<br>

		<div class="field">
			<label for="username">Username</label>
			<input type="text" placeholder="Username" name="username" id="username">
		</div>

		<div class="field">
			<label for="password">Password</label>
			<input type="password" placeholder="Password" name="password" id="password">
		</div>

		<button class= "ui green submit button">Submit</button>

	</form>
