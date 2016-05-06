<?php

/**
 * PHPファイルの読み込みおよびインスタンスの生成を行う
 *
 */
if( ! function_exists('load_class')) {
	function load_class($class, $path) {

		$file_path = $path . '/' . $class . '.php';
		
		if(! file_exists($file_path)) {
			show_error();
		}
		require_once $file_path;
		return new $class();
	}
}

/**
 * エラー画面を表示します
 *
 */
if(! function_exists('show_error')) {
	function show_error($message = 'ページを表示できませんでした。', $status_code = 500) {

		$view_path = VIEW_PATH . '/error.php';

		if(! file_exists($view_path)) {
			echo $message;
			exit($status_code);
		}

		include $view_path;
		exit($status_code);
	}
}