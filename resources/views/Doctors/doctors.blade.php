@extends('Layout.head')

<main id="main">

  <div class="container-fluid about-banner">
    <h1 class="page-heading">Doctors</h1>
  </div>

  


  <div class="header">
    <!-- <div class="px-5 pt-3"> -->


    <div class="department" style="display: flex; width: 100%;">
      <div class="doctorsdepartment">
        <!-- Tabs nav -->
        <div class="nav flex-column nav-pills nav-pills-custom" id="v-pills-tab" role="tablist" aria-orientation="vertical">
          <a class="nav-link mb-3 shadow active" id="v-pills-physician-tab" data-toggle="pill" href="#v-pills-physician" role="tab" aria-controls="v-pills-physician" aria-selected="true">
            <!-- <i class="fa fa-user-circle-o mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="py-1 mt-1 px-2">physician</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-chest-physician-tab" data-toggle="pill" href="#v-pills-chest-physician" role="tab" aria-controls="v-pills-chest-physician" aria-selected="false">
            <!-- <i class="fa fa-calendar-minus-o mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">chest physician</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-general-surgeon-tab" data-toggle="pill" href="#v-pills-general-surgeon" role="tab" aria-controls="v-pills-general-surgeon" aria-selected="false">
            <!-- <i class="fa fa-star mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">general surgeon</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-gastrology-tab" data-toggle="pill" href="#v-pills-gastrology" role="tab" aria-controls="v-pills-gastrology" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">GASTROLOGY</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-ent-tab" data-toggle="pill" href="#v-pills-ent" role="tab" aria-controls="v-pills-ent" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">Ent</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-neurology-tab" data-toggle="pill" href="#v-pills-neurology" role="tab" aria-controls="v-pills-neurology" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">Neurology</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-pediatric-surgeon-tab" data-toggle="pill" href="#v-pills-pediatric-surgeon" role="tab" aria-controls="v-pills-pediatric-surgeon" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">pediatric surgeon</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-dermatologist-tab" data-toggle="pill" href="#v-pills-dermatologist" role="tab" aria-controls="v-pills-dermatologist" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">dermatologist</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-psychiatrist-tab" data-toggle="pill" href="#v-pills-psychiatrist" role="tab" aria-controls="v-pills-psychiatrist" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">psychiatrist</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-physiotherapy-tab" data-toggle="pill" href="#v-pills-physiotherapy" role="tab" aria-controls="v-pills-physiotherapy" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">physiotherapy</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-urologist-tab" data-toggle="pill" href="#v-pills-urologist" role="tab" aria-controls="v-pills-urologist" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">urologist</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-gynecologist-tab" data-toggle="pill" href="#v-pills-gynecologist" role="tab" aria-controls="v-pills-gynecologist" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">gynecologist</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-nephrologist-tab" data-toggle="pill" href="#v-pills-nephrologist" role="tab" aria-controls="v-pills-nephrologist" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">nephrologist (Kidney)</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-cardiologist-tab" data-toggle="pill" href="#v-pills-cardiologist" role="tab" aria-controls="v-pills-cardiologist" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">cardiologist (heart)</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-ophthal-tab" data-toggle="pill" href="#v-pills-ophthal" role="tab" aria-controls="v-pills-ophthal" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">OPHTHAL</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-orthopedic-tab" data-toggle="pill" href="#v-pills-orthopedic" role="tab" aria-controls="v-pills-orthopedic" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">orthopedic</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-oncologist-tab" data-toggle="pill" href="#v-pills-oncologist" role="tab" aria-controls="v-pills-oncologist" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">oncologist</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-radiologist-tab" data-toggle="pill" href="#v-pills-radiologist" role="tab" aria-controls="v-pills-radiologist" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">radiologist</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-homoeopathy-tab" data-toggle="pill" href="#v-pills-homoeopathy" role="tab" aria-controls="v-pills-homoeopathy" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">homoeopathy</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-plastic-surgeon-tab" data-toggle="pill" href="#v-pills-plastic-surgeon" role="tab" aria-controls="v-pills-plastic-surgeon" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">plastic surgeon</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-gastrologist-tab" data-toggle="pill" href="#v-pills-gastrologist" role="tab" aria-controls="v-pills-gastrologist" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">gastrologist</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-dietitian-tab" data-toggle="pill" href="#v-pills-dietitian" role="tab" aria-controls="v-pills-dietitian" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">dietitian</h5>
            </span>
          </a>

          <a class="nav-link mb-3 p-3 shadow" id="v-pills-dental-tab" data-toggle="pill" href="#v-pills-dental" role="tab" aria-controls="v-pills-dental" aria-selected="false">
            <!-- <i class="fa fa-check mr-2"></i> -->
            <span class="font-weight-bold big text-uppercase">
              <h5 class="mt-1 px-2">dental</h5>
            </span>
          </a>

        </div>
      </div>


      <div class="doctorslist">
        <!-- Tabs content -->
        <div class="tab-content" id="v-pills-tabContent">
          <div class="tab-pane fade rounded show active" id="v-pills-physician" role="tabpanel" aria-labelledby="v-pills-physician-tab">
            <div id="posts" class="row">
              <h3><i class="fa-solid fa-angles-right"></i>&nbsp;Physician</h3>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-light small text-capitalize">
                        <h5 class="pt-2">Dr. Arun Narvekar</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Curush Kohiar</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Nikhil Kulkarni</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Dnyaneshwar Waghmare</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Sandip Marathe</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Rahul Nilkumbe</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr.Mayur Mewada</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Vinod Totewade</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Amitabh Keny</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Suresh Jain</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Pratap Desai</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.Pallavi Kulkarni</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-chest-physician" role="tabpanel" aria-labelledby="v-pills-chest-physician-tab">
            <div id="posts" class="row">
              <h3><i class="fa-solid fa-angles-right"></i>&nbsp;Chest Physician</h3>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Prachi Shah</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Tridip Chatrji</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Swapnil Thorat</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Miti A Shah</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-general-surgeon" role="tabpanel" aria-labelledby="v-pills-general-surgeon-tab">
            <div id="posts" class="row">
              <h3><i class="fa-solid fa-angles-right"></i>&nbsp;General Surgeon</h3>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Chetan Shenoy</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Satish Kanekar</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Mangesh Pandit</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Ranjeet Kamble</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Pravin Shinde </h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Shubhangi Kamble</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Fatima Shabbir</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Deepak Sheth</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-gastrology" role="tabpanel" aria-labelledby="v-pills-gastrology-tab">
            <div id="posts" class="row">
              <h3><i class="fa-solid fa-angles-right"></i>&nbsp;gastrology</h3>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Hemant Patel</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Mayur Gatahni</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-ent" role="tabpanel" aria-labelledby="v-pills-ent-tab">
            <div id="posts" class="row">
              <h3><i class="fa-solid fa-angles-right"></i>&nbsp;ent</h3>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Ankit Jain</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Vikram Khanna </h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Shashikant Mashal</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Nitin Gupta</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Maya Shankar </h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Vinit Shah</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Ashish Kadam</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-neurology" role="tabpanel" aria-labelledby="v-pills-neurology-tab">
            <div id="posts" class="row">
              <h3><i class="fa-solid fa-angles-right"></i>&nbsp;Neurology</h3>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Rohit Chintamani</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Deepali Dnyeshwar</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Yogesh Kumar</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Narayan Deshmukh</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Yogesh Kumar</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Sushil Tandel</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Rishikesh Joshi</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-pediatric-surgeon" role="tabpanel" aria-labelledby="v-pills-pediatric-surgeon-tab">
            <div id="posts" class="row">
              <h3><i class="fa-solid fa-angles-right"></i>&nbsp;Pediatric Surgeon</h3>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Smita Singh</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Pankaj Shastri</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Nilam Jain</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Mahesh Gurav</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-dermatologist" role="tabpanel" aria-labelledby="v-pills-dermatologist-tab">
            <div id="posts" class="row">
              <h3><i class="fa-solid fa-angles-right"></i>&nbsp;dermatologist</h3>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Rajeev Pathak</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Mrunmai Mukund</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Chirag Desai</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">Dr. Anshu Kulkarni</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR. SHARIFA NEW</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.BHUSHAN</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-psychiatrist" role="tabpanel" aria-labelledby="v-pills-psychiatrist-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;psychiatrist</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.ANUPAM BORADE</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.RAVI ABHYANKAR</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.TRISA SANGHAVI</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.SUDHEENDRA HUDDAR </h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR. SHARAD MORE</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-physiotherapy" role="tabpanel" aria-labelledby="v-pills-physiotherapy-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;physiotherapy</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.MEENA THAKKAR</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.SAMEER KAUSHIK</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.PRITI SHAH</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR. PRABHAT</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-urologist" role="tabpanel" aria-labelledby="v-pills-urologist-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;urologist</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.PRAKASH PAWAR</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.TARUN JAIN</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.AMIT BELLURKAR</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.HAMID KHAN</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-gynecologist" role="tabpanel" aria-labelledby="v-pills-gynecologist-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;gynecologist</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.K T MISTRY</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.VIVEK PATKAR</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.LAXMI PATKAR</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.NEETA RAMBIYA</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.ASAWARI DONGRE</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.PRACHI PATIL</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.VINIT DHADKE</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.ESHA CHINANI</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR KAVITA SHIRIKHANDE</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-nephrologist" role="tabpanel" aria-labelledby="v-pills-nephrologist-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;gynecologist</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.ABHISHEK SHIRIKHAND</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.S P TRIVEDI</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.DEEPA</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-cardiologist" role="tabpanel" aria-labelledby="v-pills-cardiologist-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;cardiologist</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.ARVIND SINGH GAHLOT</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.V T SHAH</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.NITIN BOTE</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.ADITYA VARMAH</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.RAKESH TRIMULE</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.DHAMDHEEP HUMANE</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.UDAY JADHAV</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.KALPESH MALIK</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.NAEEAM HASANFATTE</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.MANISH GARG</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-ophthal" role="tabpanel" aria-labelledby="v-pills-ophthal-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;OPHTHAL</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.PRITHESH SHETTY</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.ARUN</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.SURAJ MISTRY (CATRACT SPACL)</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-orthopedic" role="tabpanel" aria-labelledby="v-pills-orthopedic-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;orthopedic</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.OM PATIL</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR. S S BAVA</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.JEET SAVLA</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.PRAVIN JADHAV</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.DEEPAK GOVEKAR</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.PRAVIN SHINDE</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.SHRIKANT KHADE</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.AMIT SINGH</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.UMARASHI SHAH</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.TUSHAR RATHOD</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.JEETENDRA KOTARIYA</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR. TEJ SHAH</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR. PRASANNA BISWAS</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-oncologist" role="tabpanel" aria-labelledby="v-pills-oncologist-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;oncologist</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.ANURAG SHUBHRAMANYAM</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.SACHIN KADAM</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.MAUNIL BHUTTA</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.CHAITARY SHETTY </h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.SAMRAT TAWADE</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.YOGESH SHUKLA</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.UDIT DALMIYA</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR. PRASAD KASBEKAR</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-radiologist" role="tabpanel" aria-labelledby="v-pills-radiologist-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;radiologist</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.NILESH GHADGE</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.SHIVAJI</h5>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.PRADEEP</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-homoeopathy" role="tabpanel" aria-labelledby="v-pills-homoeopathy-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;homoeopathy</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">DR.SHIRIKANT GAWADE</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <h5 class="pt-2">DR.RACHNA</h5>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-plastic-surgeon" role="tabpanel" aria-labelledby="v-pills-plastic-surgeon-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;plastic surgeon</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Sameer Vora</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-gastrologist" role="tabpanel" aria-labelledby="v-pills-gastrologist-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;gastrologist</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Hemant Patel</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-dietitian" role="tabpanel" aria-labelledby="v-pills-dietitian-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;dietitian</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. K Mala </h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade rounded bg-white" id="v-pills-dental" role="tabpanel" aria-labelledby="v-pills-dental-tab">
            <h3><i class="fa-solid fa-angles-right"></i>&nbsp;dental</h3>
            <div id="posts" class="row">
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Seema Kashyap</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Sudhanshu Joshi</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Richa Joshi</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Chitra</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
              <div class="item col-12 mb-3">
                <div class="card rounded shadow border-0">
                  <div class="card-body p-2">
                    <a href="#" class="text-dark">
                      <span class="font-weight-bold small text-uppercase">
                        <h5 class="pt-2">Dr. Poonam</h5>
                      </span>
                    </a>
                  </div>
                </div>
              </div>
            </div>
          </div>

        </div>
      </div>
    </div>
    <!-- </div> -->
  </div>

  <!-- End Doctors Section -->

</main>

@extends('Layout.footer')
