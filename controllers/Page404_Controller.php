<?php
class Page404_Controller extends Base_Controller
{

    protected function input($params = array()){
        parent::input();

    }

    protected function output(){

        $this->content = $this->render(array(),'blocks/page404_content');
        $this->page = parent::output();

    }

}