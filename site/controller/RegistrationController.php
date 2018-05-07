<?php

  namespace controller;

  use engine\Controller; 
  
    class RegistrationController extends Controller {

        public function index()
        {
            //$ModelPage = $this->loadModel('Registration');
            
            $data['title'] = 'Регистрация';
                       
            $this->loadHeader(['title'=>$data['title']]);
            $this->renderView($data, 'registration');
            $this->loadFooter([]);    
        }
    }