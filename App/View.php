<?php

namespace App;

use App\exceptions\ViewNotFoundException;


class View{
    private string $view;
    private array $params;

    public function __construct(string $view,array $params){
        $this->view =$view;
        $this->params=$params;
    }

    public function getViewFile(): string
    {
        $path=VIEW_PATH.$this->view.'.view.php';
        if(!file_exists($path)){
            throw new ViewNotFoundException();
        }
        return $path;
    }
    public function render(): string{
        $viewPath=$this->getViewFile();
    }


    public function __toString():string{
        return $this->render();
    }
    public static function make(string $view,array $params = []){
        return new static($view,$params);
    }




}
