<div class="row">
	<div class="card" style="width: 100%; margin: 10px;">
	  <div class="card-body">
	    <h5 class="card-title">Create</h5>
	    <h6 class="card-subtitle mb-2 text-muted">Creating new user</h6>
	    <br>

	    @if (!empty(validation_errors()))
	    	<div class="alert alert-danger">
			    <label>{{ validation_errors(); }}</label>
		    </div>
	    @endif

	    {{ form_open('crud/store'); }}
	    <table class="table">
	    	<tr>
	    		<td>Full Name:</td>
	    		<td>{{ form_input('fullname', '', ['class' => 'form-control']); }}</td>
	    	</tr>
	    	<tr>
	    		<td>Username:</td>
	    		<td>{{ form_input('username', '', ['class' => 'form-control']); }}</td>
	    	</tr>
	    	<tr>
	    		<td>Email:</td>
	    		<td>{{ form_input('email', '', ['class' => 'form-control']); }}</td>
	    	</tr>
	    	<tr>
	    		<td>Password:</td>
				<td>{{ form_password('password', '', ['class' => 'form-control']); }}</td>
	    	</tr>
	    </table>
	    <hr>
	    	<div class="row">
	    			<div class="col-md-12 text-center">
			    		{{ form_submit('mysubmit', 'Submit', ['class' => 'btn btn-primary form-control col-md-3']); }}
	    			</div>
	    	</div>
	  </div>
	</div>
</div>
