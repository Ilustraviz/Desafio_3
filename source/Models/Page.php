<?php

namespace Source\Models;

use Rain\Tpl;

class Page{
    private $tpl;
    private $options = [];
    private $defaults = [
        
        "route"=>"http://192.168.0.106/prismacode",
        "imageRoute"=>"http://192.168.0.106/prismacode/website/img"
           
        
    ];
    public function __construct($data = array(), $opts = array(), $tpl_dir = "/website/templates/"){
        $this->options = array_merge($this->defaults,$opts);
        
        $config = array(
            "tpl_dir"       => array(
                $_SERVER["DOCUMENT_ROOT"]. $tpl_dir
            ),
            "cache_dir"     => $_SERVER["DOCUMENT_ROOT"]."/website/cache/",
            "debug"         => true // set to false to improve the speed
           );

        Tpl::configure( $config );

        $this->tpl = new Tpl;
        //$this->setData($this->options["data"]);
        //$this->setData($data);

        /*if($this->options["header"])
            $this->tpl->draw("header");*/
    }
    private function setData($data = array())
    {
        foreach ($data as $key => $value)
        {
            $this->tpl->assign($key,$value);
        }
    }

    public function setTpl($name, $data = array(), $returnHTML = false)
    {
        $this->setData($data);

        /*if($this->options["header"])
            $this->tpl->draw("header");*/

        return $this->tpl->draw($name,$returnHTML);
    }

    public function __destruct(){
        /*if($this->options["footer"])
            $this->tpl->draw("footer");*/
    }
}

?>