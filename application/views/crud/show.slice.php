<div class="row">
	<div class="card" style="width: 100%; margin: 10px;">
		<div class="card-body">
			<h5 class="card-title">
				User Profile
			    	<a href="<?php echo base_url('crud/edit/' . $user->id) ?>" class="btn btn-primary float-right">Edit Profile</a>
			</h5>
		</div>
		<table class="table table-striped">
	    	<tr>
	    		<td>Name:</td>
	    		<td><label class="form-control"><?php echo $user->fullname; ?></label></td>
	    	</tr>
	    	<tr>
	    		<td>Username:</td>
	    		<td><label class="form-control"><?php echo $user->username; ?></label></td>
	    	</tr>
	    	<tr>
	    		<td>Email:</td>
	    		<td><label class="form-control"><?php echo $user->email; ?></label></td>
	    	</tr>
	    </table>
	</div>
</div>