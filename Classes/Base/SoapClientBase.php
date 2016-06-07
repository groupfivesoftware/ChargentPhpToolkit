<?php

namespace Classes\Base;

use SoapHeader;
require_once __DIR__. '/SoapClientInterface.php';
require_once __DIR__. '/Utils.php';
abstract class SoapClientBase implements SoapClientInterface
{
    /**
     * SoapClient called to communicate with the actual SOAP Service
     * @var \SoapClient
     */
    private static $soapClient;
    /**
     * Contains Soap call result
     * @var mixed
     */
    private $result;
    /**
     * Contains last errors
     * @var array
     */
    private $lastError;

    /**
     * Constructor
     * @uses SoapClientBase::setLastError()
     * @uses SoapClientBase::initSoapClient()
     * @param array $wsdlOptions
     * @param bool $resetSoapClient allows to disable the SoapClient redefinition
     */
    public function __construct(array $wsdlOptions = array(), $resetSoapClient = true)
    {
        $this->setLastError(array());
        /**
         * Init soap Client
         * Set default values
         */
        if ($resetSoapClient) {
            $this->initSoapClient($wsdlOptions);
        }
    }
    /**
     * Static method getting current SoapClient
     * @return \SoapClient
     */
    public static function getSoapClient()
    {
        return self::$soapClient;
    }
    /**
     * Static method setting current SoapClient
     * @param \SoapClient $soapClient
     * @return \SoapClient
     */
    public static function setSoapClient(\SoapClient $soapClient)
    {
        return (self::$soapClient = $soapClient);
    }
    /**
     * Method initiating SoapClient
     * @uses ApiClassMap::classMap()
     * @uses SoapClientBase::getDefaultWsdlOptions()
     * @uses SoapClientBase::getSoapClientClassName()
     * @uses SoapClientBase::setSoapClient()
     * @param array $options WSDL options
     * @return void
     */
    public function initSoapClient(array $options)
    {
        $wsdlOptions = array();
        $defaultWsdlOptions = self::getDefaultWsdlOptions();
        foreach ($defaultWsdlOptions as $optionName=>$optionValue) {
            if (array_key_exists($optionName, $options) && !empty($options[$optionName])) {
                $wsdlOptions[str_replace(self::OPTION_PREFIX, '', $optionName)] = $options[$optionName];
            } elseif (!empty($optionValue)) {
                $wsdlOptions[str_replace(self::OPTION_PREFIX, '', $optionName)] = $optionValue;
            }
        }
        if (array_key_exists(str_replace(self::OPTION_PREFIX, '', self::WSDL_URL), $wsdlOptions)) {
            $wsdlUrl = $wsdlOptions[str_replace(self::OPTION_PREFIX, '', self::WSDL_URL)];
            unset($wsdlOptions[str_replace(self::OPTION_PREFIX, '', self::WSDL_URL)]);
            $soapClientClassName = $this->getSoapClientClassName();
            self::setSoapClient(new $soapClientClassName($wsdlUrl, $wsdlOptions));
        }
    }

    /**
     * Returns the SoapClient class name to use to create the instance of the SoapClient.
     * The SoapClient class is determined based on the package name.
     * If a class is named as {Api}SoapClient, then this is the class that will be used.
     * Be sure that this class inherits from the native PHP SoapClient class and this class has been loaded or can be loaded.
     * The goal is to allow the override of the SoapClient without having to modify this generated class.
     * Then the overriding SoapClient class can override for example the SoapClient::__doRequest() method if it is needed.
     * @param null $soapClientClassName
     * @return string
     */
    public function getSoapClientClassName($soapClientClassName = null)
    {
        $className = self::DEFAULT_SOAP_CLIENT_CLASS;
        if (!empty($soapClientClassName) && is_subclass_of($soapClientClassName, '\SoapClient')) {
            $className = $soapClientClassName;
        }
        return $className;
    }
    /**
     * Method returning all default options values
     * @uses SoapClientBase::WSDL_CLASSMAP
     * @uses SoapClientBase::WSDL_CACHE_WSDL
     * @uses SoapClientBase::WSDL_COMPRESSION
     * @uses SoapClientBase::WSDL_CONNECTION_TIMEOUT
     * @uses SoapClientBase::WSDL_ENCODING
     * @uses SoapClientBase::WSDL_EXCEPTIONS
     * @uses SoapClientBase::WSDL_FEATURES
     * @uses SoapClientBase::WSDL_LOGIN
     * @uses SoapClientBase::WSDL_PASSWORD
     * @uses SoapClientBase::WSDL_SOAP_VERSION
     * @uses SoapClientBase::WSDL_STREAM_CONTEXT
     * @uses SoapClientBase::WSDL_TRACE
     * @uses SoapClientBase::WSDL_TYPEMAP
     * @uses SoapClientBase::WSDL_URL
     * @uses SoapClientBase::VALUE_WSDL_URL
     * @uses SoapClientBase::WSDL_USER_AGENT
     * @uses SoapClientBase::WSDL_PROXY_HOST
     * @uses SoapClientBase::WSDL_PROXY_PORT
     * @uses SoapClientBase::WSDL_PROXY_LOGIN
     * @uses SoapClientBase::WSDL_PROXY_PASSWORD
     * @uses SoapClientBase::WSDL_LOCAL_CERT
     * @uses SoapClientBase::WSDL_PASSPHRASE
     * @uses SoapClientBase::WSDL_AUTHENTICATION
     * @uses SoapClientBase::WSDL_SSL_METHOD
     * @uses SOAP_SINGLE_ELEMENT_ARRAYS
     * @uses SOAP_USE_XSI_ARRAY_TYPE
     * @return array
     */
    public static function getDefaultWsdlOptions()
    {
        return array(
                    self::WSDL_CLASSMAP => null,
                    self::WSDL_CACHE_WSDL => WSDL_CACHE_NONE,
                    self::WSDL_COMPRESSION => null,
                    self::WSDL_CONNECTION_TIMEOUT => null,
                    self::WSDL_ENCODING => null,
                    self::WSDL_EXCEPTIONS => true,
                    self::WSDL_FEATURES => SOAP_SINGLE_ELEMENT_ARRAYS | SOAP_USE_XSI_ARRAY_TYPE,
                    self::WSDL_LOGIN => null,
                    self::WSDL_PASSWORD => null,
                    self::WSDL_SOAP_VERSION => null,
                    self::WSDL_STREAM_CONTEXT => null,
                    self::WSDL_TRACE => true,
                    self::WSDL_TYPEMAP => null,
                    self::WSDL_URL => null,
                    self::WSDL_USER_AGENT => null,
                    self::WSDL_PROXY_HOST => null,
                    self::WSDL_PROXY_PORT => null,
                    self::WSDL_PROXY_LOGIN => null,
                    self::WSDL_PROXY_PASSWORD => null,
                    self::WSDL_LOCAL_CERT => null,
                    self::WSDL_PASSPHRASE => null,
                    self::WSDL_AUTHENTICATION => null,
                    self::WSDL_SSL_METHOD => null);
    }
    /**
     * Allows to set the SoapClient location to call
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClient::__setLocation()
     * @param string $location
     * @return SoapClientBase
     */
    public function setLocation($location)
    {
        if (self::getSoapClient() instanceof \SoapClient) {
            self::getSoapClient()->__setLocation($location);
        }
        return $this;
    }
    /**
     * Returns the last request content as a DOMDocument or as a formatted XML String
     * @see SoapClient::__getLastRequest()
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::getFormattedXml()
     * @uses SoapClient::__getLastRequest()
     * @param bool $asDomDocument
     * @return \DOMDocument|string|null
     */
    public function getLastRequest($asDomDocument = false)
    {
        return $this->getLastXml('__getLastRequest', $asDomDocument);
    }
    /**
     * Returns the last response content as a DOMDocument or as a formatted XML String
     * @see SoapClient::__getLastResponse()
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::getFormattedXml()
     * @uses SoapClient::__getLastResponse()
     * @param bool $asDomDocument
     * @return \DOMDocument|string|null
     */
    public function getLastResponse($asDomDocument = false)
    {
        return $this->getLastXml('__getLastResponse', $asDomDocument);
    }
    /**
     * @param string $method
     * @param bool $asDomDocument
     * @return \DOMDocument|string|null
     */
    protected function getLastXml($method, $asDomDocument = false)
    {
        $xml = null;
        if (self::getSoapClient() instanceof \SoapClient) {
            $xml = self::getFormattedXml(self::getSoapClient()->$method(), $asDomDocument);
        }
        return $xml;
    }
    /**
     * Returns the last request headers used by the SoapClient object as the original value or an array
     * @see SoapClient::__getLastRequestHeaders()
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::convertStringHeadersToArray()
     * @uses SoapClient::__getLastRequestHeaders()
     * @param bool $asArray allows to get the headers in an associative array
     * @return null|string|array
     */
    public function getLastRequestHeaders($asArray = false)
    {
        return $this->getLastHeaders('__getLastRequestHeaders', $asArray);
    }
    /**
     * Returns the last response headers used by the SoapClient object as the original value or an array
     * @see SoapClient::__getLastResponseHeaders()
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClientBase::convertStringHeadersToArray()
     * @uses SoapClient::__getLastRequestHeaders()
     * @param bool $asArray allows to get the headers in an associative array
     * @return null|string|array
     */
    public function getLastResponseHeaders($asArray = false)
    {
        return $this->getLastHeaders('__getLastResponseHeaders', $asArray);
    }
    /**
     * @param string $method
     * @param bool $asArray allows to get the headers in an associative array
     * @return string[]|null
     */
    protected function getLastHeaders($method, $asArray)
    {
        $headers = self::getSoapClient() instanceof \SoapClient ? self::getSoapClient()->$method() : null;
        if (is_string($headers) && $asArray) {
            return self::convertStringHeadersToArray($headers);
        }
        return $headers;
    }
    /**
     * Returns a XML string content as a DOMDocument or as a formatted XML string
     * @uses \DOMDocument::loadXML()
     * @uses \DOMDocument::saveXML()
     * @param string $string
     * @param bool $asDomDocument
     * @return \DOMDocument|string|null
     */
    public static function getFormattedXml($string, $asDomDocument = false)
    {
        return Utils::getFormattedXml($string, $asDomDocument);
    }
    /**
     * Returns an associative array between the headers name and their respective values
     * @param string $headers
     * @return string[]
     */
    public static function convertStringHeadersToArray($headers)
    {
        $lines = explode("\r\n", $headers);
        $headers = array();
        foreach ($lines as $line) {
            if (strpos($line, ':')) {
                $headerParts = explode(':', $line);
                $headers[$headerParts[0]] = trim(implode(':', array_slice($headerParts, 1)));
            }
        }
        return $headers;
    }
    /**
     * Sets a SoapHeader to send
     * For more information, please read the online documentation on {@link http://www.php.net/manual/en/class.soapheader.php}
     * @uses SoapClientBase::getSoapClient()
     * @uses SoapClient::__setSoapHeaders()
     * @param string $nameSpace SoapHeader namespace
     * @param string $name SoapHeader name
     * @param mixed $data SoapHeader data
     * @param bool $mustUnderstand
     * @param string $actor
     * @return SoapClientBase
     */
    public function setSoapHeader($nameSpace, $name, $data, $mustUnderstand = false, $actor = null)
    {
        if (self::getSoapClient()) {
            $defaultHeaders = (isset(self::getSoapClient()->__default_headers) && is_array(self::getSoapClient()->__default_headers)) ? self::getSoapClient()->__default_headers : array();
            foreach ($defaultHeaders as $index=>$soapHeader) {
                if ($soapHeader->name === $name) {
                    unset($defaultHeaders[$index]);
                    break;
                }
            }
            self::getSoapClient()->__setSoapheaders(null);
            if (!empty($actor)) {
                array_push($defaultHeaders, new \SoapHeader($nameSpace, $name, $data, $mustUnderstand, $actor));
            } else {
                array_push($defaultHeaders, new \SoapHeader($nameSpace, $name, $data, $mustUnderstand));
            }
            self::getSoapClient()->__setSoapheaders($defaultHeaders);
        }
        return $this;
    }
    /**
     * Sets the SoapClient Stream context HTTP Header name according to its value
     * If a context already exists, it tries to modify it
     * It the context does not exist, it then creates it with the header name and its value
     * @uses SoapClientBase::getSoapClient()
     * @param string $headerName
     * @param mixed $headerValue
     * @return bool
     */
    public function setHttpHeader($headerName, $headerValue)
    {
        if (self::getSoapClient() && !empty($headerName)) {
            $streamContext = (isset(self::getSoapClient()->_stream_context) && is_resource(self::getSoapClient()->_stream_context)) ? self::getSoapClient()->_stream_context : null;
            if (!is_resource($streamContext)) {
                $options = array();
                $options['http'] = array();
                $options['http']['header'] = '';
            } else {
                $options = stream_context_get_options($streamContext);
                if (is_array($options)) {
                    if (!array_key_exists('http', $options) || !is_array($options['http'])) {
                        $options['http'] = array();
                        $options['http']['header'] = '';
                    } elseif (!array_key_exists('header', $options['http'])) {
                        $options['http']['header'] = '';
                    }
                } else {
                    $options = array();
                    $options['http'] = array();
                    $options['http']['header'] = '';
                }
            }
            if (count($options) && array_key_exists('http', $options) && is_array($options['http']) && array_key_exists('header', $options['http']) && is_string($options['http']['header'])) {
                $lines = explode("\r\n", $options['http']['header']);
                /**
                 * Ensure there is only one header entry for this header name
                 */
                $newLines = array();
                foreach ($lines as $line) {
                    if (!empty($line) && strpos($line, $headerName) === false) {
                        array_push($newLines, $line);
                    }
                }
                /**
                 * Add new header entry
                 */
                array_push($newLines, "$headerName: $headerValue");
                /**
                 * Set the context http header option
                 */
                $options['http']['header'] = implode("\r\n", $newLines);
                /**
                 * Create context if it does not exist
                 */
                if (!is_resource($streamContext)) {
                    return (self::getSoapClient()->_stream_context = stream_context_create($options)) ? true : false;
                } else {
                    /**
                     * Set the new context http header option
                     */
                    return stream_context_set_option(self::getSoapClient()->_stream_context, 'http', 'header', $options['http']['header']);
                }
            }
            return false;
        }
        return false;
    }
    /**
     * Method returning last errors occurred during the calls
     * @return array
     */
    public function getLastError()
    {
        return $this->lastError;
    }
    /**
     * Method setting last errors occurred during the calls
     * @param array $lastError
     * @return SoapClientBase
     */
    private function setLastError($lastError)
    {
        $this->lastError = $lastError;
        return $this;
    }
    /**
     * Method saving the last error returned by the SoapClient
     * @param string $methodName the method called when the error occurred
     * @param \SoapFault $soapFault error object
     * @return SoapClientBase
     */
    public function saveLastError($methodName, \SoapFault $soapFault)
    {
        $this->lastError[$methodName] = $soapFault;
        return $this;
    }
    /**
     * Method getting the last error for a certain method
     * @param string $methodName method name to get error from
     * @return \SoapFault|null
     */
    public function getLastErrorForMethod($methodName)
    {
        return array_key_exists($methodName, $this->lastError) ? $this->lastError[$methodName] : null;
    }
    /**
     * Method returning current result from Soap call
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }
    /**
     * Method setting current result from Soap call
     * @param mixed $result
     * @return SoapClientBase
     */
    public function setResult($result)
    {
        $this->result = $result;
        return $this;
    }
}
