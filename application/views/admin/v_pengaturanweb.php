    <div class="container-fluid" >
      <?php if (  $datapengaturan['id_pengaturanweb'] != NULL ) { ?>
        
        <form class="form" enctype='multipart/form-data'  action="<?php echo site_url('admin/aksiupdatepengaturanweb'); ?>" method="post" >
      <?php }else { ?>
        <form class="form" enctype='multipart/form-data'  action="<?php echo site_url('admin/aksipengaturanweb'); ?>" method="post" >
      <?php }?>
     
        <div class="row">
          <div class="col-md-12"> 
            <input type="hidden" name="id" value="<?php echo $datapengaturan['id_pengaturanweb'] ;?>">
            <div class="form-group"> 
              <label for="inputnamaweb" class="col-sm-2 control-label" style=" margin-top: 10px;">Nama Web</label>
                <div class="col-sm-6">
                <input type="text" class="form-control" name='namaweb' value="<?php echo $datapengaturan['nama_web'] ;?>" placeholder="namaweb"> 
                </div> 
            </div>
          </div>
        </div>
        <br>

        <div class="row">
          <div class="col-md-12"> 
            <div class="form-group"> 
              <label  class="col-sm-2 control-label" style=" margin-top: 10px;">Logo Web</label>
                <div class="col-sm-6">
                  <?php if ( $datapengaturan['logo_web'] == NULL) { ?>
                    <div  class="image-upload" style= " width: 100% ; ">
                      <label  for="file-input" >
                        <img  class=""  src="<?php echo base_url('assets/admin/img/picture.png') ; ?>"
                        style="height: 100px; width:100px ; display: block; "
                        data-holder-rendered="true">
                      </label>
                      <input type='file' name='userfile'  id='file-input' > 
                    </div> 
                  <?php } else { ?>
                     <div  class="image-upload" style= " width: 100% ; ">
                      <label  for="file-input" >
                        <img  class=""   src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$datapengaturan['logo_web']) ; ?>"
                        style="height: 100px; width:100px ; display: block; "
                        data-holder-rendered="true">
                      </label>
                       <input type='hidden' name='oldlogo' value="<?php echo $datapengaturan['logo_web']; ?>"  id='file-input' >
                      <input type='file' name='userfile'  id='file-input'> 
                    </div> 
                  <?php } ?>
              </div> 
            </div>
          </div>
        </div>
        <br>

         <div class="row">
            <div class="col-md-12"> 
              <div class="form-group"> 
                <label  class="col-sm-2 control-label" >Footer</label>
                <div class="col-sm-6">
                  <textarea style="height: 60px; " class="form-control" name='footer'  placeholder="alamat" ><?php echo $datapengaturan['footer']; ?></textarea>
                </div> 
              </div>
            </div>
        </div>
        <br>
        <div class="row">
          <?php 
          $gambar = $datapengaturan['nama_file'];
          $gambar_slider = explode (",",$gambar)
          ?>

          <?php 
          $gambar = $datapengaturan['id_gambar'];
          $id_gambarslider = explode (",",$gambar)
          ?>

          <?php 
          $gambar = $datapengaturan['lokasi_file'];
          $lokasifile = explode (",",$gambar)
          ?>


          <input type="hidden" name="idgambar1" value="<?php echo $id_gambarslider[0] ;?>">
          <input type="hidden" name="idgambar2" value="<?php echo $id_gambarslider[1] ;?>">
          <input type="hidden" name="idgambar3" value="<?php echo $id_gambarslider[2] ;?>">

          <input type="hidden" name="lokasi1" value="<?php echo $lokasifile[0] ;?>">
          <input type="hidden" name="lokasi2" value="<?php echo $lokasifile[1] ;?>">
          <input type="hidden" name="lokasi3" value="<?php echo $lokasifile[2] ;?>">

            <div class="col-md-12"> 
              <div class="form-group"> 
                  <label  class="col-sm-2 control-label" style=" margin-top: 10px;">Slidebar</label>
                    <div class="col-sm-3">
                      <?php if ($gambar_slider[0] == NULL) { ?>
                         <div  class="image-upload" style= " width: 100% ; ">
                            <label  for="file-input" >
                              <img  class=""  src="<?php echo base_url('assets/admin/img/picture.png') ; ?>"
                                style="height: 100px; width:100px ; display: block; "
                                data-holder-rendered="true">
                            </label>
                            <input type='file' name='slider1'  id='file-input' > 
                          </div> 
                      <?php } else {?>
                        <div  class="image-upload" style= " width: 100% ; ">
                          <label  for="file-input" >
                            <img  class=""   src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$gambar_slider[0]) ; ?>"
                              style="height: 100px; width:100px ; display: block; "
                              data-holder-rendered="true">
                          </label>
                          <input type='hidden' name='oldslider1' value="<?php echo $gambar_slider[0]; ?>"  id='file-input' >
                          <input type='file' name='slider1'  id='file-input'> 
                        </div> 
                      <?php } ?>

                    </div>

                  <div class="col-sm-3">
                    <?php if ($gambar_slider[1] == NULL) { ?>
                      <div  class="image-upload" style= " width: 100% ; ">
                          <label  for="file-input" >
                            <img  class=""  src="<?php echo base_url('assets/admin/img/picture.png') ; ?>"
                              style="height: 100px; width:100px ; display: block; "
                              data-holder-rendered="true">
                          </label>
                          <input type='file' name='slider2'  id='file-input' > 
                      </div> 
                    <?php } else { ?>
                        <div  class="image-upload" style= " width: 100% ; ">
                          <label  for="file-input" >
                            <img  class=""   src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$gambar_slider[1]) ; ?>"
                              style="height: 100px; width:100px ; display: block; "
                              data-holder-rendered="true">
                          </label>
                          <input type='hidden' name='oldslider2' value="<?php echo $gambar_slider[1]; ?>"  id='file-input' >
                          <input type='file' name='slider2'  id='file-input'> 
                        </div> 
                    <?php } ?>
                  

                  </div> 

                  <div class="col-sm-3">
                  <?php if ($gambar_slider[2] == NULL) { ?>
                     <div  class="image-upload" style= " width: 100% ; ">
                          <label  for="file-input" >
                            <img  class=""  src="<?php echo base_url('assets/admin/img/picture.png') ; ?>"
                              style="height: 100px; width:100px ; display: block; "
                              data-holder-rendered="true">
                          </label>
                          <input type='file' name='slider3'  id='file-input' > 
                      </div> 
                  <?php } else { ?>
                      <div  class="image-upload" style= " width: 100% ; ">
                          <label  for="file-input" >
                            <img  class=""   src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$gambar_slider[2]) ; ?>"
                              style="height: 100px; width:100px ; display: block; "
                              data-holder-rendered="true">
                          </label>
                          <input type='hidden' name='oldslider3' value="<?php echo $gambar_slider[2]; ?>"  id='file-input' >
                          <input type='file' name='slider3'  id='file-input'> 
                      </div> 
                  <?php } ?>
                 
                 
                  </div>
              </div>
            </div>
        </div>
        <br>
            <div class="row">
              <div class="col-md-12"> 
                <div class="form-group"> 
                  <label  class="col-sm-2 control-label" ></label>
                    <div class="col-sm-6">
                   <button type="submit" class="btn btn-info">Kirim</button>
                  </div> 
              </div>
            </div>
        </div>
      </form>
    </div>