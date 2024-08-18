<!-- Footer -->
<footer class="main-footer">
    <div class="pattern-layer">
        <div class="pattern-1" style="background-image: url({{ asset('assets/images/shape/shape8.png') }});"></div>
        <div class="pattern" style="background-image: url({{ asset('assets/images/shape/shape-30.png') }});"></div>
        <div class="pattern-3" style="background-image: url({{ asset('assets/images/shape/shape-31.png') }});"></div>
        <div class="pattern-4 rotate-me" style="background-image: url({{ asset('assets/images/shape/shape-32.png') }});">
        </div>
        <div class="pattern-5 float-bob-y"
            style="background-image: url({{ asset('assets/images/shape/shape-33.png') }});">
        </div>
    </div>
    <div class="auto-container">
        <div class="footer-top text-center">
            <div class="shape-1 zoom-fade"
                style="background-image: url({{ asset('assets/images/shape/shape7.png') }});">
            </div>
            <h2>Have any query? <br>Let’s fix it.</h2>
            <a href="contact.html" class="theme-btn">Contact us</a>
        </div>
        <div class="widget-section">
            <div class="shape zoom-fade" style="background-image: url({{ asset('assets/images/shape/shape9.png') }});">
            </div>
            <div class="row clearfix">
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget about-widget">
                        <p>Understanding Risk Management in High-Yield Investment Programs Investments: Tips for
                            Success</p>
                        <h2><a href="index.html">Let’s Chat <img src="{{ asset('assets/images/icons/icon-8.png') }}"
                                    alt=""></a></h2>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget links-widget">
                        <ul class="links-list clearfix">
                            <li><a href="about.html">About us</a></li>
                            <li><a href="contact.html">Contact</a></li>
                            <li><a href="dashboard.html">Dashboard</a></li>
                            <li><a href="service.html">Plans</a></li>
                        </ul>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6 col-sm-12 footer-column">
                    <div class="footer-widget contact-widget">
                        <div class="email"><a
                                href="mailto:Trades Sphere.investment@example.com">Trades.investment@example.com</a>
                        </div>
                        <p>4517 Washington Ave. Manchester, Kentucky 39495</p>
                    </div>
                </div>
            </div>
        </div>
        <div class="footer-bottom">
            <div class="bottom-inner">
                <div class="copyright">
                    <p><a href="index.html">Trades Sphere</a> &copy; 2024, All Rights Reserved</p>
                </div>
            </div>
        </div>
    </div>
</footer>
<!-- Footer End -->



<!-- Scroll Top -->
<button class="scroll-top scroll-to-target" data-target="html"><i class="icon-4"></i></button>

</div>


<!-- Jequery Plugins List -->
<script src="{{ asset('assets/js/jquery.js') }}"></script>
<script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>
<script src="{{ asset('assets/js/wow.js') }}"></script>
<script src="{{ asset('assets/js/owl.js') }}"></script>
<script src="{{ asset('assets/js/jquery.fancybox.js') }}"></script>
<script src="{{ asset('assets/js/appear.js') }}"></script>
<script src="{{ asset('assets/js/jquery.nice-select.min.js') }}"></script>
<script src="{{ asset('assets/js/odometer.js') }}"></script>
<script src="{{ asset('assets/js/parallax.min.js') }}"></script>
<script src="{{ asset('assets/js/parallax-scroll.js') }}"></script>

<!-- Custom Js -->
<script src="{{ asset('assets/js/custom.js') }}"></script>

{{-- yield --}}

@yield('scripts')


</body>

</html>
