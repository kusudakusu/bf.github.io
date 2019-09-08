<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = $_POST['to'];
  $title = $_POST['簡単見積もり'];
  $message = $_POST['簡単見積もりに関する問い合わせです。'];
  $headers = "From: kusuda090305@gmail.com";

  if(mb_send_mail($to, $title, $message, headers))
  {
    echo "メール送信成功です";
  }
  else
  {
    echo "メール送信失敗です";
  }
 ?>
</body>
</html>