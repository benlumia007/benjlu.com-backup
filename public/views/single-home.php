<?php $engine->include( 'partials/header/home' ); ?>
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
<section id="portfolio" class="site-portfolio">
    <main id="content" class="content-area">
        <article class="portfolio">
            <header class="entry-header">
                <h1 class="entry-title"><?= e( 'Portfolio' ); ?></h1>
                <span class="entry-description"><?= e( 'Some of my recent works.' ); ?></span>
            </header>
            <div class="entry-content">
                <ul>
                    <?php $portfolios = Blush\Query::make([ 'type' => 'portfolio', 'number' => 9, 'order' => 'desc' ] ); ?>
                    <?php foreach ( $portfolios as $portfolio ) : ?>
                        <li>
                            <figure class="post-thumbnail">
                                <img src="<?= $portfolio->metaSingle( 'thumbnail' ); ?>" />
                            </figure>
                            <div class="caption">
                                <h3 class="caption-text"><?= $portfolio->title(); ?></h3>
                                <span class="caption-description"><?= $portfolio->metaSingle( 'caption' ); ?></span>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </article>
    </main>
</section>
<section id="blog" class="site-blog">
    <main id="content" class="content-area">
        <article class="blog">
            <header class="entry-header">
                <h1 class="entry-title"><?= e( 'Blog' ); ?></h1>
                <span class="entry-description"><?= e( 'Latest' ); ?></span>
            </header>
            <div class="entry-content">
                <ul>
                    <?php $posts = Blush\Query::make([ 'type' => 'post', 'number' => 2 ] ); ?>
                    <?php foreach ( $posts as $post ) : ?>
                        <li>
                            <?php if ( $post->metaSingle( 'thumbnail' ) ) { ?>
                                <figure class="post-thumbnail">
                                    <img src="<?= $post->metaSingle( 'thumbnail' ); ?>" />
                                </figure>
                            <?php } ?>
                            <header class="entry-header">
                                <h1 class="entry-title"><a href="<?= $post->uri(); ?>"><?= $post->title(); ?></a></h1>
                            </header>
                            <div class="entry-content">
                                <?= $post->excerpt(); ?>
                            </div>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </article>
    </main>
</section>
<?php $engine->include( 'partials/footer/default' ); ?>