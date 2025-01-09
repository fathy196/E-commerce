@extends('layouts.E-commerce')
@section('Content')
        <div class="container container-240">
            
            <div class="myaccount">
                <ul class="breadcrumb v3">
                    <li><a href="#">Home</a></li>
                    <li class="active">My Account</li>
                </ul>
                <div class="row flex pd">
                    <div class="account-element bd-7">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v1">Login</h1>
                        </div>
                        <div class="page-content">
                            <p>Sign in to your account</p>
                            <form class="login-form" method="post" action="#"> 
                                  <div class="form-group">
                                    <label>Username or email address <span class="f-red">*</span></label>
                                      <input type="text" id="author" class="form-control bdr" name="comment[author]" value="">
                                      <label>Password <span class="f-red">*</span></label>
                                      <input type="email" id="email" class="form-control bdr" name="comment[email]" value="">
                                  </div>
                                  <div class="flex lr">
                                      <button type="submit" class="btn btn-submit btn-gradient">
                                          Login
                                      </button>
                                        <div class="checkbox checkbox-default">       
                                          <input id="remember" type="checkbox" value="yes" class="">
                                          <label for="remember"><span class="chk-span" tabindex="2"></span>Remember me</label>      
                                      </div>
                                  </div>
                            </form>
                            <a href="#" class="btn-lostpwd spc">Lost your password?</a>
                        </div>
                    </div>
                    <div class="account-element bd-7 e-left">
                        <div class="cmt-title text-center abs">
                            <h1 class="page-title v1">Register</h1>
                        </div>
                        <div class="page-content">
                            <p>Create your very own account</p>
                            <form class="login-form" method="post" action="#"> 
                                  <div class="form-group">
                                    <label>Username or email address <span class="f-red">*</span></label>
                                      <input type="text" id="author2" class="form-control bdr" name="comment[author]" value="">
                                      <label>Password <span class="f-red">*</span></label>
                                      <input type="email" id="email2" class="form-control bdr" name="comment[email]" value="">
                                  </div>
                                  <div class="flex lr">
                                      <button type="submit" class="btn btn-submit btn-gradient">
                                          Register
                                        </button>
                                  </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
@endsection
       