<?php

  namespace engine;
  
  use controller\HeaderController;
  use controller\FooterController;

    abstract class Controller 
    {
            public function loadHeader($data)
            {
                $Header = new HeaderController();

                $Header->index($data);

            }

            public function loadFooter($data){
                
                $Footer = new FooterController();

                $Footer->index($data);

            }
            
           
            public function renderView($data, $path) {
                 include './view/' . $path. '.php';
            }
    }