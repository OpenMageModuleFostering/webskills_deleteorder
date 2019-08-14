<?php
class Webskills_Deleteorder_Block_Adminhtml_Sales_Order_Grid extends Mage_Adminhtml_Block_Sales_Order_Grid
{
	
	protected function _prepareMassaction()
    {
        parent::_prepareMassaction();
         
        // Append new mass action option
        $this->getMassactionBlock()->addItem(
            'deleteorder',
            array('label' => $this->__('Webskills - Delete order'),
                  'url'   => $this->getUrl('deleteorder/adminhtml_deleteorderbackend/Deleteorder') //this should be the url where there will be mass operation
            )
        );
    }
}
			
