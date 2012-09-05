<?php
/**
 * Defines the FAQFolder page type - initial code created by ss generator
 */
class FAQFolder extends Page implements RenderableAsPortlet {

	static $allowed_children = array( 'FAQFolder', 'FAQ' );

	static $has_one = array(
		'MainImage' => 'Image'
	);

	function getCMSFields() {
		$fields = parent::getCMSFields();

		$fields->addFieldToTab( 'Root.Content.Image', new ImageField( 'MainImage' ) );


		return $fields;
	}


	public function getPortletTitle() {
    return $this->Title;
  }  


  // FIXME - make this more efficient
  public function getPortletImage() {
  	if ($this->MainImageID) {
    return DataObject::get_by_id('Image', $this->MainImageID);

  	} else {
  		return null;
  	}
    
  }
  
  
 
  public function getPortletCaption() {
    return '';
  }

}

class FAQFolder_Controller extends Page_Controller {

}

?>
