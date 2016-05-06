<?php

require_once dirname(__FILE__) . '/abstract_controller.php';
require_once dirname(__FILE__) . '/../vendor/autoload.php';

use Coincheck\Coincheck;

/**
 * 募金処理
 *
 * BitCoinを募金先へ送金します。
 */
class Donate_controller extends Abstract_controller
{
	/**
	 * コンストラクタ
	 */
	public function __construct() {
		parent::__construct();
	}

	/**
	 * メイン処理
	 */
	public function execute() {

		// 送金処理
		$access_key = $config->item('access_key');
		$api_secret = $config->item('api_secret');
		$coincheck= new Coincheck($access_key, $api_secret);

		$address = $config->item('address');
		$amount  = $config->item('amount');
		$coincheck->send->create(array(
		    "address" => $address,
		    "amount"  => $amount
		));
	}
}