<?php
  require('../_inc/functions.php');
?>
<!DOCTYPE html>
<head>
	<title>Retro Diner</title>
	<meta charset="utf-8">
	<link href="../css/style.css" rel="stylesheet" type="text/css">
    <title><?php 'Moj web | '. (basename($_SERVER["SCRIPT_NAME"], '.php'));?></title>
</head>
<body>
	<div id="header">
		<div>
			<a href="../index.php"><img class="logo" src="../images/logo.png" width="513" height="84" alt="" title=""></a>
			<a href="../index.php"><img  src="../images/waitress.png" width="332" height="205" alt="" title=""></a>
			<ul class="navigation">
                <?php
                
                $pages = array('Home'=> 'home.php',
                'About'=>'about.php',
                'Menu' =>'burger.php',
                'Contact'=> 'contact.php',
                'Blog'=>'blog.php'
            );
                $menu_object  = new Menu($pages);
                echo($menu_object->generate_menu());
                ?>
			</ul>
		</div>
	</div>