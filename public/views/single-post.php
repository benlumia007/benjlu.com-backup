<?php $engine->include( 'partials/header/default' ); ?>
<section id="about" class="site-about">
    <div class="content-area">
        <article class="about">
            <header class="about-header">
                <h1 class="about-title"><?= $single->title() ?></h1>
                <?= $single->readingTime(); ?>
            </header>
            <div class="about-content">
                <?= $single->content(); ?>
            </div>
        </article>
    </div>
</section>
<?php $engine->include( 'partials/footer/default' ); ?>