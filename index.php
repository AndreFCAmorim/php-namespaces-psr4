<?php
error_reporting(E_ALL);
ini_set("display_errors", 1);


if ( file_exists( dirname( __FILE__ ) . '/vendor/autoload.php' ) ) {
	require_once dirname( __FILE__ ) . '/vendor/autoload.php';
}

use Namespaces\V1\SiteXXX\Example\Begin;

$xxx = new Begin();
$xxx->renderTest();
