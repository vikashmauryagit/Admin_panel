@extends('Layout.head')
<!-- ======= Hero Section ======= -->
<div class=" my-4 p-0">
    <div id="slider" class="carousel carousel-dark slide" data-ride="carousel">
        <div class="carousel-indicators">
            <button type="button" data-bs-target="#slider" data-bs-slide-to="0" class="active" aria-current="true"
                aria-label="Slide 1"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="1" aria-label="Slide 2"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="2" aria-label="Slide 3"></button>
            <button type="button" data-bs-target="#slider" data-bs-slide-to="3" aria-label="Slide 4"></button>
        </div>
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{asset('assets/img/slide/banner_2.jpeg')}}" class="d-block w-100" alt="...">
                <div class="overlay"></div>
                <div class="carousel-caption d-block">
                    <h2>Cath Lab</h2>
                </div>
                <!-- <div class="text-center py-1" style="background-color: #3498DB; color:#fff;">
          <h4 class="mt-2">Radiology</h4>
        </div> -->
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/slide/banner_3.jpeg')}}" class="d-block w-100" alt="...">
                <div class="overlay"></div>
                <div class="carousel-caption d-block">
                    <h2>Ultra Modern Operation Theater ICCU</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="{{asset('assets/img/slide/banner_4.jpeg')}}" class="d-block w-100" alt="...">
                <div class="overlay"></div>
                <div class="carousel-caption d-block">
                    <h2>ICCU</h2>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="{{asset('assets/img/slide/banner_1.jpeg')}}" class="d-block w-100" alt="...">
                <div class="overlay"></div>
                <div class="carousel-caption d-block">
                    <h2>Radiology</h2>
                </div>
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#slider" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#slider" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>

    </div>


</div>
<!-- End Hero -->

<main id="main">

    <!-- ======= Featured Services Section ======= -->
    <div id="featured-services" class="featured-services">
        <div class="container swiper">
            <div class="slide-content">
                <div class="card-wrapper swiper-wrapper" data-aos="fade-up">
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="100">
                            <div class="icon">
                                <img src="{{ asset('assets/img/icons/cardiology.jpg') }}" style="height: 200px;"
                                    width="100%" class="img-fluid" alt="Cardiology">
                            </div>
                            <h4 class="title">
                                <a href="#">Cardiology</a>
                            </h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="200">
                            <div class="icon">
                                {{-- <img src="{{ asset('assets/img/icons/cardiology2.png') }}" style="height: 200px;"> --}}
                                <img src="{{ asset('assets/img/icons/cardiology2.jpg') }}" style="height: 200px;"
                                    width="100%" class="img-fluid" alt="Urology">
                            </div>
                            <h4 class="title">
                                <a href="#">Urology</a>
                            </h4>
                            <p class="description"></p>
                        </div>
                    </div>

                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="300">
                            <div class="icon"><img src="{{ asset('assets/img/icons/radiology2.webp') }}"
                                    style="height: 200px;" width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Radiology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/orthopedic3.jpg')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Orthopedic</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/cvts2.jpg  ')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">CVTS</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/oncology2.jpeg')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Oncology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/criticalcare2.jpg')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Critical Care</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/pulmonary2.png')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Pulmonary Rehab</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/nicu2.jpg')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Neonatal Care Unit</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/operation2.jpg')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Advance Supra Major OT</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/advneurology.webp')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Advance Neurology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/MINIM')}}AL-INVASIVE-SURGERY.jpg"
                                    style="height: 200px;" width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Minimal Invasive Surgery</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/gyanec3.jpg')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Gyanec</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/Pediatrician2.jpg')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Paediatric</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/ent3.jp')}}g" style="height:200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">ENT&Head neck Oncology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/Opthalmology2.jpg')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Opthalmology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="{{asset('assets/img/icons/pathology3.jpg')}}" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Pathology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="swiper-button-next swiper-navBtn"></div>
            <div class="swiper-button-prev swiper-navBtn"></div>
            <div class="swiper-pagination"></div>
        </div>
    </div>
    <!-- End Featured Services Section -->

    <!-- ======= Cta Section ======= -->
    <!-- <section id="cta" class="cta">
    <div class="container" data-aos="zoom-in">

      <div class="text-center">
        <h3>In an emergency? Need help now?</h3>
        <p> Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
        <a class="cta-btn scrollto" href="#appointment">Make an Make an Appointment</a>
      </div>

    </div>
  </section> -->
    <!-- End Cta Section -->

    <div class="container">
        <div class="row m-auto">
            <div class="col-lg-4 offset-lg-2 mb-2">
                <div class="card">
                    <div class="card-header bg-success p-1 text-center text-light">
                        <h5>Upcoming Events</h5>
                    </div>
                    <div class="card-body">
                        @foreach ($upcomingEvents as $item)
                            <div class="d-flex  gap-2 align-items-center  ">
                                <div class="mb-1">
                                    <a href="{{route('Event.show',$item->id)}}" class="btn btn-success p-1 rounded"><i
                                            class="fa-solid fa-eye text-light"></i></a>
                                </div>
                                <div class="">
                                    <p class="text-primary fw-semibold m-0">{{ $item->event_date }}</p>
                                </div>
                                <div>
                                    <p class="text-primary fw-semibold m-0">{{ $item->event_title }}</p>
                                </div>

                            </div>
                        @endforeach
                    </div>
                </div>
            </div>
            <div class="col-lg-4 mb-2">
                <div class="card">
                    <div class="card-header bg-success p-1 text-center text-light">
                        <h5>Events</h5>
                    </div>
                    <div class="card-body">
                      @foreach ($currentEvents as $item)
                          <div class="d-flex  gap-2 align-items-center  ">
                              <div class="mb-1">
                                  <a href="{{route('Event.show',$item->id)}}" class="btn btn-success p-1 rounded"><i
                                          class="fa-solid fa-eye text-light"></i></a>
                              </div>
                              <div class="">
                                  <p class="text-primary fw-semibold m-0">{{ $item->event_date }}</p>
                              </div>
                              <div>
                                  <p class="text-primary fw-semibold m-0">{{ $item->event_title }}</p>
                              </div>

                          </div>
                      @endforeach
                  </div>
                </div>
            </div>
            <div class="col-lg-4 m-auto">
                <div class="card">
                    <div class="card-header bg-success p-1 text-center text-light">
                        <h5>Notice</h5>
                    </div>
                    <div class="card-body">
                      @foreach ($notice as $notice)
                          <div class="d-flex  gap-2 align-items-center  ">
                              <div class="mb-1">
                                  <a href="{{route('notice.show',$notice->id)}}" class="btn btn-success p-1 rounded"><i
                                          class="fa-solid fa-eye text-light"></i></a>
                              </div>
                              <div class="">
                                  <p class="text-primary fw-semibold m-0">{{ $notice->date }}</p>
                              </div>
                              <div>
                                  <p class="text-primary fw-semibold m-0">{{ $notice->notice_title }}</p>
                              </div>

                          </div>
                      @endforeach
                  </div>
                </div>
            </div>
        </div>
    </div>


    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Facilities</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="row">
                <div class="col-lg-6 sideleft" data-aos="fade-right">
                    <img src="{{asset('assets/img/lionstarachandbldgold2.jpeg')}}" class="img-fluid" alt="">
                </div>
                <div class="col-lg-6 pt-4 pt-lg-0 content" data-aos="fade-left">
                    <!-- <h3>Voluptatem dignissimos provident quasi corporis voluptates sit assumenda.</h3> -->
                    <ul class="fst-italic">
                        <li>
                            65-bedded full-fledged hospital having newly added State of Art Cardiac Care Centre.
                        </li>
                        <li>
                            Advance Cathlab Unit from Philips, fully equipped CVTS OT and Interventional Radiology
                            Unit
                        </li>
                        <li>
                            Advance diagnostic unit with Digital X-Ray, fully Automated Pathology, Computerised
                            Stress test (TMT), Holter Monitoring etc.
                        </li>
                        <li>
                            Advance Pulmonary care & Rehab centre with latest PFT machine from V-Vyaire company from
                            Germany.
                        </li>
                        <li>
                            Four ultra-modern Operation Theatres, I.C.C.U., N.I.C.U., C. T. Scan.
                        </li>
                        <li>
                            Separate Male Ward, Female & Paediatric Ward and Executive Ward.
                        </li>
                        <li>
                            Deluxe, Super Deluxe and Suite Room.
                        </li>
                        <li>
                            Daily O.P.D. of approximately 200 patients.
                        </li>
                        <li>
                            120 honorary doctors of various faculties like physicians, dentists, gynaecologists,
                            E.N.T. specialists, Orthopaedics, Ophthalmologists, Physiotherapists, Oncologists,
                            Haematologists, etc.
                        </li>
                        <li>
                            More than 200 Nursing, Para Medical and Technical staff.
                        </li>
                        <li>
                            Recently joined hands with Rotary Club of Mumbai Queens’s Necklace to develop State of
                            art Cardiology Dept.with all Latest Advance Cardiac machines and Technologies.
                        </li>
                        <li>
                            24x7 Advance Cardiac Ambulance Facility for attending emergencies, shifting patient from
                            elsewhere to Hospital for treatment.
                        </li>
                        <li>
                            Cashless Mediclaim and TPA Facility-empanelled with various TPAs and Private mediclaim
                            Companies to bring hassle-free cashless mediclaim Facilities.
                        </li>
                        <li>
                            Also registered for Govt. scheme like MJPJAY(Mahatma Jyotiba Phule Jivandayee Arogya
                            Yojana) to provide Free Medical facility for BPL Patient(orange ration card Holder)
                        </li>
                    </ul>
                </div>
              </div>
        </div>
    </section><!-- End About Us Section -->

    <!-- ======= Counts Section ======= -->
    <div id="counts" class="counts">
        <div class="container" data-aos="fade-up">

            <div class="row no-gutters">

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-user-md"></i>
                        <span data-purecounter-start="0" data-purecounter-end="27" data-purecounter-duration="1"
                            class="purecounter"></span>

                        <p><strong>Doctors</strong>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="far fa-hospital"></i>
                        <span data-purecounter-start="0" data-purecounter-end="14" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Departments</strong>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fa-solid fa-gears"></i>
                        <span data-purecounter-start="0" data-purecounter-end="1500" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Services</strong>
                    </div>
                </div>

                <div class="col-lg-3 col-md-6 d-md-flex align-items-md-stretch">
                    <div class="count-box">
                        <i class="fas fa-award"></i>
                        <span data-purecounter-start="0" data-purecounter-end="21" data-purecounter-duration="1"
                            class="purecounter"></span>
                        <p><strong>Awards</strong>
                    </div>
                </div>

            </div>

        </div>
    </div><!-- End Counts Section -->


    <!-- ======= Services Section ======= -->
    <section id="services" class="services services">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Services</h2>
                <p>Our Comprehensive Medical Offerings</p>
            </div>

            <div class="row">
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
                    <div class="icon">
                        <!-- <i class="fas fa-disease"></i> -->
                        <img src="{{asset('assets/img/oncologyicon.jpg')}}" style="width: 100%;" alt="">
                    </div>
                    <h4 class="title"><a href="">Oncology Department</a></h4>
                    <p class="description">
                        The treatment of cancer has come a long way! From radical surgeries to minimal invasive
                        surgeries from wide beam radiotherapy to brachytherapy. The main arm of cancer treatment
                        that is chemotherapy has evolved to a simple day care based treatment. Here at LIONS
                        TARCHAND BAPA we provide you with the Hospital Complete one stop solution from advance
                        cancer surgeries to chemotherapy. We have an expert team OT Docters specially trained from
                        Renowned Institudes of oncology from worldwide. All the advance cancer surgeries are done in
                        hospital. In post-operative care, we provide the facility of chemotherapy & Palliatire cacre
                        to the patient.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
                    <div class="icon">
                        <!-- <i class="fas fa-biohazard"></i> -->
                        <img src="{{asset('assets/img/ctscan.jfif')}}" style="width: 100%;" alt="">
                    </div>
                    <h4 class="title"><a href="">CT Scan</a></h4>
                    <p class="description">
                        The Magnum Diagnostic Center brings to you a state-of-the-art 128 slice CT scanner
                        (‘computerized tomography’ (CT) or ‘computerized axial tomography’ (CAT) scan uses a
                        computer that takes data from several X-ray images of structures inside a human’s or
                        animal’s body and converts them into pictures on a monitor), capable of capturing full
                        cardiac status in Ct cheet, abdomen Brain along with CT angio is being performed in the
                        center. It helps us to get complete idea of diseased condition & precision in diagnosis &
                        treatment of the patient.
                    </p>
                </div>
                <div class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
                    <div class="icon">
                        <!-- <i class="fas fa-procedures"></i> -->
                        <img src="{{asset('assets/img/dialysis.svg')}}" style="width: 100%;" alt="">
                    </div>
                    <h4 class="title"><a href="">Dialysis</a></h4>
                    <p class="description">
                        Dialysis is the artificial process of eliminating waste (diffusion) and unwanted water
                        (ultrafiltration) from the blood. Our kidneys do this naturally. Some people, however, may
                        have failed or damaged kidneys which cannot carry out the function properly – they may need
                        dialysis. In other words, dialysis is the artificial replacement for lost kidney function.
                        The prevalance of acute & chronic kidney failure is increasing day by da. So Patient with
                        kidney failure requires dialysis almost weekly twice or Thrice basics. At hospital we
                        provide OPD as well as emergency dialysis, SLED Plsmapheresis, Etc to all such patients.
                    </p>
                </div>

                <a href="{{ route('service') }}" class="services-btn scrollto"><span
                        class="d-none d-md-inline">More</span>
                    Services</a>
            </div>

        </div>
    </section><!-- End Services Section -->

   

</main><!-- End #main -->\

<script src="https://cdn.jsdelivr.net/npm/swiper@10/swiper-bundle.min.js"></script>


<script>
    var swiper = new Swiper(".slide-content", {
        slidesPerView: 4,
        spaceBetween: 25,
        loop: true,
        autoplay: true,
        centerSlide: 'true',
        fade: 'true',
        grabCursor: 'true',
        pagination: {
            el: ".swiper-pagination",
            clickable: true,
            dynamicBullets: true,
        },
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },

        breakpoints: {
            0: {
                slidesPerView: 1,
            },
            520: {
                slidesPerView: 2,
            },
            950: {
                slidesPerView: 3,
            },
            1350: {
                slidesPerView: 4,
            },
        },

    });
</script>

@extends('Layout.footer')
