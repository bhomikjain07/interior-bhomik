<!doctype >
<html>
    <head>
        
    </head>
    <body>
        <form name="f1" action="#" method="post">
            <label>Enter marks here <input type="number" name="t1"> </label>
            <input type="submit" name="b1">
        </form>
        <?php

        if(isset($_POST['b1']))
        {
            $mk=$_POST['t1'];
            echo $mk;


        }

        ?>
    </body>
</html>