 <div id="myCarousel" class="carousel slide" data-ride="carousel">
     <?php
                $query = $this->db->get('tabel_gambar_slidebar');
                $datapengaturan = $query->result_array();
                ?>
                <!-- Indicators -->
                <ol class="carousel-indicators">
                  <li data-target="#myCarousel" data-slide-to="0" class="active"></li>
                  <li data-target="#myCarousel" data-slide-to="1"></li>
                  <li data-target="#myCarousel" data-slide-to="2"></li>
                </ol>

                <!-- Wrapper for slides -->
                <div class="carousel-inner" style=" margin-top: 50px;">

                  <?php 
                  $index = 0;
                  foreach ($datapengaturan as $key ) { ?>
                    
                  
                  <?Php 
                    if ($index==0) { ?>
                      <div class="item active">
                        <img src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$key['nama_file']); ?>" alt="Los Angeles" style="width:100%;height:450px;">
                      </div>
                   <?php }else{ ?>
                      <div class="item">
                        <img src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$key['nama_file']); ?>" alt="Los Angeles" style="width:100%;height:450px;">
                      </div>
                   <?php 
                    }
                  ?>
                  
                  <?php $index++ ?>
                  <?php } ?>
                
                <!-- Left and right controls -->
                <a class="left carousel-control" href="#myCarousel" data-slide="prev">
                  <span class="glyphicon glyphicon-chevron-left"></span>
                  <span class="sr-only">Previous</span>
                </a>
                <a class="right carousel-control" href="#myCarousel" data-slide="next">
                  <span class="glyphicon glyphicon-chevron-right"></span>
                  <span class="sr-only">Next</span>
                </a>
              </div>