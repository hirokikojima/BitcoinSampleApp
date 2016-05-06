<?php

/**
 * 基底コントローラクラス
 *
 * 各コントローラで行う共通処理を定義する。
 */
class Abstract_controller
{
	// コンフィグ情報
	protected $config = null;

	// 描画パラメータ
	protected $parameters = array();

	/**
	 * コンストラクタ
	 */
	public function __construct() {
		$this->config = new Config();
	}

	/**
	 * コントローラ処理
	 */
	protected function execute() {
		
	}

	/**
	 * 描画パラメータを追加する
	 */
	public function add_parameters($parameters = array()) {
		if(is_array($parameters)) {
			foreach ($parameters as $key => $value) {
				$this->parameters[$key] = $value;
			}
		}
	}

	/**
	 * 画面を描画する
	 */
	public function view($view_name) {

		$view_path = VIEW_PATH . '/' . $view_name . '.php';

		if(! file_exists($view_path)) {
			show_error();
		}

       	include $view_path;
	}
}