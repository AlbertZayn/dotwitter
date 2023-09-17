<div class="grid-container container-fluid">
    <div class="row MainPageRow">
        <!--BIRD SIDE-->
        <div class="col-lg-6 MainPageColumns">
            <section class="birdSide">
                <div class="birdSide-container">
                    <img src="/images/birdSide.png" class="img-fluid birdSide-bg-img" alt="#">
                    <svg class="img-fluid birdSide-fr-img" xmlns="http://www.w3.org/2000/svg" width="359" height="292"
                         viewBox="0 0 512 512">
                        <style>svg {
                                fill: #ffffff
                            }</style>
                        <path d="M459.37 151.716c.325 4.548.325 9.097.325 13.645 0 138.72-105.583 298.558-298.558 298.558-59.452 0-114.68-17.219-161.137-47.106 8.447.974 16.568 1.299 25.34 1.299 49.055 0 94.213-16.568 130.274-44.832-46.132-.975-84.792-31.188-98.112-72.772 6.498.974 12.995 1.624 19.818 1.624 9.421 0 18.843-1.3 27.614-3.573-48.081-9.747-84.143-51.98-84.143-102.985v-1.299c13.969 7.797 30.214 12.67 47.431 13.319-28.264-18.843-46.781-51.005-46.781-87.391 0-19.492 5.197-37.36 14.294-52.954 51.655 63.675 129.3 105.258 216.365 109.807-1.624-7.797-2.599-15.918-2.599-24.04 0-57.828 46.782-104.934 104.934-104.934 30.213 0 57.502 12.67 76.67 33.137 23.715-4.548 46.456-13.32 66.599-25.34-7.798 24.366-24.366 44.833-46.132 57.827 21.117-2.273 41.584-8.122 60.426-16.243-14.292 20.791-32.161 39.308-52.628 54.253z"/>
                    </svg>
                </div>
            </section>
        </div>
        <!--LOGIN SIDE-->
        <div class="col-lg-6 MainPageColumns">
            <section class="loginSide">
                <form method="post" action="/login">
                    <div class="container">
                        <div class="row">
                            <div class="col">
                                <img src="https://cdn.iconscout.com/icon/free/png-256/free-twitter-241-721979.png"
                                     height="34.2"
                                     width="42.6" class="img-fluid" alt="...">
                                <h1 class="loginSide-h1">Happening now</h1>
                                <h2 class="loginSide-h2">Join dotwitter today</h2>
                                <div class="loginSide-functionality">
                                    <div class="username-login-box">
                                        <input type="text" id="username-login" name="username" minlength="1"
                                               maxlength="50" placeholder="Username" onfocus=""
                                               onblur="this.placeholder" required>
                                    </div>
                                    <div class="username-password-box">
                                        <input type="password" id="password-login" name="password" minlength="8"
                                               maxlength="50" placeholder="Password" onfocus=""
                                               onblur="this.placeholder" required>
                                    </div>
                                    <button type="submit" class="login-btn">Log In</button>
                                    <div class="or">
                                        <hr>
                                        <span class="or-span">or</span>
                                        <hr>
                                    </div>
                                    <div class="container-fluid">
                                        <div class="signup-btn-box row">
                                            <div class="col-lg-6">
                                                <span class="signup-question">Don't have an account?</span>
                                                <button class="signup-btn modal-btn" data-bs-target="#modal-step1"
                                                        data-bs-toggle="modal">Create account
                                                </button>
                                                <div class="signup-agreement">
                                                <span> By signing up, you are signing an <a
                                                            style="cursor: pointer; color: rgb(29, 155, 240); text-decoration: none;"
                                                            href="#">Agreement</a>, that you are not stuffy or nitpicker person</span>
                                                </div>
                                            </div>
                                            <div class="col-lg-6">
                                                <span class="signup-question">Explore without registration?</span>
                                                <a href="http://45.9.41.41/anonym-explore">
                                                    <button class="signup-btn">Explore</button>
                                                </a>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <footer>
                                    <div>
                                        <a class="footer-spans"
                                           href="https://coda.io/d/dotwitter_dCS56yYS_aJ/General-Description_suy5I#_luqY_">About</a>
                                        <span class="footer-spans">Agreement</span>
                                        <?php
                                        $currentYear = date("Y"); ?>
                                        <a class="footer-spans footer-year"
                                           href="https://dotwrk.com/"><?php
                                            echo '© ' . $currentYear . ' .wrk' ?></a>
                                    </div>
                                </footer>
                            </div>
                        </div>
                    </div>
                </form>
            </section>
        </div>
    </div>
</div>
<!--SignUp Modal Window-->
<!--Step-1-->
<form method="post" action="/register" class="needs-validation" novalidate>
    <div class="modal fade" id="modal-step1" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-steps">
            <div class="modal-content modal-steps-content">
                <div class="modal-header modal-steps-header">
                    <svg class="modal-closer" width="24" height="24" fill="none"
                         xmlns="http://www.w3.org/2000/svg" data-bs-dismiss="modal">
                        <path d="M17.59 5L12 10.59L6.41 5L5 6.41L10.59 12L5 17.59L6.41 19L12 13.41L17.59 19L19 17.59L13.41 12L19 6.41L17.59 5Z"
                              fill="black"/>
                    </svg>
                    <h2 class="modal-h2" contenteditable="false">Step 1 of 2</h2>
                </div>
                <div class="modal-body modal-steps-body">
                    <h1 class="modal-h1">Create your account</h1>
                    <div class="form-floating mb-3 modal-name-box">
                        <input type="text" id="fullname" name="fullname" minlength="1" maxlength="50"
                               class="form-control fullname-input" placeholder="name@example.com" required>
                        <label for="fullname" class="form-label">Fullname</label>
                        <div class="invalid-feedback ValidationFullname">
                            What is your name?
                        </div>
                    </div>
                    <div class="form-floating mb-3 modal-email-box">
                        <input type="email" id="email" name="email" class="form-control email-input"
                               placeholder="name@example.com" required>
                        <label for="email" class="form-label">Email</label>
                        <div class="invalid-feedback ValidationEmail">
                            Please enter a valid email address
                        </div>
                    </div>
                    <div class="form-floating mb-3 modal-username-box">
                        <input type="text" id="username" name="username" minlength="1" maxlength="50"
                               class="form-control username-input" placeholder="name@example.com" required>
                        <label for="username" class="form-label">Username</label>
                        <div class="invalid-feedback ValidationUsername">
                            Please enter your @username
                        </div>
                    </div>
                    <span class="dob-phrase">Date of birth</span>
                    <span class="modal-warning">This will not be shown publicly. Confirm your own age, even if this account is for a business, a pet, or something else.</span>
                    <div class="modal-date-pickers">
                        <div class="month-picker">
                            <select class="form-select date-picker-form">
                                <option disabled selected>Month</option>
                                <option class="option-enabled" value="1">January</option>
                                <option class="option-enabled" value="2">February</option>
                                <option class="option-enabled" value="3">March</option>
                                <option class="option-enabled" value="4">April</option>
                                <option class="option-enabled" value="5">May</option>
                                <option class="option-enabled" value="6">June</option>
                                <option class="option-enabled" value="7">July</option>
                                <option class="option-enabled" value="8">August</option>
                                <option class="option-enabled" value="9">September</option>
                                <option class="option-enabled" value="10">October</option>
                                <option class="option-enabled" value="11">November</option>
                                <option class="option-enabled" value="12">December</option>
                            </select>
                        </div>
                        <div class="day-picker">
                            <select class="form-select date-picker-form">
                                <option disabled selected>Day</option>
                                <?php
                                for ($day = 1; $day <= 31; $day++) {
                                    echo '<option class="option-enabled" value="' . $day . '">' . $day . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                        <div class="year-picker">
                            <select class="form-select date-picker-form" id="year">
                                <option disabled selected>Year</option>
                                <?php
                                for ($year = $currentYear; $year >= $currentYear - 120; $year--) {
                                    echo '<option class="option-enabled" value="' . $year . '">' . $year . '</option>';
                                }
                                ?>
                            </select>
                        </div>
                    </div>
                </div>
                <div class="modal-footer modal-steps-footer">
                    <button type="button" class="modal-next-btn step1-next-btn" data-bs-target="#modal-step2"
                            data-bs-toggle="modal" disabled>
                        Next
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Step-2-->
    <div class="modal fade" id="modal-step2" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-steps">
            <div class="modal-content modal-steps-content">
                <div class="modal-header modal-steps-header">
                    <svg xmlns="http://www.w3.org/2000/svg" width="16" height="16" fill="black"
                         class="bi bi-arrow-left modal-backer" viewBox="0 0 16 16" data-bs-target="#modal-step1"
                         data-bs-toggle="modal">
                        <path fill-rule="evenodd"
                              d="M15 8a.5.5 0 0 0-.5-.5H2.707l3.147-3.146a.5.5 0 1 0-.708-.708l-4 4a.5.5 0 0 0 0 .708l4 4a.5.5 0 0 0 .708-.708L2.707 8.5H14.5A.5.5 0 0 0 15 8z"
                              fill="black"/>
                    </svg>
                    <h2 class="modal-h2">Step 2 of 2</h2>
                </div>
                <div class="modal-body modal-steps-body">
                    <h1 class="modal-h1">You'll need a password</h1>
                    <span class="modal-warning">Make sure it's 8 characters or more</span>
                    <div class="form-floating mb-3 modal-password-box">
                        <input type="password" id="password" name="password" minlength="8" maxlength="50"
                               class="form-control name-input password-creator" placeholder="name@example.com" required>
                        <label for="password">Password</label>
                        <div class="invalid-feedback ValidationPassword">
                            8 characters without spaces
                        </div>
                    </div>
                </div>
                <div class="modal-footer modal-steps-footer">
                    <button type="submit" class="modal-next-btn step2-next-btn" data-bs-target="#modal-final"
                            data-bs-toggle="modal" disabled>
                        Create account
                    </button>
                </div>
            </div>
        </div>
    </div>
    <!--Final-step-->
    <div class="modal fade" id="modal-final" aria-hidden="true" tabindex="-1">
        <div class="modal-dialog modal-dialog-centered modal-dialog-steps">
            <div class="modal-content modal-steps-content">
                <div class="modal-header modal-steps-header">
                    <svg class="modal-closer"></svg>
                </div>
                <div class="modal-body modal-steps-body modal-final-body">
                    <h1 class="modal-h1 ">Account successfully created!</h1>
                </div>
                <div class="modal-footer modal-steps-footer">
                    <button type="button" class="modal-next-btn" data-bs-dismiss="modal">Let's log in!</button>
                </div>
            </div>
        </div>
    </div>
</form>