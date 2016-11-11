<?php 
$I = new AcceptanceTester($scenario);
$I->wantTo('Purchase a produtct with billet');

Page\CustomerLogin::of($I)->doLogin();
Page\ProductView::of($I)->addProductToCart();
Page\Checkout::of($I)->setShipping();
Page\Checkout::of($I)->payWithCreditCard();
Page\Checkout::of($I)->seeSuccessPage();

