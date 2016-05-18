<?php

class mata {
    
}

class biSection extends mata {

    private $_function = '';
    private $a, $b, $c;

    function execute() {
        $a = $_POST['a'];// -5;
        $b = $_POST['b'];//4;
        if ($b<$a ) {
            die('Gdzie mnie z tymi parametrami ?:)');
        }
        $c = ($b - $a) / 2;
        $i = 0;

        while (!(f($c) < 0.0005 AND f($c) > -0.0005) AND $i < 25) {
            $c = ($b + $a) / 2; //  print $c .' ' .x($c).'<br>';
            $fa = f($a);
            $fb = f($b);
            $fc = f($c);
            if ($fa * $fc < 0 AND $fb * $fc < 0) {
                print 'dwa miejsca zerowe';
            } else if ($fa * $fc > 0 AND $fb * $fc > 0) {
                print 'brak miejsc zerowych';
            } else if ($fa * $fc < 0) {
                $b = $c;
            } else {
                $a = $c;
            }

            $i++;
        }

        print 'C: ' . $c . ' <br>Wynik: ' . f($c);
    }

}

function f($x) {
    //   print $_POST['x'];
    return eval(' return (float)' . $_POST['x'] . ';');
}

//($x * 0.23 - 0.434)
if (isset($_POST['submit'])) {
    $a = new biSection;
    $a->execute();
}
?>

<!DOCTYPE html>
<html>
    <head>
        <title>title</title>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
    </head>
    <body>
        <form action="" method="POST">
            <textarea name="x"></textarea>
            <input type="text" name="a" />
            <input type="text" name="b" />
            <input type="submit" name="submit"   />
        </form>
    </body>
</html>
