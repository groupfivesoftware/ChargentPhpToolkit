<?php

namespace Classes\Components;

use \Classes\Base\ComponentBase;

require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class AuthorizeOpportunity_Click extends ComponentBase
{
    /**
     * The OpportunityId
     * Meta informations extracted from the WSDL
     * - nullable: true
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $OpportunityId;
    /**
     * Constructor method for AuthorizeOpportunity_Click
     * @uses AuthorizeOpportunity_Click::setOpportunityId()
     * @param string $opportunityId
     */
    public function __construct($opportunityId = null)
    {
        $this
            ->setOpportunityId($opportunityId);
    }
    /**
     * Get OpportunityId value
     * @return string|null
     */
    public function getOpportunityId()
    {
        return $this->OpportunityId;
    }
    /**
     * Set OpportunityId value
     * @param string $opportunityId
     * @return \Classes\Components\AuthorizeOpportunity_Click
     */
    public function setOpportunityId($opportunityId = null)
    {
        $this->OpportunityId = $opportunityId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\AuthorizeOpportunity_Click
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
