    <div class="container-fluid" >
      <form class="form-horizontal" enctype='multipart/form-data'  action="<?php echo site_url('admin/aksitambahabout'); ?>" method="post" >
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3" style="margin-left: 50px;">
                  <div  class="image-upload" style="height: 200px; width: 100% ; ">
                    <label  for="file-input" >
                      <img  class=""  src="<?php echo base_url('assets/admin/img/picture.png') ; ?>"
                      style="height: 100px; width:100px ; display: block; margin-top:35px; margin-left: 55px;"
                      data-holder-rendered="true">
                      <span style="margin-left: 85px;"><label>FOTO</label></span>
                    </label>
                    <input type='file' name='userfile' required id='file-input' > 
                  </div> 
                 </div>

                <div class="col-md-8" style="margin-top:45px;margin-left:30px;">      
                 <div class="form-group"> 
                    <div class="col-sm-12">
                    <label>Tentang kami</label> 
                    <textarea style="height: 350px; " class="form-control" name='isiabout'  placeholder="tentang kami" ></textarea>
                    </div> 
                </div>

                 <div class="form-group"> 
                    <div class="col-sm-9">
                    <button type="submit" class="btn btn-info">Kirim</button>
                    </div> 
                </div>
                  </form>
                </div>    
            </div>
        </div>
     </div>