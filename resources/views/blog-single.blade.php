<x-app>

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Blog Single</h1>
                    <ul class="crumb">
                        <li><a href="/">Home</a></li>
                        <li class="sep">/</li>
                        <li>Blog Single</li>
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
                    <div class="blog-read">
                        <div class="post-content">
                            <div class="text-center mb-4">
                                <img src="{{ asset($blog_single->image) }}"  class="rounded" alt="" />
                            </div>

                            <div class="date-box">
                                <div class="day">26</div>
                                <div class="month">FEB</div>
                                <div class="year">2026</div>
                            </div>

                            <div class="post-text">
                                <h1 class="mb-4">

                                    <a href="#"> {{$blog_single->title}}</a>

                                </h1>

                                {!! $blog_single->content !!}

                            </div>

                            <a href="#" class="btn-more">Read More</a>
                        </div>

                        <div class="post-meta">

                            <span><i class="fa fa-user id-color"></i>By: <a href="#">Adem</a></span>
                            <span><i class="fa fa-tag id-color"></i><a href="#">News</a>, <a href="#">Events</a></span>
                        </div>
                        <div class="spacer-single"></div>

                    </div>

                </div>

            </div>
        </div>
    </div>

</x-app>
