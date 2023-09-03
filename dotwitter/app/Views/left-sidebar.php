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
                    <div class="modal-body tweet-modal-body">
                        <div class="sidebar-user-icon tweet-modal-useravatar">
                            <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                        </div>
                        <div class="tweet-modal-functionality">
                            <button type="button" class="btn btn-secondary tweet-modal-for" data-bs-container="body"
                                    data-bs-toggle="popover" data-bs-placement="bottom" data-bs-content="For all">
                                For
                            </button>
                            <textarea class="form-control tweet-modal-textarea" id="message-text"
                                      placeholder="What's happening"></textarea>
                        </div>
                    </div>
                    <div class="modal-footer tweet-modal-footer">
                        <div class="tweet-group-svg">
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="rgb(29, 155, 240)"
                                 class="bi bi-image tweet-modal-svg" viewBox="-10 -6 36 30">
                                <path d="M6.002 5.5a1.5 1.5 0 1 1-3 0 1.5 1.5 0 0 1 3 0z"/>
                                <path d="M2.002 1a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2V3a2 2 0 0 0-2-2h-12zm12 1a1 1 0 0 1 1 1v6.5l-3.777-1.947a.5.5 0 0 0-.577.093l-3.71 3.71-2.66-1.772a.5.5 0 0 0-.63.062L1.002 12V3a1 1 0 0 1 1-1h12z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="rgb(29, 155, 240)"
                                 class="bi bi-filetype-gif tweet-modal-svg" viewBox="-10 -6 36 30">
                                <path fill-rule="evenodd"
                                      d="M14 4.5V14a2 2 0 0 1-2 2H9v-1h3a1 1 0 0 0 1-1V4.5h-2A1.5 1.5 0 0 1 9.5 3V1H4a1 1 0 0 0-1 1v9H2V2a2 2 0 0 1 2-2h5.5L14 4.5ZM3.278 13.124a1.403 1.403 0 0 0-.14-.492 1.317 1.317 0 0 0-.314-.407 1.447 1.447 0 0 0-.48-.275 1.88 1.88 0 0 0-.636-.1c-.361 0-.67.076-.926.229a1.48 1.48 0 0 0-.583.632 2.136 2.136 0 0 0-.199.95v.506c0 .272.035.52.105.745.07.224.177.417.32.58.142.162.32.288.533.377.215.088.466.132.753.132.268 0 .5-.037.697-.111a1.29 1.29 0 0 0 .788-.77c.065-.174.097-.358.097-.551v-.797H1.717v.589h.823v.255c0 .132-.03.254-.09.363a.67.67 0 0 1-.273.264.967.967 0 0 1-.457.096.87.87 0 0 1-.519-.146.881.881 0 0 1-.305-.413 1.785 1.785 0 0 1-.096-.615v-.499c0-.365.078-.648.234-.85.158-.2.38-.301.665-.301a.96.96 0 0 1 .3.044c.09.03.17.071.236.126a.689.689 0 0 1 .17.19.797.797 0 0 1 .097.25h.776Zm1.353 2.801v-3.999H3.84v4h.79Zm1.493-1.59v1.59h-.791v-3.999H7.88v.653H6.124v1.117h1.605v.638H6.124Z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="rgb(29, 155, 240)"
                                 class="bi bi-ui-radios tweet-modal-svg" viewBox="-10 -6 36 30">
                                <path d="M7 2.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zM0 12a3 3 0 1 1 6 0 3 3 0 0 1-6 0zm7-1.5a.5.5 0 0 1 .5-.5h7a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5h-7a.5.5 0 0 1-.5-.5v-1zm0-5a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zm0 8a.5.5 0 0 1 .5-.5h5a.5.5 0 0 1 0 1h-5a.5.5 0 0 1-.5-.5zM3 1a3 3 0 1 0 0 6 3 3 0 0 0 0-6zm0 4.5a1.5 1.5 0 1 1 0-3 1.5 1.5 0 0 1 0 3z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="rgb(29, 155, 240)"
                                 class="bi bi-emoji-smile tweet-modal-svg" viewBox="-10 -6 36 30">
                                <path d="M8 15A7 7 0 1 1 8 1a7 7 0 0 1 0 14zm0 1A8 8 0 1 0 8 0a8 8 0 0 0 0 16z"/>
                                <path d="M4.285 9.567a.5.5 0 0 1 .683.183A3.498 3.498 0 0 0 8 11.5a3.498 3.498 0 0 0 3.032-1.75.5.5 0 1 1 .866.5A4.498 4.498 0 0 1 8 12.5a4.498 4.498 0 0 1-3.898-2.25.5.5 0 0 1 .183-.683zM7 6.5C7 7.328 6.552 8 6 8s-1-.672-1-1.5S5.448 5 6 5s1 .672 1 1.5zm4 0c0 .828-.448 1.5-1 1.5s-1-.672-1-1.5S9.448 5 10 5s1 .672 1 1.5z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="rgb(29, 155, 240)"
                                 class="bi bi-calendar2-plus tweet-modal-svg" viewBox="-10 -6 36 30">
                                <path d="M3.5 0a.5.5 0 0 1 .5.5V1h8V.5a.5.5 0 0 1 1 0V1h1a2 2 0 0 1 2 2v11a2 2 0 0 1-2 2H2a2 2 0 0 1-2-2V3a2 2 0 0 1 2-2h1V.5a.5.5 0 0 1 .5-.5zM2 2a1 1 0 0 0-1 1v11a1 1 0 0 0 1 1h12a1 1 0 0 0 1-1V3a1 1 0 0 0-1-1H2z"/>
                                <path d="M2.5 4a.5.5 0 0 1 .5-.5h10a.5.5 0 0 1 .5.5v1a.5.5 0 0 1-.5.5H3a.5.5 0 0 1-.5-.5V4zM8 8a.5.5 0 0 1 .5.5V10H10a.5.5 0 0 1 0 1H8.5v1.5a.5.5 0 0 1-1 0V11H6a.5.5 0 0 1 0-1h1.5V8.5A.5.5 0 0 1 8 8z"/>
                            </svg>
                            <svg xmlns="http://www.w3.org/2000/svg" width="36" height="36" fill="rgb(29, 155, 240)"
                                 class="bi bi-geo-alt tweet-modal-svg" viewBox="-10 -6 36 30">
                                <path d="M12.166 8.94c-.524 1.062-1.234 2.12-1.96 3.07A31.493 31.493 0 0 1 8 14.58a31.481 31.481 0 0 1-2.206-2.57c-.726-.95-1.436-2.008-1.96-3.07C3.304 7.867 3 6.862 3 6a5 5 0 0 1 10 0c0 .862-.305 1.867-.834 2.94zM8 16s6-5.686 6-10A6 6 0 0 0 2 6c0 4.314 6 10 6 10z"/>
                                <path d="M8 8a2 2 0 1 1 0-4 2 2 0 0 1 0 4zm0 1a3 3 0 1 0 0-6 3 3 0 0 0 0 6z"/>
                            </svg>
                        </div>
                        <div>
                            <button type="button" class="tweet-modal-btn">Tweet</button>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!--    Userbar    -->
        <div class="dropdown">
            <a href="#" class="left-userbar-anchor" type="button" data-bs-toggle="dropdown"
               aria-expanded="false">
                <div class="userbar-anchor">
                    <div class="sidebar-user-icon">
                        <img class="sidebar-user-avatar img-fluid" src="/images/noavatar-icon" alt="...">
                    </div>
                    <div class="sidebar-user">
                        <span class=""><?php
                            echo $_SESSION['user_data']['full_name']; ?></span>
                        <span class="">@<?php
                            echo $_SESSION['user_data']['username']; ?></span>
                    </div>
                </div>
            </a>
            <ul class="dropdown-menu">
                <li>
                    <form action="/logout"><a class="dropdown-item logOut" href="/logout">Log Out</a></form>
                </li>
            </ul>
        </div>
    </div>
</div>