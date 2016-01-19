<?php

class FAQTest extends SapphireTest
{
    public function testGetCMSFields() {
        $faq = new FAQ();
        $fields = $faq->getCMSFields();
        $tab = $fields->findOrMakeTab('Root.Main');
        $fields = $tab->FieldList();
        $titles = array();
        foreach ($fields as $field) {
            array_push($titles, $field->Title());
        }
        $expected = array(
            'Install Warning Header',
            'Question',
            'URL Segment',
            'Navigation label',
            'Answer',
            'Metadata'
        );
        $this->assertEquals($expected, $titles);
    }
}
