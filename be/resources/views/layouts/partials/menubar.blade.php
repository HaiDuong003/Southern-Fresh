<li class="nav-item {{ asset('/') ? 'active' : '' }}">
    <a href="{{ route('dashboard') }}">
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('listEmployee') }}">
        <p>Employees</p>
    </a>
</li>
<li class="nav-item">
    <a href="index.html">
        <p>Jobs</p>
    </a>
</li>
@if(!empty(session('user')))
<li class="nav-item">
    <a href="{{ route('user.logout') }}">
        <p>Logout</p>
    </a>
</li>
@else
<li class="nav-item">
    <a href="{{ route('login') }}">
        <p>Login</p>
    </a>
</li>
@endif
