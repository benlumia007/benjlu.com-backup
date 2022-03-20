<!doctype html>
<html>
<head>
    <?= $doctitle ? $doctitle->toHtml() : '' ?>
    <meta name="viewport" content="width=device-width, initial-scale=1" />
    <link rel="stylesheet" href="<?= mix( 'assets/css/screen.css' ); ?>" />
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Fira+Sans:wght@400;700&family=Merriweather:wght@400;700&family=Tangerine&display=swap" rel="stylesheet">
    <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
</head>
<body>
<section id="container" class="site-container">
    <?= primary_menu(); ?>
    <header id="masthead" class="site-header header-image">
        <div class="site-branding">
            <h1 class="site-title"><a href="<?= uri() ?>"><?= site_title(); ?></a></h1>
            <span class="site-description"><?= site_tagline(); ?></span>
        </div>
    </header>