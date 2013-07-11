<?php
/**
 *  @author         Ryan Edge <ryan@blueacorn.com>
 *  @description    MVC Base Controller
 *
 *  @link           https://bitbucket.org/baryan
 *
 */
//namespace baryan\MyMVC

class Controller
{

    /** @var object $view Set from the bootstrap */
    public $view;

    /** @var object $model Set from the bootstrap */
    public $model;

    // ------------------------------------------------------------------------

    /**
     * __construct - Required
     */
    public function __construct()
    {
        echo "Base Controller Loaded...";
    }

    // ------------------------------------------------------------------------

    /**
     *
     *
     */
    public function loadModel($name, $path='models/M_')
    {
        require_once($path . ucfirst($name) . '.php');
        return new $this->model;
    }

}
/** eof */