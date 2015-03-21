<?php
/**
 * Defines the FAQFolder page type - initial code created by ss generator
 */
class FAQFolder extends Page {

	static $allowed_children = array( 'FAQFolder', 'FAQ' );

	static $has_one = array(
		'MainImage' => 'Image'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldToTab( 'Root.Image', new UploadField( 'MainImage' ) );


		return $fields;
	}


}

class FAQFolder_Controller extends Page_Controller {

}
