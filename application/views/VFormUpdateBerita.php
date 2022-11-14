<form action="<?php echo site_url('Welcome/UpdateDataBerita'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="hidden" name="kd_berita" class="form-control" value="<?php echo $detail['kd_berita']; ?>" ><br>
    <input type="text" name="nama_berita" class="form-control" value="<?php echo $detail['nama_berita']; ?>" ><br>
  </div>
 
  <button type="submit" name="btn_simpan" class="btn btn-primary" value="Simpan" >Submit</button>
 </form>
