<style>
    .modal {
        display: none;
        position: fixed;
        z-index: 1;
        padding-top: 50px;
        left: 0;
        top: 0;
        width: 100%;
        height: 100%;
        overflow: auto;
        background-color: rgba(0, 0, 0, 0.9);
    }

    .modal-content {
        display: flex;
        align-items: center;
        justify-content: center;
        width: 80%;
        max-width: 800px;
    }

    .close {
        position: absolute;
        top: 15px;
        right: 35px;
        color: #f1f1f1;
        font-size: 40px;
        font-weight: bold;
        cursor: pointer;
    }
</style>


<div class="post-container">
    <div class="post-top">
        <div class="post-top-left">
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
        <div class="post-top-right">
            <a href="#">
                <svg xmlns="http://www.w3.org/2000/svg" width="57" height="13" viewBox="0 0 57 13" fill="none">
                    <ellipse cx="6.4248" cy="6.4187" rx="6" ry="6" fill="#404040" />
                    <ellipse cx="28.4248" cy="6.4187" rx="6" ry="6" fill="#404040" />
                    <ellipse cx="50.4258" cy="6.4187" rx="6" ry="6" fill="#404040" />
                </svg>
            </a>
        </div>
    </div>
    <div class="post-text">
        <p>Trip To Barcelona. I really love visiting this city.</p>
    </div>
    <div class="post-media">
        <div class="media-container">
            <img src="./src/img/dum_width.png" alt="" onclick="openModal(this.src)">
        </div>
        <div class="media-container">
            <img src="./src/img/dum_width.png" alt="" onclick="openModal(this.src)">
        </div>
        <div class="media-container">
            <img src="./src/img/dum_width.png" alt="" onclick="openModal(this.src)">
        </div>
        <div class="media-container">
            <img src="./src/img/dum_width.png" alt="" onclick="openModal(this.src)">
        </div>
    </div>
    <div class="post-bottom">
        <div class="post-bottom-left">
            <div class="like">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="48" viewBox="0 0 47 48" fill="none">
                        <g clip-path="url(#clip0_488_626)">
                            <path d="M22.841 11.5286L24.1136 12.7633L25.3406 11.4833C25.6229 11.1888 25.8722 10.9183 26.1067 10.6641C26.5567 10.1761 26.9518 9.7476 27.4191 9.32313L27.4198 9.32251C31.0683 6.00521 35.7936 5.46958 39.3612 7.61496C43.1109 9.87119 45.0808 14.6997 43.9292 19.3345L43.9291 19.335C42.8365 23.7373 40.1629 27.2926 36.9138 30.8074L38.208 32.0038L36.9138 30.8074C33.0848 34.9496 28.6507 38.4478 23.9948 41.8376C17.6048 37.1651 11.6145 32.3944 7.19876 26.0429L7.19821 26.0421C5.17511 23.1355 3.78694 20.1977 3.72171 16.8845L3.72171 16.8844C3.63537 12.5137 6.10688 8.60985 9.65882 7.07705L9.65914 7.07691C13.2025 5.54699 17.6251 6.43843 20.8382 9.58699C21.239 9.97995 21.6474 10.3745 22.0779 10.7904C22.3241 11.0282 22.5776 11.2731 22.841 11.5286Z" stroke="#292D32" stroke-width="3.525" />
                        </g>
                        <defs>
                            <clipPath id="clip0_488_626">
                                <rect width="47" height="47" fill="white" transform="translate(-0.000976562 0.654297)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
            <div class="comment">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="48" viewBox="0 0 47 48" fill="none">
                        <mask id="path-1-inside-1_29_5557" fill="white">
                            <path fill-rule="evenodd" clip-rule="evenodd" d="M42.0095 35.1802C43.935 31.9548 45.0413 28.1837 45.0413 24.1542C45.0413 12.2571 35.3968 2.61255 23.4997 2.61255C11.6025 2.61255 1.95801 12.2571 1.95801 24.1542C1.95801 36.0514 11.6025 45.6959 23.4997 45.6959C27.5378 45.6959 31.3165 44.5848 34.5465 42.6516L44.7435 45.3839L42.0095 35.1802Z" />
                        </mask>
                        <path d="M42.0095 35.1802L38.9828 33.3734C38.4944 34.1914 38.358 35.1723 38.6046 36.0926L42.0095 35.1802ZM34.5465 42.6516L35.4589 39.2467C34.5373 38.9997 33.5549 39.1369 32.7363 39.6269L34.5465 42.6516ZM44.7435 45.3839L43.8312 48.7887C45.0477 49.1147 46.3456 48.7669 47.2361 47.8764C48.1266 46.9859 48.4744 45.688 48.1484 44.4715L44.7435 45.3839ZM41.5163 24.1542C41.5163 27.53 40.5912 30.679 38.9828 33.3734L45.0362 36.9871C47.2787 33.2305 48.5663 28.8374 48.5663 24.1542H41.5163ZM23.4997 6.13755C33.45 6.13755 41.5163 14.2039 41.5163 24.1542H48.5663C48.5663 10.3103 37.3436 -0.912451 23.4997 -0.912451V6.13755ZM5.48301 24.1542C5.48301 14.2039 13.5493 6.13755 23.4997 6.13755V-0.912451C9.65574 -0.912451 -1.56699 10.3103 -1.56699 24.1542H5.48301ZM23.4997 42.1709C13.5493 42.1709 5.48301 34.1045 5.48301 24.1542H-1.56699C-1.56699 37.9982 9.65574 49.2209 23.4997 49.2209V42.1709ZM32.7363 39.6269C30.038 41.2418 26.8827 42.1709 23.4997 42.1709V49.2209C28.1929 49.2209 32.5949 47.9277 36.3568 45.6762L32.7363 39.6269ZM33.6342 46.0565L43.8312 48.7887L45.6559 41.979L35.4589 39.2467L33.6342 46.0565ZM48.1484 44.4715L45.4144 34.2679L38.6046 36.0926L41.3386 46.2962L48.1484 44.4715Z" fill="black" mask="url(#path-1-inside-1_29_5557)" />
                    </svg>
                </a>
            </div>
            <div class="share">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="47" height="48" viewBox="0 0 47 48" fill="none">
                        <g clip-path="url(#clip0_29_5558)">
                            <path d="M5.25439 8.38982L42.2406 8.38982L23.7478 40.4202L18.3303 22.6609C18.252 22.4041 18.1161 22.1687 17.933 21.9725L5.25439 8.38982Z" stroke="black" stroke-width="3.525" stroke-linejoin="round" />
                        </g>
                        <defs>
                            <clipPath id="clip0_29_5558">
                                <rect width="47" height="47" fill="white" transform="translate(-0.000976562 0.654297)" />
                            </clipPath>
                        </defs>
                    </svg>
                </a>
            </div>
        </div>
        <div class="post-bottom-right">
            <div class="save">
                <a href="">
                    <svg xmlns="http://www.w3.org/2000/svg" width="36" height="44" viewBox="0 0 36 44" fill="none">
                        <path d="M2.31816 39.9744L2.31816 2.41655L34.0432 2.41655V39.9744L19.309 27.6959C18.6554 27.1512 17.706 27.1512 17.0523 27.6959L2.31816 39.9744Z" stroke="black" stroke-width="3.525" stroke-linejoin="round" />
                    </svg>
                </a>
            </div>
        </div>
    </div>
</div>

<div id="imageModal" class="modal">
    <span class="close" onclick="closeModal()">&times;</span>
    <img class="modal-content" id="modalImage">
</div>

<script>
    function openModal(src) {
        var modal = document.getElementById("imageModal");
        var modalImg = document.getElementById("modalImage");
        modal.style.display = "block";
        modalImg.src = src;
    }

    function closeModal() {
        var modal = document.getElementById("imageModal");
        modal.style.display = "none";
    }
</script>