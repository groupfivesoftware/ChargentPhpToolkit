<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class ChargeOpportunity_ClickJSON extends ComponentBase
{
    /**
     * The InputParams
     * Meta informations extracted from the WSDL
     * - nullable: true
     * @var string
     */
    public $InputParams;
    /**
     * Constructor method for ChargeOpportunity_ClickJSON
     * @uses ChargeOpportunity_ClickJSON::setInputParams()
     * @param string $inputParams
     */
    public function __construct($inputParams = null)
    {
        $this
            ->setInputParams($inputParams);
    }
    /**
     * Get InputParams value
     * @return string|null
     */
    public function getInputParams()
    {
        return $this->InputParams;
    }
    /**
     * Set InputParams value
     * @param string $inputParams
     * @return \Classes\Components\ChargeOpportunity_ClickJSON
     */
    public function setInputParams($inputParams = null)
    {
        $this->InputParams = $inputParams;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\ChargeOpportunity_ClickJSON
     */
    public static function __set_state(array $array)
    {
        return parent::__set_state($array);
    }
    /**
     * Method returning the class name
     * @return string __CLASS__
     */
    public function __toString()
    {
        return __CLASS__;
    }
}
