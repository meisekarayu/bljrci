<form action="<?php echo site_url('Welcome/AddDataMatpel'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Kd</label>
    <input type="text" name="kd_matpel" class="form-control"><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama_matpel" class="form-control"><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">KKM</label>
    <input type="text" name="kkm" class="form-control"><br>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
 </form>