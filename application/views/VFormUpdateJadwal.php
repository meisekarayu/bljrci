<form action="<?php echo site_url('Welcome/UpdateDataJadwal'); ?>" method="post">
   
  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Kelas</label>
                    <div class="col-sm-10">
                              <select name="kd_kelas" class="form-control">
                                <?php
                                if(!empty($GetKelas))
                                  {
                                    $no=1;
                                    foreach($GetKelas as $GetKelas_read) 
                                  {  
                                ?>
                                 <option value="<?php echo $GetKelas_read->kd_kelas; ?>"><?php echo$no; echo ". "; echo $GetKelas_read->nama_kelas; ?></option>
                                 <?php
                                    $no++;}}
                                 ?>
                              </select>
                    </div>
                  </div>

  <div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">Nama Matpel</label>
                    <div class="col-sm-10">
                              <select name="kd_matpel" class="form-control">
                                <?php
                                if(!empty($GetMatpel))
                                  {
                                    $no=1;
                                    foreach($GetMatpel as $GetMatpel_read) 
                                  {  
                                ?>
                                 <option value="<?php echo $GetMatpel_read->kd_matpel; ?>"><?php echo$no; echo ". "; echo $GetMatpel_read->nama_matpel; ?></option>
                                 <?php
                                    $no++;}}
                                 ?>
                              </select>
                    </div>
                  </div>


<div class="form-group">
                    <label for="inputName" class="col-sm-2 control-label">NIP</label>
                    <div class="col-sm-10">
                              <select name="nip" class="form-control">
                                <?php
                                if(!empty($GetNip))
                                  {
                                    $no=1;
                                    foreach($GetNip as $GetNip_read) 
                                  {  
                                ?>
                                 <option value="<?php echo $GetNip_read->nip; ?>"><?php echo$no; echo ". "; echo $GetNip_read->nama; ?></option>
                                 <?php
                                    $no++;}}
                                 ?>
                              </select>
                    </div>
                  </div>



  <button type="submit" name="btn_simpan" class="btn btn-primary" value="Simpan" >Submit</button>
 </form>