<?php /* @var $this Controller */ ?>
<!DOCTYPE html>
<html>
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8">
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.base.css" type="text/css" media="screen" />
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.alienNav4.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-1.11.1.min.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jquery-ui.js"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pages/homepage/jquery.carousel.min.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pages/homepage/jquery.easing.js" charset="utf-8"></script>
<script type="text/javaScript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pages/scroller/slideshow-v4.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pages/general/windowscroll.js" charset="utf-8"></script>
<script language="javascript" type="text/javascript">
    <!--
      var page_url = escape(document.URL);
      var ref_url = escape(document.referrer);
    
      var mpt = new Date();
      var mpts = mpt.getTimezoneOffset() + mpt.getTime();
    /*
      if (window.location.protocol == "https:"){
        document.write("<iframe src=\"https:\/\/secure.img-cdn.mediaplex.com\/0\/12309\/universal.html?page_name=us_content&mpt=" + mpts + "&url=" + page_url + "&ref=" + ref_url + "\" HEIGHT=1 WIDTH=1 FRAMEBORDER=0><\/iframe>");
      } else {
        document.write("<iframe src=\"http:\/\/img-cdn.mediaplex.com\/0\/12309\/universal.html?page_name=us_content&mpt=" + mpts + "&url=" + page_url + "&ref=" + ref_url + "\" HEIGHT=1 WIDTH=1 FRAMEBORDER=0><\/iframe>");
      }*/
    // -->  
    </script>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pagespecific/homepage/general_2013_11_04.css" type="text/css" media="screen" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jslib/js/mobile-redirect-2013-03-17-homepage.js" charset="utf-8"></script>
<link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/lightbox/prettyPhoto.css" type="text/css" media="screen" title="prettyPhoto main stylesheet" charset="utf-8" />
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/jslib/js/jquery.prettyPhoto.js" charset="utf-8"></script>
<!--[if IE]>
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/style.base.ie.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pagespecific/landings/category_page-ie.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pagespecific/landings/holidaysalesie.css" type="text/css" media="screen" />
    <link rel="stylesheet" href="<?php echo Yii::app()->request->baseUrl; ?>/css/pagespecific/landings/area-51-ie.css" type="text/css" media="screen" />
    <![endif]-->
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pages/general/bannerresize.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pages/general/font_resize.js" charset="utf-8"></script>
<script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/pages/landings/general/page-tabs.js" charset="utf-8"></script>
<style>
#home_featured_banners .full_sized_image {
	max-width: 1350px;
	min-width: inherit;
	width: 100%;
}

.banner_copy_vertical_full_image_banner, .banner_copy_vertical_left {
	z-index: 2;
}

.cta {
	display: block;
	margin: 0 !important;
	padding: 0 !important;
	z-index: 999999;
}

.center {
	text-align: center !important;
}

.right-align {
	text-align: right !important;
	float: none !important;
}

.pp_content_container iframe {
	display: inline;
}

#cta-large-head {
	font-family: "PillAlt600mgBold", sans-serif;
	font-size: 200%;
	font-weight: normal;
	letter-spacing: 0.00em;
	line-height: 91%;
	color: #f00000;
	text-decoration: none;
	text-shadow: 0px 1px 3px #25221d;
	text-transform: uppercase;
}

#cta-large p.subhead {
	font-size: 80%;
	line-height: 110%;
	margin-bottom: 5px;
}

.btn_build_yours_green {
	background-color: #f00000;
	width: auto;
	display: inline-block
}

.btn_build_yours_green:hover {
	background-color: #f00000;
}

#banner1 #home_featured_banners .banner_copy_vertical_left {
	left: 31% !important;
}

.banner_copy_vertical_left_noJS {
	margin-top: 1%;
	top: 4%;
	left: 34%;
	min-width: 200px;
	width: 70%;
	position: absolute;
	height: auto;
	z-index: 2;
}
</style>
<title><?php echo CHtml::encode($this->pageTitle); ?></title>
</head>
<body>
    <!--
    <?php 
    $this->widget('zii.widgets.CMenu',array(
		'items'=>array(
			array('label'=>'Home', 'url'=>array('/site/index')),
			array('label'=>'About', 'url'=>array('/site/page', 'view'=>'about')),
			array('label'=>'Contact', 'url'=>array('/site/contact')),
			array('label'=>'Login', 'url'=>array('/site/login'), 'visible'=>Yii::app()->user->isGuest),
			array('label'=>'Logout ('.Yii::app()->user->name.')', 'url'=>array('/site/logout'), 'visible'=>!Yii::app()->user->isGuest)
		),
	)); ?>
    -->
    <div id="homepage_BG">
        <div id="innerHeader">
            <script type="text/javascript" src="<?php echo Yii::app()->request->baseUrl; ?>/js/Menus/dropdown_menu.js"></script>
            <div id="headerAddContent">
                <div class="orderOnline">
                    <div id="social_icons">
                        <a href="https://www.facebook.com/Alienware" target="_blank"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/social-icons-facebook.png" class="facebook_icon" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/social-icons-facebook-hover.png';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/social-icons-facebook.png';" />
                        </a> <a href="https://twitter.com/alienware" target="_blank"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/social-icons-twitter.png" class="twitter_icon" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/social-icons-twitter-hover.png';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/social-icons-twitter.png';" />
                        </a> <a href="https://app.dell.com/consumer/enroll/alienware_victorious/signup.cfm" target="_blank"> <img src="<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/social-icons-email.png" onmouseover="this.src='<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/social-icons-email-hover.png';" onmouseout="this.src='<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/social-icons-email.png';" />
                        </a>
                    </div>
                    <a href="http://www.dell.com/content/topics/topic.aspx/us/segments/dhs/contact_us_alienware?c=us&l=en&s=dhs&cs=19" target="_blank"><div class="butt_Click_to_Chat">Chat with an Alienware expert</div></a>
                    <div id="windows_recommended">
                        <a href="http://www.alienware.com/landings/windows8" style="color: #cacaca;" target="_blank">Dell recommends Windows<sup>®</sup></a>
                    </div>
                </div>
            </div>
            <div id="TopNavigation_v2c" style="top: 80px;">
                <ul id="jsddm">
                
                    <?php var_dump($menus);die();?>
                    <?php foreach ($menus as $menu):?>
                        <li class="butt_Support">
                            <a href="javascript:;" class="secondtwolinks menu-link"><?php echo $menu->name?> <span class="arrow-down">∨</span></a>
                            <?php if($menu->menus):?>
                            <ul>
                                <div class="bottom_cap hover-content" style="top: 17px; border: none;">
                                    <li><a href="http://www.alienware.com/support/">Alienware Gaming Services</a></li>
                                    <li class="butt_My_Hive"><a href="http://support.alienware.com/Profile/Login.aspx?ReturnUrl=%2fSupport_Pages%2fRestricted_Pages%2fmyhive.aspx">My Hive</a></li>
                                    <li class="butt_Support_Area"><a href="http://www.alienware.com/support_redirect.html">Support Area</a></li>
                                    <li class="butt_Drivers_and_Downloads"><a href="http://support.alienware.com/Support_Pages/Restricted_Pages/driver_downloads.aspx">Drivers &amp; Downloads</a></li>
                                </div>
                            </ul>
                            <?php endif;?>
                        </li>
                    <?php endforeach;?>
                    <li class="butt_Products"><a href="javascript:;" class="firsttwolinks menu-link">PRODUCTS <span class="arrow-down">∨</span></a>
                        <ul>
                            <div class="bottom_cap hover-content" style="top: 17px; border: none;">
                                <li class="Products_Menu" style="height: 335px;">
                                    <div class="Left">
                                        <ul class="TopNavList">
                                            <li class="butt_Alienware13"><a href="http://www.dell.com/us/p/alienware-13/pd?ref=PD_OC" title="Alienware 13 Gaming Laptop"><span class="blue">New</span> Alienware 13</a></li>
                                            <li class="butt_Alienware17"><a href="http://www.dell.com/us/p/alienware-17/pd.aspx" title="Alienware 17 3D Gaming Laptop">Alienware 17</a></li>
                                            <li class="butt_Alienware18"><a href="http://www.dell.com/us/p/alienware-18/pd.aspx" title="Alienware 18 Gaming Laptop">Alienware 18</a></li>
                                            <li class="butt_AlienwareGraphicsAmplifier"><a href="http://www.dell.com/content/products/productdetails.aspx/alienware-graphics-amplifier?c=us&cs=19&l=en&s=dhs&sku=452-BBRG&redirect=1" title="Alienware Graphics Amplifier">Alienware Graphics Amplifier</a></li>
                                        </ul>
                                        <ul class="BottomNavList">
                                            <li class="butt_alpha"><a href="http://www.dell.com/us/p/alienware-alpha/pd?c=us&l=en&s=dhs&fl=p&~ck=mn" title="Alpha">Alpha Console</a></li>
                                            <li class="butt_X51"><a href="http://www.dell.com/us/p/alienware-x51-r2/pd.aspx">X51</a></li>
                                            <li class="butt_Area51-NEW"><a href="http://www.dell.com/us/p/alienware-area51-r2/pd?ref=PD_OC"><span class="blue">New</span> Area-51</a></li>
                                            <li class="butt_deals"><a href="http://www.alienware.com/landings/promotions.aspx" title="Featured Deals">Featured Deals</a></li>
                                        </ul>
                                    </div>
                                    <div class="Right">
                                        <ul>
                                            <li class="butt_Laptops"><a href="http://www.alienware.com/Landings/laptops.aspx">Laptops</a></li>
                                            <li class="butt_Desktops"><a href="http://www.alienware.com/Landings/desktops.aspx">Desktops</a></li>
                                            <li class="butt_Desktops"><a href="http://www.dell.com/us/p/alienware-alpha/pd?c=us&l=en&s=dhs&fl=p&~ck=mn">Alpha</a></li>
                                            <li class="butt_Gaming_Peripherals"><a href="http://www.alienware.com/Landings/peripherals.aspx">Gear Shop</a></li>
                                            <li class="butt_Gaming_Peripherals"><a href="http://www.alienware.com/landings/vindicator.aspx">Carrying Cases</a></li>
                                            <li class="butt_Dell_Alienware_Outlet"><a href="http://www.dell.com/learn/us/en/19/campaigns/advantage-us?&~ck=mn" target="_blank">Dell Advantage</a></li>
                                        </ul>
                                    </div>
                                </li>
                            </div>
                        </ul></li>
                    <li class="butt_Follow_Alienware"><a href="http://www.dell.com/learn/us/en/19/campaigns/advantage-us?&~ck=mn" class="firsttwolinks" target="_blank">DELL ADVANTAGE</a></li>
                    <li class="butt_Support"><a href="javascript:;" class="secondtwolinks menu-link">SUPPORT <span class="arrow-down">∨</span></a>
                        <ul>
                            <div class="bottom_cap hover-content" style="top: 17px; border: none;">
                                <li><a href="http://www.alienware.com/support/">Alienware Gaming Services</a></li>
                                <li class="butt_My_Hive"><a href="http://support.alienware.com/Profile/Login.aspx?ReturnUrl=%2fSupport_Pages%2fRestricted_Pages%2fmyhive.aspx">My Hive</a></li>
                                <li class="butt_Support_Area"><a href="http://www.alienware.com/support_redirect.html">Support Area</a></li>
                                <li class="butt_Drivers_and_Downloads"><a href="http://support.alienware.com/Support_Pages/Restricted_Pages/driver_downloads.aspx">Drivers &amp; Downloads</a></li>
                            </div>
                        </ul></li>
                    <li class="butt_Community"><a href="javascript:;" class="secondtwolinks menu-link">COMMUNITY <span class="arrow-down">∨</span></a>
                        <ul>
                            <div class="bottom_cap hover-content" style="top: 17px; border: none;">
                                <li class="butt_Alienware_Videos"><a href="http://www.alienwarearena.com/videos/" target="_blank">AlienNetwork : Videos</a></li>
                                <li class="butt_Games_Trailers"><a href="http://www.alienwarearena.com/age/verify/http%253A%252F%252Fwww.alienwarearena.com%252Fgames%252F" target="_blank">Games &amp; Trailers</a></li>
                                <li class="butt_Contests"><a href="http://www.alienware.com/community/contests/gaming-pc-contests.aspx">Contests</a></li>
                                <li class="butt_Alienware_Arena"><a href="http://www.alienwarearena.com" target="_blank"><img src="<?php echo Yii::app()->request->baseUrl; ?>/img/global_images/icon_igames_logo.gif" style="float: left; padding: 9px 0px 0px 0px;" />Alienware Arena</a></li>
                            </div>
                        </ul></li>
                </ul>
            </div>
        </div>
    </div>
</body>
</html>
