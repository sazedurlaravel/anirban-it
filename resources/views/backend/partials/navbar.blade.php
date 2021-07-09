<nav class="mt-2">
    <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
      <!-- Add icons to the links using the .nav-icon class
           with font-awesome or any other icon font library -->
      <li class="nav-item has-treeview menu-open">
        <a href="{{route('dashboard')}}" class="nav-link active">
          <i class="nav-icon fas fa-tachometer-alt"></i>
          <p>
            ড্যাশবোর্ড 
            <i class="right fas fa-angle-left"></i>
          </p>
        </a>
        @php
        $prefix = Request::route()->getPrefix();
        $route = Route::current()->getName();
        @endphp
      
        
      </li>
     
      <li class="nav-item has-treeview {{($prefix == '/admin')?"menu-open":""}}">
        <a href="#" class="nav-link">
          <i class="nav-icon fas fa-copy"></i>
          <p>
           আয় ও ব্যয়ের হিসাব 
            <i class="fas fa-angle-left right"></i>
            
          </p>
        </a>
        <ul class="nav nav-treeview ">
          <li class="nav-item">
            <a href="{{route('income.view')}}" class="nav-link {{($route == 'income.view')?"active":""}}">
              <i class="far fa-circle nav-icon"></i>
              <p>আয়ের তালিকা  </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('cost.view')}}" class="nav-link {{($route == 'cost.view')?"active":""}}">
              <i class="far fa-circle nav-icon"></i>
              <p>ব্যয়ের তালিকা  </p>
            </a>
          </li>
          <li class="nav-item">
            <a href="{{route('investor.view')}}" class="nav-link {{($route == 'investor.view')?"active":""}}">
              <i class="far fa-circle nav-icon"></i>
              <p>দাতাদের তালিকা </p>
            </a>
          </li>
        
        </ul>
      </li>
      
    </ul>
  </nav>