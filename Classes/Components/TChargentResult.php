<?php
namespace Classes\Components;

use \Classes\Base\ComponentBase;

require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class TChargentResult extends ComponentBase
{
    /**
     * The DebugString
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nullable: true
     * @var string
     */
    public $DebugString;
    /**
     * The Message
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nullable: true
     * @var string
     */
    public $Message;
    /**
     * The order_JSON
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nullable: true
     * @var string
     */
    public $order_JSON;
    /**
     * The Reload
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nullable: true
     * @var boolean
     */
    public $Reload;
    /**
     * The Status
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nullable: true
     * @var string
     */
    public $Status;
    /**
     * The TransactID
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nullable: true
     * @var string
     */
    public $TransactID;
    /**
     * The transaction_JSON
     * Meta informations extracted from the WSDL
     * - minOccurs: 0
     * - nullable: true
     * @var string
     */
    public $transaction_JSON;
    /**
     * Constructor method for TChargentResult
     * @uses TChargentResult::setDebugString()
     * @uses TChargentResult::setMessage()
     * @uses TChargentResult::setOrder_JSON()
     * @uses TChargentResult::setReload()
     * @uses TChargentResult::setStatus()
     * @uses TChargentResult::setTransactID()
     * @uses TChargentResult::setTransaction_JSON()
     * @param string $debugString
     * @param string $message
     * @param string $order_JSON
     * @param boolean $reload
     * @param string $status
     * @param string $transactID
     * @param string $transaction_JSON
     */
    public function __construct($debugString = null, $message = null, $order_JSON = null, $reload = null, $status = null, $transactID = null, $transaction_JSON = null)
    {
        $this
            ->setDebugString($debugString)
            ->setMessage($message)
            ->setOrder_JSON($order_JSON)
            ->setReload($reload)
            ->setStatus($status)
            ->setTransactID($transactID)
            ->setTransaction_JSON($transaction_JSON);
    }
    /**
     * Get DebugString value
     * @return string|null
     */
    public function getDebugString()
    {
        return $this->DebugString;
    }
    /**
     * Set DebugString value
     * @param string $debugString
     * @return \Classes\Components\TChargentResult
     */
    public function setDebugString($debugString = null)
    {
        $this->DebugString = $debugString;
        return $this;
    }
    /**
     * Get Message value
     * @return string|null
     */
    public function getMessage()
    {
        return $this->Message;
    }
    /**
     * Set Message value
     * @param string $message
     * @return \Classes\Components\TChargentResult
     */
    public function setMessage($message = null)
    {
        $this->Message = $message;
        return $this;
    }
    /**
     * Get order_JSON value
     * @return string|null
     */
    public function getOrder_JSON()
    {
        return $this->order_JSON;
    }
    /**
     * Set order_JSON value
     * @param string $order_JSON
     * @return \Classes\Components\TChargentResult
     */
    public function setOrder_JSON($order_JSON = null)
    {
        $this->order_JSON = $order_JSON;
        return $this;
    }
    /**
     * Get Reload value
     * @return boolean|null
     */
    public function getReload()
    {
        return $this->Reload;
    }
    /**
     * Set Reload value
     * @param boolean $reload
     * @return \Classes\Components\TChargentResult
     */
    public function setReload($reload = null)
    {
        $this->Reload = $reload;
        return $this;
    }
    /**
     * Get Status value
     * @return string|null
     */
    public function getStatus()
    {
        return $this->Status;
    }
    /**
     * Set Status value
     * @param string $status
     * @return \Classes\Components\TChargentResult
     */
    public function setStatus($status = null)
    {
        $this->Status = $status;
        return $this;
    }
    /**
     * Get TransactID value
     * @return string|null
     */
    public function getTransactID()
    {
        return $this->TransactID;
    }
    /**
     * Set TransactID value
     * @param string $transactID
     * @return \Classes\Components\TChargentResult
     */
    public function setTransactID($transactID = null)
    {
        $this->TransactID = $transactID;
        return $this;
    }
    /**
     * Get transaction_JSON value
     * @return string|null
     */
    public function getTransaction_JSON()
    {
        return $this->transaction_JSON;
    }
    /**
     * Set transaction_JSON value
     * @param string $transaction_JSON
     * @return \Classes\Components\TChargentResult
     */
    public function setTransaction_JSON($transaction_JSON = null)
    {
        $this->transaction_JSON = $transaction_JSON;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\TChargentResult
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
