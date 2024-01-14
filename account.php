<?php include './components/script.php' ?>
<?php include './components/styles.php' ?>
<title>Account</title>


<?php $page = 'account';
include './components/navbar.php'  ?>

<style>
    .hidden {
        display: none !important;
    }
</style>


<div id="parent">
    <?php $page = 'account';
    include './components/sidebar.php'  ?>
    <div class="content-container">
        <div class="account-content" id="account">
            <div class="account-left">
                <div class="person">
                    <div class="person-details">
                        <div class="profile-pic">
                            <img src="./src/img/dum.jpeg" alt="">
                        </div>
                        <div class="profile-name" style="align-items: center;">
                            <h5>Maszari</h5>
                            <h6>
                                <span>
                                    <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                        <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                    </svg>
                                </span>
                                BATCH OF 2018
                            </h6>
                        </div>
                        <div class="location" style="display: flex; align-items: baseline; gap: 0.4rem;">
                            <svg xmlns="http://www.w3.org/2000/svg" width="16" height="17" viewBox="0 0 16 17" fill="none">
                                <path d="M7.68574 7.53969C8.21629 7.53969 8.64638 7.1096 8.64638 6.57905C8.64638 6.0485 8.21629 5.61841 7.68574 5.61841C7.15519 5.61841 6.7251 6.0485 6.7251 6.57905C6.7251 7.1096 7.15519 7.53969 7.68574 7.53969Z" fill="black" />
                                <path d="M7.68554 1.77563C5.03716 1.77563 2.88232 3.83651 2.88232 6.36871C2.88232 7.57461 3.43199 9.17828 4.51602 11.1353C5.3866 12.7065 6.39377 14.1274 6.91762 14.8344C7.00614 14.9552 7.12188 15.0534 7.25545 15.1211C7.38903 15.1888 7.53668 15.2241 7.68644 15.2241C7.83619 15.2241 7.98385 15.1888 8.11742 15.1211C8.25099 15.0534 8.36673 14.9552 8.45525 14.8344C8.9782 14.1274 9.98627 12.7065 10.8569 11.1353C11.9391 9.17888 12.4887 7.57521 12.4887 6.36871C12.4887 3.83651 10.3339 1.77563 7.68554 1.77563ZM7.68554 8.50013C7.30554 8.50013 6.93408 8.38745 6.61813 8.17634C6.30217 7.96522 6.05592 7.66516 5.9105 7.31409C5.76508 6.96302 5.72703 6.57671 5.80117 6.20402C5.8753 5.83133 6.05829 5.48899 6.32698 5.22029C6.59568 4.9516 6.93802 4.76861 7.31071 4.69448C7.6834 4.62035 8.06971 4.65839 8.42078 4.80381C8.77185 4.94923 9.07191 5.19548 9.28303 5.51144C9.49414 5.82739 9.60682 6.19885 9.60682 6.57885C9.60626 7.08823 9.40367 7.57659 9.04348 7.93678C8.68328 8.29698 8.19492 8.49957 7.68554 8.50013Z" fill="black" />
                            </svg>
                            <h4>Cooch Behar, West Bengal</h4>
                        </div>
                        <div class="qoute">
                            <h5>“Fortune favours the best”</h5>
                        </div>
                    </div>
                    <div class="edit-profile">
                        <a href="edit_profile.php">
                            <svg xmlns="http://www.w3.org/2000/svg" width="19" height="19" viewBox="0 0 19 19" fill="none">
                                <path d="M2 16.25H3.4L12.025 7.625L10.625 6.225L2 14.85V16.25ZM16.3 6.175L12.05 1.975L13.45 0.575C13.8333 0.191667 14.3043 0 14.863 0C15.4217 0 15.8923 0.191667 16.275 0.575L17.675 1.975C18.0583 2.35833 18.2583 2.821 18.275 3.363C18.2917 3.905 18.1083 4.36733 17.725 4.75L16.3 6.175ZM14.85 7.65L4.25 18.25H0V14L10.6 3.4L14.85 7.65ZM11.325 6.925L10.625 6.225L12.025 7.625L11.325 6.925Z" fill="black" />
                            </svg>Edit Your Profile
                        </a>
                    </div>

                </div>
            </div>
            <div class="account-right">
                <div class="account-nav">
                    <a href="javascript:void(0)" class="tab activeTab" onclick="showContent('posts')">POSTS</a>
                    <a href="javascript:void(0)" class="tab" onclick="showContent('contributions')">CONTRIBUTION</a>
                    <a href="javascript:void(0)" class="tab" onclick="showContent('saved')">SAVED</a>
                    <a href="javascript:void(0)" class="tab" onclick="showContent('followers')">FOLLOWERS</a>
                    <a href="javascript:void(0)" class="tab" onclick="showContent('following')">FOLLOWING</a>
                </div>
                <div class="container">
                    <div id="posts" class="content">
                        <div class="post">
                            <img src="./src/img/dum_height.jpg" alt="">
                        </div>
                        <div class="post">
                            <img src="./src/img/dum_height.jpg" alt="">
                        </div>
                        <div class="post">
                            <img src="./src/img/dum_height.jpg" alt="">
                        </div>
                        <div class="post">
                            <img src="./src/img/dum_height.jpg" alt="">
                        </div>
                        <div class="post">
                            <img src="./src/img/dum_height.jpg" alt="">
                        </div>
                        <div class="post">
                            <img src="./src/img/dum_height.jpg" alt="">
                        </div>
                        <div class="post">
                            <img src="./src/img/dum_height.jpg" alt="">
                        </div>
                    </div>
                    <div id="contributions" class="content hidden">
                        <div class="contribution">
                            <div class="profile-pic" style="width: 50px; height:50px;">
                                <img src="./src/img/dum.jpeg" alt="">
                            </div>
                            <p>You donated <span>$1.7K</span> in Independence day 2022</p>
                        </div>
                        <div class="contribution">
                            <div class="profile-pic" style="width: 50px; height:50px;">
                                <img src="./src/img/dum.jpeg" alt="">
                            </div>
                            <p>You donated <span>$1.7K</span> in Independence day 2022</p>
                        </div>
                        <div class="contribution">
                            <div class="profile-pic" style="width: 50px; height:50px;">
                                <img src="./src/img/dum.jpeg" alt="">
                            </div>
                            <p>You donated <span>$1.7K</span> in Independence day 2022</p>
                        </div>
                        <div class="contribution">
                            <div class="profile-pic" style="width: 50px; height:50px;">
                                <img src="./src/img/dum.jpeg" alt="">
                            </div>
                            <p>You donated <span>$1.7K</span> in Independence day 2022</p>
                        </div>
                        <div class="contribution">
                            <div class="profile-pic" style="width: 50px; height:50px;">
                                <img src="./src/img/dum.jpeg" alt="">
                            </div>
                            <p>You donated <span>$1.7K</span> in Independence day 2022</p>
                        </div>
                        <div class="contribution">
                            <div class="profile-pic" style="width: 50px; height:50px;">
                                <img src="./src/img/dum.jpeg" alt="">
                            </div>
                            <p>You donated <span>$1.7K</span> in Independence day 2022</p>
                        </div>
                    </div>
                    <div id="saved" class="content hidden">
                        <div class="post-save">
                            <img src="./src/img/dum_width.png" alt="">
                        </div>
                        <div class="post-save">
                            <img src="./src/img/dum_width.png" alt="">
                        </div>
                        <div class="post-save">
                            <img src="./src/img/dum_width.png" alt="">
                        </div>
                        <div class="post-save">
                            <img src="./src/img/dum_width.png" alt="">
                        </div>
                        <div class="post-save">
                            <img src="./src/img/dum_width.png" alt="">
                        </div>
                        <div class="post-save">
                            <img src="./src/img/dum_width.png" alt="">
                        </div>
                    </div>
                    <div id="followers" class="content hidden">
                        <h1>followers</h1>
                    </div>
                    <div id="following" class="content hidden">
                        <h1>following</h1>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function showContent(contentId) {
        // Hide all content elements
        var contents = document.querySelectorAll('.content');
        contents.forEach(function(content) {
            content.classList.add('hidden');
        });

        // Deactivate all tabs
        var tabs = document.querySelectorAll('.tab');
        tabs.forEach(function(tab) {
            tab.classList.remove('activeTab');
        });

        // Show the selected content and activate the corresponding tab
        document.getElementById(contentId).classList.remove('hidden');
        event.currentTarget.classList.add('activeTab');
    }

    // Set the default tab
    document.querySelector('.tab').click();
</script>