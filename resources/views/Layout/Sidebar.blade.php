<!-- Brand Logo -->
<a href="" class="brand-link">
    <img src="{{ asset('image/lion.png') }}" alt="AdminLTE Logo" class="brand-image img-circle elevation-3"
        style="opacity: .8">
    <span class="brand-text font-weight-light fs-3">Lion Tarachand <br>Bappa Hospital</span>
</a>

<!-- Sidebar -->
<div class="sidebar">
    <nav class="mt-2">
        <ul class="nav nav-pills nav-sidebar flex-column" data-widget="treeview" role="menu" data-accordion="false">
            <!-- Add icons to the links using the .nav-icon class
             with font-awesome or any other icon font library -->
            <li class="nav-item menu-open">
                <a href="#" class="nav-link tuch" id="">
                    <i class="nav-icon fas fa-tachometer-alt"></i>
                    <p>
                        Dashboard
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
            </li>
            @if (Auth::check())
                <li class="nav-item">
                    <a href="{{ route('notice.index') }}" class="nav-link" id="green">
                        <i class="fa-solid fa-circle-exclamation "></i>
                        <p>
                            Notice
                            <i class="fas fa-angle-left right"></i>
                        </p>
                    </a>
                </li>
                <li class="nav-item">
                    <a href="{{ route('Event.index') }}" class="nav-link" id="orange">
                        <i class="fa-solid fa-calendar-check"></i>
                        <p>
                            Events
                            <i class="right fas fa-angle-left"></i>
                        </p>
                    </a>
                </li>
            @endif
            {{-- <li class="nav-item">
                <a href="#" class="nav-link tuch">
                    <i class="fa-solid fa-calendar-days"></i>
                    <p>
                        Photo Gallery
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
            </li>
            <li class="nav-item">
                <a href="#" class="nav-link tuch">
                    <i class="fa-solid fa-database"></i>
                    <p>
                        Data Backup
                        <i class="fas fa-angle-left right"></i>
                    </p>
                </a>
            </li> --}}
        </ul>
    </nav>
</div>

<script src="https://code.jquery.com/jquery-3.7.1.min.js"
    integrity="sha256-/JqT3SQfawRcv/BIHPThkBvs0OEvtFFmqPF/lYI/Cxo=" crossorigin="anonymous"></script>


<script>
    $(document).ready(function() {
        $('#green,#orange').focus(function() {
            $(this).css('background-color', "green");

            $('#freen1,#green2').blur(function() {
                $(this).css('background-color', '');
            });

        });
    })
</script>
