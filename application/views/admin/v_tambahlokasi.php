    <div class="container-fluid" >
      <form class="form-horizontal" enctype='multipart/form-data'  action="<?php echo site_url('admin/aksitambahlokasi'); ?>" method="post" >
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

                <div class="col-md-8" style="margin-top:45px;margin-left:15px;">      
                    
                    <div class="form-group"> 
                      <div class="col-sm-12">
                        <label for="inputPassword3" class="col-sm-3 control-label">Alamat</label> 
                        <div class="col-sm-9">
                        <textarea style="height: 50px; " class="form-control" name='alamat'  placeholder="Alamat" ></textarea>
                        </div> 
                      </div>
                    </div> 
                    

                    <div class="form-group"> 
                    <div class="col-sm-12">
                      <label for="inputEmail3" class="col-sm-3 control-label">No Telepone</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name='telepone'  placeholder="nomertelepone"> 
                      </div> 
                    </div>
                    </div>

                    <div class="form-group"> 
                      <div class="col-sm-12">
                        <label for="inputPassword3" class="col-sm-3 control-label"> Operasional Toko</label> 
                        <div class="col-sm-9">
                        <textarea style="height: 160px; " class="form-control" name='oprasional'  placeholder="buka atau tutup" ></textarea>
                        </div> 
                      </div>
                    </div> 

                    <div class="form-group"> 
                      <div class="col-sm-12">
                        <label for="inputPassword3" class="col-sm-3 control-label">Status</label> 
                        <div class="col-sm-9">
                        <label class="radio-inline"><input type="radio" name="status" value='utama'>Outlet Pertama</label>
                        <label class="radio-inline"><input type="radio" name="status" value='cabang'>Cabang</label>
                      </div>
                      </div>
                    </div> 

                    <div class="form-group"> 
                      <div class="col-sm-12">
                        <label for="inputPassword3" class="col-sm-3 control-label"></label> 
                        <div class="col-sm-9">
                        <button type="submit" class="btn btn-info">Kirim</button>
                        </div> 
                      </div>
                    </div>

                 
                  
                </div>  
                </form>  
            </div>
        </div>
     </div>