<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class RefundTransaction_Click extends ComponentBase
{
    /**
     * The TransactionId
     * Meta informations extracted from the WSDL
     * - nullable: true
     * - length: 18
     * - pattern: [a-zA-Z0-9]{18}
     * @var string
     */
    public $TransactionId;
    /**
     * Constructor method for RefundTransaction_Click
     * @uses RefundTransaction_Click::setTransactionId()
     * @param string $transactionId
     */
    public function __construct($transactionId = null)
    {
        $this
            ->setTransactionId($transactionId);
    }
    /**
     * Get TransactionId value
     * @return string|null
     */
    public function getTransactionId()
    {
        return $this->TransactionId;
    }
    /**
     * Set TransactionId value
     * @param string $transactionId
     * @return \Classes\Components\RefundTransaction_Click
     */
    public function setTransactionId($transactionId = null)
    {
        $this->TransactionId = $transactionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\RefundTransaction_Click
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
