<!DOCTYPE html>
<html>
    <head>
        <?php wp_head(); ?>
    </head>
    <body <?php body_class();?>>   
        <header>
            <div class="headimg">
                <img src="http://localhost/wp-content/uploads/2020/04/logo.jpg"></img>
            </div>
            <?php wp_nav_menu(
                array(
                'theme_location' => 'top-menu'
                )
                )
            ?>
        </header>
        <div class="trans"> 