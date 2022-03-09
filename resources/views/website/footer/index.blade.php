<footer class="p-3 bg-info">
    <div class="container">
        <div class="footer-copyright py-3">
            <span>
                &copy; <span id="copy-year"></span> Copyright. All rights reserved by
                <a class="text-white" href="">CPISS</a>.
            </span>
            @if($socialMedia!=null)
            <span class="float-right">
                <a href="{{$socialMedia->facebook}}" target="_blank">
                    <i class="fab fa-facebook-f fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <a href="{{$socialMedia->twitter}}" target="_blank">
                    <i class="fab fa-twitter fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
                </a>
                <a href="{{$socialMedia->linkedIn}}" target="_blank">
                    <i class="fab fa-linkedin-in fa-lg text-white mr-md-5 mr-3 fa-2x"> </i>
                </a>
            </span>
            @endif
        </div>
    </div>
</footer>
