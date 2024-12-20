<div class="app-sidebar-menu overflow-hidden flex-column-fluid">
  <!--begin::Menu wrapper-->
  <div id="kt_app_sidebar_menu_wrapper" class="app-sidebar-wrapper hover-scroll-overlay-y my-5" data-kt-scroll="true" data-kt-scroll-activate="true" data-kt-scroll-height="auto" data-kt-scroll-dependencies="#kt_app_sidebar_logo, #kt_app_sidebar_footer" data-kt-scroll-wrappers="#kt_app_sidebar_menu" data-kt-scroll-offset="5px" data-kt-scroll-save-state="true">
    <!--begin::Menu-->
    <div class="menu menu-column menu-rounded menu-sub-indention px-3" id="#kt_app_sidebar_menu" data-kt-menu="true" data-kt-menu-expand="false">
      <!--begin:Menu item-->
      <div data-kt-menu-trigger="click" class="menu-item here show menu-accordion {{ Request::routeIs('admin.home.*') ? 'hover show' : '' }}">
        <!--begin:Menu link-->
        <span class="menu-link {{ Request::routeIs('admin.home.*') ? 'active' : '' }}">
          <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/general/gen025.svg-->
            <span class="svg-icon svg-icon-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <rect x="2" y="2" width="9" height="9" rx="2" fill="currentColor" />
                <rect opacity="0.3" x="13" y="2" width="9" height="9" rx="2" fill="currentColor" />
                <rect opacity="0.3" x="13" y="13" width="9" height="9" rx="2" fill="currentColor" />
                <rect opacity="0.3" x="2" y="13" width="9" height="9" rx="2" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </span>

          {{-- <a href="{{ route('admin.home') }}"><span class="menu-title">Dashboards</span></a> --}}
          {{-- <span class="menu-title"><a href="{{ route('admin.home') }}">Dashboards</a></span> --}}

          <span class="menu-title">Dashboards</span>
          <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->

        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link {{ Request::routeIs('admin.home') ? 'active' : '' }}" href="{{ route('admin.home') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">dashboard</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

        </div>
        <!--end:Menu sub-->
      </div>

      <!--end:Menu item-->
      <!--begin:Menu item-->
      <div class="menu-item pt-5">
        <!--begin:Menu content-->
        <div class="menu-content">
          <span class="menu-heading fw-bold text-uppercase fs-7">Pages</span>
        </div>
        <!--end:Menu content-->
      </div>
      <!--end:Menu item-->


      <!--begin:Menu item-->
      <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::routeIs('admin.banners.*') || Request::routeIs('admin.concerns.*') ? 'hover show' : '' }}">
        <!--begin:Menu link-->
        <span class="menu-link {{ Request::routeIs('admin.banners.*') || Request::routeIs('admin.concerns.*') ? 'active' : '' }}">
          <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
            <span class="svg-icon svg-icon-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </span>
          <span class="menu-title">Home</span>
          <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link {{ Request::routeIs('admin.banners.*') ? 'active' : '' }}" href="{{ route('admin.banners.index') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">banners</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link {{ Request::routeIs('admin.concerns.*') ? 'active' : '' }}" href="{{ route('admin.concerns.index') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">concerns</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

        </div>
        <!--end:Menu sub-->
      </div>
      <!--end:Menu item-->


      <!--begin:Menu item-->
      <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::routeIs('admin.abouts.*') ? 'hover show' : '' }}">
        <!--begin:Menu link-->
        <span class="menu-link {{ Request::routeIs('admin.abouts.*') ? 'active' : '' }}">
          <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
            <span class="svg-icon svg-icon-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </span>
          <span class="menu-title">About</span>
          <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link {{ Request::routeIs('admin.abouts.*') ? 'active' : '' }}" href="{{ route('admin.abouts.edit') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">edit</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

        </div>
        <!--end:Menu sub-->
      </div>
      <!--end:Menu item-->

      <!--begin:Menu item-->
      <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::routeIs('admin.services.*') ? 'hover show' : '' }}">
        <!--begin:Menu link-->
        <span class="menu-link {{ Request::routeIs('admin.services.*') ? 'active' : '' }}">
          <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
            <span class="svg-icon svg-icon-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </span>
          <span class="menu-title">Service</span>
          <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link {{ Request::routeIs('admin.services.*') ? 'active' : '' }}" href="{{ route('admin.services.index') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">services</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

        </div>
        <!--end:Menu sub-->
      </div>
      <!--end:Menu item-->

      <!--begin:Menu item-->
      <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::routeIs('admin.areas.*') ? 'hover show' : '' }}">
        <!--begin:Menu link-->
        <span class="menu-link {{ Request::routeIs('admin.areas.*') ? 'active' : '' }}">
          <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
            <span class="svg-icon svg-icon-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </span>
          <span class="menu-title">Area</span>
          <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link {{ Request::routeIs('admin.areas.*') ? 'active' : '' }}" href="{{ route('admin.areas.index') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">areas</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

        </div>
        <!--end:Menu sub-->
      </div>
      <!--end:Menu item-->

      <!--begin:Menu item-->
      <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::routeIs('admin.faqs.*') ? 'hover show' : '' }}">
        <!--begin:Menu link-->
        <span class="menu-link {{ Request::routeIs('admin.faqs.*') ? 'active' : '' }}">
          <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
            <span class="svg-icon svg-icon-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </span>
          <span class="menu-title">Faq</span>
          <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link {{ Request::routeIs('admin.faqs.*') ? 'active' : '' }}" href="{{ route('admin.faqs.index') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">faqs</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

        </div>
        <!--end:Menu sub-->
      </div>
      <!--end:Menu item-->

      <!--begin:Menu item-->
      <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::routeIs('admin.contacts.*') ? 'hover show' : '' }}">
        <!--begin:Menu link-->
        <span class="menu-link {{ Request::routeIs('admin.contacts.*') ? 'active' : '' }}">
          <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/communication/com005.svg-->
            <span class="svg-icon svg-icon-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M20 14H18V10H20C20.6 10 21 10.4 21 11V13C21 13.6 20.6 14 20 14ZM21 19V17C21 16.4 20.6 16 20 16H18V20H20C20.6 20 21 19.6 21 19ZM21 7V5C21 4.4 20.6 4 20 4H18V8H20C20.6 8 21 7.6 21 7Z" fill="currentColor" />
                <path opacity="0.3" d="M17 22H3C2.4 22 2 21.6 2 21V3C2 2.4 2.4 2 3 2H17C17.6 2 18 2.4 18 3V21C18 21.6 17.6 22 17 22ZM10 7C8.9 7 8 7.9 8 9C8 10.1 8.9 11 10 11C11.1 11 12 10.1 12 9C12 7.9 11.1 7 10 7ZM13.3 16C14 16 14.5 15.3 14.3 14.7C13.7 13.2 12 12 10.1 12C8.10001 12 6.49999 13.1 5.89999 14.7C5.59999 15.3 6.19999 16 7.39999 16H13.3Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </span>
          <span class="menu-title">Contact</span>
          <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link {{ Request::routeIs('admin.contacts.*') ? 'active' : '' }}" href="{{ route('admin.contacts.index') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">contacts</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

        </div>
        <!--end:Menu sub-->
      </div>
      <!--end:Menu item-->


      {{-- <!--begin:Menu item-->
      <div class="menu-item pt-5">
        <!--begin:Menu content-->
        <div class="menu-content">
          <span class="menu-heading fw-bold text-uppercase fs-7">Apps</span>
        </div>
        <!--end:Menu content-->
      </div>
      <!--end:Menu item--> --}}

      <!--end:Menu item-->
      <!--begin:Menu item-->
      <div class="menu-item pt-5">
        <!--begin:Menu content-->
        <div class="menu-content">
          <span class="menu-heading fw-bold text-uppercase fs-7">Others</span>
        </div>
        <!--end:Menu content-->
      </div>
      <!--end:Menu item-->

      <!--begin:Menu item-->
      <div data-kt-menu-trigger="click" class="menu-item menu-accordion {{ Request::routeIs('admin.generalsetting.*') || Request::routeIs('admin.footergridtwos.*') || Request::routeIs('admin.sociallink.*') ? 'hover show' : '' }}">
        <!--begin:Menu link-->
        <span class="menu-link {{ Request::routeIs('admin.generalsetting.*') || Request::routeIs('admin.footergridtwos.*') || Request::routeIs('admin.sociallink.*') ? 'active' : '' }}">
          <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
            <span class="svg-icon svg-icon-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
                <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
                <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </span>
          <span class="menu-title">Website Setting</span>
          <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">

          <!--begin:Menu item-->
          {{-- <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <!--begin:Menu link-->
            <span class="menu-link">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">Catalog</span>
              <span class="menu-arrow"></span>
            </span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion">

              <!--begin:Menu item-->
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/products.html">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Products</span>
                </a>
                <!--end:Menu link-->
              </div>
              <!--end:Menu item-->

              <!--begin:Menu item-->
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Categories</span>
                </a>
                <!--end:Menu link-->
              </div>
              <!--end:Menu item-->

            </div>
            <!--end:Menu sub-->
          </div> --}}
          <!--end:Menu item-->

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.generalsetting.edit') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">general setting</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.footergridtwos.index') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">footer links</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="{{ route('admin.sociallink.edit') }}">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">social links</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

        </div>
        <!--end:Menu sub-->
      </div>
      <!--end:Menu item-->

      {{-- <!--begin:Menu item-->
      <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
        <!--begin:Menu link-->
        <span class="menu-link">
          <span class="menu-icon">
            <!--begin::Svg Icon | path: icons/duotune/ecommerce/ecm002.svg-->
            <span class="svg-icon svg-icon-2">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                <path d="M21 10H13V11C13 11.6 12.6 12 12 12C11.4 12 11 11.6 11 11V10H3C2.4 10 2 10.4 2 11V13H22V11C22 10.4 21.6 10 21 10Z" fill="currentColor" />
                <path opacity="0.3" d="M12 12C11.4 12 11 11.6 11 11V3C11 2.4 11.4 2 12 2C12.6 2 13 2.4 13 3V11C13 11.6 12.6 12 12 12Z" fill="currentColor" />
                <path opacity="0.3" d="M18.1 21H5.9C5.4 21 4.9 20.6 4.8 20.1L3 13H21L19.2 20.1C19.1 20.6 18.6 21 18.1 21ZM13 18V15C13 14.4 12.6 14 12 14C11.4 14 11 14.4 11 15V18C11 18.6 11.4 19 12 19C12.6 19 13 18.6 13 18ZM17 18V15C17 14.4 16.6 14 16 14C15.4 14 15 14.4 15 15V18C15 18.6 15.4 19 16 19C16.6 19 17 18.6 17 18ZM9 18V15C9 14.4 8.6 14 8 14C7.4 14 7 14.4 7 15V18C7 18.6 7.4 19 8 19C8.6 19 9 18.6 9 18Z" fill="currentColor" />
              </svg>
            </span>
            <!--end::Svg Icon-->
          </span>
          <span class="menu-title">eCommerce</span>
          <span class="menu-arrow"></span>
        </span>
        <!--end:Menu link-->
        <!--begin:Menu sub-->
        <div class="menu-sub menu-sub-accordion">
          <!--begin:Menu item-->
          <div data-kt-menu-trigger="click" class="menu-item menu-accordion">
            <!--begin:Menu link-->
            <span class="menu-link">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">Catalog</span>
              <span class="menu-arrow"></span>
            </span>
            <!--end:Menu link-->
            <!--begin:Menu sub-->
            <div class="menu-sub menu-sub-accordion">

              <!--begin:Menu item-->
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/products.html">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Products</span>
                </a>
                <!--end:Menu link-->
              </div>
              <!--end:Menu item-->

              <!--begin:Menu item-->
              <div class="menu-item">
                <!--begin:Menu link-->
                <a class="menu-link" href="../../demo1/dist/apps/ecommerce/catalog/categories.html">
                  <span class="menu-bullet">
                    <span class="bullet bullet-dot"></span>
                  </span>
                  <span class="menu-title">Categories</span>
                </a>
                <!--end:Menu link-->
              </div>
              <!--end:Menu item-->

            </div>
            <!--end:Menu sub-->
          </div>
          <!--end:Menu item-->

          <!--begin:Menu item-->
          <div class="menu-item">
            <!--begin:Menu link-->
            <a class="menu-link" href="../../demo1/dist/apps/ecommerce/settings.html">
              <span class="menu-bullet">
                <span class="bullet bullet-dot"></span>
              </span>
              <span class="menu-title">Settings</span>
            </a>
            <!--end:Menu link-->
          </div>
          <!--end:Menu item-->

        </div>
        <!--end:Menu sub-->
      </div>
      <!--end:Menu item--> --}}

    </div>
    <!--end::Menu-->
  </div>
  <!--end::Menu wrapper-->
</div>
