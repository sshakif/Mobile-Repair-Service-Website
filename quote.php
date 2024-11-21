<?php
session_start();
?>
<?php include_once("navbar.php"); ?>
    <!--==================================================-->
    <!-- End Main Menu Area -->
    <!--==================================================-->
    <div class="contact-area style-three inner">
      <div class="container">
        <div class="row">
          <div class="col-md-8 m-auto add-white-bg align-items-center card p-5">
            <div class="single-contact-box ">
              <div class="contact-contetn">
                <h4>Get a quote</h4>
              </div>


              <form action="quote_process.php" method="post" >
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
                  <div class="col-md-10">
                    <div class="d-flex justify-content-between mb-3">
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          id="flexRadioDefault1"
                          value="Phone"
                          checked
                        />
                        <label
                          style="color: black"
                          class="form-check-label"
                          for="flexRadioDefault1"
                        >
                          Phone
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          value="Tablet"
                          id="flexRadioDefault1"
                        />
                        <label
                          style="color: black"
                          class="form-check-label"
                          for="flexRadioDefault1"
                        >
                          Tablet
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          value="Watch"
                          id="flexRadioDefault1"
                        />
                        <label
                          style="color: black"
                          class="form-check-label"
                          for="flexRadioDefault1"
                        >
                          Watch
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          value="Computer"
                          id="flexRadioDefault1"
                        />
                        <label
                          style="color: black"
                          class="form-check-label"
                          for="flexRadioDefault1"
                        >
                          Computer
                        </label>
                      </div>
                      <div class="form-check">
                        <input
                          class="form-check-input"
                          type="radio"
                          name="flexRadioDefault"
                          value="Ipod"
                          id="flexRadioDefault1"
                        />
                        <label
                          style="color: black"
                          class="form-check-label"
                          for="flexRadioDefault1"
                        >
                          Ipod
                        </label>
                      </div>
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="device_brand"
                        placeholder="Device brand"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="device_model"
                        placeholder="Device model"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="repairing_need"
                        placeholder="What need repairing"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="serial_number"
                        placeholder="EMI / Serial number"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="first_name"
                        placeholder="First name"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="last_name"
                        placeholder="Last name"
                        required=""
                      />
                    </div>
                  </div>

                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="text"
                        name="Phone"
                        placeholder="Phone Number"
                        required=""
                      />
                    </div>
                  </div>
                  <div class="col-lg-6">
                    <div class="single-input-box">
                      <input
                        type="email"
                        name="email"
                        placeholder="Your email address"
                        required=""
                      />
                    </div>
                  </div>

                  <div class="col-lg-12">
                  <div class="form-check">
                    <input class="form-check-input" type="checkbox" value="" id="defaultCheck1" required>
               
                      <label class="form-check-label" for="defaultCheck1" style="color: black;" href="#">
                        I agree to the <a href="terms-condition.php" style="text-decoration: underline;color:#5a17ff" >terms and conditions </a> & <a href="privacy-policy.php" style="text-decoration: underline;color:#5a17ff" >privacy policy </a> 
                      </label>
              
                
                  </div>
                    <div class="massage-sent-button mt-3">
                      <button type="submit">Subnmit</button>
                    </div>
                  </div>
                </div>
              </form>
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