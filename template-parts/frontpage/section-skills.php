<?php 
  $skills = get_field('skills');
?>

<div class="section__box section__box--row">
  <?php echo esc_html( the_field('skills')); ?>
</div>