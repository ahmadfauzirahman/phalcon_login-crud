
<div class="col-md-4"></div>
<div class="col-md-4">
  <div class="panel panel-danger" style="margin-top:50px;">
    <div class="panel-heading">
      <center><h4>Edit Data</h4></center>
    </div>
    <div class="panel-body">
      <form action="<?= $this->url->get('home/editproses') ?>" method="POST">
      <input type="hidden" name="id" value="<?= $data->id ?>">
        <div class="form-group">
          <label>Names</label>
          <input type="text" class="form-control" name="name" value="<?= $data->name ?>">
        </div>
        <div class="form-group">
          <label>Username</label>
          <input type="text" class="form-control" name="username" value="<?= $data->username ?>">
        </div>
        <div class="form-group">
          <label>Password</label>
          <input type="Password" class="form-control" name="password" value="<?= $data->password ?>">
        </div>
        <button type="submit" class="btn btn-primary">Edit</button>
        <a href="<?= $this->url->get('home') ?>" class="btn btn-danger" role="button" style="margin-left: 100px;">Kembali</a>
      </form>
    </div>
  </div>
</div>
<div class="col-md-4"></div>