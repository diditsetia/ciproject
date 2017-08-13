   
 <nav class="navbar navbar-default" role="navigation">
            <div class="container-fluid">
                <?php
                $query = $this->db->get('tabel_pengaturanweb');
                $datapengaturan = $query->row_array();
                ?>
                <div class="navbar-header"> 
                <!-- Mobile Toggle Menu Button -->
                <a href="#" class="js-fh5co-nav-toggle fh5co-nav-toggle" data-toggle="collapse" data-target="#fh5co-navbar" aria-expanded="false" aria-controls="navbar"><i></i></a>
                <a class="navbar-brand" href="index.html"><?php echo $datapengaturan['nama_web']?></a>
                </div>
                <div id="fh5co-navbar" class="navbar-collapse collapse">
                     

                        <ul class="nav navbar-nav navbar-right">
                        <?php if ($this->uri->segment(2) == 'lokasi') { ?>
                            <li><a href="<?php echo site_url('web') ?>"><span>Home <span class="border"></span></span></a></li>
                            <li><a href="<?php echo site_url('web/about') ?>"><span>About <span class="border"></span></span></a></li>
                            <li class="active" ><a href="<?php echo site_url('web/lokasi') ?>"><span>Lokasi <span class="border"></span></span></a></li>
                        <?php } elseif ($this->uri->segment(2) == 'about') { ?>
                             <li><a href="<?php echo site_url('web') ?>"><span>Home <span class="border"></span></span></a></li>
                            <li class="active"><a href="<?php echo site_url('web/about') ?>"><span>About <span class="border"></span></span></a></li>
                            <li><a href="<?php echo site_url('web/lokasi') ?>"><span>Lokasi <span class="border"></span></span></a></li>
                        <?php } else {?>
                            <li class="active"><a href="<?php echo site_url('web') ?>"><span>Home <span class="border"></span></span></a></li>
                            <li><a href="<?php echo site_url('web/about') ?>"><span>About <span class="border"></span></span></a></li>
                            <li><a href="<?php echo site_url('web/lokasi') ?>"><span>Lokasi <span class="border"></span></span></a></li>
                        <?php } ?>
                        </ul>
                    
                    
                    
                </div>
            </div>
        </nav>