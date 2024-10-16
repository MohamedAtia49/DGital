<!-- Navbar -->

<nav
class="layout-navbar container-xxl navbar navbar-expand-xl navbar-detached align-items-center bg-navbar-theme"
id="layout-navbar"
>
<div class="layout-menu-toggle navbar-nav align-items-xl-center me-3 me-xl-0 d-xl-none">
  <a class="nav-item nav-link px-0 me-xl-4" href="javascript:void(0)">
    <i class="bx bx-menu bx-sm"></i>
  </a>
</div>

<div class="navbar-nav-right d-flex align-items-center pb-4 pt-3" id="navbar-collapse">
    <!-- Localization Langauge -->
    <h6 class="card-title text-primary mt-4">Langauges : </h6>
    <div class="dropdown mt-2">
        <button class="btn btn-primary dropdown-toggle" type="button" id="localeDropdown" data-bs-toggle="dropdown" aria-expanded="false">
            {{ LaravelLocalization::getCurrentLocaleNative() }} <!-- Display current locale -->
        </button>
        <ul class="dropdown-menu" aria-labelledby="localeDropdown">
            @foreach(LaravelLocalization::getSupportedLocales() as $localeCode => $properties)
                <li>
                    <a class="dropdown-item" rel="alternate" hreflang="{{ $localeCode }}" href="{{ LaravelLocalization::getLocalizedURL($localeCode, null, [], true) }}">
                        {{ $properties['native'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
    <!-- End Localization Langauge -->


    <ul class="navbar-nav flex-row align-items-center">
        <!-- Notification -->
        @livewire('admin.notifications.category-notification')
         <!-- End Notification -->
      </ul>


  <ul class="navbar-nav flex-row align-items-center ms-auto">
    <!-- User -->
    <li class="nav-item navbar-dropdown dropdown-user dropdown mt-2">
      <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
        <div class="avatar avatar-online">
          <img src="{{ asset('admin-assets') }}/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
        </div>
      </a>
      <ul class="dropdown-menu dropdown-menu-end">
        <li>
          <a class="dropdown-item" href="#">
            <div class="d-flex">
              <div class="flex-shrink-0 me-3">
                <div class="avatar avatar-online">
                  <img src="{{ asset('admin-assets') }}/img/avatars/1.png" alt class="w-px-40 h-auto rounded-circle" />
                </div>
              </div>
              <div class="flex-grow-1">
                <span class="fw-semibold d-block">{{ Auth::guard('admin')->user()->name }}</span>
                <small class="text-muted">Admin</small>
              </div>
            </div>
          </a>
        </li>
        <li>
          <div class="dropdown-divider"></div>
        </li>
        @livewire('admin.auth.admin-logout-component')
      </ul>
    </li>
    <!--/ User -->
  </ul>
</div>

</nav>
<!-- / Navbar -->
