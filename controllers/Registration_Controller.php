<?php


class Registration_Controller extends Base_Controller {

  

    protected function input($params = array()){
        parent::input();

    }

    protected function output(){

        $this->content = $this->render(array(),'blocks/registration_content');

        $this->page = parent::output();
    }


} 


?>