<?php 
	$theme_primary_color = get_field('theme_primary_color');
	$about = get_field('about');
	$about_bg_color = $about['section_background_color'];
  $about_text_color = $about['section_text_color'];
  $about_content = $about['about_content'];
	$about_cards = $about['about_cards'];

	$card_title_1 = $about_cards['title_1'];
	$card_title_2 = $about_cards['title_2'];
	$card_title_3 = $about_cards['title_3'];
	$card_body_1 = $about_cards['body_1'];
	$card_body_2 = $about_cards['body_2'];
	$card_body_3 = $about_cards['body_3'];

	$primary_bg_color_style = '';
	$primary_color_style = '';
	$about_section_bg_color_style = '';
  $about_section_text_color_style = '';

	if ($theme_primary_color) {
    $primary_bg_color_style = 'background-color:' . $theme_primary_color . ';';
    $primary_color_style = 'color:' . $theme_primary_color . ';';
	}

	if ($about_bg_color) {
		$about_section_bg_color_style = 'background-color:' . $about_bg_color . ';'; 
	}

  if ($about_text_color) {
		$about_section_text_color_style = 'color:' . $about_text_color . ';'; 
	}

	$card_icon_1 = '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 320 512" class="ybp-card__icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style=" ' . esc_attr($primary_color_style) . ' ">
	<path d="M272 0H48C21.5 0 0 21.5 0 48v416c0 26.5 21.5 48 48 48h224c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zM160 480c-17.7 0-32-14.3-32-32s14.3-32 32-32 32 14.3 32 32-14.3 32-32 32zm112-108c0 6.6-5.4 12-12 12H60c-6.6 0-12-5.4-12-12V60c0-6.6 5.4-12 12-12h200c6.6 0 12 5.4 12 12v312z">
	</path></svg>';
	$card_icon_2 = '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 512 512" class="ybp-card__icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style=" ' . esc_attr($primary_color_style) . ' ">
	<path d="M487.4 315.7l-42.6-24.6c4.3-23.2 4.3-47 0-70.2l42.6-24.6c4.9-2.8 7.1-8.6 5.5-14-11.1-35.6-30-67.8-54.7-94.6-3.8-4.1-10-5.1-14.8-2.3L380.8 110c-17.9-15.4-38.5-27.3-60.8-35.1V25.8c0-5.6-3.9-10.5-9.4-11.7-36.7-8.2-74.3-7.8-109.2 0-5.5 1.2-9.4 6.1-9.4 11.7V75c-22.2 7.9-42.8 19.8-60.8 35.1L88.7 85.5c-4.9-2.8-11-1.9-14.8 2.3-24.7 26.7-43.6 58.9-54.7 94.6-1.7 5.4.6 11.2 5.5 14L67.3 221c-4.3 23.2-4.3 47 0 70.2l-42.6 24.6c-4.9 2.8-7.1 8.6-5.5 14 11.1 35.6 30 67.8 54.7 94.6 3.8 4.1 10 5.1 14.8 2.3l42.6-24.6c17.9 15.4 38.5 27.3 60.8 35.1v49.2c0 5.6 3.9 10.5 9.4 11.7 36.7 8.2 74.3 7.8 109.2 0 5.5-1.2 9.4-6.1 9.4-11.7v-49.2c22.2-7.9 42.8-19.8 60.8-35.1l42.6 24.6c4.9 2.8 11 1.9 14.8-2.3 24.7-26.7 43.6-58.9 54.7-94.6 1.5-5.5-.7-11.3-5.6-14.1zM256 336c-44.1 0-80-35.9-80-80s35.9-80 80-80 80 35.9 80 80-35.9 80-80 80z">
	</path></svg>';
	$card_icon_3 = '<svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="ybp-card__icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg" style=" ' . esc_attr($primary_color_style) .' ">
	<path d="M208 0c-29.9 0-54.7 20.5-61.8 48.2-.8 0-1.4-.2-2.2-.2-35.3 0-64 28.7-64 64 0 4.8.6 9.5 1.7 14C52.5 138 32 166.6 32 200c0 12.6 3.2 24.3 8.3 34.9C16.3 248.7 0 274.3 0 304c0 33.3 20.4 61.9 49.4 73.9-.9 4.6-1.4 9.3-1.4 14.1 0 39.8 32.2 72 72 72 4.1 0 8.1-.5 12-1.2 9.6 28.5 36.2 49.2 68 49.2 39.8 0 72-32.2 72-72V64c0-35.3-28.7-64-64-64zm368 304c0-29.7-16.3-55.3-40.3-69.1 5.2-10.6 8.3-22.3 8.3-34.9 0-33.4-20.5-62-49.7-74 1-4.5 1.7-9.2 1.7-14 0-35.3-28.7-64-64-64-.8 0-1.5.2-2.2.2C422.7 20.5 397.9 0 368 0c-35.3 0-64 28.6-64 64v376c0 39.8 32.2 72 72 72 31.8 0 58.4-20.7 68-49.2 3.9.7 7.9 1.2 12 1.2 39.8 0 72-32.2 72-72 0-4.8-.5-9.5-1.4-14.1 29-12 49.4-40.6 49.4-73.9z">
	</path></svg>';

	$cards = [
		 [
			'icon' => $card_icon_1,
			'title' => $card_title_1,
			'body' => $card_body_1
		 ],
		 [
			'icon' => $card_icon_2, 
			'title' => $card_title_2,
			'body' => $card_body_2
		 ],
		 [
			'icon' => $card_icon_3,
			'title' => $card_title_3,
			'body' => $card_body_3
		 ],
	];
?>

<div class="section__box section__box--row">
  <?php 
    foreach($cards as $row): 
      $icon = $row['icon'];
      $title = $row['title'];
      $body = $row['body'];
    ?>
  <div class="ybp-card">
    <div class="ybp-card__container">
      <div class="ybp-card__aside">
        <div class="ybp-card__img">
          <?php echo $icon; ?>
        </div>
      </div>
      <div class="ybp-card__content">
        <div class="ybp-card__header">
          <h3 class="ybp-card__title">
            <?php echo esc_html( $title ); ?>
          </h3>
        </div>
        <div class="ybp-card__body">
          <p class="ybp-card__copy">
            <?php echo esc_html( $body ); ?>
          </p>
        </div>
        <!-- end ybp-card__body  -->
      </div>
      <!-- end ybp-card__content -->
    </div>
    <!-- end ybp-card__container  -->
  </div>
  <!-- end ybp-card -->
  <?php endforeach; // end $card ?>
</div>
<!-- end section__box  -->
<?php if ($about_content): ?>
<div class="section__box">
  <div class="about__copy">
    <?php echo $about_content; ?>
  </div>
</div>
<!-- end section__box  -->
<?php endif; ?>
</div>	
<!-- end section__container  -->

<?php