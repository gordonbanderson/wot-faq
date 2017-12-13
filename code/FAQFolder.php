<?php

use SilverStripe\Assets\Image;
use SilverStripe\AssetAdmin\Forms\UploadField;

/**
 * Defines the FAQFolder page type - initial code created by ss generator.
 */
class FAQFolder extends Page
{
    private static $allowed_children = array('FAQFolder', 'FAQ');

    private static $show_in_sitetree = true;

    private static $has_one = array(
        'MainImage' => Image::class,
    );

    public function getLumberjackTitle()
    {
        return 'FAQs';
    }

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->addFieldToTab('Root.Image', new UploadField('MainImage'));
        return $fields;
    }
}
