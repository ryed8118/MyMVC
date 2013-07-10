<?php
/**
 * Created by JetBrains PhpStorm.
 * User: incubator
 * Date: 6/27/13
 * Time: 10:11 AM
 * To change this template use File | Settings | File Templates.
 */

class ArrayAccessIterator implements ArrayAccess, Iterator {

    private $position = 0;
    private $container = array();

    public function __construct() {
        $this->date = date('Y-m-d');
        $fhandle = fopen('logs/'.$this->date, 'r+');
        if($fhandle) {
            $line = fgets($fhandle);
            $data = explode("\t", $line);
            $this->timestamp = $data[0];
            $this->ip = $data[1];
            $this->url = $data[2];
            $this->session_id = $data[3];
        }

    }

    public function offsetSet($offset, $value) {
        if(is_null($offset)) {
            $this->container[] = $value;
        }else {
            $this->container[$offset] = $value;
        }
    }

    public function offsetGet($offset) {
        return isset($this->container[$offset]) ? $this->container[$offset] : null;
    }

    public function offsetExists($offset) {
        return isset($this->container[$offset]);
    }

    public function offsetUnset($offset) {
        unset($this->container[$offset]);
    }

    public function valid() {

    }

    public function next() {
        ++$this->position;
    }

    public function current() {
        return $this->container[$this->position];
    }

    public function rewind() {
        ++$this->position;
    }

    public function key() {

    }
}