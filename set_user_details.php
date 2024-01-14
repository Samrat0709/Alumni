<?php include './components/script.php' ?>
<?php include './components/styles.php' ?>
<title>Alumni</title>

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
            <div class="set-user-details">
                <form action="">
                    <div class="user-image">
                        <label for="imageInput"><img id="imagePreview" src="./src/img/user-img.png" alt="Default Image Preview"></label>
                        <input type="file" id="imageInput" accept="image/*" style="display: none;">
                    </div>
                    <div class="name-input">
                        <label for="name">
                            <svg width="34" height="33" viewBox="0 0 34 33" fill="none" xmlns="http://www.w3.org/2000/svg">
                                <path d="M17 1.5C8.7155 1.5 2 8.2155 2 16.5C2 24.7845 8.7155 31.5 17 31.5C25.2845 31.5 32 24.7845 32 16.5C32 8.2155 25.2845 1.5 17 1.5Z" stroke="#292D32" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                                <path d="M5.40625 26.019C5.40625 26.019 8.74975 21.75 16.9998 21.75C25.2498 21.75 28.5947 26.019 28.5947 26.019M16.9998 16.5C18.1932 16.5 19.3378 16.0259 20.1817 15.182C21.0256 14.3381 21.4998 13.1935 21.4998 12C21.4998 10.8065 21.0256 9.66193 20.1817 8.81802C19.3378 7.97411 18.1932 7.5 16.9998 7.5C15.8063 7.5 14.6617 7.97411 13.8178 8.81802C12.9739 9.66193 12.4998 10.8065 12.4998 12C12.4998 13.1935 12.9739 14.3381 13.8178 15.182C14.6617 16.0259 15.8063 16.5 16.9998 16.5Z" stroke="#292D32" stroke-width="2.25" stroke-linecap="round" stroke-linejoin="round" />
                            </svg>
                        </label>
                        <input type="text" name="" id="name" placeholder="Name" require>
                    </div>
                    <div class="user-bio" style="align-items: flex-start;">
                        <label for="bio">
                            <svg xmlns="http://www.w3.org/2000/svg" width="31" height="31" viewBox="0 0 31 31" fill="none">
                                <path d="M15.9675 0.715332C7.69194 0.715332 0.975586 7.43169 0.975586 15.7072C0.975586 23.9827 7.69194 30.6991 15.9675 30.6991C24.243 30.6991 30.9593 23.9827 30.9593 15.7072C30.9593 7.43169 24.243 0.715332 15.9675 0.715332ZM17.4666 23.2031H14.4683V14.208H17.4666V23.2031ZM17.4666 11.2096H14.4683V8.21127H17.4666V11.2096Z" fill="#292D32" />
                            </svg>
                        </label>
                        <textarea name="" id="bio" cols="30" rows="5" placeholder="Set Bio"></textarea>
                    </div>
                    <input type="submit" value="Save" class="btn account-create">
                </form>

            </div>
        </div>
    </div>
</div>


<script>
    // JavaScript to handle image preview
    document.getElementById('imageInput').addEventListener('change', function(event) {
        var preview = document.getElementById('imagePreview');
        var file = event.target.files[0];

        if (file) {
            var reader = new FileReader();

            reader.onload = function(e) {
                preview.src = e.target.result;
            };

            reader.readAsDataURL(file);
        } else {
            // If no file is selected, show the default image
            preview.src = './src/img/user-img.png';
        }
    });
</script>