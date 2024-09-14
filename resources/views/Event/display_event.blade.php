<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/css/bootstrap.min.css">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <title>Document</title>
</head>
<style>
    .topbar {
        background: #1F3D7C !important;
        color: #fff;
        height: 40px;
        font-size: 16px;
        font-weight: 600;
        z-index: 996;
        transition: all 0.5s;
    }

    a {
        text-decoration: none;
    }

    .topbar.topbar-scrolled {
        top: -40px;
    }

    .topbar i {
        padding-right: 6px;
        line-height: 0;
    }

    h5,
    p {
        color: #1F3D7C;
    }

    @media(max-width:700px) {
        h5 {
            color: #1F3D7C;
            font-size: 12px;
        }
    }


    ul li a {
        color: #1F3D7C;
    }

    .social-links a {
        background-color: #1F3D7C !important;
        padding: 3px;
        border-radius: 1px;
    }

    ul li {
        list-style: none;
    }
</style>

<body>

    {{-- upper ka part idher haai --}}
    {{-- head --}}
    <div class="text-white d-flex align-items-center bg-primary p-0 topbar" id="topbar">
        <p class="px-5 mt-3 py-0 text-light">
            <i class="bi bi-tablet text-light"></i>Call us now <a href="tel:+91 9702360126"
                class="text-white text-none">+91
                9702360126</a> / <a href="tel:+91 8097660126" class="text-white">8097660126</a>
        </p>
    </div>
    {{-- navbar --}}
    <nav class="navbar navbar-expand-lg bg-body-light topbar-fixed shadow-sm">
        <div class="container-fluid p-1 ms-2">
            <a href="index.php" class="logo me-auto">
                <div class="d-flex align-items-center ms-2">
                    <div>
                        <img src="{{ asset('assets/img/lion.png') }}" alt="img-fluid" style="width:50px">
                    </div>
                    <h5 class="">Lion Tarachand Bapa <br>Hospital & Research Center</h5>
                </div>
            </a>
            <button class="navbar-toggler p-0 " type="button" data-bs-toggle="collapse"
                data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false"
                aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto me-5  mb-2 mb-lg-0">
                    <li class="nav-item">
                        <a class="fw-semibold m-2" aria-current="page" href="{{ route('home') }}">HOME</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-semibold m-2" href="{{ route('about') }}">ABOUT</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-semibold m-2" href="{{ route('depart') }}">DPARTMENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-semibold m-2" href="{{ route('doctor') }}">DOCTORS</a>
                    </li>

                    <li class="nav-item">
                        <a class="fw-semibold m-2" href="{{ route('event') }}">NEWS AND EVENTS</a>
                    </li>
                    <li class="nav-item">
                        <a class="fw-semibold m-2" href="{{ route('contact') }}">CONTACT</a>
                    </li>
                </ul>

            </div>
        </div>
    </nav>
    <div class="container my-5">
        <div class="row">
            <div class="col-lg-12">
                <div class="card">
                    <div class="card-header">
                        <h3>EVENT</h3>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="row">
                                    <th class="col">Date</th>
                                    <th class="col">Title</th>
                                    <th class="col">Objectives</th>
                                    <th class="col">Resource Person</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="row">
                                    <td class="col">{{ $event->event_date }}</td>
                                    <td class="col">{{ $event->event_title }}</td>
                                    <td class="col">{{ $event->objectives }}</td>
                                    <td class="col">{{ $event->resource_person }}</td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                    <div class="card-body">
                        <table id="example1" class="table table-bordered table-striped">
                            <thead>
                                <tr class="row">
                                    <th class="col">Beneficiaries</th>
                                    <th class="col">Event Outcome</th>
                                    <th class="col">Committee</th>
                                    <th class="col">Images</th>
                                </tr>
                            </thead>
                            <tbody>
                                <tr class="row">
                                    <td class="col">{{ $event->beneficiaries }}</td>
                                    <td class="col">{{ $event->event_outcome }}</td>
                                    <td class="col">{{ $event->committee }}</td>
                                    <td class="col"><img src="{{ Storage::url($event->event_img) }}"
                                            alt="User Image" width="60 rounded"></td>
                                </tr>
                            </tbody>
                        </table>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div class="footer bg-body-tertiary py-5">
        <div class="container-fluid">
            <div class="row">
                <div class="col-lg-5 col-md-6 col-12">
                    <div class="d-flex justify-content-space-between">
                        <div>
                            <img src="{{ asset('assets/img/lion.png') }}" alt="lion_logo" class="img-fluid"
                                style="width: 80px">
                        </div>
                        <div>
                            <h4>Lion Tarachand Bapa <br>Hospital and Research Center</h4>
                        </div>
                    </div>
                    <div class="py-2 ms-4 ">
                        <p class="text-muted fw-semibold">Lion Tarachand Bapa Hospital,<br>Jain Sociaty,Sion
                            West,<br>Mumbai,Maharastra 400022</p>
                    </div>
                    <div class="ms-4">
                        <span class="fw-semibold">Phone:</span><span class="text-muted fw-semibold"> 91-9702360126 /
                            8097660126</span><br>
                        <span class="fw-semibold">Email:</span><span class="text-muted fw-semibold p-0">
                            info@liontarachandbapahospital.com</span>
                    </div>
                    <div class="ms-4">
                        <div class="social-links mt-3">
                            <a href="#" class="facebook"><i class="bi bi-facebook  p-1 text-light"></i></a>
                            <a href="#" class="instagram"><i
                                    class="bi bi-instagram  px-1 py-1 text-light"></i></a>
                            <a href="#" class="twitter"><i class="bi bi-twitter  p-1 text-light"></i></a>
                            <a href="#" class="linkedin"><i class="bi bi-linkedin  p-1 text-light"></i></a>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 mt-2">
                    <div class="ms-4">
                        <h6>Usefull links</h6>
                    </div>
                    <div>
                        <ul class="">
                            <li class="py-1"><a href="{{ route('home') }}"><i
                                        class="bi bi-chevron-right"></i>Home</a></li>
                            <li class="py-1"><a href="{{ route('about') }}"><i
                                        class="bi bi-chevron-right"></i>About us</a></li>
                            <li class="py-1"><a href="{{ route('depart') }}"><i
                                        class="bi bi-chevron-right"></i>Departments</a></li>
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>Service</a></li>
                            <li class="py-1"><a href="{{ route('event') }}"><i
                                        class="bi bi-chevron-right"></i>News and Events</a></li>
                            <li class="py-1"><a href="{{ route('doctor') }}"><i
                                        class="bi bi-chevron-right"></i>Doctors</a></li>
                            <li class="py-1"><a href="{{ route('contact') }}"><i
                                        class="bi bi-chevron-right"></i>Contact</a></li>
                        </ul>
                    </div>

                </div>
                <div class="col-lg-3">
                    <div class="ms-4">
                        <h6>Our Services</h6>
                    </div>
                    <div>
                        <ul class="">
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>Oncology Department</a></li>
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>CT Scan</a></li>
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>P.F.T & Pulmanary Rehab</a></li>
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>ICCU Unit</a></li>
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>Cardiac Department</a></li>
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>OPD Wards</a></li>
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>Advance cath Lab</a></li>
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>Advance CVTS</a></li>
                            <li class="py-1"><a href="{{ route('service') }}"><i
                                        class="bi bi-chevron-right"></i>Advance Interventional Raiology</a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.bundle.min.js"></script>
</body>

</html>
