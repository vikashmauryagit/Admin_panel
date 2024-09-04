<nav class="main-header navbar navbar-expand navbar-white navbar-light">
    <ul class="navbar-nav">
        <li class="nav-item">
          <a class="nav-link" data-widget="pushmenu" href="#" role="button"><i class="fas fa-bars"></i></a>
        </li>
        
      </ul>
    <ul class="navbar-nav ml-auto">
        <div class="d-flex align-items-center mr-5">
            <div>
                <li class="nav-item">
                    <a class="nav-link" data-widget="fullscreen" href="#" role="button">
                        <i class="fas fa-expand-arrows-alt"></i>
                    </a>
                </li>
            </div>
            <div>
               Hello,{{Auth::user()->name}}
               <a href="{{route('logout')}}" class="btn btn-danger p-1 ml-2">Logout</a>
             </div>
        </div>
        
    </ul>
</nav>
