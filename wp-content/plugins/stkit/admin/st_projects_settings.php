<?php if ( !defined( 'ABSPATH' ) ) exit; ?>

<!--

	1 - GENERAL

		1.1 - Status
		1.2 - Slugs

	2 - PORTFOLIO

		2.1 - Portfolio
			- Projects per page
			- Template

	3 - TAXONOMY

		3.1 - Taxonomies

-->

<?php

	// Primary
	$st_['primary'] = !empty( $st_Settings['color-primary'] ) ? esc_html( $st_Settings['color-primary'] ) : $st_Options['panel']['style']['general']['colors']['primary']['hex'];

	// Secondary
	$st_['secondary'] = !empty( $st_Settings['color-secondary'] ) ? esc_html( $st_Settings['color-secondary'] ) : $st_Options['panel']['style']['general']['colors']['secondary']['hex'];

?>

<style>

	html {
		background: #F9F9F9;
	}

	#panelHeader {
		background: #<?php echo $st_['primary'] ?>;
	}

	#panelSaveButton {
		background-color: #<?php echo $st_['secondary'] ?>;
	}

	.panel-fieldset legend {
		color: #<?php echo $st_['secondary'] ?>;
	}

</style>

<form action="" enctype="multipart/form-data" method="post">

	<input type="hidden" id="st_projects_settings_action" name="st_projects_settings_action" value="save">
	<input type="hidden" name="tab_st_projects_settings" value="<?php echo esc_html( !empty( $st_Settings['tab_st_projects_settings'] ) ? $st_Settings['tab_st_projects_settings'] : '' ); ?>" id="input-panelTabsNav" />


	
	<div id="themePanel">



		<div id="panelHeader">
	
			<div id="panelTitle"><?php _e( 'Projects Settings', 'stkit' ); echo ' <span>ST Kit v.' . $st_Kit['version']; ?></span></div>
	
			<input type="submit" id="panelSaveButton" value="<?php esc_attr_e( 'Save changes', 'stkit' )?>" name="cp_save" />

			<div id="messageUpdated"><?php echo $st_['message']; ?></div>

			<div class="clear"><!-- --></div>
	
			<ul id="panelTabsNav">
				<?php

					// General nav tab
					if ( $st_Options['panel']['projects']['general']['status'] )
						echo '<li><a href="#general">' . __( 'General', 'stkit' ) . '</a></li>';

					// Portfolio nav tab
					if ( $st_Options['panel']['projects']['portfolio']['status'] )
						echo '<li><a href="#portfolio">' . __( 'Portfolio', 'stkit' ) . '</a></li>';

					// Taxonomy nav tab
					if ( $st_Options['panel']['projects']['taxonomy']['status'] )
						echo '<li><a href="#taxonomy">' . __( 'Taxonomy', 'stkit' ) . '</a></li>';

				?>
			</ul>
	
			<div class="clear"><!-- --></div>
	
		</div>


	
		<!--=============================================
		
			G E N E R A L
			A page with projects settings
		
		==============================================-->

		<?php

			// General tab
			if ( $st_Options['panel']['projects']['general']['status'] ) {	?>

				<div id="general" class="panelTab">
		
		
					<!-------------------------------------------
						1.1 - Status
					-------------------------------------------->

					<?php // Status
						if ( $st_Options['panel']['projects']['general']['status'] ) { ?>

							<fieldset class="panel-fieldset"><legend><?php _e( 'General', 'stkit' ) ?></legend>
					
								<dl>
									<dt>
										<?php _e( 'Status', 'stkit' ) ?>
									</dt>
									<dd>
										<label>
											<input type="checkbox" name="projects_status" value="yes" <?php if ( !empty( $st_Settings['projects_status'] ) && $st_Settings['projects_status'] == 'yes' ) echo 'checked'; ?> /> 
											<?php _e( 'Enabled', 'stkit' ) ?>
										</label>
										<small><?php _e( 'Turn on projects on the website.', 'stkit' ) ?></small>				
									</dd>
								</dl>
				
				
							</fieldset><?php

						}
					?>


					<!-------------------------------------------
						1.2 - Slugs
					-------------------------------------------->

					<?php // Slugs
						if ( $st_Options['panel']['projects']['general']['slugs'] ) { ?>

							<fieldset class="panel-fieldset"><legend><?php _e( 'Slugs', 'stkit' ) ?></legend>
					
								<dl>
									<dt>
										<span><?php _e( 'Post slug', 'stkit' ) ?></span>
									</dt>
									<dd>
										<input type="text" name="slug_post" class="input-shorter tooltip" title="<?php _e( 'Do not forget to update Permalinks Settings after these changes.', 'stkit' ) ?>" value="<?php echo esc_html( !empty( $st_Settings['slug_post'] ) ? $st_Settings['slug_post'] : 'project' ); ?>" />
										<small><?php _e( '<strong>WARNING!</strong> No white spaces, please. Latin symbols only.', 'stkit' ) ?></small>				
									</dd>
								</dl>

								<dl>
									<dt>
										<span><?php _e( 'Category slug', 'stkit' ) ?></span>
									</dt>
									<dd>
										<input type="text" name="slug_category" class="input-shorter tooltip" title="<?php _e( 'Do not forget to update Permalinks Settings after these changes.', 'stkit' ) ?>" value="<?php echo esc_html( !empty( $st_Settings['slug_category'] ) ? $st_Settings['slug_category'] : 'projects' ); ?>" />
										<small><?php _e( '<strong>WARNING!</strong> No white spaces, please. Latin symbols only.', 'stkit' ); echo ' '; _e( "The <code>category</code> slug not allowed.", 'stkit' ) ?></small>				
									</dd>
								</dl>

								<dl>
									<dt>
										<span><?php _e( 'Tag slug', 'stkit' ) ?></span>
									</dt>
									<dd>
										<input type="text" name="slug_tag" class="input-shorter tooltip" title="<?php _e( 'Do not forget to update Permalinks Settings after these changes.', 'stkit' ) ?>" value="<?php echo esc_html( !empty( $st_Settings['slug_tag'] ) ? $st_Settings['slug_tag'] : 'tagged' ); ?>" />
										<small><?php _e( '<strong>WARNING!</strong> No white spaces, please. Latin symbols only.', 'stkit' ); echo ' '; _e( "The <code>tag</code> slug not allowed.", 'stkit' ) ?></small>				
									</dd>
								</dl>

							</fieldset><?php

						}
					?>


				</div><!-- #general --><?php

			}

		?>


	
		<!--=============================================
		
			P O R T F O L I O
			A page with portfolio settings
		
		==============================================-->

		<?php

			// Portfolio tab
			if ( $st_Options['panel']['projects']['portfolio']['status'] ) {	?>

				<div id="portfolio" class="panelTab">
		
		
					<!-------------------------------------------
						2.1 - Portfolio
					-------------------------------------------->

					<?php // Portfolio
						if ( $st_Options['panel']['projects']['portfolio']['status'] ) { ?>

							<fieldset class="panel-fieldset"><legend><?php _e( 'Portfolio', 'stkit' ) ?></legend>
					

								<!--- Projects per page ------------------------------>
		
								<?php // Projects per page
									if ( $st_Options['panel']['projects']['portfolio']['projects_qty'] ) { ?>
				
										<dl>
											<dt>
												<span><?php _e( 'Projects per page', 'stkit' ) ?></span>
											</dt>
											<dd>
												<input type="text" id="projects_qty" name="projects_qty" class="input-short" value="<?php echo esc_html( !empty( $st_Settings['projects_qty'] ) ? $st_Settings['projects_qty'] : ( !empty($st_Options['ctp']['qty']) ? $st_Options['ctp']['qty'] : 9 ) ); ?>" />
												<div class="slider-box"><div id="projects_qty-slider"></div></div>
												<div class="clear"><!-- --></div>
												<small><?php _e( 'A quantity of projects per portfolio page.', 'stkit' ) ?></span></small>
											</dd>
										</dl><?php
		
									}
								?>
		
		
								<!--- Template ------------------------------>
					
								<?php
									if ( $st_Options['panel']['projects']['portfolio']['templates']['status'] ) { ?>
					
										<dl>
											<dt>
												<?php _e( 'Template', 'stkit' ) ?>
											</dt>
											<dd>
												<?php

													// Get default template
													$st_['template-default'] = !empty( $st_Options['panel']['projects']['portfolio']['template-default'] ) ? $st_Options['panel']['projects']['portfolio']['template-default'] : 'default';

													foreach ( $st_Options['panel']['projects']['portfolio']['templates'] as $st_['template'] => $key ) {

														if ( $key['status']  ) {
			
															$st_['checked'] = '';

															// Select the Default in case database is empty
															if ( empty( $st_Settings['projects_template'] ) && $st_['template'] == $st_['template-default'] )
																$st_['checked'] = 'checked="checked"';

															// Select requred template
															elseif ( !empty( $st_Settings['projects_template'] ) && $st_Settings['projects_template'] == $st_['template'] )
																$st_['checked'] = 'checked="checked"'; ?>
			
															<div class="tmpl_radio">
																<label class="lable-img" for="<?php echo $st_['template'] ?>_template">
																	<img src="<?php echo plugins_url() ?>/stkit/assets/images/schemes/projects/<?php echo $key['label'] ?>.gif" width="80" height="60">
																</label>
																<input type="radio" value="<?php echo $st_['template'] ?>" name="projects_template" id="<?php echo $st_['template'] ?>_template" <?php echo $st_['checked'] ?> />
																<label for="<?php echo $st_['template'] ?>_template"><?php echo $key['label'] ?></label>
															</div><?php
						
														}
						
													}
						
												?>
									
												<small><?php _e( 'Select template for portolio.', 'stkit' ) ?></small>
											</dd>
										</dl><?php
			
									}
								?>
				
				
							</fieldset><?php

						}
					?>


					<?php // Another projects
						if ( !empty( $st_Options['panel']['projects']['portfolio']['another'] ) == true ) { ?>

							<fieldset class="panel-fieldset"><legend><?php _e( 'Another projects', 'stkit' ) ?></legend>
					

								<!--- Another projects: Per page ------------------------------>
		
								<?php // Another projects per page
									if ( !empty( $st_Options['panel']['projects']['portfolio']['another_qty'] ) == true ) { ?>
				
										<dl>
											<dt>
												<span><?php _e( 'Projects per page', 'stkit' ) ?></span>
											</dt>
											<dd>
												<input type="text" id="projects_another_qty" name="projects_another_qty" class="input-short" value="<?php echo esc_html( !empty( $st_Settings['projects_another_qty'] ) ? $st_Settings['projects_another_qty'] : ( !empty($st_Options['ctp']['qty_another']) ? $st_Options['ctp']['qty_another'] : 8 ) ); ?>" />
												<div class="slider-box"><div id="projects_another_qty-slider"></div></div>
												<div class="clear"><!-- --></div>
												<small><?php _e( 'A quantity of another projects.', 'stkit' ) ?></span></small>
											</dd>
										</dl><?php
		
									}
								?>


								<!--- Another projects: Type ------------------------------>
		
								<?php // Another projects type
									if ( !empty( $st_Options['panel']['projects']['portfolio']['another_type'] ) == true ) { ?>
		
										<dl>
											<dt>&nbsp;
												
											</dt>
											<dd>
												<select name="projects_another_type">
													<option value="date" <?php if ( !empty( $st_Settings['projects_another_type'] ) && $st_Settings['projects_another_type'] == 'date' ) echo 'selected'; ?>><?php _e( 'Recent', 'stkit' ); ?></option>
													<option value="rand" <?php if ( !empty( $st_Settings['projects_another_type'] ) && $st_Settings['projects_another_type'] == 'rand' ) echo 'selected'; ?>><?php _e( 'Random', 'stkit' ); ?></option>
												</select>
												<small><?php _e( 'Select a type.', 'stkit' ) ?></small>
											</dd>
										</dl><?php
		
									}
								?>	














								<!--- Another projects: Display on frontpage ------------------------------>
		
								<?php // Another projects: Display on frontpage
									if ( !empty( $st_Options['panel']['projects']['portfolio']['another_on-frontpage'] ) == true ) { ?>
		
										<dl>
											<dt>&nbsp;
												
											</dt>
											<dd>
												<label>
													<input type="checkbox" name="projects_another_on-frontpage" value="yes" <?php if ( !empty( $st_Settings['projects_another_on-frontpage'] ) && $st_Settings['projects_another_on-frontpage'] == 'yes' ) echo 'checked'; ?> /> 
													<?php _e( 'Display on frontpage', 'stkit' ) ?>
												</label>
												<small><?php _e( 'Display another projects on frontpage.', 'stkit' ) ?></small>
											</dd>
										</dl><?php
		
									}
								?>
		
		
								<!--- Another projects: Display on archives ------------------------------>
		
								<?php // Another projects: Display on archives
									if ( !empty( $st_Options['panel']['projects']['portfolio']['another_on-archives'] ) == true ) { ?>
		
										<dl>
											<dt>&nbsp;
												
											</dt>
											<dd>
												<label>
													<input type="checkbox" name="projects_another_on-archives" value="yes" <?php if ( !empty( $st_Settings['projects_another_on-archives'] ) && $st_Settings['projects_another_on-archives'] == 'yes' ) echo 'checked'; ?> /> 
													<?php _e( 'Display on archives', 'stkit' ) ?>
												</label>
												<small><?php _e( 'Display another projects on archives: categories, tags, formats.', 'stkit' ) ?></small>
											</dd>
										</dl><?php
		
									}
								?>
		
		
								<!--- Another projects: Display on single ------------------------------>
		
								<?php // Another projects: Display on single
									if ( !empty( $st_Options['panel']['projects']['portfolio']['another_on-single'] ) == true ) { ?>
		
										<dl>
											<dt>&nbsp;
												
											</dt>
											<dd>
												<label>
													<input type="checkbox" name="projects_another_on-single" value="yes" <?php if ( !empty( $st_Settings['projects_another_on-single'] ) && $st_Settings['projects_another_on-single'] == 'yes' ) echo 'checked'; ?> /> 
													<?php _e( 'Display on single', 'stkit' ) ?>
												</label>
												<small><?php _e( 'Display another projects on single project.', 'stkit' ) ?></small>
											</dd>
										</dl><?php
		
									}
								?>
		
		
								<!--- Another projects: Display on others ------------------------------>
		
								<?php // Featured posts (sticky): Display on others
									if ( !empty( $st_Options['panel']['projects']['portfolio']['another_on-others'] ) == true ) { ?>
		
										<dl>
											<dt>&nbsp;
												
											</dt>
											<dd>
												<label>
													<input type="checkbox" name="projects_another_on-others" value="yes" <?php if ( !empty( $st_Settings['projects_another_on-others'] ) && $st_Settings['projects_another_on-others'] == 'yes' ) echo 'checked'; ?> /> 
													<?php _e( 'Display on other pages', 'stkit' ) ?>
												</label>
												<small><?php _e( 'Display another projects on other kind of pages.', 'stkit' ) ?></small>
											</dd>
										</dl><?php
		
									}
								?>
		
		
								<!--- Another projects: Cache query ------------------------------>
		
								<?php // Another projects: Cache query
									if ( !empty( $st_Options['panel']['projects']['portfolio']['another_cache'] ) == true ) { ?>
		
										<dl>
											<dt>&nbsp;
												
											</dt>
											<dd>
												<label>
													<input type="checkbox" name="projects_another_cache" value="yes" <?php if ( !empty( $st_Settings['projects_another_cache'] ) && $st_Settings['projects_another_cache'] == 'yes' ) echo 'checked'; ?> /> 
													<?php _e( 'Query cache', 'stkit' ) ?>
												</label>
												<small><?php _e( 'Store query result within 12 hours.', 'stkit' ) ?></small>
											</dd>
										</dl><?php
		
									}
								?>



























							</fieldset><?php

						}
					?>


				</div><!-- #portfolio --><?php

			}

		?>


	
		<!--=============================================
		
			T A X O N O M Y
			Custom post type, category and tag
		
		==============================================-->

		<?php

			// Taxonomy tab
			if ( $st_Options['panel']['projects']['taxonomy']['status'] ) {	?>

				<div id="taxonomy" class="panelTab">
		
		
					<!-------------------------------------------
						3.1 - Taxonomies
					-------------------------------------------->

					<fieldset class="panel-fieldset"><legend><?php _e( 'Taxonomies', 'stkit' ) ?></legend>

						<dl>
							<dt>
								<span><?php _e( 'Post type', 'stkit' ) ?></span>
							</dt>
							<dd>
								<input type="text" name="ctp_post" class="input-shorter tooltip" title="<?php _e( "Make sure you have to make these changes. Otherwise, please, leave it default.", 'stkit' ) ?>" value="<?php echo esc_html( !empty( $st_Settings['ctp_post'] ) ? $st_Settings['ctp_post'] : $st_Options['ctp']['post'] ); ?>" />
								<small><?php _e( '<strong>WARNING!</strong> No white spaces, please. Latin symbols only.', 'stkit' ) ?></small>				
							</dd>
						</dl>

						<dl>
							<dt>
								<span><?php _e( 'Category', 'stkit' ) ?></span>
							</dt>
							<dd>
								<input type="text" name="ctp_category" class="input-shorter tooltip" title="<?php _e( "Make sure you have to make these changes. Otherwise, please, leave it default.", 'stkit' ) ?>" value="<?php echo esc_html( !empty( $st_Settings['ctp_category'] ) ? $st_Settings['ctp_category'] : $st_Options['ctp']['category'] ); ?>" />
								<small><?php _e( '<strong>WARNING!</strong> No white spaces, please. Latin symbols only.', 'stkit' ) ?></small>				
							</dd>
						</dl>

						<dl>
							<dt>
								<span><?php _e( 'Tag', 'stkit' ) ?></span>
							</dt>
							<dd>
								<input type="text" name="ctp_tag" class="input-shorter tooltip" title="<?php _e( "Make sure you have to make these changes. Otherwise, please, leave it default.", 'stkit' ) ?>" value="<?php echo esc_html( !empty( $st_Settings['ctp_tag'] ) ? $st_Settings['ctp_tag'] : $st_Options['ctp']['tag'] ); ?>" />
								<small><?php _e( '<strong>WARNING!</strong> No white spaces, please. Latin symbols only.', 'stkit' ) ?></small>				
							</dd>
						</dl>

					</fieldset>

				</div><!-- #general --><?php

			}

		?>



	</div><!-- #themePanel -->



</form>