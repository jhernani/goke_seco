	 <div class="ui grid container">

		<div class="forteen wide column">

			<div class="column">

				<h2 class="table-title"> Physical Report </h2>

				<table class="ui celled red structured table">

					<thead>

						<tr>
							<th rowspan="2">Id</th>
							<th rowspan="2">MFO</th>
							<th rowspan="2">Month/Year</th>
							<th rowspan="2">Project</th>
							<th rowspan="2">Performance Indicator</th>
							<th colspan="3">Target</th>
							<th colspan="4">Accomplishment</th>
							<th rowspan="2">Update</th>
							<th rowspan="2">Delete</th>
						</tr>
						<tr>
							<th>Annual </th>
							<th>This Month</th>
							<th>To Date</th>
							<th>This Month</th>
							<th>To Date</th>
							<th>%(ATM)</th>
							<th>%(ATD)</th>
							
						</tr>
	


					</thead>

					<tbody>
					<?php foreach($reports->result() as $report) {?>
						<tr>
							
							<td><?php echo $report->physical_id; ?></td>
							<td><?php echo $report->mfo; ?></td>
							<td><?php echo $report->month_year; ?></td>
							<td><?php echo $report->project; ?></td>
							<td><?php echo $report->performance_indicator; ?></td>
							<td><?php echo $report->annual_target; ?></td>
							<td><?php echo $report->target_this_month; ?></td>
							<td><?php echo $report->target_to_date; ?></td>
							<td><?php echo $report->accom_this_month; ?></td>
							<td><?php echo $report->accom_to_date; ?></td>
							<td><?php echo $report->percent_atm; ?></td>
							<td><?php echo $report->percent_atd; ?></td>

							<td><?php echo form_open('site/update_user')?>
								<input type="hidden" name="physical_id" value="<?php echo $report->physical_id ?>">
								<button class="mini ui primary button">Update</button>
								<?php echo form_close(); ?>
							</td>
							<td><?php echo form_open('site/delete_report')?>
								<input type="hidden" name="physical_id" value="<?php echo $report->physical_id ?>">
								<button class="mini ui red button">Delete</button>
								<?php echo form_close(); ?>
							</td>
											
						 </tr>
					<?php } ?>
					</tbody>
			
				</table>

			</div>


					