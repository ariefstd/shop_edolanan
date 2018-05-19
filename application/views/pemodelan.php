<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from diana.html.themeplayers.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:40:41 GMT -->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="EDolanan .com">
    <meta name="author" content="EDolanan">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
    
    <link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>images/favicon/apple-icon-57x57.png">
    <link rel="apple-touch-icon" sizes="60x60" href="<?php echo base_url(); ?>images/favicon/apple-icon-60x60.png">
    <link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>images/favicon/apple-icon-72x72.png">
    <link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>images/favicon/apple-icon-76x76.png">
    <link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>images/favicon/apple-icon-114x114.png">
    <link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>images/favicon/apple-icon-120x120.png">
    <link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>images/favicon/apple-icon-144x144.png">
    <link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>images/favicon/apple-icon-152x152.png">
    <link rel="apple-touch-icon" sizes="180x180" href="<?php echo base_url(); ?>images/favicon/apple-icon-180x180.png">
    <link rel="shortcut icon" href="<?php echo base_url(); ?>images/favicon/favicon.ico" type="image/x-icon">
    <link rel="icon" href="<?php echo base_url(); ?>images/favicon/favicon.ico" type="image/x-icon">
    <meta name="msapplication-TileColor" content="#ffffff">
    <meta name="msapplication-TileImage" content="<?php echo base_url(); ?>images/favicon/ms-icon-144x144.png">
    <meta name="theme-color" content="#ffffff">

    <title>Edolanan .com</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>fonts/font-awesome/css/font-awesome.min.css"/>
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url(); ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url(); ?>css/select2.css">

    <!--<link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->

    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.min.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->
    <style>
		.ct-specialsDescription .btn {
			position:relative;
			padding:10px 5px;
		}
		.ct-specialsDescriptions .btn {
			float:right;
			padding:10px 5px;
			margin:10px;
		}		
		.ct-productShop--smaller{
			max-width:261px;
		}
		.list-inline > li{
			padding:0px;
		}
		.list-inline{
			margin-left:25px;
		}
		.ct-productShop{
			border-right:0px;
		}
    </style>
    <script src="<?php echo base_url(); ?>js/modernizr.custom.js"></script>
</head>

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<?php //$this->load->view('header'); ?>

        <div class="ct-contentWrapper">
            <div class="container">
                <!-- FIRST SHOP ELEMENTS SLIDER - FEATURED ITEMS -->
                <div class="row">
					<?php  ?>
					<div class="col-md-3">
                        <div class="ct-u-marginBoth20">
                            <div class="widget">
								<div class="widget-inner">
									<h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left ct-u-paddingTop35">Brands</h4>
									<ul class="ct-productCategories ct-u-paddingTop30">
										<li><a href="#">Huruf-huruf Ajaib - </a><span>(7)</span></li>
										<li><a href="#">Angka yang pintar - </a><span>(5)</span></li>
										<li><a href="#">Pesan yang bermanfaat - </a><span>(1)</span></li>                                    
									</ul>
								</div>
							</div>
							<div class="widget">
                            <div class="widget-inner">
                                <h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left">Specials</h4>
                                <div class="ct-specials ct-u-marginBoth20">
                                    <img class="ct-js-zoomImage" src="<?php echo base_url() ?>images/wraper.jpg" data-zoom-image="images/specials-item-large.jpg" alt="">
                                    <div class="ct-specialsDescriptions">																		
                                        <div class="texte" style="padding:10px">
										<br />
											<h4>Hiasan Pengingat</h4>
											Rp. <del>150.00</del> Rp. 12,500.00
										</div>
                                        <a class="btn btn-default" href="#" role="button"><i class="fa fa-shopping-cart"></i></a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
							</div>
                        </div>
                    </div>
					<?php ?>
					<div class="col-md-9">
						<div class="ct-u-marginBoth20">
							<div class="widget">
								<div class="widget-inner">
									<h4 class="ct-headerBox ct-u-borderBottom3 ct-u-paddingBottom10 text-left ct-u-paddingTop35">
										<?php if($productcat=='huruf'){echo "Huruf-huruf Ajaib";} ?>
										<?php if($productcat=='angka'){echo "Angka yang Pintar";} ?>
										<?php if($productcat=='pesan'){echo "Pesan yang Baik";} ?>
										<?php if($productcat=='puzzle'){echo "Koleksi Permainan Puzzle";} ?>
										<?php if($productcat=='tradisional'){echo "Koleksi Permainan Tradisional";} ?>
										<?php if($productcat=='modern'){echo "Koleksi Permainan Modern";} ?>
										<?php if($productcat=='edukasi'){echo "Koleksi Permainan Edukasi";} ?>
									</h4>
									<ul class="ct-productsList list-unstyled list-inline">
									<?php
									
									// "$products" send from "shopping" controller,its stores all product which available in database. 
									foreach ($results as $product) {
										$id = $product['serial'];
										$name = $product['name'];
										$description = $product['description'];
										$price = $product['price'];
										$imagename = $product['image_name'];
										$web = $product['web'];
									?> 
									<?php //echo $id; echo "<br>"; ?>                               
										
										<li>
											<div class="ct-productShop ct-productShop--zoom ct-productShop--smaller">
												<div class="ct-productShop-category">
													<span class="ct-productShop-h5"><?php echo $web; ?></span>
													<div class="clearfix"></div>
													<div class="text-center">                                                
														<img class="ct-js-zoomImage-" src="<?php echo base_url() ."images/". $product['image_name'] ?>" width="225" height="200">
													</div>
												</div>
												<form action="<?php echo base_url(); ?>shopping/add_index" method="post">
												<div class="ct-productShop-content">
													<div class="ct-productShop-content-description">
														
														<a href="<?php echo base_url() ?>productdetail/<?php echo $id ?>">
															<h3>"<?php echo $name; ?>"<br></h3>
															<span>Rp. <?php echo number_format($price,2); ?></span>
														</a>
														
														<span class="ct-productShop-shopCart">
															<?php
																/*
																echo form_type('id', $id);
																echo form_hidden('name', $name);
																echo form_hidden('price', $price);
																echo form_hidden('description', $description);
																*/
															?>

															<input type="hidden" name="id" value="<?php echo $id ?>" />
															<input type="hidden" name="name" value="<?php echo $name ?>" />
															<input type="hidden" name="price" value="<?php echo $price ?>" />
															<input type="hidden" name="description" value="<?php echo $description ?>" />
															<input type="hidden" name="qty" value="1" style="width: 75px"/>															
														</span>														
													</div>													
												</div>
												<div class="ct-productShop-content">
													<div class="ct-specialsDescription" style="width:100%">
														<button type="submit" class="btn btn-default"><i class="fa fa-shopping-cart fa-fw"></i></button>
													</div>
												</div>
												</form>
												
												<div class="clearfix"></div>
												<?php //echo $this->pagination->create_links(); ?>
											</div>
										</li>
									<?php } ?>
									</ul>
									<div class="ct-pages pull-right">
									<ul class="ct-numerPages list-unstyled list-inline">                                        
                                        <li><a href="#"><?php echo $this->pagination->create_links(); ?></a></li>
                                    </ul>
									</div>
								</div>
							</div>
						</div>
					</div>
					
				</div>						
					
                
                <!-- SECOND SHOP ELEMENTS SLIDER - LATEST PRODUCTS -->
                <h4 class="ct-headerBox ct-u-borderBottom3 text-center ct-u-paddingBottom15 ct-u-paddingTop55">Barang terbaru</h4>
                <div class="ct-u-paddingBottom20 ct-u-paddingTop35">
                    <div class="ct-js-owl owl-carousel ct-productCarousel ct-productCarousel--arrowsTop" data-single="false" data-pagination="false" data-navigation="true" data-items="4" data-snap-ignore="true">
            <?php
            
            // "$products" send from "shopping" controller,its stores all product which available in database. 
            foreach ($latests as $latest) {
                $id = $latest['serial'];
                $name = $latest['name'];
                $description = $latest['description'];
                $price = $latest['price'];
                $imagename = $latest['image_name'];
                $web = $latest['web'];
            ?> 
                        <div class="item">
                            <div class="ct-productShop ct-productShop-zoom">
                                <div class="ct-productShop-category">
                                    <span class="ct-productShop-h5"><?php echo $web; ?></span>
                                    <div class="clearfix"></div>
                                    <a href="<?php echo base_url() ?>productdetail/<?php echo $id ?>">
										<img height="250px" src="<?php echo base_url() ?>images/<?php echo $imagename; ?>">
									</a>
                                </div>
								<form action="<?php echo base_url(); ?>shopping/add_index" method="post">
                                <div class="ct-productShop-content">
                                    <div class="ct-productShop-content-description">
                                        <a href="<?php echo base_url() ?>productdetail/<?php echo $id ?>">
                                            <h3><?php echo $name; ?> </h3>
                                            <span>Rp. <?php echo number_format($price,2); ?></span>
                                        </a>
                                        <span class="ct-productShop-shopCart"> 
											
												<?php
                                                        /*
                                                        echo form_type('id', $id);
                                                        echo form_hidden('name', $name);
                                                        echo form_hidden('price', $price);
                                                        echo form_hidden('description', $description);
                                                        */
                                                        ?>
                                                        <input type="hidden" name="id" value="<?php echo $id ?>" />
                                                        <input type="hidden" name="name" value="<?php echo $name ?>" />
                                                        <input type="hidden" name="price" value="<?php echo $price ?>" />
                                                        <input type="hidden" name="description" value="<?php echo $description ?>" />
                                                        <input type="hidden" name="qty" value="1" style="width: 75px"/> 

														<?php
															$this->db->where('productid', $id);
															$this->db->select('*');
															$this->db->select_sum('quantity');
															$this->db->from('order_detail');
															$this->db->join('property', 'property.serial = order_detail.id');

															$query = $this->db->get();
															foreach ($query->result() as $rows)
															{
																$total_qty = $rows->quantity;
																$qty = $rows->qty;
																//echo $total_qty;
																//echo "<br>".$qty;
																if ($total_qty > $qty){

																}else{
														?>
														<?php 
																} 
															}
														?>								
																					
                                            <!--<a class="btn btn-default btn-hidden" href="#" role="button"><i class="fa fa-chain fa-fw"></i></a>-->
                                        </span>
                                    </div>
                                </div>
								<div class="ct-productShop-content">
									<div class="ct-specialsDescription" style="width:100%">
										<button type="submit" class="btn btn-default"><i class="fa fa-shopping-cart fa-fw"></i></button>
									</div>
								</div>
								</form>									
                            </div>
							
                        </div>
            <?php } ?>

                    </div>
                </div>
            </div>

            <!-- PreFOOTER -->
            <div class="container">
                <div class="ct-dividedSection ct-u-paddingTop60">
                    <div class="row">
                        <div class="col-md-7 col-sm-12">
                            <div class="ct-dividedSection-left">
                                <h3>Daftarkan newsletter pada kami</h3>
                                <div class="ct-contactForm">
                                    <div class="successMessage alert alert-success" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Terima kasih!
                                    </div>
                                    <div class="errorMessage alert alert-danger" style="display: none">
                                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
                                        Maaf! Kesalahan terjadi. Silahkan ulangi lagi.
                                    </div>									
									<form action="//edolanan.us12.list-manage.com/subscribe/post?u=8fd087afc74f071f74c3f81da&amp;id=b8da00d05e" method="post" id="mc-embedded-subscribe-form" name="mc-embedded-subscribe-form" class="validate" target="_blank" novalidate>
										<div id="mc_embed_signup_scroll">
											<div class="mc-field-group  input-group">
												<input type="email" placeholder="Your Email Address" value="" required name="EMAIL" class="required email form-control" id="mce-EMAIL">
												<span class="input-group-btn"><input type="submit" value="Subscribse" name="subscribe" id="mc-embedded-subscribe" class="button btn btn-default btn-sm"></span>
											</div>
										<div id="mce-responses" class="clear">
											<div class="response" id="mce-error-response" style="display:none"></div>
											<div class="response" id="mce-success-response" style="display:none"></div>
										</div>   <!-- real people should not fill this in and expect good things - do not remove this or risk form bot signups-->
										</div>
									</form>
                                </div>
                            </div>
                        </div>
						
                        <div class="col-md-5 col-sm-12">
                            <div class="ct-dividedSection-right">
                                <img src="<?php echo base_url() ?>images/prefooter-diamond.png" class="text-right pull-left" alt="Diamond Ring">
                                <h3 class="text-uppercase text-right">Anda punya pertanyaan untuk kami ?</h3>
                                Silahkan hubungi kami langsung untuk pertanyaan seputar permainan edukasi <a href="#">Hubungi langsung</a> 
                                <div class="ct-dividedSection-right-triangle hidden-sm hidden-xs"></div>
                            </div>
                        </div>
						
                    </div>
                    <div class="ct-tooltips text-center ct-u-paddingTop50 ct-u-paddingBottom40">
					<!--
                        <ul class="list-unstyled list-inline">
                            <li data-toggle="tooltip" title="75,000+ customers trusted us to create their rings."><i class="fa fa-heart fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Pay by cash, credit card, bank transfer or store."><i class="fa fa-dollar fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Fully protected, all payments secured."><i class="fa fa-lock fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Double guarantee for gold and diamonds."><i class="fa fa-certificate fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="24/7 support at your service."><i class="fa fa-headphones fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Latest news collections directly on your email."><i class="fa fa-envelope fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Free & easy returns in 48h."><i class="fa fa-circle-o-notch fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Free Delivery and Assurance."><i class="fa fa-truck fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Your data is fully protected."><i class="fa fa-folder fa-fw fa-6x"></i></li>
                            <li data-toggle="tooltip" title="Find your measurements for your ring."><i class="fa fa-pencil-square-o fa-fw fa-6x"></i></li>
                        </ul>
					-->
                    </div>
                </div>
            </div>
        </div>

        <!-- FOOTER -->
        <footer class="ct-footer ct-u-paddingTop210 ct-u-paddingBottom90">
            <div class="container">
                <div class="row">
                    <div class="col-md-3 hidden-sm hidden-xs">
                        <div class="ct-footer-image">
                            <img src="<?php echo base_url() ?>images/footer-necklace.png" alt="Golden Necklace">
                        </div>
                    </div>
                                        <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18">Pelayanan Customer</h5>
                        <div class="ct-widgetLinks">
                            <ul class="ct-widgetLinks-list">
                                <li><a href="#">Pemesanan dan Pengiriman</a></li>
                                <li><a href="#">Syarat dan ketentuan</a></li>
                                <li><a href="#">Model pembayaran</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18">EDolanan .com</h5>
                        <div class="ct-widgetLinks">
                            <ul class="ct-widgetLinks-list">
                                <li><a href="about-us.html">Memahami tentang kami</a></li>
                                <li><a href="our-mission.html">Keamanan individu</a></li>
                            </ul>
                        </div>
                    </div>
                    <div class="col-sm-4 col-md-3">
                        <h5 class="ct-widgetHeader text-uppercase ct-u-size18 ct-u-paddingBottom20">Media Online</h5>
                        <ul class="ct-socials ct-socials--large ct-socials--white list-inline list-unstyled">
                            <li><a href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                            <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                        </ul>
                    </div>
                </div>
                <div class="row">
                    <div class="ct-u-bottomFooterBar ct-u-paddingTop40 ct-u-marginTop50">
                        <div class="col-sm-6">
                            <div class="ct-rights">
                                <a href="#/">EDolanan .com</a> © Copyright 2017
                            </div>
                        </div>
                        <div class="col-sm-6">
                            <div class="ct-iconPayments pull-right">
                                <ul class="list-inline list-unsyled">
                                    <li><i class="fa fa-cc-visa fa-fw fa-2x"></i></li>
                                    <li><i class="fa fa-cc-mastercard fa-fw fa-2x"></i></li>
                                    <li><i class="fa fa-cc-discover fa-fw fa-2x"></i></li>
                                    <li><i class="fa fa-cc-amex fa-fw fa-2x"></i></li>
                                </ul>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </footer>
    </div>

    <!-- JavaScripts files -->

    <script src="<?php echo base_url(); ?>js/jquery.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery-ui/jquery-ui.js"></script>

    <script src="<?php echo base_url(); ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url(); ?>js/device.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.browser.min.js"></script>
    <script src="<?php echo base_url(); ?>js/snap.min.js"></script>
    <script src="<?php echo base_url(); ?>js/jquery.appear.js"></script>

    <script src="<?php echo base_url(); ?>plugins/headroom/headroom.js"></script>
    <script src="<?php echo base_url(); ?>plugins/headroom/jQuery.headroom.js"></script>
    <script src="<?php echo base_url(); ?>plugins/headroom/init.js"></script>

    <script src="<?php echo base_url(); ?>form/js/contact-form.js"></script>

    <script src="<?php echo base_url(); ?>js/select2/select2.min.js"></script>
    <script src="<?php echo base_url(); ?>js/stacktable/stacktable.js"></script>


    <script src="<?php echo base_url(); ?>plugins/owl/owl.carousel.min.js"></script>
    <script src="<?php echo base_url(); ?>plugins/owl/init.js"></script>

    <script src="<?php echo base_url(); ?>js/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="<?php echo base_url(); ?>js/elevate-zoom/init.js"></script>

    <script src="<?php echo base_url(); ?>js/main.js"></script>    

</body>

<!-- Mirrored from diana.html.themeplayers.net/ by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:44:16 GMT -->
</html>