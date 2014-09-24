<?php
/**
 * Created by PhpStorm.
 * User: Fireflake
 * Date: 23.09.14
 * Time: 19:07
 */ 
class Tech4Africa_ServerName_Block_Page_Html_Welcome extends Mage_Page_Block_Html_Welcome {
    /**
     * Get block messsage
     *
     * @return string
     */
    protected function _toHtml()
    {
        if (empty($this->_data['welcome'])) {
            if (Mage::isInstalled() && Mage::getSingleton('customer/session')->isLoggedIn()) {
                $this->_data['welcome'] = $this->__('Welcome, %s!', $this->escapeHtml(Mage::getSingleton('customer/session')->getCustomer()->getName()));
            } else {
                $this->_data['welcome'] = "This page was generated on: " . gethostname();
            }
        }

        return $this->_data['welcome'];
    }

}