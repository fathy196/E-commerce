@extends('layouts.E-commerce')
@section('Content')
        <div class="container container-240">
            
            <div class="myaccount trackorder">

                <div class="row flex pd">
                    <div class="account-element bd-7">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v6">Track your Order</h1>
                        </div>
                        <div class="page-content">
                            <p>To track your order please enter your Order ID in the box below and press the "Track" button. This was given to you on your receipt and in the confirmation email you should have received.</p>
                            <form class="login-form" method="get" action="#"> 
                                  <div class="form-group">
                                    <label>Order ID</label>
                                      <input type="text" id="order" class="form-control bdr" name="comment[order]" value="" placeholder="Found in your order confirmation email.">
                                      <label>Billing email</label>
                                      <input type="email" id="email" class="form-control bdr" name="comment[email]" value="" placeholder="Email you used during checkout.">
                                  </div>
                                  <div class="flex justify-center">
                                      <button type="submit" class="btn btn-submit btn-gradient">
                                          Track
                                      </button>
                                        
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection