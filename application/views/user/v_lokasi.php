	<aside class="fh5co-page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="fh5co-page-heading-lead">
						Lokasi
						<span class="fh5co-border"></span>
					</h1>
					
				</div>
			</div>
		</div>
	</aside>
	
	<div id="fh5co-main">
		
		<div class="container">
			<div class="row">
				<div class="col-md-8">
					<?php foreach ($datalokasi as $key ) { ?>
						<?php if ($key['status'] == 'utama') { ?>
					<div class="row">
					<div class="col-md-12">
						<p><a href="images/slide_1.jpg" class="image-popup"><img  style="height:400px; width:100%"  src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$key['foto']); ?>" alt="FREEHTML5.co Free HTML5 Template" class="img-responsive img-rounded"></a></p>
						<h3><?php echo $key['alamat'] ?></h3>
						<h4>No Telepone : <?php echo $key['no_telep'] ?></h4>
					</div>
					</div>
					<?php } else { ?>
					
					<div class="row">
						<div class="col-md-6">
							<p><a href="images/slide_1.jpg" class="image-popup"><img  src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$key['foto']); ?>" alt="FREEHTML5.co Free HTML5 Template" class="img-responsive img-rounded"></a></p>
							<p><?php echo $key['alamat'] ?></p>
						</div>
					</div>
					<?php } ?>
					<div class="fh5co-spacer fh5co-spacer-xxs"></div>
					<?php } ?>
					
				</div>

				<div class="col-md-4">
					<div class="fh5co-sidebox">
						<h3 class="fh5co-sidebox-lead">Buka Setiap :</h3>	
						<ul class="fh5co-post">
							<li>
									<div class="fh5co-post-blurb">
										<?php echo $datajambuka['oprasional'] ?>
										<span class="fh5co-post-meta"></span>
									</div>
								
							</li>
						</ul>
						
					</div>

					<div class="fh5co-sidebox">
						<h3 class="fh5co-sidebox-lead">Kritik dan saran</h3>	
								<div class="row">
						<form action="<?php echo site_url('web/aksikritiksaran'); ?>" method="post">
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Name" id="name"  name="nama" type="text" class="form-control input-lg">
								</div>	
							</div>
							<div class="col-md-12">
								<div class="form-group">
									<input placeholder="Email" id="email" type="email" name="email" class="form-control input-lg">
								</div>	
							</div>
							
							<div class="col-md-12">
								<div class="form-group">
									<textarea placeholder="Message" id="message" name="pesan" class="form-control input-lg" rows="4"></textarea>
								</div>	
							</div>
							<div class="col-md-6">
								<div class="form-group">
									<button type="submit"  class="btn btn-primary " >Kirim</button>

								</div>	
							</div>
						</form>	
					</div>
					</div>

				</div>

			</div>
		</div>
	</div>