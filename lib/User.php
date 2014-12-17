<?php
/* This is a multi line comment
       yet another line of comment!! */
class User {
    protected $name;
 
    public function getName() {
        return $this->name;
    }
 
    public function setName($name) {
        $this->name = $name;
    }
 
    public function talk() {
        return "Hello world!";
    }
    
    public function talk1() {
        return "Hello world!";
    }
}
