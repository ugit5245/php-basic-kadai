<!DOCTYPE html>
<html lang="ja">

<head>
<meta charset="UTF-8">
<title>PHP基礎編</title>
</head>

<body>
<p>

<?php

$onion_infos = ['名前' => '玉ねぎ', '値段' => '200', '産地' => '北海道'];

foreach ($onion_infos as $oi_key => $oi_value) {
    echo "{$oi_key}：{$oi_value}<br>";
}

?>

</p>
</body>

</html>