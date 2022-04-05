<?php $engine->include( 'partials/header/default' ); ?>
<section id="about" class="site-about">
    <main id="content" class="content-area">
        <article class="about">
            <header class="entry-header">
                <h1 class="entry-title"><?= $single->title(); ?></h1>
            </header>
            <div class="entry-content">
                <?= $single->content(); ?>
            </div>
        </article>
    </main>
</section>
<?php $engine->include( 'partials/footer/default' ); ?>