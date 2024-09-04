@extends('layouts.app')

@section('content')
    <section class="contact-section">
        <div class="pattern-layer">
            <div class="pattern-1" style="background-image: url(assets/images/shape/shape-44.png);"></div>
            <div class="pattern-2" style="background-image: url(assets/images/shape/shape-20.png);"></div>
            <div class="pattern-3" style="background-image: url(assets/images/shape/shape-36.png);"></div>
        </div>
        <div class="auto-container">
            <div class="section-title text-center">
                <span class="sub-title">Contact Us</span>
                <h2>Let’s Get Connect With Us</h2>
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-12 col-sm-12">
                    <div class="info-content">
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-22"></i></div>
                            <p><a href="tel:7045550127">(704) 555-0127</a><br><a href="tel:6295550129">(629)
                                    555-0129</a></p>
                        </div>
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-23"></i></div>
                            <p>4140 Parker Rd. Allentown, <br>New Mexico 31134</p>
                        </div>
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-24"></i></div>
                            <p><a href="mailto:jackson.graham@example.com">jackson.graham@example.com</a><br><a
                                    href="mailto:michael.mitc@example.com">michael.mitc@example.com</a></p>
                        </div>
                        <div class="single-info-box">
                            <div class="icon-box"><i class="icon-25"></i></div>
                            <p>Starbucks <br>Louis Vuitton</p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-8 col-md-12 col-sm-12">
                    <div class="content-box">
                        <div class="map-box">
                            <iframe
                                src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55945.16225505631!2d-73.90847969206546!3d40.66490264739892!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c24fa5d33f083b%3A0xc80b8f06e177fe62!2sNew%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2sbd!4v1601263396347!5m2!1sen!2sbd"
                                allowfullscreen=""></iframe>
                        </div>
                        <div class="contact-form">
                            <h2>Send Us Message</h2>
                            <form method="POST" action="{{ route('back') }}">
                                @csrf
                                <div class="row clearfix">
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Name</label>
                                            <input type="text" name="name" placeholder="Enter Name">
                                        </div>
                                    </div>
                                    <div class="col-lg-6 col-md-6 col-sm-12">
                                        <div class="form-group">
                                            <label>Email Id</label>
                                            <input type="email" name="email" placeholder="Email Address">
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <div class="form-group">
                                            <label>Comments</label>
                                            <textarea name="message" placeholder="Write Your  Message"></textarea>
                                        </div>
                                    </div>
                                    <div class="col-lg-12 col-md-12 col-sm-12">
                                        <button type="submit" class="theme-btn">Submit Now</button>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
@endsection
