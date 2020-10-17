<div class="header_cover">
    <div class="header_profile">
        <div class="imageContainer">
            <img src="<?php echo URLROOT ?>/img/modules/header/settings.svg" alt="setting_img" class="setting_img filpX" />
        </div>
        <div class="imageContainer">
            <img src="<?php echo URLROOT ?>/img/modules/header/user.svg" alt="user_img" class="user_img filpX" />
        </div>
        <div class="imageContainer">
            <img src="<?php echo URLROOT ?>/img/modules/header/logout.svg" alt="logout_img" class="logout_img" onclick="navFunction('<?php echo URLROOT ?>/login/index',true)"/>
        </div>
    </div>
    <div class="header_navBar">
        <div class="header_navItem <?php echo $data['page'] === 'home' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/home/index/1',true)">Home<img src="<?php echo URLROOT ?>/img/modules/header/<?php echo $data['page'] === 'home' ? 'home2.svg' : 'home.svg'?>" alt="navitem" class="header_img" /></div>
        <div class="header_navItem <?php echo $data['page'] === 'about' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/about/index',true)">About<img src="<?php echo URLROOT ?>/img/modules/header/<?php echo $data['page'] === 'about' ? 'about2.svg' : 'about.svg'?>" alt="navitem" class="header_img" /></div>
        <div class="header_navItem <?php echo $data['page'] === 'orders' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/orders/index',true)">Orders<img src="<?php echo URLROOT ?>/img/modules/header/<?php echo $data['page'] === 'orders' ? 'orders2.svg' : 'orders.svg'?>" alt="navitem" class="header_img" /></div>
        <div class="header_navItem <?php echo $data['page'] === 'cart' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/cart/index',true)">Cart<img src="<?php echo URLROOT ?>/img/modules/header/<?php echo $data['page'] === 'cart' ? 'cart2.svg' : 'cart.svg'?>" alt="navitem" class="header_img" /><span class="cartItems">0</span></div>
        <div class="header_navItem <?php echo $data['page'] === 'account' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/account/index',true)">Account<img src="<?php echo URLROOT ?>/img/modules/header/<?php echo $data['page'] === 'account' ? 'account2.svg' : 'account.svg'?>" alt="navitem" class="header_img filpX" /></div>
        <div class="header_navItem <?php echo $data['page'] === 'contact' ? 'active' : ''?>" onclick="navFunction('<?php echo URLROOT ?>/contact/index',true)">Contact<img src="<?php echo URLROOT ?>/img/modules/header/<?php echo $data['page'] === 'contact' ? 'contact2.svg' : 'contact.svg'?>" alt="navitem" class="header_img" /></div>
    </div>
</div>