    <div class="container-fluid" >
        <div class="row">
            <div class="col-md-6">
                <a href="<?php echo site_url('admin/tambahmenu');?>">
                    <i class="fa fa-plus"></i>
                    <label>Tambah Menu</label>
                </a>
            </div>
            <br>
            <br>
            <?php $no=$this->uri->segment('3') + 1; ?>
            <div class="col-md-12">
                <table class="table table-bordered">
                  <col width="30">
                  <col width="200"> 
                    <thead> 
                        <tr> 
                            <th>No</th> 
                            <th>Nama</th> 
                            <th>Harga</th> 
                            <th>Kategori</th>
                            <th>Gambar</th>
                            <th>Status</th>
                            <th>Aksi</th>
                        </tr>
                    </thead> 
                        <?php foreach ($datamenu as $key) { ?>
                    <tbody>
                      <tr> 
                        <th scope="row"><?php echo $no ?></th> 
                        <td><?php echo $key['nama_menu'] ;?></td>
                        <td><?php echo $key['harga']; ?></td> 
                        <td><?php echo $key['kategori'];?></td>
                        <td><?php echo $key['gambar'];?></td>
                        <td><?php echo $key['status'] ?></td>
                        <td>
                            <a href="<?php echo site_url('admin/editmenu').'/'.$key['id_menu']; ?>">
                                <i class="fa fa-pencil"></i>
                            </a>
                            <a href="<?php echo site_url('admin/hapusmenu').'/'.$key['id_menu']; ?>">
                                <i class="fa fa-trash-o"></i>
                            </a>
                        </td>

                          </tr> 
                      </tbody> 
                        <?php $no++; ?>
                      <?php } ?>
                  </table>
            </div>
        </div>
     </div>