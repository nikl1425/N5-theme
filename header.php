<!DOCTYPE html>
<html class="h-full" lang="en" class="h-full">
<head>
    <?php wp_head(); ?>
    <title><?php echo the_title(); ?></title>
</head>
<body class="h-screen font-sans">
    <div class="wrapper-flex-body">
    <div class="b-gray b-2-b">
        <nav class="m-w-screen-xl m-x-auto py-3 flex flex-col align-center space-between">
            <div class="shrink-0">
                <a href="<?php echo home_url(); ?>">
                    <?php
                        $themeLogoExist = has_custom_logo();
                        $custom_logo_id = get_theme_mod( 'custom_logo' );
                        $logo = wp_get_attachment_image_src( $custom_logo_id , 'full' );
                        if($themeLogoExist){
                            echo '<img width="48" src="' . esc_url( $logo[0] ) . '" alt="' . get_bloginfo( 'name' ) . '">';
                        } else {
                            echo "<h1>custom logo</h1>";
                        };
                    ?> 
                </a>
                
            </div>
            <div class="flex-col">
                <?php
                    function nav_link($url){
                        $nav_link = "/" + $url; 
                        return home_url(nav_link); 
                    }
                    wp_nav_menu( array( 'theme_location' => 'header_menu',
                                        'container_class' => 'custom-nav', ) );
                ?>
            </div>
        </nav>
    </div>
    <main class="m-w-screen-xl m-x-auto px-4 grow-1">
    
    
    
   