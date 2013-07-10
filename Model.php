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
        try {
            $this->db = new PDO('mysql:host=localhost;dbname=taskman','root','root');

        }catch (PDOException $e) {
            print "ERROR!: " . $e->getMessage() . "<br />";
        }

        return $this;


    }

    // ------------------------------------------------------------------------

    /**
     * Create A New Record for a table - CRUD - Required
     */
    public function create($table_name, $data) {
        $query = "INSERT INTO " . $table_name . " VALUES (" . $data . ")";

    }

    // ------------------------------------------------------------------------
    /**
     * Retrieve Records for a table - CRUD - Required
     */
    public function retrieve($columns='*', $table, $constraints=null) {
        // e
        $retrieveQuery = '';
        if(is_null($contraints)) {
            $retrieveQuery = "SELECT " . $columns . " FROM " . $table;
        }
        if (is_array($constraints)) {
            foreach ($constraints as $constraint) {
                $constraintColumn = $constraint[0];
                $constraintValue = $constraint[1];
            }
            $retrieveQuery = "SELECT " . $columns . " FROM " . $table . " WHERE " . $constraintColumn . " = " . $constraintValue;
        }


    }

    // ------------------------------------------------------------------------
    /**
     * Retrieve Records for a table - CRUD - Required
     */
    public function update($columns='*', $table, $constraints=null) {

    }

    // ------------------------------------------------------------------------
    /**
     * Retrieve Records for a table - CRUD - Required
     */
    public function delete($columns='*', $table, $constraints=null) {
        // e
        $retrieveQuery = '';
        if(is_null($contraints)) {
            $retrieveQuery = "SELECT " . $columns . " FROM " . $table;
        }
        if (is_array($constraints)) {
            foreach ($constraints as $constraint) {
                $constraintColumn = $constraint[0];
                $constraintValue = $constraint[1];
            }
            $retrieveQuery = "DELETE " . $columns . " FROM " . $table . " WHERE " . $constraintColumn . " = " . $constraintValue;
        }


    }

    // ------------------------------------------------------------------------
    /*
     * CRUD FUNCTIONS WILL ACCEPT THESE PARAMS:
     * 1 $table name
     * 2 $col name
     * 3 $constraint value (WHERE col name = constraint value
     *
     * SELECT [col params] FROM [table name, (same as class?)] WHERE [constraint params]
     *
     * INSERT INTO [table name (same as class name?)]
     *
     * DELETE
     *
     * UPDATE
     */


}
/** eof */