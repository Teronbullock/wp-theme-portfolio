<?php
$project_title = get_field('project_title', get_the_id());
$image = get_field('image', get_the_id());
$project_description = get_field('project_description', get_the_id());
$tech_stack = get_field('tech_stack', get_the_id());
$view_site = get_field('view_site', get_the_id());
$view_code = get_field('view_code', get_the_id());

?>

<div class="project <?php echo esc_attr('project-'. get_the_id() ); ?>">
	<div class="project__aside">
				<?php 
					if( $image ):
					?>
				<?php 
					echo wp_get_attachment_image( $image, 'full', '', ['class' => 'img project__img'] );
					?>
				<?php endif; ?>
		</div>
	<div class="project__info">
		<section class="project__info_section"> 
				<header class="project__header">
					<?php 
						if( $project_title ):
						?>
						<h3 class="project__title">
							<?php echo esc_html($project_title); ?>
						</h3>
							<?php endif; ?>
					</header>
					<?php 
						if( $project_description ):
						?>
				<p class="project__copy"><?php echo esc_html($project_description); ?></p>
					<?php endif; ?>
				<!-- <div class="project__tag">
						<h4 class="project__tag-title">Tech Stack:</h4>
						<ul class="project__tag-list">
						<?php 
							if( $tech_stack ):
							?>
						<li class="tag-item"><?php echo esc_html($tech_stack); ?></li>
											<?php endif; ?>
						</ul>
					</div> -->
				</section>
		<ul class="project__action">
					<li class="project__list-item view_site">
						<?php 
						if( $view_site ):
						?>
						<a class= "view_site" href="<?php echo esc_attr( $view_site )?>"  target="_blank" rel="noopener noreferrer">View Site <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="fa-regular fa-code" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
						<?php endif; ?>	
						<path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z">
							</path>
						</svg>
						</a>
						</li>
					<li class="project__list-item">
						<?php 
						if( $view_code ):
						?>
						<a class= "view_code" href="<?php echo esc_attr( $view_code )?>"  target="_blank" rel="noopener noreferrer">View Code <svg stroke="currentColor" fill="currentColor" stroke-width="0" viewBox="0 0 576 512" class="fa-regular fa-code" height="1em" width="1em" xmlns="http://www.w3.org/2000/svg">
						<?php endif; ?>	
						<path d="M528 0H48C21.5 0 0 21.5 0 48v320c0 26.5 21.5 48 48 48h192l-16 48h-72c-13.3 0-24 10.7-24 24s10.7 24 24 24h272c13.3 0 24-10.7 24-24s-10.7-24-24-24h-72l-16-48h192c26.5 0 48-21.5 48-48V48c0-26.5-21.5-48-48-48zm-16 352H64V64h448v288z">
							</path>
						</svg>
						</a>
						</li>
					</ul>
			
		</div>
</div>
<?php