<!-- Main Sidebar --->
<aside class="main-sidebar sidebar-dark-primary elevation-4">
    
    <!-- Logo -->
    <a href="#" class="brand-link">

        <img
        src="<?= route('assets/img/logo.png') ?>"
        alt="AdminLTE Logo" 
        class="brand-image img-circle elevation-3" 
        style="opacity: .8">

        <span class="brand-text font-weight-light">
            <?=APP_NAME_PROJECT ?>
        </span>

    </a>
    
    <!-- Sidebar -->
    <div class="sidebar">
        
        <!-- Sidebar User Panel -->
        <div class="user-panel mt-3 pb-3 mb-3 d-flex">

            <div class="image">

                <img 
                src="<?= route('assets/img/user2-160x160.png') ?>"
                class="img-circle elevation-2" 
                alt="User Image">

            </div>

            <div class="info">
                <a href="#" class="d-block"> Usuario Admin </a>
            </div>

        </div>        
        
        <?php
            # Sidebar Menu
            include "menu.php";
        ?>
      
    </div>
    
</aside>