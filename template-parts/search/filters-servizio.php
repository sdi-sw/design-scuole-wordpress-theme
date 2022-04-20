<?php

?>
<aside class="aside-list sticky-sidebar search-results-filters">
	<form role="search" method="get" class="search-form" action="<?php echo home_url(""); ?>">
			<h2 class="h6 text-uppercase"><strong><?php _e("Tipologia", "design_scuole_italia"); ?></strong></h2>
			<ul>
				<?php
				$terms = get_terms( array(
					'taxonomy' => 'tipologia-servizio',
					'hide_empty' => true,
				) );
				foreach ( $terms as $term ) {
					?>
					<li>
                        <div class="form-check my-0">
							<input type="radio" class="custom-control-input" name="tipologia-servizio" value="<?php echo $term->slug; ?>" id="check-<?php echo $term->slug; ?>" <?php if($term->slug == get_query_var("tipologia-servizio")) echo " checked "; ?> onChange="this.form.submit()">
							<label class="mb-0" for="check-<?php echo $term->slug; ?>"><?php echo $term->name; ?></label>
						</div>
					</li>

					<?php
				}
				?>
			</ul>

	</form>
</aside>