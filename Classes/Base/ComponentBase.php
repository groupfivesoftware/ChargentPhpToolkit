<?php

namespace Classes\Base;
require_once __DIR__. '/ComponentInterface.php';
abstract class ComponentBase implements ComponentInterface
{
    /**
     * Generic method called when an object has been exported with var_export() functions
     * It allows to return an object instantiated with the values
     * @uses ApiWsdlClass::_set()
     * @param array $array the exported values
     * @return ComponentBase
     */
    public static function __set_state(array $array)
    {
        $className = get_called_class();
        $object = @new $className();
        foreach ($array as $name=>$value) {
            $object->_set($name, $value);
        }
        return $object;
    }
    /**
     * Generic method setting value
     * @throws \InvalidArgumentException
     * @param string $name property name to set
     * @param mixed $value property value to use
     * @return ComponentBase
     */
    public function _set($name, $value)
    {
        $setMethod = 'set' . ucfirst($name);
        if (method_exists($this, $setMethod)) {
            $this->$setMethod($value);
        } else {
            throw new \InvalidArgumentException(sprintf('Setter does not exist for "%s" property', $name));
        }
        return $this;
    }
    /**
     * Generic method getting value
     * @throws \InvalidArgumentException
     * @param string $name property name to get
     * @return mixed
     */
    public function _get($name)
    {
        $getMethod = 'get' . ucfirst($name);
        if (method_exists($this, $getMethod)) {
            return $this->$getMethod();
        }
        throw new \InvalidArgumentException(sprintf('Getter does not exist for "%s" property', $name));
    }
}
