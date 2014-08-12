<!DOCTYPE html>
<html lang="fr">
<head>
<meta charset="utf-8">
<meta http-equiv="content-language" content="fr">
<meta name="keywords" content="damienchiboub.fr contactez contact damien chiboub chiboub damien chiboubdamien fnac facebook linkedin viadeo">
<meta name="date" content="<?php include '_vars.php'; echo $metaup;?>">
<meta name="robots" content="index, follow, archive">
<title>Contactez Damien Chiboub | damienchiboub.fr</title>
<meta name="description" content="Contactez Damien Chiboub, Une Question, Une Proposition, Un bug sur le site, ou autre - damienchiboub.fr">
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
<li class="dropdown">
<a href="#" class="dropdown-toggle" data-toggle="dropdown">Projets<b class="caret"></b></a>
<ul class="dropdown-menu">
<li><a href="http://www.damienchiboub.fr/sport">Sport</a></li>
<li><a href="http://www.damienchiboub.fr/informatique">Informatique</a></li>
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
<li class="active"><a href="http://www.damienchiboub.fr/contact"><i class="icon-envelope"></i></a></li>	
</li>


</ul>
</div><!--/.nav-collapse -->
</div><!-- /.navbar-inner -->
</div><!-- /.navbar -->


<div class="row-fluid marketing">
<div class="span4">

<form class="form-search hidden-phone hidden-tablet">
<div class="input-append">
<input type="text" class="span12 search-query" placeholder="damienchiboub.fr " data-provide="typeahead" data-items="3" data-source="[&quot;Accueil&quot;,&quot;Lifestyle&quot;,&quot;Informations&quot;,&quot;Parcours&quot;,&quot;Professionel&quot;,&quot;Projets&quot;,&quot;2.0&quot;]">
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
              <li><a class="accordion-toggle" data-toggle="collapse" href="#Email">Email<i class="icon-chevron-right pull-right"></i></a></li>
              <li><a class="accordion-toggle" data-toggle="collapse" href="#Form">Form <i class="icon-chevron-right pull-right"></i></a></li>
              <li><a class="accordion-toggle" data-toggle="collapse" href="#Web">Web <i class="icon-chevron-right pull-right"></i></a></li>
            </ul>


<div class="span5">
<div class="hero-unit">
<h1><p class="text-info">Contact</p></h1><br></div>
<p class="lead"><br><br>
</p>
</div>
<div class="row-fluid marketing">







<div class="row-fluid">
<div class="span12">

<div class="control-group">
<div class="accordion" id="accordion2" id="accordion3">
<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" href="#Email">
Email
</a>
</div>
<div id="Email" class="accordion-body collapse">
<div class="accordion-inner">
<p class="lead">
contact { at } damienchiboub.fr
</p>
</div>
</div>
</div>


<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" href="#Form">
Formulaire
</a>
</div>

<div id="Form" class="accordion-body collapse">
<div class="accordion-inner">


<?php
/*
	********************************************************************************************
	CONFIGURATION
	********************************************************************************************
*/
// destinataire est votre adresse mail. Pour envoyer à plusieurs à la fois, séparez-les par une virgule
$destinataire = 'contact@damienchiboub.fr';

// copie ? (envoie une copie au visiteur)
$copie = 'oui';

// Action du formulaire (si votre page a des paramètres dans l'URL)
// si cette page est index.php?page=contact alors mettez index.php?page=contact
// sinon, laissez vide
$form_action = '';



// Messages de confirmation du mail
$message_envoye ="<div class='alert alert-info'>
              <strong>:: Message envoy&eacute; ::</strong><br></div>";

$message_non_envoye = "<div class='alert alert-info'>
              <strong>:: Message non envoy&eacute; ::</strong><br></div>";

// Message d'erreur du formulaire
$message_formulaire_invalide = "<div class='alert alert-info'>
              <button type='button' class='close' data-dismiss='alert'>&times;</button>
              <strong>:: Erreur ::</strong><br>
              <strong>Tous</strong> les champs sont <strong>requis</strong><br>
<li>Nom(<15)
  Prenom(<15)
  Email(<35)
  Objet(choice)
  Message(>1)
</li>
</div>";





/*
	********************************************************************************************
	FIN DE LA CONFIGURATION
	********************************************************************************************
*/

/*
 * cette fonction sert à nettoyer et enregistrer un texte
 */
function Rec($text)
{
	$text = htmlspecialchars(trim($text), ENT_QUOTES);
	if (1 === get_magic_quotes_gpc())
	{
		$text = stripslashes($text);
	}

	$text = nl2br($text);
	return $text;
};

/*
 * Cette fonction sert à vérifier la syntaxe d'un email
 */
function IsEmail($email)
{
	$value = preg_match('/^(?:[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+\.)*[\w\!\#\$\%\&\'\*\+\-\/\=\?\^\`\{\|\}\~]+@(?:(?:(?:[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!\.)){0,61}[a-zA-Z0-9_-]?\.)+[a-zA-Z0-9_](?:[a-zA-Z0-9_\-](?!$)){0,61}[a-zA-Z0-9_]?)|(?:\[(?:(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\.){3}(?:[01]?\d{1,2}|2[0-4]\d|25[0-5])\]))$/', $email);
	return (($value === 0) || ($value === false)) ? false : true;
}

// formulaire envoyé, on récupère tous les champs.
$nom     = (isset($_POST['nom']))     ? Rec($_POST['nom'])     : '';
$prenom     = (isset($_POST['prenom']))     ? Rec($_POST['prenom'])     : '';
$email   = (isset($_POST['email']))   ? Rec($_POST['email'])   : '';
$objet   = (isset($_POST['objet']))   ? Rec($_POST['objet'])   : '';
$message = (isset($_POST['message'])) ? Rec($_POST['message']) : '';

// On va vérifier les variables et l'email ...
$email = (IsEmail($email)) ? $email : ''; // soit l'email est vide si erroné, soit il vaut l'email entré
$err_formulaire = false; // sert pour remplir le formulaire en cas d'erreur si besoin

if (isset($_POST['envoi']))
{
	if (($nom != '') && ($prenom != '') && ($email != '') && ($objet != '') && ($message != ''))
	{
		// les 5 variables sont remplies, on génère puis envoie le mail
		$headers  = 'From:'.$nom.' <'.$email.'>' . "\r\n";
		//$headers .= 'Reply-To: '.$email. "\r\n" ;
		//$headers .= 'X-Mailer:PHP/'.phpversion();

		// envoyer une copie au visiteur ?
		if ($copie == 'oui')
		{
			$cible = $destinataire.','.$email;
		}
		else
		{
			$cible = $destinataire;
		};

		// Remplacement de certains caractères spéciaux
		$message = str_replace("&#039;","'",$message);
		$message = str_replace("&#8217;","'",$message);
		$message = str_replace("&quot;",'"',$message);
		$message = str_replace('<br>','',$message);
		$message = str_replace('<br />','',$message);
		$message = str_replace("&lt;","<",$message);
		$message = str_replace("&gt;",">",$message);
		$message = str_replace("&amp;","&",$message);

		// Envoi du mail
		if (mail($cible, $objet, $message, $headers))
		{
			echo '<p>'.$message_envoye.'</p>';
		}
		else
		{
			echo '<p>'.$message_non_envoye.'</p>';
		};
	}
	else
	{
		// une des 4 variables (ou plus) est vide ...
		echo '<p>'.$message_formulaire_invalide.'</p>';
		$err_formulaire = true;
	};
}; // fin du if (!isset($_POST['envoi']))

if (($err_formulaire) || (!isset($_POST['envoi'])))
{
	// afficher le formulaire
	echo '
	<form id="contact" method="post" action="'.$form_action.'">
<br>

<div class="input-prepend">
  <span class="add-on"><a href="#Form" id="nom-tooltip" data-original-title="Nom"><i class="icon-asterisk"></i></a></span>
  <input class="span3" type="text" id="nom" maxlength="15" name="nom" value="'.stripslashes($nom).'" tabindex="1" type="text" placeholder="Nom" required="required">
</div></input></p>

<div class="input-prepend">
  <span class="add-on"><a href="#Form" id="prenom-tooltip" data-original-title="Prenom"><i class="icon-asterisk"></i></a></span>
  <input class="span3" type="text" id="prenom" maxlength="15" name="prenom" value="'.stripslashes($prenom).'" tabindex="2" type="text" placeholder="Prenom" required="required">
</div></input></p>

<div class="input-prepend">
  <span class="add-on"><a href="#Form" id="email-tooltip" data-original-title="email@domaine.tld"><i class="icon-envelope"></i></a></span>
  <input class="span3" type="email" id="email" maxlength="35" name="email" value="'.stripslashes($email).'" tabindex="3" id="prependedInput" type="text" placeholder="email@domaine.tld" required="required">
</div></input></p>

<label for="objet">Objet :</label>
<select name="objet" id="objet" required="required">
<option selected="selected" value="'.stripslashes($objet).'" tabindex="4">
<option value="Renseignement">Renseignement
<option value="Proposition">Proposition
<option value="Bug">Bug
<option value="Autre">Autre
</select>

		

		<p><label for="message">Message : <p id="counter">320 characters remaining</p></label><textarea class="form-control counted" id="message" placeholder="Votre message" name="message" tabindex="5" cols="30" rows="8" maxlength="320" required="required">'.stripslashes($message).'</textarea></p>
<button type="submit" name="envoi" class="btn btn-large" type="button">Envoyer</button>

</p>
	</form>';


};
?>

</div>
</div>
</div>








<div class="accordion-group">
<div class="accordion-heading">
<a class="accordion-toggle" data-toggle="collapse" href="#Web">
Web
</a>
</div>
<div id="Web" class="accordion-body collapse">
<div class="accordion-inner">



<div class="span4"><br>
<a href="http://about.me/DamienChiboub" target="_blank" class="url"><span>About.me</span><br><br>
<img src="/img/footer/about-me.com.png" width="180" alt="Screenshot"><br><br></a>
</div> 
<div class="span4"><br>
<a href="https://connect.sensiolabs.com/profile/dvi-" target="_blank" class="url">
<span>Sensiolabs</span><br><br>
<img src="/img/footer/sensiolab.com.png" width="180" alt="Screenshot"><br><br></a>
</div>
<div class="span4"><br>
<a href="https://twitter.com/Damien_Chiboub" target="_blank" class="url">
<span>Twitter</span><br><br>
<img src="/img/footer/twitter.com.png" width="180" alt="Screenshot"><br><br></a>
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

<script>
$("#nom-tooltip").tooltip({'offset': '10', 'placement': 'right'});
$("#prenom-tooltip").tooltip({'offset': '10', 'placement': 'right'});
$("#email-tooltip").tooltip({'offset': '10', 'placement': 'right'});
</script>


<script type="text/javascript">
$('a[rel=popover]').popover({
  html: true,
  trigger: 'hover',
  placement: 'top',
  content: function(){return '<img src="'+$(this).data('img') + '" />';}
});

/**
 *
 * jquery.charcounter.js version 1.2
 * requires jQuery version 1.2 or higher
 * Copyright (c) 2007 Tom Deater (http://www.tomdeater.com)
 * Licensed under the MIT License:
 * http://www.opensource.org/licenses/mit-license.php
 * 
 */
 
(function($) {
    /**
	 * attaches a character counter to each textarea element in the jQuery object
	 * usage: $("#myTextArea").charCounter(max, settings);
	 */
	
	$.fn.charCounter = function (max, settings) {
		max = max || 100;
		settings = $.extend({
			container: "<span></span>",
			classname: "charcounter",
			format: "(%1 characters remaining)",
			pulse: true,
			delay: 0
		}, settings);
		var p, timeout;
		
		function count(el, container) {
			el = $(el);
			if (el.val().length > max) {
			    el.val(el.val().substring(0, max));
			    if (settings.pulse && !p) {
			    	pulse(container, true);
			    };
			};
			if (settings.delay > 0) {
				if (timeout) {
					window.clearTimeout(timeout);
				}
				timeout = window.setTimeout(function () {
					container.html(settings.format.replace(/%1/, (max - el.val().length)));
				}, settings.delay);
			} else {
				container.html(settings.format.replace(/%1/, (max - el.val().length)));
			}
		};
		
		function pulse(el, again) {
			if (p) {
				window.clearTimeout(p);
				p = null;
			};
			el.animate({ opacity: 0.1 }, 100, function () {
				$(this).animate({ opacity: 1.0 }, 100);
			});
			if (again) {
				p = window.setTimeout(function () { pulse(el) }, 200);
			};
		};
		
		return this.each(function () {
			var container;
			if (!settings.container.match(/^<.+>$/)) {
				// use existing element to hold counter message
				container = $(settings.container);
			} else {
				// append element to hold counter message (clean up old element first)
				$(this).next("." + settings.classname).remove();
				container = $(settings.container)
								.insertAfter(this)
								.addClass(settings.classname);
			}
			$(this)
				.unbind(".charCounter")
				.bind("keydown.charCounter", function () { count(this, container); })
				.bind("keypress.charCounter", function () { count(this, container); })
				.bind("keyup.charCounter", function () { count(this, container); })
				.bind("focus.charCounter", function () { count(this, container); })
				.bind("mouseover.charCounter", function () { count(this, container); })
				.bind("mouseout.charCounter", function () { count(this, container); })
				.bind("paste.charCounter", function () { 
					var me = this;
					setTimeout(function () { count(me, container); }, 10);
				});
			if (this.addEventListener) {
				this.addEventListener('input', function () { count(this, container); }, false);
			};
			count(this, container);
		});
	};

})(jQuery);

$(function() {
    $(".counted").charCounter(320,{container: "#counter"});
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
