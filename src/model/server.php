<?php
include_once("conexion.php");

class Services{
    
    private $name;   
    private $description;
    private $category;
    private $imagen;
    public $type_service;
    

    public function __construct(){         
    }      

    public function insert($query){ 
        $db= new Conexion;        
        $res=$db->query($query);
        if($res){
            return $res;
        }else{

        }
    }      


    public function select ($sql){ 
        $db= new Conexion();
        $res=$db->getArray($sql);
        if($res){
            return $res;
        }else{

        }
    }      


    public function update($query){ 
        $db= new Conexion();
        $sql=$query;
        $res=$db->query($sql);
        if($res){
            return $res;
        }else{

        }
    } 
    
    public function delete($query){ 
        $db= new Conexion();        
        $res=$db->query($query);
        if($res){
            return $res;
        }else{

        }
    }    
    
}