<!doctype>
<html>
    <head><title>Food Plaza</title></head>
    <body>
        <form action="#" name="f1" method="post">
            <label><input type="checkbox" name=t1[] value="pizza"> Veg loaded Pizza </label><br>
            <label><input type="checkbox" name=t1[] value="Noodles"> Hakka Noodles </label><br>
            <label><input type="checkbox" name=t1[]> Aloo tiki Burger </label><br>
            <label><input type="checkbox" name=t1[]> Pasta </label><br>
            <label><input type="checkbox" name=t1[]> Manchorian </label><br>
            <label><input type="checkbox" name=t1[]> Pav Bhaji </label><br>
            <input type="submit" value="Place order " name="b1">
        </form>
        <? php
        if(isset($_POST['b1']))
        {
            $order=$_POST['t1'];
            foreach($ch as $d)
            {
                echo "<ul><li>".$t."</li></ul>";
            }
         }

        ?>
    </body>
</html>