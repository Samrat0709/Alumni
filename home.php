<?php include './components/script.php' ?>
<?php include './components/styles.php' ?>
<title>Home</title>

<link rel="stylesheet" href="./src/media.css">



<?php $page = 'home';
include './components/navbar.php'  ?>

<div id="parent">
    <?php $page = 'home';
    include './components/sidebar.php'  ?>
    <div class="content-container">
        <div id="home">
            <div class="home-content">
                <div class="add-post">
                    <div class="profile-pic">
                        <img src="./src/img/dum.jpeg" alt="">
                    </div>
                    <div class="create-post">
                        <ul class="navbar-nav">
                            <li>
                                <!-- Button trigger modal -->
                                <div class="create">
                                    <button type="button" class="" data-bs-toggle="modal" data-bs-target="#staticBackdrop">
                                        <img src="./src/img/create.svg" alt="">
                                    </button>
                                    <h4>Create</h4>
                                </div>
                                <!-- Modal -->
                                <div class="modal fade" id="staticBackdrop" data-bs-backdrop="static" data-bs-keyboard="false" tabindex="-1" aria-labelledby="staticBackdropLabel" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <div class="modal-title" id="staticBackdropLabel">
                                                    <div class="profile-pic">
                                                        <img src="./src/img/dum.jpeg" alt="">
                                                    </div>
                                                    <div class="profile-name">
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
                                                </div>
                                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                            </div>
                                            <div class="modal-body">
                                                <form action="" method="POST">
                                                    <div class="text-input">
                                                        <input name="" type="text" id="textInput" placeholder="what do you wanna post?">
                                                        <img id="imagePreview" alt="Image Preview" style="max-width: 100%; display: none;">
                                                        <video id="videoPreview" controls style="max-width: 100%; display: none;" autoplay></video>
                                                        <audio id="audioPreview" controls style="display: none;"></audio>
                                                    </div>
                                                    <div class="input-modes">
                                                        <div class="text">
                                                            <label for="textInput">
                                                                <span>
                                                                    Aa
                                                                </span>
                                                                Text
                                                            </label>
                                                        </div>
                                                        <div class="camera">
                                                            <label for="imageInput">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="41" height="42" viewBox="0 0 41 42" fill="none">
                                                                        <path opacity="0.3" d="M18.1928 36.984C18.9163 37.0845 19.6399 37.1649 20.4036 37.1649C24.6229 37.1631 28.6723 35.5029 31.6786 32.5424L26.2119 23.0963L18.1928 36.984ZM16.1026 36.562L21.5492 27.1159H5.51098C6.44026 29.3932 7.87758 31.4281 9.71321 33.0651C11.5488 34.7022 13.7343 35.8983 16.1026 36.562ZM13.4497 21.0865L7.74185 11.2184C5.53122 14.033 4.32821 17.5076 4.3252 21.0865C4.3252 22.4733 4.52618 23.8198 4.84774 25.1061H15.761L13.4497 21.0865ZM33.0653 30.9546C35.276 28.14 36.479 24.6655 36.482 21.0865C36.482 19.6997 36.281 18.3532 35.9594 17.0669H25.0462L33.0653 30.9546ZM23.8805 15.0571H35.2962C34.3659 12.777 32.9259 10.7401 31.0864 9.10274C29.247 7.46536 27.057 6.27094 24.6845 5.61106L19.2379 15.0571H23.8805ZM16.9266 15.0571L22.6144 5.1689C21.8908 5.06841 21.1472 5.00812 20.4036 5.00812C16.0222 5.00812 12.0428 6.77674 9.14871 9.63066L14.6154 19.0767L16.9266 15.0571Z" fill="#EB583E" />
                                                                        <path d="M20.4037 41.1844C31.4977 41.1844 40.5016 32.1805 40.5016 21.0864C40.5016 11.5399 33.8492 3.56098 24.9257 1.51098L24.7649 1.43059L24.7448 1.47079C23.338 1.16932 21.8909 0.988434 20.4037 0.988434C9.30956 0.988434 0.305664 9.99233 0.305664 21.0864C0.305664 32.1805 9.30956 41.1844 20.4037 41.1844ZM20.4037 37.1648C19.6399 37.1648 18.9164 37.0844 18.1929 36.9839L26.212 23.0962L31.6786 32.5423C28.6724 35.5028 24.6229 37.163 20.4037 37.1648ZM36.482 21.0864C36.482 24.8046 35.1958 28.2212 33.0654 30.9545L25.0262 17.0668H35.9394C36.2811 18.3531 36.482 19.6997 36.482 21.0864ZM35.2963 15.057H19.238L24.6845 5.61097C29.508 6.93744 33.4272 10.4747 35.2963 15.057ZM20.4037 5.00803C21.1473 5.00803 21.8909 5.06833 22.6144 5.16882L16.9267 15.057L14.6154 19.0766L9.14878 9.63057C12.1449 6.66717 16.1896 5.00599 20.4037 5.00803ZM4.32526 21.0864C4.32526 17.3683 5.61153 13.9516 7.74192 11.2183L13.4497 21.0864L15.761 25.106H4.84781C4.52624 23.8197 4.32526 22.4732 4.32526 21.0864ZM16.9267 27.1158H21.5492L16.1027 36.5619C13.7317 35.8986 11.5435 34.7029 9.70452 33.0659C7.86557 31.429 6.42445 29.394 5.49095 27.1158H16.9267Z" fill="#EB583E" />
                                                                    </svg>
                                                                </span>
                                                                Camera
                                                            </label>
                                                            <input type="file" id="imageInput" accept="image/*" name="image" onchange="previewImage()">
                                                        </div>
                                                        <div class="link">
                                                            <label for="linkInput">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="43" height="22" viewBox="0 0 43 22" fill="none">
                                                                        <path d="M4.45944 11.0864C4.45944 7.52909 7.35108 4.63745 10.9084 4.63745H19.2297V0.684845H10.9084C5.16675 0.684845 0.506836 5.34476 0.506836 11.0864C0.506836 16.8281 5.16675 21.488 10.9084 21.488H19.2297V17.5354H10.9084C7.35108 17.5354 4.45944 14.6438 4.45944 11.0864ZM12.9887 13.1668H29.6313V9.00612H12.9887V13.1668ZM31.7116 0.684845H23.3903V4.63745H31.7116C35.269 4.63745 38.1606 7.52909 38.1606 11.0864C38.1606 14.6438 35.269 17.5354 31.7116 17.5354H23.3903V21.488H31.7116C37.4533 21.488 42.1132 16.8281 42.1132 11.0864C42.1132 5.34476 37.4533 0.684845 31.7116 0.684845Z" fill="#F09035" />
                                                                    </svg>
                                                                </span>
                                                                Link
                                                            </label>
                                                            <input type="url" id="linkInput" name="link">
                                                        </div>
                                                        <div class="video">
                                                            <label for="videoInput">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" viewBox="0 0 30 30" fill="none">
                                                                        <path d="M7.52454 0.277374H22.3336V3.97408H26.0358V0.277374C27.0174 0.277865 27.9586 0.66814 28.6525 1.3624C29.3465 2.05665 29.7363 2.99806 29.7363 3.97964V26.1932C29.7363 27.1748 29.3465 28.1162 28.6525 28.8104C27.9586 29.5047 27.0174 29.895 26.0358 29.8955V26.1877H22.3336V29.8955H7.52454V26.1877H3.82228V29.8955C2.84038 29.8955 1.89684 29.5054 1.20253 28.8111C0.508222 28.1168 0.118164 27.1751 0.118164 26.1932V3.97964C0.118164 2.99773 0.508222 2.05605 1.20253 1.36174C1.89684 0.667433 2.83852 0.277374 3.82043 0.277374L3.82228 3.97408H7.52454V0.277374ZM11.2249 20.6398L19.555 15.0864L11.2249 9.53303V20.6398ZM26.0358 22.4854V16.932H22.3336V22.4854H26.0358ZM26.0358 13.2297V7.67634H22.3336V13.2297H26.0358ZM7.52454 22.4854V16.932H3.82228V22.4854H7.52454ZM7.52454 13.2297V7.67634H3.82228V13.2297H7.52454Z" fill="#52B5F9" />
                                                                    </svg>
                                                                </span>
                                                                Video
                                                            </label>
                                                            <input type="file" id="videoInput" accept="video/*" name="video" onchange="previewVideo()">
                                                        </div>
                                                        <div class="audio">
                                                            <label for="audioInput">
                                                                <span>
                                                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="30" viewBox="0 0 31 30" fill="none">
                                                                        <path d="M30.3593 15.0864C30.3593 6.92005 23.7166 0.277374 15.5503 0.277374C7.38389 0.277374 0.741211 6.92005 0.741211 15.0864V19.3646L0.779056 19.5505C0.757665 19.9504 0.741211 20.3732 0.741211 20.8455V24.1364C0.741211 27.3121 3.32457 29.8955 6.50028 29.8955C9.676 29.8955 12.2594 27.3121 12.2594 24.1364V20.8455C12.2594 18.3592 10.8936 16.2547 8.99808 15.4517C9.15439 11.9601 12.0208 9.16116 15.5503 9.16116C19.0797 9.16116 21.9461 11.9584 22.1024 15.4501C20.2069 16.2563 18.8412 18.3592 18.8412 20.8455V24.1364C18.8412 27.3121 21.4245 29.8955 24.6002 29.8955C27.7759 29.8955 30.3593 27.3121 30.3593 24.1364V20.8455C30.3593 20.3732 30.3428 19.9504 30.3215 19.5505L30.3593 19.3646V15.0864ZM4.03211 15.0864C4.03211 12.4767 4.91736 10.0744 6.38839 8.14098L7.85284 9.60378C6.59406 11.1688 5.84623 13.0826 5.71047 15.0864C5.67756 15.0864 5.67756 16.7319 5.67756 16.7319H4.03211V15.0864ZM8.96846 24.1364C8.96846 25.4972 7.86107 26.6046 6.50028 26.6046C5.1395 26.6046 4.03211 25.4972 4.03211 24.1364V20.8455C4.03211 19.7496 4.1259 18.9104 4.21969 18.3773H7.32301C8.10131 18.3773 8.96846 19.3909 8.96846 20.8455V24.1364ZM21.7536 8.77118L21.1711 9.35367C19.6705 7.85138 17.6745 7.02372 15.5503 7.02372C13.426 7.02372 11.4301 7.85138 9.92776 9.35367L9.34527 8.77118L7.46781 6.89373L6.43611 5.86368C7.63001 4.66268 9.05033 3.71051 10.6148 3.06229C12.1793 2.41407 13.8568 2.0827 15.5503 2.08737C18.9942 2.08737 22.2308 3.42841 24.6644 5.86368L23.6327 6.89373L21.7536 8.77118ZM27.0684 24.1364C27.0684 25.4972 25.961 26.6046 24.6002 26.6046C23.2394 26.6046 22.1321 25.4972 22.1321 24.1364V20.8455C22.1321 19.3909 22.9992 18.3773 23.7775 18.3773H26.8808C26.9746 18.9104 27.0684 19.7496 27.0684 20.8455V24.1364ZM27.0684 16.7319H25.423V15.0864C25.2604 13.0829 24.5029 11.1737 23.2477 9.60378L24.7138 8.14098C26.2396 10.135 27.067 12.5756 27.0684 15.0864V16.7319Z" fill="#775DF6" />
                                                                    </svg>
                                                                </span>
                                                                Audio
                                                            </label>
                                                            <input type="file" id="audioInput" accept="audio/*" name="audio" onchange="previewAudio()">
                                                        </div>
                                                        <!-- <div class="chat">

                                                        </div> -->
                                                    </div>
                                                </form>

                                            </div>
                                            <div class="modal-footer">
                                                <input type="submit" class="btn btn-custom" value="POST">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </li>
                            <li>
                                <a href="inbox.php" class="create">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="42" height="41" viewBox="0 0 42 41" fill="none">
                                        <path d="M0 5.25C0 3.85761 0.553123 2.52226 1.53769 1.53769C2.52226 0.553123 3.85761 0 5.25 0L36.75 0C38.1424 0 39.4777 0.553123 40.4623 1.53769C41.4469 2.52226 42 3.85761 42 5.25V26.25C42 27.6424 41.4469 28.9777 40.4623 29.9623C39.4777 30.9469 38.1424 31.5 36.75 31.5H30.1875C29.78 31.5 29.3781 31.5949 29.0136 31.7771C28.6491 31.9594 28.332 32.224 28.0875 32.55L23.1 39.1991C22.8555 39.5251 22.5384 39.7897 22.1739 39.972C21.8094 40.1542 21.4075 40.2491 21 40.2491C20.5925 40.2491 20.1906 40.1542 19.8261 39.972C19.4616 39.7897 19.1445 39.5251 18.9 39.1991L13.9125 32.55C13.668 32.224 13.3509 31.9594 12.9864 31.7771C12.6219 31.5949 12.22 31.5 11.8125 31.5H5.25C3.85761 31.5 2.52226 30.9469 1.53769 29.9623C0.553123 28.9777 0 27.6424 0 26.25V5.25ZM13.125 15.75C13.125 15.0538 12.8484 14.3861 12.3562 13.8938C11.8639 13.4016 11.1962 13.125 10.5 13.125C9.80381 13.125 9.13613 13.4016 8.64384 13.8938C8.15156 14.3861 7.875 15.0538 7.875 15.75C7.875 16.4462 8.15156 17.1139 8.64384 17.6062C9.13613 18.0984 9.80381 18.375 10.5 18.375C11.1962 18.375 11.8639 18.0984 12.3562 17.6062C12.8484 17.1139 13.125 16.4462 13.125 15.75ZM23.625 15.75C23.625 15.0538 23.3484 14.3861 22.8562 13.8938C22.3639 13.4016 21.6962 13.125 21 13.125C20.3038 13.125 19.6361 13.4016 19.1438 13.8938C18.6516 14.3861 18.375 15.0538 18.375 15.75C18.375 16.4462 18.6516 17.1139 19.1438 17.6062C19.6361 18.0984 20.3038 18.375 21 18.375C21.6962 18.375 22.3639 18.0984 22.8562 17.6062C23.3484 17.1139 23.625 16.4462 23.625 15.75ZM31.5 18.375C32.1962 18.375 32.8639 18.0984 33.3562 17.6062C33.8484 17.1139 34.125 16.4462 34.125 15.75C34.125 15.0538 33.8484 14.3861 33.3562 13.8938C32.8639 13.4016 32.1962 13.125 31.5 13.125C30.8038 13.125 30.1361 13.4016 29.6438 13.8938C29.1516 14.3861 28.875 15.0538 28.875 15.75C28.875 16.4462 29.1516 17.1139 29.6438 17.6062C30.1361 18.0984 30.8038 18.375 31.5 18.375Z" fill="#EB583E" />
                                    </svg>
                                    <h4>Chat</h4>
                                </a>
                            </li>
                            <li>
                                <a href="gallery.php" class="create">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="52" height="52" viewBox="0 0 52 52" fill="none">
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M32.5339 7.65499C35.7848 4.37509 41.0555 4.37509 44.3065 7.65499C47.5572 10.9348 47.5572 16.2526 44.3065 19.5325L38.9852 24.9012C35.7343 28.1811 30.4635 28.1811 27.2126 24.9012C23.9617 21.6213 23.9617 16.3036 27.2126 13.0237L32.5339 7.65499Z" fill="url(#paint0_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M36.1506 17.5498C31.5532 17.5498 27.8262 21.31 27.8262 25.9485C27.8262 30.5869 31.5532 34.3472 36.1507 34.3472H43.6761C48.2736 34.3472 52.0005 30.5869 52.0005 25.9485C52.0005 21.31 48.2736 17.5498 43.6761 17.5498H36.1506Z" fill="url(#paint1_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M45.6387 17.7426C45.271 18.4172 44.8053 19.0515 44.2419 19.6245L39.0505 24.9037C36.0106 27.995 31.1971 28.1877 27.9326 25.4988C28.1627 21.0409 31.795 17.4829 36.2422 17.4829H43.5839C44.2933 17.4829 44.9818 17.573 45.6387 17.7426Z" fill="url(#paint2_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M32.5583 44.4063C35.8092 47.6861 41.08 47.6861 44.3308 44.4063C47.5819 41.1264 47.5819 35.8087 44.3308 32.5288L39.0096 27.1601C35.7587 23.8802 30.4879 23.8802 27.237 27.1601C23.9861 30.44 23.9861 35.7577 27.237 39.0376L32.5583 44.4063Z" fill="url(#paint3_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M27.9434 26.5744C28.258 30.9573 31.8494 34.4136 36.2421 34.4136H43.5839C44.2715 34.4136 44.9398 34.3285 45.5789 34.1682C45.2249 33.55 44.7874 32.9675 44.2663 32.4375L39.0749 27.1583C36.0307 24.0627 31.2081 23.8738 27.9434 26.5744Z" fill="url(#paint4_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M37.6908 26.023C34.9557 27.827 31.4042 27.8295 28.666 26.0391C31.3993 24.2379 34.9509 24.2297 37.6908 26.023Z" fill="#0D5309" />
                                        <path opacity="0.8" d="M34.2759 36.009C34.2759 31.3706 30.5489 27.6104 25.9514 27.6104C21.354 27.6104 17.627 31.3706 17.627 36.009V43.6015C17.627 48.24 21.354 52.0002 25.9514 52.0002C30.5489 52.0002 34.2759 48.24 34.2759 43.6015V36.009Z" fill="url(#paint5_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M34.0173 45.6347C33.4748 45.2952 32.9624 44.8866 32.4923 44.4086L27.301 39.1294C24.2071 35.9832 24.0597 30.984 26.8503 27.6584C31.0249 28.1138 34.2755 31.703 34.2755 36.0716V43.5375C34.2755 44.2614 34.1858 44.964 34.0173 45.6347Z" fill="url(#paint6_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M28.1445 27.9065C28.8453 30.9197 31.1281 33.3101 34.0542 34.1182C33.3541 31.104 31.0698 28.7153 28.1445 27.9065Z" fill="#0F4525" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M19.4041 44.4219C16.1532 47.7018 10.8825 47.7018 7.63155 44.4219C4.38063 41.1421 4.38063 35.8243 7.63155 32.5444L12.9528 27.1757C16.2037 23.8958 21.4745 23.8958 24.7254 27.1757C27.9763 30.4556 27.9763 35.7733 24.7254 39.0532L19.4041 44.4219Z" fill="url(#paint7_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M25.0951 27.6543C20.9073 28.0908 17.627 31.6929 17.627 36.0718V43.5378C17.627 44.278 17.7203 44.9959 17.8956 45.68C18.4562 45.3346 18.9852 44.9159 19.4692 44.4237L24.6606 39.1444C27.7604 35.9922 27.9024 30.9798 25.0951 27.6543Z" fill="url(#paint8_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M25.9848 37.3928C24.4917 34.7799 24.49 31.5306 25.9764 28.9155C27.4684 31.5282 27.4723 34.7775 25.9848 37.3928Z" fill="#242161" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M15.8499 17.6077C20.4474 17.6077 24.1744 21.3679 24.1744 26.0063C24.1744 30.6448 20.4474 34.405 15.8499 34.405H8.32447C3.72698 34.405 0 30.6448 0 26.0063C0 21.3679 3.72698 17.6077 8.32447 17.6077H15.8499Z" fill="url(#paint9_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M6.36719 34.2126C6.72412 33.5833 7.1673 32.9906 7.69671 32.4522L12.8881 27.173C15.9439 24.0654 20.7919 23.887 24.0571 26.6202C23.7482 31.0089 20.1543 34.4716 15.7574 34.4716H8.4157C7.70883 34.4716 7.02254 34.3817 6.36719 34.2126Z" fill="url(#paint10_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M23.8749 27.8762C20.8701 28.6624 18.5158 31.1144 17.8301 34.207C20.84 33.4229 23.1897 30.9705 23.8749 27.8762Z" fill="#501232" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M19.3436 7.6484C16.0927 4.3685 10.8219 4.3685 7.571 7.6484C4.32008 10.9283 4.32008 16.246 7.571 19.5259L12.8923 24.8946C16.1432 28.1745 21.4139 28.1745 24.6649 24.8946C27.9158 21.6147 27.9158 16.297 24.6649 13.0171L19.3436 7.6484Z" fill="url(#paint11_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M24.0579 25.3978C23.7508 21.0146 20.1522 17.5408 15.758 17.5408H8.41621C7.67979 17.5408 6.96587 17.6379 6.28613 17.8203C6.64656 18.4632 7.09668 19.0686 7.63644 19.6175L12.8278 24.8967C15.9028 28.0237 20.7923 28.1848 24.0579 25.3978Z" fill="url(#paint12_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M14.2451 26.0548C16.9689 24.2574 20.5029 24.2469 23.2368 26.0151C20.5149 27.8097 16.9809 27.8257 14.2451 26.0548Z" fill="#7F0D07" />
                                        <path opacity="0.8" d="M34.3355 8.39868C34.3355 3.76022 30.6085 0 26.011 0C21.4135 0 17.6865 3.76022 17.6865 8.39868V15.9912C17.6865 20.6296 21.4135 24.3898 26.011 24.3898C30.6085 24.3898 34.3355 20.6296 34.3355 15.9912V8.39868Z" fill="url(#paint13_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M34.0801 6.37305C33.5056 6.72273 32.9638 7.14913 32.4689 7.65236L27.2775 12.9316C24.1989 16.0624 24.0378 21.0279 26.786 24.3535C31.0125 23.9553 34.3353 20.335 34.3353 15.9278V8.46188C34.3353 7.74086 34.2468 7.04105 34.0801 6.37305Z" fill="url(#paint14_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M28.1162 24.1158C28.7897 21.0187 31.1343 18.5526 34.1398 17.7554C33.4669 20.8555 31.1189 23.318 28.1162 24.1158Z" fill="#598000" />
                                        <path fill-rule="evenodd" clip-rule="evenodd" d="M17.924 6.44482C18.4515 6.77915 18.95 7.17927 19.4083 7.64527L24.5997 12.9245C27.6761 16.053 27.8391 21.0137 25.0971 24.3392C20.9291 23.8775 17.6855 20.2913 17.6855 15.9275V8.46151C17.6855 7.76652 17.7682 7.09111 17.924 6.44482Z" fill="url(#paint15_linear_29_5647)" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M25.9409 14.7051C24.4736 17.3024 24.4733 20.52 25.9371 23.1183C27.4034 20.5211 27.4056 17.3034 25.9409 14.7051Z" fill="#A54F00" />
                                        <path opacity="0.8" fill-rule="evenodd" clip-rule="evenodd" d="M23.8681 24.1076C23.1784 21.0543 20.862 18.6253 17.8955 17.8237C18.5833 20.8826 20.9001 23.307 23.8681 24.1076Z" fill="#AA1500" />
                                        <defs>
                                            <linearGradient id="paint0_linear_29_5647" x1="38.4202" y1="1.7162" x2="21.1747" y2="18.8094" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FBE41F" />
                                                <stop offset="1" stop-color="#C4DA30" />
                                            </linearGradient>
                                            <linearGradient id="paint1_linear_29_5647" x1="27.8262" y1="17.5498" x2="52.0005" y2="17.5498" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#73CC81" />
                                                <stop offset="1" stop-color="#C7DB44" />
                                            </linearGradient>
                                            <linearGradient id="paint2_linear_29_5647" x1="37.2679" y1="14.5532" x2="28.4423" y2="26.1987" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#A4BC0F" />
                                                <stop offset="1" stop-color="#5BAA22" />
                                            </linearGradient>
                                            <linearGradient id="paint3_linear_29_5647" x1="38.4446" y1="50.3451" x2="21.1991" y2="33.2519" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#6AC284" />
                                                <stop offset="1" stop-color="#6ABBE7" />
                                            </linearGradient>
                                            <linearGradient id="paint4_linear_29_5647" x1="51.8933" y1="29.5483" x2="41.9546" y2="16.6499" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#4BA03A" />
                                                <stop offset="1" stop-color="#2E8F6D" />
                                            </linearGradient>
                                            <linearGradient id="paint5_linear_29_5647" x1="17.627" y1="27.6104" x2="17.627" y2="51.9999" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#928EC4" />
                                                <stop offset="1" stop-color="#68B6E3" />
                                            </linearGradient>
                                            <linearGradient id="paint6_linear_29_5647" x1="22.6308" y1="34.2844" x2="35.7294" y2="43.5877" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#3E6AAD" />
                                                <stop offset="1" stop-color="#34808E" />
                                            </linearGradient>
                                            <linearGradient id="paint7_linear_29_5647" x1="13.5178" y1="50.3608" x2="30.7634" y2="33.2675" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#958DC2" />
                                                <stop offset="1" stop-color="#CD8CBD" />
                                            </linearGradient>
                                            <linearGradient id="paint8_linear_29_5647" x1="20.1744" y1="20.7237" x2="6.81284" y2="29.8538" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#735095" />
                                                <stop offset="1" stop-color="#5260A6" />
                                            </linearGradient>
                                            <linearGradient id="paint9_linear_29_5647" x1="24.1744" y1="17.6077" x2="0" y2="17.6077" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F56270" />
                                                <stop offset="1" stop-color="#CE8BBC" />
                                            </linearGradient>
                                            <linearGradient id="paint10_linear_29_5647" x1="14.5397" y1="22.2734" x2="7.9854" y2="34.0482" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#BF3653" />
                                                <stop offset="1" stop-color="#8D487C" />
                                            </linearGradient>
                                            <linearGradient id="paint11_linear_29_5647" x1="13.4573" y1="1.70966" x2="30.7028" y2="18.8028" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#F15F6B" />
                                                <stop offset="1" stop-color="#F79948" />
                                            </linearGradient>
                                            <linearGradient id="paint12_linear_29_5647" x1="31.5444" y1="20.9082" x2="22.3906" y2="6.96677" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#DF1F07" />
                                                <stop offset="1" stop-color="#C51B1A" />
                                            </linearGradient>
                                            <linearGradient id="paint13_linear_29_5647" x1="17.6865" y1="0" x2="17.6865" y2="24.3898" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#FF8600" />
                                                <stop offset="1" stop-color="#FFE308" />
                                            </linearGradient>
                                            <linearGradient id="paint14_linear_29_5647" x1="29.5876" y1="-1.47545" x2="15.5559" y2="7.01266" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#EB9C09" />
                                                <stop offset="1" stop-color="#CDBF05" />
                                            </linearGradient>
                                            <linearGradient id="paint15_linear_29_5647" x1="13.0097" y1="13.4022" x2="26.3035" y2="22.3366" gradientUnits="userSpaceOnUse">
                                                <stop stop-color="#ED4103" />
                                                <stop offset="1" stop-color="#F77402" />
                                            </linearGradient>
                                        </defs>
                                    </svg>
                                    <h4>Gallery</h4>
                                </a>
                            </li>
                        </ul>

                    </div>
                </div>
                <div class="event-tour">
                    <div class="poster">
                        <div class="poster-container">
                            <img src="./src/img/dum_width.png" alt="">
                        </div>
                    </div>
                    <div class="event-slider">
                        <div class="swiper mySwiper" id="event_slider">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide">
                                    <div class="slide-img-container">
                                        <img src="./src/img/dum_width.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-img-container">
                                        <img src="./src/img/dum_width.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-img-container">
                                        <img src="./src/img/dum_width.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-img-container">
                                        <img src="./src/img/dum_width.png" alt="">
                                    </div>
                                </div>
                                <div class="swiper-slide">
                                    <div class="slide-img-container">
                                        <img src="./src/img/dum_width.png" alt="">
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="posts">
                    <?php include './components/post.php' ?>
                    <?php include './components/post.php' ?>
                    <?php include './components/post.php' ?>
                </div>
            </div>
            <div id="rightbar">
                <div class="suggestions">
                    <h4>Suggested for you</h4>
                    <div class="suggestion-container">
                        <div class="suggestion">
                            <div class="suggestion-left">
                                <div class="profile-pic" style="width: 50px; height:50px;">
                                    <img src="./src/img/dum.jpeg" alt="">
                                </div>
                                <div class="profile-name">
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
                            </div>
                            <div class="suggestions-right">
                                <a href="">Follow</a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                                        <path d="M1 9.97755L9.95787 1.02222M1 1.02222L9.95787 9.97755" stroke="#489FDC" stroke-width="1.9" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="suggestion">
                            <div class="suggestion-left">
                                <div class="profile-pic" style="width: 50px; height:50px;">
                                    <img src="./src/img/dum.jpeg" alt="">
                                </div>
                                <div class="profile-name">
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
                            </div>
                            <div class="suggestions-right">
                                <a href="">Follow</a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                                        <path d="M1 9.97755L9.95787 1.02222M1 1.02222L9.95787 9.97755" stroke="#489FDC" stroke-width="1.9" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="suggestion">
                            <div class="suggestion-left">
                                <div class="profile-pic" style="width: 50px; height:50px;">
                                    <img src="./src/img/dum.jpeg" alt="">
                                </div>
                                <div class="profile-name">
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
                            </div>
                            <div class="suggestions-right">
                                <a href="">Follow</a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                                        <path d="M1 9.97755L9.95787 1.02222M1 1.02222L9.95787 9.97755" stroke="#489FDC" stroke-width="1.9" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="suggestion">
                            <div class="suggestion-left">
                                <div class="profile-pic" style="width: 50px; height:50px;">
                                    <img src="./src/img/dum.jpeg" alt="">
                                </div>
                                <div class="profile-name">
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
                            </div>
                            <div class="suggestions-right">
                                <a href="">Follow</a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                                        <path d="M1 9.97755L9.95787 1.02222M1 1.02222L9.95787 9.97755" stroke="#489FDC" stroke-width="1.9" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                        <div class="suggestion">
                            <div class="suggestion-left">
                                <div class="profile-pic" style="width: 50px; height:50px;">
                                    <img src="./src/img/dum.jpeg" alt="">
                                </div>
                                <div class="profile-name">
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
                            </div>
                            <div class="suggestions-right">
                                <a href="">Follow</a>
                                <a href="">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="11" height="11" viewBox="0 0 11 11" fill="none">
                                        <path d="M1 9.97755L9.95787 1.02222M1 1.02222L9.95787 9.97755" stroke="#489FDC" stroke-width="1.9" stroke-linecap="round" />
                                    </svg>
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="explore">
                    <a href="./discover.php">
                        Explore More Profiles
                        <svg xmlns="http://www.w3.org/2000/svg" width="27" height="27" viewBox="0 0 27 27" fill="none">
                            <path d="M27 13.5C27 10.83 26.2082 8.21987 24.7248 5.99981C23.2414 3.77974 21.133 2.04942 18.6662 1.02763C16.1994 0.00584929 13.485 -0.261496 10.8663 0.259405C8.24754 0.780305 5.84207 2.06606 3.95406 3.95406C2.06605 5.84207 0.780296 8.24754 0.259396 10.8663C-0.261505 13.485 0.0058403 16.1994 1.02762 18.6662C2.04941 21.133 3.77974 23.2414 5.9998 24.7248C8.21986 26.2082 10.83 27 13.5 27C17.0804 27 20.5142 25.5777 23.0459 23.0459C25.5777 20.5142 27 17.0804 27 13.5ZM13.8628 20.25C13.6422 20.0245 13.5187 19.7217 13.5187 19.4063C13.5187 19.0908 13.6422 18.788 13.8628 18.5625L17.7187 14.6813L5.78812 14.6813C5.47484 14.6813 5.17438 14.5568 4.95285 14.3353C4.73133 14.1138 4.60687 13.8133 4.60687 13.5C4.60687 13.1867 4.73133 12.8863 4.95285 12.6647C5.17438 12.4432 5.47484 12.3188 5.78812 12.3188L17.6006 12.3188L13.8628 8.58095C13.639 8.35717 13.5133 8.05366 13.5133 7.73719C13.5133 7.42073 13.639 7.11722 13.8628 6.89344C14.0866 6.66967 14.3901 6.54395 14.7066 6.54395C15.023 6.54395 15.3265 6.66967 15.5503 6.89344L22.1906 13.5675L15.5334 20.25C15.4237 20.3597 15.2935 20.4467 15.1502 20.5061C15.0069 20.5655 14.8533 20.596 14.6981 20.596C14.543 20.596 14.3894 20.5655 14.2461 20.5061C14.1027 20.4467 13.9725 20.3597 13.8628 20.25Z" fill="#489FDC" />
                        </svg>
                    </a>
                </div>
                <div class="activities">
                    <h4>Activities</h4>
                    <div class="activity-container">
                        <div class="activity">
                            <p>Tanmoy Sir was shooted by CSE students</p>
                        </div>
                        <div class="activity">
                            <p>Tanmoy Sir was shooted by CSE students</p>
                        </div>
                        <div class="activity">
                            <p>Tanmoy Sir was shooted by CSE students</p>
                        </div>
                        <div class="activity">
                            <p>Tanmoy Sir was shooted by CSE students</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<script>
    function previewImage() {
        const input = document.getElementById('imageInput');
        const preview = document.getElementById('imagePreview');

        const file = input.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        } else {
            preview.style.display = 'none';
        }
    }


    function previewAudio() {
        const input = document.getElementById('audioInput');
        const preview = document.getElementById('audioPreview');

        const file = input.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        } else {
            preview.style.display = 'none';
        }
    }

    function previewVideo() {
        const input = document.getElementById('videoInput');
        const preview = document.getElementById('videoPreview');

        const file = input.files[0];
        if (file) {
            preview.src = URL.createObjectURL(file);
            preview.style.display = 'block';
        } else {
            preview.style.display = 'none';
        }
    }
</script>

<script>
    var swiper = new Swiper("#event_slider", {
        slidesPerView: 3,
        spaceBetween: 10,
        freeMode: true,
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
        },
    });
</script>