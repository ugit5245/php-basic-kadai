<!DOCTYPE html>
<html lang="ja">

<head>
    <meta charset="UTF-8">
    <title>PHP基礎編</title>
</head>

<body>
    <p>

        <?php

        $nums = [15, 4, 18, 23, 10];

        function sort_2way($array, bool $order)
        {
            if ($order == TRUE) {
                echo "昇順にソートします。";
                echo "<br>";
                sort($array);
                foreach ($array as $val) {
                    echo "$val<br>";
                };
            } else {
                echo "降順にソートします。";
                echo "<br>";
                rsort($array);
                foreach ($array as $value) {
                    echo "$value<br>";
                };
            }
        };

        sort_2way($nums, 'TRUE');
        sort_2way($nums, FALSE);


        ?>

    </p>
</body>

</html>