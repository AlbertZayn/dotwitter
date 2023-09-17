<div class="container PageContainer">
    <div class="row explore-row">

        <!-- LEFT SIDEBAR -->
        <?php echo $leftSidebar; ?>

        <!--TWEET HEADER -->
        <div class="col col-lg-5 TweetFeedColumn">
            <div class="home-feed-header">
                <span>Home</span>
            </div>
            <!--TWEET POST-->
            <div class="modal-dialog modal-dialog-steps">
                <div class="modal-content tweet-home-form">
                    <div class="modal-header tweet-steps-header">
                        <div class="profile-fillet">
                            <ul class="nav nav-underline nav-fillet">
                                <li class="nav-item fillet-home-item">
                                    <a class="nav-link fillet-link" href="#">For you</a>
                                </li>
                                <li class="nav-item fillet-home-item">
                                    <a class="nav-link fillet-link" href="#">Your follows</a>
                                </li>
                            </ul>
                        </div>
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
            <!--TWEET FEED-->
            <?php echo $tweetsFeed; ?>
        </div>
        <!--RIGHT SIDEBAR -->
        <?php echo $rightSidebar ?>
    </div>
</div>