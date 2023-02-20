<!-- Menu -->

<aside id="layout-menu" class="layout-menu menu-vertical menu bg-menu-theme">
    <div class="app-brand demo">
      <a href="{{ route('dashboard') }}" class="app-brand-link">
        <span class="app-brand-logo demo">
          <img class="w-25" src="{{ url('backend/assets/img/logo.png') }}" alt="">
        </span>
      </a>

      <a href="javascript:void(0);" class="layout-menu-toggle menu-link text-large ms-auto d-block d-xl-none">
        <i class="bx bx-chevron-left bx-sm align-middle"></i>
      </a>
    </div>

    <div class="menu-inner-shadow"></div>

    <ul class="menu-inner py-1">
      <!-- Dashboard -->
      <li class="menu-item active">
        <a href="{{ route('dashboard') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-home-circle"></i>
          <div data-i18n="Analytics">Dashboard</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase"><span class="menu-header-text">Main</span></li>
      
      <li class="menu-item">
        <a href="{{ route('rumah-dijual.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-building-house"></i>
          <div data-i18n="Basic">Rumah Dijual</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('message.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-message-dots"></i>
          <div data-i18n="Basic">Message</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase"><span class="menu-header-text">Frontpage</span></li>

      <li class="menu-item">
        <a href="{{ route('tipe-rumah.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-category"></i>
          <div data-i18n="Basic">Tipe Rumah</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('testimonial.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user-voice"></i>
          <div data-i18n="Basic">Testimonial</div>
        </a>
      </li>
      <li class="menu-item">
        <a href="{{ route('informasi.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-info-circle"></i>
          <div data-i18n="Basic">Informasi</div>
        </a>
      </li>

      <li class="menu-header small text-uppercase"><span class="menu-header-text">Administrasi</span></li>

      <li class="menu-item">
        <a href="{{ route('user.index') }}" class="menu-link">
          <i class="menu-icon tf-icons bx bx-user"></i>
          <div data-i18n="Analytics">User</div>
        </a>
      </li>
    </ul>
  </aside>
  <!-- / Menu -->