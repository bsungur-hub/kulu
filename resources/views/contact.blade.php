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
                        <i class="fa-solid fa-check"></i> {{ session('success') }}
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

                    <form name="contactForm" id='contact_form' method="POST" action="{{ route('contact.store') }}" enctype="multipart/form-data">
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
                                <div style="margin-bottom: 20px;">
                                    <label for="attachments" style="font-weight: bold; margin-bottom: 10px; display: block;">Upload Project Files (Images, PDF, Word, Excel etc.)</label>

                                    <input type="file" name="attachments[]" id="attachments" class="form-control" data-bs-theme="dark" multiple accept=".jpg,.jpeg,.png,.pdf,.doc,.docx,.xls,.xlsx,.dwg,.dxf" style="padding-bottom: 40px;">

                                    <div id="file-names-list" style="margin-top: 10px; font-size: 14px; color: #bbb;"></div>

                                    <small style="color: #666;">Max total size: 10MB. Allowed types: Images, PDF, Office Files, DWG/DXF.</small>
                                </div>
                                <div class="g-recaptcha" data-sitekey="6Le_3IMsAAAAAGvYXT2Ybe1ymeYnepbKUyM4xhr3" data-action="LOGIN"></div>
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
                            <span><strong><i class="fa-solid fa-location"></i></strong><a href="https://maps.app.goo.gl/PmffQ1DJ3BrDM8ma8">4911 77 Ave SE, Calgary, AB T2C 2X4</a></span>
                            <span><strong><i class="fa-solid fa-phone"></i></strong><a href="tel:+14034757575">+1 (403) 475-7575</a></span>
                            <span><strong><i class="fa-solid fa-envelope"></i></strong><a
                                    href="mailto:adem@kuluwindows.com">info@kuluwindows.com</a></span>
                            <span><strong><i class="fa-solid fa-clock"></i></strong>Monday - Friday 08am - 5pm</span>
                            <span><strong><i class="fa-brands fa-instagram"></i></strong><a href="https://www.instagram.com/kuluwindows/">@kuluwindows</a></span>
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

    <script>
        document.getElementById('attachments').addEventListener('change', function(e) {
            var fileListContainer = document.getElementById('file-names-list');
            fileListContainer.innerHTML = ''; // Önceki listeyi temizle

            var files = e.target.files;

            // Eğer dosya seçildiyse HTML listesi oluştur
            if(files.length > 0) {
                var listHtml = '<ul style="list-style-type: none; padding-left: 0;">';
                for(var i = 0; i < files.length; i++) {
                    // Her dosyanın isminin yanına şık bir ikon veya işaret koyuyoruz
                    listHtml += '<li style="margin-bottom: 5px;"><span style="color: #50C878;">&#10003;</span> ' + files[i].name + '</li>';
                }
                listHtml += '</ul>';

                // Oluşturduğumuz listeyi ekrana bas
                fileListContainer.innerHTML = listHtml;
            }
        });
    </script>
</x-app>
