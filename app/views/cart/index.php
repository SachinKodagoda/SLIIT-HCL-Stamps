<!DOCTYPE html>
<!-- Html -->
<html lang="en" xml:lang="en" xmlns="http://www.w3.org/1999/xhtml">
<!-- Head -->

<head>
	<!-- Common Head Components -->
	<?php require APPROOT . '/views/modules/head.php'; ?>
	<!-- Css -->
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/globals.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/cart.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/header.css" />
	<link rel="stylesheet" type="text/css" href="<?php echo URLROOT ?>/css/modules/footer.css" />
</head>
<!-- Body -->

<body>
	<!-- Header -->
	<?php require APPROOT . '/views/modules/header.php'; ?>
	<!-- Main Wrapper -->
	<div class="main_wrapper">
		<div id="all" style="max-width: 1700px; background: red;">
			<div id="back">
				<div id="wrapper2" style="width:75%;min-width:200px; z-index: 100; background-color: white; padding: 10px; position: absolute; margin-left: 8%; margin-right: 8%; margin-top: 20px;">
					<div id="main">


						<div id="system-message-container">
						</div>
						<div id="cart-view" class="cart-view">
							<form method="post" id="checkoutForm" name="checkoutForm" action="https://stamps.lk/index.php/cart">
								<fieldset class="vm-fieldset-pricelist">
									<table class="cart-summary" cellspacing="0" cellpadding="0" border="0" width="100%">
										<tr>
											<th class="vm-cart-item-name">Name</th>
											<th class="vm-cart-item-sku">SKU</th>
											<th class="vm-cart-item-basicprice">Price</th>
											<th class="vm-cart-item-quantity">Quantity</th>
											<th class="vm-cart-item-discount"><span class='priceColor2'>Discount</span></th>
											<th class="vm-cart-item-total">Total</th>
										</tr>


										<tr style="vertical-align: top" class="sectiontableentry1">
											<td class="vm-cart-item-name">
												<input type="hidden" name="cartpos[]" value="0">
												<span class="cart-images">
													<img src="/images/virtuemart/product/resized/0632_0x90.jpg" alt="No image set " /> </span>
												<a href="/index.php/stamps/bicentenary-of-american-revolution-detail">Bicentenary of American Revolution</a>
												<div class="vm-customfield-cart"></div>
											</td>
											<td class="vm-cart-item-sku">SG 632</td>
											<td class="vm-cart-item-basicprice">
												<div class="PricediscountedPriceWithoutTax vm-display vm-price-value"><span class="PricediscountedPriceWithoutTax">$0.70</span></div>
											</td>
											<td class="vm-cart-item-quantity"> <input type="text" onblur="Virtuemart.checkQuantity(this,1,'You can buy this product only in multiples of %s pieces!');" onclick="Virtuemart.checkQuantity(this,1,'You can buy this product only in multiples of %s pieces!');" onchange="Virtuemart.checkQuantity(this,1,'You can buy this product only in multiples of %s pieces!');" onsubmit="Virtuemart.checkQuantity(this,1,'You can buy this product only in multiples of %s pieces!');" title="Update Quantity In Cart" class="quantity-input js-recalculate" size="3" maxlength="4" name="quantity[0]" value="1" />
												<button type="submit" class="vmicon vm2-add_quantity_cart" name="updatecart.0" title="Update Quantity In Cart" data-dynamic-update="1"></button>
												<button type="submit" class="delete" name="delete.0" title="Delete Product From Cart" style="color: red; ">Delete</button>
											</td>
											<td class="vm-cart-item-discount"><span class='priceColor2'>
													<div class="PricediscountAmount vm-nodisplay"><span class="vm-price-desc"></span><span class="PricediscountAmount"></span></div>
												</span></td>
											<td class="vm-cart-item-total">
												<div class="PricesalesPrice vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricesalesPrice">$0.70</span></div>
											</td>
										</tr>

										<tr style="vertical-align: top" class="sectiontableentry2">
											<td class="vm-cart-item-name">
												<input type="hidden" name="cartpos[]" value="1">
												<span class="cart-images">
													<img src="/images/virtuemart/product/resized/0616_0x90.jpg" alt="0616" /> </span>
												<a href="/index.php/stamps/diversion-of-the-mahaweli-river-detail">Diversion of the Mahaweli River</a>
												<div class="vm-customfield-cart"></div>
											</td>
											<td class="vm-cart-item-sku">SG 616</td>
											<td class="vm-cart-item-basicprice">
												<div class="PricediscountedPriceWithoutTax vm-display vm-price-value"><span class="PricediscountedPriceWithoutTax">$0.65</span></div>
											</td>
											<td class="vm-cart-item-quantity"> <input type="text" onblur="Virtuemart.checkQuantity(this,1,'You can buy this product only in multiples of %s pieces!');" onclick="Virtuemart.checkQuantity(this,1,'You can buy this product only in multiples of %s pieces!');" onchange="Virtuemart.checkQuantity(this,1,'You can buy this product only in multiples of %s pieces!');" onsubmit="Virtuemart.checkQuantity(this,1,'You can buy this product only in multiples of %s pieces!');" title="Update Quantity In Cart" class="quantity-input js-recalculate" size="3" maxlength="4" name="quantity[1]" value="1" />
												<button type="submit" class="vmicon vm2-add_quantity_cart" name="updatecart.1" title="Update Quantity In Cart" data-dynamic-update="1"></button>
												<button type="submit" class="delete" name="delete.1" title="Delete Product From Cart" style="color: red; ">Delete</button>
											</td>
											<td class="vm-cart-item-discount"><span class='priceColor2'>
													<div class="PricediscountAmount vm-nodisplay"><span class="vm-price-desc"></span><span class="PricediscountAmount"></span></div>
												</span></td>
											<td class="vm-cart-item-total">
												<div class="PricesalesPrice vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricesalesPrice">$0.65</span></div>
											</td>
										</tr>


										<!--Begin of SubTotal, Tax, Shipment, Coupon Discount and Total listing -->
										<tr>
											<td colspan="4">&nbsp;</td>
											<td colspan="2">
												<hr />
											</td>
										</tr>
										<tr class="sectiontableentry1">
											<td colspan="4" style="text-align: right;">Product prices result</td>
											<td style="text-align: right;"><span class='priceColor2'>
													<div class="PricediscountAmount vm-nodisplay"><span class="vm-price-desc"></span><span class="PricediscountAmount"></span></div>
												</span></td>
											<td style="text-align: right;">
												<div class="PricesalesPrice vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricesalesPrice">$1.75</span></div>
											</td>
										</tr>



										<tr class="sectiontableentry1" style="vertical-align:top;">
											<td colspan="4" style="align:left;vertical-align:top;">
												<fieldset class="vm-payment-shipment-select vm-shipment-select">
													<div class="vm-shipment-plugin-single"><input type="radio" data-dynamic-update="1" name="virtuemart_shipmentmethod_id" id="shipment_id_2" value="2" checked="checked">
														<label for="shipment_id_2"><span class="vmshipment"><span class="vmshipment_name">Normal Post</span></span></label>
													</div>
													<div class="vm-shipment-plugin-single"><input type="radio" data-dynamic-update="1" name="virtuemart_shipmentmethod_id" id="shipment_id_1" value="1">
														<label for="shipment_id_1"><span class="vmshipment"><span class="vmshipment_name">Self pick-up</span><span class="vmshipment_cost fee"> (Fee $2.49)</span></span></label>
													</div>
												</fieldset>
											</td>
											<td style="text-align: right;"></td>
											<td style="text-align: right;"> </td>
										</tr>
										<tr class="sectiontableentry1" style="vertical-align:top;">
											<td colspan="4" style="align:left;vertical-align:top;">
												<fieldset class="vm-payment-shipment-select vm-payment-select">
													<div class="vm-payment-plugin-single"><input type="radio" data-dynamic-update="1" name="virtuemart_paymentmethod_id" id="payment_id_2" value="2">
														<label for="payment_id_2"><span class="vmpayment"><span class="vmpayment_name">Paypal</span> <span style="color:red;font-weight:bold">Sandbox (2)</span><span class="vmpayment_description">Paypal</span></span></label>
													</div>
													<div class="vm-payment-plugin-single"><input type="radio" data-dynamic-update="1" name="virtuemart_paymentmethod_id" id="payment_id_1" value="1" checked="checked">
														<label for="payment_id_1"><span class="vmpayment"> <span class="vmpayment_name">Cash on delivery</span><span class="vmpayment_cost fee"> (Fee $0.15)</span></span></label>
													</div>
												</fieldset>
											</td>
											<td style="text-align: right;"></td>
											<td style="text-align: right;">
												<div class="PricesalesPricePayment vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricesalesPricePayment">$0.15</span></div>
											</td>
										</tr>

										<tr>
											<td colspan="4">&nbsp;</td>
											<td colspan="2">
												<hr />
											</td>
										</tr>

										<tr class="sectiontableentry2">
											<td colspan="4" style="text-align: right;">Total:</td>
											<td style="text-align: right;"> <span class='priceColor2'></span> </td>
											<td style="text-align: right;"><strong>
													<div class="PricebillTotal vm-display vm-price-value"><span class="vm-price-desc"></span><span class="PricebillTotal">$1.90</span></div>
												</strong></td>
										</tr>


									</table>
								</fieldset>
								<div id="checkout-advertise-box">
									<div class="checkout-advertise">
									</div>
								</div>
								<fieldset class="vm-fieldset-customer-note">
									<div class="cart customer-note" title="">
										<span class="cart customer-note">Notes and special requests</span>

										<textarea id="customer_note_field" name="customer_note" cols="60" rows="1" class="inputbox" maxlength="2500"></textarea> </div>

								</fieldset>



								</fieldset>

								<div class="checkout-button-top"> <button type="submit" id="checkoutFormSubmit" name="checkout" value="1" class="vm-button-correct" data-dynamic-update="1" style="background:rgb(51, 170, 250); color: black; margin-right: 40%;"><span>Check Out Now</span> </button></div>

								<input type='hidden' name='order_language' value='' />
								<input type='hidden' name='task' value='updatecart' />
								<input type='hidden' name='option' value='com_virtuemart' />
								<input type='hidden' name='view' value='cart' />
							</form>


							<div style="display:none;" id="cart-js" </div> </div> </div> <!-- end main -->
							</div><!-- end wrapper -->



							<div class="wrap"></div>
						</div> <!-- end contentarea -->
					</div><!-- back -->
				</div><!-- all -->
			</div>

		</div>
	</div>
</body>

</html>

</div>
<!-- Footer -->
<?php require APPROOT . '/views/modules/footer.php'; ?>
<!-- JavaScript -->
<script src="https://code.jquery.com/jquery-3.5.1.min.js" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?php echo URLROOT ?>/js/common.js" type="text/javascript"></script>
<script src="<?php echo URLROOT ?>/js/cart.js" type="text/javascript"></script>
</body>

</html>