<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="content-language" content="fr">
<meta name="keywords" content="damienchiboub.fr informatique de damien chiboub chiboub damien chiboubdamien fnac facebook linkedin viadeo">
<meta name="date" content="<?php include '_vars.php'; echo $metaup;?>">
<meta name="robots" content="index, follow, archive">
<title>Projets informatique de Damien Chiboub | damienchiboub.fr</title>
<meta name="description" content="Projets informatique de Damien Chiboub, Idees, Buisness Plan, Projets - damienchiboub.fr">
<meta name="author" content="Damien Chiboub">
<meta name="viewport" content="width=device-width, initial-scale=1.0">



<!-- Le styles -->
<link href="css/bootstrap.css" rel="stylesheet">
<link href="css/adds.css" rel="stylesheet">
<link href="css/bootstrap-responsive.css" rel="stylesheet">

<!-- HTML5 shim, for IE6-8 support of HTML5 elements -->
<!--[if lt IE 9]>
<script src="http://html5shim.googlecode.com/svn/trunk/html5.js"></script>
<![endif]-->

<!-- Fav and touch icons -->
<link href="img/fav/favicon.ico" rel="shortcut icon" type="image/x-icon">
</head>

<body>



<div class="container-narrow">

<div class="masthead">

	

<p></p>
<div class="navbar">
<div class="navbar-inner">
<!-- Responsive Navbar Part 1: Button for triggering responsive navbar (not covered in tutorial). Include responsive CSS to utilize. -->
<a class="btn btn-navbar" data-toggle="collapse" data-target=".nav-collapse">
<span class="icon-bar"></span>
<span class="icon-bar"></span>
<span class="icon-bar"></span>
</a>
<a class="brand" href="/">{ Damien Chiboub }</a>

<!-- Responsive Navbar Part 2: Place all navbar contents you want collapsed withing .navbar-collapse.collapse. -->
<div class="nav-collapse collapse">
<ul class="nav">

<li><a href="http://www.damienchiboub.fr"><i class="icon-home"></i></a></li>
<li><a href="http://www.damienchiboub.fr/lifestyle">Lifestyle</a></li>
<li><a href="http://www.damienchiboub.fr/informations">Informations</a></li>
<li><a href="http://www.damienchiboub.fr/parcours">Parcours</a></li>
<li><a href="http://www.damienchiboub.fr/professionnel">Professionnel</a></li>

<!-- Read about Bootstrap dropdowns at http://twitter.github.com/bootstrap/javascript.html#dropdowns -->
<li class="dropdown active">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projets<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="http://www.damienchiboub.fr/sport">Sport</a></li>
<li class="active"><a href="http://www.damienchiboub.fr/informatique">Informatique</a></li>
<li><a href="http://www.damienchiboub.fr/etats-unis">Etats Unis</a></li>
</ul>
</li>

<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">2.0<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="http://www.damienchiboub.fr/images">Images</a></li>
<li><a href="http://www.damienchiboub.fr/videos">Videos</a></li>
<li><a href="http://www.damienchiboub.fr/blog">Blog</a></li>
<li><a href="http://www.damienchiboub.fr/liens-web">Liens Web</a></li>
</ul>
<li><a href="http://www.damienchiboub.fr/contact"><i class="icon-envelope"></i></a></li>	
</li>


</ul>
</div><!--/.nav-collapse -->
</div><!-- /.navbar-inner -->
</div><!-- /.navbar -->


<div class="row-fluid marketing">
<div class="span4">

<form class="form-search hidden-phone hidden-tablet">
<div class="input-append">
<input type="text"  id="prependedInput" class="span12 search-query" placeholder="damienchiboub.fr " data-provide="typeahead" data-items="3" data-source="[&quot;Accueil&quot;,&quot;Lifestyle&quot;,&quot;Informations&quot;,&quot;Parcours&quot;,&quot;Professionel&quot;,&quot;Projets&quot;,&quot;2.0&quot;]">
<button type="submit" class="btn"><i class="icon-search"></i><a href="#"></a></button></form>
</div>
</div>

<div class="span4">
</div>

<div class="span4">
<span class="muted pull-right hidden-phone hidden-tablet"><i class="icon-time"> </i><?php include '_vars.php'; echo $today; ?></span><br>
<span class="muted pull-right hidden-phone hidden-tablet"><i class="icon-refresh"> </i><?php include '_vars.php'; echo $update; ?></span>
</div>
</div>


<div class="jumbotron">
<ul class="span2 nav nav-tabs nav-stacked">
              <li><a class="accordion-toggle" data-toggle="collapse" href="#Informatique">Informatique<i class="icon-chevron-right pull-right"></i></a></li>
            </ul>
        </ul>

<div class="span5">
<div class="hero-unit">
<h1>Infor</h1><p class="text">matique</p></div>
<p class="lead"><br><br></p>
</div>


<div class="row-fluid marketing">





<div class="row-fluid">
<div class="span12">
<div class="control-group">
<div class="accordion">



<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" href="#Informatique">
Projets Informatique
</a>
</div>
<div id="Informatique" class="accordion-body collapse">
<div class="accordion-inner"><p class="lead"> 


<div class="tabbable tabs-left"> <!-- Only required for left/right tabs -->
  <ul class="nav nav-tabs">
    <li class="active"><a href="#Symfony-Agility" data-toggle="tab">Symfony</a></li>
    <li><a href="#NewWebApp" data-toggle="tab">damienchiboub.fr</a></li>
    <li><a href="#OriginWebApp" data-toggle="tab">reverse-engineering.fr</a></li>
  </ul>
  <div class="tab-content lead">
    <div class="tab-pane active" id="Symfony-Agility">
   Symfony Agility <br>
Installation, d&eacute;ploiement, configuration<br>
Cr&eacute;ation : Bundle, db, forms, entity<br>
    </div>
    <div class="tab-pane" id="NewWebApp">
    damienchiboub.fr<br>
    Site statique d&eacute;velopp&eacute; avec le frond-end <a href="#Bootstrap" onclick="window.open('http://twitter.github.com/bootstrap/', 'Bootstrap', 'scrollbars=yes,width=640,height=500,left=480')">Bootstrap</a><br>
Projet de refonte sous <a href="#Symfony" onclick="window.open('http://symfony.com/', 'Symfony', 'scrollbars=yes,width=640,height=500,left=480')">Symfony</a>, <a href="#Doctrine" onclick="window.open('http://www.doctrine-project.org/', 'Doctrine', 'scrollbars=yes,width=640,height=500,left=480')">Doctrine</a>, <a href="#Twig" onclick="window.open('http://twig.sensiolabs.org/', 'Twig', 'scrollbars=yes,width=640,height=500,left=480')">Twig</a><br>
    </div>
    <div class="tab-pane" id="OriginWebApp">
    reverse-engineering.fr<br>
    Actuellement en cours de refonte sous <a href="#Symfony" onclick="window.open('http://symfony.com/', 'Symfony', 'scrollbars=yes,width=640,height=500,left=480')">Symfony</a><br>
    <a href="#FosUserBundle" onclick="window.open('https://github.com/FriendsOfSymfony/FOSUserBundle', 'FosUserBundle', 'scrollbars=yes,width=640,height=500,left=480')">FosUserBundle</a> install&eacute;<br>
    </div>
  </div>
</div>



</div>
</div>
</div>









</div>
</div>






</div>



</div>
</div>
<br>
<div class="footer">
<center>
<p><br>
<a href="http://www.damienchiboub.fr"><button class="btn btn-large btn-block" type="button"><p class="text-info">damienchiboub.fr</button></p></a>
</p>
</center>
</div>
</div> <!-- /container -->
<a href="http://www.damienchiboub.fr/about">A propos</a>
/
<a href="http://www.damienchiboub.fr/logs">Logs</a>
/
<a href="http://www.damienchiboub.fr/sitemap.php">Sitemap</a>
/
<a rel="popover" data-img="/img/footer/github.com.png" title="Github.com"<a href="https://github.com/DamienChiboub" target="_blank"><img src="/img/fav/github_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/twitter.com.png" title="Twitter.com"<a href="http://www.twitter.com/Damien_Chiboub" target="_blank"><img src="/img/fav/twitter_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/gravatar.com.png" title="Gravatar.com"<a href="http://en.gravatar.com/DamienChiboub" target="_blank"><img src="/img/fav/gravatar_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/facebook.com.png" title="Facebook.com"<a href="http://www.facebook.com/Damien.Chiboub" target="_blank"><img src="/img/fav/facebook_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/instagram.com.png" data-original-title="Instagram.com"<a href="http://www.instagram.com/DamienChiboub" target="_blank"><img src="/img/fav/instagram_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/worketer.com.png" data-original-title="Worketer.com"<a href="http://www.worketer.com/DamienChiboub" target="_blank"><img src="/img/fav/worketer_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/pinterest.com.png" data-original-title="Pinterest.com"<a href="http://www.pinterest.com/DamienChiboub" target="_blank"><img src="/img/fav/pinterest_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/sensiolabs.com.png" data-original-title="Sensiolabs.com"<a href="http://connect.sensiolabs.com/profile/dvi-" target="_blank"><img src="/img/fav/sensiolabs_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/viadeo.com.png" data-original-title="Viadeo.com"<a href="http://www.viadeo.com/fr/profile/Damien.Chiboub" target="_blank"><img src="/img/fav/viadeo_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/plus.google.com.png" data-original-title="Plus.google.com"<a href="http://plus.google.com/110705607218372468993" target="_blank"><img src="/img/fav/google-plus_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/linkedin.com.png" data-original-title="Linkedin.com"<a href="http://www.linkedin.com/in/DamienChiboub" target="_blank"><img src="/img/fav/linkedin_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/about-me.com.png" data-original-title="About.me"<a href="http://about.me/DamienChiboub" target="_blank"><img src="/img/fav/about-me_favicon.png"></a></a>
<a rel="popover" data-img="/img/footer/vizify.com.png" data-original-title="Vizify.com"<a href="https://www.vizify.com/damien-chiboub" target="_blank"><img src="/img/fav/vizify_favicon.png"></a></a>

<a href="#"><i class="pull-right icon-circle-arrow-up"></i>
<!-- Placed at the end of the document so the pages load faster -->
<script src="js/jquery.js"></script>
<script src="js/bootstrap-transition.js"></script>
<script src="js/bootstrap-alert.js"></script>
<script src="js/bootstrap-modal.js"></script>
<script src="js/bootstrap-dropdown.js"></script>
<script src="js/bootstrap-scrollspy.js"></script>
<script src="js/bootstrap-tab.js"></script>
<script src="js/bootstrap-tooltip.js"></script>
<script src="js/bootstrap-popover.js"></script>
<script src="js/bootstrap-button.js"></script>
<script src="js/bootstrap-collapse.js"></script>
<script src="js/bootstrap-carousel.js"></script>
<script src="js/bootstrap-typeahead.js"></script>

<script type="text/javascript">
$('a[rel=popover]').popover({
  html: true,
  trigger: 'hover',
  placement: 'top',
  content: function(){return '<img src="'+$(this).data('img') + '" />';}
});

var _gaq = _gaq || [];
_gaq.push(['_setAccount', 'UA-36258258-1']);
_gaq.push(['_setDomainName', 'damienchiboub.fr']);
_gaq.push(['_trackPageview']);

(function() {
 var ga = document.createElement('script'); ga.type = 'text/javascript'; ga.async = true;
 ga.src = ('https:' == document.location.protocol ? 'https://ssl' : 'http://www') + '.google-analytics.com/ga.js';
 var s = document.getElementsByTagName('script')[0]; s.parentNode.insertBefore(ga, s);
 })();
</script>

</body>
</html>						
