<?php

class FAQFolderTest extends SapphireTest
{
    public function testGetLumberjackTitle()
    {
        $faqFolder = new FAQFolder();
        $this->assertEquals('FAQs', $faqFolder->getLumberjackTitle());
    }

    public function testGetCMSFields()
    {
        $faqFolder = new FAQFolder();
        $fields = $faqFolder->getCMSFields();
        $tab = $fields->findOrMakeTab('Root.ChildPages');
        $fields = $tab->FieldList();
        $names = array();
        foreach ($fields as $field) {
            array_push($names, $field->getName());
        }

        // The editing tool that Lumberjack adds
        $expected = array(
            'ChildPages'
        );
        $this->assertEquals($expected, $names);
    }
}
