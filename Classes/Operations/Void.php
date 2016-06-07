<?php
namespace Classes\Operations;

use \Classes\Base\SoapClientBase;
use \Classes\Components\SessionHeader;
use \Classes\Components\ChargentCallOptions;
use \Classes\Components\DebuggingHeader;
use \Classes\Components\AllowFieldTruncationHeader;
use \Classes\Components\DebuggingInfo;
use \Classes\Components\VoidOpportunity_Click;
use \Classes\Components\VoidTransaction_Click;

include(dirname(dirname(__FILE__)).'/Components/VoidOpportunity_ClickResponse.php');
include(dirname(dirname(__FILE__)).'/Components/VoidTransaction_ClickResponse.php');
include(dirname(dirname(__FILE__)).'/Components/TChargentResult.php');
require_once dirname(dirname(__FILE__)). '/Base/SoapClientBase.php';
class Void extends SoapClientBase
{
    /**
     * Sets the SessionHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Classes\Components\SessionHeader
     * $sessionHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderSessionHeader(SessionHeader $sessionHeader, $nameSpace = 'http://soap.sforce.com/schemas/class/ChargentSFA/T', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'SessionHeader', $sessionHeader, $mustUnderstand, $actor);
    }
    /**
     * Sets the CallOptions SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Classes\Components\ChargentCallOptions $callOptions
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderCallOptions(ChargentCallOptions $callOptions, $nameSpace = 'http://soap.sforce.com/schemas/class/ChargentSFA/T', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'CallOptions', $callOptions, $mustUnderstand, $actor);
    }
    /**
     * Sets the DebuggingHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Classes\Components\DebuggingHeader
     * $debuggingHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderDebuggingHeader(DebuggingHeader $debuggingHeader, $nameSpace = 'http://soap.sforce.com/schemas/class/ChargentSFA/T', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'DebuggingHeader', $debuggingHeader, $mustUnderstand, $actor);
    }
    /**
     * Sets the AllowFieldTruncationHeader SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Classes\Components\AllowFieldTruncationHeader $allowFieldTruncationHeader
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderAllowFieldTruncationHeader(AllowFieldTruncationHeader $allowFieldTruncationHeader, $nameSpace = 'http://soap.sforce.com/schemas/class/ChargentSFA/T', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'AllowFieldTruncationHeader', $allowFieldTruncationHeader, $mustUnderstand, $actor);
    }
    /**
     * Sets the DebuggingInfo SoapHeader param
     * @uses SoapClientBase::setSoapHeader()
     * @param \Classes\Components\DebuggingInfo
     * $debuggingInfo
     * @param string $nameSpace
     * @param bool $mustUnderstand
     * @param string $actor
     * @return bool
     */
    public function setSoapHeaderDebuggingInfo(DebuggingInfo $debuggingInfo, $nameSpace = 'http://soap.sforce.com/schemas/class/ChargentSFA/T', $mustUnderstand = false, $actor = null)
    {
        return $this->setSoapHeader($nameSpace, 'DebuggingInfo', $debuggingInfo, $mustUnderstand, $actor);
    }
    /**
     * Method to call the operation originally named VoidOpportunity_Click
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : SessionHeader, CallOptions, DebuggingHeader, AllowFieldTruncationHeader, DebuggingInfo
     * - SOAPHeaderNamespaces : http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T,
     * http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T
     * - SOAPHeaderTypes : \Classes\Components\SessionHeader, \Classes\Components\ChargentCallOptions, \Classes\Components\DebuggingHeader,
     * \Classes\Components\AllowFieldTruncationHeader, \Classes\Components\DebuggingInfo
     * - SOAPHeaders : required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Classes\Components\VoidOpportunity_Click $parameters
     * @return \Classes\Components\VoidOpportunity_ClickResponse|bool
     */
    public function VoidOpportunity_Click(VoidOpportunity_Click $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->VoidOpportunity_Click($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named VoidTransaction_Click
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : SessionHeader, CallOptions, DebuggingHeader, AllowFieldTruncationHeader, DebuggingInfo
     * - SOAPHeaderNamespaces : http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T,
     * http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T
     * - SOAPHeaderTypes : \Classes\Components\SessionHeader, \Classes\Components\ChargentCallOptions, \Classes\Components\DebuggingHeader,
     * \Classes\Components\AllowFieldTruncationHeader, \Classes\Components\DebuggingInfo
     * - SOAPHeaders : required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Classes\Components\VoidTransaction_Click
     * $parameters
     * @return \Classes\Components\VoidTransaction_ClickResponse|bool
     */
    public function VoidTransaction_Click(VoidTransaction_Click $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->VoidTransaction_Click($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Classes\Components\VoidOpportunity_ClickResponse|\Classes\Components\VoidTransaction_ClickResponse
     */
    public function getResult()
    {
        return parent::getResult();
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
