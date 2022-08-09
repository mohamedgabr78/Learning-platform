<?php
include_once '../backend/config.php';
?>

<nav>
    <a href="home.php">

        <picture>
            <source media="(max-width:720px)" srcset="/frontend/image/logo_mobile.png" />
            <img class="logo" src="/frontend/image/logo_desktop.png" alt="logo" />
        </picture>
    </a>

    <div class="profile">

        <?php
        if (loggedIn()) {
            echo "<span class='user'>Welcome {$_SESSION['user']['user_name']}</span>

        <div class='circle avatar'>
            <img alt='profile-img' src='https://www.nicepng.com/png/detail/799-7998295_profile-placeholder-woman-720-profile-photo-placeholder-png.png' />
        </div>
        <a href='../backend/logout.php'>logOut</a>
        <i class='fa fa-sign-out' aria-hidden='true'></i>
        ";
        } else echo "<a href='login.php'><span class='welcome'>Login</span></a>
        <i class='fa fa-sign-out' aria-hidden='true'></i>
        ";
        ?>
        <div>
        </div>
    </div>
</nav>
</div>
</nav>