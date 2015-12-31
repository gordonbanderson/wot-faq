<?php
/**
* Defines the FAQ page type - initial code created by ss generator
*/
class FAQ extends Page
{

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();

        return $fields;
    }
}

class FAQ_Controller extends Page_Controller
{
}
