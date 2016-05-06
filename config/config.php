<?php

// APIキー
$config['access_key'] = 'ACCESS_KEY';
$config['api_secret'] = 'API_SECRET';

// 送金アドレス・金額
$config['address'] = '1Pu73sEiRwYN9jby9EftLii5b9Mgi21XnT';
$config['amount']  = '0.0002';

// ルーティング設定
$config['routing'] = array(
		'default' => 'top_controller',
		'top'     => 'top_controller',
		'donate'  => 'donate_controller'
	);