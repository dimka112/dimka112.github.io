<?php

namespace controller;

 use engine\Controller;
  
class FooterController extends Controller {
    
    public function index($data)
    {
        include './view/footer.php';
    }
}