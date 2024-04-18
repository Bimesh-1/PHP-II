<?php
$text = 'Home sweet home';
?>
<?php include 'includes/header.php'; ?>

<p>
  /** Write your code here */<br>
Strings to lower case: <?php echo strtolower($text) ?> <br>
Strings to uppercase: <?php echo strtoupper($text) ?> <br>
Length of Strings :<?php echo strlen($text) ?> <br>
Number of words in Strings: <?php echo str_word_count($text) ?>
</p>

<?php include 'includes/footer.php'; ?>