<?php 
$question = get_field('question');
$answer = get_field('answer');
?>

<section class="lw-cta">
    <h1><?php echo $question; ?></h1>
    <p><?php echo $answer;  ?></p>
</section>