<form action="<?php echo site_url('Welcome/UpdateDataMatpel'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="hidden" name="kd_matpel" class="form-control" value="<?php echo $detail['kd_matpel']; ?>" ><br>
     <input type="text" name="nama_matpel" class="form-control" value="<?php echo $detail['nama_matpel']; ?>" ><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">KKM</label>
     <input type="text" name="kkm" class="form-control" value="<?php echo $detail['kkm']; ?>" ><br>
  </div>

  <button type="submit" name="btn_simpan" class="btn btn-primary" value="Simpan" >Submit</button>
 </form>
