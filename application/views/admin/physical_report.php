	<div class="ui grid centered container">
	
	<div class="fourteen wide column">

	<div class="column">

	<h2>Create Physical Accomplishment Monitoring Report</h2>

	<?php $attribute = array('class' => 'ui form segment success');
	echo form_open('site/add_report',$attribute);
	echo validation_errors(); ?>

	<br>

	<div class="four fields">	

		<div class="field">
			<label for="mfo">MFO</label>
			<input type="number" placeholder="MFO Number" name="mfo" id="mfo" min="1" max="3">
		</div>

		<div class="field">
			<label for="project">Program/Project/Activity(PPA)</label>
			<input type="text" placeholder="PPA Name" name="project" id="project">
		</div>

		<div class="field">
			<label for="month-year">Month/Year</label>
			<input type="text" placeholder="Month/Year" name="month-year" id="month-year">
		</div>

	 	<div class="field">
			<label for="performance-indicator">Performance Indicator</label>
			<input type="text" placeholder="Performance Indicator" name="performance-indicator" id="performance-indicator">
		</div>

	</div>	

	<h4 class="ui dividing header">Target</h4>
	<div class="three fields">

		<div class="field">
			<label for="annual-target">Annual Target</label>
			<input type="number" placeholder="Annual Target" name="annual-target" id="annual-target">
		</div>

		<div class="field">
			<label for="target-this-month">Target This Month</label>
			<input type="number" placeholder="Target This Month" name="target-this-month" id="target-this-month">
		</div>

		<div class="field">
			<label for="target-to-date">Target To Date</label>
			<input type="number" placeholder="Target To Date" name="target-to-date" id="target-to-date">
		</div> 

	</div>
	<h4 class="ui dividing header"> Accomplishment</h4>
	<div class="two fields">

		<div class="field">
			<label for="accom-this-month">Accomplishment This Month</label>
			<input type="number" placeholder="Accomplishment This Month" name="accom-this-month" id="accom-this-month">
		</div>

		<div class="field">
			<label for="accom-to-date">Accomplishment To Date</label>
			<input type="number" placeholder="Accomplishment To Date" name="accom-to-date" id="accom-to-date">
		</div> 
		
	</div>

		<button class= "ui green submit button">Submit</button>

	</form>

	</div>

	</div>
	
	</div>