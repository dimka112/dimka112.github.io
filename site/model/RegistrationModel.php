<?php
namespace model;
use engine\Model;

    class RegistrationModel extends Model
    {
        public $login;
        public $email;
        public $password;
        public $age;
        
           // получение информации о пользователе из массива $ _POST
          // и сохранение его в свойствах класса
    
        public function infoUser($array)
        {
            $this->login    = $array['username'];
            $this->email    = $array['email'];
            $this->password = $array['password'];
            $this->age      = $array['age'];
            
            $user = [
              'login'       => $this->login,  
              'email'       => $this->email,  
              'password'    => $this->password,  
              'age'         => $this->age  
            ];
            
            return $user;
        }

        
          // показывать статистику обо всех пользователях    

        public function allUsers()
        {
            $db = $this->getDB();
            
            $query = "SELECT login, email, age FROM user";
            
            return $db->query($query);
        }
        
        
          // сохранять новую информацию о пользователе в db
        
        public function saveUser($data)
        {
            $db = $this->getDB();
            
            $query = "INSERT INTO user(login, email, age)" .
                     "VALUES('" . $data['login'] . "', '" . $data['email'] . "', " . $data['age'] . ")";
            
            $db->query($query, false);
        }
    }