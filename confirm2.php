<html>
<head>
  <meta charset="utf-8" />
</head>
<body>
<?php
  mb_language("Japanese");
  mb_internal_encoding("UTF-8");

  $to = $_POST['to'];
  $title = $_POST['問い合わせ'];
  $message = $_POST['HP経由の問い合わせです。'];
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