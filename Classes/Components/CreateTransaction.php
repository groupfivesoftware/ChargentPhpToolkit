<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class CreateTransaction extends ComponentBase
{
    /**
     * The opportunityId
     * Meta informations extracted from the WSDL
     * - nullable: true
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $opportunityId;
    /**
     * The responseMessage
     * Meta informations extracted from the WSDL
     * - nullable: true
     * @var string
     */
    public $responseMessage;
    /**
     * The responseStatus
     * Meta informations extracted from the WSDL
     * - nullable: true
     * @var string
     */
    public $responseStatus;
    /**
     * The transactionType
     * Meta informations extracted from the WSDL
     * - nullable: true
     * @var string
     */
    public $transactionType;
    /**
     * Constructor method for createTransaction
     * @uses CreateTransaction::setOpportunityId()
     * @uses CreateTransaction::setResponseMessage()
     * @uses CreateTransaction::setResponseStatus()
     * @uses CreateTransaction::setTransactionType()
     * @param string $opportunityId
     * @param string $responseMessage
     * @param string $responseStatus
     * @param string $transactionType
     */
    public function __construct($opportunityId = null, $responseMessage = null, $responseStatus = null, $transactionType = null)
    {
        $this
            ->setOpportunityId($opportunityId)
            ->setResponseMessage($responseMessage)
            ->setResponseStatus($responseStatus)
            ->setTransactionType($transactionType);
    }
    /**
     * Get opportunityId value
     * @return string|null
     */
    public function getOpportunityId()
    {
        return $this->opportunityId;
    }
    /**
     * Set opportunityId value
     * @param string $opportunityId
     * @return \Classes\Components\CreateTransaction
     */
    public function setOpportunityId($opportunityId = null)
    {
        $this->opportunityId = $opportunityId;
        return $this;
    }
    /**
     * Get responseMessage value
     * @return string|null
     */
    public function getResponseMessage()
    {
        return $this->responseMessage;
    }
    /**
     * Set responseMessage value
     * @param string $responseMessage
     * @return \Classes\Components\CreateTransaction
     */
    public function setResponseMessage($responseMessage = null)
    {
        $this->responseMessage = $responseMessage;
        return $this;
    }
    /**
     * Get responseStatus value
     * @return string|null
     */
    public function getResponseStatus()
    {
        return $this->responseStatus;
    }
    /**
     * Set responseStatus value
     * @param string $responseStatus
     * @return \Classes\Components\CreateTransaction
     */
    public function setResponseStatus($responseStatus = null)
    {
        $this->responseStatus = $responseStatus;
        return $this;
    }
    /**
     * Get transactionType value
     * @return string|null
     */
    public function getTransactionType()
    {
        return $this->transactionType;
    }
    /**
     * Set transactionType value
     * @param string $transactionType
     * @return \Classes\Components\CreateTransaction
     */
    public function setTransactionType($transactionType = null)
    {
        $this->transactionType = $transactionType;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\CreateTransaction
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
