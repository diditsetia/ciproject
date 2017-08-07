    <div class="container-fluid">
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo site_url('admin/tambahlokasi');?>">
                    <i class="fa fa-plus"></i>
                    <label>Tambah Lokasi</label>
                </a>
            </div>
            <br>
            <br>
           <?php $no=$this->uri->segment('3') + 1; ?>
            <div class="col-md-12">
                <table class="table table-bordered">
                  <col width="30">
                  <col width="200"> 
                  <col width="200"> 
                    <thead> 
                        <tr> 
                            <th>No</th> 
                            <th>Foto</th> 
                            <th>Alamat</th>
                            <th>No Telepon</th>
                            <th>Oprasional</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead> 
                    <?php foreach ($datalokasi as $key) { ?>
                    <tbody>
                      <tr> 
                        <th scope="row"><?php echo $no ?></th> 
                        <td><?php echo $key['foto']; ?></td>
                        <td><?php echo $key['alamat']; ?></td>
                        <td><?php echo $key['no_telep']; ?></td>
                        <td><?php echo $key['oprasional']; ?></td>
                        <td><?php echo $key['status']; ?></td>
                        <td>
                            <a href="<?php echo  site_url('admin/editlokasi').'/'.$key['id_lokasi'];?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="<?php echo site_url('admin/hapuslokasi').'/'.$key['id_lokasi'];?>">
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