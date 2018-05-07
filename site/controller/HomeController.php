<?php

namespace controller;

 use engine\Controller;
 use model\RegistrationModel;

class HomeController extends Controller
{
    public function index()
    {
        
        $data = [];
    
        if ($_SERVER['REQUEST_METHOD'] === 'POST' && $_GET['route'] === 'registration')
            {
                // getting the Registration Model
                $ModelPage = new RegistrationModel();

                // get info about a new user from $_POST array
                $user = $ModelPage->infoUser($_POST);

                // save it into $data array
                $data['user'] = $user;

                // save new user to db
                $ModelPage->saveUser($data['user']);
                
                // show all users
                //$data['all'] = $ModelPage->allUsers();
    }          
        $this->loadHeader(['title'=>'Главная']);
        $this->renderView($data, 'home');
        $this->loadFooter([]);
            
    }
}