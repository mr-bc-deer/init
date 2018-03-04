<?php

?><!DOCTYPE html>
<html>
<head>
    <meta charset="<?php bloginfo( 'charset' ); ?>" />
    <meta name="viewport" content="width=device-width" />
    <title>Diman Man | React</title>
    <?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>
    <header id="header_main">
        <div id="header_wrap">
            <div id="avatar"><img src="<?php echo get_stylesheet_directory_uri(); ?>/img/placeholder.png" alt="avatar"></div>
            <div id="greetings">
                <h1>Hi! I'm Diman Man</h1>
                <p>I would like to welcome you on my website. You can find here my CV & portfolio.</p>
                <p>Visit my <a class="link_item" href="#">blog</a> to get more info about my last projects!</p>
            </div>
            <div id="main_navbar">
                <nav class="menu">
                    <ul class="menu_list">
                        <?php
                            $menu_args =  array(
                                'theme_location' => 'dm_primary',
                                'container'      => 'ul',
                                'menu_class'=> 'menu_list',
                                'items_wrap'     => '%3$s',
                                'echo'           => true,

                            );
                            wp_nav_menu( $menu_args );
                        ?>
                    </ul>
                </nav>
            </div>
        </div>
    </header>
