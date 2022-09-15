<?php 
	$template = $args['template'];
  $theme_primary_color = get_field('theme_primary_color');

  $primary_bg_color_style = '';
  $primary_color_style = '';
  $section_class = '';
  $header_text = '';
  $section_bg_color = '';
  $section_text_color = '';
  
  // check for teamplate type
  if ('about' === $template) {
    $section_class = 'section--prim';
    $header_text = $template;
  } else if ('skills' === $template) {
    $section_class = 'section--sec';
    $header_text = $template;
  } else if ('projects' === $template) {
    $section_class = 'section--default';
    $header_text = $template;
  } else if ('cta' === $template) {
    $section_class = 'cta';
    $header_text = 'I\'m Ready to help you create something amazing today.';
  }

  // check for theme primary color
  if ($theme_primary_color) {
    $primary_bg_color_style = 'background-color:' . $theme_primary_color . ';';
    $primary_color_style = 'color:' . $theme_primary_color . ';';
	}

?>
<section id="<?php echo esc_attr($template); ?>" class="section <?php echo esc_attr($section_class); ?>" style="<?php echo esc_attr($about_section_bg_color_style .' '. $about_section_text_color_style); ?>">
	<div class="section__container site-wrapper">
		<header class="section__header">
			<h2 class="section__title"><?php echo esc_html($header_text); ?></h2>
		</header>
    <?php
      // get section template part
      get_template_part('template-parts/frontpage/section', $template);
    ?>
	</div>	
	<!-- end section__container  -->
</section>
<?php