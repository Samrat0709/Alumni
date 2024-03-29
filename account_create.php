<?php include './components/script.php' ?>
<?php include './components/styles.php' ?>
<title>Login</title>

<div id="login">
    <div class="login-container_1">
        <div class="login-container-left">
            <div class="logo">
                <img src="./src/img/scl_logo.png" alt="">
            </div>
            <div class="scl-name">
                <h1>RHSGRAD</h1>
            </div>
        </div>
        <div class="login-container-right">
            <div class="account-create-container">
                <div id="childComponent">
                    <form action="" method="POST">
                        <div class="child-content">
                            <div class="name-input">
                                <label for="name">
                                    <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                        <path d="M17 1.5C8.7155 1.5 2 8.2155 2 16.5C2 24.7845 8.7155 31.5 17 31.5C25.2845 31.5 32 24.7845 32 16.5C32 8.2155 25.2845 1.5 17 1.5Z" stroke="#292D32" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                        <path d="M5.40625 26.019C5.40625 26.019 8.74975 21.75 16.9998 21.75C25.2498 21.75 28.5947 26.019 28.5947 26.019M16.9998 16.5C18.1932 16.5 19.3378 16.0259 20.1817 15.182C21.0256 14.3381 21.4998 13.1935 21.4998 12C21.4998 10.8065 21.0256 9.66193 20.1817 8.81802C19.3378 7.97411 18.1932 7.5 16.9998 7.5C15.8063 7.5 14.6617 7.97411 13.8178 8.81802C12.9739 9.66193 12.4998 10.8065 12.4998 12C12.4998 13.1935 12.9739 14.3381 13.8178 15.182C14.6617 16.0259 15.8063 16.5 16.9998 16.5Z" stroke="#292D32" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                    </svg>
                                </label>
                                <input type="text" name="" id="name" placeholder="Name" require>
                            </div>
                            <div class="email-input">
                                <label for="email">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="30" height="24" viewBox="0 0 30 24" fill="none">
                                        <path d="M27 0H3C1.35 0 0 1.35 0 3V21C0 22.65 1.35 24 3 24H27C28.65 24 30 22.65 30 21V3C30 1.35 28.65 0 27 0ZM26.4 6.375L16.59 12.51C15.615 13.125 14.385 13.125 13.41 12.51L3.6 6.375C3.44959 6.29057 3.31788 6.17649 3.21283 6.03968C3.10779 5.90287 3.03159 5.74617 2.98886 5.57906C2.94613 5.41195 2.93775 5.2379 2.96423 5.06746C2.99072 4.89702 3.0515 4.73372 3.14292 4.58745C3.23434 4.44118 3.35449 4.31498 3.49609 4.21649C3.63769 4.118 3.79781 4.04927 3.96674 4.01445C4.13568 3.97963 4.30992 3.97945 4.47893 4.01392C4.64794 4.04839 4.8082 4.1168 4.95 4.215L15 10.5L25.05 4.215C25.1918 4.1168 25.3521 4.04839 25.5211 4.01392C25.6901 3.97945 25.8643 3.97963 26.0333 4.01445C26.2022 4.04927 26.3623 4.118 26.5039 4.21649C26.6455 4.31498 26.7657 4.44118 26.8571 4.58745C26.9485 4.73372 27.0093 4.89702 27.0358 5.06746C27.0622 5.2379 27.0539 5.41195 27.0111 5.57906C26.9684 5.74617 26.8922 5.90287 26.7872 6.03968C26.6821 6.17649 26.5504 6.29057 26.4 6.375Z" fill="#292D32" />
                                    </svg>
                                </label>
                                <input type="email" name="" id="email" placeholder="Enter Email" require>
                            </div>
                            <div class="password">
                                <label for="password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" viewBox="0 0 24 32" fill="none">
                                        <path d="M3 31.5C2.175 31.5 1.4685 31.206 0.880502 30.618C0.292502 30.03 -0.000997453 29.324 2.54669e-06 28.5V13.5C2.54669e-06 12.675 0.294002 11.9685 0.882002 11.3805C1.47 10.7925 2.176 10.499 3 10.5H4.5V7.5C4.5 5.425 5.2315 3.656 6.6945 2.193C8.1575 0.730001 9.926 -0.000998975 12 1.02459e-06C14.075 1.02459e-06 15.844 0.731501 17.307 2.1945C18.77 3.6575 19.501 5.426 19.5 7.5V10.5H21C21.825 10.5 22.5315 10.794 23.1195 11.382C23.7075 11.97 24.001 12.676 24 13.5V28.5C24 29.325 23.706 30.0315 23.118 30.6195C22.53 31.2075 21.824 31.501 21 31.5H3ZM12 24C12.825 24 13.5315 23.706 14.1195 23.118C14.7075 22.53 15.001 21.824 15 21C15 20.175 14.706 19.4685 14.118 18.8805C13.53 18.2925 12.824 17.999 12 18C11.175 18 10.4685 18.294 9.8805 18.882C9.2925 19.47 8.999 20.176 9 21C9 21.825 9.294 22.5315 9.882 23.1195C10.47 23.7075 11.176 24.001 12 24ZM7.5 10.5H16.5V7.5C16.5 6.25 16.0625 5.1875 15.1875 4.3125C14.3125 3.4375 13.25 3 12 3C10.75 3 9.6875 3.4375 8.8125 4.3125C7.9375 5.1875 7.5 6.25 7.5 7.5V10.5Z" fill="#292D32" />
                                    </svg>
                                </label>
                                <input type="password" id="password" placeholder="Enter Password" require>
                                <span id="toggleBtn" onclick="togglePassword()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="23" viewBox="0 0 34 23" fill="none">
                                        <path d="M17 3.5C19.7581 3.49083 22.4628 4.26018 24.8032 5.71959C27.1435 7.179 29.0246 9.26924 30.23 11.75C27.755 16.805 22.7 20 17 20C11.3 20 6.245 16.805 3.77 11.75C4.97543 9.26924 6.85645 7.179 9.19682 5.71959C11.5372 4.26018 14.2419 3.49083 17 3.5ZM17 0.5C9.5 0.5 3.095 5.165 0.5 11.75C3.095 18.335 9.5 23 17 23C24.5 23 30.905 18.335 33.5 11.75C30.905 5.165 24.5 0.5 17 0.5ZM17 8C17.9946 8 18.9484 8.39509 19.6516 9.09835C20.3549 9.80161 20.75 10.7554 20.75 11.75C20.75 12.7446 20.3549 13.6984 19.6516 14.4017C18.9484 15.1049 17.9946 15.5 17 15.5C16.0054 15.5 15.0516 15.1049 14.3483 14.4017C13.6451 13.6984 13.25 12.7446 13.25 11.75C13.25 10.7554 13.6451 9.80161 14.3483 9.09835C15.0516 8.39509 16.0054 8 17 8ZM17 5C13.28 5 10.25 8.03 10.25 11.75C10.25 15.47 13.28 18.5 17 18.5C20.72 18.5 23.75 15.47 23.75 11.75C23.75 8.03 20.72 5 17 5Z" fill="#292D32" />
                                    </svg>
                                </span>

                            </div>
                            <div class="password">
                                <label for="con-password">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="24" height="32" viewBox="0 0 24 32" fill="none">
                                        <path d="M3 31.5C2.175 31.5 1.4685 31.206 0.880502 30.618C0.292502 30.03 -0.000997453 29.324 2.54669e-06 28.5V13.5C2.54669e-06 12.675 0.294002 11.9685 0.882002 11.3805C1.47 10.7925 2.176 10.499 3 10.5H4.5V7.5C4.5 5.425 5.2315 3.656 6.6945 2.193C8.1575 0.730001 9.926 -0.000998975 12 1.02459e-06C14.075 1.02459e-06 15.844 0.731501 17.307 2.1945C18.77 3.6575 19.501 5.426 19.5 7.5V10.5H21C21.825 10.5 22.5315 10.794 23.1195 11.382C23.7075 11.97 24.001 12.676 24 13.5V28.5C24 29.325 23.706 30.0315 23.118 30.6195C22.53 31.2075 21.824 31.501 21 31.5H3ZM12 24C12.825 24 13.5315 23.706 14.1195 23.118C14.7075 22.53 15.001 21.824 15 21C15 20.175 14.706 19.4685 14.118 18.8805C13.53 18.2925 12.824 17.999 12 18C11.175 18 10.4685 18.294 9.8805 18.882C9.2925 19.47 8.999 20.176 9 21C9 21.825 9.294 22.5315 9.882 23.1195C10.47 23.7075 11.176 24.001 12 24ZM7.5 10.5H16.5V7.5C16.5 6.25 16.0625 5.1875 15.1875 4.3125C14.3125 3.4375 13.25 3 12 3C10.75 3 9.6875 3.4375 8.8125 4.3125C7.9375 5.1875 7.5 6.25 7.5 7.5V10.5Z" fill="#292D32" />
                                    </svg>
                                </label>
                                <input type="password" id="con-password" placeholder="Confirm Password" require>
                                <span id="toggleBtn" onclick="togglePassword_con()">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="34" height="23" viewBox="0 0 34 23" fill="none">
                                        <path d="M17 3.5C19.7581 3.49083 22.4628 4.26018 24.8032 5.71959C27.1435 7.179 29.0246 9.26924 30.23 11.75C27.755 16.805 22.7 20 17 20C11.3 20 6.245 16.805 3.77 11.75C4.97543 9.26924 6.85645 7.179 9.19682 5.71959C11.5372 4.26018 14.2419 3.49083 17 3.5ZM17 0.5C9.5 0.5 3.095 5.165 0.5 11.75C3.095 18.335 9.5 23 17 23C24.5 23 30.905 18.335 33.5 11.75C30.905 5.165 24.5 0.5 17 0.5ZM17 8C17.9946 8 18.9484 8.39509 19.6516 9.09835C20.3549 9.80161 20.75 10.7554 20.75 11.75C20.75 12.7446 20.3549 13.6984 19.6516 14.4017C18.9484 15.1049 17.9946 15.5 17 15.5C16.0054 15.5 15.0516 15.1049 14.3483 14.4017C13.6451 13.6984 13.25 12.7446 13.25 11.75C13.25 10.7554 13.6451 9.80161 14.3483 9.09835C15.0516 8.39509 16.0054 8 17 8ZM17 5C13.28 5 10.25 8.03 10.25 11.75C10.25 15.47 13.28 18.5 17 18.5C20.72 18.5 23.75 15.47 23.75 11.75C23.75 8.03 20.72 5 17 5Z" fill="#292D32" />
                                    </svg>
                                </span>

                            </div>
                            <div class="dob">
                                <label for="dob">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="28" height="34" viewBox="0 0 28 34" fill="none">
                                        <path opacity="0.3" d="M19.295 22.88L17.675 24.485C15.725 26.435 12.305 26.45 10.34 24.485L8.735 22.88L7.1 24.485C6.14 25.445 4.85 25.985 3.5 26V30.5H24.5V26C23.15 25.985 21.86 25.445 20.9 24.485L19.295 22.88ZM23 17H5C4.175 17 3.5 17.675 3.5 18.5V23.75C4.265 23.735 4.985 23.435 5.51 22.895L8.72 19.7L11.915 22.895C13.025 24.005 14.96 24.005 16.07 22.895L19.28 19.7L22.475 22.895C23.015 23.435 23.735 23.735 24.5 23.75V18.5C24.5 17.675 23.825 17 23 17Z" fill="black" />
                                        <path d="M14 9.5C14.7956 9.5 15.5587 9.18393 16.1213 8.62132C16.6839 8.05871 17 7.29565 17 6.5C17 5.93 16.85 5.405 16.565 4.955L14 0.5L11.435 4.955C11.15 5.405 11 5.93 11 6.5C11 8.15 12.35 9.5 14 9.5ZM23 14H15.5V11H12.5V14H5C2.51 14 0.5 16.01 0.5 18.5V32C0.5 32.825 1.175 33.5 2 33.5H26C26.825 33.5 27.5 32.825 27.5 32V18.5C27.5 16.01 25.49 14 23 14ZM24.5 30.5H3.5V26C4.85 25.985 6.14 25.445 7.1 24.485L8.735 22.88L10.34 24.485C12.305 26.45 15.725 26.435 17.675 24.485L19.295 22.88L20.9 24.485C21.86 25.445 23.15 25.985 24.5 26V30.5ZM24.5 23.75C23.735 23.735 23.015 23.45 22.475 22.895L19.28 19.7L16.07 22.895C14.96 24.005 13.025 24.005 11.915 22.895L8.72 19.7L5.51 22.895C4.985 23.435 4.265 23.735 3.5 23.75V18.5C3.5 17.675 4.175 17 5 17H23C23.825 17 24.5 17.675 24.5 18.5V23.75Z" fill="#292D32" />
                                    </svg>
                                </label>
                                <input type="date" name="" id="dob" require>
                            </div>
                        </div>
                        <div class="child-content">
                            <div class="documents">
                                <label for="doc">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="31" height="26" viewBox="0 0 31 26" fill="none">
                                        <path d="M-0.00854492 4.33737H30.9537C30.9537 2.38564 29.4109 0.798828 27.5134 0.798828H3.4317C1.53419 0.798828 -0.00854492 2.38564 -0.00854492 4.33737ZM-0.00854492 6.10663V22.0301C-0.00854492 23.9818 1.53419 25.5686 3.4317 25.5686H27.5134C29.4109 25.5686 30.9537 23.9818 30.9537 22.0301V6.10663H-0.00854492ZM3.4317 21.4385C3.4317 19.8074 4.71642 18.4915 6.29678 18.4915H12.6075C14.1932 18.4915 15.4726 19.8129 15.4726 21.4385C15.4726 21.7647 15.2145 22.0301 14.8974 22.0301H4.00687C3.68972 22.0301 3.4317 21.7647 3.4317 21.4385ZM9.45213 9.64517C10.3645 9.64517 11.2396 10.018 11.8847 10.6816C12.5299 11.3452 12.8924 12.2452 12.8924 13.1837C12.8924 14.1222 12.5299 15.0222 11.8847 15.6858C11.2396 16.3494 10.3645 16.7222 9.45213 16.7222C8.53972 16.7222 7.66468 16.3494 7.01951 15.6858C6.37434 15.0222 6.01188 14.1222 6.01188 13.1837C6.01188 12.2452 6.37434 11.3452 7.01951 10.6816C7.66468 10.018 8.53972 9.64517 9.45213 9.64517ZM18.9128 10.5298C18.9128 10.0433 19.2998 9.64517 19.7729 9.64517H26.6534C27.1264 9.64517 27.5134 10.0433 27.5134 10.5298C27.5134 11.0164 27.1264 11.4144 26.6534 11.4144H19.7729C19.2998 11.4144 18.9128 11.0164 18.9128 10.5298ZM18.9128 14.0683C18.9128 13.5818 19.2998 13.1837 19.7729 13.1837H26.6534C27.1264 13.1837 27.5134 13.5818 27.5134 14.0683C27.5134 14.5549 27.1264 14.953 26.6534 14.953H19.7729C19.2998 14.953 18.9128 14.5549 18.9128 14.0683ZM18.9128 17.6069C18.9128 17.1203 19.2998 16.7222 19.7729 16.7222H26.6534C27.1264 16.7222 27.5134 17.1203 27.5134 17.6069C27.5134 18.0934 27.1264 18.4915 26.6534 18.4915H19.7729C19.2998 18.4915 18.9128 18.0934 18.9128 17.6069Z" fill="white" />
                                    </svg>
                                </label>
                                <input type="file" name="" multiple id="doc">
                            </div>
                            <div class="pass-out">
                                <label for="pass-out">
                                    <svg xmlns="http://www.w3.org/2000/svg" width="32" height="32" viewBox="0 0 32 32" fill="none">
                                        <path d="M9.63553 3.61914C8.81436 3.61914 8.02682 3.94535 7.44617 4.526C6.86551 5.10666 6.53931 5.89419 6.53931 6.71536V25.2927C6.53931 26.1139 6.86551 26.9014 7.44617 27.482C8.02682 28.0627 8.81436 28.3889 9.63553 28.3889H22.0204C22.8416 28.3889 23.6291 28.0627 24.2098 27.482C24.7904 26.9014 25.1166 26.1139 25.1166 25.2927V6.71536C25.1166 5.89419 24.7904 5.10666 24.2098 4.526C23.6291 3.94535 22.8416 3.61914 22.0204 3.61914H17.3761V13.6819C17.3761 13.8256 17.336 13.9665 17.2605 14.0888C17.1849 14.2111 17.0768 14.3099 16.9482 14.3742C16.8196 14.4385 16.6757 14.4657 16.5325 14.4528C16.3893 14.4399 16.2526 14.3874 16.1376 14.3011L13.5058 12.3273L10.874 14.3011C10.759 14.3874 10.6223 14.4399 10.4791 14.4528C10.3359 14.4657 10.192 14.4385 10.0634 14.3742C9.93484 14.3099 9.82671 14.2111 9.75113 14.0888C9.67556 13.9665 9.63553 13.8256 9.63553 13.6819V3.61914ZM15.828 3.61914H11.1836V12.1337L13.0414 10.7404C13.1754 10.64 13.3383 10.5856 13.5058 10.5856C13.6733 10.5856 13.8362 10.64 13.9702 10.7404L15.828 12.1337V3.61914Z" fill="#292D32" />
                                    </svg>
                                </label>
                                <input type="date" name="" id="pass-out" require>
                            </div>

                            <input type="submit" value="Submit" class="btn btn-success">
                        </div>

                    </form>
                    <div class="buttons">
                        <button id="backButton" onclick="changeContent('back')" class="btn account-create" disabled>
                            Back
                        </button>
                        <button id="nextButton" onclick="changeContent('next')" class="btn account-create">
                            Next
                        </button>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<script>
    function togglePassword_con() {
        const passwordInput = document.getElementById('con-password');
        const toggleBtn = document.getElementById('toggleBtn-con');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    }
</script>
<script>
    function togglePassword() {
        const passwordInput = document.getElementById('password');
        const toggleBtn = document.getElementById('toggleBtn');

        if (passwordInput.type === 'password') {
            passwordInput.type = 'text';
        } else {
            passwordInput.type = 'password';
        }
    }
</script>


<script>
    // JavaScript logic for changing content in the child component
    let currentContentIndex = 0;
    const childContents = document.querySelectorAll('.child-content');

    function changeContent(action) {
        if (action === 'back') {
            currentContentIndex = Math.max(0, currentContentIndex - 1);
        } else if (action === 'next') {
            currentContentIndex = Math.min(childContents.length - 1, currentContentIndex + 1);
        }

        // Hide all child content divs and show the current one
        childContents.forEach((content, index) => {
            content.style.display = index === currentContentIndex ? 'flex' : 'none';
        });


        // Enable or disable buttons based on current index
        document.getElementById('backButton').disabled = currentContentIndex === 0;
        document.getElementById('nextButton').disabled = currentContentIndex === childContents.length - 1;
    }

    // Initially, hide all child content divs except the first one
    childContents.forEach((content, index) => {
        content.style.display = index === 0 ? 'flex' : 'none';
    });
</script>