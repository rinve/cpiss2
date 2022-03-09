<nav class="navbar navbar-expand-lg navbar-light sticky-top bg-info">
    <a class="navbar-brand" href="{{ url('/') }}">
        <img src="{{ asset('website/images/logo2.png') }}" width="150px" height="65px" alt="SPISS">
    </a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
        aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav m-auto">
            <li class="nav-item active">
                <a class="nav-link text-white" href="{{ url('/') }}">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('counseling') }}">Counseling</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    SSC
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item text-info" href="{{ route('ssc.sciences') }}">Science</a>
                    <a class="dropdown-item text-info" href="{{ route('ssc.commerces') }}">Commerce</a>
                    <a class="dropdown-item text-info" href="{{ route('ssc.art') }}">Arts</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown2" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    HSC
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown2">
                    <a class="dropdown-item text-info" href="{{ route('hsc.sciences') }}">Science</a>
                    <a class="dropdown-item text-info" href="{{ route('hsc.commerces') }}">Commerce</a>
                    <a class="dropdown-item text-info" href="{{ route('hsc.art') }}">Arts</a>
                </div>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle text-white" href="#" id="navbarDropdown3" role="button" data-toggle="dropdown"
                    aria-haspopup="true" aria-expanded="false">
                    Higher Studies
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown3">
                    <a class="dropdown-item text-info" href="{{url('higher/studies/sciences')}}">Science</a>
                    <a class="dropdown-item text-info" href="{{url('higher/studies/commerces')}}">Commerce</a>
                    <a class="dropdown-item text-info" href="{{url('higher/studies/art')}}">Arts</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('blog') }}">Blog</a>
            </li>
            <li class="nav-item">
                <a class="nav-link text-white" href="{{ route('personal.counseling') }}">Personal Counseling</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <a class="btn btn-outline-light" type="button" href="{{ route('contact.us') }}">Contact Us</a>
        </form>
    </div>
</nav>
