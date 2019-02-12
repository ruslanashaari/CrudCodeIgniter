<div class="row">
	<div class="card" style="width: 24%; margin: 5px; color: red;">
	  <div class="card-body">
	  	<h1 class="text-center" style="font-size: 100px;">{{ $total_users }}</h1>
	  </div>
	  <div class="card-footer" style="background-color: #007bff;">
	  	<h2 class="text-center" style="color: white;">Total Users</h2>
	  </div>
	</div>
	<div class="card" style="width: 24%; margin: 5px; color: red;">
	  <div class="card-body">
	  	<h1 class="text-center" style="font-size: 100px;">90</h1>
	  </div>
	  <div class="card-footer" style="background-color: #2c3e50;">
	  	<h2 class="text-center" style="color: white;">Verified Users</h2>
	  </div>
	</div>
	<div class="card" style="width: 24%; margin: 5px; color: red;">
	  <div class="card-body">
	  	<h1 class="text-center" style="font-size: 100px;">90</h1>
	  </div>
	  <div class="card-footer" style="background-color: #EA2027;">
	  	<h2 class="text-center" style="color: white;">Total Users</h2>
	  </div>
	</div>
	<div class="card" style="width: 24%; margin: 5px; color: red;">
	  <div class="card-body">
	  	<h1 class="text-center" style="font-size: 100px;">90</h1>
	  </div>
	  <div class="card-footer" style="background-color: #5f27cd;">
	  	<h2 class="text-center" style="color: white;">Total Users</h2>
	  </div>
	</div>

	<div class="card" style="width: 100%; margin: 10px;">
		<div class="card-body">
			<h5 class="card-title">
				Users
			    <a href="{{ base_url() . 'crud/create' }}" class="btn btn-primary float-right">Create User</a>
			</h5>
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
			@foreach($users as $user)
				<tr>
					<td></td>
					<td>{{ $user->email; }}</td>
					<td>{{ $user->username; }}</td>
					<td>{{ $user->fullname; }}</td>
					<td>
						<a href="{{ base_url() . 'crud/show/' . $user->id; }}" class="btn btn-info btn-sm">View</a>
						<a href="{{ base_url() . 'crud/edit/' . $user->id; }}" class="btn btn-warning btn-sm">Edit</a>
						<a href="{{ base_url() . 'crud/destroy/' . $user->id; }}" class="btn btn-danger btn-sm">Delete</a>
					</td>
				</tr>
			@endforeach
		</table>
	</div>
</div>
