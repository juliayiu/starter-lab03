<?php

/*
 * The Last page that is set up by the justone view.  It shows the last person
 * on the list of authors.
 */
class Welcome extends Application
{
    function __contruct()
    {
        parent::__construct();
    }
    
    function index()
    {
        $this->data['pagebody'] = 'justone';  // this is the view we want shown
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->last();
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}