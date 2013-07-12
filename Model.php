<?php
/**
 *  @author         Ryan Edge <ryan@blueacorn.com>
 *  @description    MVC Base Model Class
 *
 *  @link           https://bitbucket.org/baryan
 */
class Model
{

    /** @var resource  Database Connection Resource */
    protected $db;

    // ------------------------------------------------------------------------

    /**
     * __construct - Required
     */
    public function __construct()
    {
        echo 'Base Model Loaded...';
        $s = simplexml_load_file('local.xml');

        try {
            $this->db = new PDO('mysql:host=localhost;dbname=magento','root','root');

        }catch (PDOException $e) {
            print "ERROR!: " . $e->getMessage() . "<br />";
        }

        return $this->db;


    }

    // ------------------------------------------------------------------------


}
/** eof */