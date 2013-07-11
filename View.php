<?php
/**
 *  @author         Ryan Edge <ryan@blueacorn.com>
 *  @description    MVC Base View Class
 *
 *  @link           https://bitbucket.org/baryan
 */

class View
{

    /**
     * @var array $_viewQueue
     */
    private $_viewQueue = array();

    /** @var string  Reusable path declared from the bootstrap */
    public $viewName;
//    public $pathView = 'views/';
//    public $prefixView = 'v_';
//    public $fileExtension = '.php';

    // ------------------------------------------------------------------------

    /**
     * __construct - Required
     */
    public function __construct($name)
    {
//        require_once 'views/v_' . $name . '.php';
//        return new $this;
        //echo $name;
        require_once 'views/header.php';
        include_once 'views/'.$name.'.php';
        require_once 'views/footer.php';
    }

    // ------------------------------------------------------------------------



}
/** eof */