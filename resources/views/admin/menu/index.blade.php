<li>
    <a class="js-arrow" href="{{ route('dashboard') }}">
        <i class="fas fa-tachometer-alt"></i>Dashboard
    </a>
</li>
<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="fas fa-home"></i>Home</a>
    <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="{{ route('slider') }}"><i class="fas fa-images"></i>Slider</a>
        </li>
        <li>
            <a href="{{ route('motivation') }}"><i class="fas fa-brain"></i>Motivation</a>
        </li>
        <li>
            <a href="{{ route('home.counseling') }}"><i class="fas fa-user-cog"></i>Home Counseling</a>
        </li>
    </ul>
</li>
<li>
    <a class="js-arrow" href="{{ route('counselings') }}">
        <i class="fas fa-user-cog"></i>Counseling
    </a>
</li>
<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="fas fa-school"></i>SSC</a>
    <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="{{ route('ssc.science') }}"><i class="fas fa-vial"></i>Science</a>
        </li>
        <li>
            <a href="{{ route('ssc.commerce') }}"><i class="fas fa-calculator"></i>Commerce</a>
        </li>
        <li>
            <a href="{{ route('ssc.arts') }}"><i class="fas fa-eraser"></i>Arts</a>
        </li>
    </ul>
</li>
<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="fas fa-university"></i>HSC</a>
    <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="{{ route('hsc.science') }}"><i class="fas fa-vial"></i>Science</a>
        </li>
        <li>
            <a href="{{ route('hsc.commerce') }}"><i class="fas fa-calculator"></i>Commerce</a>
        </li>
        <li>
            <a href="{{ route('hsc.arts') }}"><i class="fas fa-eraser"></i>Arts</a>
        </li>
    </ul>
</li>
<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="fas fa-user-graduate"></i>Higher Studies</a>
    <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="{{ route('hs.science') }}"><i class="fas fa-vial"></i>Science</a>
        </li>
        <li>
            <a href="{{ route('hs.commerce') }}"><i class="fas fa-calculator"></i>Commerce</a>
        </li>
        <li>
            <a href="{{ route('hs.arts') }}"><i class="fas fa-eraser"></i>Arts</a>
        </li>
    </ul>
</li>
<li>
    <a class="js-arrow" href="{{ route('blog.admin') }}">
        <i class="fas fa-video"></i>Blog
    </a>
</li>
<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="fas fa-people-arrows"></i>Personal Counseling</a>
    <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="{{ route('time') }}"><i class="fas fa-user-clock"></i>Time</a>
        </li>
        <li>
            <a href="{{ route('client.application') }}"><i class="fas fa-comments"></i>Client Application</a>
        </li>
    </ul>
</li>
<li>
    <a class="js-arrow" href="{{ route('contact') }}">
        <i class="fas fa-envelope"></i>Contact
    </a>
</li>
<li class="has-sub">
    <a class="js-arrow" href="#">
        <i class="fas fa-plus-circle"></i>Additional</a>
    <ul class="list-unstyled navbar__sub-list js-sub-list">
        <li>
            <a href="{{ route('social.media') }}"><i class="fas fa-laptop"></i>Social Media Link</a>
        </li>
        <li>
            <a href="{{ route('news') }}"><i class="far fa-newspaper"></i>News</a>
        </li>
        <li>
            <a href="{{ route('address') }}"><i class="fas fa-street-view"></i>Address</a>
        </li>
    </ul>
</li>
