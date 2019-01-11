<div class="row">
	<div class="card" style="width: 100%; margin: 10px;">
	  <div class="card-body">
	    <h5 class="card-title">Create</h5>
	    <h6 class="card-subtitle mb-2 text-muted">Creating data</h6>
	    <br>

	    <?php echo form_open('crud/store'); ?>
	    <label>Username: </label>
	    <?php echo form_input('username', ''); ?><br>
	    <label>Password: </label>
	    <?php echo form_password('password', ''); ?>
	  </div>
	</div>
</div>
