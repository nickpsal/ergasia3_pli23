<?php
    namespace Controller;
    //security lock this file show access denied if htaccess dont work
    //we put this line of code on all files
    defined('ROOTPATH') OR exit('Access Denied!');
    
    class _404{
        use \Core\Controller;
        public function index($data = []){
            $data['title'] = '404 Η Σελίδα που ζητήσατε δεν βρέθηκε';
            //get the menu items from database
            $menu = new \Model\Menu;
            $data['menu-items'] = $menu->find_all();
            $this->view('404', $data); 
        }
    }