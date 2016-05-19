<?php

class Base_Controller extends Main_Controller{


    protected function input($params = array()){
        try{
            $this->model_object = Model::instance();
        }
        catch(Exception $e){
            echo $e->getMessage();
        }

    }

    protected function output(){

        

        $this->header = $this->render(array('title'       => $this->title,
                                            'description' => $this->description,
                                            'keywords'    => $this->keywords,
                                            'menu'        => $this->menu,
                                            'scripts'     => $this->scripts),
                                            'blocks/header');

        $this->footer = $this->render(array(),'blocks/footer');

        $this->left_content = $this->render(array(),'blocks/left_content');

        $page = $this->render(array('header'        => $this->header,
                                    'footer'        => $this->footer,
                                    'content'       => $this->content,
                                    'left_content' => $this->left_content),
                                    'blocks/base_template');
        return $page;
    


    }




}



?>