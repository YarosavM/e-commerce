<?php
/*
  * Template name: Catalog Grid
  * */
get_header();

?>

<main class="cat-main">
	<div class="row grid-x">
		<div class="columns large-3 medium-3 small-12 sidebar-filter">
			<div class="sidebar-filter-caption">Filters</div>
			<div class="sidebar-filter-content">
				<div class="filter-section">

					<legend class="filter-section-caption">From</legend>
					<div class="filter-section-options-zone">
						<div class="filter-section-option">
							<input id="or-fr" type="checkbox" class="my-checkbox checkbox-origin">
							<label for="or-fr">France</label>
						</div>
						<div class="filter-section-option">
							<input id="or-it" type="checkbox" class="my-checkbox checkbox-origin">
							<label for="or-it">Italy</label>
						</div>
						<div class="filter-section-option">
							<input id="or-es" type="checkbox" class="my-checkbox checkbox-origin">
							<label for="or-es">Spain</label>
						</div>
						<div class="filter-section-option">
							<input id="or-pl" type="checkbox" class="my-checkbox checkbox-origin">
							<label for="or-pl">Poland</label>
						</div>

						<input type="submit" class="button black-button button-clear" value="Clear all" id="clear-origin">
					</div>

					<legend class="filter-section-caption">Gender</legend>
					<div class="filter-section-options-zone">
						<div class="filter-section-option">
							<input id="women" type="checkbox" class="my-checkbox checkbox-gender">
							<label for="women">Women</label>
						</div>
						<div class="filter-section-option">
							<input id="men" type="checkbox" class="my-checkbox checkbox-gender">
							<label for="men">Men</label>
						</div>
						<div class="filter-section-option">
							<input id="kids" type="checkbox" class="my-checkbox checkbox-gender">
							<label for="kids">Kids</label>
						</div>

						<input type="submit" class="button black-button button-clear" value="Clear all" id="clear-gender">
					</div>

					<legend class="filter-section-caption">Price</legend>
					<div class="filter-section-options-zone">
						<div class="filter-section-option grid-x row">
							<div class="cell small-12 medium-6 large-6 filter-section-option-group">
								<input class="option-group-element-price" type="text" name="" placeholder="From">
							</div>
							<div class="cell small-12 medium-6 large-6 filter-section-option-group">
								<input class="option-group-element-price" type="text" name="" placeholder="To">
							</div>
						</div>
					</div>

					<div class="apply-button-zone">
						<input class="button black-button" type="submit" name="" value="Apply">
					</div>

				</div>
			</div>
		</div>
		<div class="columns large-9 medium-9 small-12 product-catalog">
			<div class="row grid-x">
				<div class="columns large-3 medium-4 small-6 product-item-zone">

					<div class="product-item grid-y" id="product-item">
						<div class="cell small-8 medium-8 large-8 prod-item-image">
							<img class="product-image" src="../css/images/example1.jpg">
						</div>
						<div class="cell small-4 medium-4 large-4 prod-item-spec grid-x row">
							<div class="large-12 small-12 medium-12 product-text">Nike trainers Black/Red men</div>
							<div class="large-12 small-12 medium-12 functions-block">
								<a href="#b">
									<input class="button black-button" type="submit" name="" value="11500$">
								</a>
								<a href="#a">
									<img class="func-fav-image" src="../css/images/icons/pack2/favorite-2.png">
								</a>
							</div>
						</div>
					</div>

				</div>
			</div>
		</div>
	</div>
</main>


<?php get_footer();