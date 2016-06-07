<?php
namespace Classes\Operations;

use \Classes\Base\SoapClientBase;
use \Classes\Components\SessionHeader;
use \Classes\Components\ChargentCallOptions;
use \Classes\Components\DebuggingHeader;
use \Classes\Components\AllowFieldTruncationHeader;
use \Classes\Components\DebuggingInfo;
use \Classes\Components\ChargeAuthorizedTransaction_Click;
use \Classes\Components\ChargeAuthorizedTransaction_ClickJSON;
use \Classes\Components\ChargeOpportunity_Batch;
use \Classes\Components\ChargeOpportunity_Click ;
use \Classes\Components\ChargeOpportunity_ClickJSON;

include(dirname(dirname(__FILE__)).'/Components/ChargeOpportunity_BatchResponse.php');
include(dirname(dirname(__FILE__)).'/Components/ChargeOpportunity_ClickResponse.php');
include(dirname(dirname(__FILE__)).'/Components/ChargeOpportunity_ClickJSONResponse.php');
include(dirname(dirname(__FILE__)).'/Components/ChargeAuthorizedTransaction_ClickResponse.php');
include(dirname(dirname(__FILE__)).'/Components/ChargeAuthorizedTransaction_ClickJSONResponse.php');
include(dirname(dirname(__FILE__)).'/Components/TChargentResult.php');
require_once dirname(dirname(__FILE__)). '/Base/SoapClientBase.php';
/**
 * This class stands for Charge ServiceType
 * @package 
 * @subpackage Services
 */
class Charge extends SoapClientBase
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
     * Sets the ChargentCallOptions SoapHeader param
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
     * Method to call the operation originally named ChargeAuthorizedTransaction_Click
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : SessionHeader, CallOptions, DebuggingHeader, AllowFieldTruncationHeader, DebuggingInfo
     * - SOAPHeaderNamespaces : http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T,
     * http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T
     * - SOAPHeaderTypes : \Classes\Components\SessionHeader, \Classes\Components\CallOptions, \Classes\Components\DebuggingHeader,
     * \Classes\Components\AllowFieldTruncationHeader, \Classes\Components\DebuggingInfo
     * - SOAPHeaders : required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Classes\Components\ChargeAuthorizedTransaction_Click $parameters
     * @return \Classes\Components\ChargeAuthorizedTransaction_ClickResponse|bool
     */
    public function ChargeAuthorizedTransaction_Click(ChargeAuthorizedTransaction_Click $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ChargeAuthorizedTransaction_Click($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named
     * ChargeAuthorizedTransaction_ClickJSON
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : SessionHeader, CallOptions, DebuggingHeader, AllowFieldTruncationHeader, DebuggingInfo
     * - SOAPHeaderNamespaces : http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T,
     * http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T
     * - SOAPHeaderTypes : \Classes\Components\SessionHeader, \Classes\Components\CallOptions, \Classes\Components\DebuggingHeader,
     * \Classes\Components\AllowFieldTruncationHeader, \Classes\Components\DebuggingInfo
     * - SOAPHeaders : required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Classes\Components\ChargeAuthorizedTransaction_ClickJSON $parameters
     * @return \Classes\Components\ChargeAuthorizedTransaction_ClickJSONResponse|bool
     */
    public function ChargeAuthorizedTransaction_ClickJSON(ChargeAuthorizedTransaction_ClickJSON $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ChargeAuthorizedTransaction_ClickJSON($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ChargeOpportunity_Batch
     * Meta informations extracted from the WSDL
     * - SOAPHeaderNames : SessionHeader, CallOptions, DebuggingHeader, AllowFieldTruncationHeader, DebuggingInfo
     * - SOAPHeaderNamespaces : http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T,
     * http://soap.sforce.com/schemas/class/ChargentSFA/T, http://soap.sforce.com/schemas/class/ChargentSFA/T
     * - SOAPHeaderTypes : \Classes\Components\SessionHeader, \Classes\Components\CallOptions, \Classes\Components\DebuggingHeader,
     * \Classes\Components\AllowFieldTruncationHeader, \Classes\Components\DebuggingInfo
     * - SOAPHeaders : required, required, required, required, required
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::setResult()
     * @uses SoapClientBase::getResult()
     * @uses SoapClientBase::saveLastError()
     * @param \Classes\Components\ChargeOpportunity_Batch
     * $parameters
     * @return \Classes\Components\ChargeOpportunity_BatchResponse|bool
     */
    public function ChargeOpportunity_Batch(ChargeOpportunity_Batch $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ChargeOpportunity_Batch($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ChargeOpportunity_Click
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
     * @param \Classes\Components\ChargeOpportunity_Click
     * $parameters
     * @return \Classes\Components\ChargeOpportunity_ClickResponse |bool
     */
    public function ChargeOpportunity_Click(ChargeOpportunity_Click $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ChargeOpportunity_Click($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Method to call the operation originally named ChargeOpportunity_ClickJSON
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
     * @param \Classes\Components\ChargeOpportunity_ClickJSON $parameters
     * @return \Classes\Components\ChargeOpportunity_ClickJSONResponse|bool
     */
    public function ChargeOpportunity_ClickJSON(ChargeOpportunity_ClickJSON $parameters)
    {
        try {
            $this->setResult(self::getSoapClient()->ChargeOpportunity_ClickJSON($parameters));
            return $this->getResult();
        } catch (\SoapFault $soapFault) {
            $this->saveLastError(__METHOD__, $soapFault);
            return false;
        }
    }
    /**
     * Returns the result
     * @see SoapClientBase::getResult()
     * @return \Classes\Components\ChargeAuthorizedTransaction_ClickJSONResponse|\Classes\Components\ChargeAuthorizedTransaction_ClickResponse|\Classes\Components\ChargeOpportunity_BatchResponse|\Classes\Components\ChargeOpportunity_ClickJSONResponse|\Classes\Components\ChargeOpportunity_ClickResponse
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
