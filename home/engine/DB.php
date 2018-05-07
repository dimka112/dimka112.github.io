<?php

namespace engine;

use PDO;

final class DB {
    
    private $db;
    
    private static $instance = NULL;

    public function __construct() {
        
        include './system/settings.php';
        
        try {
           $this->db = new PDO("mysql:host={$settings['host']};dbname={$settings['dbname']};charset={$settings['charset']}", $settings['dbuser'], $settings['dbpass']); 
        } catch (PDOException $ex) {
            echo 'Сервис временно не доступен';  
        }
        
    }  
    
    public static function getInstance(){
        
        if (!self::$instance)
        {
            self::$instance = new self();
        }
        
        return self::$instance;
    }
    
    public function query($sql, $type = true){
   
        $dataQuery = $this->db->query($sql);
        
        if($type){
            
            $result = $dataQuery->fetchAll(PDO::FETCH_ASSOC);
            
        }else{
        
            $result = $dataQuery->fetch(PDO::FETCH_ASSOC);
            
        }   
     
        return $result;
    }
}