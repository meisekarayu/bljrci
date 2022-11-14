<form action="<?php echo site_url('Welcome/UpdateDataGuru'); ?>" method="post">
  <div class="form-group">
    <label for="exampleInputEmail1">Nama</label>
    <input type="hidden" name="nip" class="form-control" value="<?php echo $detail['nip']; ?>" ><br>
    <input type="text" name="nama" class="form-control" value="<?php echo $detail['nama']; ?>" ><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">No. HP</label>
    <input type="text" name="no_hp" class="form-control" value="<?php echo $detail['no_hp']; ?>" ><br>
  </div>
  <div class="form-group">
    <label for="exampleInputEmail1">Email</label>
    <input type="text" name="email" class="form-control" value="<?php echo $detail['email']; ?>" ><br>
  </div>

  <button type="submit" name="btn_simpan" class="btn btn-primary" value="Simpan" >Submit</button>
 </form>
