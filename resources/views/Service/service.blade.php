@extends('Layout.head')

<main id="main">

  <div class="container-fluid about-banner">
    <h1 class="page-heading">Our Services</h1>
  </div>

  <section id="services" class="services">
    <div class="container" data-aos="fade-up">
      <div class="section-title">
        <h2>Services</h2>
        <p>Our Comprehensive Medical Offerings</p>
      </div>

      <div class="row">
        <div id="Cathlab" class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon">
            <!-- <i class="fas fa-disease"></i> -->
            <img src="{{asset('assets/img/cathlab.png')}}" style="width: 170%;" alt="">
          </div>
          <h4 class="title"><a href="">CATHLAB DEPARTMENT</a></h4>
          <p class="description">
            A cathlab department in a hospital typically offers a range of services including:
          </p>
          <div class="content" data-aos="fade-left">
            <ul class="fst-italic">
              <li style="text-align: left !important;">
                Diagnostic Services: cardiac catheterization-CAG-angiography, DSA etc.
              </li>
              <li style="text-align: left !important;">
                Diagnostic Services: cardiac catheterization-CAG-angiography, DSA etc.
              </li>
              <li style="text-align: left !important;">
                Treatment Services- It offer interventional procedures like PTCA-angioplasty and stent placement for coronary artery disease or implantation of pacemakers and defibrillators.Also procedure Peripheral Angioplasty, Renal artery and cerebral artery stenting, IVC Filter, TAVI, TEWAR etc are performed here.
              </li>
            </ul>
          </div>
        </div>
        <div id="ctscan" class="col-lg-4 col-md-6 icon-box" id="ctscan" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon">
            <!-- <i class="fas fa-biohazard"></i> -->
            <img src="{{asset('assets/img/ctscan.jfif')}}" style="width: 100%;" alt="">
          </div>
          <h4 class="title"><a href="">CT Scan</a></h4>
          <p class="description">
            The Magnum Diagnostic Center brings to you a state-of-the-art 128 slice CT scanner (‘computerized tomography’ (CT) or ‘computerized axial tomography’ (CAT) scan uses a computer that takes data from several X-ray images of structures inside a human’s or animal’s body and converts them into pictures on a monitor), capable of capturing full cardiac status in Ct cheet, abdomen Brain along with CT angio is being performed in the center. It helps us to get complete idea of diseased condition & precision in diagnosis & treatment of the patient.
          </p>
        </div>
        <div id="dialysis" class="col-lg-4 col-md-6 icon-box" id="ctscan" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon">
            <!-- <i class="fas fa-biohazard"></i> -->
            <img src="{{asset('assets/img/dialysis.svg')}}" style="width: 100%;" alt="">
          </div>
          <h4 class="title"><a href="">Dialysis</a></h4>
          <p class="description">
            Dialysis is the artificial process of eliminating waste (diffusion) and unwanted water (ultrafiltration) from the blood. Our kidneys do this naturally. Some people, however, may have failed or damaged kidneys which cannot carry out the function properly – they may need dialysis. In other words, dialysis is the artificial replacement for lost kidney function. The prevalence of acute & chronic kidney failure is increasing day by da. So Patient with kidney failure requires dialysis almost weekly twice or Thrice basics. At hospital we provide OPD as well as emergency dialysis, SLED Plasmapheresis, etc. to all such patients.
          </p>
        </div>
        <div id="iccuunit" class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon">
            <!-- <i class="fas fa-disease"></i> -->
            <img src="{{asset('assets/img/iccu.jpg')}}" style="width: 100%;" alt="">
          </div>
          <h4 class="title"><a href="">ICCU Unit</a></h4>
          <p class="description">
            The Intensive Coronary Care Unit is our hospital’s ward that specializes in the care of patients with heart attacks, unstable angina, and cardiac dysrhythmia and (in practice) various other cardiac conditions that require continuous monitoring and treatment. i. Round-the-clock facilities ii. 15 beds with specialized staff
          </p>
        </div>

        <div id="pulmonary" class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon">
            <!-- <i class="fas fa-procedures"></i> -->
            <img src="{{asset('assets/img/pulmanaryrehab.png')}}" style="width: 100%;" alt="">
          </div>
          <h4 class="title"><a href="">P.F.T & Pulmanary Rehab</a></h4>
          <p class="description">
            Pulmonary rehabilitation (PR) is a program aimed at improving the physical and psychological condition of people with chronic respiratory diseases. It typically involves exercise training, education about lung disease and self-management strategies, breathing techniques, and sometimes nutritional counseling. Pulmonary rehabilitation programs are tailored to individual needs and are often supervised by healthcare professionals such as respiratory therapists, physiotherapists, and nurses.
          </p>
        </div>

        <div id="opdwards" class="col-lg-4 col-md-6 icon-box" data-aos="zoom-in" data-aos-delay="300">
          <div class="icon">
            <!-- <i class="fas fa-disease"></i> -->
            <img src="{{asset('assets/img/opd.png')}}" style="width: 100%;" alt="">
          </div>
          <h4 class="title"><a href="">OPD Wards</a></h4>
          <p class="description">
            OPD wards i. 18 cabins ii. Catering to 100 plus doctors of various stream iii. Specialized cabins for Sonography, ophthalmology physiotherapy, Physiotherapy, Dentistry, homeopathy, Ayurveda etc. Under the newly rejuvenated Hospital with active support from Shri C U Shah Family along with PFT department. The department is fully equipped with Latest
          </p>
        </div>
     
        <div id="cardiacdepartment" class="col-lg-4 col-md-6 icon-box offset-lg-2" data-aos="zoom-in" data-aos-delay="200">
          <div class="icon">
            <!-- <i class="fas fa-disease"></i> -->
            <img src="{{asset('assets/img/cardiology.jfif')}}" style="width: 170%;" alt="">
          </div>
          <h4 class="title"><a href="">Cardiac Department</a></h4>
          <p class="description">
            A newly started Cardiac department with support from Rotary Club of Mumbai Queens Necklace, supported by Rotary International Grants & LCIF grant by efforts of Lions Club of Sion.
          </p>
        </div>
        <div id="oncology" class="col-lg-4 col-md-6 icon-box" id="oncology" data-aos="zoom-in" data-aos-delay="100">
          <div class="icon">
            <!-- <i class="fas fa-disease"></i> -->
            <img src="{{asset('assets/img/oncologyicon.jpg')}}" style="width: 100%;" alt="">
          </div>
          <h4 class="title"><a href="">Oncology Department</a></h4>
          <p class="description">
            The treatment of cancer has come a long way! From radical surgeries to minimal invasive surgeries from wide beam radiotherapy to brachytherapy. The main arm of cancer treatment that is chemotherapy has evolved to a simple day care based treatment. Here at LIONS TARCHAND BAPA we provide you with the Hospital Complete one stop solution from advance cancer surgeries to chemotherapy. We have an expert team OT Docters specially trained from Renowned Institudes of oncology from worldwide. All the advance cancer surgeries are done in hospital. In post-operative care, we provide the facility of chemotherapy & Palliatire cacre to the patient.
          </p>
        </div>
        </div>




      <div id="advancecathlab" class="service_s" data-aos="zoom-in" data-aos-delay="200">
        <div class="section-title">
          <h2>Advance Cath Lab</h2>
        </div>

        <div class="row">
          <div class="col-md-6" style="max-width: 100%; max-height:100%;">
            <img src="{{asset('assets/img/cathlab.jpg')}}" style="width:100%; height:100%; border-radius: 10px;" alt="">
          </div>
          <div class="col-md-6">
            <ul class="row servicesubtitude">
              <div class="col-lg">
                <li>Cardiolgy Consultant</li>
                <li>2D Echo</li>
                <li>Stress Echo</li>
                <li>Ambulatory BP Monitoring</li>
                <li>Coronary Angioplasty (PTCA)</li>
                <li>CRTD, AICD</li>
                <li>Peripheral Angioplasty</li>
                <li>Cardiac Fitness</li>
                <li>ECG</li>
              </div>
              <div class="col-lg">
                <li>Stress Test</li>
                <li>Holter Monitoring</li>
                <li>Coronary Angiography (CAG)</li>
                <li>Pacemarker Devices</li>
                <li>Peripheral Angiograpghy</li>
                <li>TAVI</li>
                <li>Cardiac Health Camp</li>
                <li>Pacemaker</li>
              </div>
            </ul>
          </div>
        </div>

      </div>

      <div id="advancecvts" class="service_s mt-5" data-aos="zoom-in" data-aos-delay="200">
        <div class="section-title">
          <h2>Advance CVTS</h2>
        </div>

        <div class="row">
          <div class="col-md-6" style="max-width:100%; max-height: 100%;">
            <img src="{{asset('assets/img/cvts.webp')}}" style="width: 100%; height:100%; border-radius: 10px;" alt="">
          </div>
          <div class="col-md-6">
            <ul class="servicecvts">
              <li>Mitral/Heart Valve Replacement</li>
              <li>Bypass Surgery</li>
              <li>Vascular Surgery</li>
              <li>Heart Transplant</li>
              <li>Heart Conditions</li>
            </ul>
          </div>
        </div>

      </div>

      <div id="advinterradio" class="service_s mt-5" data-aos="zoom-in" data-aos-delay="200">
        <div class="section-title">
          <h2>Advance Interventional Radiology</h2>
        </div>

        <div class="row">
          <div class="col-md-6" style="max-width:100%; max-height:250px;">
            <img src="{{asset('assets/img/interradiology.jpg')}}" style="width:100%; height:auto; border-radius: 10px;" alt="">
          </div>
          <div class="col-md-6">
            <ul class="serviceradiology">
              <li> DSA</li>
              <li>Balloon Angioplasty</li>
              <li>Endovascular Aneurysm Repair</li>
              <li>Aneurysm</li>
              <li>Embolization</li>
              <li>Uterine Artery Embolization</li>
              <li>Thrembolysis</li>
              <li>IVC Filters</li>
            </ul>
          </div>
        </div>

      </div>

      <div class="row p-4 facilities mt-5">
        <div class="card card-body">
          <div class="row">
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/licensed-beds2.png')}}"></div>
                <div class="col-md-9 pt-2">Soon To Be 100 Beds Super Speciality Hospital</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/operating-room.png')}}"></div>
                <div class="col-md-9 pt-2">3 Operation Theatres</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/doctors2.png')}}"></div>
                <div class="col-md-9 pt-2">250 Doctors</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/emergencyhospital.png')}}"></div>
                <div class="col-md-9">24/7 Accidents & Emergency</div>
              </div>
            </div>

            <div class="line"></div>

            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/blood-bank2.png')}}"></div>
                <div class="col-md-9 p-2">24/7 Blood Bank</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/ctscan.png')}}"></div>
                <div class="col-md-9 p-2">CT Scan - 128 Slices</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/pharmacy2.png')}}"></div>
                <div class="col-md-9 p-2">24/7 Pharmacy</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/cath.png" class="facicon')}}"></div>
                <div class="col-md-9 p-2">24/7 CathLab</div>
              </div>
            </div>

            <div class="line"></div>

            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/chest-pain.png')}}" class="facicon"></div>
                <div class="col-md-9 p-2">24/7 Chest pain Clinic</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/stroke2.png')}}"></div>
                <div class="col-md-9 p-2">24/7 Stroke Unit</div>
              </div>
            </div>

            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/intensive-care-unit.png')}}"></div>
                <div class="col-md-9 p-2">ICCU / MICU / NICU</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/cvts2.png')}}"></div>
                <div class="col-md-9 p-2">CVTS / OT</div>
              </div>
            </div>

            <div class="line"></div>


            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/dialysis2.png')}}"></div>
                <div class="col-md-9 p-2">Dialysis Centre</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/urology2.png')}}"></div>
                <div class="col-md-9 p-2">Urology Surgery Centre</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/surgery2.png')}}"></div>
                <div class="col-md-9 p-2">Specialized Cancer Surgery Centre</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/organ2.png')}}"></div>
                <div class="col-md-9 p-2">Endoscopy,Colonoscopy,Gastroscopy,Laparoscopy Surgery Centre</div>
              </div>
            </div>

            <div class="line"></div>


            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/maternity2.png')}} "></div>
                <div class="col-md-9 p-2">Maternity Department</div>
              </div>
            </div>

            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/Sonography2.png')}} "></div>
                <div class="col-md-9 p-2">Sonography - Colour Doppier Scan, 2D Echo, ECG, EEG, EMG</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/x-ray2.png')}} "></div>
                <div class="col-md-9 p-2">Digital X-Ray / PFT</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/research2.png')}} "></div>
                <div class="col-md-9 p-2">Fully Automated Pathology Lab</div>
              </div>
            </div>

            <div class="line"></div>


            <div class="col-md-3 col-6 offset-lg-2">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/eyecare.png')}} "></div>
                <div class="col-md-9 p-2">Complete Eye Care Set-up & Opthalmic OT</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/chemotherapy2.png')}} "></div>
                <div class="col-md-9 p-2">Chemotherapy Centre</div>
              </div>
            </div>
            <div class="col-md-3 col-6">
              <div class="row mb-2">
                <div class="col-md-3"><img src="{{asset('assets/img/facilities/hospital-bed.png')}}"></div>
                <div class="col-md-9 p-2">Cashless Hospitalisation Facility</div>
              </div>
            </div>
            <div class="line"></div>

          </div>
        </div>
      </div>

    </div>
  </section>

</main>
<!-- End #main -->
<script>
  function toggleHide() {
    var section = document.querySelectorAll('#morelistservices');

    section.forEach(el => el.classList.toggle('d-block'));
  }
</script>

@extends('Layout.footer')
