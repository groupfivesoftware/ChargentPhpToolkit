<?php

namespace Classes\Base;

interface ComponentInterface
{
    /**
     * Generic method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @uses ApiWsdlClass::_set()
     * @param array $array the exported values
     * @return ComponentInterface
     */
    static function __set_state(array $array);
}
