<?php
session_start();
?>
<?php include_once("navbar.php"); ?>
    <div class="contact-area style-three inner">
      <div class="container">
        <div class="row add-white-bg align-items-center">
          <div class="col-md-7">
            <div class="single-contact-box">
              <div class="contact-contetn">
                <h4>CONTACT US</h4>
                <p>To contact our support team, kindly fill out the form.</p>
              </div>
              <form action="contact_process.php" method="post">
              <?php
                if (isset($_SESSION['message'])) {
                    if ($_SESSION['message_type'] == 'success') {
                        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
                            Message has been sent successfully!
                             <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                            </div>';
                    } else {
                        echo '<div class="alert alert-danger alert-dismissible fade show" role="alert">
                        There was an error sending your message.
                              <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
                        </div>';
                    }
                    unset($_SESSION['message']);
                    unset($_SESSION['message_type']);
                }
                ?>
                <div class="row">
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="name"
                        placeholder="Your Name"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="email"
                        placeholder="Enter E-Mail"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="phone"
                        placeholder="Phone Number"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <select name="subject" id="place" required="">
                        <option value="" >Subject</option>
                        <option value="Sales">Sales</option>
                        <option value="Booking">Booking</option>
                        <option value="Feedback">Feedback</option>
                        <option value="Marketing">Marketing</option>
                      </select>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="single-input-box">
                      <textarea
                        name="massage"
                        id="massage"
                        placeholder="Write Massage"
                        required=""
                      ></textarea>
                    </div>
                  </div>
                  <div class="col-lg-12">
                    <div class="massage-sent-button">
                      <button type="submit">Send Message</button>
                    </div>
                  </div>
                </div>
              </form>
            </div>
          </div>
          <div class="col-md-5">
            <div class="single-contact-info-box">
              <div class="info-content">
                <h4>Don’t Forget to Contact Us</h4>
              </div>
              <div class="contact-info-box">
                <div class="contact-info-icon">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="contact-info-content">
                  <p>Call Us</p>
                  <h4>+61410300544</h4>
                </div>
              </div>
              <div class="contact-info-box">
                <div class="contact-info-icon">
                  <i class="bi bi-envelope-open-fill"></i>
                </div>
                <div class="contact-info-content">
                  <p>Send E-Mail</p>
                  <h4>marketown@newyphonerepairs.com.au </h4>
                </div>
              </div>
              <div class="contact-info-box">
                <div class="contact-info-icon">
                  <i class="bi bi-alarm"></i>
                </div>
                <div class="contact-info-content time-frame">
                  <p> Trading Hours</p>
                  <h4> <span>Monday </span> : 9:00am - 5:30 pm</h4>
                  <h4> <span>Tuesday </span> : 9:00am - 5:30pm</h4>
                  <h4> <span>Wednesday </span> : 9:00am - 5:30 pm </h4>
                  <h4> <span>Thursday </span> : 9:00am - 9:00pm </h4>
                  <h4> <span>Friday </span> : 9:00am - 5:30pm </h4>
                  <h4> <span>Saturday </span> : 9:00am - 5:00pm </h4>
                  <h4> <span>Sunday </span> : 10:00am - 4:00pm </h4>

                </div>
              </div>

              <div class="d-flex ms-5">
              <div class="contact-info-box ms-3">
                <div class="contact-info-icon">
                  <a href="https://www.facebook.com/newyphonerepairs" target ="_blank">
                    <i class="fa-brands fa-facebook-f"></i>
                  </a>
                </div>
              </div>
              <div class="contact-info-box ms-3">
                <div class="contact-info-icon">
                  <a href="https://www.instagram.com/newyphonerepairs/#" target ="_blank">
                   <i class="fa-brands fa-instagram"></i>
                  </a>

                </div>
              </div>

              </div>



            </div>
          </div>
        </div>
      </div>
    </div>
    <!--==================================================-->
    <!-- Start NPRA Website Brand Area Style Two-->
    <!--==================================================-->
    <?php include_once("brand-list.php"); ?>
<?php include_once("footer.php"); ?>