<?php

namespace controller;

  use engine\Controller;
  use model\PageModel;


class HeaderController extends Controller {
    
    public function index($data)
    {
        $PageModel = new PageModel();
        
        $links = $PageModel->getList();
        
        $data['links'] = $links;
        
        $this->renderView($data, 'header');
    }
}