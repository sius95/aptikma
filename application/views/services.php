<!doctype html>
<!--[if lt IE 7 ]> <html class="ie ie6 ie-lt10 ie-lt9 ie-lt8 ie-lt7 no-js" lang="en"> <![endif]-->
<!--[if IE 7 ]>    <html class="ie ie7 ie-lt10 ie-lt9 ie-lt8 no-js" lang="en"> <![endif]-->
<!--[if IE 8 ]>    <html class="ie ie8 ie-lt10 ie-lt9 no-js" lang="en"> <![endif]-->
<!--[if IE 9 ]>    <html class="ie ie9 ie-lt10 no-js" lang="en"> <![endif]-->
<!--[if gt IE 9]><!--><html class="no-js" lang="en"><!--<![endif]-->
<!-- the "no-js" class is for Modernizr. --> 
<head>

	<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
	
	<!-- Important stuff for SEO, don't neglect. (And don't dupicate values across your site!) -->
	<?php $seo=(array)$seo_homepage->row(); $label=(array)$label_services->row(); $summary=(array)$summary_services->row(); $services=(array)$services_services->row(); $features=(array)$features_services->row(); $other=(array)$other_services->row(); ?>
	<title><?php echo $label["label_".WEB_LANG]; ?></title>
	<meta name="author" content="Aptikma Studio" />
	<meta name="description" content="<?php echo $seo["meta_desc_".WEB_LANG]; ?>" />
	<meta name="keyword" content="<?php echo $seo["meta_keyword_".WEB_LANG]; ?>"/>
	<meta name="tag" content="<?php echo $seo["meta_tag_".WEB_LANG]; ?>"/>
	
	<!-- Don't forget to set your site up: http://google.com/webmasters -->
	<meta name="google-site-verification" content="" />
	<meta name="Copyright" content="" />
	<meta name="viewport" content="width=device-width, initial-scale=1">
	
	<!-- Use Iconifyer to generate all the favicons and touch icons you need: http://iconifier.net -->
	<link rel="shortcut icon" href="<?php echo base_url(); ?>assets/images/favicon/favicon.ico" type="image/x-icon" />
	<link rel="apple-touch-icon" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon.png" />
	<link rel="apple-touch-icon" sizes="57x57" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-57x57.png" />
	<link rel="apple-touch-icon" sizes="72x72" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-72x72.png" />
	<link rel="apple-touch-icon" sizes="76x76" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-76x76.png" />
	<link rel="apple-touch-icon" sizes="114x114" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-114x114.png" />
	<link rel="apple-touch-icon" sizes="120x120" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-120x120.png" />
	<link rel="apple-touch-icon" sizes="144x144" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-144x144.png" />
	<link rel="apple-touch-icon" sizes="152x152" href="<?php echo base_url(); ?>assets/images/favicon/apple-touch-icon-152x152.png" />
	
	<!-- concatenate and minify for production -->
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/style.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/animate.min.css" type="text/css" media="all" />
	
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/magnific-popup.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/icon-fonts.css" type="text/css" media="all" />

    
	<link href='http://fonts.googleapis.com/css?family=Oswald:400,700,300' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Lato:300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
	<link href='http://fonts.googleapis.com/css?family=Open+Sans:400,300,300italic,400italic,600,600italic,700,700italic,800,800italic' rel='stylesheet' type='text/css'>
</head>

<!-- Class ( site_boxed - dark - preloader1 - preloader2 - preloader3 - light_header - dark_sup_menu - menu_button_mode - transparent_header - header_on_side ) -->
<body class="preloader3 light_header">
<div id="preloader">
	<div class="spinner">
		<div class="sk-dot1"></div><div class="sk-dot2"></div>
		<div class="rect3"></div><div class="rect4"></div>
		<div class="rect5"></div>
	</div>
</div>

<div id="main_wrapper">
	<?php $this->load->view('menu');  ?>
        <!-- End Main Header -->	
	
        <!-- Page Title -->
	<section class="content_section white_section page_title has_bg_image bg_header3 enar_parallax">
		<div class="content clearfix">
			<h1 class=""><?php $label=(array)$label_services->next_row(); echo $label["label_".WEB_LANG]; ?></h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Pages</a>
			</div>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- Services Intro -->
	<section class="content_section">
		<div class="content row_spacer no_padding">	
			<div class="rows_container clearfix">
				
				<div class="col-md-8">
					<h2 class="title1 upper"><?php $label=(array)$label_services->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
					<p><?php echo $summary["desc_".WEB_LANG]; ?></p>
					<!--<p><b>Lorem Ipsum is simply dummy text</b> of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known printer of took a galley of type and scrambled it to make a typea specimen book There are many variations of the paes sages the Lorem Ipsum.</p>
					<p>There are many variations of demo text passed sages of Lorem Ipsum available but the majority Lorem Ipsum is simply dummy text of the printing and typeseting industry Lorem in text Ipsum has been the industry standar dummyy text ever since the when an iunesi known.</p>-->
				</div>
				<div class="col-md-4">
					<span class="spacer30"></span>
					<img src="<?php echo base_url(); ?>assets/images/device.png" alt="Image Title">
				</div>
			</div>
		</div>
	</section>
	<!-- End Services Intro -->
	
	<!-- Features Slider 1-->
	<section class="content_section bg_fixed white_section bg10">
		<span class="section_icon"><i class="ico-tools"></i></span>
		<div class="bg_overlay1">
			<div class="content row_spacer_t clearfix">
			
				<div class="main_title centered upper">
				    <h2><span class="line"></span><?php $label=(array)$label_services->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
				</div>
				
				<span class="description4 centered"><?php $label=(array)$label_services->next_row(); echo $label["label_".WEB_LANG]; ?></span>
				
				<div class="png_slider">
					<div class="png_slide">
						<img src="<?php echo base_url(); ?>assets/images/browser1.png" alt="Device1">
					</div>
					<div class="png_slide">
						<img src="<?php echo base_url(); ?>assets/images/browser1.png" alt="Device1">
					</div>
					<div class="png_slide">
						<img src="<?php echo base_url(); ?>assets/images/browser1.png" alt="Device1">
					</div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Features Slider 1 -->
    
	<!-- Icon Boxes -->
	<section class="content_section bg_gray border_b_n">
	        <div class="container row_spacer">
			<div class="main_title centered upper">
				<h2><span class="line"></span><?php $label=(array)$label_services->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
			</div>
			<div class="icon_boxes_con style2 reflection clearfix medium_icon clearfix">
				<div class="col-md-4">
					<div class="service_box clearfix">
					<span class="icon circle"><i class="ico-reload"></i></span>
					<div class="service_box_con">
						<h3><?php echo $services["title_".WEB_LANG]; ?></h3>
					    <span class="desc"><?php echo $services["desc_".WEB_LANG]; ?></span>
					    <a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="service_box clearfix">
					<span class="icon circle"><i class="ico-share4"></i></span>
					<div class="service_box_con">
						<h3><?php $services=(array)$services_services->next_row(); echo $services["title_".WEB_LANG]; ?></h3>
					    <span class="desc"><?php echo $services["desc_".WEB_LANG]; ?></span>
					    <a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="service_box clearfix">
					<span class="icon circle"><i class="ico-esc"></i></span>
					<div class="service_box_con">
						<h3><?php $services=(array)$services_services->next_row(); echo $services["title_".WEB_LANG]; ?></h3>
					    <span class="desc"><?php echo $services["desc_".WEB_LANG]; ?></span>
					    <a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="service_box clearfix">
					<span class="icon circle"><i class="ico-toggle"></i></span>
					<div class="service_box_con">
						<h3><?php $services=(array)$services_services->next_row(); echo $services["title_".WEB_LANG]; ?></h3>
					    <span class="desc"><?php echo $services["desc_".WEB_LANG]; ?></span>
					    <a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="service_box clearfix">
					<span class="icon circle"><i class="ico-bell3"></i></span>
					<div class="service_box_con">
						<h3><?php $services=(array)$services_services->next_row(); echo $services["title_".WEB_LANG]; ?></h3>
					    <span class="desc"><?php echo $services["desc_".WEB_LANG]; ?></span>
					    <a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				    </div>
				</div>
				<div class="col-md-4">
					<div class="service_box clearfix">
					<span class="icon circle"><i class="ico-pie-graph"></i></span>
					<div class="service_box_con">
						<h3><?php $services=(array)$services_services->next_row(); echo $services["title_".WEB_LANG]; ?></h3>
					    <span class="desc"><?php echo $services["desc_".WEB_LANG]; ?></span>
					    <a href="#" class="ser-box-link"><span></span>Read More</a>
					</div>
				    </div>
				</div>
			</div>
		</div>
	</section>
	<!-- End Icon Boxes -->
    
	<!-- Features Icons-->
	<section class="content_section bg_fixed white_section bg3">
		<span class="section_icon"><i class="ico-tablet3"></i></span>
		<div class="bg_overlay">
			<div class="content row_spacer clearfix">
			
			    <div class="main_title centered upper">
				<h2><span class="line"></span><?php $label=(array)$label_services->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
			    </div>
			    
			    <!-- Features Slider -->
			    <div class="feature_icon_slider">
				<!---->
				<div class="feature_icon_slide">
				    <div class="col-md-4">
					<div class="feature_icon on_right">
					    <div class="item">
						<h5>
						    <!--<span class="icon"><span><i class="ico-rocket3"></i></span></span>-->
						    <span class="title"><?php echo $features["title_".WEB_LANG."_1"]; ?></span>
						</h5>
						<span><br><br></span>
						<!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
					    </div>
					    <div class="item">
						<h5>
						    <!--<span class="icon"><span><i class="ico-laptop-windows"></i></span></span>-->
						    <span class="title"><?php echo $features["title_".WEB_LANG."_2"]; ?></span>
						</h5>
						<span><br><br></span>
						<!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
					    </div>
					    <div class="item">
						<h5>
						    <!--<span class="icon"><span><i class="ico-send-o"></i></span></span>-->
						    <span class="title"><?php echo $features["title_".WEB_LANG."_3"]; ?></span>
						</h5>
						<span><br><br></span>
						<!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
					    </div>
					</div>
				    </div>
				    
				    <div class="col-md-4">
					<div class="feature_icon_img">
					    <div class="item">
						<div class="f_s_block circle">
						    <a href="<?php echo base_url(); ?>assets/images/img1.jpg" class="magnific-popup img_popup">
							<span><i class="ico-maximize"></i></span>
							<img src="<?php echo base_url(); ?>assets/images/img1.jpg" alt="Feature Title">
						    </a>
						</div>
					    </div>
					</div>
				    </div>
				    
				    <div class="col-md-4">
					<div class="feature_icon">
					    <div class="item">
                                    <h5>
                                        <!--<span class="icon"><span><i class="ico-heart4"></i></span></span>-->
                                        <span class="title"><?php echo $features["title_".WEB_LANG."_4"]; ?></span>
                                    </h5>
                                    <span><br><br></span>
                                    <!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
                                </div>
                                <div class="item">
                                    <h5>
                                        <!--<span class="icon"><span><i class="ico-home5"></i></span></span>-->
                                        <span class="title"><?php echo $features["title_".WEB_LANG."_5"]; ?></span>
                                    </h5>
                                    <span><br><br></span>
                                    <!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
                                </div>
                                <div class="item">
                                    <h5>
                                        <!--<span class="icon"><span><i class="ico-play6"></i></span></span>-->
                                        <span class="title"><?php echo $features["title_".WEB_LANG."_6"]; ?></span>
                                    </h5>
                                    <span><br><br></span>
                                    <!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
                                </div>
					</div>
				    </div>
				</div>
				<!---->
                    
                    <!---->
                    <div class="feature_icon_slide">
                        <div class="col-md-4">
                            <div class="feature_icon on_right">
                                <div class="item">
                                    <h5>
                                        <!--<span class="icon"><span><i class="ico-dashboard2"></i></span></span>-->
                                        <span class="title"><?php $features=(array)$features_services->next_row(); echo $features["title_".WEB_LANG."_1"]; ?></span>
                                    </h5>
                                    <span><br><br></span>
                                    <!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
                                </div>
                                <div class="item">
                                    <h5>
                                        <!--<span class="icon"><span><i class="ico-browser"></i></span></span>-->
                                        <span class="title"><?php echo $features["title_".WEB_LANG."_2"]; ?></span>
                                    </h5>
                                    <span><br><br></span>
                                    <!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
                                </div>
                                <div class="item">
                                    <h5>
                                        <!--<span class="icon"><span><i class="ico-write"></i></span></span>-->
                                        <span class="title"><?php echo $features["title_".WEB_LANG."_3"]; ?></span>
                                    </h5>
                                    <span><br><br></span>
                                    <!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
                                </div>
                            </div>
                        </div>
				    
				    <div class="col-md-4">
                            <div class="feature_icon_img">
                                <div class="item">
                                    <div class="f_s_block circle">
                                        <a href="<?php echo base_url(); ?>assets/images/img2.jpg" class="magnific-popup img_popup">
                                            <span><i class="ico-maximize"></i></span>
                                            <img src="<?php echo base_url(); ?>assets/images/img2.jpg" alt="Feature Title">
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                        
                        <div class="col-md-4">
                            <div class="feature_icon">
                                <div class="item">
                                    <h5>
                                        <!--<span class="icon"><span><i class="ico-monitor2"></i></span></span>-->
                                        <span class="title"><?php echo $features["title_".WEB_LANG."_4"]; ?></span>
                                    </h5>
                                    <span><br><br></span>
                                    <!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
                                </div>
                                <div class="item">
                                    <h5>
                                        <!--<span class="icon"><span><i class="ico-cart2"></i></span></span>-->
                                        <span class="title"><?php echo $features["title_".WEB_LANG."_5"]; ?></span>
                                    </h5>
                                    <span><br><br></span>
                                    <!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
                                </div>
                                <div class="item">
                                    <h5>
                                        <!--<span class="icon"><span><i class="ico-chart"></i></span></span>-->
                                        <span class="title"><?php echo $features["title_".WEB_LANG."_6"]; ?></span>
                                    </h5>
                                    <span><br><br></span>
                                    <!--<span>There are many variations of passages of Lorem Text on Ipsum available but the majority.</span>-->
                                </div>
                            </div>
                        </div>
                    </div>
                    <!---->
                    
                </div>
                <!-- End Features Slider -->
			    
			</div>
		</div>
	</section>
	<!-- End Features Icons -->
        
	<!-- Tabs 1 -->
	<section class="content_section bg_gray border_t_n">
	    <div class="content row_spacer">
		<div class="main_title centered upper">
		    <h2><span class="line"><span class="dot"></span></span><?php $label=(array)$label_services->next_row(); echo $label["label_".WEB_LANG]; ?></h2>
		</div>
		<div class="hm-tabs tabs2 upper_title">
		    <nav class="clearfix">
			<ul class="tabs-navi">
			    <li><a data-content="<?php echo $other["title_".WEB_LANG]; ?>" class="selected" href="#"><span><i class="ico-heart-o"></i></span><?php echo $other["title_".WEB_LANG]; ?></a></li>
			    <li><a data-content="<?php $other=(array)$other_services->next_row(); echo $other["title_".WEB_LANG]; ?>" href="#"><span><i class="ico-anchor2"></i></span><?php echo $other["title_".WEB_LANG]; ?></a></li>
			    <!--<li><a data-content="gallery" href="#"><span><i class="ico-microphone2"></i></span>Gallery</a></li>
			    <li><a data-content="technology" href="#"><span><i class="ico-sun4"></i></span>Technology</a></li>
			    <li><a data-content="settings" href="#"><span><i class="ico-location3"></i></span>Settings</a></li>-->
			</ul> <!-- tabs-navi -->
		    </nav>
		
		    <ul class="tabs-body">
			<li data-content="<?php $other=(array)$other_services->row(); echo $other["title_".WEB_LANG]; ?>" class="selected clearfix">
			    
			    <div class="tab_img">
				    <a class="magnific-popup img_popup" href="<?php echo base_url(); ?>assets/images/home2.jpg">
				    <span><i class="ico-maximize"></i></span>
				    <img class="popup_img" src="<?php echo base_url(); ?>assets/images/home2.jpg" alt="vission">
				</a>
			    </div>
			    <p><?php echo $other["desc_".WEB_LANG]; ?></p>
			</li>
		
			<li data-content="<?php $other=(array)$other_services->next_row(); echo $other["title_".WEB_LANG]; ?>" class="clearfix">
			    
			    <div class="tab_img">
				    <a class="magnific-popup img_popup" href="<?php echo base_url(); ?>assets/images/home2.jpg">
				    <span><i class="ico-maximize"></i></span>
				    <img class="popup_img" src="<?php echo base_url(); ?>assets/images/home2.jpg" alt="vission">
				</a>
			    </div>
			    <p><?php echo $other["desc_".WEB_LANG]; ?></p>
			</li>
		
			<!--<li data-content="gallery">
			    <p>Gallery Lorem ipsum dolor sit amet, consectetur adipisicing elit. Cumque tenetur aut, cupiditate, libero eius rerum incidunt dolorem quo in officia.</p>
		
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. A ipsa vero, culpa doloremque voluptatum consectetur mollitia, atque expedita unde excepturi id, molestias maiores delectus quos molestiae. Ab iure provident adipisci eveniet quisquam ratione libero nam inventore error pariatur optio facilis assumenda sint atque cumque, omnis perspiciatis. Maxime minus quam voluptatum provident aliquam voluptatibus vel rerum. Soluta nulla tempora aspernatur maiores! Animi accusamus officiis neque exercitationem dolore ipsum maiores delectus asperiores reprehenderit pariatur placeat, quaerat sed illum optio qui enim odio temporibus, nulla nihil nemo quod dicta consectetur obcaecati vel. Perspiciatis animi corrupti quidem fugit deleniti, atque mollitia labore excepturi ut.</p>
			</li>
		
			<li data-content="technology">
			    <p>Store Lorem ipsum dolor sit amet, consectetur adipisicing elit. Earum recusandae rem animi accusamus quisquam reprehenderit sed voluptates, numquam, quibusdam velit dolores repellendus tempora corrupti accusantium obcaecati voluptate totam eveniet laboriosam?</p>
		
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Eligendi, enim, pariatur. Ab assumenda, accusantium! Consequatur magni placeat quae eos dicta, cum expedita sunt facilis est impedit possimus dolorum sequi nostrum nobis sit praesentium molestias nulla laudantium fugit corporis nam ut saepe harum ipsam? Debitis accusantium, omnis repudiandae modi, distinctio illo voluptatibus aperiam odio veritatis, quam perferendis eaque ullam. Temporibus tempore ad voluptates explicabo ea sit deleniti ipsum quos dolores tempora odio, ab corporis molestiae, eaque optio, perferendis! Cumque libero quia modi! Totam magni rerum id iusto explicabo distinctio, magnam, labore sed nemo expedita velit quam, perspiciatis non temporibus sit minus voluptatum. Iste, cumque sunt suscipit facere iusto asperiores, ullam dolorum excepturi quidem ea quibusdam deserunt illo. Nesciunt voluptates repellat ipsam.</p>
			</li>
		
			<li data-content="settings">
			    <p>Settings Lorem ipsum dolor sit amet, consectetur adipisicing elit. Laboriosam nam magni, ullam nihil a suscipit, ex blanditiis, adipisci tempore deserunt maiores. Nostrum officia, ratione enim eaque nihil quis ea, officiis iusto repellendus. Animi illo in hic, maxime deserunt unde atque a nesciunt? Non odio quidem deserunt animi quod impedit nam, voluptates eum, voluptate consequuntur sit vel, et exercitationem sint atque dolores libero dolorem accusamus ratione iste tenetur possimus excepturi. Accusamus vero, dignissimos beatae tempore mollitia officia voluptate quam animi vitae.</p>
		
			    <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Similique ipsam eum reprehenderit minima at sapiente ad ipsum animi doloremque blanditiis unde omnis, velit molestiae voluptas placeat qui provident ab facilis.</p>
			</li>-->
		    </ul>
		    <!-- Tabs Content -->
		</div> 
		<!-- End Tabs Container --> 
	    </div>
	</section>
	<!-- End Tabs 1 -->
    
	<!-- footer -->
	<?php $this->load->view('footer');  ?>
	<!-- End footer -->
	<a href="#0" class="hm_go_top"></a>
</div>
<!-- End wrapper -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.js"><\/script>')</script>
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

<!-- this is where we put our custom functions -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/functions.js"></script>
</body>
</html>