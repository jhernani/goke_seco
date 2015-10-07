<?php $attribute = array('class' => 'ui form segment');
	echo form_open('site/add_report',$attribute);
	echo validation_errors(); ?>
	<!-- <form class="ui form segment"> -->
	<h2>Physical Report</h2>
	<br>

		<div class="field">
			<label for="project">Project</label>
			<input type="text" placeholder="Project" name="project" id="project">
		</div>

	 	<div class="field">
			<label for="performance-indicator">Performance Indicator</label>
			<input type="text" placeholder="Performance Indicator" name="performance-indicator" id="performance-indicator">
		</div>

		<div class="field">
			<label for="annual-target">Annual Target</label>
			<input type="number" placeholder="Annual Target" name="annual-target" id="annual-target">
		</div>

		<div class="field">
			<label for="target-this-month">Target This Month</label>
			<input type="number" placeholder="Target This Month" name="target-this-month" id="target-this-month">
		</div>

		<div class="field">
			<label for="target-to-date">Annual To Date</label>
			<input type="number" placeholder="Annual To Date" name="target-to-date" id="targe-to-date">
		</div> 

		<button class= "ui green submit button">Submit</button>

	</form>