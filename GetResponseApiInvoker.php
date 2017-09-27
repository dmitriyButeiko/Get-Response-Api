<?php 

	require_once "includes/GetResponseApi.php";

	$getresponse = new GetResponse('f6a0a9b661851863ca425ccb33473127');

	$campaignId = "your_campaign_id";

	$result = $getresponse->addContact(array(
        'name'              => 'Dmitriy Buteikoswgrwrgecond',
    	'email'             => 'dmitriy.buteiko@yahoo.com',
    	'dayOfCycle'        => 0,
    	'campaign'          => array('campaignId' => $campaignId),
    	'ipAddress'         => '89.206.31.190',
    ));
?>