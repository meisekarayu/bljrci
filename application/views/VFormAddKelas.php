<form action="<?php echo site_url('Welcome/AddDataKelas'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Kd</label>
    <input type="text" name="kd_kelas" class="form-control"><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="text" name="nama_kelas" class="form-control"><br>
  </div>

  <button type="submit" class="btn btn-primary">Submit</button>
 </form>