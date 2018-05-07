<?php

function route()
{
        //Подключаем файл с путями
       include './system/routes.php';

       if ($_SERVER['REQUEST_METHOD'] === 'GET' && !empty($_GET['route']))
    {
        //берем строку запроса
       $data_route = $_GET['route'];
      
       /*Разбиваем строку на параметры*/
       $params = explode('/', $data_route);
       
       /*Получаем имя контроллера из url*/
       $ControllerName = $params[0];
       
       if(isset($params[1])){
           /*Получаем значения параметра из url*/
           $SlugName = $params[1];
       }
       
         
        //Если существует путь по данному запросу
    
       if(isset($routes[$ControllerName]))
        {
            /*Присваеваем в переменную настройки текущего контроллера*/
             $route = $routes[$ControllerName];
             
               /*Создаем объект контроллера*/
               $Controller = new $route['namespace']();
               /*Сохраняем название действия в переменную*/
               $Action = $route['action'];

               /*Если существует параметр контроллера*/
               if(isset($route['slug']))
               {
                   /*Вызываем метод контроллера и передаем параметр*/
                  $Controller->$Action($SlugName);    
               }
               else{    
               /*Вызываем метод контроллера*/
               $Controller->$Action();
         }
        }
       
       else
           {
           //Если ресурс не найден возвращаем ошибку
           include './controller/ErrorsController.php';
       }
    }
    
       else{
           
           /*Создаем объект контроллера*/
        $Home = new $routes['home']['namespace']();
        
          /*Сохраняем название действия в переменную*/
        $Action = $routes['home']['action'];
        
        /*Вызываем метод контроллера для отрисовки страницы*/
        $Home->$Action();
    }
}