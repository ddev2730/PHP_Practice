<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
        <title>Untitled Document</title>
    </head>
    <body>
        <?php
        echo "<h1>.........................</h1>";
        $var1 = 25 + 30;
        echo "<h1>Heading =  $var1</h1>";
        $x = 5;
        $y = 10;
        function myTest() {
            global $x, $y;
            $y = $x + $y;
        }
        myTest();
        echo $y; // outputs 15
        var_dump($y);
        echo strrev("hello world") . "</br>";
        echo strlen("hello world") . "</br>";
        echo str_word_count("hello worl") . "</br>";
        echo strpos("hello world", "world") . "</br>";

        function _switch($_param) {
            switch ($_param) {
                case 1:
                    echo "Case " . $_param;
                    break;
                case 2:
                    echo "Case " . $_param;
                    break;
                case 3:
                    echo "Case " . $_param;
                    break;
                case 4:
                    echo "Case " . $_param;
                    break;
                case 5:
                    echo "Case " . $_param;
                    break;
                default :
                    echo "Default " . $_param;
            }
        }
        _switch(2);
        ?>
    </body>
</html>