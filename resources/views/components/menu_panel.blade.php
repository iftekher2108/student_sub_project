      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas bg-dark" id="sidebar">
        <ul class="nav">
          <li class="nav-item {{ Request::is('home') ? 'active' : '' }}">
            <a class="nav-link" href="{{ route('home') }}">
              <i class="ti-shield menu-icon"></i>
              <span class="menu-title">Dashboard</span>
            </a>
          </li>
          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#payment" aria-expanded="false"
              aria-controls="payment">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Payments</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="payment">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Payment History</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Due Payment</a></li>
              </ul>
            </div>
          </li>

          <li class="nav-item">
            <a class="nav-link" data-bs-toggle="collapse" href="#expense" aria-expanded="false"
              aria-controls="expense">
              <i class="ti-palette menu-icon"></i>
              <span class="menu-title">Expense</span>
              <i class="menu-arrow"></i>
            </a>
            <div class="collapse" id="expense">
              <ul class="nav flex-column sub-menu">
                <li class="nav-item"> <a class="nav-link" href="">Expense Category</a></li>
                <li class="nav-item"> <a class="nav-link" href="">Expenses</a></li>
              </ul>
            </div>
          </li>


          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Bill Generate</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ti-view-list-alt menu-icon"></i>
              <span class="menu-title">Reports</span>
            </a>
          </li>

          <li class="nav-item">
            <a class="nav-link" href="">
              <i class="ti-pie-chart menu-icon"></i>
              <span class="menu-title">Profile Settings</span>
            </a>
          </li>

        </ul>
      </nav>
      <!-- partial -->
