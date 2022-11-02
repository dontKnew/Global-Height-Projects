    <div class="form-container outer">
        <div class="form-form">
            <div class="form-form-wrap">
                <div class="form-container">
                    <div class="form-content">

                        <h1 class="">Reset Your Passsword</h1>
                        <p class="">Please enter your email address below.We'll send you instructions to reset your password</p>

                        <?=success_alert()?>
                        <?=error_alert()?>

                        <form method="POST" name="frm-frgt-pwd" data-parsley-validate="" class="text-left">
                            <div class="form">
                                <div id="username-field" class="field-wrapper input">
                                    <label for="username">Email</label>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="24" viewBox="0 0 24 24" fill="none" stroke="currentColor" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" class="feather feather-user"><path d="M20 21v-2a4 4 0 0 0-4-4H8a4 4 0 0 0-4 4v2"></path><circle cx="12" cy="7" r="4"></circle></svg>
                                    <input class="form-control" type="text" name="email" placeholder="Enter Your Email" id="email" value="<?=old('email')?>" required data-parsley-type="email" data-parsley-trigger="keyup">
                                    <?=error('email')?>
                                </div>

                                <div class="d-sm-flex justify-content-between">
                                    <div class="field-wrapper">
                                        <button type="submit" name="submit" class="btn btn-primary" value="">Send Instructions</button>
                                    </div>
                                </div>
                            </div>
                        </form>

                    </div>
                </div>
            </div>
        </div>
    </div>
