    @if (Config::get('header.show-hidden-top-area'))        
    <div id="Sliding-top">
        <div class="widgets_wrapper">
            <div class="container">
                <div class="one-fourth column">
                    <!-- Login form -->
                    <aside id="widget_mfn_login-2" class="widget widget_mfn_login">
                        <div class="mfn-login">
                            <h4>Login | Register</h4>
                            <form name="loginform" id="loginform" action="#" method="post">
                                <p class="login-username">
                                    <label for="user_login">Username</label>
                                    <input type="text" name="log" id="user_login" class="input" value="" size="20" />
                                </p>
                                <p class="login-password">
                                    <label for="user_pass">Password</label>
                                    <input type="password" name="pwd" id="user_pass" class="input" value="" size="20" />
                                </p>
                                <p class="login-submit">
                                    <input type="submit" name="wp-submit" id="wp-submit" class="button-primary" value="Log In" />
                                    <input type="hidden" name="redirect_to" value="#" />
                                </p>
                            </form>
                            <div class="links">
                                <a href="#">Register</a><span class="sep">|</span><a href="#">Lost your password?</a>
                            </div>
                        </div>
                    </aside>
                </div>
                <div class="one-fourth column">
                    <!-- Text Area -->
                    <aside id="text-10" class="widget widget_text">
                        <div class="textwidget">
                            <p>
                                <span class="big">We reply on all questions within</span>
                            </p><span class="themecolor flv_header_number">24 h</span>
                            <div class="hr_dots flv_dots">
                                <span></span><span></span><span></span>
                            </div>
                            <p class="flv_center">
                                <span class="flv_grey">We offer support for our customers</span>
                                <br>
                                <b><i class="icon-clock"></i> Mon - Fri 8:00am - 6:00pm <span class="tooltip" data-tooltip="we are located in Europe" >(GMT +1)</span> </b>
                            </p>
                        </div>
                    </aside>
                </div>
                <div class="one-fourth column">
                    <!-- Text Area -->
                    <aside id="text-11" class="widget widget_text">
                        <div class="textwidget">
                            <h5 class="flv_margin_b_5"><i class="icon-mail-line"></i> Our address:</h5>
                            <p class="flv_margin_l_26">
                                <strong>Envato</strong>
                                <br> Level 13, 2 Elizabeth St,
                                <br> Melbourne, Victoria 3000 Australia
                            </p>
                            <h5 class="flv_margin_b_5"><i class="icon-phone"></i> Have any questions?</h5>
                            <p class="flv_margin_l_26">
                                <a href="mailto:noreply@envato.com">noreply@envato.com</a>
                            </p>
                            <h5 class="flv_margin_b_5"><i class="icon-comment-line"></i> Call us:</h5>
                            <p class="flv_margin_l_26">
                                <a href="tel:+61791803458">+61 (0) 7 9180 3458</a>
                            </p>
                        </div>
                    </aside>
                </div>
                <div class="one-fourth column">
                    <!-- Text Area -->
                    <aside id="text-12" class="widget widget_text">
                        <div class="textwidget"><img src="images/logo_footer.png" alt="">
                            <p>
                                <span class="big">We love who we are and we are very proud to be the part of your business</span>
                            </p>
                            <p>
                                Curabitur sit amet magna quam. Praesent in libero vel <span class="tooltip" data-tooltip="Quis accumsan dolor">turpis pellentesque</span> egestas sit amet vel nunc. Nunc lobortis dui neque quis.
                            </p>
                        </div>
                    </aside>
                </div>
            </div>
        </div>
        <a href="#" class="sliding-top-control"><span><i class="plus icon-down-open-mini"></i><i class="minus icon-up-open-mini"></i></span></a>
    </div>
    @endif
