
<div class="col-md-4"></div>
<div class="col-md-4">
  <div class="panel panel-danger" style="margin-top:50px;">
    <div class="panel-heading">
      <center><h4>Tambah Data</h4></center>
    </div>
    <div class="panel-body">
      <form action="{{ url('home/tambahproses') }}" method="POST">
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="username" placeholder="Username">
        </div>
        <div class="form-group">
          <label>Name</label>
          <input type="text" class="form-control" name="name" placeholder="Name">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="Password" class="form-control" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-primary">Tambah</button>
        <a href="#" class="btn btn-danger" role="button" style="margin-left: 93px;">Kembali</a>
      </form>
    </div>
  </div>
</div>
<div class="col-md-4"></div>