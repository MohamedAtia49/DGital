<!-- Notification -->
<div wire:ignore.self>
    <li class="nav-item navbar-dropdown dropdown-user dropdown mt-2">
        <a class="nav-link dropdown-toggle hide-arrow" href="javascript:void(0);" data-bs-toggle="dropdown">
          <div class="@if (Auth::guard('admin')->user()->unreadNotifications->count() > 0) text-danger @endif">
              <i class="fa-regular fa-bell fa-xl">
                  @if ($notifications->count() > 0)
                      {{ $notifications->count() }}
                  @endif
              </i>
          </div>
        </a>
        <ul class="dropdown-menu dropdown-menu-end" wire:poll.10s.keep-alive>
          @foreach ($notifications as $notification)
              <li>
              <button class="dropdown-item" wire:click="markAsRead({{ $notification->data['category_id'] }})">
                  <div class="d-flex">
                  <div class="flex-shrink-0 me-3">
                      <div class="@if ($notification) text-danger @endif">
                          <i class="fa-regular fa-bell"></i>
                      </div>
                  </div>
                  <div class="flex-grow-1">
                      <span class="fw-semibold d-block">{{ $notification->data['admin_create'] }} & <small class="text-muted">Admin</small> </span>
                      <small class="text-muted">New Category : {{ $notification->data['category_name'] }}</small>
                      <div class="text-muted">created at : {{ $notification->created_at }}</div>
                  </div>
                  </div>
              </button>
              </li>
              <li>
                  <div class="dropdown-divider"></div>
              </li>
          @endforeach
        </ul>
      </li>
</div>
   <!-- End Notification -->
