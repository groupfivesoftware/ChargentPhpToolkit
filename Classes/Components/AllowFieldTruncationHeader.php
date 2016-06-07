<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;
require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
class AllowFieldTruncationHeader extends ComponentBase
{
    /**
     * The allowFieldTruncation
     * @var boolean
     */
    public $allowFieldTruncation;
    /**
     * Constructor method for AllowFieldTruncationHeader
     * @uses ComponentsAllowFieldTruncationHeader::setAllowFieldTruncation()
     * @param boolean $allowFieldTruncation
     */
    public function __construct($allowFieldTruncation = null)
    {
        $this
            ->setAllowFieldTruncation($allowFieldTruncation);
    }
    /**
     * Get allowFieldTruncation value
     * @return boolean|null
     */
    public function getAllowFieldTruncation()
    {
        return $this->allowFieldTruncation;
    }
    /**
     * Set allowFieldTruncation value
     * @param boolean $allowFieldTruncation
     * @return \Classes\Components\AllowFieldTruncationHeader
     */
    public function setAllowFieldTruncation($allowFieldTruncation = null)
    {
        $this->allowFieldTruncation = $allowFieldTruncation;
        return $this;
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\AllowFieldTruncationHeader
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
