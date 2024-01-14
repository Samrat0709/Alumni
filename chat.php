<?php include './components/script.php' ?>
<?php include './components/styles.php' ?>
<title>Chat</title>





<style>
    .hidden_inbox {
        display: none !important;
    }

    #inbox .container {
        height: 70vh;
    }

    .row:after,
    .row:before {
        content: " ";
        display: table;
        clear: both;
    }

    .span6 {
        float: left;
        width: 48%;
        padding: 1%;
    }

    .emojionearea-standalone {
        float: right;
    }

    .divOutside {
        height: 20px;
        width: 20px;
        background-position: -1px -26px;
        background-repeat: no-repeat;
        background-image: url(data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABcAAABuCAYAAADMB4ipAAAHfElEQVRo3u1XS1NT2Rb+9uOcQF4YlAJzLymFUHaLrdxKULvEUNpdTnRqD532f+AHMLMc94gqR1Zbt8rBnUh3YXipPGKwRDoWgXvrYiFUlEdIkPPYZ/dAkwox5yQCVt/bzRrBPnt9e+211/etFeDQDu3ArL+/X37OeqmRWoH7+vpItfWawStF1tfXR+zW9xW5ne0p8loOcAKuCdwpRft60C8a+X5zTvebCqcAvmidf1GGHtqhHdpf1qqKzsrKipyensbi4iKWl5cBAMFgEG1tbYhGo2hpadlbmxseHpaDg4MAgI6ODng8HgBAPp/H/Pw8AODatWvo7e2tvUHrui7v3r2L+fl5XL58GVeuXIHH49m1N5/Py0ePHmF0dBQdHR24desWVFXdtYdXAn/48CHm5+dx8+ZNRKPRigEUDpuenpb3799H4YaOnWh5eVmOj48jFoshGo0STdPkwMCAXF5elqV7BgYGpKZpMhqNklgshrGxMbx580Y6gicSCTDGEIvFAADpdBqpVArJZLK4J5lMIpVKIZ1OAwBisRgYY0gkEs6Rp1IphMNh+Hw+AgCGYQAANE0r7in8Xfjm8/lIOBzGq1evnMHX19fR1NRU/D8UCoFzjnA4XFwLh8PgnCMUChXXmpqakM1mUfVBS62xsZHk83lZWi1nz579ZA0AhBDO4A0NDchkMsWSJIRAURRiVy26rktVVUkmk0EgEHAGP3XqFKamppDP56Vpmrhz5w5u374t/X4/OP+w3TRNZLNZ6LoO0zSRz+dlf38/Ll686Jzz8+fPQwiBeDwOt9tNrl+/jkwmU6yaQpVkMhncuHEDbrebxONxCCEQiUScIw8Gg+TBgwdyZGQEyWRSdnV1kVQqJYeGhrC6ugrGGEKhEHp7e3Hy5EmSTCblvXv30NPTg2AwSA6M/vF4HCMjI7b0/yzh8vv9AIBsNrt34aokuQsLC7skt729varkHtqftUFf++FHsrq0QN3eBvp68Tfvf9Mv12oFCYU7G//e9nVuO7dpNbe2W4M//yQr0p8yRvyBo1Zr++lwLcCt7afD/sBRizJGavrB1dDYYh47Htrq+Kb7jBNwxzfdZ44dD201NLaYVUkU7ozQpuAJBkARwnRZpunN5zaa5hJjiXLH05GeiMd7JEM5zzHGNQBGZvk/Iv0yYVWMvK0zKk1Dl6ahW5RQobjqdjy+wEZn9PKF0n2d0csXPL7AhuKq26GECtPQLdPQZVtn1LlB69p7yRVVSEiDEGJwRd12e4+8PR3piRQidnuPvOWKuk0IMSSkwRVV6Np7WVVbSqvGsgSnlKkAFNPQXdrOtuKqcxtcUTUAhmUJnVJmlleJo3CVHmAaOlPUOmYJkxFKibQsSRkXhr4juKIKO2BHVSwcoLrqCVdUYho6K3YYRRWmoUtdey/tgKtK7rUffiQAsLq08MnbNLe2WwBgB/zHzueFyD8nwlIfbvdx8eU0WV1aKD1cVAMs9+F2j9gUPEEKemEJIe3AnXy4XfkBoNKSZHNthWfX31EA69VKttyHVyIOY1wRwmS6tqNsrr31vXo5k/bUu4gT2cp9lhbm0rzCJpeUUrE0vS63+c7/6uXMbDUWl/ssLczNFrVFddUT09AZpUy1LKvO0DVfPrfR9HxqfNbuEe185l9MFX3o6tIC5YpKFLWOfdQQ93Zu49j0+FDCDtjOp1yaOQCYhs4Y40wI05XfWj8yPT40Ua2ey33mEmMTtp2IUEq0nW3FKeJPGPjRp1Iz2QUuLUu66txG9NLVSK3gBZ+C1lcE54oqKOOCK6rm8QU2unu+u1ANuNynvFsBAG1ubbdMQ5eGviMAFDuP0w3sfMpvQEtb24fOQncU1bXl8R7JnOu+ZNv97XxKJwY6+PNPsrm13drObVqUMlMIU5OWpVHOc96Go5lTnV2fzC/VfAozD7HTCa6olBBa1Imlhbmq2lLuQ5xaW6nCPfnln0Yt7bDUhzhps8cfKH5//uTXmvS81OeLdqI/ZoROzSZrHqG/OvOPzxuhK5VgJTvV2bW3EdqJRABwrvvS/kfoSkoZvXT1YEbociHr7vnuYEfogpBFL109HKH/h0fomnXg3Lff79r7/MmvVbWG7gX4QObzc99+Tz7mHKah05KcW6ahQ9feS6cbMCdgt7eBWJagjCuUAC5tZzuouuo0Spm0hElc9R4cbf4bVl8v1p6WUmCuqEwIs34ruxaeeTy4uJVd67As08UVlVmWoG5vA7FLG3WMmHEupVTyW+vh2cn4DADMTsaTuc21LiGEhzHOnQ6gNtMrJSBMCKHkNt999WLi0S7hejEZH81n174WpukiIMw0dKq66p3Bw50RwhUVXFGJKUy28Xal48VkfKrSlWenhsc23q2cEB9SR7iiItwZIbbgHn8AlDFCCMW7laXjqZnHjkNpaubJzNuVpWZCKChjxOMPVH/QlaW0f/G3ZLqWWl6ce/bvlddp7yFD/w8Z+njoX1+GoZMjgzMAMDkyeLAMnRh+uKveJ0YGD4ahEyODFRk6OfrL/hj67GnckaHPng7vjaGzyYmaGDr77KktQ38H8tqx8Wja+WIAAAAASUVORK5CYII=);
    }

    .emojionearea-button {
        opacity: 1 !important;
    }
</style>

<?php $page = 'inbox';
include './components/navbar.php'  ?>

<div id="parent">
    <?php $page = 'inbox';
    include './components/sidebar.php'  ?>
    <div class="content-container">
        <div id="inbox">
            <div class="inbox-content w-100">
                <div class="inbox-top">
                    <div class="inbox-nav">
                        <a href="javascript:void(0)" class="tab_inbox activeTab_inbox" id="ib" onclick="showContent_inbox('inbox_chat_tab')">Inbox</a>
                        <a href="javascript:void(0)" class="tab_inbox" onclick="showContent_inbox('favourites')">
                            Favourites
                            <svg xmlns="http://www.w3.org/2000/svg" width="24" height="25" viewBox="0 0 24 25" fill="none">
                                <path opacity="0.5" fill-rule="evenodd" clip-rule="evenodd" d="M14 22.5H10C6.229 22.5 4.343 22.5 3.172 21.328C2 20.157 2 18.271 2 14.5V10.5C2 6.729 2 4.843 3.172 3.672C4.343 2.5 6.239 2.5 10.03 2.5C10.636 2.5 11.121 2.5 11.53 2.517C11.517 2.597 11.51 2.678 11.51 2.761L11.5 5.595C11.5 6.692 11.5 7.662 11.605 8.443C11.719 9.29 11.98 10.137 12.672 10.829C13.362 11.519 14.21 11.781 15.057 11.895C15.838 12 16.808 12 17.905 12H21.957C22 12.534 22 13.19 22 14.063V14.5C22 18.271 22 20.157 20.828 21.328C19.657 22.5 17.771 22.5 14 22.5Z" fill="#FFBE40" />
                                <path d="M8.85404 14.5229L8.95204 14.6989C9.06004 14.8929 9.11404 14.9889 9.19904 15.0529C9.28304 15.1169 9.38804 15.1409 9.59704 15.1879L9.78804 15.2319C10.526 15.3989 10.895 15.4819 10.983 15.7639C11.071 16.0469 10.819 16.3409 10.316 16.9289L10.186 17.0809C10.043 17.2479 9.97104 17.3309 9.93904 17.4349C9.90704 17.5389 9.91804 17.6499 9.93904 17.8729L9.95904 18.0759C10.035 18.8609 10.073 19.2539 9.84304 19.4279C9.61304 19.6019 9.26804 19.4429 8.57704 19.1249L8.39904 19.0429C8.20204 18.9529 8.10404 18.9069 8.00004 18.9069C7.89604 18.9069 7.79804 18.9529 7.60104 19.0429L7.42304 19.1249C6.73204 19.4439 6.38604 19.6019 6.15704 19.4279C5.92704 19.2539 5.96504 18.8609 6.04104 18.0759L6.06104 17.8729C6.08204 17.6499 6.09304 17.5389 6.06104 17.4349C6.02904 17.3319 5.95704 17.2479 5.81404 17.0809L5.68404 16.9289C5.18104 16.3409 4.92904 16.0469 5.01704 15.7639C5.10504 15.4819 5.47404 15.3989 6.21204 15.2319L6.40204 15.1879C6.61204 15.1409 6.71704 15.1179 6.80204 15.0529C6.88604 14.9889 6.94004 14.8929 7.04804 14.6989L7.14604 14.5229C7.52604 13.8399 7.71604 13.4999 8.00004 13.4999C8.28404 13.4999 8.47404 13.8399 8.85404 14.5229ZM11.51 2.75988L11.5 5.59488C11.5 6.69188 11.5 7.66088 11.605 8.44288C11.719 9.28988 11.98 10.1369 12.672 10.8279C13.362 11.5189 14.21 11.7809 15.057 11.8949C15.838 11.9999 16.808 11.9999 17.905 11.9999H21.957C21.97 12.1549 21.979 12.3209 21.985 12.4999H22C22 12.2319 22 12.0979 21.99 11.9399C21.913 10.9896 21.5822 10.0775 21.032 9.29888C20.938 9.17088 20.874 9.09488 20.747 8.94188C19.954 7.99388 18.91 6.81188 18 5.99988C17.19 5.27588 16.079 4.48488 15.11 3.83788C14.278 3.28288 13.862 3.00488 13.291 2.79788C13.1249 2.73878 12.9561 2.68773 12.785 2.64488C12.401 2.54988 12.027 2.51688 11.5 2.50488L11.51 2.75988Z" fill="#FFBE40" />
                            </svg>
                        </a>
                    </div>
                    <div class="container-msg ">
                        <div id="inbox_chat_tab" class="content_inbox">
                            <div class="chat-container " style="overflow: auto;">
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="chat-msg">
                                <div class="chat-msg-head d-flex justify-content-between align-items-center">
                                    <div class="chat-msg-left d-flex align-items-center" style="gap: 1rem;">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="profile-name" style="gap: 0.2rem;">
                                            <h5 style="font-size: 0.9rem;">Maszari</h5>
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
                                    <div class="chat-msg-right">
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="57" height="13" viewBox="0 0 57 13" fill="none">
                                                    <ellipse cx="6.4248" cy="6.4187" rx="6" ry="6" fill="#404040" />
                                                    <ellipse cx="28.4248" cy="6.4187" rx="6" ry="6" fill="#404040" />
                                                    <ellipse cx="50.4258" cy="6.4187" rx="6" ry="6" fill="#404040" />
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-msg-body h-100" style="overflow: auto;">

                                </div>
                                <div class="chat-msg-bottom">
                                    <form action="" method="POST" enctype="multipart/form-data">

                                        <div class="chat-text">
                                            <label for="emojionearea1">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                                                    <path d="M26.4627 14.0219C26.6555 14.215 26.7638 14.4766 26.7638 14.7494C26.7638 15.0223 26.6555 15.2839 26.4627 15.477L20.9726 20.9676C20.7795 21.1604 20.5179 21.2687 20.2451 21.2687C19.9723 21.2687 19.7107 21.1604 19.5176 20.9676L14.7549 16.2062L9.99216 20.9676C9.79701 21.1495 9.53891 21.2485 9.27222 21.2438C9.00554 21.2391 8.75109 21.131 8.56248 20.9424C8.37387 20.7538 8.26584 20.4993 8.26113 20.2326C8.25643 19.9659 8.35542 19.7078 8.53726 19.5126L14.0275 14.0219C14.2205 13.8291 14.4821 13.7208 14.7549 13.7208C15.0277 13.7208 15.2893 13.8291 15.4824 14.0219L20.2451 18.7834L25.0078 14.0219C25.2009 13.8291 25.4625 13.7208 25.7353 13.7208C26.0081 13.7208 26.2697 13.8291 26.4627 14.0219ZM35 17.4948C35.0006 20.5287 34.2126 23.5108 32.7133 26.1483C31.2139 28.7858 29.0547 30.9882 26.4475 32.5394C23.8404 34.0907 20.8747 34.9374 17.8416 34.9967C14.8085 35.0559 11.8121 34.3255 9.14632 32.8773L3.16373 34.8711C2.74051 35.0122 2.28635 35.0327 1.85215 34.9302C1.41794 34.8277 1.02086 34.6064 0.705396 34.2909C0.389934 33.9754 0.168563 33.5783 0.0660938 33.144C-0.0363754 32.7098 -0.015893 32.2556 0.125245 31.8323L2.11887 25.8492C0.847998 23.5071 0.128667 20.9057 0.0157287 18.2434C-0.0972094 15.581 0.399228 12.9281 1.46719 10.4867C2.53515 8.04541 4.14642 5.88021 6.17816 4.15623C8.2099 2.43225 10.6084 1.19502 13.1909 0.538868C15.7734 -0.117281 18.4715 -0.175017 21.0797 0.370063C23.6878 0.915143 26.1371 2.04864 28.2407 3.68414C30.3443 5.31963 32.0467 7.41393 33.2181 9.80733C34.3895 12.2007 34.999 14.83 35 17.4948ZM32.9412 17.4948C32.9406 15.1259 32.3951 12.7889 31.3469 10.6647C30.2987 8.54037 28.7759 6.68573 26.8963 5.24422C25.0167 3.80272 22.8307 2.813 20.5074 2.35163C18.1841 1.89027 15.7858 1.96963 13.4981 2.58357C11.2103 3.19752 9.09452 4.32959 7.3143 5.8922C5.53407 7.45481 4.13717 9.40606 3.23167 11.595C2.32617 13.7839 1.93634 16.1519 2.09235 18.5156C2.24837 20.8793 2.94603 23.1754 4.13137 25.2263C4.20459 25.3527 4.2501 25.4931 4.26489 25.6384C4.27968 25.7836 4.26341 25.9303 4.21716 26.0688L2.07941 32.4826C2.05925 32.5431 2.05632 32.608 2.07096 32.67C2.0856 32.732 2.11722 32.7888 2.16229 32.8338C2.20736 32.8789 2.26408 32.9105 2.32611 32.9252C2.38814 32.9398 2.45302 32.9369 2.51348 32.9167L8.92157 30.7788C9.0268 30.7442 9.13678 30.7263 9.24755 30.7256C9.42825 30.7266 9.60559 30.7745 9.76226 30.8646C12.1098 32.2241 14.774 32.9411 17.4867 32.9434C20.1994 32.9458 22.8648 32.2334 25.2146 30.8779C27.5645 29.5225 29.5159 27.5719 30.8723 25.2225C32.2287 22.873 32.9422 20.2077 32.9412 17.4948Z" fill="black" />
                                                </svg>
                                            </label>
                                            <textarea id="emojionearea1"></textarea>
                                        </div>

                                        <div class="media-inputs">
                                            <div class="audio">
                                                <label for="voice">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 30 35" fill="none">
                                                        <path d="M15.0008 0C16.102 0 17.1923 0.20575 18.2097 0.605504C19.227 1.00526 20.1513 1.59118 20.93 2.32983C21.7086 3.06848 22.3262 3.94538 22.7476 4.91047C23.169 5.87556 23.3859 6.90994 23.3859 7.95455V14.3182C23.3859 16.4279 22.5025 18.4511 20.93 19.9429C19.3575 21.4347 17.2247 22.2727 15.0008 22.2727C12.777 22.2727 10.6442 21.4347 9.07172 19.9429C7.49922 18.4511 6.6158 16.4279 6.6158 14.3182V7.95455C6.6158 5.84487 7.49922 3.8216 9.07172 2.32983C10.6442 0.838066 12.777 0 15.0008 0ZM0 15.9091H3.37917C3.7855 18.5576 5.18341 20.9788 7.31718 22.7297C9.45094 24.4807 12.1779 25.4443 14.9992 25.4443C17.8204 25.4443 20.5474 24.4807 22.6811 22.7297C24.8149 20.9788 26.2128 18.5576 26.6192 15.9091H30C29.6187 19.1366 28.0926 22.1454 25.672 24.442C23.2514 26.7386 20.08 28.1867 16.6778 28.5489V35H13.3238V28.5489C9.92141 28.1871 6.7496 26.7391 4.32865 24.4424C1.90771 22.1458 0.381373 19.1368 0 15.9091Z" fill="black" />
                                                    </svg>
                                                </label>
                                                <input type="file" id="voice" name="voice" accept="audio/*">
                                            </div>
                                            <div class="iamge">
                                                <label for="media"><svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
                                                        <path d="M23.1059 10.2104H23.1243M15.7373 34.1574H6.52647C5.06076 34.1574 3.65508 33.5752 2.61867 32.5388C1.58225 31.5025 1 30.0968 1 28.6312V6.52624C1 5.06059 1.58225 3.65497 2.61867 2.6186C3.65508 1.58223 5.06076 1 6.52647 1H28.6324C30.0981 1 31.5037 1.58223 32.5402 2.6186C33.5766 3.65497 34.1588 5.06059 34.1588 6.52624V16.6577" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M1 24.9466L10.2108 15.7362C11.9203 14.0912 14.0277 14.0912 15.7373 15.7362L19.4216 19.4204M28.2639 33.8199L24.2628 35.9162C24.144 35.978 24.0104 36.0055 23.8769 35.9958C23.7434 35.9861 23.6153 35.9395 23.5067 35.8611C23.3982 35.7828 23.3136 35.6758 23.2623 35.5522C23.211 35.4285 23.1951 35.2931 23.2164 35.1609L23.9809 30.7197L20.7442 27.5752C20.6476 27.4818 20.5792 27.3632 20.5468 27.2328C20.5144 27.1024 20.5194 26.9655 20.5611 26.8378C20.6027 26.71 20.6795 26.5966 20.7826 26.5104C20.8857 26.4242 21.0109 26.3687 21.144 26.3503L25.6167 25.7018L27.6173 21.6622C27.6772 21.5418 27.7694 21.4406 27.8836 21.3698C27.9978 21.2991 28.1295 21.2616 28.2639 21.2616C28.3983 21.2616 28.53 21.2991 28.6442 21.3698C28.7585 21.4406 28.8507 21.5418 28.9105 21.6622L30.9111 25.7018L35.3839 26.3503C35.5166 26.3693 35.6413 26.4252 35.7439 26.5115C35.8465 26.5978 35.923 26.711 35.9646 26.8385C36.0062 26.9659 36.0112 27.1025 35.9793 27.2327C35.9473 27.3629 35.8795 27.4816 35.7836 27.5752L32.5469 30.7197L33.3096 35.1591C33.3325 35.2915 33.3178 35.4276 33.2672 35.5521C33.2166 35.6765 33.1321 35.7843 33.0233 35.8631C32.9145 35.942 32.7858 35.9888 32.6518 35.9981C32.5178 36.0075 32.3838 35.9791 32.2651 35.9162L28.2639 33.8199Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </label>
                                                <input type="file" id="media" name="media" accept="image/*,video/*">
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                        <div id="favourites" class="content_inbox hidden_inbox">
                            <div class="chat-container " style="overflow: auto;">
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>
                                <a href="chat.php" class="chat">
                                    <div class="chat-left">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="details">
                                            <div class="profile-name" style="gap: 0.2rem;">
                                                <h5 style="font-size: 0.9rem;">Maszari</h5>
                                                <h6 style="font-size: 0.6rem;">
                                                    <span>
                                                        <svg xmlns="http://www.w3.org/2000/svg" width="13" height="14" viewBox="0 0 13 14" fill="none">
                                                            <path d="M3.82433 10.5381L6.37193 8.5956L8.91953 10.5381L7.96418 7.38549L10.5118 5.57032H7.39097L6.37193 2.25844L5.35289 5.57032H2.23208L4.77968 7.38549L3.82433 10.5381ZM6.37193 13.0857C5.49089 13.0857 4.66292 12.9185 3.88802 12.5839C3.11313 12.2493 2.43907 11.7956 1.86586 11.2228C1.29265 10.6496 0.838968 9.97555 0.504807 9.20065C0.170647 8.42576 0.00335429 7.59779 0.00292969 6.71674C0.00292969 5.8357 0.170222 5.00773 0.504807 4.23283C0.839392 3.45794 1.29308 2.78388 1.86586 2.21067C2.43907 1.63746 3.11313 1.18378 3.88802 0.849618C4.66292 0.515457 5.49089 0.348165 6.37193 0.34774C7.25298 0.34774 8.08095 0.515033 8.85584 0.849618C9.63074 1.1842 10.3048 1.63789 10.878 2.21067C11.4512 2.78388 11.9051 3.45794 12.2397 4.23283C12.5743 5.00773 12.7414 5.8357 12.7409 6.71674C12.7409 7.59779 12.5736 8.42576 12.2391 9.20065C11.9045 9.97555 11.4508 10.6496 10.878 11.2228C10.3048 11.796 9.63074 12.2499 8.85584 12.5845C8.08095 12.9191 7.25298 13.0862 6.37193 13.0857Z" fill="#FFE4E4" />
                                                        </svg>
                                                    </span>
                                                    BATCH OF 2018
                                                </h6>
                                            </div>
                                            <div class="chat-msg">
                                                <p>kire ki korish😱</p>
                                            </div>
                                        </div>
                                    </div>
                                    <div class="chat-right">
                                        <div class="msg-time">
                                            <h5>4:20 PM</h5>
                                        </div>
                                    </div>
                                </a>

                            </div>
                            <div class="chat-msg">
                                <div class="chat-msg-head d-flex justify-content-between align-items-center">
                                    <div class="chat-msg-left d-flex align-items-center" style="gap: 1rem;">
                                        <div class="profile-pic" style="width: 40px; height: 40px;">
                                            <img src="./src/img/dum.jpeg" alt="">
                                        </div>
                                        <div class="profile-name" style="gap: 0.2rem;">
                                            <h5 style="font-size: 0.9rem;">Maszari</h5>
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
                                    <div class="chat-msg-right">
                                        <div class="dropdown">
                                            <button class="btn  dropdown-toggle" type="button" id="dropdownMenuButton1" data-bs-toggle="dropdown" aria-expanded="false">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="57" height="13" viewBox="0 0 57 13" fill="none">
                                                    <ellipse cx="6.4248" cy="6.4187" rx="6" ry="6" fill="#404040" />
                                                    <ellipse cx="28.4248" cy="6.4187" rx="6" ry="6" fill="#404040" />
                                                    <ellipse cx="50.4258" cy="6.4187" rx="6" ry="6" fill="#404040" />
                                                </svg>
                                            </button>
                                            <ul class="dropdown-menu" aria-labelledby="dropdownMenuButton1">
                                                <li><a class="dropdown-item" href="#">Action</a></li>
                                                <li><a class="dropdown-item" href="#">Another action</a></li>
                                                <li><a class="dropdown-item" href="#">Something else here</a></li>
                                            </ul>
                                        </div>
                                    </div>
                                </div>
                                <div class="chat-msg-body h-100" style="overflow: auto;">

                                </div>
                                <div class="chat-msg-bottom">
                                    <form action="" method="POST" enctype="multipart/form-data">

                                        <div class="chat-text">
                                            <label for="emojionearea2">
                                                <svg xmlns="http://www.w3.org/2000/svg" width="35" height="35" viewBox="0 0 35 35" fill="none">
                                                    <path d="M26.4627 14.0219C26.6555 14.215 26.7638 14.4766 26.7638 14.7494C26.7638 15.0223 26.6555 15.2839 26.4627 15.477L20.9726 20.9676C20.7795 21.1604 20.5179 21.2687 20.2451 21.2687C19.9723 21.2687 19.7107 21.1604 19.5176 20.9676L14.7549 16.2062L9.99216 20.9676C9.79701 21.1495 9.53891 21.2485 9.27222 21.2438C9.00554 21.2391 8.75109 21.131 8.56248 20.9424C8.37387 20.7538 8.26584 20.4993 8.26113 20.2326C8.25643 19.9659 8.35542 19.7078 8.53726 19.5126L14.0275 14.0219C14.2205 13.8291 14.4821 13.7208 14.7549 13.7208C15.0277 13.7208 15.2893 13.8291 15.4824 14.0219L20.2451 18.7834L25.0078 14.0219C25.2009 13.8291 25.4625 13.7208 25.7353 13.7208C26.0081 13.7208 26.2697 13.8291 26.4627 14.0219ZM35 17.4948C35.0006 20.5287 34.2126 23.5108 32.7133 26.1483C31.2139 28.7858 29.0547 30.9882 26.4475 32.5394C23.8404 34.0907 20.8747 34.9374 17.8416 34.9967C14.8085 35.0559 11.8121 34.3255 9.14632 32.8773L3.16373 34.8711C2.74051 35.0122 2.28635 35.0327 1.85215 34.9302C1.41794 34.8277 1.02086 34.6064 0.705396 34.2909C0.389934 33.9754 0.168563 33.5783 0.0660938 33.144C-0.0363754 32.7098 -0.015893 32.2556 0.125245 31.8323L2.11887 25.8492C0.847998 23.5071 0.128667 20.9057 0.0157287 18.2434C-0.0972094 15.581 0.399228 12.9281 1.46719 10.4867C2.53515 8.04541 4.14642 5.88021 6.17816 4.15623C8.2099 2.43225 10.6084 1.19502 13.1909 0.538868C15.7734 -0.117281 18.4715 -0.175017 21.0797 0.370063C23.6878 0.915143 26.1371 2.04864 28.2407 3.68414C30.3443 5.31963 32.0467 7.41393 33.2181 9.80733C34.3895 12.2007 34.999 14.83 35 17.4948ZM32.9412 17.4948C32.9406 15.1259 32.3951 12.7889 31.3469 10.6647C30.2987 8.54037 28.7759 6.68573 26.8963 5.24422C25.0167 3.80272 22.8307 2.813 20.5074 2.35163C18.1841 1.89027 15.7858 1.96963 13.4981 2.58357C11.2103 3.19752 9.09452 4.32959 7.3143 5.8922C5.53407 7.45481 4.13717 9.40606 3.23167 11.595C2.32617 13.7839 1.93634 16.1519 2.09235 18.5156C2.24837 20.8793 2.94603 23.1754 4.13137 25.2263C4.20459 25.3527 4.2501 25.4931 4.26489 25.6384C4.27968 25.7836 4.26341 25.9303 4.21716 26.0688L2.07941 32.4826C2.05925 32.5431 2.05632 32.608 2.07096 32.67C2.0856 32.732 2.11722 32.7888 2.16229 32.8338C2.20736 32.8789 2.26408 32.9105 2.32611 32.9252C2.38814 32.9398 2.45302 32.9369 2.51348 32.9167L8.92157 30.7788C9.0268 30.7442 9.13678 30.7263 9.24755 30.7256C9.42825 30.7266 9.60559 30.7745 9.76226 30.8646C12.1098 32.2241 14.774 32.9411 17.4867 32.9434C20.1994 32.9458 22.8648 32.2334 25.2146 30.8779C27.5645 29.5225 29.5159 27.5719 30.8723 25.2225C32.2287 22.873 32.9422 20.2077 32.9412 17.4948Z" fill="black" />
                                                </svg>
                                            </label>
                                            <textarea id="emojionearea2"></textarea>
                                        </div>

                                        <div class="media-inputs">
                                            <div class="audio">
                                                <label for="voice">
                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="35" viewBox="0 0 30 35" fill="none">
                                                        <path d="M15.0008 0C16.102 0 17.1923 0.20575 18.2097 0.605504C19.227 1.00526 20.1513 1.59118 20.93 2.32983C21.7086 3.06848 22.3262 3.94538 22.7476 4.91047C23.169 5.87556 23.3859 6.90994 23.3859 7.95455V14.3182C23.3859 16.4279 22.5025 18.4511 20.93 19.9429C19.3575 21.4347 17.2247 22.2727 15.0008 22.2727C12.777 22.2727 10.6442 21.4347 9.07172 19.9429C7.49922 18.4511 6.6158 16.4279 6.6158 14.3182V7.95455C6.6158 5.84487 7.49922 3.8216 9.07172 2.32983C10.6442 0.838066 12.777 0 15.0008 0ZM0 15.9091H3.37917C3.7855 18.5576 5.18341 20.9788 7.31718 22.7297C9.45094 24.4807 12.1779 25.4443 14.9992 25.4443C17.8204 25.4443 20.5474 24.4807 22.6811 22.7297C24.8149 20.9788 26.2128 18.5576 26.6192 15.9091H30C29.6187 19.1366 28.0926 22.1454 25.672 24.442C23.2514 26.7386 20.08 28.1867 16.6778 28.5489V35H13.3238V28.5489C9.92141 28.1871 6.7496 26.7391 4.32865 24.4424C1.90771 22.1458 0.381373 19.1368 0 15.9091Z" fill="black" />
                                                    </svg>
                                                </label>
                                                <input type="file" id="voice" name="voice" accept="audio/*">
                                            </div>
                                            <div class="iamge">
                                                <label for="media"><svg xmlns="http://www.w3.org/2000/svg" width="37" height="37" viewBox="0 0 37 37" fill="none">
                                                        <path d="M23.1059 10.2104H23.1243M15.7373 34.1574H6.52647C5.06076 34.1574 3.65508 33.5752 2.61867 32.5388C1.58225 31.5025 1 30.0968 1 28.6312V6.52624C1 5.06059 1.58225 3.65497 2.61867 2.6186C3.65508 1.58223 5.06076 1 6.52647 1H28.6324C30.0981 1 31.5037 1.58223 32.5402 2.6186C33.5766 3.65497 34.1588 5.06059 34.1588 6.52624V16.6577" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                        <path d="M1 24.9466L10.2108 15.7362C11.9203 14.0912 14.0277 14.0912 15.7373 15.7362L19.4216 19.4204M28.2639 33.8199L24.2628 35.9162C24.144 35.978 24.0104 36.0055 23.8769 35.9958C23.7434 35.9861 23.6153 35.9395 23.5067 35.8611C23.3982 35.7828 23.3136 35.6758 23.2623 35.5522C23.211 35.4285 23.1951 35.2931 23.2164 35.1609L23.9809 30.7197L20.7442 27.5752C20.6476 27.4818 20.5792 27.3632 20.5468 27.2328C20.5144 27.1024 20.5194 26.9655 20.5611 26.8378C20.6027 26.71 20.6795 26.5966 20.7826 26.5104C20.8857 26.4242 21.0109 26.3687 21.144 26.3503L25.6167 25.7018L27.6173 21.6622C27.6772 21.5418 27.7694 21.4406 27.8836 21.3698C27.9978 21.2991 28.1295 21.2616 28.2639 21.2616C28.3983 21.2616 28.53 21.2991 28.6442 21.3698C28.7585 21.4406 28.8507 21.5418 28.9105 21.6622L30.9111 25.7018L35.3839 26.3503C35.5166 26.3693 35.6413 26.4252 35.7439 26.5115C35.8465 26.5978 35.923 26.711 35.9646 26.8385C36.0062 26.9659 36.0112 27.1025 35.9793 27.2327C35.9473 27.3629 35.8795 27.4816 35.7836 27.5752L32.5469 30.7197L33.3096 35.1591C33.3325 35.2915 33.3178 35.4276 33.2672 35.5521C33.2166 35.6765 33.1321 35.7843 33.0233 35.8631C32.9145 35.942 32.7858 35.9888 32.6518 35.9981C32.5178 36.0075 32.3838 35.9791 32.2651 35.9162L28.2639 33.8199Z" stroke="black" stroke-width="2" stroke-linecap="round" stroke-linejoin="round" />
                                                    </svg>
                                                </label>
                                                <input type="file" id="media" name="media" accept="image/*,video/*">
                                            </div>

                                        </div>
                                    </form>

                                </div>
                            </div>
                        </div>
                    </div>

                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function showContent_inbox(contentId) {
        // Hide all content elements
        var contents = document.querySelectorAll('.content_inbox');
        contents.forEach(function(content) {
            content.classList.add('hidden_inbox');
        });

        // Deactivate all tabs
        var tabs = document.querySelectorAll('.tab_inbox');
        tabs.forEach(function(tab) {
            tab.classList.remove('activeTab_inbox');
        });

        // Show the selected content and activate the corresponding tab
        document.getElementById(contentId).classList.remove('hidden_inbox');
        event.currentTarget.classList.add('activeTab_inbox');
    }

    // Set the default tab
    document.querySelector('.tab_inbox').click();
</script>


<!-- Add jQuery CDN -->
<script src="https://code.jquery.com/jquery-3.6.4.min.js"></script>

<script src="https://cdn.jsdelivr.net/npm/emojionearea@3.4.1/dist/emojionearea.min.js"></script>

<script>
    $(document).ready(function() {
        $("#emojionearea1").emojioneArea({
            pickerPosition: "right",
            tonesStyle: "bullet",
            events: {
                keyup: function(editor, event) {
                    console.log(editor.html());
                    console.log(this.getText());
                }
            }
        });

        $('#divOutside').click(function() {
            $('.emojionearea-button').click()
        });
    });
</script>
<script>
    $(document).ready(function() {
        $("#emojionearea2").emojioneArea({
            pickerPosition: "right",
            tonesStyle: "bullet",
            events: {
                keyup: function(editor, event) {
                    console.log(editor.html());
                    console.log(this.getText());
                }
            }
        });

        $('#divOutside').click(function() {
            $('.emojionearea-button').click()
        });
    });
</script>