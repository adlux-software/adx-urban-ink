<div>
    <!-- Start Contact Area -->
    <section class="contact-area ptb-100">
        <div class="container">
            <div class="row justify-content-center">
                <div class="col-lg-5 col-md-12">
                    <div class="contact-info">
                        <h3>Here to Help</h3>
                        <p>Have a question? You may find an answer in our <a href="#">FAQs</a>. But you can also contact us.</p>

                        <ul class="contact-list">
                            <li><i class='bx bx-map'></i> Location:
                                <a href="#">{{ business('business_address') }}</a>
                            </li>
                            <li><i class='bx bx-phone-call'></i> Call Us:
                                <a href="tel:{{ business('business_phone_1') }}">
                                    {{ business('business_phone_1') }}
                                </a>,
                                <a href="tel:{{ business('business_phone_2') }}">
                                    {{ business('business_phone_2') }}
                                </a>
                            </li>
                            <li><i class='bx bx-envelope'></i> Email Us:
                                <a href="mailto:{{ business('business_email') }}">
                                    {{ business('business_email') }}
                                </a>
                            </li>
                        </ul>

                        <h3>Opening Hours:</h3>
                        <ul class="opening-hours">
                            <li><span>Monday:</span> 8AM - 6AM</li>
                            <li><span>Tuesday:</span> 8AM - 6AM</li>
                            <li><span>Wednesday:</span> 8AM - 6AM</li>
                            <li><span>Thursday - Friday:</span> 8AM - 6AM</li>
                            <li><span>Sunday:</span> Closed</li>
                        </ul>

                        <h3>Follow Us:</h3>
                        <ul class="social">
                            <li><a href="#" target="_blank"><i class='bx bxl-facebook'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-twitter'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-instagram'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-linkedin'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-skype'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-pinterest-alt'></i></a></li>
                            <li><a href="#" target="_blank"><i class='bx bxl-youtube'></i></a></li>
                        </ul>
                    </div>
                </div>



                <div class="col-lg-7 col-md-12">
                    <div class="contact-form">
                        <h3>Drop Us A Line</h3>
                        <p>We're happy to answer any questions you have or provide you with an estimate. Just send us a message in the form below with any questions you may have.</p>

                        <form wire:submit.prevent="submit" id="contactForm">
                            <div class="row justify-content-center">
                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Name <span>*</span></label>
                                        <input type="text" wire:model="name" class="form-control" required data-error="Please enter your name" placeholder="Your name">
                                        @error('name') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-6">
                                    <div class="form-group">
                                        <label>Email <span>*</span></label>
                                        <input type="email" wire:model="email" class="form-control" required data-error="Please enter your email" placeholder="Your email address">
                                        @error('email') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Phone Number <span>*</span></label>
                                        <input type="text" wire:model="phone_number" class="form-control" required data-error="Please enter your phone number" placeholder="Your phone number">
                                        @error('phone_number') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <div class="form-group">
                                        <label>Your Message <span>*</span></label>
                                        <textarea wire:model="message" cols="30" rows="5" required data-error="Please enter your message" class="form-control" placeholder="Write your message..."></textarea>
                                        @error('message') <span class="text-danger">{{ $message }}</span> @enderror
                                    </div>
                                </div>

                                <div class="col-lg-12 col-md-12">
                                    <button type="submit" class="default-btn">Send Message</button>
                                    @if (session()->has('message'))
                                        <div class="alert alert-success mt-2">
                                            {{ session('message') }}
                                        </div>
                                    @endif
                                </div>
                            </div>
                        </form>
                    </div>
                </div>




            </div>
        </div>
    </section>
</div>
