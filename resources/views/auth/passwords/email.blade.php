<!DOCTYPE HTML>
<html xmlns="http://www.w3.org/1999/xhtml" xml:lang="{{ app()->getLocale() }}" class="{{ app()->getLocale() }}">
    <head xmlns:og="http://ogp.me/ns#" xmlns:fb="http://ogp.me/ns/fb#">
        <meta http-equiv="imagetoolbar" content="false" />
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1" />
        <title>Reset Password -  World of Warcraft</title>
        <link rel="shortcut icon" href="{{ asset_media('/images/meta/favicon.ico') }}" />
        <link rel="stylesheet" type="text/css" media="all" href="{{ asset_media('/css/toolkit/freedomnet-web.min.css') }}" />
        <link rel="stylesheet" type="text/css" media="all" href="{{ asset_media('/css/login/global.min.css') }}" />
        <script type="text/javascript" src="{{ asset_media('/js/third-party/jquery-1.11.0.min.js') }}"></script>
        <script type="text/javascript" src="{{ asset_media('/js/core.min.js') }}"></script>
        <meta name="viewport" content="width=device-width" />

    </head>
    <body class="{{ app()->getLocale() }} login-template web wow WotLK" data-embedded-state="STATE_LOGIN">
        <div class="grid-container wrapper">
            <h1 class="logo" style="height:91px;">Reset Password</h1>

            <div class="hide" id="info-wrapper">
                <h2><strong class="info-title"></strong></h2>

                <p class="info-body"></p><button class="btn btn-block hide visible-phone" id="info-phone-close">Close</button>
            </div>

            <div class="input-container" id="login-wrapper">
                <form action="{{ route('password.email') }}" class=" username-required input-focus" id= "password-form" method="post" name="password-form">
                    @csrf

                    @if (session('status'))
                    <div id="error" class="alert alert-success alert-icon">
                        {{ session('status') }}
                    </div>
                    @endif
                    <div class="control-group{{ $errors->has('email') ? ' control-error text-error' : '' }}">
                        <label class="control-label" for="accountName" id= "accountName-label">E-Mail Address</label>
                        <div class="controls">
                            <input class="input-block input-large" id="accountName" maxlength="320" name="email" placeholder="E-Mail" spellcheck="false" tabindex="1" title="E-Mail" type= "text" value="{{ old('email') }}" required autofocus>
                        </div>
                    </div>

                    <div class="control-group submit">
                        <button class="btn btn-primary btn-large btn-block"
                        data-loading-text="" id="submit" tabindex="1" type= "submit">Send Password Reset Link<i class="spinner-battlenet"></i></button>
                    </div>
                    <ul id="help-links">
                        <li>
                            <a class="btn btn-block btn-large" href= "{{ route('register') }}" rel="external" tabindex="1">Register!<i class="icon-external-link"></i></a>
                        </li>
                    </ul>
                </form>
            </div>

            <footer class="footer footer-eu">
                <div class="lower-footer-wrapper">
                    <div class="lower-footer">
                        <div id="copyright">
                            © World of Warcraft, 2017 г.
                        </div>

                        <div id="legal">
                            <div class="png-fix" id="legal-ratings"></div><span class="clear"><!-- --></span>
                        </div>
                    </div>

                    <div id="marketing-trackers">
                        <div class="marketing-cover"></div>
                    </div>
                </div>
            </footer>
        </div>
    <script type="text/javascript" src="{{ asset_media('/js/embed-0.1.5.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset_media('/js/login/toolkit.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset_media('/js/login/global.min.js') }}"></script>
    <script type="text/javascript" src="{{ asset_media('/js/login/login.min.js') }}"></script>
    </body>
</html>