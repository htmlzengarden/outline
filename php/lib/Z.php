<?php
/**
 * Z HTML framework
 * basic pure PHP Implementation
 *
 * (c) 2010 Cedric MORIN
 * GPL3 Licence
 *
 *
 */


/**
 * Z class
 *
 * @author cedric
 */
class Z {
    protected static $version="1.1.1";
    protected static $default="dist";

    // default block list
    // body is not allowed as block name
    protected static  $blocks = array('content','header','nav','aside','footer','head');
    protected static  $path=array();
    protected static  $ext = ".php";
    protected static  $pageName = null;
    protected static  $ajaxBlock = null;
    protected static  $error = "";

    /**
     * Constructor
     *
     * @param array $blocks
     *    list of blocks. If none given default is array('content','header','nav','aside','footer','head')
     *
     * @param array $path
     *    list of dir path. Automaticaly append path of this file to find page/ajax/error files
     *
     * @param string $extension
     *  optional extension for file finding. Default is 'php'.
     *  If different, you need to provide page/ajax/error files with suitable extension
     * 
     */
    public function Z($blocks=array(),$path=array(),$extension = "php"){
        if ($blocks)
            Z::setBlocks($blocks);
        Z::setPath($path);
        Z::$ext = ".".trim(ltrim($extension,'.'));
    }

    /**
     * Entry point, to get page file to include, given page name
     * and optionnal ajax block requested
     *
     * @param string $name
     * @param string $ajaxBlock
     * @return string
     */
    public static function getPageFile($name, $ajaxBlock = null) {
        if (Z::$pageName)
            return Z::returnError("Error : currently processing page ".Z::$pageName.". Can't process page $name");
        Z::$pageName = $name;

        if ($ajaxBlock) {
          if (in_array($ajaxBlock,  Z::$blocks)) {
                Z::$ajaxBlock = $ajaxBlock;
            }
            else {
                return Z::returnError('<p>Le bloc <abbr>AJAX</abbr> « '.$ajaxBlock.' » n’est pas autorisé. </p>');
            }
            return Z::findInPath("z-ajax". Z::$ext);
        }

        return Z::findInPath("-html". Z::$ext);
    }

    /**
     * Method used for block inclusion in page.php and body.php
     *
     * @param string $block
     *    block name. If none given, ajaxblock is assumed. Error if none set.
     *    can be a block name solely, current page assumed
     *  or can be block/pagename
     * @return string
     */
    public static function getFile($block=null) {
        $pageName = Z::$pageName;
        $block = explode("/",$block);
        if (count($block)==2)
            $pageName = end($block);
        $block = reset($block);

        if (!$pageName)
            return Z::returnError("<p>Erreur : aucune page n&rsquo;est actuellement demand&eacute;e, le nom de la page doit &ecirc;tre d&eacute;finit. </p>");
        if (!$block AND !($block = Z::$ajaxBlock))
            return Z::returnError("Erreur : aucun bloc n&rsquo;est défini.");

        if ($block == 'body') {
            // if dedicated body-pagename for this pagename,
            // use it instead of general body structure
            if ($f = Z::findInPath("body-$pageName".Z::$ext,false))
                return $f;
            // else return general body structure
            return Z::findInPath("body".Z::$ext);
        }

        if (!in_array($block,  Z::$blocks))
            return Z::returnError('<p>Le bloc « '.$block.' » n’est pas autorisé. </p>');

        // try to find block for current page
        if ($f = Z::findInPath("$block/$pageName".Z::$ext,false))
            return $f;

        // if not found and content block then 404 content
        if ($block==reset(Z::$blocks))
            return Z::findInPath("$block/dist".Z::$ext);

        return Z::findInPath("$block/".Z::$default.Z::$ext);
    }

    /**
     * Retrieve Error message
     * @return string
     */
    public static function getError() {
        return Z::$error;
    }

    /**
     * Return error filename, that will display current error message
     * @param string $message
     * @return string
     */
    protected static function returnError($message){
        Z::$error = $message;
        return Z::findInPath("z-error".Z::$ext);
    }

    /**
     * Get name of the page beeing processed
     * @return string
     */
    public static function getPageName() { return Z::$pageName; }


    /**
     * Set blocks list
     * First block is content block that drives page construction
     * order of others blocks has no effect
     *
     * 'head' is allways append to blocks if not listed
     *
     * @param array $blocks
     *    array('content','header','aside',footer');
     * @return void
     */
    public static function setBlocks($blocks){
        if (!is_array($blocks))
            return false;
        Z::$blocks = array();
        while($b = array_shift($blocks)){
            $b = trim(rtrim($b,'/'));
            # / not allowed in block names. Explode to take first segment
            $b = explode('/',$b);
            $b = reset($b);
            // body is not allowed as block name
            if ($b!=='body')
                Z::$blocks[] = $b;
        }
        if (!in_array('head',  Z::$blocks))
            Z::$blocks[] = 'head';
    }



    /**
     * Find file in path !
     * @param string $file
     * @return string
     */
    protected static function findInPath($file, $display_error=true){
        foreach(Z::$path as $p) {
            if (file_exists($f = $p . $file))
                return $f;
        }
        return $display_error?Z::returnError('<p>Le fichier « '.$file.' » n’a pas été trouvé. </p>'):'';
    }

    /**
     * Get path used for block file search
     * First path in array has the highest priority
     *
     * @return array
     */
    public static function getPath(){ return Z::$path; }

    /**
     * Set path list for block file search
     * Return current path after setting
     * 
     * @param array/string $path
     * @return array
     */
    public static function setPath($path){
        Z::$path = array();
        Z::prependPath(dirname(__FILE__));
        return Z::prependPath($path);
    }

    /**
     * Prepend path dirs to current path
     * Return current path after setting
     *
     * @param array/string $path
     * @return array
     */
    public static function prependPath($path){
        if (is_array($path))
            while($p = array_pop($path))
                Z::prependPath($p);
        else {
            $path = trim(rtrim($path,'/'));
            if (is_dir($path))
             array_unshift (Z::$path,"$path/");
        }
        return Z::$path;
    }

    /**
     * Append path dirs to current path
     * Return current path after setting
     *
     * @param array/string $path
     * @return array
     */
    public static function appendPath($path){
        if (is_array($path))
            while($p = array_shift($path))
                Z::appendPath($p);
        else {
            $path = trim(rtrim($path,'/'));
            if (is_dir($path))
             array_push (Z::$path,"$path/");
        }
        return Z::$path;
    }

}
?>