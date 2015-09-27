<?php

/**
 * Massage Hook that:
 * inside any <p> elements in the output, which have a class attribute
 * of "lead", bold any capitalized words (includes "I")
 * 
 */
class massage_bold extends Application {

    public function __construct() {
        parent::__construct();
    }

    function bold() {
        // This gets the page's output
        $CI = & get_instance();

        //$document = $this->_get_document();
        //$paragraphs = $document->getElementsByTagName('p');
        // $search is used to define the class attribute of "lead"
        $search = '/<p class="lead">(.*?)<\/p>/';

        // $replace is a function that checks for anything that has a 
        // class attribute of 'lead' inside any <p> and bolds them
        // using the <strong> element.
        $replace = function($match) {
            $look = '/[A-Z][\w]*/';
            $x = $match[0];

            $rep = preg_replace($look, '<strong>${0}</strong>', $x);
            return $rep;
        };

        $bufferOutput = $CI->output->get_output();


        // calls a preg replace callback that replaces the pattern
        $bufferOutput = preg_replace_callback($search, $replace, $bufferOutput);

        // sets the change and displays it on the page
        $CI->output->set_output($bufferOutput);
        $CI->output->_display();
    }

}
