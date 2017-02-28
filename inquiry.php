<?php
// 変数の指定
$name = $_POST['name'];
$impression = $_POST['impression'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>内容確認</title>
</head>
<body>
    <h1>内容確認</h1>
    <p>以下の内容でよろしいですか？</p>
        <!-- htmlspecialchars($***, ENT_QUOTES, "UTF-8")
        例えばフォーム内に<h1>~<h1>と打たれた場合、文字列ではなく、HTMLと判断されてしまう。
        ここで悪意のあるHTMLコードが入力された場合、悪影響が及ぶ。
        そのため、HTMLコードが入力されても単なる文字列として扱うように指定する必要がある。
        echoとセットで使うぐらいの気持ちでOK。-->
    <p>名前: <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>さん</p>
    <p>感想: <?php echo htmlspecialchars($impression, ENT_QUOTES, "UTF-8"); ?></p>
    <form action="thankyou.php" method="post">
         <!-- hiddenを指定すると、ウェブ上には表示されないが、thankyou.phoへ入力された情報が送られる。
        ソースを表示して確認してみると、valueの部分に入力した情報が入っているのがわかる。 -->
        <input type="hidden" name="name" value="<?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>">
        <input type="hidden" name="impression" value="<?php echo htmlspecialchars($impression, ENT_QUOTES, "UTF-8"); ?>">
        <input type="submit" value="この内容で送信">
    </form><br>
    <a href="index.php">back</a>
</body>
</html>