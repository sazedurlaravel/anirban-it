<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="#" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            ড্যাশবোর্ড 
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        
      </li>
     
      <li class="nav-item has-treeview">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
           আয় ও ব্যয়ের হিসাব 
            <i class="fas fa-angle-left right"></i>
            
          </p>
        </a>
        <ul class="nav nav-treeview">
          <li class="nav-item">
            <a href="{{route('income.view')}}" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>আয়ের তালিকা  </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/top-nav-sidebar.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>ব্যয়ের তালিকা  </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="pages/layout/boxed.html" class="nav-link">
              <i class="far fa-circle nav-icon"></i>
              <p>দাতাদের তালিকা </p>
            </a>
          </li>
        
        </ul>
      </li>
      
    </ul>
  </nav>