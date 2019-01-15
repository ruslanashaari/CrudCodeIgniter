<div class="row">
	<div class="card" style="width: 100%; margin: 10px;">
	  <div class="card-body">
	    <h5 class="card-title">Create</h5>
	    <h6 class="card-subtitle mb-2 text-muted">Creating new user</h6>
	    <br>

	    <?php if (!empty(validation_errors())) {?>
	    	<div class="alert alert-danger">
			    <label><?php echo validation_errors(); ?></label>
		    </div>
	    <?php }?>

	    <?php echo form_open('crud/store'); ?>
	    <table class="table">
	    	<tr>
	    		<td>Full Name:</td>
	    		<td><?php echo form_input('fullname', '', ['class' => 'form-control']); ?></td>
	    	</tr>
	    	<tr>
	    		<td>Username:</td>
	    		<td><?php echo form_input('username', '', ['class' => 'form-control']); ?></td>
	    	</tr>
	    	<tr>
	    		<td>Email:</td>
	    		<td><?php echo form_input('email', '', ['class' => 'form-control']); ?></td>
	    	</tr>
	    	<tr>
	    		<td>Password:</td>
				<td><?php echo form_password('password', '', ['class' => 'form-control']); ?></td>
	    	</tr>
	    </table>
	    <hr>
	    	<div class="row">
	    			<div class="col-md-12 text-center">
			    		<?php echo form_submit('mysubmit', 'Submit', ['class' => 'btn btn-primary form-control col-md-3']); ?>
	    			</div>
	    	</div>
	  </div>
	</div>
</div>
