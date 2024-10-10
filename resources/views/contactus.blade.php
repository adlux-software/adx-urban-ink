<x-site-layout>
    <!-- Start Page Title -->
    <div class="page-title-area">
        <div class="container">
            <div class="page-title-content">
                <h2>Contact Us</h2>
                <ul>
                    <li><a href="index.html">Home</a></li>
                    <li>Contact Us</li>
                </ul>
            </div>
        </div>
    </div>
    <!-- End Page Title -->



    @livewire('contactform')

    <!-- End Contact Area -->

    <!-- Map -->
    <div id="map">
        <iframe src="https://www.google.com/maps/embed?pb=!1m23!1m12!1m3!1d63373.90939318645!2d79.8360743290344!3d6.906224166796591!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m8!3e6!4m5!1s0x3ae25a8d6ec1f8c3%3A0x47810f3e7d084753!2sDehiwala-Mount%20Lavinia!3m2!1d6.830118499999999!2d79.8800832!4m0!5e0!3m2!1sen!2slk!4v1727782894292!5m2!1sen!2slk"></iframe>
    </div>
    <!-- End Map -->

    <!-- Start Facility Area -->
    <section class="facility-area pt-100 pb-70">
        <div class="container">
            <div class="facility-slides owl-carousel owl-theme">
                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-tracking'></i>
                    </div>
                    <h3>Free Shipping Worldwide</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-return'></i>
                    </div>
                    <h3>Easy Return Policy</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-shuffle'></i>
                    </div>
                    <h3>7 Day Exchange Policy</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-sale'></i>
                    </div>
                    <h3>Weekend Discount Coupon</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-credit-card'></i>
                    </div>
                    <h3>Secure Payment Methods</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-location'></i>
                    </div>
                    <h3>Track Your Package</h3>
                </div>

                <div class="single-facility-box">
                    <div class="icon">
                        <i class='flaticon-customer-service'></i>
                    </div>
                    <h3>24/7 Customer Support</h3>
                </div>
            </div>
        </div>
    </section>
    <!-- End Facility Area -->

    <!-- Start Instagram Area -->
    <div class="instagram-area">
        <div class="container-fluid">
            <div class="instagram-title">
                <a href="https://www.instagram.com/urbanink_lk?igsh=MWo1dzI3NDZ3cWM1cg==" target="_blank"><i class='bx bxl-instagram'></i> Follow us on @urbanink_lk</a>
            </div>

            <div class="instagram-slides owl-carousel owl-theme">

                @foreach($instagram as $Product)
                    @if($Product->hasMedia('featured'))
                        <div class="single-instagram-post">
                            <img src="{{ $Product->getFirstMediaURL('featured', 'thumb') }}" alt="image">
                            <i class='bx bxl-instagram'></i>
                            <a href="https://www.instagram.com/" target="_blank" class="link-btn"></a>
                        </div>
                    @endif
                @endforeach

            </div>
        </div>
    </div>
    <!-- End Instagram Area -->

</x-site-layout>