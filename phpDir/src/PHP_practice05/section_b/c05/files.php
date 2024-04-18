<?php
$path = 'img/logo.png';
$myfile = pathinfo($path);
$image_info = getimagesize($path); 
?>
<?php include 'includes/header.php'; ?>

// Write you PHP code here
<p>File name: <?php echo $myfile['basename'] ?></p>
<p>File size: <?php echo $image_info ?></p>


<?php include 'includes/footer.php'; ?>