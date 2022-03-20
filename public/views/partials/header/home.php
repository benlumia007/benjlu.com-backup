<!doctype html>
<html>
<head>
    <?= $doctitle ? $doctitle->toHtml() : '' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?= assets( 'assets/css/screen.css' ); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&family=Merriweather:wght@400;700&family=Tangerine&display=swap" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<section id="container" class="site-container">
    <nav id="primary" class="menu-primary">
        <button class="menu-toggle"> <?= e( 'Menu' ); ?></button>
        <ul class="menu-items">
            <?php 
                $primaryMenu = config( 'app', 'primary' );
                foreach ($primaryMenu as $primary ) : ?>
                    <li class="menu-item"><a href="<?= $primary['link']; ?>"><?= $primary[ 'title' ]; ?></a></li>
                <?php endforeach; ?>
        </ul>
    </nav>
    <header id="masthead" class="site-header custom-image">
        <div class="site-avatar"></div>
        <div class="site-branding">
            <h1 class="site-title"><a href="<?= uri() ?>"><?= config( 'app', 'title' ); ?></a></h1>
            <span class="site-description"><?= config( 'app', 'description' ); ?></span>
        </div>
    </header>