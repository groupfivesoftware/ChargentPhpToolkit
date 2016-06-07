<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class SessionHeader extends ComponentBase
{
    /**
     * The sessionId
     * @var string
     */
    public $sessionId;
    /**
     * Constructor method for SessionHeader
     * @uses SessionHeader::setSessionId()
     * @param string $sessionId
     */
    public function __construct($sessionId = null)
    {
        $this
            ->setSessionId($sessionId);
    }
    /**
     * Get sessionId value
     * @return string|null
     */
    public function getSessionId()
    {
        return $this->sessionId;
    }
    /**
     * Set sessionId value
     * @param string $sessionId
     * @return \Classes\Components\SessionHeader
     */
    public function setSessionId($sessionId = null)
    {
        $this->sessionId = $sessionId;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\SessionHeader
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
