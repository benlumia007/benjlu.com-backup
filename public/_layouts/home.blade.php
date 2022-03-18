@extends( '_templates.home' )

@section(  'body' )
<section id="content" class="site-content">
    <div class="content-area">
        <article class="portfolio">
            <ul class="grid">
                @foreach ( $portfolios as $portfolio )
                    <li>
                        <figure class="post-thumbnail">
                            <img src="/{{ $portfolio->thumbnail }}">
                        </figure>
                        <div class="caption">
                            <h3 class="caption-title"><a href="{{$portfolio->getUrl() }}">{{ $portfolio->title }}</a></h3>
                            <span class="caption-type">{{ ucwords( str_replace( [ 'p', '-' ], [ 'P', ' ' ], $portfolio->type ) ) }}</span>
                        </div>
                    </li>
                @endforeach
            </ul>
        </article>
    </div>
</section>
@endsection