<?php

$Z = new Z(array(

                 '-head',
                 '-body',
                 	'page',
                 		'header',
                 			'title',
                 		'content',
                 			'aside',
                 			'article',
                 		'footer'

                ),dirname(__FILE__));			

include Z::getPageFile(isset($_REQUEST['page'] )?$_REQUEST['page']:'home',
                       isset($_REQUEST['zajax'])?$_REQUEST['zajax']:null);
?>