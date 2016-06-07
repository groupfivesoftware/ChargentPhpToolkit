<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;
use \Classes\Logs\LogCategory;
use \Classes\Logs\LogCategoryLevel;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
require_once dirname(dirname(__FILE__)). '/Logs/LogCategory.php';
require_once dirname(dirname(__FILE__)). '/Logs/LogCategoryLevel.php';

class LogInfo extends ComponentBase
{
    /**
     * The category
     * @var string
     */
    public $category;
    /**
     * The level
     * @var string
     */
    public $level;
    /**
     * Constructor method for LogInfo
     * @uses LogInfo::setCategory()
     * @uses LogInfo::setLevel()
     * @param string $category
     * @param string $level
     */
    public function __construct($category = null, $level = null)
    {
        $this
            ->setCategory($category)
            ->setLevel($level);
    }
    /**
     * Get category value
     * @return string|null
     */
    public function getCategory()
    {
        return $this->category;
    }
    /**
     * Set category value
     * @uses \Classes\Logs\LogCategory::valueIsValid()
     * @param string $category
     * @return \Classes\Components\LogInfo
     */
    public function setCategory($category = null)
    {
        if (!LogCategory::valueIsValid($category)) {
            return false;
        }
        $this->category = $category;
        return $this;
    }
    /**
     * Get level value
     * @return string|null
     */
    public function getLevel()
    {
        return $this->level;
    }
    /**
     * Set level value
     * @uses
     * \Classes\Logs\LogCategoryLevel::valueIsValid()
     * @param string $level
     * @return \Classes\Components\LogInfo
     */
    public function setLevel($level = null)
    {
        if (!LogCategoryLevel::valueIsValid($level)) {
            return false;
        }
        $this->level = $level;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\LogInfo
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
