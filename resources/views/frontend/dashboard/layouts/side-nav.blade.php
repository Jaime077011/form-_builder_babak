<nav class="sidenav navbar navbar-vertical  fixed-left  navbar-expand-xs navbar-light bg-card-dark" id="sidenav-main">
  <div class="scrollbar-inner">
    <!-- Brand -->
    <div class="sidenav-header  align-items-center">
      <a class="navbar-brand" href="#">
        <img src={{ asset("frontend/assets/img/babak.png")}} class="navbar-brand-img" alt="...">
      </a>
    </div>
    <div class="navbar-inner">
      <!-- Collapse -->
      <div class="collapse navbar-collapse" id="sidenav-collapse-main">
        <!-- Nav items -->
        <ul class="navbar-nav" >
          <li class="nav-item">
            <a class="nav-link " href="{{ route('dashboard.home') }}" role="button">
              <i class="fas fa-columns"></i>
              <span class="nav-link-text">{{__('Dashboard.Dashboard')}}</span>
            </a>
          </li>

            {{-- @php
            /* menu query's */
              $allMenuItem = DB::table('menus')->orderBy('order')->get();
              $parentMenuItem = DB::table('menus')->where('parent_id', 0)->orderBy('order')->get();
            @endphp
            @foreach ($parentMenuItem as $parentItem) --}}
            <li class="nav-item">
              <a class="nav-link " href="{{route('companies.index') }}" role="button">
                <i class="fa-solid fa-building-columns"></i>
                <span class="nav-link-text">{{__('Dashboard.Companies')}}</span>
              </a>
            </li>
            <li class="nav-item">
              {{-- @php
                $hasChild = DB::table('menus')->where('parent_id', $parentItem->id)->get();
              @endphp
              @if (count($hasChild)>0)
              {{-- @if (auth('admin')->user()->hasAnyPermission(json_decode($parentItem->permissions)) or auth('admin')->user()->hasRole('super-admin')) --}}
                {{-- <a class="nav-link" onclick="event.preventDefault()" data-toggle="collapse" href="#collapse-{{ $parentItem->id }}" role="button">
                  <i class="{{ $parentItem->icon }}"></i>
                  <span class="nav-link-text">{{ $parentItem->name }}</span>
                </a> --}} 
              {{-- @endif --}}
                {{-- <ul class="collapse
                @foreach ($allMenuItem as $childItem)
                @if ($parentItem->id == $childItem->parent_id)
                {{ (request()->is($childItem->uri)) ? 'show' : '' }}
                @endif
                @endforeach
                " id="collapse-{{ $parentItem->id }}">
                  @foreach ($allMenuItem as $childItem) --}}
                      {{-- @if ($parentItem->id == $childItem->parent_id) --}}
                      {{-- @if (auth('admin')->user()->hasAnyPermission(json_decode($childItem->permissions)) or auth('admin')->user()->hasRole('super-admin')) --}}
                      {{-- <li class="nav-item {{ (request()->is($childItem->uri)) ? 'active' : '' }}"><a class="nav-link" href="{{ url($childItem->uri) }}"><i class="{{ $childItem->icon }}"></i>{{ $childItem->name }}</a></li> --}}
                      {{-- @endif --}}
                      {{-- @endif --}}
                  {{-- @endforeach
                </ul> --}}
              {{-- @else --}}
                {{-- @if (auth('admin')->user()->hasAnyPermission(json_decode($parentItem->permissions)) or auth('admin')->user()->hasRole('super-admin')) --}}
                <a class="nav-link " href="{{ route('employee.index') }}" role="button">
                  <i class="fas fa-user-tie"></i>
                  <span class="nav-link-text">{{__('Dashboard.Employee')}}</span>
                </a>
                {{-- @endif --}}
              {{-- @endif --}}
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('sponsore.index') }}" role="button">
                <i class="fa-solid fa-people-roof"></i>
                <span class="nav-link-text">{{__('Dashboard.Sponsored')}}</span>
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link " href="{{ route('dashboard.action-request') }}" role="button">
                <i class="fa fa-message"></i>
                <span class="nav-link-text">{{__('Dashboard.Action Requests')}}</span>
              </a>
            </li>
            {{-- <li class="nav-item">
              <a class="nav-link " href="{{ route('dashboard.reports') }}" role="button">
                <i class="fa fa-file"></i>
                <span class="nav-link-text">{{__('Dashboard.Reports')}}</span>
              </a>
            </li> --}}
            {{-- @endforeach --}}

          

        </ul>
      </div>
    </div>
  </div>
</nav>
