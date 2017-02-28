<?php
$name = $_POST['name'];
$impression = $_POST['impression'];
?>

<!DOCTYPE html>
<html lang="ja">
<head>
    <meta charset="utf-8">
    <title>サンキューページ</title>
</head>
<body>
    <h1>投稿ありがとうございました</h1>
    <p>以下の内容で投稿されました</p>
    <p>名前: <?php echo htmlspecialchars($name, ENT_QUOTES, "UTF-8"); ?>さん</p>
    <p>感想: <?php echo htmlspecialchars($impression, ENT_QUOTES, "UTF-8"); ?></p><br>
    <a href="index.php">back</a>
</body>
</html>