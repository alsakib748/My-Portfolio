<section class="portfolio-area section-padding-top" id="portfolio-page">
    <div class="container">
        <div class="row">
            <div class="col-lg-6 offset-lg-3 text-center">
                <div class="section-title">
                    @if($portfolioTitle)
                        <h3 class="title">{{$portfolioTitle->title}}</h3>
                        <div class="desc">
                            {!! $portfolioTitle->sub_title !!}
                        </div>
                    @else
                        <h3 class="title">Default Title</h3>
                        <div class="desc">
                            Default subtitle.
                        </div>
                    @endif
                </div>
            </div>
        </div>
        <div class="row">
            <div class="col-sm-12">
                <ul class="filter-menu">
                    <li class="active" data-filter="*">All Projects</li>
                    @foreach ($portfolioCategories as $category)
                    <li data-filter=".{{$category->slug}}">{{$category->name}}</li>
                    @endforeach
                </ul>
            </div>
        </div>
        <div class="portfolio-wrapper">
            <div class="row portfolios">
                @foreach ($portfolioItems as $item)
                <div data-wow-delay="0.3s" class="col-md-6 col-lg-4 filter-item {{$item->category->slug}}">
                    <div class="single-portfolio">
                        <figure class="portfolio-image">
                            <img src="{{ asset($item->image) }}" alt="{{$item->title}}">
                        </figure>
                        <div class="portfolio-content">
                            <h4 class="title"><a href="#">{{$item->title}}</a></h4>
                            <div class="desc">
                                {!! $item->description !!}
                            </div>
                        </div>
                    </div>
                </div>
                @endforeach
            </div>
        </div>
    </div>
</section>
