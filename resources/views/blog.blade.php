<x-app>

    <!-- subheader -->
    <section
        id="subheader"
        data-speed="8"
        role="img"
        aria-label="High performance windows and doors manufactured in Calgary Alberta"
        class="subheader-default">

        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog</h1>
                    <ul class="crumb">
                        <li><a href="/">Home</a></li>
                        <li class="sep">/</li>
                        <li>Blog</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content">
        <div class="container">
            <div class="row">
                <div class="col-md-8">
                    <ul class="blog-list">

                        @foreach($blogs as $blog)

                            <li>
                                <div class="post-content">
                                    <div class="post-image">
                                        <img src="{{ $blog->image}}" alt="{{$blog->title}}"/>
                                    </div>


                                    <div class="date-box">
                                        <div class="day">26</div>
                                        <div class="month">FEB</div>
                                    </div>

                                    <div class="post-text">
                                        <h3><a href="{{$blog->slug}}">{{$blog->title}}t</a></h3>
                                        <p>{{$blog->content}}</p>
                                    </div>

                                    <a href="{{$blog->url}}" class="btn-more">Read More</a>
                                </div>
                            </li>

                        @endforeach

                    </ul>

                    <div class="text-center">
                        <ul class="pagination">
                            <li><a href="#">Prev</a></li>
                            <li class="active"><a href="#">1</a></li>
                            <li><a href="#">2</a></li>
                            <li><a href="#">3</a></li>
                            <li><a href="#">4</a></li>
                            <li><a href="#">5</a></li>
                            <li><a href="#">Next</a></li>
                        </ul>
                    </div>
                </div>

                <div id="sidebar" class="col-md-4">
                    <div class="widget widget-post">
                        <h4>Recent Posts</h4>
                        <div class="small-border"></div>

                        <ul class="de-bloglist-type-1">

                            @foreach($blogs->take(5) as $blog)
                                <li>
                                    <div class="d-image">
                                        <img src="{{ $blog->image }}" alt="">
                                    </div>
                                    <div class="d-content">
                                        <a href="{{$blog->slug}}">{{ $blog->title }}</a>
                                        <div class="d-date">{{ $blog->created_at->format('d M Y') }}</div>
                                    </div>
                                </li>
                            @endforeach


                        </ul>
                    </div>

                    <div class="widget widget_tags">
                        <h4>Tags</h4>
                        <div class="small-border"></div>
                        <ul>
                            <li><a href="#link">Calgary Windows</a></li>
                            <li><a href="#link">Alberta Window Replacement</a></li>
                            <li><a href="#link">Energy Efficient Windows</a></li>
                            <li><a href="#link">Triple Pane Windows</a></li>
                            <li><a href="#link">Double Glazed Glass</a></li>
                            <li><a href="#link">Commercial Storefront Windows</a></li>
                            <li><a href="#link">Storefront Door Systems</a></li>
                            <li><a href="#link">Modern Entry Doors</a></li>
                            <li><a href="#link">Luxury Front Doors</a></li>
                            <li><a href="#link">Sliding Patio Doors</a></li>
                            <li><a href="#link">French Door Systems</a></li>
                            <li><a href="#link">Black Frame Windows</a></li>
                            <li><a href="#link">Custom Window Design</a></li>
                            <li><a href="#link">Window Retrofit Calgary</a></li>
                            <li><a href="#link">Home Renovation Windows</a></li>
                            <li><a href="#link">Commercial Door Installation</a></li>
                            <li><a href="#link">Office Window Upgrade</a></li>
                            <li><a href="#link">Cold Climate Windows</a></li>
                            <li><a href="#link">Draft Proof Windows</a></li>
                            <li><a href="#link">High Performance Glass</a></li>
                            <li><a href="#link">Insulated Glass Units</a></li>
                            <li><a href="#link">Sustainable Window Materials</a></li>
                            <li><a href="#link">Vinyl Window Systems</a></li>
                            <li><a href="#link">Aluminum Frame Windows</a></li>
                            <li><a href="#link">Tilt and Turn Windows</a></li>
                            <li><a href="#link">Exterior Door Replacement</a></li>
                            <li><a href="#link">Residential Window Installation</a></li>
                            <li><a href="#link">Calgary Door Contractors</a></li>
                            <li><a href="#link">Energy Saving Doors</a></li>
                            <li><a href="#link">Spring Window Upgrades</a></li>
                        </ul>
                    </div>

                    <div class="widget widget-text">
                        <h4>About Us</h4>
                        <div class="small-border"></div>
                        At KULU Windows and Doors, we engineer peace of mind for Calgary homeowners by combining
                        European innovation with local reliability. Specializing in high-performance REHAU 4500 series
                        technology, our windows and doors are precision-crafted to provide superior thermal comfort and
                        aesthetic elegance that stands up to Alberta’s most extreme weather conditions.

                        Every product we manufacture meets rigorous NFRC and NCTL certifications, ensuring maximum
                        energy efficiency for both residential and commercial projects. We are committed to building a
                        more sustainable future for our community one high-quality window at a time.
                    </div>

                </div>
            </div>
        </div>
    </div>


</x-app>
