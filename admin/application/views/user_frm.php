<?php
    $id = "";
    $username = "";
    $role = "";
    if(isset($data)){
        $id = $data->id;
        $username = $data->username;
        $role = $data->role;
    }
?>

<form action="<?php echo $action?>" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Username</label>
    <input type="hidden" value="<?php echo $id?>" class="form-control" id="exampleFormControlInput1" placeholder="" name="id">
    <input type="text" value="<?php echo $username?>" class="form-control" id="exampleFormControlInput1" placeholder="" name="username">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Password</label>
    <input type="passwrod" class="form-control" id="exampleFormControlInput2" name="password">
  </div>
  <div class="form-group">
    <label for="exampleFormControlSelect2">Role</label>
    <select class="form-control" id="exampleFormControlSelect2" name="role">
      <option value="admin" <?php echo $role == "admin" ? "selected" : ""?>>Admin</option>
      <option value="kasir" <?php echo $role == "kasir" ? "selected" : ""?>>Kasir</option>
      <option value="koki" <?php echo $role == "koki" ? "selected" : ""?>>Koki</option>
    </select>
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
    <button type="button" class="btn btn-muted">Back</button>
  </div>
</form>