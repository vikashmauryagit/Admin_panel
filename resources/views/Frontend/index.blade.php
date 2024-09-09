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
                <img src="assets/img/slide/banner_2.jpeg" class="d-block w-100" alt="...">
                <div class="overlay"></div>
                <div class="carousel-caption d-block">
                    <h2>Cath Lab</h2>
                </div>
                <!-- <div class="text-center py-1" style="background-color: #3498DB; color:#fff;">
          <h4 class="mt-2">Radiology</h4>
        </div> -->
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide/banner_3.jpeg" class="d-block w-100" alt="...">
                <div class="overlay"></div>
                <div class="carousel-caption d-block">
                    <h2>Ultra Modern Operation Theater ICCU</h2>
                </div>
            </div>
            <div class="carousel-item">
                <img src="assets/img/slide/banner_4.jpeg" class="d-block w-100" alt="...">
                <div class="overlay"></div>
                <div class="carousel-caption d-block">
                    <h2>ICCU</h2>
                </div>
            </div>
            <div class="carousel-item ">
                <img src="assets/img/slide/banner_1.jpeg" class="d-block w-100" alt="...">
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
                            <div class="icon"><img src="assets/img/icons/orthopedic3.jpg" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Orthopedic</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/cvts2.jpg  " style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">CVTS</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/oncology2.jpeg" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Oncology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/criticalcare2.jpg" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Critical Care</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/pulmonary2.png" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Pulmonary Rehab</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/nicu2.jpg" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Neonatal Care Unit</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/operation2.jpg" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Advance Supra Major OT</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/advneurology.webp" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Advance Neurology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/MINIMAL-INVASIVE-SURGERY.jpg"
                                    style="height: 200px;" width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Minimal Invasive Surgery</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/gyanec3.jpg" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Gyanec</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/Pediatrician2.jpg" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Paediatric</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/ent3.jpg" style="height:200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">ENT&Head neck Oncology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/Opthalmology2.jpg" style="height: 200px;"
                                    width="100%" class="img-fluid"></div>
                            <h4 class="title"><a href="">Opthalmology</a></h4>
                            <p class="description"></p>
                        </div>
                    </div>
                    <div class="card2 swiper-slide col-md-6 col-lg-3 d-flex align-items-stretch mb-5 mb-lg-0">
                        <div class="icon-box text-center" data-aos="fade-up" data-aos-delay="400">
                            <div class="icon"><img src="assets/img/icons/pathology3.jpg" style="height: 200px;"
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

    <!-- ======= About Us Section ======= -->
    <section id="about" class="about">
        <div class="container" data-aos="fade-up">

            <div class="section-title">
                <h2>Facilities</h2>
                <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
            </div>

            <div class="row">
                <div class="col-lg-6 sideleft" data-aos="fade-right">
                    <img src="assets/img/lionstarachandbldgold2.jpeg" class="img-fluid" alt="">
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
            <!-- <div class="row p-4 facilities">
        <div class="card card-body">
          <div class="row">
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/licensed-beds.png"></div>
                <div class="col-md-9 pt-2">Soon To Be 100 Beds Super Speciality Hospital</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/operation.png"></div>
                <div class="col-md-9 pt-2">3 Operation Theatres</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/doctors.png"></div>
                <div class="col-md-9 pt-2">250 Doctors</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/hospital.png"></div>
                <div class="col-md-9">24/7 Accidents & Emergency</div>
              </div>
            </div>

            <div class="line"></div>

            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/blood-bank.png"></div>
                <div class="col-md-9 p-2">24/7 Blood Bank</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/ct-scan.png"></div>
                <div class="col-md-9 p-2">CT Scan - 128 Slices</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/pharmacy.png"></div>
                <div class="col-md-9 p-2">24/7 Pharmacy</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/cathlab-2.png"></div>
                <div class="col-md-9 p-2">24/7 CathLab</div>
              </div>
            </div>

            <div class="line"></div>

            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/chest.png"></div>
                <div class="col-md-9 p-2">24/7 Chest pain Clinic</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/stroke.png"></div>
                <div class="col-md-9 p-2">24/7 Stroke Unit</div>
              </div>
            </div>

            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/icu.png"></div>
                <div class="col-md-9 p-2">ICCU / MICU / NICU</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/cardiovascular.png"></div>
                <div class="col-md-9 p-2">CVTS / OT</div>
              </div>
            </div>

            <div class="line"></div>

            
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/dialysis.png"></div>
                <div class="col-md-9 p-2">Dialysis Centre</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/urology.png"></div>
                <div class="col-md-9 p-2">Urology Surgery Centre</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/cancer.png"></div>
                <div class="col-md-9 p-2">Specialized Cancer Surgery Centre</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/Endoscopy.png"></div>
                <div class="col-md-9 p-2">Endoscopy,Colonoscopy,Gastroscopy,Laparoscopy Surgery Centre</div>
              </div>
            </div>

            <div class="line"></div>

           
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/maternity.png "></div>
                <div class="col-md-9 p-2">Maternity Department</div>
              </div>
            </div>

            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/sonography.png "></div>
                <div class="col-md-9 p-2">Sonography - Colour Doppier Scan, 2D Echo, ECG, EEG, EMG</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/xray.png "></div>
                <div class="col-md-9 p-2">Digital X-Ray / PFT</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/pathology.png "></div>
                <div class="col-md-9 p-2">Fully Automated Pathology Lab</div>
              </div>
            </div>

            <div class="line"></div>

           
            <div class="col-md-3 col-6 offset-md-1">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/ophthalmology.png "></div>
                <div class="col-md-9 p-2">Complete Eye Care Set-up & Opthalmic OT</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/chemotherapy.png "></div>
                <div class="col-md-9 p-2">Chemotherapy Centre</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="assets/img/facilities/hospitalize.png "></div>
                <div class="col-md-9 p-2">Cashless Hospitalisation Facility</div>
              </div>
            </div>

            <div class="line"></div>

            

          </div>
        </div>
      </div> -->

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
                        <img src="assets/img/oncologyicon.jpg" style="width: 100%;" alt="">
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
                        <img src="assets/img/ctscan.jfif" style="width: 100%;" alt="">
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
                        <img src="assets/img/dialysis.svg" style="width: 100%;" alt="">
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

                <a href="{{route('service')}}" class="services-btn scrollto"><span class="d-none d-md-inline">More</span>
                    Services</a>
            </div>

        </div>
    </section><!-- End Services Section -->

    <!-- ======= Appointment Section ======= -->
    <!-- <section id="appointment" class="appointment section-bg">
    <div class="container" data-aos="fade-up">

      <div class="section-title">
        <h2>Make an Appointment</h2>
        <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
      </div>

      <form action="forms/appointment.php" method="post" role="form" class="php-email-form" data-aos="fade-up" data-aos-delay="100">
        <div class="row">
          <div class="col-md-4 form-group">
            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required>
          </div>
          <div class="col-md-4 form-group mt-3 mt-md-0">
            <input type="tel" class="form-control" name="phone" id="phone" placeholder="Your Phone" required>
          </div>
        </div>
        <div class="row">
          <div class="col-md-4 form-group mt-3">
            <input type="datetime" name="date" class="form-control datepicker" id="date" placeholder="Appointment Date" required>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="department" id="department" class="form-select">
              <option value="">Select Department</option>
              <option value="Department 1">Department 1</option>
              <option value="Department 2">Department 2</option>
              <option value="Department 3">Department 3</option>
            </select>
          </div>
          <div class="col-md-4 form-group mt-3">
            <select name="doctor" id="doctor" class="form-select">
              <option value="">Select Doctor</option>
              <option value="Doctor 1">Doctor 1</option>
              <option value="Doctor 2">Doctor 2</option>
              <option value="Doctor 3">Doctor 3</option>
            </select>
          </div>
        </div>

        <div class="form-group mt-3">
          <textarea class="form-control" name="message" rows="5" placeholder="Message (Optional)"></textarea>
        </div>
        <div class="my-3">
          <div class="loading">Loading</div>
          <div class="error-message"></div>
          <div class="sent-message">Your appointment request has been sent successfully. Thank you!</div>
        </div>
        <div class="text-center"><button type="submit">Make an Appointment</button></div>
      </form>

    </div>
  </section> -->
    <!-- End Appointment Section -->

    <!-- ======= Frequently Asked Questioins Section ======= -->
    <!-- <section id="faq" class="faq section-bg">
      <div class="container" data-aos="fade-up">

        <div class="section-title">
          <h2>Frequently Asked Questioins</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

        <ul class="faq-list">

          <li>
            <div data-bs-toggle="collapse" class="collapsed question" href="#faq1">Non consectetur a erat nam at lectus urna duis? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq1" class="collapse" data-bs-parent=".faq-list">
              <p>
                Feugiat pretium nibh ipsum consequat. Tempus iaculis urna id volutpat lacus laoreet non curabitur gravida. Venenatis lectus magna fringilla urna porttitor rhoncus dolor purus non.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq2" class="collapsed question">Feugiat scelerisque varius morbi enim nunc faucibus a pellentesque? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq2" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq3" class="collapsed question">Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq3" class="collapse" data-bs-parent=".faq-list">
              <p>
                Eleifend mi in nulla posuere sollicitudin aliquam ultrices sagittis orci. Faucibus pulvinar elementum integer enim. Sem nulla pharetra diam sit amet nisl suscipit. Rutrum tellus pellentesque eu tincidunt. Lectus urna duis convallis convallis tellus. Urna molestie at elementum eu facilisis sed odio morbi quis
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq4" class="collapsed question">Ac odio tempor orci dapibus. Aliquam eleifend mi in nulla? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq4" class="collapse" data-bs-parent=".faq-list">
              <p>
                Dolor sit amet consectetur adipiscing elit pellentesque habitant morbi. Id interdum velit laoreet id donec ultrices. Fringilla phasellus faucibus scelerisque eleifend donec pretium. Est pellentesque elit ullamcorper dignissim. Mauris ultrices eros in cursus turpis massa tincidunt dui.
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq5" class="collapsed question">Tempus quam pellentesque nec nam aliquam sem et tortor consequat? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq5" class="collapse" data-bs-parent=".faq-list">
              <p>
                Molestie a iaculis at erat pellentesque adipiscing commodo. Dignissim suspendisse in est ante in. Nunc vel risus commodo viverra maecenas accumsan. Sit amet nisl suscipit adipiscing bibendum est. Purus gravida quis blandit turpis cursus in
              </p>
            </div>
          </li>

          <li>
            <div data-bs-toggle="collapse" href="#faq6" class="collapsed question">Tortor vitae purus faucibus ornare. Varius vel pharetra vel turpis nunc eget lorem dolor? <i class="bi bi-chevron-down icon-show"></i><i class="bi bi-chevron-up icon-close"></i></div>
            <div id="faq6" class="collapse" data-bs-parent=".faq-list">
              <p>
                Laoreet sit amet cursus sit amet dictum sit amet justo. Mauris vitae ultricies leo integer malesuada nunc vel. Tincidunt eget nullam non nisi est sit amet. Turpis nunc eget lorem dolor sed. Ut venenatis tellus in metus vulputate eu scelerisque. Pellentesque diam volutpat commodo sed egestas egestas fringilla phasellus faucibus. Nibh tellus molestie nunc non blandit massa enim nec.
              </p>
            </div>
          </li>

        </ul>

      </div>
    </section> -->
    <!-- End Frequently Asked Questioins Section -->

    <!-- ======= Contact Section ======= -->
    <!-- <section id="contact" class="contact">
      <div class="container">

        <div class="section-title">
          <h2>Contact</h2>
          <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p>
        </div>

      </div>

      <div>
       <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.520840488124!2d72.85929767433295!3d19.040824553077584!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c8d25e00fb6b%3A0x479a51de749bddd7!2sC%20U%20Shah%20Bhavan!5e0!3m2!1sen!2sin!4v1703581372082!5m2!1sen!2sin" width="100%" height="350" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
      </div>

      <div class="container">

        <div class="row mt-5">

          <div class="col-lg-6">

            <div class="row">
              <div class="col-md-12">
                <div class="info-box">
                  <i class="bx bx-map"></i>
                  <h3>Our Address</h3>
                  <p>C U Shah Medical Complex,<br>Jain Society, Sion west,<br> Mumbai 400022.</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-envelope"></i>
                  <h3>Email Us</h3>
                  <p>info@liontarachandbapahospital.com</p>
                </div>
              </div>
              <div class="col-md-6">
                <div class="info-box mt-4">
                  <i class="bx bx-phone-call"></i>
                  <h3>Call Us</h3>
                  <p>91- 9702360126 / 8097660126</p>
                </div>
              </div>
            </div>

          </div>

          <div class="col-lg-6">
            <form action="forms/contact.php" method="post" role="form" class="php-email-form">
              <div class="row">
                <div class="col-md-6 form-group">
                  <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                </div>
                <div class="col-md-6 form-group mt-3 mt-md-0">
                  <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" required="">
                </div>
              </div>
              <div class="form-group mt-3">
                <input type="text" class="form-control" name="subject" id="subject" placeholder="Subject" required="">
              </div>
              <div class="form-group mt-3">
                <textarea class="form-control" name="message" rows="7" placeholder="Message" required=""></textarea>
              </div>
              <div class="my-3">
                <div class="loading">Loading</div>
                <div class="error-message"></div>
                <div class="sent-message">Your message has been sent. Thank you!</div>
              </div>
              <div class="text-center"><button type="submit">Send Message</button></div>
            </form>
          </div>

        </div>

      </div>
    </section> -->
    <!-- End Contact Section -->

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
