<!DOCTYPE html>
<!--[if IE 8 ]>
<html class="no-js ie8" lang="en"> <![endif]-->
<!--[if IE 9 ]>
<html class="no-js ie9" lang="en"> <![endif]-->
<!--[if (gt IE 9)|!(IE)]><!-->
<html class="no-js" lang="en"> <!--<![endif]-->

<!-- Mirrored from diana.html.themeplayers.net/login.html by HTTrack Website Copier/3.x [XR&CO'2014], Tue, 20 Oct 2015 03:47:53 GMT -->
<head lang="en">
    <meta charset="UTF-8">
    <meta name="description" content="EDolanan .com">
    <meta name="author" content="CreateIT">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">

    <title>Edolanan .com</title>
    <link rel="stylesheet" href="<?php echo base_url() ?>fonts/font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="<?php echo base_url() ?>css/style.css">
    <link rel="stylesheet" href="<?php echo base_url() ?>css/select2.css">

   <!-- <link rel="stylesheet" type="text/css" href="css/bootstrap.css">
    <link rel="stylesheet" type="text/css" href="css/style.css">-->


    <!--[if lt IE 9]>
    <script src="bootstrap/js/html5shiv.min.js"></script>
    <script src="bootstrap/js/respond.min.js"></script>
    <![endif]-->

    <script src="<?php echo base_url() ?>js/modernizr.custom.js"></script>
</head>


            <?php  $cart_check = $this->cart->contents();
            
            // If cart is empty, this will show below message.
             if(empty($cart_check)) {
             //echo 'To add products to your shopping cart click on "Add to Cart" Button'; 
       ?>
       
       <?php
             }  ?>     
              
                  <?php
                  // All values of cart store in "$cart". 
                  if ($cart = $this->cart->contents()): ?> 
    <?php endif; ?>

<?php
                    $grand_total = 0;
                    $i = 1;
          $qty = 0;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        // <input type="hidden" name="cart[1][id]" value="1" />
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                        ?>
                        
                       <?php $i++; ?>
                           
              <!--
                           
                                $ <?php echo number_format($item['price'], 2); ?>
                                <?php echo form_input('cart[' . $item['id'] . '][qty]', $item['qty'], 'maxlength="3" size="1" style="text-align: right"'); ?>                            
              <?php $grand_total = $grand_total + $item['subtotal']; ?>
              <?php $qty = $qty + $item['qty']; ?>
              <?php $total_qty =+ $item['qty']; ?>                          
                                $ <?php echo number_format($item['subtotal'], 2) ?> 
                -->
                     <?php endforeach; ?>  

<body class="ct-headroom--scrollUpBoth cssAnimate">
<div class="ct-preloader"><div class="ct-preloader-content"></div></div>
<?php $this->load->view('header'); ?>

        <div class="ct-contentWrapper">


            <div class="container">
                <div class="row">
                    <div class="col-md-8">

				<?php
                  // All values of cart store in "$cart". 
                  //if ($cart = $this->cart->contents()): ?>				
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Sudah menjadi anggota? <span class="ct-u-colorGrey">Login</span></h4>
                        <div class="ct-u-size16 ct-fw-700 ct-u-paddingBottom20 ct-u-paddingTop30">Kemudahan menjadi anggota... </div>
                        
                        <form class="form-horizontal form-signin ct-u-paddingBottom20" method="post" action="<?php echo base_url(); ?>admin/login/validate_credentials/">
                            <div class="form-group">
                                <label for="username" class="col-sm-2 control-label">Email: </label>
                                <div class="col-sm-10">
                                    <input type="text" name="email_address" placeholder="Email" class="form-control" id="username" required>
                                </div>
                            </div>
                            <div class="form-group">
                                <label for="password" class="col-sm-2 control-label">Password:</label>
                                <div class="col-sm-10">
                                    <input type="password" name="password" placeholder="Password" class="form-control" id="password">
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10">
                                    <div class="pull-left ct-rememberPassword">
                                        <div class="checkbox">
                                            <input type="checkbox" id="rememberPassword" name="remember_me">
                                            <label for="rememberPassword">
                                                <span class="ct-rememberPassword-text ct-u-size14 ct-u-colorGrey">Remember my password</span>
                                            </label>
                                        </div>
                                    </div>
                                    <div class="pull-right ct-forgotPassword">
                                        <a href="#" class="ct-forgotPassword-text">Lost your Password?</a>
                                    </div>
                                    <div class="clearfix"></div>
                                </div>
                            </div>
                            <div class="form-group">
                                <div class="col-sm-offset-2 col-sm-10"> 
                                <?php
                                    if(isset($message_error) && $message_error){
                                        echo '<div class="alert alert-error">';
                                          echo '<a class="close" data-dismiss="alert">×</a>';
                                          echo '<strong>Oh snap!</strong> Change a few things up and try submitting again.';
                                        echo '</div>';             
                                    }
                                ?> 

				<?php
                    $grand_total = 0;
                    $i = 1;

                    foreach ($cart as $item):
                        //   echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        //  Will produce the following output.
                        //echo '<input type="text" name="cart[1][id]" value="'.$item['name'].'" />';
                        
                        echo form_hidden('cart[' . $item['id'] . '][id]', $item['id']);
                        echo form_hidden('cart[' . $item['id'] . '][rowid]', $item['rowid']);
                        echo form_hidden('cart[' . $item['id'] . '][name]', $item['name']);
                        echo form_hidden('cart[' . $item['id'] . '][price]', $item['price']);
                        echo form_hidden('cart[' . $item['id'] . '][qty]', $item['qty']);
                ?>
				<?php //echo $item['name']; ?>
				<input type="hidden" name="ids[]" placeholder="Name" value="<?php echo $item['id']; ?>">
				<input type="hidden" name="names[]" placeholder="Name" value="<?php echo $item['name']; ?>">
				<input type="hidden" name="prices[]" placeholder="Name" value="<?php echo $item['price']; ?>">
				<input type="hidden" name="qtys[]" placeholder="Name" value="<?php echo $item['qty']; ?>">
				<?php endforeach; ?>
				
                                    <input type="submit" name="submit" value="Login" class="btn btn-large btn-default" />
                                </div>
                            </div>
                        </form>
						
                    </div>
                    <div class="col-md-4">
                        <h4 class="ct-headerBox ct-u-borderBottom ct-u-paddingBottom20 text-left ct-u-paddingTop50">Follow Us</h4>
                        <div class="ct-u-paddingBottom20 ct-u-paddingTop30">
                            <ul class="ct-socials ct-socials--small ct-socials--black list-inline list-unstyled">
                                  <li><a href="#"><i class="fa fa-facebook fa-fw"></i></a></li>
                                <li><a href="#"><i class="fa fa-twitter fa-fw"></i></a></li>
                                <li><a href="#"><i class="fa fa-rss fa-fw"></i></a></li>
                            </ul>
                        </div>
                        <div class="tweets_display">

                        </div>
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
                                <a href="#">EDolanan .com</a> © Copyright 2017
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

    <script src="<?php echo base_url() ?>js/jquery.min.js"></script>

    <script src="<?php echo base_url() ?>bootstrap/js/bootstrap.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.placeholder.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.easing.1.3.js"></script>
    <script src="<?php echo base_url() ?>js/device.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.browser.min.js"></script>
    <script src="<?php echo base_url() ?>js/snap.min.js"></script>
    <script src="<?php echo base_url() ?>js/jquery.appear.js"></script>

    <script src="<?php echo base_url() ?>plugins/headroom/headroom.js"></script>
    <script src="<?php echo base_url() ?>plugins/headroom/jQuery.headroom.js"></script>
    <script src="<?php echo base_url() ?>plugins/headroom/init.js"></script>

    <script src="<?php echo base_url() ?>form/js/contact-form.js"></script>

    <script src="<?php echo base_url() ?>js/select2/select2.min.js"></script>
    <script src="<?php echo base_url() ?>js/stacktable/stacktable.js"></script>

    <script src="<?php echo base_url() ?>js/elevate-zoom/jquery.elevatezoom.js"></script>
    <script src="<?php echo base_url() ?>js/elevate-zoom/init.js"></script>
    <script src="<?php echo base_url() ?>js/main.js"></script>

    <script src="<?php echo base_url() ?>twitter/js/jquery.tweet.js"></script>   

</body>

</html>