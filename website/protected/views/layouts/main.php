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
                <?php $this->widget('MenuWidget');?>
            </div>
        </div>
        <?php echo $content?>
	
	
	<div id="lowerNav_GameVictorious">
					<div id="globalization_GameVictorious" class="far_right">
                <ul>
                    <li><h4><span class="flag_unitedstates float_left" style="margin-top:4px;"></span>United States</a></h4>
                        <div class="global">
                        <ul class="col1">
                            <li><a href="http://www.alienware.com.au"><span class="flag_australia float_left" style="margin-top:2px;"></span>Australia</a></li>
                            <li><a href="http://www.alienware.ca"><span class="flag_canada float_left" style="margin-top:2px;"></span>Canada</a></li>
                            <li><a href="http://www.alienware.fr"><span class="flag_france float_left" style="margin-top:2px;"></span>France</a></li>
                            <li><a href="http://www.alienware.de"><span class="flag_germany float_left" style="margin-top:2px;"></span>Germany</a></li>
                            <li><a href="http://www.dell.pl/alienware"><span class="flag_poland float_left" style="margin-top:2px;"></span>Poland</a></li>
                            
                        </ul>
                        <ul class="col2">
                            <li><a href="http://www.alienware.co.uk"><span class="flag_uk float_left" style="margin-top:2px;"></span>United Kingdom</a></li>
                            <li><a href="http://www.alienware.ie"><span class="flag_ireland float_left" style="margin-top:2px;"></span>Ireland</a></li>
                            <li><a href="http://www.alienware.it"><span class="flag_italy float_left" style="margin-top:2px;"></span>Italy</a></li>
                            <li><a href="http://www.alienware.at"><span class="flag_austria float_left" style="margin-top:2px;"></span>Austria</a></li>
                            <li><a href="http://www.alienware.co.nz"><span class="flag_newzealand float_left" style="margin-top:2px;"></span>New Zealand</a></li>
                            
                        </ul>
                        <ul class="col3">                    
                            <li><a href="http://www.alienware.com"><span class="flag_unitedstates float_left" style="margin-top:2px;"></span>United States</a></li>
                            <li><a href="http://www.alienware.com/mx/"><span class="flag_mexico float_left" style="margin-top:2px;"></span>Mexico</a></li>
                            <li><a href="http://www.alienware.nl"><span class="flag_netherlands float_left" style="margin-top:2px;"></span>Netherlands</a></li>
                            <li><a href="http://www.alienware.ch"><span class="flag_switzerland float_left" style="margin-top:2px;"></span>Switzerland</a></li>
                            <li><a href="http://www.alienware.es"><span class="flag_spain float_left" style="margin-top:2px;"></span>Spain</a></li>
                            <li><a href="http://www.alienware.be"><span class="flag_belgium float_left" style="margin-top:2px;"></span>Belgium</a></li>
                                                
                        </ul>
                        <ul class="col4">                    
                            <li><a href="http://www.alienware.se"><span class="flag_sweden float_left" style="margin-top:2px;"></span>Sweden</a></li>
                            <li><a href="http://www.dell.no/alienware"><span class="flag_norway float_left" style="margin-top:2px;"></span>Norway</a></li>
                            <li><a href="http://www.alienware.dk"><span class="flag_denmark float_left" style="margin-top:2px;"></span>Denmark</a></li>
                            <li><a href="http://www.alienware.com.sg"><span class="flag_singapore float_left" style="margin-top:2px;"></span>Singapore</a></li>
                            <li><a href="http://www.alienware.co.in"><span class="flag_india float_left" style="margin-top:2px;"></span>India</a></li>
                            
                        </ul>
                        <ul class="col5">                    
                            <li><a href="http://www.alienware.com.hk"><span class="flag_hongkong float_left" style="margin-top:2px;"></span>Hong Kong</a></li>
                            <li><a href="http://www.alienware.com.cn"><span class="flag_china float_left" style="margin-top:2px;"></span>China</a></li>
                            <li><a href="http://www.alienware.kr"><span class="flag_korea float_left" style="margin-top:2px;"></span>Korea</a></li>
                            <li><a href="http://www.alienware.jp"><span class="flag_japan float_left" style="margin-top:2px;"></span>Japan</a></li>
                            <li><a href="http://www.alienware.com.my"><span class="flag_malaysia float_left" style="margin-top:2px;"></span>Malaysia</a></li>
                            
                        </ul>
                        </div>
                    </li>
                </ul>
            </div>
	
			<ul class="footer_links_list">
    			<li class="separator_gv"><a class="first_link" href="http://www.dell.com/content/topics/global.aspx/policy/en/policy?c=us&cs=&l=en&s=gen&~section=000">Privacy</a></li>
                <li class="separator_gv"><a href="http://www.alienware.com/company/disclaimer.aspx">Disclaimer</a></li>
                <li class="separator_gv"><a href="http://www.dell.com/content/topics/global.aspx/policy/en/policy?c=us&l=en&s=gen&~section=007" target="_blank">Terms &amp; Conditions</a></li>
				<li class="separator_gv"><a href="https://app.dell.com/consumer/enroll/alienware_victorious/signup.cfm" target="_blank">Alienware Insider Sign-up</a></li>
				<li class="separator_gv footer_text"><strong>Order Online or Call 1.800.Alienware</strong>  (1-800-254-3692)</li>
               
        	</ul> 
	</div>
	<div id="footer">
		            <div class="copyright">
                Copyright &copy; 2014 Alienware Corporation. All rights reserved.
            </div>
            <br />
            <div  class="copyright" style="width:850px; margin-left:50px; margin-right:50px; text-align:center;">
	    	
            
            </div>
            
	</div>
        
    </div>
</body>
</html>
