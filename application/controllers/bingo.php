<?php
/**
 * The bingo page. It is set up using the justone view. It contains 
 * the index function and a wisdom() function.  Both functions use 
 * regex.
 */
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