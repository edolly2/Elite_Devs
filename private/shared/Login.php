<div class="login-cont">
    <div class="logo-cont">
        <img src="<?php echo url_for('/assets/images/logo.svg'); ?>" alt="EliteDevs Logo" class="form-logo">
        <h2>Login</h2>
        <hr/>
    </div>
    <div class="form-exit-cont">
    <i class="fas fa-window-close form-exit"></i>
    </div>
    <form class="login-form">
        <div class="form-email-pass-cont">
            <div class="form-group">
                <label class="login-label" for="formGroupExampleInput">Email/Username</label>
                <input type="text" class="form-control login-input" id="formGroupExampleInput" placeholder="Email/Username">
            </div>
            <div class="form-group">
                <label class="login-label" for="formGroupExampleInput2">Password</label>
                <input type="text" class="form-control login-input" id="formGroupExampleInput2" placeholder="Password">
            </div>

            <div class="forgot-nomember-cont">
                <p class="forgot"><a href="#">Forgot password?</a></p>
                <p class="nomember"><a href="#">Not a member yet?</a></p>
            </div>
            <div class="remember-submit-cont">
                <div class="form-check mb-2 mr-sm-2">
                    <input class="form-check-input" type="checkbox" id="inlineFormCheck">
                    <label class="form-check-label" for="inlineFormCheck">
                        Remember me
                    </label>
                </div>
    
                <button type="submit" class="btn btn-primary mb-2 submit">Submit</button>
            </div>
        </div>
        
        
        
    </form>

</div>