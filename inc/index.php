<?php
/**
 * Z HTML Framework's Demonstration
 * basic pure PHP implementation
 *
 * Try following urls
 * ../php/demo/ is the home page, build on only content/home.php and default blocks
 * ../php/demo/?page=home is the same
 * ../php/demo/?page=stuff is an non existant page
 * ../php/demo/?page=home&zajax=content get the content block only of home page
 * ../php/demo/?page=home&zajax=header get the header block only of home page
 * ../php/demo/?page=home&zajax=footer get the footer block only of home page
 *
 * Try to add new content/hello.php abd look at
 * ../php/demo/?page=hello
 * Then, try to add dedicated header/hello.php and footer/hello.php
 * 
 */


require_once '../php/lib/Z.php';

$Z = new Z(array('content','header','footer','ariane','sidebar','aside','nav','main','page'),dirname(__FILE__));
include Z::getPageFile(
				isset($_REQUEST['page'] )?$_REQUEST['page']:'home',
				isset($_REQUEST['zajax'])?$_REQUEST['zajax']:null);