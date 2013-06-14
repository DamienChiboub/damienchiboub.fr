<?php 
        $metaup="2013-06-14 Friday 22:00:00";
        $today = date("{ H:i:s : d/M/Y }");
	$update = "{ 22:00:00 : 14/Jun/2013 }";

        $worknum = Rand(1,8); 
	switch ($worknum)
	{
			
		case 1:
			$work= " se sert de <a href='https://github.com' target='_blank'>Github</a>";
			break;
		case 2:
			$work= " utilise le moteur de rendu <a href='http://twig.sensiolabs.org' target='_blank'>Twig</a>";
			break;
		case 3:
			$work= " int&egrave;gre le front-end <a href='http://twitter.github.io/bootstrap' target='_blank'>Bootstrap</a>";
			break;
		case 4:
			$work= " apprend le d&eacute;veloppement <a href='http://fr.wikipedia.org/wiki/Mod&egrave;le-Vue-Contr&ocirc;leur' target='_blank'>MVC</a>";
			break;
		case 5:
			$work= " &eacute;tudie le framework <a href='http://symfony.com' target='_blank'>Symfony</a>";
			break;
		case 6:
			$work= " mod&eacute;lise les donn&eacute;es avec <a href='http://www.doctrine-project.org' target='_blank'>Doctrine</a>";
			break;
               case 7;
                        $work=" g&egrave;re des services partag&eacute;s ou d&eacute;di&eacute;s"; 
                         break;
               case 8;
                        $work=" recommande l&rsquo;<a href='http://opensource.org' target='_blank'>Open Source</a>"; 
                         break;

           }

        $num = Rand(1,8); 
	switch ($num)
	{
			
		case 1:
			$a= " <a href='http://www.damienchiboub.fr'>Computer</a> Security Contributor"; 
			break;
		case 2:
			$a= "<a href='http://www.damienchiboub.fr'>Vulns</a> Finder";
			break;
		case 3:
			$a= "<a href='http://www.reverse-engineering.fr' target='_blank'>reverse-engineering.fr</a> Owner";
			break;
		case 4:
			$a= "<a href='http://www.damienchiboub.fr'>IT</a> Support";
			break;
		case 5:
			$a= "<a href='http://www.damienchiboub.fr'>Junior</a> OOP Learner";
			break;
		case 6:
			$a= "<a href='http://www.damienchiboub.fr'>Junior</a> Web Developer";
			break;
		case 7:
			$a= "<a href='http://www.damienchiboub.fr'>Unix</a> User";
			break;
                case 8:
			$a= "<a href='http://www.damienchiboub.fr'>System</a> Information Consultant";
			break;
	}

       $lienweb = Rand(1,13);
	switch ($lienweb)
	{
			
		case 1:
			$b="<a href='http://fr.linkedin.com/in/damienchiboub' target='_blank'>Linkedin.com</a>"; 
			break;
		case 2:
			$b="<a href='http://www.viadeo.com/fr/profile/damien.chiboub' target='_blank'>Viadeo.com</a>";
			break;
		case 3:
			$b="<a href='https://github.com/DamienChiboub' target='_blank'>Github.com</a>";
			break;
                case 4:
			$b="<a href='https://twitter.com/Damien_Chiboub' target='_blank'>Twitter.com</a>";
			break;
                case 5:
			$b="<a href='https://www.facebook.com/damien.chiboub' target='_blank'>Facebook.com</a>";
			break;
                case 6:
			$b="<a href='http://instagram.com/DamienChiboub' target='_blank'>Instagram.com</a>";
			break;
                case 7:
			$b="<a href='http://pinterest.com/DamienChiboub' target='_blank'>Pinterest.com</a>";
			break;
                case 8:
			$b="<a href='http://gravatar.com/damienchiboub' target='_blank'>Gravatar.com</a>";
			break;
                case 9:
			$b="<a href='https://plus.google.com/110705607218372468993' target='_blank'>Google.com</a>";
			break;
                case 10:
			$b="<a href='https://connect.sensiolabs.com/profile/dvi-' target='_blank'>Sensiolab.com</a>";
			break;
                case 11:
			$b="<a href='http://about.me/DamienChiboub' target='_blank'>About.me</a>";
			break;
                case 12:
			$b="<a href='http://worketer.com/DamienChiboub' target='_blank'>Worketer.com</a>";
			break;
                 case 13:
			$b="<a href='https://www.vizify.com/damien-chiboub' target='_blank'>Vizify.com</a>";
			break;

}	
	?>
							
