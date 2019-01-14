<div class="row">
	<div class="card" style="width: 100%; margin: 10px;">
		<div class="card-body">
			<h5 class="card-title">User List</h5>
		</div>
		<table class="table table-dark table-striped">
			<thead>
				<td>Id</td>
				<td>Email</td>
				<td>Username</td>
				<td>Name</td>
				<td>Action</td>
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