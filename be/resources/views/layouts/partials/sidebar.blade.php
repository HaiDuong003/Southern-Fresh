<div class="scrollbar-inner sidebar-wrapper">
    <div class="user">
        <div class="photo">
            <img src="{{ asset('assets/img/log.jpg') }}">
        </div>
        <div class="info">
            <a class="" data-toggle="collapse" href="#collapseExample" aria-expanded="true">
                <span>
                    @if(session('user'))
                        {{ session('user') }}
                    @else
                        Guest
                    @endif
                    <span class="user-level">Administrator</span>
                    <span class="caret"></span>
                </span>
            </a>
            <div class="clearfix"></div>

            <div class="collapse in" id="collapseExample" aria-expanded="true" style="">
                <ul class="nav">
                    <li>
                        <a href="#profile">
                            <span class="link-collapse">My Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#edit">
                            <span class="link-collapse">Edit Profile</span>
                        </a>
                    </li>
                    <li>
                        <a href="#settings">
                            <span class="link-collapse">Settings</span>
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </div>
    <ul class="nav">
        @include('layouts.partials.menubar')
    </ul>
</div>
