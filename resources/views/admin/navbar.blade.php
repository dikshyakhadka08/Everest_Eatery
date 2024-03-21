

      <!-- partial:partials/_sidebar.html -->
      <nav class="sidebar sidebar-offcanvas" id="sidebar" style="position:fixed">
        <div class="sidebar-brand-wrapper d-none d-lg-flex align-items-center justify-content-center fixed-top">
          <a class="sidebar-brand brand-logo" href="{{url('/')}}"><img src="assets/images/everestlogo.png" alt="logo" style="height: 90px; width: 150px;"></a>
          <a class="sidebar-brand brand-logo-mini" href="{{url('/')}}"><img src="assets/images/everestlogo.png" alt="logo" style="height: 100px; width: 150px;"></a>
        </div>
        
         <li class="nav-item nav-category">
            <span class="nav-link"> 🧑 Admin's Panel  💼</span>
          </li> 
        <ul class="nav">
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/menu')}}">
              <span class="menu-icon">
                <i class="mdi mdi-playlist-play"></i>
              </span>
              <span class="menu-title">Menu-Food</span>
            </a>
          </li>



          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/customers')}}">
              <span class="menu-icon">
                <i class="mdi mdi-speedometer"></i>
              </span>
              <span class="menu-title">Customers</span>
            </a>
          </li>


          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/displaychef')}}">
              <span class="menu-icon">
                <i class="mdi mdi-table-large"></i>
              </span>
              <span class="menu-title">Chef</span>
            </a>
          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/displayreservation')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Reservation</span>
            </a>
          </li>

          </li>
          <li class="nav-item menu-items">
            <a class="nav-link" href="{{url('/ordergiven')}}">
              <span class="menu-icon">
                <i class="mdi mdi-chart-bar"></i>
              </span>
              <span class="menu-title">Orders</span>
            </a>
          </li>
         
        </ul>
      </nav>



