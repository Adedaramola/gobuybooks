@extends('layouts.home')

@section('content')

    <div id="pre-loader">
        <img src="{{ asset('images/logo/logo.png') }}" alt="Loading..." />
    </div>
    <div class="pageWrapper">

    @include('partials.header_2')

    <!--Body Content-->
    <div id="page-content">
    	<!--Page Title-->
    	<div class="page section-header text-center">
			<div class="page-title">
        		<div class="wrapper"><h1 class="page-width">Your cart</h1></div>
      		</div>
		</div>
        <!--End Page Title-->
        
        <div class="container">
        	<div class="row">
                <div class="col-12 col-sm-12 col-md-8 col-lg-8 main-col">
                	<form class="cart style2">
                		<table>
                            <thead class="cart__row cart__header">
                                <tr>
                                    <th colspan="2" class="text-center">Product</th>
                                    <th class="text-center">Price</th>
                                    <th class="text-center">Quantity</th>
                                    <th class="text-right">Total</th>
                                    <th class="action">&nbsp;</th>
                                </tr>
                            </thead>
                    		<tbody id="cartTable">
                                
                            </tbody>
                    		<tfoot>
                                <tr>
                                    <td colspan="3" class="text-left"><a href="/shop" class="btn--link cart-continue"><i class="icon icon-arrow-circle-left"></i> Continue shopping</a></td>
                                    <td colspan="3" class="text-right"><button type="submit" name="update" class="btn--link cart-update"><i class="fa fa-refresh"></i> Update</button></td>
                                </tr>
                            </tfoot>
                    </table>
                    
                    <div class="currencymsg">We processes all orders in NGN. While the content of your cart is currently displayed in NGN, the checkout will use NGN at the most current exchange rate.</div>
                    <hr>
                    
                    </form>                   
               	</div>
                <div class="col-12 col-sm-12 col-md-4 col-lg-4 cart__footer">
                	<div class="cart-note">
                    	<div class="solid-border">
							<h5><label for="CartSpecialInstructions" class="cart-note__label small--text-center">Add a note to your order</label></h5>
							<textarea name="note" id="CartSpecialInstructions" class="cart-note__input"></textarea>
						</div>
                    </div>
                    <div class="solid-border">
                      <div class="row">
                      	<span class="col-12 col-sm-6 cart__subtotal-title"><strong>Subtotal</strong></span>
                        <span class="col-12 col-sm-6 cart__subtotal-title cart__subtotal text-right"><span class="money" id="total_checkout">0</span></span>
                      </div>
                      <div class="cart__shipping">Shipping &amp; taxes calculated at checkout</div>
                      <p class="cart_tearm">
                        <label>
                          <input type="checkbox" name="tearm" id="cartTearm" class="checkbox" value="tearm" required="">
                           I agree with the terms and conditions</label>
                      </p>
                      <div class="order-button-payment">
                            <a href="/checkout" class="btn">Checkout</a>
                        </div>
                      <div class="paymnet-img"><img src="{{asset('images/payment-img.jpg')}}" alt="Payment"></div>
                    </div>

                </div>
            </div>
        </div>
        
    </div>
    <!--End Body Content-->

    <script>
        let cartData = JSON.parse(localStorage.getItem('cart'));
        if(cartData){
            document.querySelector('#cartTable').innerHTML = '';
            let total = 0;
            cartData.forEach(item => {
                total += (parseInt(item.price) * item.quantity);
                document.querySelector('#cartTable').innerHTML += `<tr class="cart__row border-bottom line1 cart-flex border-top">
                    <td class="cart__image-wrapper cart-flex-item">
                        <a href="#"><img class="cart__image" src="${item.image}" alt="Clinically Oriented Anatomy"></a>
                    </td>
                    <td class="cart__meta small--text-left cart-flex-item">
                        <div class="list-view-item__title">
                            <a href="#">${item.name}</a>
                        </div>
                    </td>
                    <td class="cart__price-wrapper cart-flex-item">
                        <span class="money">NGN ${item.price.toLocaleString()}</span>
                    </td>
                    <td class="cart__update-wrapper cart-flex-item text-right">
                        <div class="cart__qty text-center">
                            <div class="qtyField">
                                <input class="cart__qty-input qty" type="text" onchange="editTotal(${item.id}, ${item.price})" id="qty${item.id}" value="${item.quantity}" pattern="[0-9]*">
                            </div>
                        </div>
                    </td>
                    <td class="text-right small--hide cart-price">
                        <div><span class="money" id="totTab${item.id}">NGN ${(parseInt(item.quantity) * parseInt(item.price)).toLocaleString()}</span></div>
                    </td>
                    <td class="text-center small--hide" onclick="removeItem('${item.id}')"><a href="#" class="btn btn--secondary cart__remove" title="Remove tem"><i class="icon icon anm anm-times-l"></i></a></td>
                </tr>`;   
            });
            document.querySelector('#total_checkout').innerHTML = 'NGN ' + total.toLocaleString();
        }

        function editTotal(id, price){
            alert('heellp');
            document.querySelector(`#totTab${id}`).innerHTML = (parseInt(document.querySelector(`#qty${id}`).value) * price).toLocaleString();
        }

    </script>
    
@endsection

