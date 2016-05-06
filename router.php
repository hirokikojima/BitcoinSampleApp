<?php

/**
 * ルーティング処理
 *
 */
class Router
{
	// コンフィグ情報
	private $config = null;

	/**
	 * コンストラクタ
	 */
	public function __construct() {
		$this->config = new Config();
	}

	/**
	 * ルーティング処理
	 *
	 * リクエストURIにマッチするコントローラ名を返却する
	 * 見つからない場合は、defaultへ設定しているコントローラ名を返却する
	 */
	public function routing() {

		$uri = substr(urldecode(parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH)), 11);
		$routes = $this->config->item('routing');

		foreach($routes as $key => $value) {
			if($uri === $key) {
				return $value;
			}
		}
		return $routes['default'];
	}
}