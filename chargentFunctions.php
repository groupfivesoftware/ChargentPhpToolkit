<?php
use Classes\ClassMap;
require_once dirname(__FILE__). '/config.php';
function SalesForceEnterpriseConnection(){
    try {
        require_once (ENTERPRISE_CLIENT_PATH);
        $enterpriseConnection = new SforceEnterpriseClient();
        $enterpriseConnection->createConnection(ENTERPRISE_WSDL_PATH);
        if (isset($_SESSION['enterpriseSessionId'])) {
            $location = $_SESSION['enterpriseLocation'];
            $sessionId = $_SESSION['enterpriseSessionId'];
            $enterpriseConnection->setEndpoint($location);
            $enterpriseConnection->setSessionHeader($sessionId);
        } else {
            $enterpriseConnection->login(USER_NAME, PASS_WORD.SECURITY_TOKEN);
            $_SESSION['enterpriseLocation'] = $enterpriseConnection->getLocation();
            $_SESSION['enterpriseSessionId'] = $enterpriseConnection->getSessionId();
        }
        return $enterpriseConnection;
    } catch (Exception $e) {
        echo "Exception ".$e->faultstring."<br/><br/>\n";
        return false;
    }
}

function ChargentAuthorize() {
    $localDir = dirname(__FILE__). '/';
    require_once $localDir . 'Classes/ClassMap.php';
    require_once $localDir . 'Classes/Operations/Authorize.php';
    require_once $localDir . 'Classes/Components/SessionHeader.php';
    require_once $localDir . 'Classes/Components/ChargentCallOptions.php';
    require_once $localDir . 'Classes/Components/AuthorizeOpportunity_Click.php';
    require_once $localDir . 'Classes/Components/AuthorizeOpportunity_ClickJSON.php';
//    /** debug */
//    require_once $localDir . 'Classes/Components/DebuggingHeader.php';
//    require_once $localDir . 'Classes/Components/AllowFieldTruncationHeader.php';
//    require_once $localDir . 'Classes/Components/DebuggingInfo.php';
    $chargentMapClass = new ClassMap();
    $options = array(
        \Classes\Base\SoapClientBase::WSDL_URL => CHARGENT_WSDL_PATH,
        \Classes\Base\SoapClientBase::WSDL_CLASSMAP => $chargentMapClass->classMap()
    );
    $authorize = new \Classes\Operations\Authorize($options);
    $authorize->setSoapHeaderSessionHeader(new \Classes\Components\SessionHeader($_SESSION['enterpriseSessionId']));
    $authorize->setSoapHeaderCallOptions(new \Classes\Components\ChargentCallOptions());
//    /** debug */
//    $authorize->setSoapHeaderDebuggingHeader(new \Classes\Components\DebuggingHeader());
//    $authorize->setSoapHeaderAllowFieldTruncationHeader(new \Classes\Components\AllowFieldTruncationHeader());
//    $authorize->setSoapHeaderDebuggingInfo(new \Classes\Components\DebuggingInfo());
    return $authorize;
}
function ChargentCharge() {
    $localDir = dirname(__FILE__). '/';
    require_once $localDir . 'Classes/ClassMap.php';
    require_once $localDir . 'Classes/Operations/Charge.php';
    require_once $localDir . 'Classes/Components/SessionHeader.php';
    require_once $localDir . 'Classes/Components/ChargentCallOptions.php';
    require_once $localDir . 'Classes/Components/ChargeAuthorizedTransaction_Click.php';
    require_once $localDir . 'Classes/Components/ChargeAuthorizedTransaction_ClickJSON.php';
    require_once $localDir . 'Classes/Components/ChargeOpportunity_Batch.php';
    require_once $localDir . 'Classes/Components/ChargeOpportunity_Click.php';
    require_once $localDir . 'Classes/Components/ChargeOpportunity_ClickJSON.php';
//    /** debug */
//    require_once $localDir . 'Classes/Components/DebuggingHeader.php';
//    require_once $localDir . 'Classes/Components/AllowFieldTruncationHeader.php';
//    require_once $localDir . 'Classes/Components/DebuggingInfo.php';
    $chargentMapClass = new ClassMap();
    $options = array(
        \Classes\Base\SoapClientBase::WSDL_URL => CHARGENT_WSDL_PATH,
        \Classes\Base\SoapClientBase::WSDL_CLASSMAP => $chargentMapClass->classMap()
    );
    $charge = new \Classes\Operations\Charge($options);
    $charge->setSoapHeaderSessionHeader(new \Classes\Components\SessionHeader($_SESSION['enterpriseSessionId']));
    $charge->setSoapHeaderCallOptions(new \Classes\Components\ChargentCallOptions());
//    /** debug */
//    $charge->setSoapHeaderDebuggingHeader(new \Classes\Components\DebuggingHeader());
//    $charge->setSoapHeaderAllowFieldTruncationHeader(new \Classes\Components\AllowFieldTruncationHeader());
//    $charge->setSoapHeaderDebuggingInfo(new \Classes\Components\DebuggingInfo());
    return $charge;
}
function ChargentCreate() {
    $localDir = dirname(__FILE__). '/';
    require_once $localDir . 'Classes/ClassMap.php';
    require_once $localDir . 'Classes/Operations/Create.php';
    require_once $localDir . 'Classes/Components/SessionHeader.php';
    require_once $localDir . 'Classes/Components/ChargentCallOptions.php';
    require_once $localDir . 'Classes/Components/CreateTransaction.php';
//    /** debug */
//    require_once $localDir . 'Classes/Components/DebuggingHeader.php';
//    require_once $localDir . 'Classes/Components/AllowFieldTruncationHeader.php';
//    require_once $localDir . 'Classes/Components/DebuggingInfo.php';
    $chargentMapClass = new ClassMap();
    $options = array(
        \Classes\Base\SoapClientBase::WSDL_URL => CHARGENT_WSDL_PATH,
        \Classes\Base\SoapClientBase::WSDL_CLASSMAP => $chargentMapClass->classMap()
    );
    $create = new \Classes\Operations\Create($options);
    $create->setSoapHeaderSessionHeader(new \Classes\Components\SessionHeader($_SESSION['enterpriseSessionId']));
    $create->setSoapHeaderCallOptions(new \Classes\Components\ChargentCallOptions());
//    /** debug */
//    $create->setSoapHeaderDebuggingHeader(new \Classes\Components\DebuggingHeader());
//    $create->setSoapHeaderAllowFieldTruncationHeader(new \Classes\Components\AllowFieldTruncationHeader());
//    $create->setSoapHeaderDebuggingInfo(new \Classes\Components\DebuggingInfo());
    return $create;
}
function ChargentRefund() {
    $localDir = dirname(__FILE__). '/';
    require_once $localDir . 'Classes/ClassMap.php';
    require_once $localDir . 'Classes/Operations/Refund.php';
    require_once $localDir . 'Classes/Components/SessionHeader.php';
    require_once $localDir . 'Classes/Components/ChargentCallOptions.php';
    require_once $localDir . 'Classes/Components/RefundOpportunity_Click.php';
    require_once $localDir . 'Classes/Components/RefundTransaction_Click.php';
    require_once $localDir . 'Classes/Components/RefundTransaction_ClickJSON.php';
//    /** debug */
//    require_once $localDir . 'Classes/Components/DebuggingHeader.php';
//    require_once $localDir . 'Classes/Components/AllowFieldTruncationHeader.php';
//    require_once $localDir . 'Classes/Components/DebuggingInfo.php';
    $chargentMapClass = new ClassMap();
    $options = array(
        \Classes\Base\SoapClientBase::WSDL_URL => CHARGENT_WSDL_PATH,
        \Classes\Base\SoapClientBase::WSDL_CLASSMAP => $chargentMapClass->classMap()
    );
    $refund = new \Classes\Operations\Refund($options);
    $refund->setSoapHeaderSessionHeader(new \Classes\Components\SessionHeader($_SESSION['enterpriseSessionId']));
    $refund->setSoapHeaderCallOptions(new \Classes\Components\ChargentCallOptions());
//    /** debug */
//    $refund->setSoapHeaderDebuggingHeader(new \Classes\Components\DebuggingHeader());
//    $refund->setSoapHeaderAllowFieldTruncationHeader(new \Classes\Components\AllowFieldTruncationHeader());
//    $refund->setSoapHeaderDebuggingInfo(new \Classes\Components\DebuggingInfo());
    return $refund;
}
function ChargentVoid() {
    $localDir = dirname(__FILE__). '/';
    require_once $localDir . 'Classes/ClassMap.php';
    require_once $localDir . 'Classes/Operations/Charge.php';
    require_once $localDir . 'Classes/Components/SessionHeader.php';
    require_once $localDir . 'Classes/Components/ChargentCallOptions.php';
    require_once $localDir . 'Classes/Components/VoidOpportunity_Click.php';
    require_once $localDir . 'Classes/Components/VoidTransaction_Click.php';
//    /** debug */
//    require_once $localDir . 'Classes/Components/DebuggingHeader.php';
//    require_once $localDir . 'Classes/Components/AllowFieldTruncationHeader.php';
//    require_once $localDir . 'Classes/Components/DebuggingInfo.php';
    $chargentMapClass = new ClassMap();
    $options = array(
        \Classes\Base\SoapClientBase::WSDL_URL => CHARGENT_WSDL_PATH,
        \Classes\Base\SoapClientBase::WSDL_CLASSMAP => $chargentMapClass->classMap()
    );
    $void = new \Classes\Operations\Void($options);
    $void->setSoapHeaderSessionHeader(new \Classes\Components\SessionHeader($_SESSION['enterpriseSessionId']));
    $void->setSoapHeaderCallOptions(new \Classes\Components\ChargentCallOptions());
//    /** debug */
//    $void->setSoapHeaderDebuggingHeader(new \Classes\Components\DebuggingHeader());
//    $void->setSoapHeaderAllowFieldTruncationHeader(new \Classes\Components\AllowFieldTruncationHeader());
//    $void->setSoapHeaderDebuggingInfo(new \Classes\Components\DebuggingInfo());
    return $void;
}
function ChargentAuthorizeOpportunityClick($opportunityId){
    $authorize=ChargentAuthorize();
    if ($authorize->AuthorizeOpportunity_Click(new \Classes\Components\AuthorizeOpportunity_Click($opportunityId)) !== false) {
        return $authorize->getResult();
    } else {
        return $authorize->getLastError();
    }
}
function ChargentAuthorizeOpportunityClickJSON($opportunityId){
    $authorize=ChargentAuthorize();
    if ($authorize->AuthorizeOpportunity_ClickJSON(new \Classes\Components\AuthorizeOpportunity_ClickJSON($opportunityId)) !== false) {
        return $authorize->getResult();
    } else {
        return $authorize->getLastError();
    }
}
function ChargentChargeAuthorizedTransactionClick($transactionId){
    $charge=ChargentCharge();
    if ($charge->ChargeAuthorizedTransaction_Click(new \Classes\Components\ChargeAuthorizedTransaction_Click($transactionId)) !== false) {
        return $charge->getResult();
    } else {
        return $charge->getLastError();
    }
}
function ChargentChargeAuthorizedTransactionClickJSON($transactionId){
    $charge=ChargentCharge();
    if ($charge->ChargeAuthorizedTransaction_ClickJSON(new \Classes\Components\ChargeAuthorizedTransaction_ClickJSON($transactionId)) !== false) {
        return $charge->getResult();
    } else {
        return $charge->getLastError();
    }
}
function ChargentChargeOpportunityBatch($opportunityId){
    $charge=ChargentCharge();
    if ($charge->ChargeOpportunity_Batch(new \Classes\Components\ChargeOpportunity_Batch($opportunityId)) !== false) {
        return $charge->getResult();
    } else {
        return $charge->getLastError();
    }
}
function ChargentChargeOpportunityClick($opportunityId){
    $charge=ChargentCharge();
    if ($charge->ChargeOpportunity_Click(new \Classes\Components\ChargeOpportunity_Click($opportunityId)) !== false) {
        return $charge->getResult();
    } else {
        return $charge->getLastError();
    }
}
function ChargentChargeOpportunityClickJSON($opportunityId){
    $charge=ChargentCharge();
    if ($charge->ChargeOpportunity_ClickJSON(new \Classes\Components\ChargeOpportunity_ClickJSON($opportunityId)) !== false) {
        return $charge->getResult();
    } else {
        return $charge->getLastError();
    }
}
function ChargentCreateTransaction(){
    $create=ChargentCreate();
    if ($create->createTransaction(new \Classes\Components\CreateTransaction()) !== false) {
        return $create->getResult();
    } else {
        return $create->getLastError();
    }
}
function ChargentRefundOpportunityClick($opportunityId){
    $refund=ChargentRefund();
    if ($refund->RefundOpportunity_Click(new \Classes\Components\RefundOpportunity_Click($opportunityId)) !== false) {
        return $refund->getResult();
    } else {
        return $refund->getLastError();
    }
}
function ChargentRefundTransactionClick($transactionId){
    $refund=ChargentRefund();
    if ($refund->RefundTransaction_Click(new \Classes\Components\RefundTransaction_Click($transactionId)) !== false) {
        return $refund->getResult();
    } else {
        return $refund->getLastError();
    }
}
function ChargentRefundTransactionClickJSON($transactionId){
    $refund=ChargentRefund();
    if ($refund->RefundTransaction_ClickJSON(new \Classes\Components\RefundTransaction_ClickJSON($transactionId)) !== false) {
        print_r($refund->getResult());
    } else {
        print_r($refund->getLastError());
    }
}
function ChargentVoidOpportunityClick($opportunityId){
    $void=ChargentVoid();
    if ($void->VoidOpportunity_Click(new \Classes\Components\VoidOpportunity_Click($opportunityId)) !== false) {
        print_r($void->getResult());
    } else {
        print_r($void->getLastError());
    }
}
function ChargentVoidTransactionClick($transactionId){
    $void=ChargentVoid();
    if ($void->VoidTransaction_Click(new \Classes\Components\VoidTransaction_Click($transactionId)) !== false) {
        print_r($void->getResult());
    } else {
        print_r($void->getLastError());
    }
}