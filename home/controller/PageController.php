<?php

  namespace controller;
  use engine\Controller;
  use model\PageModel;

    class PageController extends Controller {

        public function getPage($id)
        {
            
            $PageModel = new PageModel();
            
            $data['page'] = $PageModel->getPage($id);
                       
            $this->loadHeader(['title'=>$data['page']['title']]);
            $this->renderView($data, 'page');
            $this->loadFooter([]);    
        }
    }