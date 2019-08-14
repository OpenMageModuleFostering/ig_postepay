<?php
class IG_PostePay_Block_Form extends Mage_Payment_Block_Form
{
	protected function _construct()
	{
		parent::_construct();
		$this->setTemplate('ig_postepay/form.phtml');
	}

	public function getPaymentImageSrc()
	{
		if (file_exists(Mage::getDesign()->getSkinBaseDir().'/images/ig_postepay/logo.png'))
			return $this->getSkinUrl('images/ig_postepay/logo.png');

		if (file_exists(Mage::getDesign()->getSkinBaseDir().'/images/ig_postepay/logo.gif'))
			return $this->getSkinUrl('images/ig_postepay/logo.gif');

		return false;
	}
}
?>