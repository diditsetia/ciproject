    <div class="container-fluid" >
      <form class="form-horizontal" enctype='multipart/form-data'  action="<?php echo site_url('admin/aksitambahmenu'); ?>" method="post" >
        <div class="row">
            <div class="col-md-12">
                <div class="col-md-3" style="margin-left: 50px;">
                  <div  class="image-upload" style="height: 200px; width: 100% ; ">
                    <label  for="file-input" >
                      <img  class=""  src="<?php echo base_url('assets/admin/img/picture.png') ; ?>"
                      style="height: 100px; width:100px ; display: block; margin-top:35px; margin-left: 55px;"
                      data-holder-rendered="true">
                      <span style="margin-left: 67px;"><label>FOTO MENU</label></span>
                    </label>
                    <input type='file' name='userfile' required id='file-input' > 
                  </div> 
                 </div>

                <div class="col-md-8" style="margin-top:70px;">
                    <div class="form-group">
                      <label for="inputEmail3" class="col-sm-2 control-label">Nama Menu</label>
                      <div class="col-sm-9">
                      <input type="text" class="form-control" name='menu'  placeholder="nama menu"> 
                      </div> 
                    </div>

                 <div class="form-group"> 
                    <label for="inputPassword3" class="col-sm-2 control-label">Harga</label> 
                    <div class="col-sm-9">
                    <input type="text" class="form-control" name='harga'  placeholder="harga">
                    </div> 
                </div> 

                 <div class="form-group"> 
                    <label for="inputPassword3" class="col-sm-2 control-label">Kategori</label> 
                    <div class="col-sm-9">
                      <select id="Select" name='kategori'  class="form-control">
                        <option value='makanan'>Makanan</option>
                        <option value='minuman'>Minuman</option>
                        <option value='makananbaru'>Makanan Baru</option>
                        <option value='minumanbaru'>Minuman Baru</option>
                      </select>
                    </div> 
                </div>

                 <div class="form-group"> 
                    <label for="inputPassword3" class="col-sm-2 control-label">Status</label> 
                    <div class="col-sm-9">
                      <label class="radio-inline"><input type="radio" name="status" value='ada'>Ada</label>
                      <label class="radio-inline"><input type="radio" name="status" value='kosong'>Kosong</label>
                    </div> 
                </div> 

                 <div class="form-group"> 
                    <label for="inputPassword3" class="col-sm-2 control-label">Keterangan</label> 
                    <div class="col-sm-9">
                       <textarea style="height: 120px; " class="form-control" name='keterangan'  placeholder="keterangan" ></textarea>
                    </div> 
                </div>

                 <div class="form-group"> 
                    <label for="inputPassword3" class="col-sm-2 control-label"></label> 
                    <div class="col-sm-9">
                      <button type="submit" class="btn btn-info">Kirim</button>
                    </div> 
                </div>
                  </form>
                </div>    
            </div>
        </div>
     </div>