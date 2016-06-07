<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class ChargentCallOptions extends ComponentBase
{
    /**
     * The client
     * @var string
     */
    public $client;
    /**
     * Constructor method for ChargentCallOptions
     * @uses ChargentCallOptions::setClient()
     * @param string $client
     */
    public function __construct($client = null)
    {
        $this
            ->setClient($client);
    }
    /**
     * Get client value
     * @return string|null
     */
    public function getClient()
    {
        return $this->client;
    }
    /**
     * Set client value
     * @param string $client
     * @return \Classes\Components\ChargentCallOptions
     */
    public function setClient($client = null)
    {
        $this->client = $client;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\ChargentCallOptions
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
