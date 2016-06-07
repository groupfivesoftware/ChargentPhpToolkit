<?php
namespace Classes\Logs;
class LogCategory
{
    /**
     * Constant for value 'Db'
     * @return string 'Db'
     */
    const VALUE_DB = 'Db';
    /**
     * Constant for value 'Workflow'
     * @return string 'Workflow'
     */
    const VALUE_WORKFLOW = 'Workflow';
    /**
     * Constant for value 'Validation'
     * @return string 'Validation'
     */
    const VALUE_VALIDATION = 'Validation';
    /**
     * Constant for value 'Callout'
     * @return string 'Callout'
     */
    const VALUE_CALLOUT = 'Callout';
    /**
     * Constant for value 'Apex_code'
     * @return string 'Apex_code'
     */
    const VALUE_APEX_CODE = 'Apex_code';
    /**
     * Constant for value 'Apex_profiling'
     * @return string 'Apex_profiling'
     */
    const VALUE_APEX_PROFILING = 'Apex_profiling';
    /**
     * Constant for value 'Visualforce'
     * @return string 'Visualforce'
     */
    const VALUE_VISUALFORCE = 'Visualforce';
    /**
     * Constant for value 'System'
     * @return string 'System'
     */
    const VALUE_SYSTEM = 'System';
    /**
     * Constant for value 'All'
     * @return string 'All'
     */
    const VALUE_ALL = 'All';
    /**
     * Return true if value is allowed
     * @uses self::VALUE_DB
     * @uses self::VALUE_WORKFLOW
     * @uses self::VALUE_VALIDATION
     * @uses self::VALUE_CALLOUT
     * @uses self::VALUE_APEX_CODE
     * @uses self::VALUE_APEX_PROFILING
     * @uses self::VALUE_VISUALFORCE
     * @uses self::VALUE_SYSTEM
     * @uses self::VALUE_ALL
     * @param mixed $value value
     * @return bool true|false
     */
    public static function valueIsValid($value)
    {
        return in_array($value, array(self::VALUE_DB, self::VALUE_WORKFLOW, self::VALUE_VALIDATION, self::VALUE_CALLOUT, self::VALUE_APEX_CODE, self::VALUE_APEX_PROFILING, self::VALUE_VISUALFORCE, self::VALUE_SYSTEM, self::VALUE_ALL), true);
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
