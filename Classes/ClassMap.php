<?php

namespace Classes;

class ClassMap
{
    /**
     * Returns the mapping between the WSDL Components and generated Components' classes
     * This array is sent to the \SoapClient when calling the WS
     * @return string[]
     */
    final public static function classMap()
    {
        return array(
            'AllowFieldTruncationHeader' => '\Classes\Components\AllowFieldTruncationHeader',
            'ChargentCallOptions' => '\Classes\Components\ChargentCallOptions',
            'DebuggingHeader' => '\Classes\Components\DebuggingHeader',
            'LogInfo' => '\Classes\Components\LogInfo',
            'DebuggingInfo' => '\Classes\Components\DebuggingInfo',
            'SessionHeader' => '\Classes\Components\SessionHeader',
            'TChargentResult' => '\Classes\Components\TChargentResult',
            'AuthorizeOpportunity_Click' => '\Classes\Components\AuthorizeOpportunity_Click',
            'AuthorizeOpportunity_ClickResponse' => '\Classes\Components\AuthorizeOpportunity_ClickResponse',
            'AuthorizeOpportunity_ClickJSON' => '\Classes\Components\AuthorizeOpportunity_ClickJSON',
            'AuthorizeOpportunity_ClickJSONResponse' => '\Classes\Components\AuthorizeOpportunity_ClickJSONResponse',
            'ChargeAuthorizedTransaction_Click' => '\Classes\Components\ChargeAuthorizedTransaction_Click',
            'ChargeAuthorizedTransaction_ClickResponse' => '\Classes\Components\ChargeAuthorizedTransaction_ClickResponse',
            'ChargeAuthorizedTransaction_ClickJSON' => '\Classes\Components\ChargeAuthorizedTransaction_ClickJSON',
            'ChargeAuthorizedTransaction_ClickJSONResponse' => '\Classes\Components\ChargeAuthorizedTransaction_ClickJSONResponse',
            'ChargeOpportunity_Batch' => '\Classes\Components\ChargeOpportunity_Batch',
            'ChargeOpportunity_BatchResponse' => '\Classes\Components\ChargeOpportunity_BatchResponse',
            'ChargeOpportunity_Click' => '\Classes\Components\ChargeOpportunity_Click',
            'ChargeOpportunity_ClickResponse' => '\Classes\Components\ChargeOpportunity_ClickResponse',
            'ChargeOpportunity_ClickJSON' => '\Classes\Components\ChargeOpportunity_ClickJSON',
            'ChargeOpportunity_ClickJSONResponse' => '\Classes\Components\ChargeOpportunity_ClickJSONResponse',
            'createTransaction' => '\Classes\Components\CreateTransaction',
            'createTransactionResponse' => '\Classes\Components\CreateTransactionResponse',
            'RefundOpportunity_Click' => '\Classes\Components\RefundOpportunity_Click',
            'RefundOpportunity_ClickResponse' => '\Classes\Components\RefundOpportunity_ClickResponse',
            'RefundTransaction_Click' => '\Classes\Components\RefundTransaction_Click',
            'RefundTransaction_ClickResponse' => '\Classes\Components\RefundTransaction_ClickResponse',
            'RefundTransaction_ClickJSON' => '\Classes\Components\RefundTransaction_ClickJSON',
            'RefundTransaction_ClickJSONResponse' => '\Classes\Components\RefundTransaction_ClickJSONResponse',
            'VoidOpportunity_Click' => '\Classes\Components\VoidOpportunity_Click',
            'VoidOpportunity_ClickResponse' => '\Classes\Components\VoidOpportunity_ClickResponse',
            'VoidTransaction_Click' => '\Classes\Components\VoidTransaction_Click',
            'VoidTransaction_ClickResponse' => '\Classes\Components\VoidTransaction_ClickResponse',
        );
    }
}
