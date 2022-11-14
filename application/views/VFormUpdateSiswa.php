<form action="<?php echo site_url('Welcome/UpdateDataSiswa'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="hidden" name="nis" class="form-control" value="<?php echo $detail['nis']; ?>" ><br>
     <input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>" ><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Alamat</label>
    <input type="text" name="alamat" class="form-control" value="<?php echo $detail['alamat']; ?>" ><br>
  </div>

  <button type="submit" name="btn_simpan" class="btn btn-primary" value="Simpan" >Submit</button>
 </form>