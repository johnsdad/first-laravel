@extends('layout.auth')

@section('content')
    <div class="container bg-white rounded mt-3 mb-3 p-4">
        <div class="row">
            <div class="col-md-12 mt-3">

                <section class="mb-5">
                  <div class="container-fluid h-custom">
                    <center><h3 class="mb-4">Login / Register</h3></center>
                    <div class="row d-flex justify-content-center align-items-center h-100">
                      <div class="col-md-9 col-lg-6 col-xl-5">
                        <img src="https://mdbootstrap.com/img/Photos/new-templates/bootstrap-login-form/draw2.png" class="img-fluid"
                          alt="Sample image">
                      </div>
                      <div class="col-md-8 col-lg-6 col-xl-4 offset-xl-1">
                        <form action="login" method="post">
                            @csrf

                          <div class="divider d-flex align-items-center my-4">
                            <p class="text-center fw-bold mx-3 mb-0"></p>
                          </div>

                          <!-- Email input -->
                          <div class="form-outline mb-4">
                            <input type="email" id="form3Example3" class="form-control form-control-lg"
                              placeholder="Enter a valid email address" name="email" />
                            <label class="form-label" for="form3Example3">Email address</label>
                          </div>

                          <!-- Password input -->
                          <div class="form-outline mb-3">
                            <input type="password" id="form3Example4" class="form-control form-control-lg"
                              placeholder="Enter password" name="password" />
                            <label class="form-label" for="form3Example4">Password</label>
                          </div>

                          <div class="d-flex justify-content-between align-items-center">
                            <!-- Checkbox -->
                            <!-- <a href="#!" class="text-body">Forgot password?</a> -->
                            <!-- <a href="/register" class="link-danger">Register</a> -->
                          </div>

                          <div class="text-center text-lg-start mt-4 pt-2">
                            <button type="submit" class="btn btn-primary btn-lg"
                              style="padding-left: 2.5rem; padding-right: 2.5rem;">Login</button>
                            <p class="small fw-bold mt-2 pt-1 mb-0">  </p>
                          </div>

                        </form>
                      </div>
                    </div>
                  </div>
                  
                </section>

                
            </div>
        </div>
    </div>

    <br><br><br>
@stop


