<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>熊本地震被災者支援(BitCoin勉強用)</title>
    <link href="css/bootstrap.min.css" rel="stylesheet">
    <link href="css/jumbotron-narrow.css" rel="stylesheet">
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script type="text/javascript">
      $(document).ready(function() {
        $('#donate').click(function() {
          $.ajax({
              url: "/index.php/donate",
          }).done(function(data){
              if(data.success) {
                $('.result_message').text('募金に成功しました。');
              } else {
                $('.result_message').text('募金に失敗しました。');
              }
          }).fail(function(data){
              $('.result_message').text('募金に失敗しました。');
          });
        });
      });
    </script>
  </head>
  <body>
    <div class="container">
      <div class="header clearfix">
        <h3 class="text-muted">熊本地震被災者支援(BitCoin勉強用)</h3>
      </div>

      <div class="jumbotron">
        <h3>熊本地震被災者支援ページを作成してみました。</h3>
        <p>
          本ホームページをご覧いただきありがとうございます。<br/>
          BitCoinの勉強も兼ねて本ページを作成してみました。<br/>
          下記の「募金する」ボタンをクリックすると私のBitCoinの残高よりCoincheck基金へ募金が行われます。<br/>
          ※残高への反映には10分程度時間が必要です。
        </p>
        <h4>残高: <?php echo $this->parameters['balance']; ?>BTC</h4>
        <h4 class="result_message"></h4>
        <p><button type="button" id="donate" class="btn btn-success">募金する</button></p>
      </div>
    </div>
  </body>
</html>