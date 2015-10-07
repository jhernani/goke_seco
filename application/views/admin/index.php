

	 <div class="ui grid container">

		<div class="forteen wide column">

			<div class="column">

				<h2 class="table-title"> Account </h2>

					<table class="ui red table">

						<thead>

							<tr>

								<th>User Id</th>
								<th>Username</th>
								<th>Password</th>
								<th>First Name</th>
								<th>Middle Name</th>
								<th>Last Name</th>
								<th>Email</th>
								<th>Phone</th>
								<th>Usertype</th>
								<th>Update</th>
								<th>Delete</th>
							
							</tr>

						</thead>
						<tbody>
						<?php foreach($users->result() as $user) {?>
							<tr>

								<td><?php echo $user->user_id; ?></td>
								<td><?php echo $user->username; ?></td>
								<td><?php echo $user->password; ?></td>
								<td><?php echo $user->first_name; ?></td>
								<td><?php echo $user->middle_name; ?></td>
								<td><?php echo $user->last_name; ?></td>
								<td><?php echo $user->email; ?></td>
								<td><?php echo $user->phone; ?></td>
								<td><?php echo $user->usertype; ?></td>
								<td><?php echo form_open('site/update_user_view')?>
									<input type="hidden" name="user_id" value="<?php echo $user->user_id ?>">
									<button class="ui primary button">Update</button>
									<?php echo form_close(); ?>
								</td>
								<td><?php echo form_open('site/delete_user')?>
									<input type="hidden" name="user_id" value="<?php echo $user->user_id ?>">
									<button class="ui red button "onclick="alert('Are you sure to delete this user?');">Delete</button>
									<?php echo form_close(); ?>
								</td>
								
							 </tr>
						<?php } ?>
						</tbody>
					
					</table>

			</div>

			
		</div>

	</div>
 
</body>