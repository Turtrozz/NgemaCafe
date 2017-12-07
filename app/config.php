<?php


/* This script is a utility file used to aid the process of including different
 * scripts or files to the application. Herebelow, we first get/extract the application's
 * document root from within the $_SERVER[] autoglobal's DOCUMENT_ROOT key. We first
 * filter the document root string before we continue using it to ensure that it is safe.
 * The document root will be combined with the application's directory to set the the include
 * path for our application.
 * 
 * Following our document root extraction is the extraction of the application's request
 * uri that we will use to get the app's directory. To do this, we extract and filter the
 * request_uri string contained within $_SERVER[] autoglobal's REQUEST_URI key. We then explode
 * this string to an array to be able to parse the the portions of the string we require for our
 * app path.
 *
 * We declare the variable "$app_path" that we use to hold our app path string that we obtain from
 * the exploded REQUEST_URI string, appending the forward slash to each applicable portion.
 * Our final step is using php's set_include_path function to set the include path by appending the
 * app path to the document root.
*
*****************************************************************************************************/


$document_root = filter_input(INPUT_SERVER,'DOCUMENT_ROOT',FILTER_SANITIZE_STRING); // Extracting and filtering document root

$reques_uri = filter_input(INPUT_SERVER,'REQUEST_URI',FILTER_SANITIZE_STRING);

$path_portions = explode('/',$reques_uri);

$app_path = '/'.$path_portions[1].'/'.$path_portions[2].'/'.$path_portions[3].'/';

set_include_path($document_root.$app_path);



?>