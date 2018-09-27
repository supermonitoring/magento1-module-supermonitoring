<?php
/**
 *
 * @category    Super Monitoring
 * @package     Siteimpulse_Monitoring
 * @author      SITEIMPULSE
 * @copyright   SITEIMPULSE (https://www.siteimpulse.com/)
 * @license     http://opensource.org/licenses/osl-3.0.php  Open Software License (OSL 3.0)
 */

class Siteimpulse_Monitoring_Block_Adminhtml_System_Config_Info
    extends Mage_Adminhtml_Block_Abstract
    implements Varien_Data_Form_Element_Renderer_Interface
{
    protected $_template = 'monitoring/system/config/fieldset/hint.phtml';

    /**
     * Render Information element
     *
     * @param Varien_Data_Form_Element_Abstract $data
     * @return string
     */
    public function render(Varien_Data_Form_Element_Abstract $data)
    {
        return $this->toHtml();
    }
}