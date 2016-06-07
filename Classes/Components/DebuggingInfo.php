<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class DebuggingInfo extends ComponentBase
{
    /**
     * The debugLog
     * @var string
     */
    public $debugLog;
    /**
     * Constructor method for DebuggingInfo
     * @uses DebuggingInfo::setDebugLog()
     * @param string $debugLog
     */
    public function __construct($debugLog = null)
    {
        $this
            ->setDebugLog($debugLog);
    }
    /**
     * Get debugLog value
     * @return string|null
     */
    public function getDebugLog()
    {
        return $this->debugLog;
    }
    /**
     * Set debugLog value
     * @param string $debugLog
     * @return \Classes\Components\DebuggingInfo
     */
    public function setDebugLog($debugLog = null)
    {
        $this->debugLog = $debugLog;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\DebuggingInfo
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
