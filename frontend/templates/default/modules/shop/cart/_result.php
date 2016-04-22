<?php
/**
 * @author Semenov Alexander <semenov@skeeks.com>
 * @link http://skeeks.com/
 * @copyright 2010 SkeekS (СкикС)
 * @date 09.10.2015
 */
?>



<div class="toggle-transparent toggle-bordered-full clearfix">
    <div class="p-10 bg-light-gray" style="display: block;">
        <div class="toggle-content" style="display: block;">
			<h3 class="margin-top-0 margin-bottom-10">Ваш заказ:</h3>
            <span class="clearfix">
                <span class="pull-right"><?= \Yii::$app->money->convertAndFormat(\Yii::$app->shop->shopFuser->moneyOriginal); ?></span>
                <strong class="pull-left">Товаров:</strong>
            </span>
            <? if (\Yii::$app->shop->shopFuser->moneyDiscount->getValue() > 0) : ?>
                <span class="clearfix">
                    <span class="pull-right"><?= \Yii::$app->money->convertAndFormat(\Yii::$app->shop->shopFuser->moneyDiscount); ?></span>
                    <span class="pull-left">аСкидка:</span>
                </span>
            <? endif; ?>

            <? if (\Yii::$app->shop->shopFuser->moneyDelivery->getValue() > 0) : ?>
                <span class="clearfix">
                    <span class="pull-right"><?= \Yii::$app->money->convertAndFormat(\Yii::$app->shop->shopFuser->moneyDelivery); ?></span>
                    <span class="pull-left">Доставка:</span>
                </span>
            <? endif; ?>

            <? if (\Yii::$app->shop->shopFuser->moneyVat->getValue() > 0) : ?>
                <span class="clearfix">
                    <span class="pull-right"><?= \Yii::$app->money->convertAndFormat(\Yii::$app->shop->shopFuser->moneyVat); ?></span>
                    <span class="pull-left">Налог:</span>
                </span>
            <? endif; ?>

            <? if (\Yii::$app->shop->shopFuser->weight > 0) : ?>
                <span class="clearfix">
                    <span class="pull-right"><?= \Yii::$app->shop->shopFuser->weight; ?> г.</span>
                    <span class="pull-left">Вес:</span>
                </span>
            <? endif; ?>

            <hr />

            <span class="clearfix">
                <span class="pull-right size-20"><?= \Yii::$app->money->convertAndFormat(\Yii::$app->shop->shopFuser->money); ?></span>
                <strong class="pull-left">ИТОГ:</strong>
            </span>

            <hr />

            <?= $submit; ?>
        </div>
    </div>
	
	<!-- TOGGLE -->
	<!--<div class=" clearfix">
		
		<div class="toggle nomargin-top">
			<label>Купон</label>
			
			<div class="toggle-content" style="display: none;">
				<p>Укажите код вашего купона.</p>
				
				<form action="#" method="post" class="nomargin">
					<input type="text" id="cart-code" name="cart-code" class="form-control text-center margin-bottom-10" placeholder="Код купона" required="required">
					<button class="btn btn-primary btn-block" type="submit">Получить скидку</button>
				</form>
			</div>
		</div>
		
		
	</div>-->
	<!-- /TOGGLE -->
</div>