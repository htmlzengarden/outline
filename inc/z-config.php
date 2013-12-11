<?php

$Z = new Z(array(

                 '_head',
                     '_title',
                 '_body',
                     '_page',
                         '_header',
                         'content',
                         '_footer'

                ),dirname(__FILE__));            

include Z::getPageFile(isset($_REQUEST['page'] )?$_REQUEST['page']:'home',
                       isset($_REQUEST['zajax'])?$_REQUEST['zajax']:null);
?>