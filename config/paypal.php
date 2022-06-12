<?php 
return [ 
    'client_id' => 'AYJVwLc3SQmEpLuM1HCzx56BF9zrWrkQKZ84C_DXu4melLuuV3NP2lOys6DOHmkhmkgtetSwsaJOBREK',
	'secret' => 'EAqBr9xoMVlaGyHUwu94QS6-hl1fC9JcQ9aH7IFG9Lp4xbZmfhekM_xCBvZ64gjwlED1nGw9bQORfRtl',
    'settings' => array(
        'mode' => 'sandbox',
        'http.ConnectionTimeOut' => 1000,
        'log.LogEnabled' => true,
        'log.FileName' => storage_path() . '/logs/paypal.log',
        'log.LogLevel' => 'FINE'
    ),
];