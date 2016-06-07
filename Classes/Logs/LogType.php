<?php
namespace Classes\Logs;
class LogType
{
    /**
     * Constant for value 'None'
     * @return string 'None'
     */
    const VALUE_NONE = 'None';
    /**
     * Constant for value 'Debugonly'
     * @return string 'Debugonly'
     */
    const VALUE_DEBUGONLY = 'Debugonly';
    /**
     * Constant for value 'Db'
     * @return string 'Db'
     */
    const VALUE_DB = 'Db';
    /**
     * Constant for value 'Profiling'
     * @return string 'Profiling'
     */
    const VALUE_PROFILING = 'Profiling';
    /**
     * Constant for value 'Callout'
     * @return string 'Callout'
     */
    const VALUE_CALLOUT = 'Callout';
    /**
     * Constant for value 'Detail'
     * @return string 'Detail'
     */
    const VALUE_DETAIL = 'Detail';
    /**
     * Return true if value is allowed
     * @uses self::VALUE_NONE
     * @uses self::VALUE_DEBUGONLY
     * @uses self::VALUE_DB
     * @uses self::VALUE_PROFILING
     * @uses self::VALUE_CALLOUT
     * @uses self::VALUE_DETAIL
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, array(self::VALUE_NONE, self::VALUE_DEBUGONLY, self::VALUE_DB, self::VALUE_PROFILING, self::VALUE_CALLOUT, self::VALUE_DETAIL), true);
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
