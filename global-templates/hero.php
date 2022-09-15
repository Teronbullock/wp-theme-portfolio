<?php
$theme_primary_color = get_field('theme_primary_color'); 
$hero = get_field('hero');
$hero_bg_img = $hero['bg_image'];
$hero_first_name = $hero['first_name'];
$hero_last_name = $hero['last_name'];
$hero_sub_title = $hero['sub_title'];
$hero_social_link_1 = $hero['social_link_1']; 
$hero_social_link_2 = $hero['social_link_2'];
$hero_btn = $hero['hero_button'];
$hero_img_style = '';
$primary_bg_color_style = '';
$primary_color_style = '';

if ($theme_primary_color) {
  $primary_bg_color_style = 'background-color:' . $theme_primary_color . ';';
  $primary_color_style = 'color:' . $theme_primary_color . ';';
}

if ($hero_bg_img) {
	$hero_img_style =  'background-image: url(' . $hero_bg_img . ')';
}

?>


<section id="l-hero" class="l-hero section"  style="<?php echo esc_attr($hero_img_style); ?>" >
	<div class="l-hero__cover">
    <div class="l-hero__info site-wrapper">
      <div class="l-hero__copy">
      <p class="l-hero__title l-hero__title--prim">Hello,</p>
      <h2 class="l-hero__title l-hero__title--large">
        I'm <span class="l-hero__title--highlight" style="<?php echo esc_attr($primary_color_style); ?>">
          <?php echo esc_html($hero_first_name); ?>
        </span> <?php echo esc_html($hero_last_name); ?>
      </h2>
      <p class="l-hero__title l-hero__title--prim">
        <?php echo esc_html($hero_sub_title); ?>
      </p></div>
      <div class="l-hero__actions">
        <div class="l-hero__action-container">
          <ul class="l-hero__list l-hero__list--social">
            <li class="l-hero__item l-hero__item--social">
              <?php 
              if( $hero_social_link_1 ): 
                $hero_social_link_1_url = $hero_social_link_1['url'];
                $hero_social_link_1_target = $hero_social_link_1['target'] ? $hero_social_link_1['target'] : '_self';
              ?>
              <a class="l-hero__icon-link"
                href="<?php echo esc_attr( $hero_social_link_1_url )?>" 
                target="<?php echo esc_attr( $hero_social_link_1_target )?>" rel="noopener noreferrer">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 496 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M165.9 397.4c0 2-2.3 3.6-5.2 3.6-3.3.3-5.6-1.3-5.6-3.6 0-2 2.3-3.6 5.2-3.6 3-.3 5.6 1.3 5.6 3.6zm-31.1-4.5c-.7 2 1.3 4.3 4.3 4.9 2.6 1 5.6 0 6.2-2s-1.3-4.3-4.3-5.2c-2.6-.7-5.5.3-6.2 2.3zm44.2-1.7c-2.9.7-4.9 2.6-4.6 4.9.3 2 2.9 3.3 5.9 2.6 2.9-.7 4.9-2.6 4.6-4.6-.3-1.9-3-3.2-5.9-2.9zM244.8 8C106.1 8 0 113.3 0 252c0 110.9 69.8 205.8 169.5 239.2 12.8 2.3 17.3-5.6 17.3-12.1 0-6.2-.3-40.4-.3-61.4 0 0-70 15-84.7-29.8 0 0-11.4-29.1-27.8-36.6 0 0-22.9-15.7 1.6-15.4 0 0 24.9 2 38.6 25.8 21.9 38.6 58.6 27.5 72.9 20.9 2.3-16 8.8-27.1 16-33.7-55.9-6.2-112.3-14.3-112.3-110.5 0-27.5 7.6-41.3 23.6-58.9-2.6-6.5-11.1-33.3 2.6-67.9 20.9-6.5 69 27 69 27 20-5.6 41.5-8.5 62.8-8.5s42.8 2.9 62.8 8.5c0 0 48.1-33.6 69-27 13.7 34.7 5.2 61.4 2.6 67.9 16 17.7 25.8 31.5 25.8 58.9 0 96.5-58.9 104.2-114.8 110.5 9.2 7.9 17 22.9 17 46.4 0 33.7-.3 75.4-.3 83.6 0 6.5 4.6 14.4 17.3 12.1C428.2 457.8 496 362.9 496 252 496 113.3 383.5 8 244.8 8zM97.2 352.9c-1.3 1-1 3.3.7 5.2 1.6 1.6 3.9 2.3 5.2 1 1.3-1 1-3.3-.7-5.2-1.6-1.6-3.9-2.3-5.2-1zm-10.8-8.1c-.7 1.3.3 2.9 2.3 3.9 1.6 1 3.6.7 4.3-.7.7-1.3-.3-2.9-2.3-3.9-2-.6-3.6-.3-4.3.7zm32.4 35.6c-1.6 1.3-1 4.3 1.3 6.2 2.3 2.3 5.2 2.6 6.5 1 1.3-1.3.7-4.3-1.3-6.2-2.2-2.3-5.2-2.6-6.5-1zm-11.4-14.7c-1.6 1-1.6 3.6 0 5.9 1.6 2.3 4.3 3.3 5.6 2.3 1.6-1.3 1.6-3.9 0-6.2-1.4-2.3-4-3.3-5.6-2z">

                  </path>
                </svg>
              </a>
              <?php endif; ?>
            </li>
            <li class="l-hero__item l-hero__item--social">
            <?php 
              if( $hero_social_link_2 ): 
                $hero_social_link_2_url = $hero_social_link_2['url'];
                $hero_social_link_2_target = $hero_social_link_2['target'] ? $hero_social_link_2['target'] : '_self';
              ?>
              <a class="l-hero__icon-link" 
              href="<?php echo esc_attr( $hero_social_link_2_url )?>" 
              target="<?php echo esc_attr( $hero_social_link_2_target )?>" rel="noopener noreferrer">
                <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 448 512" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                  <path d="M416 32H31.9C14.3 32 0 46.5 0 64.3v383.4C0 465.5 14.3 480 31.9 480H416c17.6 0 32-14.5 32-32.3V64.3c0-17.8-14.4-32.3-32-32.3zM135.4 416H69V202.2h66.5V416zm-33.2-243c-21.3 0-38.5-17.3-38.5-38.5S80.9 96 102.2 96c21.2 0 38.5 17.3 38.5 38.5 0 21.3-17.2 38.5-38.5 38.5zm282.1 243h-66.4V312c0-24.8-.5-56.7-34.5-56.7-34.6 0-39.9 27-39.9 54.9V416h-66.4V202.2h63.7v29.2h.9c8.9-16.8 30.6-34.5 62.9-34.5 67.2 0 79.7 44.3 79.7 101.9V416z">

                  </path>
                </svg>
              </a>
              <?php endif; ?>
            </li>
          </ul>
        </div>
        <div class="l-hero__action-container">
          <span class="l-hero__item l-hero__item--actions">
            <?php 
            if( $hero_btn ): 
              $hero_btn_url = $hero_btn['url'];
              $hero_btn_title = $hero_btn['title'];
            ?>
            <a href="<?php echo esc_attr( $hero_btn_url ); ?>" class="btn-hero" style="<?php echo esc_attr($primary_bg_color_style); ?>">
            <?php echo esc_attr( $hero_btn_title ); ?> 
              <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 384 512" class="btn-hero--icon" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
                <path d="M384 112v352c0 26.51-21.49 48-48 48H48c-26.51 0-48-21.49-48-48V112c0-26.51 21.49-48 48-48h80c0-35.29 28.71-64 64-64s64 28.71 64 64h80c26.51 0 48 21.49 48 48zM192 40c-13.255 0-24 10.745-24 24s10.745 24 24 24 24-10.745 24-24-10.745-24-24-24m96 114v-20a6 6 0 0 0-6-6H102a6 6 0 0 0-6 6v20a6 6 0 0 0 6 6h180a6 6 0 0 0 6-6z">

                </path>
              </svg>
            </a>
            <?php endif; ?>
          </span>
        </div>
      </div>
    </div>
    </div>
  </section>