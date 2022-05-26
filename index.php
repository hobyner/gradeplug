<?php
  $title = "Home";
  require_once "inc/header.php";
?>

        <div class="bodybefore">
          &nbsp;
        </div>

        <!-- Showcase -->
        <section class="showcase bg-dark text-light p-1 text-center text-sm-start">
        <div class="container d-flex justify-content-center">
          <div class="headline w-100 d-flex text-center justify-content-center">
            <div class="illustration1">
            <img
              class="headline-img image-fluid"
              src="img/edu_ilastration.png"
              alt="headline image"
            />
            </div>
            <div  class="headline-text">
              <h1  id="headline-title">Top Grade <span class="text-warning"> Assignment Writing Service</span></h1>
              <p class="support-text lead my-2">
                Our website serves as a global online platform for custom assignment writing.
              </p>
              <button
                class="btn btn-primary my-2 btn-lg"
                data-bs-toggle="modal"
                data-bs-target="#enroll"
              >
                Get an Instant Quote
              </button>
            </div>
          </div>
        </div>
      </section>

        <!-- Newsletter -->
        <section class="bg-primary text-light p-5">
            <div class="container">
                <div class="d-md-flex justify-content-between align-items-center">
                    <h4 class="mb-3 mb-md-0">Get the job<span class="text-warning"> done</span></h4>

                    <div class="input-group news-input">
                        <input type="text" class="form-control" placeholder="Keywords">
                        <button  class="btn btn-dark btn-lg" type="button">
                            Search
                        </button>
                      </div>
                </div>
            </div>
        </section>

        <!-- Learn Sections-->
        <section id="learn" class="p-2">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md">
                        <img src="img/studying.png" class="img-fluid" alt="">
                    </div>
                    <div class="col-md p-5">
                        <h2>We write any type of assignment in any discipline</h2>
                        <p class="lead">
                            A global online platform for custom assignment writing.
                        </p>
                        <p>
                            Our website is especially popular among students with “do my assignment online” and “write my assignment for me” requests who are ready to pay in order to get the online homework help they need. With us, you’ve found a website that you can entrust your “Please, help with my assignment” requests to. And we’ll do our best to compose your assignments at the highest possible level.
                        </p>
                        <a href="#" class="btn btn-light mt-3">
                            <i class="bi bi-chevron-right"></i> Read More

                        </a>
                    </div>
                </div>
            </div>
        </section>

        <section id="learn" class="p-2 bg-dark text-light">
            <div class="container">
                <div class="row align-items-center justify-content-between">
                    <div class="col-md p-5">
                        <h2>The easiest way to get assignment help</h2>
                        <p class="lead">
                            Some academic assignments are easy to finish in several hours.
                        </p>
                        <p>
                            They may seem to be created specifically for you—you can just sit down and do them with interest and pleasure. There is, however, another kind of college task—the ones that loom over you, the ones you try desperately not to think about, to put off. These are the ones that you don’t want to do, are too bored to do, or are simply unable to do. You can grit your teeth and deal with them on your own, but the process will be long, tedious, and unpleasant. In addition, you may not achieve the desired result, that is, a mark that greatly contributes to your academic progress.                        </p>
                        <a href="#" class="btn btn-light mt-3">
                            <i class="bi bi-chevron-right"></i> Read More

                        </a>
                    </div>
                    <div class="col-md">
                        <img src="img/clipboard.png" class="img-fluid" alt="">
                    </div>
                </div>
            </div>
        </section>

        <!-- Questions Accordion -->
        <section id="accordion" class="p-2">
          <div class="container">
            <h2 class="text-center mb-4">Frequently Asked Questions</h2>
            <div class="accordion accordion-flush" id="questions">
              <!-- Item 1 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-one">
                    How does GradePlug service work?
                  </button>
                </h2>
                <div id="question-one" class="accordion-collapse collapse" data-bs-parent="#questions">
                  <div class="accordion-body">To learn about how our service works, please visit How It Works page where you can read a detailed explanation of our features, along with a step-by-step guide.</div>
                </div>
              </div>
              <!-- Item 2 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-two">
                    How do I place an order
                  </button>
                </h2>
                <div id="question-two" class="accordion-collapse collapse" data-bs-parent="#questions">
                  <div class="accordion-body">To place an order, simply navigate over to the Order page and fill in the required information concerning your particular order. Alternatively, you can place your order over the phone or by using either the Live Chat or Email feature at the top of the website or Contacts section.</div>
                </div>
              </div>
              <!-- Item 3 -->
              <div class="accordion-item">
                <h2 class="accordion-header" id="flush-headingOne">
                  <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#question-three">
                    How does GradePlug service work?
                  </button>
                </h2>
                <div id="question-three" class="accordion-collapse collapse" data-bs-parent="#questions">
                  <div class="accordion-body">To learn about how our service works, please visit How It Works page where you can read a detailed explanation of our features, along with a step-by-step guide.</div>
                </div>
              </div>
              <!--items end-->              
            </div>
          </div>
        </section>

    <!-- Modal -->
    <div
      class="modal fade"
      id="enroll"
      tabindex="-1"
      aria-labelledby="enrollLabel"
      aria-hidden="true"
    >
      <div class="modal-dialog">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="enrollLabel">Submit Instructions</h5>
            <button
              type="button"
              class="btn-close"
              data-bs-dismiss="modal"
              aria-label="Close"
            ></button>
          </div>
          <div class="modal-body">
            <p class="lead">Fill out this form and we will get back to you</p>
            <form>
              <div class="mb-3">
                <label for="first-name" class="col-form-label">
                  Subject
                </label>
                <input type="text" class="form-control" id="first-name" />
              </div>
              <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">
                    Topic, formatting style, references, structure, your ideas, etc.
                </label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
              </div>
              <div class="mb-3">
                <label for="formFileMultiple" class="form-label">
                    Select Files
                </label>
                <input class="form-control" type="file" id="formFileMultiple" multiple>
              </div>
              <label for="customRange2" class="form-label">Pages</label>
              <input type="range" class="form-range" min="0" max="5" id="customRange2">
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label" for="flexRadioDefault1">
                  All Levels
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Gold
                </label>
              </div>
              <div class="form-check">
                <input class="form-check-input" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
                <label class="form-check-label" for="flexRadioDefault2">
                  Platinum
                </label>
              </div>
            </form>
          </div>
          <div class="modal-footer">
            <button
              type="button"
              class="btn btn-secondary"
              data-bs-dismiss="modal"
            >
              Close
            </button>
            <button type="button" class="btn btn-primary">Continue</button>
          </div>
        </div>
      </div>
    </div>

<?php 
    require_once "inc/footer.php";
?>