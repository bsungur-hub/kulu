<x-app>

        <!-- subheader -->
        <section id="subheader" data-speed="8" data-type="background" class="subheader-quote">
            <div class="container">
                <div class="row">
                    <div class="col-md-12">
                        <h1>Get Quote</h1>
                        <ul class="crumb">
                            <li><a href="/">Home</a></li>
                            <li class="sep">/</li>
                            <li>Quote</li>
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

                    <div class="col-md-8 offset-md-2">
                        @if ($errors->any())
                            <div class="alert alert-danger" style="color: red; margin-bottom: 20px;">
                                <ul>
                                    @foreach ($errors->all() as $error)
                                        <li>{{ $error }}</li>
                                    @endforeach
                                </ul>
                            </div>
                        @endif

                        @if(session('success'))
                            <div class="alert alert-success">
                                {{ session('success') }}
                            </div>

                                <div class="col-md-12 text-center">
                                    <a href="/" class="btn-custom">HOME</a>
                                </div>

                            @else

                        <form name="contactForm" id='contact_form' method="POST" action="{{ route('quote.store') }}">
                            @csrf
                            <div id="step-1" class="row">
                                <div class="col-md-12 mb30">
                                    <h4><i class="fa fa-home id-color"></i>What is your property type?</h4>

                                    <div class="de_form de_radio">
                                        <div class="radio-img">
                                            <input id="radio-1a" name="property_type" type="radio" value="Residential" checked="checked">
                                            <label for="radio-1a"><img src="{{asset('assets/images/select-form/1.jpg')}}">Residential</label>
                                        </div>

                                        <div class="radio-img">
                                            <input id="radio-1b" name="property_type" type="radio" value="Office">
                                            <label for="radio-1b"><img src="{{asset('assets/images/select-form/2.jpg')}}">Office</label>
                                        </div>

                                        <div class="radio-img">
                                            <input id="radio-1c" name="property_type" type="radio" value="Commercial">
                                            <label for="radio-1c"><img src="{{asset('assets/images/select-form/3.jpg')}}">Commercial</label>
                                        </div>

                                        <div class="radio-img">
                                            <input id="radio-1d" name="property_type" type="radio" value="Retail">
                                            <label for="radio-1d"><img src="{{asset('assets/images/select-form/4.jpg')}}">Retail</label>
                                        </div>

                                        <div class="radio-img">
                                            <input id="radio-1e" name="property_type" type="radio" value="Other">
                                            <label for="radio-1e"><img src="{{asset('assets/images/select-form/5.jpg')}}">Other</label>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb10">
                                    <h4><i class="fa fa-arrows-alt id-color"></i>Total area size you want to renovate</h4>
                                    <div class="row">
                                        <div class="col-md-6">
                                            <input type='text' name='area_size' id='area_size' class="form-control" placeholder="Area Size" required>
                                        </div>

                                        <div class="col-md-6">
                                            <select name="unit_size" id="unit_size" value="" class="form-control">
                                                <option value="sqft">Square Feet(sqft)</option>
                                                <option value="m">meter(m)</option>
                                                <option value="ft">Feet(ft)</option>
                                            </select>
                                        </div>
                                    </div>
                                </div>

                                <div class="col-md-6 mb10">
                                    <h4><i class="fa fa-tag id-color"></i>Select a renovation budget</h4>
                                    <div class="row">
                                        <div class="col-md-12">
                                            <select name="budget" id="budget" value="" class="form-control">
                                                <option value="Budget Friendly">Budget Friendly</option>
                                                <option value="Mid Range">Mid Range</option>
                                                <option value="High End">High End</option>
                                            </select>
                                        </div>
                                    </div>

                                </div>

                            </div>

                            <div id="step-2" class="row">
                                <h4><i class="fa fa-user id-color"></i>Enter your details</h4>

                                <div class="col-md-6">
                                    <div id='name_error' class='error'>Please enter your name.</div>
                                    <div>
                                        <input type='text' name='name' id='name' class="form-control" placeholder="Your Name" required>
                                    </div>

                                    <div id='email_error' class='error'>Please enter your valid E-mail ID.</div>
                                    <div>
                                        <input type='email' name='email' id='email' class="form-control" placeholder="Your Email" required>
                                    </div>

                                    <div id='phone_error' class='error'>Please enter your phone number.</div>
                                    <div>
                                        <input type='text' name='phone' id='phone' class="form-control" placeholder="Your Phone" required>
                                    </div>
                                </div>
                                <div class="col-md-6">
                                    <div id='message_error' class='error'>Please enter your message.</div>
                                    <div>
                                        <textarea name='message' id='message' class="form-control" placeholder="Your Message"></textarea>
                                    </div>
                                </div>

                                <div class="col-md-12">
                                    <div class="g-recaptcha" data-sitekey="copy-your-site-key-here"></div>
                                    <p id='submit' class="mt20">
                                        <input type='submit' id='send_message' value='Submit Form' class="btn btn-line">
                                    </p>
                                </div>
                            </div>
                        </form>
                            @endif

                            <div id="success_message" class='success'>
                            Your message has been sent successfully. Refresh this page if you want to send more messages.
                        </div>
                        <div id="error_message" class='error'>
                            Sorry there was an error sending your form.
                        </div>

                    </div>

                </div>
            </div>
        </div>

        <!-- Javascript Files
           ================================================== -->
        <script src='https://www.google.com/recaptcha/api.js' async defer></script>
        {{--<script src="form.js"></script>--}}


</x-app>
