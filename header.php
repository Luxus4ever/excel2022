<?php
ob_start();
//Startuje se funkcija da bi moglo da se čitav sajt konvertuje u latinicu
?>

<!DOCTYPE html>
<html lang="sr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

	<!-- Google Analytics -->
	<!-- Some code -->	
    
    <!-- SEO Meta Tags -->
    <meta name="description" content="Najopšriniji kurs Excela na našem tržištu, pri tome i najpovoljniji!">
    <meta name="author" content="DLux">
	<meta name="robots" content="follow, index">

    <!-- OG Meta Tags to improve the way the post looks when you share the page on LinkedIn, Facebook, Google+ -->
	<meta property="og:site_name" content="darkoexcel.rs" /> <!-- website name -->
	<meta property="og:site" content="https://darkoexcel.rs" /> <!-- website link -->
	<meta property="og:title" content="Ексел(MS Excel): Од почетника, до експерта"/> <!-- title shown in the actual shared post -->
	<meta property="og:description" content="Научите да радите у Ексел (MS Excel) програму. Најбољи курс: Од почетника, до експерта!" /> <!-- description shown in the actual shared post -->
	<meta property="og:image" content="images/matilda-wormwood.jpg" /> <!-- image link, make sure it's jpg -->
	<meta property="og:url" content="https://darkoexcel.rs" /> <!-- where do you want your post to link to -->
	<meta property="og:type" content="article" />

    <!-- Website Title -->
    <title>Дарко Ексел - Ваш курс МС Ексела</title>
    
    <!-- Styles -->
    <link href="https://fonts.googleapis.com/css?family=Montserrat:400,400i,600,700,700i&display=swap" rel="stylesheet">
    <link href="css/bootstrap.css" rel="stylesheet">
    <link href="css/fontawesome-all.css" rel="stylesheet">
    <link href="css/swiper.css" rel="stylesheet">
	<link href="css/magnific-popup.css" rel="stylesheet">
	<link href="css/styles.css" rel="stylesheet">
	<link href="css/lightbox.css" rel="stylesheet">
	
	<!-- Favicon  -->
    <link rel="icon" href="images/faviconn.png">

	<!-- Google Tag Manager -->

		<!-- Some code -->	

	<!-- End Google Tag Manager -->
</head>
<body data-spy="scroll" data-target=".fixed-top">

    <!-- Navigation -->
		<?php 
		$trenutni_link = $_SERVER['PHP_SELF'];
		//echo $trenutni_link;
		if($trenutni_link== "/index.php")
		{
			include "nav.php";
		}
		else if($trenutni_link=="/lat.php")
			{
				//echo $trenutni_link;
				include "nav-lat.php";
			}
		?>
    <!-- kraj navigation -->


    <!-- Header -->
    <header id="header" class="header">
        <div class="container">
		
            <div class="row">
                <div class="col-lg-12">
                    <div class="text-container">
                        <h1>Ексел: од почетника до експерта</h1>
                        <p class="p-large">Да ли желите да научите рад у МС Екселу (MS Excel)? Не желите више да будете црна овца? Желите да идете спремни на посао и да се докажете? Онда је ово прави курс за вас.</p>
                    </div> <!-- kraj text-container -->
        <?php
			include "classes/sliders.class.php";
			$sldr= new Slider();
			$sldr->slider1();
		?>

    </header> <!-- kraj header -->
    <!-- kraj header -->