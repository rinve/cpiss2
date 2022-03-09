<header class="header-desktop">
    <div class="section__content section__content--p30">
        <div class="container-fluid">
            <div class="header-wrap">
                <form class="form-header" action="" method="POST">
                    
                </form>
                <div class="header-button">
                    <div class="noti-wrap">
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-inbox"></i>
                            <span class="quantity">{{App\Models\CounselingQuestion::where(['status'=>0])->count()}}</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>You have {{App\Models\CounselingQuestion::where(['status'=>0])->count()}} message</p>
                                </div>
                                @foreach(App\Models\CounselingQuestion::where(['status'=>0])->get() as $mu)
                                    <div class="mess__item">
                                        <div class="content">
                                            <h6>{{$mu->name}}</h6>
                                            <p>From: {{$mu->email}}</p>
                                            <span class="time">{{$mu->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="mess__footer">
                                    <a href="{{ route('counselings') }}">View all messages</a>
                                </div>
                            </div>
                        </div><div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-comment-more"></i>
                            <span class="quantity">{{App\Models\MessageFromUser::where(['status'=>0])->count()}}</span>
                            <div class="mess-dropdown js-dropdown">
                                <div class="mess__title">
                                    <p>You have {{App\Models\MessageFromUser::where(['status'=>0])->count()}} message</p>
                                </div>
                                @foreach(App\Models\MessageFromUser::where(['status'=>0])->get() as $mu)
                                    <div class="mess__item">
                                        <div class="content">
                                            <h6>{{$mu->name}}</h6>
                                            <p>From: {{$mu->email}}</p>
                                            <span class="time">{{$mu->created_at->diffForHumans()}}</span>
                                        </div>
                                    </div>
                                @endforeach
                                <div class="mess__footer">
                                    <a href="{{ route('contact') }}">View all messages</a>
                                </div>
                            </div>
                        </div>
                        <div class="noti__item js-item-menu">
                            <i class="zmdi zmdi-email"></i>
                            <span class="quantity">{{App\Models\applicationForPersonalCounseling::where(['status'=>0])->count()}}</span>
                            <div class="email-dropdown js-dropdown">
                                <div class="email__title">
                                    <p>You have {{App\Models\applicationForPersonalCounseling::where(['status'=>0])->count()}} New Emails</p>
                                </div>
                                @foreach(App\Models\applicationForPersonalCounseling::where(['status'=>0])->get() as $apc)
                                <div class="email__item">
                                    <div class="content">
                                        <h6>{{$apc->email}}</h6>
                                        <span>{{$apc->name}}, {{$apc->created_at->diffForHumans()}}</span>
                                    </div>
                                </div>
                                @endforeach
                                <div class="email__footer">
                                    <a href="{{route('client.application')}}">See all emails</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <div class="account-wrap">
                        <div class="account-item clearfix js-item-menu">
                            <div class="image">
                                <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                            </div>
                            <div class="content">
                                <a class="js-acc-btn" href="#">{{ Auth::user()->name }}</a>
                            </div>
                            <div class="account-dropdown js-dropdown">
                                <div class="info clearfix">
                                    <div class="image">
                                        <a href="#">
                                            <img src="{{ Auth::user()->profile_photo_url }}" alt="{{ Auth::user()->name }}" />
                                        </a>
                                    </div>
                                    <div class="content">
                                        <h5 class="name">
                                            <a href="#">{{ Auth::user()->name }}</a>
                                        </h5>
                                        <span class="email">{{ Auth::user()->email }}</span>
                                    </div>
                                </div>
                                <div class="account-dropdown__body">
                                    <div class="account-dropdown__item">
                                        <a href="{{ route('profile.show') }}">
                                            <i class="zmdi zmdi-account"></i>Account</a>
                                    </div>
                                </div>
                                <div class="account-dropdown__footer">
                                    <a href="{{ route('user.logout') }}">
                                        <i class="zmdi zmdi-power"></i>Logout
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</header>
