<?php
/**
* Defines the FAQ page type - initial code created by ss generator.
*/
class FAQ extends Page
{
    private static $show_in_sitetree = false;

    private static $allowed_children = array();

    public function getCMSFields() {
        $fields = parent::getCMSFields();
        $fields->renameField('Title', 'Question');
        $fields->renameField('Content', 'Answer');
        return $fields;
    }
}

class FAQ_Controller extends Page_Controller
{
}
