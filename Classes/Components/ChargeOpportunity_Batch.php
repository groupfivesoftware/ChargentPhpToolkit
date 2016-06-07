<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class ChargeOpportunity_Batch extends ComponentBase
{
    /**
     * The OpportunityID
     * Meta informations extracted from the WSDL
     * - nullable: true
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $OpportunityID;
    /**
     * Constructor method for ChargeOpportunity_Batch
     * @uses ChargeOpportunity_Batch::setOpportunityID()
     * @param string $opportunityID
     */
    public function __construct($opportunityID = null)
    {
        $this
            ->setOpportunityID($opportunityID);
    }
    /**
     * Get OpportunityID value
     * @return string|null
     */
    public function getOpportunityID()
    {
        return $this->OpportunityID;
    }
    /**
     * Set OpportunityID value
     * @param string $opportunityID
     * @return \Classes\Components\ChargeOpportunity_Batch
     */
    public function setOpportunityID($opportunityID = null)
    {
        $this->OpportunityID = $opportunityID;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\ChargeOpportunity_Batch
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
