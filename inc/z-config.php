<?php

$Z = new Z(array(

                 '-head',
                 	'title',
                 '-body',
                 	'page',
                 		'header',
                 		'content',
                 		'footer'

                ),dirname(__FILE__));			

include Z::getPageFile(isset($_REQUEST['page'] )?$_REQUEST['page']:'home',
                       isset($_REQUEST['zajax'])?$_REQUEST['zajax']:null);
?>