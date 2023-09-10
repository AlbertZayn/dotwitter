<div class="container PageContainer">
    <div class="row explore-row">

        <!-- LEFT SIDEBAR -->
        <?php echo $leftSidebarContent; ?>

        <!--TWEET FEED -->
        <div class="col col-lg-5 TweetFeedColumn">
            <div class="explore-feed-header">
                <span>Explore</span>
                <a href="#" class="tweet-feed-icon">
                    <img class="sidebar-icon" src="/images/settings-icon.png" alt="..." width="16" height="16">
                </a>
            </div>
            <div class="tweet-feed">

            </div>
        </div>

        <!--RIGHT SIDEBAR -->
        <div class="col col-lg-4 RightSidebar">
            <div class="right-sidebar-functionality">

            </div>
        </div>
        <div class="col col-lg-4 AnonRightSidebar">
            <div class="right-sidebar-functionality">
                <span class="right-sidebar-question">New to dotwitter?</span>
                <span class="signup-agreement">Sign up now to get your own personalized timeline</span>
                <button class="signup-btn right-sidebar-signup-btn">Create account</button>
                <div class="SignUp-agreement ">
                <span> By signing up, you are signing an <a
                            style="cursor: pointer; color: rgb(29, 155, 240); text-decoration: none;"
                            href="#">Agreement</a>, that you are not stuffy or nitpicker person</span>
                </div>
                <div class="or">
                    <hr>
                    <span class="or-span">or</span>
                    <hr>
                    <br>
                </div>
                <input type="text" class="right-sidebar-login-functionality" minlength="6" maxlength="50" placeholder="Username"
                       onfocus="" onblur="this.placeholder">
                <input type="password" class="right-sidebar-login-functionality"  minlength="6" maxlength="50" placeholder="Password"
                       onfocus="" onblur="this.placeholder">
                <button class="logIn-btn">Log In</button>
            </div>
        </div>
    </div>
</div>