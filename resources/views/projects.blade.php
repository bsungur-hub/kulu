<x-app>


    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background" class="subheader-projects">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Projects</h1>
                    <ul class="crumb">
                        <li><a href="/">Home</a></li>
                        <li class="sep">/</li>
                        <li>Projects</li>
                    </ul>
                </div>
            </div>
        </div>
    </section>
    <!-- subheader close -->

    <!-- content begin -->
    <div id="content" class="no-top no-bottom">
        <!-- section begin -->
        <section id="section-portfolio" class="no-top no-bottom" aria-label="section-portfolio">
            <div class="container">
                <div class="spacer-single"></div>
                <!-- portfolio filter begin -->
                <div class="row">
                    <div class="col-md-12 text-center">
                        <ul id="filters" class="wow fadeInUp" data-wow-delay="0s">
                            <li><a href="#" data-filter="*" class="selected">All Projects</a></li>
                            <li><a href="#" data-filter=".residential">Residential</a></li>
                            <li><a href="#" data-filter=".commercial">Commercial</a></li>
                        </ul>

                    </div>
                </div>

                <!-- portfolio filter close -->
                <div id="gallery" class="row grid_gallery gallery de-gallery wow fadeInUp" data-wow-delay=".3s">

                  @foreach ($Projects as $project)

                      @foreach($project->images as $image)

                    <div class="col-md-4 item {{ $project->name }}">
                        <div class="picframe">
                            <a class="image-popup-gallery" href="{{ asset('storage/' . $image->image_path) }}">
                                <span class="overlay">
                                    <span class="pf_text">
                                        <span class="project-name">{{ $project->description }}</span>
                                    </span>
                                </span>
                            </a>
                            <img src="{{ asset('storage/' . $image->image_path) }}" class="project-img rounded mb-2" alt="" />
                        </div>
                    </div>

                    @endforeach

                   @endforeach

                </div>
            </div>
        </section>
        <!-- section close -->


        <!-- section begin -->
        <section id="call-to-action" class="call-to-action bg-color dark text-center" data-speed="5" data-type="background" aria-label="call-to-action">
            <a href="contact.html" class="btn btn-line black btn-big">Get Quotation</a>
        </section>
        <!-- logo carousel section close -->



    </div>


</x-app>
