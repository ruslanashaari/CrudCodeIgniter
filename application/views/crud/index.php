<div class="row">
	<div class="card" style="width: 24%; margin: 5px;">
	  <div class="card-body">
	    <h5 class="card-title">New User</h5>
	    <p class="card-text text-muted">Implementation of inserting new user record into database.</p>
	    <a href="<?php echo base_url() . 'crud/create' ?>" class="btn btn-primary">Create</a>
	  </div>
	</div>
	<div class="card" style="width: 24%; margin: 5px;">
	  <div class="card-body">
	    <h5 class="card-title">New User</h5>
	    <p class="card-text text-muted">Implementation of inserting new user record into database.</p>
	    <a href="<?php echo base_url() . 'crud/create' ?>" class="btn btn-success">Create</a>
	  </div>
	</div>
	<div class="card" style="width: 24%; margin: 5px;">
	  <div class="card-body">
	    <h5 class="card-title">New User</h5>
	    <p class="card-text text-muted">Implementation of inserting new user record into database.</p>
	    <a href="<?php echo base_url() . 'crud/create' ?>" class="btn btn-warning">Create</a>
	  </div>
	</div>
	<div class="card" style="width: 24%; margin: 5px;">
	  <div class="card-body">
	    <h5 class="card-title">New User</h5>
	    <p class="card-text text-muted">Implementation of inserting new user record into database.</p>
	    <a href="<?php echo base_url() . 'crud/create' ?>" class="btn btn-danger">Create</a>
	  </div>
	</div>

	<div class="card" style="width: 100%; margin: 10px;">
		<div class="card-body">
			<h5 class="card-title">User List</h5>
		</div>
		<table class="table table-striped css-serial">
			<thead>
				<tr>
					<th>#</th>
					<th>Email</th>
					<th>Username</th>
					<th>Name</th>
					<th>Action</th>
				</tr>
			</thead>
			<?php foreach ($users as $user) {?>
				<tr>
					<td></td>
					<td><?php echo $user['email']; ?></td>
					<td><?php echo $user['username']; ?></td>
					<td><?php echo $user['fullname']; ?></td>
					<td></td>
				</tr>
			<?php }?>
		</table>
	</div>
</div>