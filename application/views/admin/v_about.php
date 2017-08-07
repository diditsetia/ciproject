    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo site_url('admin/tambahabout');?>">
                    <i class="fa fa-plus"></i>
                    <label>Tentang Kami</label>
                </a>
            </div>
            <br>
            <br>
            <?php $no=$this->uri->segment('3') + 1; ?>
            <div class="col-md-12">
                <table class="table table-bordered">
                  <col width="30">
                  <col width="200"> 
                  <col width="600"> 
                    <thead> 
                        <tr> 
                            <th>No</th> 
                            <th>Foto</th> 
                            <th>Isi Konten</th>
                            <th>Aksi</th>
                        </tr>
                    </thead> 
                        <?php foreach ($dataabout as $key) { ?>
                    <tbody>
                      <tr> 
                        <th scope="row"><?php echo $no ?></th> 
                        <td><?php echo $key['foto']; ?></td>
                        <td><?php echo $key['isi_about'] ;?></td> 
                        <td>
                            <a href="<?php echo  site_url('admin/editabout').'/'.$key['id_about'];?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="<?php echo site_url('admin/hapusabout').'/'.$key['id_about'];?>">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>

                          </tr> 
                      </tbody> 
                      <?php $no++; ?>
                      <?php }?>
                  </table>
            </div>
        </div>
     </div>