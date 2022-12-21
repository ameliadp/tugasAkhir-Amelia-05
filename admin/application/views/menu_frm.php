<?php
    $id = "";
    $gambar = "";
    $nama = "";
    $harga = "";
    if(isset($data)){
        $id = $data->id;
        $gambar = $data->gambar;
        $nama = $data->nama;
        $harga = $data->harga;
    }
?>

<form action="<?php echo $action?>" method="post">
  <div class="form-group">
    <label for="exampleFormControlInput1">Gambar</label>
    <input type="hidden" value="<?php echo $id?>" class="form-control" id="exampleFormControlInput1" placeholder="" name="id">
    <input type="file" value="<?php echo $gambar?>" class="form-control" id="exampleFormControlInput1" placeholder="" name="gambar">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Nama Menu</label>
    <input type="text" class="form-control" id="exampleFormControlInput2" name="nama">
  </div>
  <div class="form-group">
    <label for="exampleFormControlInput2">Harga</label>
    <input type="text" class="form-control" id="exampleFormControlInput3" name="harga">
  </div>
  <div>
    <button type="submit" class="btn btn-primary">Submit</button>&nbsp;&nbsp;
    <button type="button" class="btn btn-muted">Back</button>
  </div>
</form>