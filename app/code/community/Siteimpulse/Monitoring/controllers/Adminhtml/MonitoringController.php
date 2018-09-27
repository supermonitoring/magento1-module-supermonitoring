<?php

/**
 *
 * @category    Super Monitoring
 * @package     Siteimpulse_Monitoring
 * @author      SITEIMPULSE
 * @copyright   SITEIMPULSE (https://www.siteimpulse.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Siteimpulse_Monitoring_Adminhtml_MonitoringController extends Mage_Adminhtml_Controller_action
{
    protected function _initAction()
    {
        $this->loadLayout()->_setActiveMenu('monitoring/items')->_addBreadcrumb(
            Mage::helper('adminhtml')->__('Super Monitoring'), Mage::helper('adminhtml')->__('Super Monitoring')
        );
        return $this;
    }
    public function indexAction()
    {
        $this->_initAction()->renderLayout();
    }
    public function accountAction()
    {
        $this->_initAction()->renderLayout();
    }
    public function contactAction()
    {
        $this->_initAction()->renderLayout();
    }
}
