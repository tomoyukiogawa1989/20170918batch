<!DOCTYPE html>
<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"> <![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html class="no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html class="no-js lt-ie9" lang="en"><![endif]-->
<!--[if (IE 9)]><html class="no-js ie9" lang="en"><![endif]-->
<!--[if gt IE 8]><!--> <html lang="ja"> <!--<![endif]-->
<head>

<!-- Meta Tags -->
<meta http-equiv="Content-Type" content="text/html; charset=UTF-8" />

<title>Brushed | Responsive One Page Template</title>   

<meta name="description" content="Insert Your Site Description" /> 

<!-- Mobile Specifics -->
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<meta name="HandheldFriendly" content="true"/>
<meta name="MobileOptimized" content="320"/>   

<!-- Mobile Internet Explorer ClearType Technology -->
<!--[if IEMobile]>  <meta http-equiv="cleartype" content="on">  <![endif]-->

<!-- Bootstrap -->
<link href="_include/css/bootstrap.min.css" rel="stylesheet">

<!-- Main Style -->
<link href="_include/css/main.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- FancyBox -->
<link href="_include/css/fancybox/jquery.fancybox.css" rel="stylesheet">

<!-- Font Icons -->
<link href="_include/css/fonts.css" rel="stylesheet">

<!-- Shortcodes -->
<link href="_include/css/shortcodes.css" rel="stylesheet">

<!-- Responsive -->
<link href="_include/css/bootstrap-responsive.min.css" rel="stylesheet">
<link href="_include/css/responsive.css" rel="stylesheet">

<!-- Supersized -->
<link href="_include/css/supersized.css" rel="stylesheet">
<link href="_include/css/supersized.shutter.css" rel="stylesheet">

<!-- Google Font -->
<link href='http://fonts.googleapis.com/css?family=Titillium+Web:400,200,200italic,300,300italic,400italic,600,600italic,700,700italic,900' rel='stylesheet' type='text/css'>

<!-- Fav Icon -->
<link rel="shortcut icon" href="#">

<link rel="apple-touch-icon" href="#">
<link rel="apple-touch-icon" sizes="114x114" href="#">
<link rel="apple-touch-icon" sizes="72x72" href="#">
<link rel="apple-touch-icon" sizes="144x144" href="#">

<!-- Modernizr -->
<script src="_include/js/modernizr.js"></script>

<!-- Analytics -->
<script type="text/javascript">

  var _gaq = _gaq || [];
  _gaq.push(['_setAccount', 'Insert Your Code']);
  _gaq.push(['_trackPageview']);

  (function() {
    var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
    ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
    var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
  })();

</script>
<!-- End Analytics -->

</head>


<body>

<!-- This section is for Splash Screen -->
<div class="ole">
<section id="jSplash">
	<div id="circle"></div>
</section>
</div>
<!-- End of Splash Screen -->

<!-- Homepage Slider -->
<div id="home-slider">	
    <div class="overlay"></div>

    <div class="slider-text">
    	<div id="slidecaption"></div>
Yun Okubo    </div>   
	
	<div class="control-nav">
        <a id="prevslide" class="load-item"><i class="font-icon-arrow-simple-left"></i></a>
        <a id="nextslide" class="load-item"><i class="font-icon-arrow-simple-right"></i></a>
        <ul id="slide-list"></ul>
        
        <a id="nextsection" href="#work"><i class="font-icon-arrow-simple-down"></i></a>
    </div>
</div>
<!-- End Homepage Slider -->

<!-- Header -->
<header>
    <div class="sticky-nav">
    	<a id="mobile-nav" class="menu-nav" href="#menu-nav"></a>
        
        <div id="logo">
        	<a id="goUp" href="#home-slider" title="Brushed | Responsive One Page Template">Brushed Template</a>
        </div>
        
        <nav id="menu">
        	<ul id="menu-nav">
            	<li class="current"><a href="#home-slider">Home</a></li>
                <li><a href="#work">About Me</a></li>
                <li><a href="#about">Project</a></li>
                <li><a href="#contact">Contact</a></li>
				<li><a href="#gallery">Gallery</a></li>
            </ul>
        </nav>
        
    </div>
</header>
<!-- End Header -->

<!-- About Me Section -->
<div id="work" class="page">
	<div class="container">
    	<!-- Title Page -->
        <div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Yun(23)</h2>
                    <h3 class="title-description">Let Know about Yun!</h3>
                </div>
            </div>
        </div>
        <!-- End Title Page -->
        
        <!-- Portfolio Projects -->
        <div class="row">
        	<div class="span3">
            	<!-- Filter -->
                <nav id="options" class="work-nav">
                    <ul id="filters" class="option-set" data-option-key="filter">
                    	<li class="type-work">About me</li>
                        <li><a href="#filter" data-option-value="*" class="selected">All Information</a></li>
                        <li><a href="#filter" data-option-value=".Birthplace">Birthplace</a></li>
                        <li><a href="#filter" data-option-value=".Hobby">Favorite</a></li>
                        <li><a href="#filter" data-option-value=".Biography">Biography</a></li>
                    </ul>
                </nav>
                <!-- End Filter -->
            </div>
            
            <div class="span9">
            	<div class="row">
                	<section id="projects">
                    	<ul id="thumbs">
                        
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 Birthplace">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Tokyo" href="_include/img/photos/tokyo.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/photos/tokyo.jpg" alt="O-taku,Kamata.I was born there and have been lived for 23 years.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 Hobby">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Gymnastics" href="_include/img/photos/1200x800_gym.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/photos/1200x800_gym.jpg" alt="1year in elementary school,high school and university.The total is 8 years.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 Hobby">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Travel" href="_include/img/photos/1200x800_sky.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/photos/1200x800_sky.jpg" alt="Especially foreign countries.I have been to Hawaii,Los Angels,Las vegas,Swiden,Finland,Italy,Marta,Taiwan,Hong kong,Malaysia,Korea and Philippines.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 Biography">
                            	<!-- Fancybox Media - Gallery Enabled - Title - Link to Video -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Nutrition" href="_include/img/photos/1200x800_Kagawa.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/photos/1200x800_Kagawa.jpg" alt="Studied about nutrition so I can help your health!">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 Hobby">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Drinking&Eating" href="_include/img/photos/beer.JPG">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/photos/beer.JPG" alt="Delisious food and drink make me so Happy.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 Hobby">
                            	<!-- Item Project and Filter Name -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Baking cakes" href="_include/img/photos/1200x800_cake.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <img src="_include/img/photos/1200x800_cake.jpg" alt="It's the way to reduce stress.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 Biography">
                            	<!-- Item Project and Filter Name -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Dairy Product" href="_include/img/photos/1200x800_freshcream.jpg">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/photos/1200x800_freshcream.jpg" alt="Working as sales at dairy products company for one year and four months.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 Birthplace">
                            	<!-- Fancybox - Gallery Enabled - Title - Full Image -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Kamata" href="_include/img/photos/1200x800_kamata.jpg"">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/photos/kamata.jpg" alt="Having many old bars.That amount is the utmost in Japan.">
                            </li>
                        	<!-- End Item Project -->
                            
							<!-- Item Project and Filter Name -->
                        	<li class="item-thumbs span3 Hobby">
                            	<!-- Item Project and Filter Name -->
                            	<a class="hover-wrap fancybox" data-fancybox-group="gallery" title="Photo" href="_include/img/photos/monocam.JPG">
                                	<span class="overlay-img"></span>
                                    <span class="overlay-img-thumb font-icon-plus"></span>
                                </a>
                                <!-- Thumb Image and Description -->
                                <img src="_include/img/photos/monocam.JPG" alt="The best partner is NikonD5600!">
                            </li>
                        	<!-- End Item Project -->
                        </ul>
                    </section>
                    
            	</div>
            </div>
        </div>
        <!-- End Portfolio Projects -->
    </div>
</div>
<!-- About me Section -->

<!-- Project Section -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Project</h2>
                <h3 class="title-description">"Adachi Project"</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- People -->
    <div class="row">
    	
        <!-- Start video -->
    	<div class="span4 video">
            <a href="https://www.facebook.com/kenta.adachi.37/videos/1182518291882870/" target="_blank">
            <div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Nishinari</span>
                </div>
                <img src="_include/img/photos/nishi.JPG" alt="Nishinari">
                </div>
            </a>    
            <h3 class="profile-name">Serch</h3>
            <p class="profile-description">People often say "Nishinari is <span style="font-size: 30px;">" the most dangerous city"</span> in Japan" but is it true?Have you seen some people who live in and the place?<br>
            We went there to make sure it.</p>
            	
        </div>
        <!-- End video -->
        
        <!-- Start video -->
    	<div class="span4 video">
            <a href="https://web.facebook.com/kenta.adachi.37/videos/1203027479831951/" target="_blank">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Kamata</span>
                </div>
                <img src="_include/img/photos/syokudo.jpeg" alt="Kamata">
            </div>
            </a>
            <h3 class="profile-name">Eat</h3>
            <p class="profile-description">This is the prologue of last project before going to Cebu.<br>
                What!<br>The beginning is Kamata where I live in.And then,we found <span style="font-size: 30px;">the good old restaurant</span>.</p>
            	
        </div>
        <!-- End video -->
        
        <!-- Start video -->
    	<div class="span4 video">
            <a href="https://web.facebook.com/kenta.adachi.37/videos/1207728476028518/" target="_blank">
        	<div class="image-wrap">
                <div class="hover-wrap">
                    <span class="overlay-img"></span>
                    <span class="overlay-text-thumb">Haneda</span>
                </div>
                <img src="_include/img/photos/370x277_haneda.jpg" alt="Haneda">
            </div>
            </a>
            <h3 class="profile-name">Stay</h3>
            <p class="profile-description">The continuance of Kamata.The stage is Tokyo International Airport by the name of Haneda Aieport.<br>
            Do you know that we can stay there for  <span style="font-size :30px;">"FREE"</span>?
            </p>
            	
        </div>
        <!-- End video -->
        
    </div>
    <!-- End People -->
</div>
</div>
<!-- End Project Section -->


<!-- Contact Section -->
<div id="contact" class="page">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Get in Touch</h2>
                <h3 class="title-description">Please send me if you have an interest to me.Feel free to contact.</h3>
            </div>
        </div>
    </div>
    <!-- End Title Page -->
    
    <!-- Contact Form -->

    <?php if(!empty($_POST)){ ?>

    <?php 
      // step1 : データベースとの接続
      $dsn = "mysql:dbname=LAA0899105-yunyuunyun
;host=mysql113.phy.lolipop.lan";
      $user = " LAA0899105";
      $password = "yunyuunyunyuun";
      $dbh = new PDO($dsn, $user, $password);
      $dbh->query("SET NAMES utf8");

      // Step2 SQLを記載して実行
      $sql = 'INSERT INTO `survey` SET 
                           `name`= ?,
                           `email`= ?,
                           `message`= ?;';

      $nickname = htmlspecialchars($_POST["name"]);
      $email = htmlspecialchars($_POST["email"]);
      $content = htmlspecialchars($_POST["message"]);
      $data = array($nickname,$email,$content);

      // 使うSQL文をセットする(準備する)　　SQLの白い四角いところ
      $stmt = $dbh->prepare($sql);
      // セットしたSQL文を実行する  実行ボタン
      $stmt->execute($data);

      // Step3 データベース切断
      $sbh = null;


    ?>

    <div class="row">
    	<div class="span9">
        
        	<form id="contact-form" class="contact-form" action="#">
            	<p class="contact-name">
            		<input id="contact_name" type="text" placeholder="Full Name" value="" name="name" />
                </p>
                <p class="contact-email">
                	<input id="contact_email" type="text" placeholder="Email Address" value="" name="email" />
                </p>
                <p class="contact-message">
                	<textarea id="contact_message" placeholder="Your Message" name="message" rows="15" cols="40"></textarea>
                </p>
                <p class="contact-submit">
                	<a id="contact-submit" class="submit" href="#">Send Your Email</a>
                </p>
                
                <div id="response">
                
                </div>
            </form>
         
        </div>
        
        <div class="span3">
        	<div class="contact-details">
        		<h3>Contact Details</h3>
                <ul>
                    <li><a href="#">hello@yun.okubo</a></li>
                    <li>(03) 1234-5678</li>
                    <!-- <li>
                        Brushed Studio
                        <br>
                        5240 Vanish Island. 105
                        <br>
                        Unknow
                    </li> -->
                </ul>
            </div>
        </div>
    </div>
    <!-- End Contact Form -->
</div>
</div>
<!-- End Contact Section -->
<!-- Gallery Section -->
<div id="gallery" class="page">
<div class="container">
    <!-- Title Page -->
<!-- facebook Feed -->
<div id="about" class="page-alternate">
<div class="container">
    <!-- Title Page -->
    <div class="row">
        <div class="span12">
            <div class="title-page">
                <h2 class="title">Gallery</h2>
                <h3 class="title-description"><br></h3>
                <nav id="social">
                    <a href="https://www.facebook.com/yun.okubo" title="Follow Me on Facebook" target="_blank"><i class="font-icon-social-facebook"></i></a>
            </div>
        </div>
    </div>
<!-- <div id="twitter-feed" class="page-alternate">
	<div class="container">
    	<div class="row">
            <div class="span12">
                <div class="title-page">
                    <h2 class="title">Gallery</h2>
                    <a href="https://www.facebook.com/yun.okubo" title="Follow Me on Facebook" target="_blank"><i class="font-icon-social-facebook"></i></a>
                </div>
                    
                <div id="ticker" class="query">
                </div>
            </div>
        </div>
    </div>
</div> -->
<!-- End facebook Feed -->

<!-- Gallery -->
<div id="social-area" class="page">
	<div class="container">
    	<div class="row">
            <div class="span12">
                  <nav id="social">
                     <ul>
                         <li>
                             <img src="_include/img/photos/vatcikan.jpg">
                         </li>
                         <li>
                             <img src="_include/img/photos/fishing.JPG">
                         </li>
                         <li>
                             <img src="_include/img/photos/bbqc.JPG">
                         </li>
                         <li>
                             <img src="_include/img/photos/soft.JPG">
                         </li>
                         <li>
                             <img src="_include/img/photos/klback.JPG">
                         </li>
                         <!-- <li><a href="https://twitter.com/Bluxart" title="Follow Me on Twitter" target="_blank"><span class="font-icon-social-twitter"></span></a></li>
                         <li><a href="http://dribbble.com/Bluxart" title="Follow Me on Dribbble" target="_blank"><span class="font-icon-social-dribbble"></span></a></li>
                         <li><a href="http://forrst.com/people/Bluxart" title="Follow Me on Forrst" target="_blank"><span class="font-icon-social-forrst"></span></a></li>
                         <li><a href="http://www.behance.net/alessioatzeni" title="Follow Me on Behance" target="_blank"><span class="font-icon-social-behance"></span></a></li> -->
                        <!--  <li><a href="https://www.facebook.com/yun.okubo" title="Follow Me on Facebook" target="_blank"><span class="font-icon-social-facebook"></span></a></li> -->
                         <!-- <li><a href="https://plus.google.com/105500420878314068694" title="Follow Me on Google Plus" target="_blank"><span class="font-icon-social-google-plus"></span></a></li>
                         <li><a href="http://www.linkedin.com/in/alessioatzeni" title="Follow Me on LinkedIn" target="_blank"><span class="font-icon-social-linkedin"></span></a></li> -->
                         <!-- <li><a href="http://themeforest.net/user/Bluxart" title="Follow Me on ThemeForest" target="_blank"><span class="font-icon-social-envato"></span></a></li>
                         <li><a href="http://zerply.com/Bluxart/public" title="Follow Me on Zerply" target="_blank"><span class="font-icon-social-zerply"></span></a></li> -->
                     </ul>
                  </nav>
            </div>
        </div>
    </div>
</div>
<!-- End Gallery -->

<!-- Footer -->
<footer>
	<p class="credits">&copy;2013 Brushed. <a href="http://themes.alessioatzeni.com/html/brushed/" title="Brushed | Responsive One Page Template">Brushed Template</a> by <a href="http://www.alessioatzeni.com/" title="Alessio Atzeni | Web Designer &amp; Front-end Developer">Alessio Atzeni</a></p>
</footer>
<!-- End Footer -->

<!-- Back To Top -->
<a id="back-to-top" href="#">
	<i class="font-icon-arrow-simple-up"></i>
</a>
<!-- End Back to Top -->


<!-- Js -->
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.9.1/jquery.min.js"></script> <!-- jQuery Core -->
<script src="_include/js/bootstrap.min.js"></script> <!-- Bootstrap -->
<script src="_include/js/supersized.3.2.7.min.js"></script> <!-- Slider -->
<script src="_include/js/waypoints.js"></script> <!-- WayPoints -->
<script src="_include/js/waypoints-sticky.js"></script> <!-- Waypoints for Header -->
<script src="_include/js/jquery.isotope.js"></script> <!-- Isotope Filter -->
<script src="_include/js/jquery.fancybox.pack.js"></script> <!-- Fancybox -->
<script src="_include/js/jquery.fancybox-media.js"></script> <!-- Fancybox for Media -->
<script src="_include/js/jquery.tweet.js"></script> <!-- Tweet -->
<script src="_include/js/plugins.js"></script> <!-- Contains: jPreloader, jQuery Easing, jQuery ScrollTo, jQuery One Page Navi -->
<script src="_include/js/main.js"></script> <!-- Default JS -->
<!-- End Js -->

</body>
</html>