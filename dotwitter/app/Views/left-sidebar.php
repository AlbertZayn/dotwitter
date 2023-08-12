<div class="left-sidebar col col-lg-3">
    <div class="LeftSidebarBox">

        <a href="#" class="left-sidebar-anchor bird-icon">
            <img class="sidebar-icon img-fluid"
                 src="https://cdn.iconscout.com/icon/free/png-256/free-twitter-241-721979.png"
                 width="28.4" height="23.1"
                 alt="...">
        </a>

        <a class="left-sidebar-anchor home-anchor"">
            <div class="sidebar-anchor">
                <div class="sidebar-icon">
                    <img class="sidebar-icon img-fluid left-home-icon" src="/images/birdhouse-icon.png" alt="...">
                </div>
                <div class="sidebar-span">
                    <span>Home</span>
                </div>
            </div>
        </a>

        <a href="#" class="left-sidebar-anchor explore-anchor">
            <div class="sidebar-anchor">
                <div class="sidebar-icon">
                    <img class="sidebar-icon img-fluid left-explore-icon" src="/images/explore-icon.png" alt="...">
                </div>
                <div class="sidebar-span">
                    <span>Explore</span>
                </div>
            </div>
        </a>

        <a href="#" class="left-sidebar-anchor anon-explore-anchor">
            <div class="sidebar-anchor">
                <div class="sidebar-icon">
                    <img class="sidebar-icon img-fluid left-anonexpl-icon" src="/images/explore-icon.png" alt="...">
                </div>
                <div class="sidebar-span">
                    <span>Explore</span>
                </div>
            </div>
        </a>

        <a href="#" class="left-sidebar-anchor settings-anchor">
            <div class="sidebar-anchor">
                <div class="sidebar-icon">
                    <img class="sidebar-icon img-fluid left-settings-icon" src="/images/settings-icon.png" alt="...">
                </div>
                <div class="sidebar-span">
                    <span>Settings</span>
                </div>
            </div>
        </a>

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

        <div class="sidebar-tweet">
            <button class="tweet-btn">Tweet</button>
        </div>

        <a href="#" class="left-userbar-anchor">
            <div class="userbar-anchor">
                <div class="sidebar-user-icon">
                    <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                </div>
                <div class="sidebar-user">
                    <span>Fullname</span>
                    <span>@Username</span>
                </div>
            </div>
        </a>

    </div>
</div>

<script>
    document.addEventListener("DOMContentLoaded", function () {
        let homeIcon = document.querySelector(".left-home-icon");
        let homeAnchor = document.querySelector(".home-anchor");

        let profileIcon = document.querySelector(".left-profile-icon");
        let profileAnchor = document.querySelector(".profile-anchor");

        let exploreIcon = document.querySelector(".left-explore-icon");
        let exploreAnchor = document.querySelector(".explore-anchor");

        let anonExpIcon = document.querySelector(".left-anonexpl-icon");
        let anonExpAnchor = document.querySelector(".anon-explore-anchor");

        let settingsAnchor = document.querySelector(".settings-anchor");
        let settingsIcon = document.querySelector(".left-settings-icon");

        let sidebarTweet = document.querySelector(".sidebar-tweet");
        let leftUserbar = document.querySelector(".left-userbar-anchor");
        let leftSideBirdIcon = document.querySelector(".bird-icon");

        function updateHomeStyles() {
            homeIcon.src = "/images/birdhouse-icon-clicked.png";
            homeAnchor.style.fontWeight = "700";
            anonExpAnchor.style.display = "none";
        }
        function updateProfileStyles() {
            profileIcon.src = "/images/profile-icon-clicked.png";
            profileAnchor.style.fontWeight = "700";
            anonExpAnchor.style.display = "none";
        }
        function updateExploreStyles() {
            exploreIcon.src = "/images/explore-icon-clicked";
            exploreAnchor.style.fontWeight = "700";
            anonExpAnchor.style.display = "none";
        }

        function updateAnonExpStyles() {
            anonExpIcon.src = "/images/explore-icon-clicked";
            anonExpAnchor.style.fontWeight = "700";
            profileAnchor.style.display = "none";
            homeAnchor.style.display = "none";
            sidebarTweet.style.display = "none";
            leftUserbar.style.display = "none";
            exploreAnchor.style.display = "none";
            leftSideBirdIcon.href = "http://45.9.41.41/";
        }

        function updateSettingsStyles() {
            settingsIcon.src = "/images/settings-icon-clicked";
            settingsAnchor.style.fontWeight = "700";
        }

        function resetHomeStyles() {
            homeIcon.src = "/images/birdhouse-icon.png";
            homeAnchor.style.fontWeight = "normal";
        }
        function resetProfileStyles() {
            profileIcon.src = "/images/profile-icon.png";
            profileAnchor.style.fontWeight = "normal";
        }
        function resetExploreStyles() {
            exploreIcon.src = "/images/explore-icon.png";
            exploreAnchor.style.fontWeight = "normal";
        }

        function resetAnonExpStyles() {
            anonExpIcon.src = "/images/explore-icon.png";
            anonExpAnchor.style.fontWeight = "normal";
        }

        function resetSettingsStyles() {
            settingsIcon.src = "/images/settings-icon";
            settingsAnchor.style.fontWeight = "normal";
        }

        if (window.location.href === "http://45.9.41.41/home") {
            updateHomeStyles();
            settingsAnchor.style.display = "none";
        } else if (window.location.href === "http://45.9.41.41/profile") {
            updateProfileStyles();
            settingsAnchor.style.display = "none";
        } else if (window.location.href === "http://45.9.41.41/explore") {
            updateExploreStyles();
            settingsAnchor.style.display = "none";
        } else if (window.location.href === "http://45.9.41.41/anonym-explore") {
            updateAnonExpStyles();
        }

        homeAnchor.addEventListener("click", function (event) {
            event.preventDefault();
            resetHomeStyles();
            resetProfileStyles();
            resetExploreStyles();
            updateHomeStyles();
            window.location.href = "http://45.9.41.41/home";
        });

        profileAnchor.addEventListener("click", function (event) {
            event.preventDefault();
            resetProfileStyles();
            resetHomeStyles();
            resetExploreStyles();
            updateProfileStyles();
            window.location.href = "http://45.9.41.41/profile";
        });

        exploreAnchor.addEventListener("click", function (event) {
            event.preventDefault();
            resetProfileStyles();
            resetHomeStyles();
            resetExploreStyles();
            updateExploreStyles();
            window.location.href = "http://45.9.41.41/explore";
        });

        anonExpAnchor.addEventListener("click", function (event) {
            event.preventDefault();
            resetSettingsStyles();
            updateAnonExpStyles();
            window.location.href = "http://45.9.41.41/anonym-explore";
        });

        settingsAnchor.addEventListener("click", function (event) {
            event.preventDefault();
            resetAnonExpStyles();
            updateSettingsStyles();
            window.location.href = "http://45.9.41.41/anonym-explore";
        })
    });
</script>