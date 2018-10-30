<!DOCTYPE html>
<html>
<?php include_once(dirname(__DIR__).'/head.html'); ?>

<body>

<h1>UPLOAD</h1>

<form action="?page=upload" method="post" enctype="multipart/form-data">
    <input type="file" name="file">
    <input type="submit" value="send">
</form>

</body>

</html> 
