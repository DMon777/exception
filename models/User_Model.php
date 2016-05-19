<?php 

class User_Model{

	protected static $instance;

	public static function instance(){
        if(self::$instance instanceof self) {
            return self::$instance;
        }
        return self::$instance = new self;
    }


	
}



?>