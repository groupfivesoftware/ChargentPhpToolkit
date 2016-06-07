<?php
namespace Classes\Components;

use \Classes\Base\ComponentBase;
use \Classes\Components\LogInfo;
use \Classes\Logs\LogType;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
include(dirname(dirname(__FILE__)).'/Logs/LogType.php');
class DebuggingHeader extends ComponentBase
{
    /**
     * The categories
     * Meta informations extracted from the WSDL
     * - maxOccurs: unbounded
     * - minOccurs: 0
     * @var \Classes\Components\LogInfo
     */
    public $categories;
    /**
     * The debugLevel
     * @var string
     */
    public $debugLevel;
    /**
     * Constructor method for DebuggingHeader
     * @uses DebuggingHeader::setCategories()
     * @uses DebuggingHeader::setDebugLevel()
     * @param \Classes\Components\LogInfo $categories
     * @param string $debugLevel
     */
    public function __construct(LogInfo $categories = null, $debugLevel = null)
    {
        $this
            ->setCategories($categories)
            ->setDebugLevel($debugLevel);
    }
    /**
     * Get categories value
     * @return \Classes\Components\LogInfo|null
     */
    public function getCategories()
    {
        return $this->categories;
    }
    /**
     * Set categories value
     * @param \Classes\Components\LogInfo $categories
     * @return \Classes\Components\DebuggingHeader
     */
    public function setCategories(LogInfo $categories = null)
    {
        $this->categories = $categories;
        return $this;
    }
    /**
     * Get debugLevel value
     * @return string|null
     */
    public function getDebugLevel()
    {
        return $this->debugLevel;
    }
    /**
     * Set debugLevel value
     * @uses \Classes\Logs\LogType::valueIsValid()
     * @param string $debugLevel
     * @return \Classes\Components\DebuggingHeader
     */
    public function setDebugLevel($debugLevel = null)
    {
        if (!LogType::valueIsValid($debugLevel)) {
            return false;
        }
        $this->debugLevel = $debugLevel;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\DebuggingHeader
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
