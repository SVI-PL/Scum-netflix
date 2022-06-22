<html>
<head></head>
<body>
<form method="post">
    <input type="submit" name="test" id="test" value="RUN" /><br/>
</form>

<?php

function testfun()
{
    $f = fopen('res.html', 'w');
fclose($f);
echo "All data deleted";
}

if(array_key_exists('test',$_POST)){
   testfun();
}

?>
</body>
</html>