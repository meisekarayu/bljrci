<form action="<?php echo site_url('Welcome/UpdateDataKontak'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="hidden" name="kd_kontak" class="form-control" value="<?php echo $detail['kd_kontak']; ?>" ><br>
     <input type="text" name="nama_kontak" class="form-control" value="<?php echo $detail['nama_kontak']; ?>" ><br>
  </div>

  <button type="submit" name="btn_simpan" class="btn btn-primary" value="Simpan" >Submit</button>
 </form>
