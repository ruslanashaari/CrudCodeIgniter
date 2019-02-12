<div class="row">
	<div class="card" style="width: 100%; margin: 10px;">
	  <div class="card-body">
	    <h5 class="card-title">Edit User</h5>
	    <h6 class="card-subtitle mb-2 text-muted">Editing user profile</h6>
	    <br>

	    @if (!empty(validation_errors()))
	    	<div class="alert alert-danger">
			    <label>{{ validation_errors(); }}</label>
		    </div>
	    @endif

	    {{ form_open('crud/update'); }}
	    {{ form_hidden('id', $user->id); }}
	    <table class="table">
	    	<tr>
	    		<td>Full Name:</td>
	    		<td>{{ form_input('fullname', $user->fullname, ['class' => 'form-control']); }}</td>
	    	</tr>
	    	<tr>
	    		<td>Username:</td>
	    		<td>{{ form_input('username', $user->username, ['class' => 'form-control']); }}</td>
	    	</tr>
	    	<tr>
	    		<td>Email:</td>
	    		<td>{{ form_input('email', $user->email, ['class' => 'form-control']); }}</td>
	    	</tr>
	    </table>
	    <hr>
	    	<div class="row">
	    			<div class="col-md-12 text-center">
			    		{{ form_submit('mysubmit', 'Update', ['class' => 'btn btn-primary form-control col-md-3']); }}
	    			</div>
	    	</div>
	  </div>
	</div>
</div>
