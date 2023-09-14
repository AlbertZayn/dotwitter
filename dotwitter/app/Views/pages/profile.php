<div class="container PageContainer">
    <div class="row explore-row">

        <!-- LEFT SIDEBAR -->
        <?php echo $leftSidebar; ?>

        <!--TWEET FEED -->
        <div class="col col-lg-5 TweetFeedColumn">
            <!--      Profile feed header      -->
            <div class="profile-feed-header">
                <a href="http://45.9.41.41/home">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                         class="bi bi-arrow-left modal-feed-backer" viewBox="0 0 16 16">
                        <path fill-rule="evenodd"
                              d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"
                              fill="black"/>
                    </svg>
                </a>
                <div class="userheader-info">
                    <span class="username-header"><?php echo $_SESSION['user_data']['full_name']; ?></span>
                    <span class="tweets-amount">n posts<!-- ammount of user tweets --></span>
                </div>
            </div>
            <!--      Profile envelope      -->
            <div class="envelope">

            </div>
            <!--      Profile avatar      -->
            <div class="user-profile-box">
                <div class="sidebar-user-icon user-profile-icon">
                    <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                </div>
            </div>
            <!--      Profile change btn       -->
            <div class="changeinfo-btn-box">
                <button type="button" class="changeinfo-btn" data-bs-toggle="modal"
                        data-bs-target="#changeInfoModal">
                    Change profile info
                </button>
            </div>
            <!--      Profile modal window       -->
            <div class="modal fade" id="changeInfoModal" tabindex="-1"
                 aria-labelledby="ModalScrlTitle" style="display: none;" aria-modal="true" role="dialog">
                <div class="modal-dialog modal-dialog-scrollable">
                    <div class="modal-content modal-profile-window">
                        <div class="profile-info-header">
                            <div class="profile-info-header-left">
                                <svg class="modal-closer" width="24" height="24" fill="none"
                                     xmlns="http://www.w3.org/2000/svg" data-bs-dismiss="modal">
                                    <path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5Z"
                                          fill="black"/>
                                </svg>
                                <h1 class="modal-title fs-5" id="ModalScrlTitle">Change profile</h1>
                            </div>
                            <div class="profile-info-header-right">
                                <button type="submit" class="save-info-btn">Save</button>
                            </div>
                        </div>
                        <div class="modal-body modal-profile-info">
                            <div class="envelope-modal">

                            </div>
                            <div class="sidebar-user-icon user-profile-icon">
                                <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                            </div>
                            <div class="form-floating mb-3 modal-profile-fullname">
                                <input type="text" name="fullname" class="form-control fullname-input"
                                       placeholder="name@example.com">
                                <label for="fullname">Fullname</label>
                            </div>
                            <div class="form-floating mb-3 modal-profile-bio">
                                <input type="text" name="bio" class="form-control bio-input"
                                       placeholder="name@example.com">
                                <label for="bio">Bio</label>
                            </div>
                            <div class="form-floating mb-3 modal-profile-box">
                                <input type="text" name="location" class="form-control location-input"
                                       placeholder="name@example.com">
                                <label for="location">Location</label>
                            </div>
                            <div class="form-floating mb-3 modal-profile-box">
                                <input type="text" name="web-site" class="form-control web-site-input"
                                       placeholder="name@example.com">
                                <label for="web-site">Web-site</label>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="profile-userbar">
                <span class="profile-userbar-fullname"><?php echo $_SESSION['user_data']['full_name']; ?></span>
                <span class="profile-userbar-username">@<?php echo $_SESSION['user_data']['username']; ?></span>
            </div>
            <div class="profile-registeration-date">
                <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="rgb(83, 100, 113)"
                     class="bi bi-calendar4-week profile-calendar" viewBox="0 0 16 16">
                    <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v1h14V3a1 1 0 0 0-1-1H2zm13 3H1v9a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V5z"/>
                    <path d="M11 7.5a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-2 3a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1zm-3 0a.5.5 0 0 1 .5-.5h1a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-1a.5.5 0 0 1-.5-.5v-1z"/>
                </svg>
                <span>Registration date:<!--month of registration--> month <!--year of registration-->year</span>
            </div>
            <div class="profile-follow-bar">
                <span class="profile-follows"><span class="numFollows"><!--user follows-->n</span> follows</span>
                <span class="profile-followers"><span class="numFollowers"><!--user followers-->n</span> followers</span>
            </div>
            <div class="profile-fillet">
                <ul class="nav nav-underline nav-fillet">
                    <li class="nav-item fillet-item">
                        <a class="nav-link fillet-link" href="#">Posts</a>

                    </li>
                    <li class="nav-item fillet-item">
                        <a class="nav-link fillet-link" href="#">Replies</a>
                    </li>
                    <li class="nav-item fillet-item">
                        <a class="nav-link fillet-link" href="#">Media</a>
                    </li>
                    <li class="nav-item fillet-item">
                        <a class="nav-link fillet-link" href="#">Likes</a>
                    </li>
                </ul>
            </div>
            <?php echo $tweetsFeed; ?>
        </div>

        <!--RIGHT SIDEBAR -->
        <div class="col col-lg-4 RightSidebar">
            <div class="right-sidebar-functionality">

            </div>
        </div>
    </div>
</div>