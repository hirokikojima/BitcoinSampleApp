<?php

/**
 * 設定情報クラス
 *
 */
class Config
{

	/**
	 * コンストラクタ
	 */
	public function __construct() {
		$this->config = $this->getConfig();
	}

	/**
	 * 設定情報取得
	 */
	public function item($key) {
		return $this->config[$key];
	}

	/**
	 * 設定ファイル読み込み
	 */
	private function getConfig() {

		static $config;

		if(empty($config)) {
			// 設定ファイル読み込み
			$config_path = CONFIG_PATH . '/config.php';
			if(! file_exists($config_path)) {
				show_error();
			}

			require_once $config_path;
		}

		return $config;
	}
}