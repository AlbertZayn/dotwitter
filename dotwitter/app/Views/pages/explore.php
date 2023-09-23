<div class="container PageContainer">
    <div class="row explore-row">

        <!-- LEFT SIDEBAR -->
        <?php echo $leftSidebar; ?>

        <!--TWEET FEED -->
        <div class="col col-lg-5 TweetFeedColumn">
            <div class="explore-feed-header">
                <form method="POST" action="/tweets-search">
                    <div class="input-group mb-3 explore-header-search">
                        <span class="explore-header-search-icon" tabindex="0">
                            <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor"
                                 class="bi bi-search"
                                 viewBox="-10 -10 26 26">
                            <path d="M11.742 10.344a6.5 6.5 0 1 0-1.397 1.398h-.001c.03.04.062.078.098.115l3.85 3.85a1 1 0 0 0 1.415-1.414l-3.85-3.85a1.007 1.007 0 0 0-.115-.1zM12 6.5a5.5 5.5 0 1 1-11 0 5.5 5.5 0 0 1 11 0z"/>
                        </svg>
                        </span>
                        <input type="search" name="search_keyword" class="explore-input-search" placeholder="Search" data-bs-container="body" data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="Search tweets">
                    </div>
                </form>
                <a href="#" class="tweet-feed-icon">
                    <img class="sidebar-icon" src="/images/settings-icon.png" alt="..." width="16" height="16">
                </a>
            </div>
            <?php echo $globalTweetsFeed; ?>
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

