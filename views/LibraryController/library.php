<!DOCTYPE html>
<html>
<?php include_once(dirname(__DIR__).'/head.html'); ?>

<body>

<h1>IMAGE AND VIDEO LIBRARY</h1>


<?php foreach($files as $file): ?>

<?php if (strpos($file, '.mp4')): ?>
        <video height="250" controls>
            <source src="../../public/upload/<?= $file ?>" type="video/mp4">
        </video>
<?php elseif (strpos($file, '.png')): ?>
    <img height="250" src="../../public/upload/<?= $file ?>"/>
<?php endif; ?>

<?php endforeach; ?>


</body>

</html> 
