<x-app>

    <!-- subheader -->
    <section id="subheader" data-speed="8" data-type="background">
        <div class="container">
            <div class="row">
                <div class="col-md-12">
                    <h1>Contact</h1>
                    <ul class="crumb">
                        <li><a href="/">Home</a></li>
                        <li class="sep">/</li>
                        <li>Contact</li>
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

                @if(session('success'))

                    <div class="col-md-12 alert alert-success">
                        {{ session('success') }}
                    </div>

                    <div class="col-md-12 text-center">
                        <a href="/" class="btn-custom">HOME</a>
                    </div>

                @else

                <div class="col-md-8">

                    @if ($errors->any())
                        <div class="alert alert-danger" style="color: red; margin-bottom: 20px;">
                            <ul>
                                @foreach ($errors->all() as $error)
                                    <li>{{ $error }}</li>
                                @endforeach
                            </ul>
                        </div>
                    @endif

                    <form name="contactForm" id='contact_form' method="POST" action="{{ route('contact.store') }}">
                        @csrf

                        <div class="row">
                            <div class="col-md-12 mb10">
                                <h3>Send Us Message</h3>
                            </div>
                            <div class="col-md-6">
                                <div id='name_error' class='error'>Please enter your name.</div>
                                <div>
                                    <input type='text' name='name' id='name' class="form-control"
                                           placeholder="Your Name *" value="{{ old('name') }}" >
                                </div>

                                <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                <div>
                                    <input type='email' name='email' id='email' class="form-control"
                                           placeholder="Your Email *" value="{{ old('email') }}">
                                </div>

                                <div id='phone_error' class='error'>Please enter your phone number.</div>
                                <div>
                                    <input type='text' name='phone' id='phone' class="form-control"
                                           placeholder="Your Phone" value="{{ old('phone') }}">
                                </div>
                            </div>
                            <div class="col-md-6">
                                <div id='message_error' class='error'>Please enter your message.</div>
                                <div>
                                    <textarea name='message' id='message' class="form-control"
                                              placeholder="Your Message *">{!! old('message') !!}</textarea>
                                </div>
                            </div>

                            <div class="col-md-12">
                                <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                                <p id='submit' class="mt20">
                                    <input type='submit' id='' value='Submit Form' class="btn btn-line">
                                </p>
                            </div>
                        </div>
                    </form>

                </div>

                <div id="sidebar" class="col-md-4">

                    <div class="widget widget_text">
                        <h3>Contact Info</h3>
                        <address>
                            <span><strong>Address:</strong>4911 77 Ave SE, Calgary, AB T2C 2X4</span>
                            <span><strong>Phone:</strong>+1 (403) 475-7575</span>
                            <span><strong>Email:</strong><a
                                    href="mailto:adem@kuluwindows.com">adem@kuluwindows.com</a></span>
                            <span><strong>Open</strong>Monday - Friday 08am - 5pm</span>
                            <span><strong>Ins:</strong><a href="https://www.instagram.com/kuluwindows/">@kuluwindows</a></span>
                        </address>
                    </div>

                </div>

                @endif

            </div>
        </div>

        <section id="de-map" aria-label="map-container">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <div class="map-container map-fullwidth">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d2511.7964131251188!2d-113.96307619999999!3d50.982953599999995!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x53717b2cf577e867%3A0x44bc15eb8a0f4e75!2sKulu%20Windows%20%26%20Doors!5e0!3m2!1sen!2sca!4v1772391346033!5m2!1sen!2sca"
                                width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                                referrerpolicy="no-referrer-when-downgrade"></iframe>
                        </div>
                    </div>
                </div>
            </div>
        </section>


    </div>
</x-app>
