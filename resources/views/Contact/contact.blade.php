@extends('Layout.head')

<main id="main">

  <div class="container-fluid about-banner">
    <h1 class="page-heading">Contact Us</h1>
  </div>

  <section id="contact" class="contact">
    <div class="container">

      <div class="section-title">
        <h2>Contact</h2>
        <!-- <p>Magnam dolores commodi suscipit. Necessitatibus eius consequatur ex aliquid fuga eum quidem. Sit sint consectetur velit. Quisquam quos quisquam cupiditate. Et nemo qui impedit suscipit alias ea. Quia fugiat sit in iste officiis commodi quidem hic quas.</p> -->
      </div>

    </div>



    <div class="container">

      <div class="row mt-5">

        <div class="col-lg-6">

          <div class="row">
            <div class="col-md-12">
              <div class="info-box">
                <i class="bx bx-map"></i>
                <h3>Our Address</h3>
                <p>Lion Tarachand Bapa Hospital Marg, Jain Society, Sion (W),
                  <br> Mumbai - 400 022.
                </p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-envelope"></i>
                <h3>Email Us</h3>
                <p><a href="mailto:info@liontarachandbapahospital.com">info@liontarachandbapahospital.com</a></p>
              </div>
            </div>
            <div class="col-md-6">
              <div class="info-box mt-4">
                <i class="bx bx-phone-call"></i>
                <h3>Call Us</h3>
                <p><a href="tel:+91- 9702360126" title="9702360126">91- 9702360126 </a>/ <a href="tel:+91- 8097660126" title="8097660126"> 8097660126</a></p>
              </div>
            </div>
          </div>

        </div>

        <div class="col-lg-6">
          <form action="forms/contact.php" method="post" role="form" class="php-email-form">
            <div class="row">
              <div class="col-md-6 form-group">
                <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" data-rule="minlen:4" data-msg="Please enter at least 4 chars" />
                <div class="validate"></div>
              </div>
              <div class="col-md-6 form-group mt-3 mt-md-0">
                <input type="email" class="form-control" name="email" id="email" placeholder="Your Email" data-rule="email" data-msg="Please enter a valid Email" />
                <div class="validate"></div>
              </div>
            </div>
            <div class="form-group mt-3">
              <input type="text" class="form-control" name="subjected" id="subject" placeholder="Subject" data-rule="minlen:6" data-msg="Please enter at least 6 chars" />
              <div class="validate"></div>
            </div>
            <div class="form-group mt-3">
              <textarea class="form-control" name="message" rows="7" placeholder="Message" data-rule="required" data-msg="Please write something for us"></textarea>
              <div class="validate"></div>
            </div>
            <div class="my-3">
              <div class="loading">Loading</div>
              <div class="error-message">Problem occured while sending email please try after sometime!</div>
              <div class="sent-message">Your message has been sent. Thank you!</div>
            </div>
            <div class="text-center"><button type="submit">Send Message</button></div>
          </form>
        </div>

      </div>

    </div>

  </section>

  <div class="container">
    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3771.573888423204!2d72.85670837425076!3d19.038489353150908!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x3be7c92fbdd57ce9%3A0x8d34c948dfe46cba!2sLion%20Tarachand%20Bapa%20Hospital%20And%20Research%20Centre!5e0!3m2!1sen!2sin!4v1711108042980!5m2!1sen!2sin" width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>



</main><!-- End #main -->

@extends('Layout.footer')
