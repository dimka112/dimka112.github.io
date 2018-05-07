<?php

    spl_autoload_register(function ($namespace)
{
        $pach = str_replace('\\', '/', $namespace) .'.php';
        
        if(file_exists($pach))
        {
            include_once $pach;
        }     
     
});