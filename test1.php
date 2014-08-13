<?php 
class MyClass1 { 

  // singleton instance 
  private static $instance; 

  // private constructor function 
  // to prevent external instantiation 
  private __construct() { } 

  // getInstance method 
  public static function getInstance() { 

    if(!self::$instance) { 
      self::$instance = new self(); 
    } 

    return self::$instance; 

  } 

} 
?>