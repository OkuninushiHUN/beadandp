<?php

class Session{
    public static function addMessage(string $text, string $type = "warning"){
        $_SESSION['messages'][]=[
            'text'=>$text,
            'type'=>$type
        ];
    }
    public static function getMessage(bool $clear = true){
        if(!isset($_SESSION['messages'])){
            return false;
        }
        $messages = $_SESSION['messages'];
        if ($clear){
            unset($_SESSION['messages']);
        }
        return $messages;
    }




}
