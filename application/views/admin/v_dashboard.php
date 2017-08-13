<div class="container-fluid">
                <div class="row">
               

                    <div class="col-md-12">
                        <div class="card">
                            <div class="header">
                                <h4 class="title">Kritik dan Saran</h4>
                                
                            </div>
                            <div class="content">
                                 <div class="container-fluid" >
                                    <div class="row">
                                        <br>
                                        <br>
                                        <?php $no=$this->uri->segment('3') + 1; ?>
                                        <div class="col-md-12">
                                            <table class="table table-bordered">
                                              <col width="30">
                                              <col width="200"> 
                                              <col width="200"> 
                                              <col width="350"> 
                                                <thead> 
                                                    <tr> 
                                                        <th>No</th> 
                                                        <th>Nama Pengirim</th> 
                                                        <th>Email</th> 
                                                        <th>Pesan</th>
                                                        <th>Tanggal</th>
                                                        <th>Aksi</th>
                                                        
                                                    </tr>
                                                </thead> 
                                                    <?php foreach ($datapesan as $key) { ?>
                                                <tbody>
                                                  <tr> 
                                                    <th scope="row"><?php echo $no ?></th> 
                                                    <td><?php echo $key['nama'] ;?></td>
                                                    <td><?php echo $key['email']; ?></td> 
                                                    <td><?php echo $key['pesan'];?></td>
                                                    <td><?php echo $key['create_at'];?></td>
                                                    <td>
                                                        <a href="<?php echo site_url('admin/hapuspesan').'/'.$key['id_saran'];?>">
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
                            </div>
                        </div>
                    </div>
                </div>
            </div>