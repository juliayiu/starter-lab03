<?php
/**
 * The Guess page.  It links by /dunno. It is set up by the justone view.
 */
class guess extends Application
{
    function __construct() {
        parent::__construct();
    }

    function index() {
        $this->data['pagebody'] = 'justone';  // this is the view we want shown
        
        // build the list of authors, to pass on to our view
        $source = $this->quotes->get(4);
        $this->data = array_merge($this->data, $source);
        
        $this->render();
    }
}