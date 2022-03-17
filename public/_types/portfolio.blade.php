@extends( '_templates.main' )

@section( 'body' )
    <section id="content" class="site-content">
        <div class="content-area">
            @foreach ( $portfolios as $post )
                <article class="post">
                    <header class="entry-header">
                        <h1 class="entry-title">{{ $page->title }}</a></h1>
                    </header>
                    <div class="entry-content">
                        @yield( 'content' )
                    </div>
                </article>
            @endforeach
        </div>
    </section>
@endsection