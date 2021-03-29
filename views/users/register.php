<div class="card">
  <div class="card-header">
    <h3 class="card-title">Register User</h3>
  </div>
  <div class="card-body">
      <form method="post" action="<?php $_SERVER['PHP_SELF'];?>">
      <div class="form-group">
        <label>Name</label>
        <input type="text" name="name" class="form-control" />
      </div>
      <div class="form-group">
        <label>Email</label>
        <input type="text" name="email" class="form-control" />
      </div>
      <div class="form-group">
        <label>Password</label>
        <input type="password" name="pass" class="form-control" />
      </div>
      <input type="submit" class="btn btn-primary" name="submit" value="Submit" />
      <a class="btn btn-danger" href="<?php echo ROOT_PATH; ?>home">Cancel</a>
      </form>
  </div>
</div>