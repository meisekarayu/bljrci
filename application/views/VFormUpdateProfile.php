<form action="<?php echo site_url('Welcome/UpdateDataProfile'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="hidden" name="kd_profile" class="form-control" value="<?php echo $detail['kd_profile']; ?>" ><br>
     <input type="text" name="nama_profile" class="form-control" value="<?php echo $detail['nama_profile']; ?>" ><br>
  </div>

  <button type="submit" name="btn_simpan" class="btn btn-primary" value="Simpan" >Submit</button>
 </form>
