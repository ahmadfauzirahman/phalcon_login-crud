<h1>WELCOME</h1>

<a href="{{ url('home/tambah') }}" class="btn btn-primary" role="button">Tambah</a>
<a href="{{ url('login/logout') }}" class="btn btn-danger" role="button" style="margin-left: 788px;">Logout</a>

<table class="table table-condensed" border="1" style="margin-top:20px;">
	<tr class="danger">
			<td>ID</td>
			<td>Names</td>
			<td>Username</td>
			<td>Password</td>
			<td>Action</td>
	</tr>
	<tr>
		<tbody>
			{% for x in data %}
				<tr>
					<td>{{ x.id }}</td>
					<td>{{ x.name }}</td>
					<td>{{ x.username }}</td>
					<td>{{ x.password }}</td>
					<td><a href="{{ url('home/edit/') }}{{ x.id }}" class="btn btn-primary">Edit</a>
						<a href="{{ url('home/delete/') }}{{ x.id }}" class="btn btn-danger">Delete</a>
					</td>
				</tr>
			{% endfor %}
		</tbody>
	</tr>
</table>