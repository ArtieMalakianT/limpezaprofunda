<nav class="main-header navbar navbar-expand navbar-white navbar-light" role="navigation">
          <ul class="nav navbar-nav">
            <li class="nav-item">
              <a class="nav-link" data-widget="pushmenu" href="#"><i class="fas fa-bars"></i></a>
            </li>
            <li class="nav-item d-none d-sm-inline-block">
              <a href="index3.html" class="nav-link">Início</a>
            </li>            
          </ul>
          <ul class="navbar-nav ml-auto">
            <li class="dropdown">
              <a href="#" class="nav-item dropdown-toggle" data-toggle="dropdown">
                <i class="fa fa-envelope-o"></i><span class="label">{{ Auth::user()->name }}</span></a>
              <ul class="dropdown-menu">
                <li class="header">{{ __('Manage Account') }}</li>     
                <a class="dropdown-item" href="{{ route('profile.show') }}">
                  {{ __('Profile') }}
                </a>           
                @if (Laravel\Jetstream\Jetstream::hasApiFeatures())
                  <x-jet-dropdown-link class="dropdown-item" href="{{ route('api-tokens.index') }}">
                    {{ __('API Tokens') }}
                  </x-jet-dropdown-link>
                @endif
              </ul>
            </li>
          </ul>
</nav>