<div class="container" style="margin-top:100px">
	<div class="col-md-4"></div>
	<div class="col-md-4">
		<form action="{{ url('Login/proses') }}" method="POST">
		  <div class="form-group">
		    <label>Username</label>
		    <input type="text" class="form-control" name="username" placeholder="Username">
		  </div>
		  <div class="form-group">
		    <label>Password</label>
		    <input type="password" class="form-control" name="password" placeholder="Password">
		  </div>
		  <input type="hidden" name="<?php echo $this->security->getTokenKey() ?>"
        value="<?php echo $this->security->getToken() ?>"/>
		  <button type="submit" class="btn btn-default">Submit</button>
		</form>
	</div>
	<div class="col-md-4"></div>
	
</div>

