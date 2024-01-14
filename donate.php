<?php include './components/script.php' ?>
<?php include './components/styles.php' ?>
<title>Donate</title>


<?php $page = 'donate';
include './components/navbar.php'  ?>

<div id="parent">
    <?php $page = 'donate';
    include './components/sidebar.php'  ?>
    <div class="content-container">
        <div class="donate-content">
            <div class="donate-top">
                <div class="left-text">
                    <p>Hey there, our incredible alumni! Thank you for considering giving back to your alma mater.</p>
                </div>
                <div class="scl-logo">
                    <img src="./src/img/dum.jpeg" alt="">
                </div>
            </div>
            <div class="donate-ammount">
                <form action="" method="">
                    <div class="ammount">
                        <input type="number" name="" id="ammount" placeholder="Enter Amount">
                        <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" viewBox="0 0 40 40" fill="none">
                            <path d="M16 14.9998C16 14.0623 16.6968 12.9753 18 12.3997V17.5987C16.6969 17.0244 16 15.9374 16 14.9998ZM22 27.5987V22.401C23.3031 22.9753 24 24.0623 24 24.9998C24 25.9374 23.3031 27.0244 22 27.5987Z" fill="#5ECC4F" stroke="black" />
                            <path d="M39.5 20C39.5 30.7699 30.7699 39.5 20 39.5C9.23014 39.5 0.5 30.7699 0.5 20C0.5 9.23014 9.23014 0.5 20 0.5C30.7699 0.5 39.5 9.23014 39.5 20ZM21.4142 6.58579C21.0391 6.21071 20.5304 6 20 6C19.4696 6 18.9609 6.21071 18.5858 6.58579C18.2107 6.96086 18 7.46957 18 8V8.22566C14.7529 8.9665 12 11.5033 12 15C12 18.4967 14.7529 21.0335 18 21.7743V27.5988C16.6969 27.0246 16 25.9376 16 25C16 24.4696 15.7893 23.9609 15.4142 23.5858C15.0391 23.2107 14.5304 23 14 23C13.4696 23 12.9609 23.2107 12.5858 23.5858C12.2107 23.9609 12 24.4696 12 25C12 28.4967 14.7529 31.0335 18 31.7743V32C18 32.5304 18.2107 33.0391 18.5858 33.4142C18.9609 33.7893 19.4696 34 20 34C20.5304 34 21.0391 33.7893 21.4142 33.4142C21.7893 33.0391 22 32.5304 22 32V31.7743C25.2471 31.0335 28 28.4967 28 25C28 21.5033 25.2471 18.9665 22 18.2257V12.3999C23.3032 12.9755 24 14.0625 24 15C24 15.5304 24.2107 16.0391 24.5858 16.4142C24.9609 16.7893 25.4696 17 26 17C26.5304 17 27.0391 16.7893 27.4142 16.4142C27.7893 16.0391 28 15.5304 28 15C28 11.5033 25.2471 8.9665 22 8.22566V8C22 7.46957 21.7893 6.96086 21.4142 6.58579Z" fill="#5ECC4F" stroke="black" />
                        </svg>
                    </div>
                    <input type="submit" value="DONATE">
                </form>
            </div>
            <div class="thankyou-msg">
                <img src="./src/img/thankyou.svg" style="width: 100%;" alt="">
            </div>
            <div class="donate-bottom">
                <div class="box box1"></div>
                <div class="box box2"></div>
                <div class="msg">
                    <p>"Generosity knows no bounds; it's a gift that keeps on giving."</p>
                    <a href="donate.php" class="btn btn-success">DONATE</a>
                </div>
            </div>
        </div>
    </div>
</div>