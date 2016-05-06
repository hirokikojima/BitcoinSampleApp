<?php

require_once dirname(__FILE__) . '/abstract_controller.php';
require_once dirname(__FILE__) . '/../vendor/autoload.php';

use Coincheck\Coincheck;

/**
 * トップページ表示
 *
 * 募金ページを表示します。
 */
class Top_controller extends Abstract_controller
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

		// BitCoinの残高を取得する
		$access_key = $this->config->item('access_key');
		$api_secret = $this->config->item('api_secret');
		$coincheck= new Coincheck($access_key, $api_secret);
		$balance_result = $coincheck->account->balance();

		// 画面を描画する
		if($balance_result['success']) {
			$balance = $balance_result['btc'];
		} else {
			$balance = 0;
		}

		$this->add_parameters(array(
				'balance' => $balance));
		$this->view('top');
	}
}