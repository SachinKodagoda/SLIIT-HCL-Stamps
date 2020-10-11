<div class="header_cover">
    <div class="header_profile">
        <div class="imageContainer">
            <img src="<?php echo URLROOT ?>/img/modules/header/settings.svg" alt="setting_img" class="setting_img filpX" />
        </div>
        <div class="imageContainer">
            <img src="<?php echo URLROOT ?>/img/modules/header/user.svg" alt="user_img" class="user_img filpX" />
        </div>
        <div class="imageContainer">
            <img src="<?php echo URLROOT ?>/img/modules/header/logout.svg" alt="logout_img" class="logout_img" />
        </div>
    </div>
    <div class="header_navBar">
        <div class="header_navItem <?php echo $data['page'] === 'home' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/home',true)">Home<img src="<?php echo URLROOT ?>/img/modules/header/home.svg" alt="navitem" class="header_img" /></div>
        <div class="header_navItem <?php echo $data['page'] === 'about' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/about',true)">About<img src="<?php echo URLROOT ?>/img/modules/header/info.svg" alt="navitem" class="header_img" /></div>
        <div class="header_navItem <?php echo $data['page'] === 'orders' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/orders',true)">Orders<img src="<?php echo URLROOT ?>/img/modules/header/notification.svg" alt="navitem" class="header_img" /></div>
        <div class="header_navItem <?php echo $data['page'] === 'cart' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/cart',true)">Cart<img src="<?php echo URLROOT ?>/img/modules/header/cart.svg" alt="navitem" class="header_img" /><span class="header_cartItems">0</span></div>
        <div class="header_navItem <?php echo $data['page'] === 'account' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/account',true)">Account<img src="<?php echo URLROOT ?>/img/modules/header/user.svg" alt="navitem" class="header_img filpX" /></div>
        <div class="header_navItem <?php echo $data['page'] === 'contact' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/contact',true)">Contact<img src="<?php echo URLROOT ?>/img/modules/header/phone.svg" alt="navitem" class="header_img" /></div>
    </div>
</div>