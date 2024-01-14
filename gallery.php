<?php include './components/script.php' ?>
<?php include './components/styles.php' ?>
<title>Gallery</title>


<?php $page = 'gallery';
include './components/navbar.php'  ?>

<div id="parent">
    <?php $page = 'gallery';
    include './components/sidebar.php'  ?>
    <div class="content-container">
        <div class="gallery-content">
            <div class="top-gallery d-flex align-items-center justify-content-evenly">
                <div class="search" style="width: auto;">
                    <label for="people-search">
                        <svg xmlns="http://www.w3.org/2000/svg" width="36" height="37" viewBox="0 0 36 37" fill="none">
                            <path d="M34.2606 35.9008C35.1921 36.8322 36.6297 35.3946 35.6983 34.4834L28.1051 26.8699C30.7686 23.9227 32.241 20.0903 32.2358 16.1179C32.2358 7.22875 25.007 0 16.1179 0C7.22875 0 0 7.22875 0 16.1179C0 25.007 7.22875 32.2358 16.1179 32.2358C20.1271 32.2358 23.8326 30.7576 26.6674 28.3076L34.2606 35.9008ZM2.02284 16.1179C2.02284 8.34243 8.36065 2.02486 16.1159 2.02486C23.8913 2.02486 30.2089 8.34243 30.2089 16.1179C30.2089 23.8934 23.8913 30.2109 16.1159 30.2109C8.36065 30.2109 2.02284 23.8934 2.02284 16.1179Z" fill="#292D32" />
                        </svg>
                    </label>
                    <input id="people-search" type="search" placeholder="Discover More...">
                </div>
                <div class="gallery-logo">
                    <svg xmlns="http://www.w3.org/2000/svg" width="127" height="127" viewBox="0 0 127 127" fill="none" style="width: 80%;">
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M79.4573 18.6963C87.3968 10.6859 100.27 10.6859 108.209 18.6963C116.149 26.7066 116.149 39.6941 108.209 47.7046L95.2131 60.8164C87.2735 68.8269 74.4008 68.8269 66.4611 60.8164C58.5214 52.8061 58.5214 39.8186 66.4611 31.8082L79.4573 18.6963Z" fill="url(#paint0_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M88.2901 42.8616C77.0619 42.8616 67.9595 52.0451 67.9595 63.3736C67.9595 74.702 77.0619 83.8855 88.2903 83.8855H106.669C117.898 83.8855 127 74.702 127 63.3736C127 52.0451 117.898 42.8616 106.669 42.8616H88.2901Z" fill="url(#paint1_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M111.463 43.3326C110.565 44.98 109.428 46.5293 108.052 47.9285L95.3727 60.822C87.9485 68.3718 76.1925 68.8424 68.2197 62.2754C68.7816 51.3879 77.6528 42.6982 88.5141 42.6982H106.445C108.177 42.6982 109.859 42.9184 111.463 43.3326Z" fill="url(#paint2_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M79.5167 108.453C87.4564 116.463 100.329 116.463 108.269 108.453C116.209 100.442 116.209 87.4551 108.269 79.4447L95.2727 66.3327C87.333 58.3224 74.4602 58.3224 66.5207 66.3327C58.581 74.3431 58.581 87.3306 66.5207 95.3411L79.5167 108.453Z" fill="url(#paint3_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M68.2456 64.9024C69.0141 75.6065 77.7853 84.0478 88.5136 84.0478H106.444C108.124 84.0478 109.756 83.8401 111.317 83.4484C110.452 81.9387 109.384 80.516 108.111 79.2218L95.432 66.3284C87.9973 58.7679 76.219 58.3066 68.2456 64.9024Z" fill="url(#paint4_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M92.0519 63.5556C85.372 67.9614 76.6981 67.9676 70.0107 63.5948C76.6863 59.1959 85.3601 59.176 92.0519 63.5556Z" fill="#0D5309" />
                        <path opacity="0.8" d="M83.7119 87.9444C83.7119 76.6159 74.6095 67.4324 63.3811 67.4324C52.1527 67.4324 43.0503 76.6159 43.0503 87.9444V106.487C43.0503 117.816 52.1527 126.999 63.3811 126.999C74.6095 126.999 83.7119 117.816 83.7119 106.487V87.9444Z" fill="url(#paint5_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M83.0799 111.452C81.7549 110.623 80.5034 109.625 79.3555 108.458L66.6766 95.5647C59.1206 87.8807 58.7607 75.6713 65.5761 67.5493C75.7715 68.6613 83.7104 77.4273 83.7104 88.0966V106.331C83.7104 108.099 83.4915 109.815 83.0799 111.452Z" fill="url(#paint6_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M68.7368 68.155C70.4484 75.5143 76.0234 81.3521 83.1698 83.3259C81.4602 75.9644 75.8813 70.1304 68.7368 68.155Z" fill="#0F4525" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M47.3903 108.491C39.4508 116.501 26.578 116.501 18.6384 108.491C10.6987 100.481 10.6987 87.4932 18.6384 79.4827L31.6344 66.3709C39.5741 58.3604 52.4468 58.3604 60.3865 66.3709C68.3262 74.3812 68.3262 87.3687 60.3865 95.3791L47.3903 108.491Z" fill="url(#paint7_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M61.2896 67.5398C51.0619 68.6058 43.0503 77.4032 43.0503 88.0978V106.332C43.0503 108.14 43.2782 109.893 43.7065 111.564C45.0755 110.72 46.3675 109.698 47.5497 108.495L60.2285 95.602C67.7992 87.9034 68.1458 75.6617 61.2896 67.5398Z" fill="url(#paint8_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M63.4623 91.324C59.8157 84.9427 59.8114 77.007 63.4416 70.6201C67.0856 77.001 67.095 84.9369 63.4623 91.324Z" fill="#242161" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M38.71 43.0024C49.9384 43.0024 59.0408 52.186 59.0408 63.5144C59.0408 74.8429 49.9384 84.0264 38.71 84.0264H20.3307C9.10236 84.0264 0 74.8429 0 63.5144C0 52.186 9.10236 43.0024 20.3307 43.0024H38.71Z" fill="url(#paint9_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M15.5503 83.557C16.422 82.0201 17.5044 80.5726 18.7974 79.2577L31.4763 66.3643C38.9394 58.7748 50.7796 58.3391 58.7541 65.0143C57.9997 75.7327 49.2223 84.1895 38.484 84.1895H20.5534C18.827 84.1895 17.1509 83.97 15.5503 83.557Z" fill="url(#paint10_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M58.3095 68.0811C50.9711 70.0012 45.2212 75.9896 43.5464 83.5427C50.8975 81.6276 56.636 75.6382 58.3095 68.0811Z" fill="#501232" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M47.2424 18.6797C39.3028 10.6693 26.4301 10.6693 18.4904 18.6797C10.5507 26.6902 10.5507 39.6775 18.4904 47.6879L31.4866 60.7999C39.4261 68.8103 52.2989 68.8103 60.2385 60.7998C68.1782 52.7895 68.1782 39.802 60.2385 31.7916L47.2424 18.6797Z" fill="url(#paint11_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M58.7562 62.0283C58.0063 51.3231 49.2174 42.8391 38.4855 42.8391H20.5548C18.7562 42.8391 17.0126 43.0764 15.3525 43.5218C16.2328 45.0921 17.3321 46.5705 18.6504 47.911L31.3292 60.8045C38.8391 68.4413 50.7808 68.8348 58.7562 62.0283Z" fill="url(#paint12_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M34.7905 63.6334C41.4429 59.2435 50.0739 59.2179 56.7509 63.5364C50.1031 67.9194 41.472 67.9585 34.7905 63.6334Z" fill="#7F0D07" />
                        <path opacity="0.8" d="M83.8574 20.512C83.8574 9.18353 74.755 0 63.5266 0C52.2982 0 43.1958 9.18353 43.1958 20.512V39.055C43.1958 50.3835 52.2982 59.567 63.5266 59.567C74.755 59.567 83.8574 50.3835 83.8574 39.055V20.512Z" fill="url(#paint13_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M83.2335 15.5647C81.8303 16.4187 80.507 17.4601 79.2983 18.6891L66.6195 31.5826C59.1006 39.2288 58.7072 51.3561 65.4191 59.478C75.7414 58.5057 83.8567 49.6639 83.8567 38.9003V20.6662C83.8567 18.9053 83.6404 17.1962 83.2335 15.5647Z" fill="url(#paint14_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M68.668 58.8978C70.3129 51.3337 76.039 45.3109 83.3792 43.3638C81.7359 50.9353 76.0015 56.9494 68.668 58.8978Z" fill="#598000" />
                        <path fill-rule="evenodd" clip-rule="evenodd" d="M43.7757 15.7402C45.064 16.5568 46.2815 17.534 47.4008 18.6721L60.0797 31.5655C67.5932 39.2061 67.9913 51.3215 61.2946 59.4434C51.1151 58.3159 43.1934 49.5574 43.1934 38.8996V20.6656C43.1934 18.9682 43.3952 17.3187 43.7757 15.7402Z" fill="url(#paint15_linear_29_5479)" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M63.3551 35.9141C59.7715 42.2574 59.7709 50.1159 63.3458 56.4615C66.9269 50.1184 66.9324 42.2599 63.3551 35.9141Z" fill="#A54F00" />
                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M58.2929 58.8777C56.6084 51.4208 50.9511 45.4884 43.7061 43.5308C45.3858 51.0014 51.0441 56.9226 58.2929 58.8777Z" fill="#AA1500" />
                        <defs>
                            <linearGradient id="paint0_linear_29_5479" x1="93.8333" y1="4.19207" x2="51.7147" y2="45.9386" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FBE41F" />
                                <stop offset="1" stop-color="#C4DA30" />
                            </linearGradient>
                            <linearGradient id="paint1_linear_29_5479" x1="67.9595" y1="42.8616" x2="127" y2="42.8616" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#73CC81" />
                                <stop offset="1" stop-color="#C7DB44" />
                            </linearGradient>
                            <linearGradient id="paint2_linear_29_5479" x1="91.0192" y1="35.5432" x2="69.4645" y2="63.9848" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#A4BC0F" />
                                <stop offset="1" stop-color="#5BAA22" />
                            </linearGradient>
                            <linearGradient id="paint3_linear_29_5479" x1="93.8927" y1="122.957" x2="51.7743" y2="81.2107" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#6AC284" />
                                <stop offset="1" stop-color="#6ABBE7" />
                            </linearGradient>
                            <linearGradient id="paint4_linear_29_5479" x1="126.738" y1="72.1655" x2="102.465" y2="40.6638" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#4BA03A" />
                                <stop offset="1" stop-color="#2E8F6D" />
                            </linearGradient>
                            <linearGradient id="paint5_linear_29_5479" x1="43.0503" y1="67.4324" x2="43.0503" y2="126.999" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#928EC4" />
                                <stop offset="1" stop-color="#68B6E3" />
                            </linearGradient>
                            <linearGradient id="paint6_linear_29_5479" x1="55.2707" y1="83.7319" x2="87.2613" y2="106.453" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#3E6AAD" />
                                <stop offset="1" stop-color="#34808E" />
                            </linearGradient>
                            <linearGradient id="paint7_linear_29_5479" x1="33.0143" y1="122.995" x2="75.1329" y2="81.2487" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#958DC2" />
                                <stop offset="1" stop-color="#CD8CBD" />
                            </linearGradient>
                            <linearGradient id="paint8_linear_29_5479" x1="49.2719" y1="50.6133" x2="16.6391" y2="72.9115" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#735095" />
                                <stop offset="1" stop-color="#5260A6" />
                            </linearGradient>
                            <linearGradient id="paint9_linear_29_5479" x1="59.0408" y1="43.0024" x2="0" y2="43.0024" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F56270" />
                                <stop offset="1" stop-color="#CE8BBC" />
                            </linearGradient>
                            <linearGradient id="paint10_linear_29_5479" x1="35.51" y1="54.3982" x2="19.5024" y2="83.1557" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#BF3653" />
                                <stop offset="1" stop-color="#8D487C" />
                            </linearGradient>
                            <linearGradient id="paint11_linear_29_5479" x1="32.8664" y1="4.17559" x2="74.985" y2="45.922" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#F15F6B" />
                                <stop offset="1" stop-color="#F79948" />
                            </linearGradient>
                            <linearGradient id="paint12_linear_29_5479" x1="77.0405" y1="51.0633" x2="54.6844" y2="17.0144" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#DF1F07" />
                                <stop offset="1" stop-color="#C51B1A" />
                            </linearGradient>
                            <linearGradient id="paint13_linear_29_5479" x1="43.1958" y1="0" x2="43.1958" y2="59.567" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#FF8600" />
                                <stop offset="1" stop-color="#FFE308" />
                            </linearGradient>
                            <linearGradient id="paint14_linear_29_5479" x1="72.2614" y1="-3.60359" x2="37.9919" y2="17.1268" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#EB9C09" />
                                <stop offset="1" stop-color="#CDBF05" />
                            </linearGradient>
                            <linearGradient id="paint15_linear_29_5479" x1="31.7736" y1="32.7323" x2="64.2409" y2="54.5526" gradientUnits="userSpaceOnUse">
                                <stop stop-color="#ED4103" />
                                <stop offset="1" stop-color="#F77402" />
                            </linearGradient>
                        </defs>
                    </svg>
                </div>
                <div class="gallery-text">
                    <h1>GALLERY</h1>
                </div>
            </div>
            <div class="top-event-slider">
                <div class="swiper mySwiper" id="top-event">
                    <div class="swiper-wrapper">
                        <div class="swiper-slide">
                            <div class="slider-img-container">
                                <img src="./src/img/dum_width.png" alt="">
                                <h5>Indipendence Day</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-img-container">
                                <img src="./src/img/dum_width.png" alt="">
                                <h5>Indipendence Day</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-img-container">
                                <img src="./src/img/dum_width.png" alt="">
                                <h5>Indipendence Day</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-img-container">
                                <img src="./src/img/dum_width.png" alt="">
                                <h5>Indipendence Day</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-img-container">
                                <img src="./src/img/dum_width.png" alt="">
                                <h5>Indipendence Day</h5>
                            </div>
                        </div>
                        <div class="swiper-slide">
                            <div class="slider-img-container">
                                <img src="./src/img/dum_width.png" alt="">
                                <h5>Indipendence Day</h5>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="filter">
                <form action="" class="d-flex justify-content-start align-items-center" style="gap: 1rem;">
                    <label for="" class="btn btn-secondary">Filter by</label>
                    <div class="dropdown">
                        <button class="btn btn-secondary dropdown-toggle" type="button" id="dropdownMenuButton2" data-bs-toggle="dropdown" aria-expanded="false">
                            Select an Option
                        </button>
                        <ul class="dropdown-menu dropdown-menu-dark" aria-labelledby="dropdownMenuButton2">
                            <li><a class="dropdown-item active" href="#">Action</a></li>
                            <li><a class="dropdown-item" href="#">Another action</a></li>
                            <li><a class="dropdown-item" href="#">Something else here</a></li>
                            <li>
                                <hr class="dropdown-divider">
                            </li>
                            <li><a class="dropdown-item" href="#">Separated link</a></li>
                        </ul>
                    </div>
                </form>
            </div>
            <div class="gallery-container d-flex">
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="" class="w-100">
                </div>
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="">
                </div>
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="">
                </div>
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="">
                </div>
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="">
                </div>
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="">
                </div>
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="">
                </div>
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="">
                </div>
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="">
                </div>
                <div class="gal-item">
                    <img src="./src/img/dum_width.png" alt="">
                </div>
            </div>
        </div>
    </div>
</div>

<script>
    var swiper = new Swiper("#top-event", {
        slidesPerView: 1,
        spaceBetween: 5,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
        breakpoints: {
            640: {
                slidesPerView: 2,
                spaceBetween: 5,
            },
            768: {
                slidesPerView: 4,
                spaceBetween: 10,
            },
            1024: {
                slidesPerView: 5,
                spaceBetween: 20,
            },
        },
    });
</script>