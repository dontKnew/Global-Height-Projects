<?php

$googleClient = require_once $config['paths']['helpers'] . '/google.php';
$facebook = require_once $config['paths']['helpers'] . '/facebook.php';

$facebookHelper = $facebook->getRedirectLoginHelper();
$permissions = ['email']; // optional
$facebookLoginUrl = $facebookHelper->getLoginUrl(FACEBOOK_REDIRECT_URL, $permissions);

?>

<div class="modal fade" id="modalLoginForm" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
    <div class="modal-dialog" role="document">
        <!-- START - Login Box -->
        <div id="div-login" class="modal-content" style="display:none">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign In</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="frm-login" name="frm-login" autocomplete="off">
                <div class="modal-body mx-3">
                    <div class="alert alert-success" id="login-error" role="alert" style="display:none"></div>
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="email">Email or Username</label>
                        <input type="email" name="email" placeholder="Email" class="form-control validate mb-2">
                    </div>
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="password">Your password</label>
                        <input type="password" name="password" class="form-control validate mb-2">
                    </div>
                    <div class="md-form">
                        <a class="flip-content" data-target="div-forgot" href="#">Forgot Your Password?</a>
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" name="login" class="btn btn-primary btn-md btn-block">Sign In</button>
                    <button type="button" data-target="div-signup" name="signup" class="btn btn-success btn-md flip-content btn-block">Not Registered?</button>
                </div>
            </form>
			<div class="modal-footer">
				<div class="row">
					<div class="col-sm-12 text-center my-2">
						<a href="<?=htmlentities($googleClient->createAuthUrl())?>" class="login-button">
							<img width="70%!important" class="img-fluid" src="<?=$routes['base']?>/assets/img/sign-in-with-google.png" alt="Login with Google">
						</a>
					</div>
<!--					<div class="col-sm-12 text-center my-2">
						<a href="<?=htmlentities($facebookLoginUrl)?>" class="login-button">
							<img width="70%!important" class="img-fluid" src="<?=$routes['base']?>/assets/img/new-facebook-login.png" alt="Login with Facebook">
						</a>
					</div>-->
				</div>
			</div>
        </div>
        <!-- END - Login Box -->
        <!-- START - Signup Box -->
        <div id="div-signup" class="modal-content">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Sign Up</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="frm-signup" name="frm-signup" autocomplete="off">
                <div class="modal-body mx-3">
                    <div class="alert alert-success" id="signup-error" role="alert" style="display:none"></div>
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="email">Email</label>
                        <input type="email" name="email" placeholder="Email" class="form-control validate mb-2">
                    </div>
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="username">Username</label>
                        <input type="text" name="username" placeholder="username" class="form-control validate mb-2">
                    </div>
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="password">Your password</label>
                        <input type="password" name="password" class="form-control validate mb-2">
                    </div>
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="r-password">Re-Type password</label>
                        <input type="password" name="r-password" class="form-control validate mb-2">
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" name="signup" class="btn btn-success btn-md btn-block">Sign Up</button>
                    <button type="button" data-target="div-login" name="login" class="btn btn-primary btn-md flip-content btn-block">Sign In</button>
                </div>
            </form>
			<div class="modal-footer">
				<div class="row">
					<div class="col-sm-12 text-center my-2">
						<a href="<?=htmlentities($googleClient->createAuthUrl())?>" class="login-button">
							<img width="70%!important" class="img-fluid" src="<?=$routes['base']?>/assets/img/sign-in-with-google.png" alt="Login with Google">
						</a>
					</div>
<!--					<div class="col-sm-12 text-center my-2">
						<a href="<?=htmlentities($facebookLoginUrl)?>" class="login-button">
							<img width="70%!important" class="img-fluid" src="<?=$routes['base']?>/assets/img/new-facebook-login.png" alt="Login with Facebook">
						</a>
					</div>-->
				</div>
			</div>
        </div>
        <!-- END - Signup Box -->
        <!-- START - Forgot Password Box -->
        <div id="div-forgot" class="modal-content" style="display:none">
            <div class="modal-header text-center">
                <h4 class="modal-title w-100 font-weight-bold">Forgot Password</h4>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <form method="post" id="frm-forgot-pwd" name="frm-forgot-pwd" autocomplete="off">
                <div class="modal-body mx-3">
                    <div class="alert alert-success" id="forgot-error" role="alert" style="display:none"></div>
                    <div class="md-form">
                        <label data-error="wrong" data-success="right" for="email">Email</label>
                        <input type="email" name="email" class="form-control validate mb-2">
                    </div>
                </div>
                <div class="modal-footer d-flex justify-content-center">
                    <button type="submit" name="forgot" class="btn btn-success btn-md btn-block">Send password reset email</button>
                    <button type="button" data-target="div-login" name="login" class="btn btn-primary btn-md flip-content btn-block">Remember Login?</button>
                </div>
            </form>
			<div class="modal-footer">
				<div class="row">
					<div class="col-sm-12 text-center my-2">
						<a href="<?=htmlentities($googleClient->createAuthUrl())?>" class="login-button">
							<img width="70%!important" class="img-fluid" src="<?=$routes['base']?>/assets/img/sign-in-with-google.png" alt="Login with Google">
						</a>
					</div>
<!--					<div class="col-sm-12 text-center my-2">
						<a href="<?=htmlentities($facebookLoginUrl)?>" class="login-button">
							<img width="70%!important" class="img-fluid" src="<?=$routes['base']?>/assets/img/new-facebook-login.png" alt="Login with Facebook">
						</a>
					</div>-->
				</div>
			</div>
        </div>
        <!-- END - Forgot Password Box -->
    </div>
</div>
