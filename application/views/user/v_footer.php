<div class="container">
            <div class="row">
                 <?php
                    $query = $this->db->get('tabel_pengaturanweb');
                    $datapengaturan = $query->row_array();
                ?>
                <div class="col-md-6 col-md-offset-3">
                    <div class="fh5co-footer-widget">
                        <h2 class="fh5co-footer-logo"><?php echo $datapengaturan['nama_web']?></h2>
                        <p><?php echo $datapengaturan['footer'] ?></p>
                    </div>
                    <div class="fh5co-footer-widget">
                        <ul class="fh5co-social">
                            <li><a href="https://www.facebook.com/pages/Outlets-Juice-Ojanz/1632890886939730?fref=ts" target="_blank" ><i class="icon-facebook"></i></a></li>
                            <li><a href="https://twitter.com/outlets_ojanz" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.instagram.com/outletsojanz/" target="_blank"><i class="icon-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>


            </div>

            <div class="row fh5co-row-padded fh5co-copyright">
                <div class="col-md-6 col-md-offset-3">
                    <p><small>&copy; Outlets Ojanz<br>Designed by: MTP<a href="" target="_blank"></a> | Images by: <a href="" target="_blank">MTP</a> </small></p>
                </div>
            </div>
        </div>