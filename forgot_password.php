<?php include './components/script.php' ?>
<?php include './components/styles.php' ?>
<title>Forgot Password</title>

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
            <div class="forgot-password-container">
                <div class="forgot-pass-text">
                    <h3>Enter OTP</h3>
                    <p>An authentication code has been
                        send to your registered mail.</p>
                </div>
                <form action="" method="POST" id="otpForm">
                    <div class="otp">
                        <input type="text" maxlength="1" pattern="\d" title="Please enter a digit" required>
                        <input type="text" maxlength="1" pattern="\d" title="Please enter a digit" required>
                        <input type="text" maxlength="1" pattern="\d" title="Please enter a digit" required>
                        <input type="text" maxlength="1" pattern="\d" title="Please enter a digit" required>
                    </div>

                    <input type="submit" id="submitBtn" class="btn account-create"/>
                </form>
            </div>
        </div>
    </div>
</div>

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