<div class="left-sidebar col col-lg-3">
    <div class="LeftSidebarBox">
        <!--    Logo    -->
        <a href="#" class="left-sidebar-anchor bird-icon">
            <img class="sidebar-icon img-fluid"
                 src="https://cdn.iconscout.com/icon/free/png-256/free-twitter-241-721979.png"
                 width="28.4" height="23.1"
                 alt="...">
        </a>
        <!--    Home    -->
        <a class="left-sidebar-anchor home-anchor">
            <div class="sidebar-anchor">
                <div class="sidebar-icon">
                    <img class="sidebar-icon img-fluid left-home-icon" src="/images/birdhouse-icon.png" alt="...">
                </div>
                <div class="sidebar-span">
                    <span>Home</span>
                </div>
            </div>
        </a>
        <!--    Explore    -->
        <a class="left-sidebar-anchor explore-anchor">
            <div class="sidebar-anchor">
                <div class="sidebar-icon">
                    <img class="sidebar-icon img-fluid left-explore-icon" src="/images/explore-icon.png" alt="...">
                </div>
                <div class="sidebar-span">
                    <span>Explore</span>
                </div>
            </div>
        </a>

        <!--    Profile    -->
        <a class="left-sidebar-anchor profile-anchor">
            <div class="sidebar-anchor">
                <div class="sidebar-icon">
                    <img class="sidebar-icon img-fluid left-profile-icon" src="/images/profile-icon.png" alt="...">
                </div>
                <div class="sidebar-span">
                    <span>Profile</span>
                </div>
            </div>
        </a>
        <!--    Tweet Modal trigger    -->
        <div class="sidebar-tweet">
            <button type="button" class="tweet-btn" data-bs-toggle="modal" data-bs-target="#tweet-modal">
                Tweet
            </button>
        </div>
        <!--    Tweet Modal window    -->
        <div class="modal fade" id="tweet-modal" tabindex="-1" style="display: none;" aria-hidden="true">
            <div class="modal-dialog modal-dialog-steps">
                <div class="modal-content tweet-modal-content">
                    <div class="modal-header modal-steps-header">
                        <svg class="modal-closer" width="24" height="24" fill="none"
                             xmlns="http://www.w3.org/2000/svg" data-bs-dismiss="modal">
                            <path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5Z"
                                  fill="black"/>
                        </svg>
                    </div>
                    <form method="POST" action="/post-tweet">
                        <div class="modal-body tweet-modal-body">
                            <div class="sidebar-user-icon tweet-modal-useravatar">
                                <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                            </div>
                            <div class="tweet-modal-functionality">
                                <button type="button" class="btn btn-secondary tweet-modal-for" data-bs-container="body"
                                        data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="For all">
                                    For
                                </button>
                                <textarea name="tweet_text" class="form-control tweet-modal-textarea" id="message-text"
                                          placeholder="What's happening" maxlength="280"></textarea>
                            </div>
                        </div>
                        <?php echo $tweetPostFormSvgs ?>
                    </form>
                </div>
            </div>
        </div>
        <!--    Userbar    -->
        <div class="dropdown">
            <a href="#" class="left-userbar-anchor" type="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                <div class="userbar-anchor">
                    <div class="left-sidebar-user-icon">
                        <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                    </div>
                    <div class="sidebar-user">
                        <span class="left-sidebar-fullname"><?php echo $_SESSION['user_data']['full_name']; ?></span>
                        <span class="left-sidebar-username">@<?php echo $_SESSION['user_data']['username']; ?></span>
                    </div>
                </div>
            </a>
            <form method="post" action="/logout">
                <ul class="dropdown-menu">
                    <li>
                        <a class="dropdown-item logOut" href="/logout">Log Out</a>
                    </li>
                </ul>
            </form>
        </div>
    </div>
</div>