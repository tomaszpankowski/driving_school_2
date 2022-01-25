<section class="login-s1 container-fluid d-flex align-items-center bg-secondary py-5 minh-100vh">
    <div class="row mx-0 w-100 pt-5 mt-5" id="login-form">
        <div class="col-11 col-sm-8 col-md-6 col-lg-4 col-xxl-3 mx-auto">
            <div class="card bg-black border-teal">
                <div class="card-header">
                    <h6 class="text-teal text-uppercase my-1">
                        Login
                    </h6>
                </div>
                <div class="card-body">
                    <form class="text-start px-3" 
                        autocomplete="off"
                        action=""
                        method="POST">
                        <div class="form-group mb-3">
                            <label class="text-teal mb-2 ms-1">Login</label>
                            <input class="form-control rounded-pill" 
                                type="text" 
                                name="username" 
                                placeholder="User login"
                                maxlength="80"
                                tabindex="1"/>
                        </div>
                        <div class="form-group mb-3">
                            <label class="text-teal mb-2 ms-1">Password</label>
                            <input class="form-control rounded-pill" 
                                type="text" 
                                name="userpass" 
                                placeholder="Enter password"
                                maxlength="80"
                                tabindex="2"/>
                        </div>
                        <div class="w-100 small border-bottom border-teal">
                            <p class="text-teal">
                                Not registered? Register
                                <a href="register.html" class="fw-bold text-decoration-none text-teal">Now</a>
                            </p>
                        </div>
                        <div class="w-100 text-end py-3">
                            <input type="reset" 
                                class="btn btn-outline-light text-teal border-teal rounded-pill me-1" 
                                value="Clear"
                                tabindex="4"/>
                            <input type="submit" 
                                class="btn btn-outline-light text-teal border-teal rounded-pill" 
                                value="Login"
                                name="login"
                                tabindex="3"/>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </div>
</section>