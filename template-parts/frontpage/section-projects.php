<?php
$project_title = get_field('project_title', get_the_id());
$image = get_field('image', get_the_id());
$project_description = get_field('project_description', get_the_id());
$tech_stack = get_field('tech_stack', get_the_id());

?>

<div class="section__gallery">	
  <?php
    // add query obj to var
    $homepageProjects = new WP_Query(array(
      'post_per_page' => -1,
      'post_type'			=> 'projects'
    ));
    // the loop
    while($homepageProjects->have_posts()) {
      $homepageProjects->the_post(); 
      get_template_part( 'loop-templates/projects' );
    }
    // rest the post obj
    wp_reset_postdata();
  ?>
</div>		

<?php