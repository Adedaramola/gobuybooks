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
                <div class="wrapper">
                    <h1 class="page-width">Checkout</h1>
                </div>
            </div>
        </div>
        <!--End Page Title-->

        <div class="container">
            <div class="row justify-content-center">
                <div class="col-xl-8 col-lg-8 col-md-12 col-sm-12">
                    <div class="messages">
                        <!-- Session Status -->
                        <x-auth-success-status class="mb-4" :success="session('success')" />
                        <x-auth-error-status class="mb-4" :error="session('error')" />
                    </div>
                    <div class="your-order-payment">
                        <div class="your-order">
                            <h2 class="order-title mb-4">Your Order</h2>

                            <div class="table-responsive-sm order-table">
                                <table class="bg-white table table-bordered table-hover text-center">
                                    <thead>
                                        <tr>
                                            <th class="text-left">Product Name</th>
                                            <th>Price</th>
                                            <th>Qty</th>
                                            <th>Subtotal</th>
                                        </tr>
                                    </thead>
                                    <tbody id="checkout_table">

                                    </tbody>
                                    <tfoot class="font-weight-600">
                                        <tr>
                                            <td colspan="3" class="text-right">Total</td>
                                            <td id="total_checkout">NGN 0</td>
                                        </tr>
                                    </tfoot>
                                </table>
                            </div>
                        </div>

                        <hr />

                        @if($user == null)
                        <div class="your-payment">
                            <div class="payment-method">
                                <div class="order-button-payment">
                                    <a href="/login" class="btn">Login</a>
                                </div>
                            </div>
                        </div>
                        @else
                        <div class="your-payment">
                            <div class="payment-method">
                                <input type="hidden" name="_token" id="csrf-token" value="{{ Session::token() }}" />
                                <div class="order-button-payment">
                                    <input type="hidden" id="user_id" value="{{ $user->id }}">
                                    <input type="hidden" id="name" value="{{ $user->name }}">
                                    <input type="hidden" id="email" value="{{ $user->email }}">
                                    <input type="hidden" id="phone" value="{{ $user->phone }}">
                                    <button class="btn" value="Place order" onclick="placeOrder()">Place order</button>
                                </div>
                            </div>
                        </div>
                        @endif
                    </div>
                </div>
            </div>
        </div>

    </div>
    <!--End Body Content-->
    <script src="https://checkout.flutterwave.com/v3.js"></script>

    <script>
    cartData = JSON.parse(localStorage.getItem('cart'));
    let total = 0;
    if (cartData) {
        document.querySelector('#checkout_table').innerHTML = '';
        cartData.forEach(item => {
            total += (parseInt(item.price) * item.quantity);
            document.querySelector('#checkout_table').innerHTML += `<tr>
                    <td class="text-left">${item.name}</td>
                    <td>NGN ${item.price.toLocaleString()}</td>
                    <td>${item.quantity}</td>
                    <td>NGN ${(parseInt(item.quantity) * parseInt(item.price)).toLocaleString()}</td>
                </tr>`;
        });
        document.querySelector('#total_checkout').innerHTML = 'NGN ' + total.toLocaleString();
    }

    function randomString(length, chars) {
        let result = '';
        for (let i = length; i > 0; --i) result += chars[Math.floor(Math.random() * chars.length)];
        return result;
    }

    function placeOrder() {
        let cartData = localStorage.getItem('cart');
        if (!JSON.parse(cartData) || JSON.parse(cartData).length == 0) {
            alert('No item found!!!');
        } else {
            let rString = randomString(8, '0123456789abcdefghijklmnopqrstuvwxyzABCDEFGHIJKLMNOPQRSTUVWXYZ');

            FlutterwaveCheckout({
                public_key: "FLWPUBK-d8b881c2140671ca93ea85900d8dde07-X",
                tx_ref: `gbks-${rString}`,
                amount: total,
                currency: "NGN",
                payment_options: "card, mobilemoneyghana, ussd",
                redirect_url: "/payment",
                meta: {
                    consumer_id: document.querySelector('#user_id').value,
                },
                customer: {
                    email: document.querySelector('#email').value,
                    phone_number: document.querySelector('#phone').value,
                    name: document.querySelector('#name').value,
                },
                customizations: {
                    title: "GoBuyBooks",
                    description: "Payment for book purchase"
                },
            });
        }
    }
    </script>

    @endsection