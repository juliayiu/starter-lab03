<?php

class bingo extends Application
{
    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone';  // this is the view we want shown
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(5);
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    function wisdom()
    {
        $this->data['pagebody'] = 'justone';  // this is the view we want shown
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(6);
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}