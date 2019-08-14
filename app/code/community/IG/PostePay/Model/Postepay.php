<?php
class IG_PostePay_Model_Postepay extends Mage_Payment_Model_Method_Abstract
{
	protected $_code						= 'ig_postepay';
	protected $_paymentMethod				= 'ig_postepay';
	protected $_store_config				= 'payment/ig_postepay';
	protected $_formBlockType				= 'ig_postepay/form';

	protected $_isGateway					= false;
	protected $_canAuthorize				= true;
	protected $_canCapture					= false;
	protected $_canCapturePartial			= false;
	protected $_canRefund					= false;
	protected $_canVoid						= true;
	protected $_canUseInternal				= false;
	protected $_canUseCheckout				= true;
	protected $_canUseForMultishipping		= false;
	
	public function getConfig($key)
	{
		return Mage::getStoreConfig($this->_store_config.'/'.$key);
	}
}
?>
