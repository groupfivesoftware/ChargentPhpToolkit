<?php
namespace Classes\Components;

use Classes\Base\ComponentBase;

require_once dirname(dirname(__FILE__)). '/Base/ComponentBase.php';
require_once dirname(dirname(__FILE__)). '/Components/TChargentResult.php';
class CreateTransactionResponse extends ComponentBase
{
    /**
     * Constructor method for createTransactionResponse
     */
    public function __construct()
    {
    }
    /**
     * Method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @see ComponentBase::__set_state()
     * @uses ComponentBase::__set_state()
     * @param array $array the exported values
     * @return \Classes\Components\CreateTransactionResponse
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
