# 熊本募金サイト(BitCoin勉強用)

### 概要
「募金する」ボタンをクリックすると熊本地震災害募金を行います。  
募金は設定ファイルに指定したウォレットから寄付されます。  

> Coincheck災害募金ページ  
> https://coincheck.jp/donations/12?locale=ja

### 利用環境
* Apache 2.4
* PHP 5.6.20

AWS EC2へ環境を用意してありますので、以下のURLへアクセスするとページが確認できます。
http://52.33.229.246/

※APIキーをダミーに置き換えているため、ローカル環境での動作確認にはAPIキーの取得が必要です。

### ディレクトリ説明
```sh
./
│  composer.json
│  config.php			設定ファイルクラス
│  function.php		グローバル関数定義
│  router.php			ルーティングクラス
│  README.md			
│  
├─config
│      config.php		設定ファイル
│      
├─controller
│      abstract_controller.php	コントローラ基底クラス
│      donate_controller.php	募金処理用コントローラ
│      top_controller.php	トップページ表示用コントローラ
│      
├─public
│  │  .htaccess
│  │  index.php		クラス読み込み・コントローラ実行
│  │  
│  ├─css			Bootstrapを使用しました。
│  ├─fonts
│  └─js
│          
├─vendor			CoincheckAPIを使用しました。
│                      
└─view
        error.php		エラーページ
        top.php			トップページ
```