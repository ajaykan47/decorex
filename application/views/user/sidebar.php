<nav class="account-nav">
    <ul>
        <li class="active">
            <a href="<?php echo base_url('dashboard.html'); ?>">
                <span class="icon radius-circle"><i class="pe-7s-keypad"></i></span> Dashboard
            </a>
        </li>
        <!--<li>
            <a href="<?php echo base_url('orders.html'); ?>">
                <span class="icon radius-circle"><i class="pe-7s-cart"></i></span> Orders
            </a>
        </li>-->
    <!--    <li>
            <a href="<?php echo base_url('account-detail.html'); ?>">
                <span class="icon radius-circle"><i class="pe-7s-user"></i></span> Account details
            </a>
        </li>-->
        <li>
            <a href="<?php echo base_url('profilesetting.html'); ?>">
                <span class="icon radius-circle"><i class="pe-7s-user"></i></span> Profile Settings
            </a>
        </li>
        <li>
            <a href="<?php echo base_url('Login/logout'); ?>" onclick="return confirm('Are you sure to logout?');">
                <span class="icon radius-circle"><i class="pe-7s-plug"></i></span> Log out
            </a>
        </li>
    </ul>
</nav>