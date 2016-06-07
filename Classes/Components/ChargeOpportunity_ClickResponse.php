<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;

require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
require_once dirname(dirname(__FILE__)). '/Components/TChargentResult.php';
class ChargeOpportunity_ClickResponse extends ComponentBase
{
    /**
     * The result
     * Meta informations extracted from the WSDL
     * - nullable: true
     * @var \Classes\Components\TChargentResult
     */
    public $result;
    /**
     * Constructor method for ChargeOpportunity_ClickResponse
     * @uses ChargeOpportunity_ClickResponse::setResult()
     * @param \Classes\Components\TChargentResult $result
     */
    public function __construct(TChargentResult $result = null)
    {
        $this
            ->setResult($result);
    }
    /**
     * Get result value
     * @return \Classes\Components\TChargentResult|null
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Set result value
     * @param \Classes\Components\TChargentResult $result
     * @return \Classes\Components\ChargeOpportunity_ClickResponse
     */
    public function setResult(TChargentResult $result = null)
    {
        $this->result = $result;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\ChargeOpportunity_ClickResponse
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
