<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $days = 12;

        if($days >= 1 && $days <= 7) {
            echo "user";
        } elseif ($days >= 8 && $days <= 24) {
            echo "enjoyer";
        } elseif ($days >= 25 && $days <= 30) {
            echo "for renewal";
        } else {
            echo "invalid input";
        }
    ?>
</body>
</html>