<?php
  $title = "Home";
  require_once "inc/header.php";
?>

    <div class="bodybefore p-3">
          &nbsp;
    </div>

        <!-- Contact -->
        <section class="p-5">
          <div class="container">
            <h2 class="text-center">
              Contact Us
            </h2>
            <p class="lead text-center">
              We'ld love to hear from you
            </p>
            <p class="text-center">
              Kindly fill the contact form below to send us a message or reach out to us via email or telephone
            </p>
          </div>
        </section>

    <!-- Contact & Map -->
    <section class="p-5">
      <div class="container">
        <div class="row g-4">
          <div class="col-md">
            <h2 class="text-center mb-4">Contact Info</h2>
            <ul class="list-group list-group-flush lead">
              <li class="list-group-item">
                <span class="fw-bold">Main Location:</span> 50 Main st Boston MA
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Enrollment Phone:</span> (555) 555-5555
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Student Phone:</span> (333) 333-3333
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Enrollment Email:</span> (555)
                enroll@frontendbc.test
              </li>
              <li class="list-group-item">
                <span class="fw-bold">Student Email:</span>
                student@frontendbc.test
              </li>
            </ul>
          </div>
          <div class="col-md">
            <div id="map"></div>
          </div>
        </div>
      </div>
    </section>

<?php 
    require_once "inc/footer.php";
?>