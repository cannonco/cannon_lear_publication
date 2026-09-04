<!doctype html><html <?php language_attributes(); ?>><head><meta charset="<?php bloginfo('charset'); ?>"><meta name="viewport" content="width=device-width,initial-scale=1"><?php wp_head(); ?></head>
<body <?php body_class(); ?>><?php wp_body_open(); ?>
<header class="site-header"><div class="wrap header-inner">
  <a class="brand" href="<?php echo esc_url(home_url('/')); ?>"><img src="<?php echo cannon_lear_asset('cannon-lear-logo.png'); ?>" alt="Cannon-Lear Publishing"></a>
  <button class="menu-toggle" aria-expanded="false" aria-controls="primary-nav">Menu</button>
  <nav class="nav" id="primary-nav" aria-label="Primary navigation"><ul>
    <li><a href="<?php echo esc_url(home_url('/')); ?>" <?php if(is_front_page()) echo 'aria-current="page"'; ?>>Home</a></li>
    <li><a href="<?php echo esc_url(home_url('/books/ekm/')); ?>" <?php if(is_page('ekm')) echo 'aria-current="page"'; ?>>Books</a></li>
    <li><a href="<?php echo esc_url(home_url('/authors/cory-lee-cannon/')); ?>" <?php if(is_page('cory-lee-cannon')) echo 'aria-current="page"'; ?>>Authors</a></li>
    <li><a href="<?php echo esc_url(home_url('/contact/')); ?>" <?php if(is_page('contact')) echo 'aria-current="page"'; ?>>Contact</a></li>
  </ul></nav>
</div></header><main id="main-content">
