<?php
/**
 *
 * @category    Super Monitoring
 * @package     Siteimpulse_Monitoring
 * @author      SITEIMPULSE
 * @copyright   SITEIMPULSE (https://www.siteimpulse.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Siteimpulse_Monitoring_Model_System_Config_Token extends Mage_Core_Model_Config_Data
{
    protected function _beforeSave()
    {   
        $value = $this->getValue();
        $isValid = Mage::helper('monitoring')->getApiResponse($value);
        if ($isValid == '0') {
            Mage::getSingleton('core/session')
                ->addError(
                    Mage::helper('core')->__(
                        "Invalid token. You can obtain your token in your Account Settings at 
                        <a href='https://www.supermonitoring.com' target='_blank'>www.supermonitoring.com</a>."
                    )
                );
            $referUrl =  Mage::helper('core/http')->getHttpReferer();
            $url = $referUrl ? Mage::helper('core/http')->getHttpReferer()  : Mage::getUrl();
            Mage::app()->getFrontController()->getResponse()->setRedirect($url);
            Mage::app()->getResponse()->sendResponse();
        } else {
            Mage::getSingleton("core/session")->addSuccess(Mage::helper('core')->__("Changes have been saved."));
            return true ;
        }
    }
}
