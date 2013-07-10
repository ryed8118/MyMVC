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

    /** @var string $modelPath Reusable path declared from the bootstrap */
    public $modelPath;
    public $modelName;

    // ------------------------------------------------------------------------

    /**
     * __construct - Required
     */
    public function __construct($name)
    {
        $this->model = new Model($name);

        $this->view = new View($name);
    }

    // ------------------------------------------------------------------------

    /**
     *
     * @param string $model
     * @return \jream\MVC\model
     */
    public function loadModel($name, $path='models/m_')
    {
        $this->modelName = $name . '.php';
        $this->modelPath = $path; //!todo set this value in bootstrap
        require_once($this->modelPath . $this->modelName);
        return new $this->model;
    }

    // ------------------------------------------------------------------------

    /**
     *
     */
    public function anon() {

    }

}
/** eof */