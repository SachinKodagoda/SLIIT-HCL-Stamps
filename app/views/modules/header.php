<div class="header_cover">
    <div class="header_profile">
        <div class="imageContainer">
            <img src="./img/common/navigation/settings.svg" alt="setting_img" class="setting_img filpX" />
        </div>
        <div class="imageContainer">
            <img src="./img/common/navigation/user.svg" alt="user_img" class="user_img filpX" />
        </div>
        <div class="imageContainer">
            <img src="./img/common/navigation/logout.svg" alt="logout_img" class="logout_img" />
        </div>
    </div>
    <div class="header_navBar">
        <div class="header_navItem" onclick="navFunction('<?php echo URLROOT ?>/home',true)">Home<img src="./img/common/navigation/home.svg" alt="navitem" class="header_img" /></div>
        <div class="header_navItem" onclick="navFunction('<?php echo URLROOT ?>/about',true)">About<img src="./img/common/navigation/info.svg" alt="navitem" class="header_img" /></div>
        <div class="header_navItem" onclick="navFunction('<?php echo URLROOT ?>/orders',true)">Orders<img src="./img/common/navigation/notification.svg" alt="navitem" class="header_img" /></div>
        <div class="header_navItem" onclick="navFunction('<?php echo URLROOT ?>/cart',true)">Cart<img src="./img/common/navigation/cart.svg" alt="navitem" class="header_img" /><span class="header_cartItems">0</span></div>
        <div class="header_navItem" onclick="navFunction('<?php echo URLROOT ?>/account',true)">Account<img src="./img/common/navigation/user.svg" alt="navitem" class="header_img filpX" /></div>
        <div class="header_navItem" onclick="navFunction('<?php echo URLROOT ?>/contact',true)">Contact<img src="./img/common/navigation/phone.svg" alt="navitem" class="header_img" /></div>
    </div>
</div>