<div id="modal_login_wrapper">
    <div class="modal_login_back">
    </div>
    <div class="modal_login_container " style="height:550px;">
        <div id="login-modal_close" style="background-image: url({{asset('asset/images/closeicon4.png')}});">
        </div>
        <div class="login-register-modal-image" style="background-image: url('https://wpresidence.net/wp-content/uploads/2021/03/couple-e1614593149217.jpg')">
            <div class="featured_gradient">
            </div>
            <div class="login-register-modal-image_text">
                Welcome to Your Real Estate Website
            </div>
        </div>
        <div class="login-register-modal-form-wrapper">
            <div class="login_form" id="login-div_topbar">
                <div id="login-div-title-topbar">
                    @lang('lang.Signintoyouraccount')
                </div>
                <div class="loginalert" id="login_message_area_topbar">
                </div>
                <input autofocus="" class="form-control" id="login_user_topbar" name="log" placeholder=" @lang('lang.Username')" type="text">
                <div class="password_holder">
                    <input class="form-control" id="login_pwd_topbar" name="pwd" placeholder="@lang('lang.Password')" type="password">
                        <i class=" far fa-eye-slash show_hide_password toggle-password" toggle="#login_pwd_topbar"></i>
                </div>
                <input id="loginpop_wd_topbar" name="loginpop" type="hidden" value="0">
                <input id="security-login-topbar" name="security-login-topbar" type="hidden" value="086547c089-1659586631">
                <button class="wpresidence_button bt_search search_button_use_hover_effect_notrue" id="wp-login-but-topbar">
                   @lang('lang.Login') 
                </button>
                <div class="login-links">
                    <div class="or_social">
                        @lang('lang.or')
                    </div>
                    <div class="wpestate_social_login" data-social="facebook" id="facebookloginsidebar_topbar">
                        @lang('lang.LoginwithFacebook')
                    </div>
                    <div class="wpestate_social_login" data-social="google" id="googleloginsidebar_topbar">
                        @lang('lang.LoginwithGoogle')
                    </div>
                    <div class="wpestate_social_login" data-social="twitter" id="twitterloginsidebar_topbar">
                        @lang('lang.LoginwithTwitter')
                    </div>
                    <input class="wpestate_social_login_nonce" type="hidden" value="5fb00335e5">
                </div>
            </div>
            <div  class="login_form" id="register-div-topbar">
                <div id="register-div-title-topbar"> @lang('lang.Createanaccount') </div>
                <div class="loginalert" id="register_message_area_topbar"></div>
                 <form id="loginform" {{-- action="{{route('user_register')}}" method="post" --}}>
                    @csrf
                        <input autofocus="" class="form-control" id="user_login_register_topbar" name="name" autocomplete="name" placeholder="@lang('lang.Username')" type="text" required>
                        <span class="text-danger fst-italic mt-2  name_error"  style="font-size: 14px;"></span>
                        <input class="form-control " id="user_email_register_topbar" name="email" placeholder="Email" type="email" autocomplete="email" required>
                        <span class="text-danger fst-italic mt-2  email_error" style="font-size: 14px;"></span>
                    <div class="password_holder">
                        <input class="form-control" id="user_password_topbar" name="password" placeholder="@lang('lang.Password')" type="password" autocomplete="current-password" required>
                        <i class=" far fa-eye-slash show_hide_password toggle-password" toggle="#user_password_topbar"></i>
                        </input>
                         <span class="text-danger fst-italic mt-2  password_error" style="font-size: 14px;"></span>
                    </div>
                    <div class="password_holder">
                        <input class="form-control " id="user_password_topbar_retype" name="password_confirmation" placeholder="@lang('lang.RetypePassword')" type="password" autocomplete="current-password" required>
                        <i class=" far fa-eye-slash show_hide_password toggle-password" toggle="#user_password_topbar_retype">
                        </i>
                         <span class="text-danger fst-italic mt-2 confirmed_error" style="font-size: 14px;"></span>
                    </div>
                   {{--  <select class="form-control" id="new_user_type_topbar" name="new_user_type_topbar">
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
                    </select> --}}
                    <input id="user_terms_register_topbar" name="terms" type="checkbox">
                        <label for="user_terms_register_topbar" id="user_terms_register_topbar_label">
                            @lang('lang.Iagreewith')
                            <a href="https://wpresidence.net/gdpr-terms-and-conditions/" id="user_terms_register_topbar_link" target="_blank">
                                 @lang('lang.termsconditions')
                            </a>
                        </label>
                    </input>
                    <input id="security-register-topbar" name="security-register-topbar" type="hidden" value="e5bb0e5a99-1659586631">
                    <button type="submit" class="wpresidence_button bt_search search_button_use_hover_effect_notrue" >
                       @lang('lang.Register')
                    </button>
                </form>
            </div>
            <div class="login_form" id="forgot-pass-div">
                <div id="forgot-div-title-topbar">
                    @lang('lang.ResetPassword')
                </div>
                <div class="loginalert" id="forgot_pass_area_topbar">
                </div>
                <div class="loginrow">
                    <input autofocus="" class="form-control" id="forgot_email_topbar" name="forgot_email" placeholder="@lang('lang.EnterYourEmailAddress')" size="20" type="email">
                    </input>
                </div>
                <input id="security-forgot-topbar" name="security-forgot-topbar" type="hidden" value="6ee03f0713">
                <input name="_wp_http_referer" type="hidden" value="/">
                <input id="postid" type="hidden" value="26087">
                <button class="wpresidence_button bt_search search_button_use_hover_effect_notrue" id="wp-forgot-but-topbar" name="forgot">
                    @lang('lang.ResetPassword')
                </button>
                 
            </div>
            <div class="login_modal_control">
                <a href="#" id="widget_register_topbar">
                    @lang('lang.Registerhere')!
                </a>
                <a href="#" id="forgot_pass_topbar">
                    @lang('lang.Forgotpassword')?
                </a>
                <a href="#" id="widget_login_topbar">
                    @lang('lang.Backtologin')
                </a>
                <a href="#" id="return_login_topbar">
                    @lang('lang.Backtologin')
                </a>
                <input id="loginpop" name="loginpop" type="hidden" value="0">
                </input>
            </div>
        </div>
    </div>
</div>

@section('js')
    <script>
        $(document).ready(function(){
        $.ajaxSetup({ headers: {'X-CSRF-TOKEN': $('meta[name="csrf-token"]').attr('content')}});
        $("#loginform").submit(function(e){
        e.preventDefault();

        var all = $(this).serialize();

        $.ajax({
            url:  '{{route('user_register')}}',
            type: "POST",
            data: all,
            beforeSend:function(){
                $(document).find('span.error-text').text('');
            },

            success: function(data){
                if (data.status==0) {
                    $.each(data.error, function(prefix, val){
                    $('span.'+prefix+'_error').text(val[0]);
                    });
                }
            
                if(data.status == 1){
                    window.alert('Đăng ký thành công');
                    window.location.replace('{{route('home')}}');
                }
            }
        })

        });
    });
    </script>
@endsection