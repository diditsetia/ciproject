   <div id="fh5co-features">
    <div class="container">
    <div class="row">
     <?php foreach ($datamenu as $key) { ?>
    <div class="col-md-4 col-sm-4 fh5co-feature-border">
                        <div class="col-md-4 fh5co-feature">
                            <center><div class="fh5co-feature-img to-animate">
                                    <a href="images/slide_1.jpg" class="image-popup" ><img style="height:200px;" src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$key['gambar']); ?>" alt="FREEHTML5.co Free HTML5 Template" class="img-responsive "></a>
                            </div>
                        </center>
                            <div class="fh5co-feature-text" style="width:100%;">
                                <h3><?php echo $key['nama_menu'] ?></h3>
                                <h4>Rp.<?php echo $key['harga'] ?></h4>
                                <h5>Status : <?php echo $key['status'] ?></h5>
                                <p><?php echo substr( $key['keterangan'],0,100).".."?></p>
                                <p><a href="#">Read more</a></p>
                            </div>
                        </div>
                    </div>
                    <?php } ?>

                </div>
            </div>
        </div>