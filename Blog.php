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
	<?php $seo=(array)$seo_homepage->row(); $label=(array)$label_blog->row(); $blog=(array)$blog_blog->result(); $category=(array)$category_blog->row(); $other=(array)$other_services->row(); ?>
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
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/bootstrap.css" type="text/css" media="all" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/mediaelementplayer.css" />
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
	<header id="site_header">
		<div class="topbar"><!-- class ( topbar_colored  ) -->
			<div class="content clearfix">
			
				<div class="top_details clearfix f_left">
					<div class="languages-select languages-drop">
						<span><i class="ico-globe4"></i><span>Indonesia</span></span>
						<div class="languages-panel">
							<ul class="languages-panel-con">
								<li class="active"><a href="#">Indonesia<i class="ico-check lang_checked"></i></a></li>
								<li><a href="#">English</a></li>
							</ul>
						</div>
					</div>

				</div>
			        
				<div class="top-socials box_socials f_right">
					<a href="#" target="_blank">
						<span class="soc_name">Facebook</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-facebook4"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Twitter</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-twitter4"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Google+</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-google-plus"></i>
					</a>     
					<a href="skype:#?call">
						<span class="soc_name">Skype</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-skype"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Picassa</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-picassa"></i>
					</a>
					<a href="#" target="_blank">
						<span class="soc_name">Vimeo</span>
						<span class="soc_icon_bg"></span>
						<i class="ico-vimeo"></i>
					</a>
				 </div>
			</div>
			<!-- End content -->
			<span class="top_expande not_expanded">
				<i class="no_exp ico-angle-double-down"></i>
				<i class="exp ico-angle-double-up"></i>
			</span>
		</div>
		<!-- End topbar -->
			
		<div id="navigation_bar">
			<div class="content">
				<div id="logo">
					<a href="<?php echo base_url(); ?>aptikma/index">
						<img class="logo_dark" src="<?php echo base_url(); ?>assets/images/logo-dark.png" alt="Enar Logo">
						<img class="logo_light" src="<?php echo base_url(); ?>assets/images/logo-light.png" alt="Enar Logo">
					</a>
				</div>
				
				<!-- Top Search -->
				<!--form class="top_search clearfix small_top_search">
					<div class="top_search_con">
						<input type="text" class="s" placeholder="Search Here ...">
						<span class="top_search_icon"><i class="ico-search4"></i></span>
						<input type="submit" class="top_search_submit" >
					</div>
				</form>
				<!-- End Top Search -->
				<nav id="main_nav">
					<div id="nav_menu">
						<span class="mobile_menu_trigger">
						    <a href="#" class="nav_trigger"><span></span></a>
						</span>		
						<ul id="navy" class="clearfix">
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); ?>aptikma/index"><span>Home</span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); ?>aptikma/aboutus"><span>Tentang Kami</span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
							    <a href="<?php echo base_url(); ?>aptikma/services"><span>Layanan</span></a>
							</li>
							<li class="has_tab_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); ?>aptikma/portfolio"><span>Portfolio</span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); ?>aptikma/contactus"><span>Kontak</span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle current_page_item">
								<a href="<?php echo base_url(); ?>aptikma/blog"><span>Blog</span></a>
							</li>
							<li class="normal_menu mobile_menu_toggle">
								<a href="<?php echo base_url(); ?>aptikma/career"><span>Karir</span></a>
							</li>
						</ul>
					</div>
				</nav>
				<!-- End Nav -->	
				
				<div class="clear"></div>
			</div>
		</div>
 	</header>
        <!-- End Main Header -->	
	
	<!-- Page Title -->
	<section class="content_section page_title">
		<div class="content clearfix">
			<h1><?php $label=(array)$label_blog->next_row();  echo $label["label_".WEB_LANG]; ?></h1>
			<div class="breadcrumbs">
				<a href="#">Home</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<a href="#">Blog</a>
				<span class="crumbs-spacer"><i class="ico-angle-right"></i></span>
				<span>Blog Blocks</span>
			</div>
		</div>
	</section>
	<!-- End Page Title -->
	
	<!-- News Bar -->
	<section class="content_section hm_new_con">
		<div class="content clearfix">
			<div class="hm_new_title_con">
				<h4>
					<i class="ico-streetsign"></i>
					<span><span class="latest_word"></span> <?php $label=(array)$label_blog->next_row();  echo $label["label_".WEB_LANG]; ?></span>
				</h4>
			</div>
			<div class="hm_new_bar">
				<div class="hm_new_bar_slider">
					<?php foreach($blog as $latest)
					{
					?>
					<div class="news_item">
						<i class="ico-angle-right"></i>
						<a href="#"><span><?php echo $latest->{"title"}; ?></span></a>
					</div>
					<?php
					}
					?>
				</div>
				<div class="hm_new_bar_controll">
					<a class="hm_new_bar_controll_btn play" href="#">
						<i class="pause_news ico-pause2"></i>
						<i class="play_news ico-playback-play"></i>
					</a>
				</div>
			</div>
		</div>
	</section>
	<!-- End News Bar -->
	
	<!-- Our Blog Grids -->
	<section class="content_section">
		<div class="content row_spacer">	
			<div class="main_title centered upper">
				<h2><span class="line"><i class="ico-pencil2"></i></span><?php $label=(array)$label_blog->next_row();  echo $label["label_".WEB_LANG]; ?></h2>
			</div>
			
			<!-- All Content -->
			<div class="content_spacer clearfix">
				<div class="content_block col-md-9 f_left">
					<div class="hm_blog_full_list hm_blog_list clearfix">
						<!--<div class="blog_grid_block clearfix">
							<div class="post_format_con">
								<span>
									<a href="#">
										<i class="ico-gallery"></i>
									</a>
								</span>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="porto_galla">
										<a href="<?php echo base_url(); ?>assets/images/blog/blog3-large.jpg" class="feature_inner_ling">
											<img src="<?php echo base_url(); ?>assets/images/blog/blog3-large.jpg" alt="Post Title">
										</a>
										<a href="<?php echo base_url(); ?>assets/images/blog/blog5-large.jpg" class="feature_inner_ling">
											<img src="<?php echo base_url(); ?>assets/images/blog/blog5-large.jpg" alt="Post Title">
										</a>
										<a href="<?php echo base_url(); ?>assets/images/blog/blog4-large.jpg" class="feature_inner_ling">
											<img src="<?php echo base_url(); ?>assets/images/blog/blog4-large.jpg" alt="Post Title">
										</a>
										<a href="<?php echo base_url(); ?>assets/images/blog/blog6-large.jpg" class="feature_inner_ling">
											<img src="<?php echo base_url(); ?>assets/images/blog/blog6-large.jpg" alt="Post Title">
										</a>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<h6 class="title"><a href="#">Awesome Gallery Post</a></h6>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>134 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Photography</a>, <a href="#">Tutorials</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
								<a class="btn_a" href="#">
									<span>
										<i class="in_left ico-angle-right"></i>
										<span>Details</span>
										<i class="in_right ico-angle-right"></i>
									</span>
								</a>
							</div>
						</div>-->
						<?php foreach($blog as $blogs)
						{
						?>
						<div class="blog_grid_block clearfix">
							<div class="post_format_con">
								<span>
									<a href="#">
										<i class="ico-pencil4"></i>
									</a>
								</span>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<a href="<?php echo base_url(); ?>assets/images/blog/blog5-large.jpg" class="feature_inner_ling" data-rel="magnific-popup">
										<img src="<?php echo base_url(); ?>assets/images/blog/blog5-large.jpg" alt="Post Title">
									</a>
								</div>
							</div>
							<div class="blog_grid_con">
								<h6 class="title"><a href="#"><?php echo $blogs->{"title"}; ?></a></h6>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span><?php $date=date_create($blogs->{"date"});  echo date_format($date,"l, j F Y"); ?></span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#"><?php echo $blogs->{"name_".WEB_LANG}; ?></a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span><?php echo $blogs->{"author"}; ?></span>
										</a>
									</span>
								</span>
								<p class="desc"><?php echo $blogs->{"desc"}; ?></p>
								<a class="btn_a" href="#">
									<span>
										<i class="in_left ico-angle-right"></i>
										<span>Details</span>
										<i class="in_right ico-angle-right"></i>
									</span>
								</a>
							</div>
						</div>
						<?php
						}
						?>
						<!--<div class="blog_grid_block clearfix">
							<div class="post_format_con">
								<span>
									<a href="#">
										<i class="ico-sound3"></i>
									</a>
								</span>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="embed-container">
										<a href="http://vimeo.com/29193046" data-rel="magnific-popup"></a>
										<iframe src="http://player.vimeo.com/video/29193046" width="100%" style="border: 0px none;" webkitallowfullscreen mozallowfullscreen allowfullscreen></iframe>
									</div>
	
								</div>
							</div>
							<div class="blog_grid_con">
								<h6 class="title"><a href="#">Vimeo Video Post</a></h6>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>64 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Video</a>, <a href="#">Training</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
								<a class="btn_a" href="#">
									<span>
										<i class="in_left ico-angle-right"></i>
										<span>Details</span>
										<i class="in_right ico-angle-right"></i>
									</span>
								</a>
							</div>
						</div>-->
	
						<!--<div class="blog_grid_block clearfix">
							<div class="post_format_con">
								<span>
									<a href="#">
										<i class="ico-video-camera"></i>
									</a>
								</span>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="embed-container">
										<a href="https://www.youtube.com/embed/JAUoeqvedMo" data-rel="magnific-popup"></a>
										<iframe width="100%" src="https://www.youtube.com/embed/JAUoeqvedMo" frameborder="0" allowfullscreen></iframe>
									</div>
	
								</div>
							</div>
							<div class="blog_grid_con">
								<h6 class="title"><a href="#">YouTube Video Post</a></h6>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>98 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Video</a>, <a href="#">Training</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
								<a class="btn_a" href="#">
									<span>
										<i class="in_left ico-angle-right"></i>
										<span>Details</span>
										<i class="in_right ico-angle-right"></i>
									</span>
								</a>
							</div>
						</div>-->
	
						<!--<div class="blog_grid_block clearfix">
							<div class="post_format_con">
								<span>
									<a href="#">
										<i class="ico-image4"></i>
									</a>
								</span>
							</div>
							<div class="feature_inner">
								<div class="self_hosted_container">
									<audio class="hosted_audio" id="audio_player_1" width="100%" preload="metadata" controls="controls">
										<source src="http://www.enar.ideal-theme.com/html5/files/alro7-tasry.mp3" type="audio/mp3" />
										
									</audio>
								</div>
							</div>
							<div class="blog_grid_con">
								<h6 class="title"><a href="#">Self Hosted Audio</a></h6>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>15 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Audio</a>, <a href="#">Music</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
								<a class="btn_a" href="#">
									<span>
										<i class="in_left ico-angle-right"></i>
										<span>Details</span>
										<i class="in_right ico-angle-right"></i>
									</span>
								</a>
							</div>
						</div>
						
						<div class="blog_grid_block format_quote clearfix">
							<div class="post_format_con">
								<span>
									<a href="#">
										<i class="ico-quote-right"></i>
									</a>
								</span>
							</div>
							<div class="feature_inner">
								<a href="#" class="quote_con">
									<span>There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</span>
									<span class="quote_author">Mike Ehrmantraut</span>
								</a>
							</div>
							<div class="blog_grid_con">
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>34 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Articles</a>, <a href="#">Events</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<a class="btn_a" href="#">
									<span>
										<i class="in_left ico-angle-right"></i>
										<span>Details</span>
										<i class="in_right ico-angle-right"></i>
									</span>
								</a>
							</div>
						</div>-->
						
						<!--<div class="blog_grid_block clearfix">
							<div class="post_format_con">
								<span>
									<a href="#">
										<i class="ico-sound3"></i>
									</a>
								</span>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="embed-container">
										<iframe width="100%" style="overflow:hidden;border:none;" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/tracks/53909324&amp;auto_play=false&amp;hide_related=false&amp;show_comments=true&amp;show_user=true&amp;show_reposts=false&amp;visual=true"></iframe>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<h6 class="title"><a href="#">SoundCloud Audio Post</a></h6>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>45 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">Tutorials</a>, <a href="#">Audio</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
								<a class="btn_a" href="#">
									<span>
										<i class="in_left ico-angle-right"></i>
										<span>Details</span>
										<i class="in_right ico-angle-right"></i>
									</span>
								</a>
							</div>
						</div>-->
						
						<!--<<div class="blog_grid_block clearfix">
							<div class="post_format_con">
								<span>
									<a href="#">
										<i class="ico-video-camera"></i>
									</a>
								</span>
							</div>
							<div class="feature_inner">
								<div class="feature_inner_corners">
									<div class="self_hosted_container">
										<video class="hosted_video" id="video_player_1" width="100%" height="100%" poster="images/video-boster.jpg" preload="metadata" controls="controls" style="width:100%;height:100%;">
											<source src="http://www.enar.ideal-theme.com/html5/files/v1.mp4" type="video/mp4" />
										<source src="http://www.enar.ideal-theme.com/html5/files/christmas_snow.ogv" type="video/ogg" />
										<source src="http://www.enar.ideal-theme.com/html5/files/christmas_snow.webm" type="video/webm" />
										</video>
									</div>
								</div>
							</div>
							<div class="blog_grid_con">
								<h6 class="title"><a href="#">Self Hosted Video Post</a></h6>
								<span class="meta">
									<span class="meta_part">
										<a href="#">
											<i class="ico-clock7"></i>
											<span>February 15, 2015</span>
										</a>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-comment-o"></i>
											<span>11 Comments</span>
										</a>
									</span>
									<span class="meta_part">
										<i class="ico-folder-open-o"></i>
										<span>
											<a href="#">News</a>, <a href="#">Events</a>
										</span>
									</span>
									<span class="meta_part">
										<a href="#">
											<i class="ico-user5"></i>
											<span>John Doe</span>
										</a>
									</span>
								</span>
								<p class="desc">Alteration in some form, by injected humour, or randomised words which don't look even slightly believable There are many variations of passages of Lorem Ipsum available, but the majority have suffered alteration in some form, by injected humour.</p>
								<a class="btn_a" href="#">
									<span>
										<i class="in_left ico-angle-right"></i>
										<span>Details</span>
										<i class="in_right ico-angle-right"></i>
									</span>
								</a>
							</div>
						</div>-->
					</div>
					<!-- End blog List -->
					
					<!-- Pagination -->
					<div id="pagination" class="pagination">
						<ul class="clearfix">
							<li class="prev_pagination"><a href="#"><i class="ico-arrow-left4"></i></a></li>
							<li class="active"><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li class="next_pagination"><a href="#"><i class="ico-arrow-right4"></i></a></li>
						</ul>
					</div>
					<!-- End Pagination -->
				</div>			
				<!-- End Content Block -->
				
				<!-- sidebar -->
				<aside id="sidebar" class="col-md-3 right_sidebar">
					
					<!-- Products Slider -->
					<div class="widget_block">
						<h6 class="widget_title"><?php $label=(array)$label_blog->next_row();  echo $label["label_".WEB_LANG]; ?></h6>
						<div class="search_block">
							<form action="" method="get" class="widget_search">
								<input type="search" placeholder="" id="s" name="s" class="serch_input">
								<button class="search_btn" id="searchsubmit" type="submit">
									<i class="ico-search2"></i>
								</button>
								<div class="clear"></div>
							</form>
						</div>
						
					</div>
					<!-- End Products Slider -->
					
					<!-- Tag Cloud -->
					<div class="widget_block">
						<h6 class="widget_title"><?php $label=(array)$label_blog->next_row();  echo $label["label_".WEB_LANG]; ?></h6>
						<div class="tagcloud style2 clearfix">
							<a href="#"><span class="tag">Responnsive</span><span class="num">12</span></a>
							<a href="#"><span class="tag">Creative</span><span class="num">24</span></a>
							<a href="#"><span class="tag">CSS3</span><span class="num">8</span></a>
							<a href="#"><span class="tag">Design</span><span class="num">12</span></a>
							<a href="#"><span class="tag">Graphic</span><span class="num">4</span></a>
							<a href="#"><span class="tag">HTML5</span><span class="num">56</span></a>
						</div>
					</div>
					<!-- End Tag Cloud -->				
					
					<!-- Categories -->
					<div class="widget_block">
						<h6 class="widget_title"><?php $label=(array)$label_blog->next_row();  echo $label["label_".WEB_LANG]; ?></h6>
						<ul class="cat_list_widget">
							<li>
								<a href="#"><?php echo $category["name_".WEB_LANG]; ?></a>
								<span class="num_posts">61</span>
							</li>
							<li>
								<a href="#"><?php $category=(array)$category_blog->next_row(); echo $category["name_".WEB_LANG]; ?></a>
								<span class="num_posts">22</span>
							</li>
							<li>
								<a href="#"><?php $category=(array)$category_blog->next_row(); echo $category["name_".WEB_LANG]; ?></a>
								<span class="num_posts">78</span>
							</li>
							<li>
								<a href="#"><?php $category=(array)$category_blog->next_row(); echo $category["name_".WEB_LANG]; ?></a>
								<span class="num_posts">12</span>
							</li>
						</ul>
					</div>
					<!-- End Categories -->					
					
				</aside>
				<!-- End sidebar -->
			</div>
			<!-- End All Content -->
		</div>
	</section>
	<!-- End Our Blog Grids -->
	
	
	<!-- footer -->
	<footer id="footer">
		<div class="footer_copyright">
			<div class="container clearfix">
				<div class="col-md-6">
					<span class="footer_copy_text">Copyright &copy; 2016 <a href="#">Aptikma Studio</a> -  All Rights Reserved</span>
				</div>
				<div class="col-md-6 clearfix">
					<ul class="footer_menu clearfix">
						<li><a href="#"><span>Home</span></a></li>
						<li>/</li>
						<li><a href="#"><span>About Us</span></a></li>
						<li>/</li>
						<li><a href="#"><span>Help Center</span></a></li>
						<li>/</li>
						<li><a href="#"><span>Contact Us</span></a></li>
					</ul>
				</div>
			</div>
		</div>
	</footer>
	<!-- End footer -->
	<a href="#" class="hm_go_top">Top</a>
</div>
<!-- End wrapper -->

<script type="text/javascript" src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
		<script>window.jQuery || document.write('<script src="<?php echo base_url(); ?>assets/js/jquery.js"><\/script>')</script>
<script src="<?php echo base_url(); ?>assets/js/plugins.js"></script>

<script src="<?php echo base_url(); ?>assets/js/mediaelement-and-player.min.js"></script>
<script src="<?php echo base_url(); ?>assets/js/isotope.pkgd.min.js"></script>
<!-- this is where we put our custom functions -->
<script type="text/javascript" src="<?php echo base_url(); ?>assets/js/functions.js"></script>
</body>
</html>