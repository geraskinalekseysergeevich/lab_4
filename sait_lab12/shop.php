<?php require 'script.php'?>
			<div class="page_shop shop">
				<div class="shop_container _container">
					<div class="shop_body">
						<div class="shop_header">Featured Plants</div>
						<div class="shop_cards_flexbox">
							<div class="shop_cardsbody">
								<?foreach ($products as $item):?>
									<div class="shop_card">
										<div class="shop_card_image"><img src="<?=$item['img']?>" alt="Kaktus Plants"></div>
										<div class="shop_card_text">	
											<div class="shop_card_name"><?=$item['name']?></div>
											<div class="shop_card_price">IDR <?=$item['price']?></div>
										</div>
									</div>
								<?endforeach?>
							</div>
						</div>
					</div>
				</div>
			</div>