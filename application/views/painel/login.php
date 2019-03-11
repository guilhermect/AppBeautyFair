<style>
.footer-copyright-area {
    margin-top: 0;
}
.login-content:before, .error-page-area:before {
    height: 26vh !important;
}
.login-content, .error-page-area {
    min-height: 84vh !important;
}
.nk-navigation a {
    background: crimson !important;
}
</style>
<script src="<?php echo base_url('public/painel/firebase/login.js') ?>"></script>

<div class="login-content">

        <h2>Seja Bem Vindo(a) !</h2>
        <!-- Login -->
        <div class="nk-block toggled" id="user_div">
            <div class="nk-form">
                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-support"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Username" id="email_field">
                    </div>
                </div>
                <div class="input-group mg-t-15">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-edit"></i></span>
                    <div class="nk-int-st">
                        <input type="password" class="form-control" placeholder="Password" id="pass_field">
                    </div>
                </div>
                
                <button onclick="login()" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></button>
            </div>

            <div class="nk-navigation nk-lg-ic">
                
                <a href="#" data-ma-action="nk-login-switch" data-ma-block="#l-forget-password"><i>?</i> <span>Esqueci a Senha</span></a>
            </div>
        </div>


        <!-- Forgot Password -->
        <div class="nk-block" id="l-forget-password">
            <div class="nk-form">
                <p class="text-left">Digite seu email para recuperarmos a sua senha</p>

                <div class="input-group">
                    <span class="input-group-addon nk-ic-st-pro"><i class="notika-icon notika-mail"></i></span>
                    <div class="nk-int-st">
                        <input type="text" class="form-control" placeholder="Email">
                    </div>
                </div>

                <a href="#user_div" data-ma-action="nk-login-switch" data-ma-block="#user_div" class="btn btn-login btn-success btn-float"><i class="notika-icon notika-right-arrow"></i></a>
            </div>

            <div class="nk-navigation nk-lg-ic rg-ic-stl">
                <a href="" data-ma-action="nk-login-switch" data-ma-block="#user_div"><i class="notika-icon notika-right-arrow"></i> <span>Login</span></a>
            </div>
        </div>
    </div>

    