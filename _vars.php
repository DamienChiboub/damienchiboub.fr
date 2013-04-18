<?php 
        $metaup="2013-04-18 Thursday 03:50:00";
        $today = date("{ H:i:s : d/M/Y }");
	$update = "{ 03:50:00 : 18/Apr/2013 }";

        $worknum = Rand(1,7); 
	switch ($worknum)
	{
			
		case 1:
			$work= " se sert de Github";
			break;
		case 2:
			$work= " utilise le moteur de rendu Twig";
			break;
		case 3:
			$work= " int&egrave;gre le front-end Bootstrap";
			break;
		case 4:
			$work= " apprend le d&eacute;veloppement MVC ";
			break;
		case 5:
			$work= " &eacute;tudie le framework Symfony";
			break;
		case 6:
			$work= " mod&eacute;lise les donn&eacute;es avec Doctrine";
			break;
               case 7;
                        $work=" g&egrave;re des services partag&eacute;s ou d&eacute;di&eacute;s"; 
                         break;

           }

        $num = Rand(1,8); 
	switch ($num)
	{
			
		case 1:
			$a= " <a href='http://www.damienchiboub.fr'>Contributeur</a> en s&eacute;curit&eacute; informatique"; 
			break;
		case 2:
			$a= "<a href='http://www.damienchiboub.fr'>Vulns</a> tracker";
			break;
		case 3:
			$a= "Propri&eacute;taire de <a href='http://www.reverse-engineering.fr' target='_blank'>reverse-engineering.fr</a>";
			break;
		case 4:
			$a= "<a href='http://www.damienchiboub.fr'>IT</a> Support";
			break;
		case 5:
			$a= "<a href='http://www.damienchiboub.fr'>Junior</a> Object-Oriented Programming Learner";
			break;
		case 6:
			$a= "<a href='http://www.damienchiboub.fr'>Web</a> Developer";
			break;
		case 7:
			$a= "<a href='http://www.damienchiboub.fr'>&#63743;</a> User";
			break;
                case 8:
			$a= "<a href='http://www.damienchiboub.fr'>Consultant</a> en syst&egrave;mes d&rsquo;informations ";
			break;
	}

       $lienweb = Rand(1,9);
	switch ($lienweb)
	{
			
		case 1:
			$b="<a href='http://fr.linkedin.com/in/damienchiboub' target='_blank'>Linkedin.com</a>"; 
                        $weblinkpic="<img src='/img/fav/linkedin_favicon.png'>";
			break;
		case 2:
			$b="<a href='http://www.viadeo.com/fr/profile/damien.chiboub' target='_blank'>Viadeo.com</a>";
                        $weblinkpic="<img src='/img/fav/viadeo_favicon.png'>";
			break;
		case 3:
			$b="<a href='https://github.com/DamienChiboub' target='_blank'>Github.com</a>";
                        $weblinkpic="<img src='/img/fav/github_favicon.png'>";
			break;
                case 4:
			$b="<a href='https://twitter.com/Damien_Chiboub' target='_blank'>Twitter.com</a>";
                        $weblinkpic="<img src='/img/fav/twitter_favicon.png'>";
			break;
                case 5:
			$b="<a href='https://www.facebook.com/damien.chiboub' target='_blank'>Facebook.com</a>";
                        $weblinkpic="<img src='/img/fav/facebook_favicon.png'>";
			break;
                case 6:
			$b="<a href='http://instagram.com/DamienChiboub' target='_blank'>Instagram.com</a>";
                        $weblinkpic="<img src='/img/fav/instagram_favicon.png'>";
			break;
                case 7:
			$b="<a href='http://pinterest.com/DamienChiboub' target='_blank'>Pinterest.com</a>";
                        $weblinkpic="<img src='/img/fav/pinterest_favicon.png'>";
			break;
                case 8:
			$b="<a href='http://gravatar.com/damienchiboub' target='_blank'>Gravatar.com</a>";
                        $weblinkpic="<img src='/img/fav/gravatar_favicon.png'>";
			break;
                case 9:
			$b="<a href='https://plus.google.com/110705607218372468993' target='_blank'>Google.com</a>";
                        $weblinkpic="<img src='/img/fav/google-plus_favicon.png'>";
			break;
}	
	?>
					
