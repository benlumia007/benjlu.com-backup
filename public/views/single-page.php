<?php $engine->include( 'partials/header/default' ); ?>
    <section id="content" class="site-content">
        <div id="layout" class="right-sidebar">
            <main class="content-area">
                <article class="page">
                    <header class="entry-header">
                        <h1 class="entry-title"><?= $single->title(); ?></h1>
                    </header>
                    <div class="entry-content">
                        <?= $single->content(); ?>
                    </div>
                </article>
            </main>
            <aside class="widget-area">
                <div class="widget widget-author">
                    <img src="<?= $single->metaSingle( 'thumbnail' ) ?>" />
                </div>
            </aside>
        </div>
    </section>
<?php $engine->include( 'partials/footer/default' ); ?>