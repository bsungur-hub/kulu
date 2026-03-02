<!-- footer begin -->
<footer>
    <div class="container">
        <div class="row">
            <div class="col-md-4">

                <img src="{{asset('assets/images/logo/logo.svg')}}" class="logo-small" alt=""><br>At Kulu Windows and Doors,
                we engineer peace of mind for Calgary homeowners by combining European innovation with local
                reliability. Specializing in high-performance REHAU 4500 series technology, our precision-crafted
                windows and doors are designed to provide superior thermal comfort and aesthetic elegance that
                withstands Alberta’s most extreme weather conditions. Every product we manufacture is backed by rigorous
                NFRC and NCTL certifications, ensuring maximum energy efficiency and long-term durability for both
                residential and commercial projects as we build a more sustainable future for our community—one window
                at a time.
            </div>

            <div class="col-md-4">
                <div class="widget widget_recent_post">
                    <h3 class="style-1">Latest Blogs</h3>
                    <ul>

                        @foreach($recentBlogs as $blog)

                            <li><a href="{{$blog->slug}}">{{ $blog->title }}</a></li>

                        @endforeach

                    </ul>
                </div>
            </div>

            <div class="col-md-4">
                <h3 class="style-1">Contact Us</h3>
                <div class="widget widget-address">
                    <address>
                        <span>4911 77 Ave SE, Calgary, AB T2C 2X4</span>
                        <span><strong>Phone:</strong><a href="tel:+14034757575"> +1 (403) 475-7575</a></span>
                        <span><strong>Email:</strong><a href="mailto:adem@kuluwindows.com">adem@kuluwindows.com</a></span>
                        <span><strong>Ins:</strong><a href="https://www.instagram.com/kuluwindows/">@kuluwindows</a></span>
                    </address>
                </div>
            </div>
        </div>
    </div>

    <div class="subfooter">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    &copy; Copyright {{ date('Y') }} Kulu Windows & Doors. All rights reserved. <span
                        class="id-color">&#9632;</span>
                </div>
                <div class="col-md-6 text-right">
                    <div class="social-icons">
                        <a href="https://www.instagram.com/kuluwindows/"><i class="fa-brands fa-instagram"></i></a>
                        <a href="https://www.facebook.com/profile.php?id=100083575897429" target="_blank"><i class="fa-brands fa-facebook-f"></i></a>
                        <a href="#"><i class="fa-brands fa-youtube"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <a href="#" id="back-to-top"></a>
</footer>
<!-- footer close -->
