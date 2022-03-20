<?php $engine->include( 'partials/header/default' ); ?>
    <section id="content" class="site-content">
        <div class="content-area">
            <article class="post">
                <header>
                    <h1 class="entry-title"><?= $single->title(); ?></h1>
                </header>
            </article>
        </div>
    </section>
<?php $engine->include( 'partials/footer/default' ); ?>