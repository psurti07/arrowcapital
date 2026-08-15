<header id="header" class="tra-menu navbar-dark white-scroll">
    <div class="header-wrapper">
        <!-- MOBILE HEADER -->
        <div class="wsmobileheader clearfix">
            <span class="smllogo">
                <img src="{{ asset('front/images/logo/logo.png') }}" alt="mobile-logo" />
            </span>
            <a id="wsnavtoggle" class="wsanimated-arrow"><span></span></a>
        </div>
        <!-- NAVIGATION MENU -->
        <div class="wsmainfull menu clearfix">
            <div class="wsmainwp clearfix">
                <div class="d-flex align-items-center justify-content-between">
                    <div>
                        <div class="desktoplogo">
                            <a href="{{ route('front.home') }}" class="logo-black">
                                <img src="{{ asset('front/images/logo/logo.png') }}" alt="{{ env('APP_NAME') }}" />
                            </a>
                        </div>

                        <div class="desktoplogo">
                            <a href="{{ route('front.home') }}" class="logo-white">
                                <img src="{{ asset('front/images/logo/logo.png') }}" alt="{{ env('APP_NAME') }}" />
                            </a>
                        </div>
                    </div>
                    <div>

                        <nav class="wsmenu clearfix">
                            <ul class="wsmenu-list nav-theme">
                                <li class="nl-simple" aria-haspopup="true">
                                    <a href="{{ route('front.home') }}" class="h-link">Home</a>
                                </li>
                                <li class="nl-simple" aria-haspopup="true">
                                    <a href="{{ route('front.home') }}#company" class="h-link">Company</a>
                                </li>
                                <li class="nl-simple" aria-haspopup="true">
                                    <a href="{{ route('front.home') }}#products" class="h-link">Products</a>
                                </li>
                                <li class="nl-simple" aria-haspopup="true">
                                    <a href="{{ route('customer.login') }}" class="h-link">Login</a>
                                </li>
                                 <li class="nl-simple" aria-haspopup="true">
                            <a href="{{ route('self.apply.main') }}" class="btn r-04 btn--green-400 hover--tra-black last-link d-md-none d-block">Self Apply</a>
                        </li>
                        <li class="nl-simple" aria-haspopup="true">
                            <a href="{{ route('loan.agent.main') }}" class="btn r-04 btn--green-400 hover--tra-black last-link d-md-none d-block">Hire an Agent</a>
                        </li>
                            </ul>
                        </nav>
                    </div>
                    <div>
                        <ul class="d-flex">
                            @if(false)
                            <li aria-haspopup="true"><a href="javascript:;" class="h-link">Apply Now <span
                                        class="wsarrow"></span></a>
                                <ul class="sub-menu">
                                    <li aria-haspopup="true"><a href="{{ route('self.apply.main') }}">Self Apply</a>
                                    </li>
                                    <li aria-haspopup="true"><a href="{{ route('loan.agent.main') }}">Hire an Agent</a>
                                    </li>
                                </ul>
                            </li>
                            @endif
                            <li class="nl-simple me-3" aria-haspopup="true">
                                <a href="{{ route('self.apply.main') }}"
                                    class="btn r-100 btn--tra-black hover--theme btn-sm">Self Apply <span class="fbox-ico ico-10"> <span class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                            </li>
                            <li class="nl-simple" aria-haspopup="true">
                                <a href="{{ route('loan.agent.main') }}"
                                    class="btn r-100 btn--green-300 hover--tra-black last-link btn-sm">Hire an Agent<span class="fbox-ico ico-10"> <span class="flaticon-right-arrow  ico-20 ms-1"></span></span></a>
                            </li>
                        </ul>
                    </div>
                </div>

            </div>
        </div>

    </div>

</header>