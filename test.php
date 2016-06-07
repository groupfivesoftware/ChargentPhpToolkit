<?php
error_reporting(-1);
ini_set('display_errors', 'On');
$localDir = dirname(__FILE__). '/';
require_once $localDir . 'chargentFunctions.php';
$enterpriseConnection = SalesForceEnterpriseConnection();
function getSalesForceTestOpportunityId ($enterpriseConnection) {
    $SalesForceTestOpportunityId='';
    $query = "SELECT Id from Opportunity where Name='Sales Force Test' LIMIT 1";
    $testResponse = $enterpriseConnection->query($query);
    if(!empty($testResponse->records)) {
        foreach ($testResponse->records as $record) {
            $SalesForceTestOpportunityId = $record->Id;
        }
    }
    return $SalesForceTestOpportunityId;
}
if ($enterpriseConnection != false) {
    $SalesForceTestOpportunityId = getSalesForceTestOpportunityId($enterpriseConnection);
    print "<pre>";
    print_r(ChargeOpportunityClick($SalesForceTestOpportunityId));
    print "</pre>";
}
