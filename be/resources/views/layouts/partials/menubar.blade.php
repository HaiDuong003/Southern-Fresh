<li class="nav-item {{ asset('/') ? 'active' : '' }}">
    <a href="{{ asset('/') }}">
        <p>Dashboard</p>
    </a>
</li>
<li class="nav-item">
    <a href="index.html">
        <p>Employees</p>
    </a>
</li>
<li class="nav-item">
    <a href="index.html">
        <p>Jobs</p>
    </a>
</li>
<li class="nav-item">
    <a href="{{ route('login') }}">
        <p>Login</p>
    </a>
</li>
