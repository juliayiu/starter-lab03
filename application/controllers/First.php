<?php

/**
 * A page of our first person containing the contructor, and functions index(),
 * zzz() and gimme($id).  The functions are all using the justone view setup.
 */
class First extends Application {

    function __construct() {
        parent::__construct();
    }

    /**
     * index page of /first link
     */
    function index() {
        $this->data['pagebody'] = 'justone';  // this is the view we want shown
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
    
    /**
     * page for /sleep link
     */
    function zzz()
    {
        $this->data['pagebody'] = 'justone';  // this is the view we want shown
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->first();
        $this->data = array_merge($this->data, $source);
        
        $this->render(); 
    }

    /*
     * page for show/$id where $id is a number that corresponds to different
     * authors
     */
    function gimme($id)
    {
        $this->data['pagebody'] = 'justone';  // this is the view we want shown
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get($id);
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}
