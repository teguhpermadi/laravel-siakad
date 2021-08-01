<div>
    {{-- Care about people's approval and you will be their prisoner. --}}
    <li class="dropdown">
        <a href="#" data-toggle="dropdown" class="nav-link dropdown-toggle nav-link-lg nav-link-user">
          <img alt="{{ Auth::user()->name }}" src="{{ Auth::user()->profile_photo_url }}" class="rounded-circle mr-1">
          <div class="d-sm-none d-lg-inline-block">Hi, {{ Auth::user()->name }}</div>
        </a>
        <div class="dropdown-menu dropdown-menu-right">
          <div class="dropdown-title">Logged in 5 min ago</div>
          <a href="features-profile.html" class="dropdown-item has-icon">
            <i class="far fa-user"></i> Profile
          </a>
          <a href="features-activities.html" class="dropdown-item has-icon">
            <i class="fas fa-bolt"></i> Activities
          </a>
          <!-- Account Management -->
          <a href="{{ route('profile.show') }}" :active="request()->routeIs('profile.show')" class="dropdown-item has-icon">
            <i class="fas fa-cog"></i> Settings
          </a>
          <div class="dropdown-divider"></div>
          <!-- Authentication -->
          <form method="POST" action="{{ route('logout') }}">
            @csrf
            <a class="dropdown-item has-icon text-danger" href="{{ route('logout') }}"
            onclick="event.preventDefault();
                   this.closest('form').submit();">
              <i class="fas fa-sign-out-alt"></i> Logout
            </a>
        </form>
        </div>
      </li>
</div>
