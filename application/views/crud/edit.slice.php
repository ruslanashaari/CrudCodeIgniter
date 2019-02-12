<div class="row">
	<div class="card" style="width: 100%; margin: 10px;">
	  <div class="card-body">
	    <h5 class="card-title">Edit User</h5>
	    <h6 class="card-subtitle mb-2 text-muted">Editing user profile</h6>
	    <br>

	    <?php if (!empty(validation_errors())) {?>
	    	<div class="alert alert-danger">
			    <label><?php echo validation_errors(); ?></label>
		    </div>
	    <?php }?>

	    <?php echo form_open('crud/update'); ?>
	    <?php echo form_hidden('id', $user->id); ?>
	    <table class="table">
	    	<tr>
	    		<td>Full Name:</td>
	    		<td><?php echo form_input('fullname', $user->fullname, ['class' => 'form-control']); ?></td>
	    	</tr>
	    	<tr>
	    		<td>Username:</td>
	    		<td><?php echo form_input('username', $user->username, ['class' => 'form-control']); ?></td>
	    	</tr>
	    	<tr>
	    		<td>Email:</td>
	    		<td><?php echo form_input('email', $user->email, ['class' => 'form-control']); ?></td>
	    	</tr>
	    </table>
	    <hr>
	    	<div class="row">
	    			<div class="col-md-12 text-center">
			    		<?php echo form_submit('mysubmit', 'Update', ['class' => 'btn btn-primary form-control col-md-3']); ?>
	    			</div>
	    	</div>
	  </div>
	</div>
</div>
