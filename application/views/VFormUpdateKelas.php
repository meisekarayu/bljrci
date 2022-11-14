<form action="<?php echo site_url('Welcome/UpdateDataKelas'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
     <input type="hidden" name="kd_kelas" class="form-control" value="<?php echo $detail['kd_kelas']; ?>" ><br>
     <input type="text" name="nama_kelas" class="form-control" value="<?php echo $detail['nama_kelas']; ?>" ><br>
  </div>

  <button type="submit" name="btn_simpan" class="btn btn-primary" value="Simpan" >Submit</button>
 </form>