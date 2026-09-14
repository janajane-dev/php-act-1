<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <?php
        $days = 8;

        switch(true) {
            case ($days >= 1 && $days <= 7):
                echo "user";
                break;
            case ($days >= 8 && $days <= 24):
                echo "enjoyer";
                break;
            case ($days >= 25 && $days <= 30):
                echo "for renewal";
                break;
            default:
                echo "invalid input";
                break;
        }
    ?>
</body>
</html>
