<!-- ================Category Product Area =================--> 
<section class="cat_product_area section_gap">
	<div class="container-fluid">

		<div class="row flex-row-reverse justify-content-center">

			<!-- right bar -->
			<div class="col-lg-3">
				<div class="left_sidebar_area">
					<aside class="left_widgets cat_widgets">
						<div class="l_w_title">
							<h3>Browse Categories</h3>
						</div>
						<div class="widgets_inner">
							<ul class="list">
								<li>
									<a href="<?= base_url('shop') ?>">All Product</a>
								</li>
								<?php foreach ($kategori as $k): ?>
									
								<li>
									<a href="<?= $k['link'] ?>"><?= $k['kategori']; ?></a>
								</li>
								
								<?php endforeach; ?>
							</ul>
						</div>
					</aside>
				</div>
			</div>
			<!-- end right bar -->

			<!-- left bar -->
			<div class="col-lg-9">

				<!-- All Product -->
				<div class="row">
					<div class="col-lg-12">
						<div class="product_top_bar">
							<div class="left_dorp">
								<div style="margin-top: 1rem;">
									<h4>Man Products</h4>
								</div>
							</div>
						</div>
						<div class="latest_product_inner row">
							<?php foreach ($produk as $p): ?>
							<div class="col-lg-3 col-md-3 col-sm-6">
								<div class="f_p_item">
									<div class="f_p_img">
										<img class="img-fluid" src="<?= base_url('assets/uploads/'); ?><?= $p['gambar']; ?>" alt="">
										<div class="p_icon">
											<a href="#">
												<i class="lnr lnr-cart"></i>
											</a>
										</div>
									</div>
									<a href="#">
										<h4><?= $p['nama_produk']; ?></h4>
									</a>
									<h5><?= "Rp".number_format($p['harga']); ?></h5>
								</div>
							</div>

							<?php endforeach; ?>
						</div>	
					</div>
					<div class="col-lg-12">
						<?php // echo $this->pagination->create_links(); ?>
					</div>
				</div>
				<!-- end All Product -->
				
			</div>
			<!-- end left bar -->

		</div>

	</div>
</section>
<!--================End Category Product Area ================= --->
