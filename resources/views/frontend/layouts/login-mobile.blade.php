<div class="mobilewrapper-user slideout-menu slideout-menu-left" id="mobilewrapperuser">
    <div class="snap-drawers">
        <div class="snap-drawer snap-drawer-right">
            <div class="mobilemenu-close-user">
                <i class="fas fa-times">
                </i>
            </div>
            <div class="login_sidebar">
                <h3 id="login-div-title-mobile">
                    @lang('lang.Login')
                </h3>
                <div class="login_form" id="login-div_mobile">
                    <div class="loginalert" id="login_message_area_mobile">
                    </div>
                    <input autofocus="" class="form-control" id="login_user_mobile" name="log" placeholder="@lang('lang.Username')" type="text">
                        <div class="password_holder">
                            <input class="form-control" id="login_pwd_mobile" name="pwd" placeholder="@lang('lang.Password')" type="password">
                                <i class=" far fa-eye-slash show_hide_password toggle-password" toggle="#login_pwd_mobile">
                                </i>
                            </input>
                        </div>
                        <input id="loginpop_wd_mobile" name="loginpop" type="hidden" value="0">
                            <input id="security-login-mobile" name="security-login-mobile" type="hidden" value="b2ce5f3955-1659598005">
                                <button class="wpresidence_button" id="wp-login-but-mobile">
                                    @lang('lang.Login') 
                                </button>
                                <div class="login-links">
                                    <a href="#" id="widget_register_mobile">
                                        @lang('lang.Needanaccount')? @lang('lang.Registerhere')!
                                    </a>
                                    <a href="#" id="forgot_pass_mobile">
                                        @lang('lang.Forgotpassword')?
                                    </a>
                                    <div class="wpestate_social_login" data-social="facebook" id="facebookloginsidebar_mobile">
                                        @lang('lang.LoginwithFacebook')
                                    </div>
                                    <div class="wpestate_social_login" data-social="google" id="googleloginsidebar_mobile">
                                        @lang('lang.LoginwithGoogle')
                                    </div>
                                    <div class="wpestate_social_login" data-social="twitter" id="twitterloginsidebar_mobile">
                                        @lang('lang.LoginwithTwitter')
                                    </div>
                                    <input class="wpestate_social_login_nonce" type="hidden" value="5fb00335e5">
                                    </input>
                                </div>
                            </input>
                        </input>
                    </input>
                </div>
                <h3 id="register-div-title-mobile">
                    @lang('lang.Register')
                </h3>
                <div class="login_form" id="register-div-mobile">
                    <div class="loginalert" id="register_message_area_mobile">
                    </div>
                    <input autofocus="" class="form-control" id="user_login_register_mobile" name="user_login_register" placeholder="@lang('lang.Username')" type="text">
                        <input class="form-control" id="user_email_register_mobile" name="user_email_register" placeholder="Email" type="email">
                            <div class="password_holder">
                                <input class="form-control" id="user_password_mobile" name="user_password" placeholder="@lang('lang.Password')" type="password">
                                    <i class=" far fa-eye-slash show_hide_password toggle-password" toggle="#user_password_mobile">
                                    </i>
                                </input>
                            </div>
                            <div class="password_holder">
                                <input class="form-control" id="user_password_mobile_retype" name="user_password_retype" placeholder="@lang('lang.RetypePassword')" type="password">
                                    <i class=" far fa-eye-slash show_hide_password toggle-password" toggle="#user_password_mobile_retype">
                                    </i>
                                </input>
                            </div>
                            <select class="form-control" id="new_user_type_mobile" name="new_user_type_mobile">
                                <option value="0">
                                   @lang('lang.SelectUserType') 
                                </option>
                                <option value="1">
                                    User
                                </option>
                                <option value="2">
                                    Agent
                                </option>
                                <option value="3">
                                    Agency
                                </option>
                                <option value="4">
                                    Developer
                                </option>
                            </select>
                            <input id="user_terms_register_mobile" name="terms" type="checkbox">
                                <label for="user_terms_register_mobile" id="user_terms_register_mobile_label">
                                    @lang('lang.Iagreewith') 
                                    <a href="https://wpresidence.net/gdpr-terms-and-conditions/ " id="user_terms_register_mobile_link" target="_blank">
                                    @lang('lang.termsconditions')
                                    </a>
                                </label>
                                <input id="security-register-mobile" name="security-register-mobile" type="hidden" value="63918ef342-1659598005">
                                    <button class="wpresidence_button" id="wp-submit-register_mobile">
                                        @lang('lang.Register')
                                    </button>
                                    <div class="login-links">
                                        <a href="#" id="widget_login_mobile">
                                            @lang('lang.Backtologin')
                                        </a>
                                    </div>
                                </input>
                            </input>
                        </input>
                    </input>
                </div>
                <h3 id="forgot-div-title-mobile">
                    @lang('lang.ResetPassword')
                </h3>
                <div class="login_form" id="forgot-pass-div-mobile">
                    <div class="loginalert" id="forgot_pass_area_mobile">
                    </div>
                    <div class="loginrow">
                        <input autofocus="" class="form-control" id="forgot_email_mobile" name="forgot_email" placeholder="@lang('lang.EnterYourEmailAddress')" size="20" type="email">
                        </input>
                    </div>
                    <input id="security-forgot-mobile" name="security-forgot-mobile" type="hidden" value="d895a497b1">
                        <input name="_wp_http_referer" type="hidden" value="/">
                            <input id="postid-mobile" type="hidden" value="">
                                <button class="wpresidence_button" id="wp-forgot-but-mobile" name="forgot">
                                    @lang('lang.ResetPassword')
                                </button>
                                <div class="login-links shortlog">
                                    <a href="#" id="return_login_mobile">
                                        @lang('lang.Backtologin')
                                    </a>
                                </div>
                            </input>
                        </input>
                    </input>
                </div>
            </div>
        </div>
    </div>
</div>