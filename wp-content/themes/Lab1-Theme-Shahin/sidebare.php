<!-- wp sidebar snippet  -->
<?php if ( !is_active_sidebar( 'primarySidebar' ) ) : ?>
    <ul >
        <?php dynamic_sidebar( 'primarySidebar' ); ?>
    </ul>
<?php endif; ?>




<?php if ( ! dynamic_sidebar() ) : ?>
<ul>
									<li>
                                    <?php get_search_form(); ?>
									</li>
								</ul>
								<ul role="navigation">
									<li class="pagenav">
										<h2>Sidor</h2>
										<ul>
											<li class="page_item current_page_item">
												<a href="">Blogg</a>
											</li>
											<li class="page_item">
												<a href="">Exempelsida</a>
											</li>
											<li class="page_item">
												<a href="">Kontakt</a>
											</li>
											<li class="page_item page_item_has_children">
												<a href="">Om mig</a>
												<ul class="children">
													<li class="page_item">
														<a href="">Intressen</a>
													</li>
													<li class="page_item page_item_has_children">
														<a href="">Portfolio</a>
														<ul class="children">
															<li class="page_item">
																<a href="">Projekt 1</a>
															</li>
														</ul>
													</li>
												</ul>
											</li>
											<li class="page_item">
												<a href="">Startsida</a>
											</li>
										</ul>
									</li>
									<li>
										<h2>Arkiv</h2>
										<ul>
		
										</ul>
									</li>
									<li class="categories">
										<h2>Kategorier</h2>
										<ul>

                                        <?php  wp_list_categories(' '); ?> 

										</ul>
									</li>
								</ul>
<?php endif; ?>

