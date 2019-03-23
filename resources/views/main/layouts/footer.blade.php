<footer class="footer">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="footer-inner text-center">
                    <div class="social-links">
                        <a class="twitter social-link" data-placement="top" data-toggle="tooltip" href="https://twitter.com/BackendDevelop2" title="Twitter"><i class="fa fa-twitter"></i></a>
                        <a class="facebook social-link" data-placement="top" data-toggle="tooltip" href="https://www.facebook.com/Back-End-Developer-325579044730857" title="Facebook"><i class="fa fa-facebook"></i></a>
                        <a class="linkedin social-link" data-placement="top" data-toggle="tooltip" href="https://www.linkedin.com/in/ishara-dilshan" title="LinkedIn"><i class="fa fa-linkedin"></i></a>
                    </div>
                    <ul class="footer-menu">
                        <li><a href="{{ route('mainpage') }}">Home</a></li>
                        <li><a href="{{ route('contact') }}">Contact</a></li>
                        <li><a href="#">Download</a></li>
                        <li><a href="{{ route('register') }}">Register</a></li>
                        <li><a href="{{ route('login') }}">Login</a></li>
                    </ul>
                    <div class="copyright">
                        <p>Copyright © 2019 Backendeveloper.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
</footer> 
<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.3.1/jquery.min.js" async></script>
<script src="{{ asset('/main/js/bootstrap.min.js') }}" async></script>
<script src="{{ asset('/main/js/owl.carousel.js') }}" async></script>
<script src="{{ asset('/main/js/jquery.mixitup.min.js') }}" async></script>
<script src="{{ asset('/main/js/lightbox.js') }}" async></script>
<script src="{{ asset('/main/js/plugin.js') }}" async></script>
<script src="{{ asset('/main/js/jquery.slicknav.js') }}" async></script>
<script src="{{ asset('/main/js/count-to.js') }}" async></script>
<script src="{{ asset('/main/js/jquery.appear.js') }}" async></script>
<script src="{{ asset('/main/js/main.js') }}" async></script>
@section('footerSection')
 @show