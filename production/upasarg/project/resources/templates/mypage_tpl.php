<section class="contact-section">
    <div class="container">
        <div class="page-title pb-2">
            <h2>My Account</h2>
        </div>
        <div class="row">
            <?php require_once $config['paths']['templates'] . '/includes/sidebar_tpl.php'; ?>
            <div class="col-sm-6">
                <div class="tab-content" id="v-pills-tabContent">
                    <div class="tab-pane fade show active" id="v-pills-home" role="tabpanel" aria-labelledby="v-pills-home-tab">
                        <?=success_alert()?>
                        <?=error_alert()?>
                        <form name="loginform" id="loginform" action="" method="post">
                                <div class="form-group">
                                    <label for="user_fname">First Name</label>
                                    <input type="text" name="user_fname" id="user_fname" class="input form-control" tabindex="1" value="<?=old('user_fname')?>"/>
                                    <?=error('user_fname')?>
                                </div>
                                <div class="form-group">
                                    <label for="user_lname">Last Name</label>
                                    <input type="text" name="user_lname" id="user_lname" class="input form-control" tabindex="2" value="<?=old('user_lname')?>"/>
                                    <?=error('user_lname')?>
                                </div>
                                <div class="form-group">
                                    <label for="user_username">Username <span class="red">*</span></label>
                                    <input type="text" name="user_username" id="user_username" class="input form-control" tabindex="3" value="<?=old('user_username')?>" required />
                                    <?=error('user_username')?>
                                </div>
                                <div class="form-group">
                                    <label for="user_email">Email <span class="red">*</span></label>
                                    <input type="email" name="user_email" id="user_email" class="input form-control" tabindex="4" value="<?=old('user_email')?>" required />
                                    <?=error('user_email')?>
                                </div>
                                <div class="form-group">
                                    <label for="password">Password</label>
                                    <input type="password" name="user_password" id="user_password" class="input form-control" tabindex="5" value=""/>
                                    <?=error('user_password')?>
                                </div>
                                <div class="form-group">
                                    <label for="confirm_password">Confirm Password</label>
                                    <input type="password" name="confirm_password" id="confirm_password" class="input form-control" tabindex="6" value=""/>
                                    <?=error('confirm_password')?>
                                </div>
                                <div class="form-group">
                                    <td colspan='2' style="padding-left:95px;">
                                    <br>
                                        <button type="submit" name="submit" id="submit" class="btn btn-primary" value="Update" tabindex="6">Update</button>
                                    </label>
                                </div>
                        </form>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
