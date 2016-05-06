<?php

require_once dirname(__FILE__) . '/../function.php';

define('BASE_PATH', dirname(__FILE__) . '/..');
define('VIEW_PATH', dirname(__FILE__) . '/../view');
define('CONFIG_PATH', dirname(__FILE__) . '/../config');
define('CONTROLLER_PATH', dirname(__FILE__) . '/../controller');

// コンフィグ・ルーティングクラス読み込み
$config = load_class('config', BASE_PATH);
$router = load_class('router', BASE_PATH);

// コントローラ名の取得
$controller_name = $router->routing();

// コントローラのメイン処理実施
try {
	$controller = load_class($controller_name, CONTROLLER_PATH);
	$controller->execute();
} catch (Exception $e) {
    show_error();
}