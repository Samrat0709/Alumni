<?php include './components/script.php' ?>
<?php include './components/styles.php' ?>
<title>Discover</title>



<?php $page = 'settings';
include './components/navbar.php'  ?>

<div id="settings">
    <div class="settings-top">
        <div class="settings-top-left">
            <form action="" method="POST">
                <div class="form-top d-flex align-items-center" style="gap: 2rem;">
                    <div class="profile-pic">
                        <img src="./src/img/dum.jpeg" alt="">
                    </div>
                    <div class="profile-name" style="gap: 0.2rem;">
                        <h5 style="font-size: 0.9rem;">Maszari</h5>
                        <a href="">Change Username</a>
                        <h6 style="font-size: 0.6rem;">
                            <span>
                                <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                    <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                </svg>
                            </span>
                            BATCH OF 2018
                        </h6>
                    </div>
                </div>
                <div class="form-middle">
                    <div class="address">
                        <label for="address">Address</label>
                        <input type="text" id="address" value="Cooch Behar, West Bengal">
                    </div>
                    <div class="bio">
                        <label for="bio">Bio</label>
                        <textarea name="" id="bio" cols="30" rows="10"></textarea>
                    </div>
                    <div class="address">
                        <label for="address">Address</label>
                        <input type="text" id="address" value="Cooch Behar, West Bengal">
                    </div>
                    <div class="address">
                        <label for="address">Address</label>
                        <input type="text" id="address" value="Cooch Behar, West Bengal">
                    </div>
                </div>
                <div class="form-bottom">
                    <div class="account-activity">
                        <div class="activity-check">
                            <input type="checkbox" name="activity" id="people">
                            <label for="people">
                                Choose whether people can see similar account
                                suggestions on your profile, and whether your account
                                can be suggested on other profiles.
                            </label>
                        </div>
                        <div class="activity-check">
                            <input type="checkbox" name="activity" id="email">
                            <label for="email">
                                Turn on Email notifications
                            </label>
                        </div>
                        <div class="activity-check">
                            <input type="checkbox" name="activity" id="private">
                            <label for="private">
                                Make account Private
                            </label>
                        </div>
                        <div class="activity-check">
                            <input type="checkbox" name="activity" id="status">
                            <label for="status">
                                Show activity Status
                            </label>
                        </div>
                    </div>
                </div>
                <input type="submit" class="btn btn-info" value="Save">
            </form>
        </div>
        <div class="settings-top-right">
            <div class="settings-list">
                <ul>
                    <a href="">
                        <li>Edit Profile</li>
                    </a>
                    <a href="">
                        <li>Email notifications</li>
                    </a>
                    <a href="">
                        <li>What you see</li>
                    </a>
                    <a href="">
                        <li>Who can see your content</li>
                    </a>
                    <a href="">
                        <li>How others can interact</li>
                    </a>
                    <a href="">
                        <li>Help</li>
                    </a>
                </ul>
            </div>
        </div>
    </div>
    <div class="help-center">
        <form action="" class="d-flex justify-content-start align-items-center" style="gap: 1rem;">
            <label for="" class="btn btn-custom">Help Centre</label>
            <div class="dropdown">
                <button class="btn btn-custom2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Select an Option
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item active" href="#">Help Center</a></li>
                    <li><a class="dropdown-item" href="#">Account Status</a></li>
                    <li><a class="dropdown-item" href="#">Privacy and security</a></li>
                    <li><a class="dropdown-item" href="#">Support Requests</a></li>
                </ul>
            </div>
        </form>
    </div>
    <div class="settings-text">
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ex ducimus, esse perferendis eos autem, eveniet magnam placeat corrupti quisquam, aliquam cum minus iure voluptas laboriosam possimus saepe. Natus, explicabo?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ex ducimus, esse perferendis eos autem, eveniet magnam placeat corrupti quisquam, aliquam cum minus iure voluptas laboriosam possimus saepe. Natus, explicabo?</p>
        <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Soluta ex ducimus, esse perferendis eos autem, eveniet magnam placeat corrupti quisquam, aliquam cum minus iure voluptas laboriosam possimus saepe. Natus, explicabo?</p>
    </div>
    <div class="account-Reset">
        <form action="" class="d-flex justify-content-start align-items-center" style="gap: 1rem;">
            <label for="" class="btn btn-custom">Account Reset</label>
            <div class="dropdown">
                <button class="btn btn-custom2 dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                    Select an Option
                </button>
                <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton1">
                    <li><a class="dropdown-item active" href="#">Deactivate Account</a></li>
                    <li><a class="dropdown-item" href="#">Freeze Account</a></li>
                    <li><!-- Button trigger modal -->
                        <button type="button" class="btn btn-primary dropdown-item" data-bs-toggle="modal" data-bs-target="#exampleModal">
                            Delete Account
                        </button>
                    </li>
                </ul>
            </div>
        </form>
    </div>


    <!-- Modal -->
    <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="exampleModalLabel">Delete Account</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <form action="" method="POST">
                        <div class="top">
                            <label for="reason">
                                <p>Are you sure you want to delete your account?</p>
                                <p>
                                    We're sorry to see you go! Before you proceed with account deletion, we'd like to understand your reasons better. This will help us improve our services. If you're experiencing any issues or have feedback, please let us know below.
                                </p>
                            </label>
                            <textarea name="" id="reason" cols="30" rows="5" placeholder="Write Text here....."></textarea>
                            <input type="submit" class="btn btn-danger" value="Delete">
                        </div>
                        <div class="bottom">
                            <p>Alternatively, if you'd like a break from our platform without permanently deleting your account, you can deactivate it instead. Deactivation will temporarily hide your profile and data, but you can reactivate it anytime in the future.</p>
                            <input type="submit" class="btn btn-primary" value="Deactivate">
                        </div>
                    </form>
                </div>
                
            </div>
        </div>
    </div>

</div>