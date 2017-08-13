<aside class="fh5co-page-heading">
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<h1 class="fh5co-page-heading-lead">
						About
						<span class="fh5co-border"></span>
					</h1>
					
				</div>
			</div>
		</div>
	</aside>
	
	<div id="fh5co-main">
		<?php foreach ($dataabout as $key ) { ?>
		<div class="container">
			<div class="row">
				<div class="col-md-12 col-md-offset-1">
					<p><a href="images/slide_1.jpg" class="image-popup"><img style="height:450px;width: 80%;" src="<?php echo base_url('assets/admin/img/fotomenu'.'/'.$key['foto']); ?>" alt="FREEHTML5.co Free HTML5 Template" class="img-responsive img-rounded"></a></p>
				</div>

				<div class="col-md-12 col-md-offset-1">
					<p style="width:80%;"><?php echo $key['isi_about'] ?></p>
				<div class="fh5co-spacer fh5co-spacer-xxs"></div>	
				</div>
			</div>
		</div>
		<?php } ?>
	</div>
		
	