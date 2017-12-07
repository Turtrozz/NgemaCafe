<?php if(session_status() == PHP_SESSION_NONE){ session_start();}

 include'app/config.php';?>

<!doctype html>



<!--Conditional comments to provide/hide code in certain browsers-->

<!--Downlevel-hidden conditonal comments for IE browsers-->

<!--[if lt IE 7]><html class="no-js lt-ie9 lt-ie8 lt-ie7" lang="en"><![endif]-->
<!--[if IE 7]><html class"no-js lt-ie9 lt-ie8" lang="en"><![endif]-->
<!--[if IE 8]><html class="no-js lt-ie9" lang="en"><![endif]-->

<!--Downlevel-revealed conditional comments for non-IE browsers-->

<!--[if gt IE 8]><!--><html class="no-js" lang="en"> <!--<![endif]-->

<head>

	<meta charset="utf-8" />
    <!--Forcing IE browsers to use the latest available rendering engin-->
    	<meta http-equiv="x-ua-compatible" content="ie=edge" />
    <!--Forcing a device to display content relative to it's viewport for responsive design-->
    	<meta name="viewport" content="width=device-width,initial-scale=1" />
    <!--Seo optimisation for better indexing or crawling by robots-->
    	<meta name="robots" charset="INDEX,FOLLOW" /><!--Telling robots to crawl site content-->
        <meta name="description" content="Mashele Dental care,welcome" /><!--For better rating-->
        <meta name="keywords" content="Smile,shine,be happy" /><!--Even better crawling-->
    <!--Site Autour-->
    	<meta name="author" content="MashDesigners" />
        
        
    <!--The rest of the normal header content-->
    
    <title>Welcome - Ngema Restuarant</title>
    <link href="<?php echo $app_path.'public/css/normalize.css' ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo $app_path.'public/css/vendor/animate.css' ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo $app_path.'public/css/ajax.css' ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo $app_path.'public/css/user.css' ?>" type="text/css" rel="stylesheet" />
    <link href="<?php echo $app_path.'public/css/style.css' ?>" type="text/css" rel="stylesheet" />
    
    <script src="<?php echo $app_path.'public/js/vendor/modernizr-2.8.3.min.js'; ?>"></script>
    <script src="<?php echo $app_path.'public/js/vendor/picturefill.js'; ?>"></script>

</head>

<body>

