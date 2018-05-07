<?php

namespace model;
use engine\Model;

 class PageModel extends Model{
    
     public function getList() {
         
         $db = $this->getDB(); 
         
         $result = $db->query('SELECT id, title FROM page');
         
         return $result;
     }
     
     public function getPage($page_id) {
         
         $db = $this->getDB(); 
         
         $result = $db->query('SELECT id, title, description FROM page WHERE id='. (int) $page_id, false);
         
         return $result;
     }
 }