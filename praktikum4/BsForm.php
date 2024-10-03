<?php

class BsForm{
    
    public function setInputText($id, $name, $label){
       $iText = ' <div class="">
        <label for=" ' .$id.'">' .$label. '</label>
        <input class="form-control" type="text" name="' .$name. " id='" .$id."'> 
    </div>';
    array_push($this->components,$iText) ;

    }

    public function setInputTextarea(){

    }

    public function setButton($label){
        $btn = '<div class="">
                   <button class="">'.$label.'</button> 
                </div>';
                array_push($this->components, $btn);




    }

    public function setForm($action, $method){
        $this->action = $action;
        $this->method = $method;
    }

    public function shiowForm(){
        echo'
        <form action="' . $this->action . '" method="' . $this->method . '">
        ';

        foreach($this->components as $item){
            echo $item;
        }

        echo '</form>';
    }
}