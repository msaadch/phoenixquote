<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <title>ThePhoenixQuotes</title>
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
      integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
      crossorigin="anonymous"
    /> -->
    <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    />
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />

    <link href="assets/css/plugins.css" rel="stylesheet" />
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />

    <link href="assets/css/yearpicker.css" rel="stylesheet" />
    <link
      rel="stylesheet"
      href="https://pro.fontawesome.com/releases/v5.10.0/css/all.css"
      integrity="sha384-AYmEC3Yw5cVb3ZcuHtOA93w35dYTsvhLPVnYs9eStHfGJvOvKxVfELGroGkvsg+p"
      crossorigin="anonymous"
    />

    <!-- slider -->

    <!-- slider -->
  </head>
  <body>
    <div class="body-inner">
      <header id="header" class="light" data-transparent="true">
        <div class="header-inner">
          <div class="container">
            <div id="logo">
              <a href="index.php">
                <span class="logo-default"
                  ><img src="assets/img/logo.png" alt="" srcset=""
                /></span>
                <span class="logo-dark"
                  ><img src="assets/img/logo.png" alt="" srcset=""
                /></span>
              </a>
            </div>

            <!-- <div id="search">
              <a
                id="btn-search-close"
                class="btn-search-close"
                aria-label="Close search form"
                ><i class="icon-x"></i
              ></a>
              <form class="search-form" action="" method="get">
                <input
                  type="hidden"
                  name="csrfmiddlewaretoken"
                  value="7RregcsadywtuU34L7vGtjwqqb08qF1qd716hPbK8dGcKmVv3eq7WLTVossXQZXP"
                />
                <input
                  class="form-control"
                  name="q"
                  type="text"
                  placeholder="Type & Search..."
                />
                <span class="text-muted"
                  >Start typing & press "Enter" or "ESC" to close</span
                >
              </form>
            </div> -->

            <div id="mainMenu-trigger">
              <a class="lines-button x"><span class="lines"></span></a>
            </div>

            <div id="mainMenu">
              <div class="container">
                <nav>
                  <ul>
                    <li>
                      <a :active class="" href="index.php">HOME</a>
                    </li>
                    <li>
                      <a class="dropdown">SERVICES</a>
                      <ul class="dropdown-menu">
                        <!--<li><a href="#">AUTO</a></li>-->
                        <!--<li><a href="#">HEALTH</a></li>-->
                        <!--<li>-->
                        <!--  <a href="#">FINAL EXPENSE</a>-->
                        <!--</li>-->

                        <!--<li>-->
                        <!--  <a href="#">HOME INSURANCE</a>-->
                        <!--</li>-->
                        <li><a href="auto.php">AUTO INSURANCE</a></li>
                        <!--<li>-->
                        <!--  <a href="#">HOME IMPROVEMENT</a>-->
                        <!--</li>-->
                      </ul>
                    </li>

                    <!-- <li>
                      <a href="#">GET QUOTES</a>
                    </li> -->
                    <!-- <li>
                      <a href="#">ABOUT US</a>
                    </li> -->
                    <li>
                      <a href="terms.html">TERMS</a>
                    </li>
                    <li>
                      <a href="privacy.html">PRIVACY</a>
                    </li>
                    <li>
                      <a href="#">CONTACT US</a>
                    </li>
                    <li class="disp">
                      <a href="#">Terms</a>
                    </li>
                    <li class="disp">
                      <a href="#">Privacy</a>
                    </li>
                    <li class="disp">
                      <a href="#">Partners</a>
                    </li>
                  </ul>
                </nav>
              </div>
            </div>
          </div>
        </div>
      </header>

      <!-- slider -->
      <div
        id="slider"
        class="inspiro-slider slider-fullscreen dots-creative"
        data-height-xs="360"
      >
        <div
          class="slide kenburns"
          style="background-image: url('assets/img/cover1.jpg')"
        >
          <!-- <div class="bg-overlay"></div> -->
          <div class="container">
            <div class="slide-captions text-center text-light">
              <h2 class="text-dark">Choose us, Save Money</h2>
              <a class="btn" href="#">Services</a>
              <a href="#" class="btn btn-light">Contact us</a>
            </div>
          </div>
        </div>

        <div
          class="slide kenburns"
          style="background-image: url('assets/img/cover2.jpg')"
        >
          <div class="container">
            <div class="slide-captions text-center text-light">
              <h2 class="text-dark">Where You Matters</h2>
              <a class="btn" href="#">Services</a>
              <a href="#" class="btn btn-light">Contact us</a>
            </div>
          </div>
        </div>
      </div>
      <!-- slider -->
      <!--<div class="container text-center">-->
      <!--  <div class="formz icon-box effect medium border shadow-lg p-3 mb-5">-->
      <!--    <form action="" id="quoteForm" method="post">-->
      <!-- <input -->
      <!--        type="hidden"-->
      <!--        name="csrfmiddlewaretoken"-->
      <!--        value="7RregcsadywtuU34L7vGtjwqqb08qF1qd716hPbK8dGcKmVv3eq7WLTVossXQZXP"-->
      <!--      /> -->
      <!--      <div class="form-row d-flex flex-wrap justify-content-center">-->
      <!-- <label for="address2">Select Currently Insured Company</label> -->
      <!--        <div class="form-group col-md-4">-->
      <!--          <select name="getQuote" id="getQuote" class="form-control">-->
      <!--            <option value="auto">Auto</option>-->
      <!--            <option value="final expense">Final Expense</option>-->
      <!--            <option value="health">Health</option>-->
      <!--            <option value="home">Home</option>-->
      <!--            <option value="medicare">Medicare</option>-->
      <!--            <option value="homeI">Home Improvement</option>-->
      <!--          </select>-->
      <!--        </div>-->
      <!--        <div class="form-group col-md-3 inpz">-->
      <!--          <input type="text" name="zip" id="zip" placeholder="Zip Code" />-->
      <!--        </div>-->

      <!--        <div class="formBtn">-->
      <!--          <button class="btn btn-outline btn-dark" type="submit">-->
      <!--            Get Quote-->
      <!--          </button>-->
      <!--        </div>-->
      <!--      </div>-->
      <!--    </form>-->
      <!--  </div>-->
      <!--</div>-->
      <!-- section services -->
      <section
        class="background-image"
        style="background-image: url(assets/img/banner.jpg)"
      >
        <div class="container">
          <div
            class="
              heading-text heading-section
              d-flex
              flex-wrap
              justify-content-around
            "
          >
            <h2 style="color: #fff">OUR SERVICE</h2>
          </div>
          <div class="row spacez">
            <!--<div class="col-lg-4">-->
            <!--  <div-->
            <!--    class="-->
            <!--      icon-box-->
            <!--      effect-->
            <!--      medium-->
            <!--      border-->
            <!--      shadow-lg-->
            <!--      p-3-->
            <!--      mb-5-->
            <!--      rounded-->
            <!--      text-center-->
            <!--      cardIcon-->
            <!--    "-->
            <!--  >-->
            <!--    <a href="#">-->
            <!--      <img src="assets/img/auto.png" alt="" srcset="" />-->
            <!--    </a>-->

            <!--    <div class="txt">-->
            <!--      <a href="#">Auto Insurance</a>-->
            <!--    </div>-->
            <!--    <a-->
            <!--      class="btn fadeInUp"-->
            <!--      href="#"-->
            <!--      style="opacity: 1; animation-duration: 600ms"-->
            <!--      >GET QUOTE</a-->
            <!--    >-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="col-lg-4">-->
            <!--  <div-->
            <!--    class="-->
            <!--      icon-box-->
            <!--      effect-->
            <!--      medium-->
            <!--      border-->
            <!--      shadow-lg-->
            <!--      p-3-->
            <!--      mb-5-->
            <!--      rounded-->
            <!--      text-center-->
            <!--      cardIcon-->
            <!--    "-->
            <!--  >-->
            <!--    <a href="#">-->
            <!--      <img src="assets/img/final_expense.png" alt="" srcset="" />-->
            <!--    </a>-->

            <!--    <div class="txt">-->
            <!--      <a href="#">Final Expense</a>-->
            <!--    </div>-->
            <!--    <a-->
            <!--      class="btn fadeInUp"-->
            <!--      href="#"-->
            <!--      style="opacity: 1; animation-duration: 600ms"-->
            <!--      >GET QUOTE</a-->
            <!--    >-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="col-lg-4">-->
            <!--  <div-->
            <!--    class="-->
            <!--      icon-box-->
            <!--      effect-->
            <!--      medium-->
            <!--      border-->
            <!--      shadow-lg-->
            <!--      p-3-->
            <!--      mb-5-->
            <!--      rounded-->
            <!--      text-center-->
            <!--      cardIcon-->
            <!--    "-->
            <!--  >-->
            <!--    <a href="#"-->
            <!--      ><img src="assets/img/health.png" alt="" srcset="" />-->
            <!--    </a>-->

            <!--    <div class="txt">-->
            <!--      <a href="#">Health Insurance</a>-->
            <!--    </div>-->
            <!--    <a-->
            <!--      class="btn fadeInUp"-->
            <!--      href="#"-->
            <!--      style="opacity: 1; animation-duration: 600ms"-->
            <!--      >GET QUOTE</a-->
            <!--    >-->
            <!--  </div>-->
            <!--</div>-->
            <!--<div class="col-lg-4">-->
            <!--  <div-->
            <!--    class="-->
            <!--      icon-box-->
            <!--      effect-->
            <!--      medium-->
            <!--      border-->
            <!--      shadow-lg-->
            <!--      p-3-->
            <!--      mb-5-->
            <!--      rounded-->
            <!--      text-center-->
            <!--      cardIcon-->
            <!--    "-->
            <!--  >-->
            <!--    <a href="#">-->
            <!--      <img src="assets/img/home_insurance.png" alt="" srcset="" />-->
            <!--    </a>-->

            <!--    <div class="txt">-->
            <!--      <a href="#">Home Insurance</a>-->
            <!--    </div>-->
            <!--    <a-->
            <!--      class="btn fadeInUp"-->
            <!--      href="#"-->
            <!--      style="opacity: 1; animation-duration: 600ms"-->
            <!--      >GET QUOTE</a-->
            <!--    >-->
            <!--  </div>-->
            <!--</div>-->
            <div class="col-lg-4">
              <div
                style="background: #fff"
                class="
                  icon-box
                  effect
                  medium
                  border
                  shadow-lg
                  p-3
                  mb-5
                  rounded
                  text-center
                  cardIcon
                "
              >
                <a href="auto.php">
                  <img src="assets/img/auto.png" alt="" srcset="" />
                </a>

                <div class="txt">
                  <a href="auto.php">Auto Insurance</a>
                </div>
                <a
                  class="btn fadeInUp"
                  href="auto.php"
                  style="opacity: 1; animation-duration: 600ms"
                  >GET QUOTE</a
                >
              </div>
            </div>
            <!--<div class="col-lg-4">-->
            <!--  <div-->
            <!--    class="-->
            <!--      icon-box-->
            <!--      effect-->
            <!--      medium-->
            <!--      border-->
            <!--      shadow-lg-->
            <!--      p-3-->
            <!--      mb-5-->
            <!--      rounded-->
            <!--      text-center-->
            <!--      cardIcon-->
            <!--    "-->
            <!--  >-->
            <!--    <a href="#">-->
            <!--      <img src="assets/img/home_improvement.png" alt="" srcset=""-->
            <!--    /></a>-->

            <!--    <div class="txt">-->
            <!--      <a href="#">Home Improvement</a>-->
            <!--    </div>-->
            <!--    <a-->
            <!--      class="btn fadeInUp"-->
            <!--      href="#"-->
            <!--      style="opacity: 1; animation-duration: 600ms"-->
            <!--      >GET QUOTE</a-->
            <!--    >-->
            <!--  </div>-->
            <!--</div>-->
          </div>
        </div>
      </section>
      <!-- section services -->

      <!-- slider particle white -->

      <!-- section Contact -->
      <!-- 
      <section class="background-dark">
        <div class="container">
          <div class="row align-items-center">
            <div class="col-lg-7">
              <img alt="" src="/static/pyapp/images/sectionimg.png" />
            </div>
            <div class="col-lg-5">
              <div
                class="heading-text heading-section text-right text-light mt-5"
              >
                <h1>Dark Section</h1>
                <p>
                  Nulla varius consequat magna, id molestie ipsum volutpat quis.
                  A true story, that never been told!. Fusce id mi diam, non
                  ornare orci. Pellentesque ipsum erat, facilisis ut venenatis
                  eu, sodales vel dolor.
                </p>
                <a class="btn" href="#"
                  ><i class="fa fa-tint"></i> Learn more</a
                >
              </div>
            </div>
          </div>
        </div>
        <div class="shape-divider" data-style="13" data-height="220"></div>
      </section> -->
      <!-- section Contact -->
      <!-- section about -->

      <section
        class="background-image"
        style="background-image: url(assets/img/sec1.jpg)"
      >
        <div class="container">
          <div class="row">
            <div class="col-lg-7" data-animate="fadeIn">
              <h2 class="text-medium txtWh">About Us</h2>
              <p class="txtWidth">
              At the Pheonix Quote, we Assure you that quality does not fall sideways when it comes to providing customers with affordable auto insurance and great customer services. We take on the risk and provide the coverage you need to protect the things that are important to you, your car, your valuables, and your business so you don't have to worry.
              </p>
              <a
                href="#"
                class="btn btn-outline btn-dark"
                style="margin-bottom: 75px"
              >
                <span>More About US</span>
              </a>
            </div>
          </div>
        </div>
        <div class="shape-divider" data-style="13" data-height="220"></div>
      </section>
      <!-- section about -->

      <!-- our clients section -->

      <section class="container">
        <div class="heading-text heading-section">
          <h2>OUR PARTNERS</h2>
        </div>
        <div
          class="carousel client-logos dots-grey"
          data-items="5"
          data-arrows="false"
        >
          <div>
            <img alt="" src="assets/img/1.png" />
          </div>
          <div>
            <img alt="" src="assets/img/2.png" />
          </div>
          <div>
            <img alt="" src="assets/img/3.png" />
          </div>
          <div>
            <img alt="" src="assets/img/4.png" />
          </div>
          <div>
            <img alt="" src="assets/img/5.png" />
          </div>
          <div>
            <img alt="" src="assets/img/7.png" />
          </div>
          <div>
            <img alt="" src="assets/img/8.png" />
          </div>
          <div>
            <img alt="" src="assets/img/9.png" />
          </div>
          <div>
            <img alt="" src="assets/img/10.png" />
          </div>
          <div>
            <img alt="" src="assets/img/11.png" />
          </div>
          <div>
            <img alt="" src="assets/img/12.png" />
          </div>
          <div>
            <img alt="" src="assets/img/13.png" />
          </div>
          <div>
            <img alt="" src="assets/img/14.png" />
          </div>
          <div>
            <img alt="" src="assets/img/16.png" />
          </div>
          <div>
            <img alt="" src="assets/img/17.png" />
          </div>
          <div>
            <img alt="" src="assets/img/18.png" />
          </div>
          <div>
            <img alt="" src="assets/img/19.png" />
          </div>
          <div>
            <img alt="" src="assets/img/20.png" />
          </div>
        </div>
      </section>

      <!-- our clients section -->

      <!-- blogs sections -->
      <section class="container">
        <div class="heading-text heading-section">
          <h2>Testimonials</h2>
        </div>
        <div class="carousel" data-items="3" style="height: 538.297px">
          <div class="post-item border">
            <div class="post-item-wrap">
              <div class="post-image">
                <a href="#">
                  <img
                    class="img-fluid d-flex mx-auto"
                    src="assets/img/test1.jpg"
                /></a>
              </div>
              <div class="post-item-description">
                <h2>John Carry</h2>
                <p>
                  I’ve been a client at Hartland Insurance for many years. I appreciate the courtesy from the staff and Auto Owners’ philosophy of “The Phoenix Quotes”. I’ve been a client with Auto Owners Insurance for more than 40 years. Thank you for a job well done.”
                </p>
              </div>
            </div>
          </div>
          <div class="post-item border">
            <div class="post-item-wrap">
              <div class="post-image">
                <a href="#">
                  <img
                    class="img-fluid d-flex mx-auto"
                    src="assets/img/test2.jpg"
                /></a>
              </div>
              <div class="post-item-description">
                <h2>Katherine William</h2>
                <p>
                  I have used The Phoenix Quotes for more than 2 years. It is nice to work with local people who are familiar with you and your individual situation. They are helpful and friendly and I have always felt that I am in good hands.
                </p>
              </div>
            </div>
          </div>
          <div class="post-item border">
            <div class="post-item-wrap">
              <div class="post-image">
                <a href="#">
                  <img
                    class="img-fluid d-flex mx-auto"
                    src="assets/img/test3.jpg"
                /></a>
              </div>
              <div class="post-item-description">
                <h2>Micheal Smith</h2>
                <p>
                  I really appreciate the Phoenix Quotes diligent work every year to get us properly insured, it allows me to sleep well knowing we are well protected.
                </p>
              </div>
            </div>
          </div>
        </div>
      </section>

      <footer id="footer">
        <div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="widget">
                  <div class="widget-title">ThePhoenixQuotes</div>
                  <p class="">
                  These five values Rule the way we do business and how we treat our colleagues and customers.</p>
                  <p class="mb-4">Righteousness, Customer Orientation, Aim, Brilliance, Gain</p>
                  <a href="#" class="btn btn-inverted btnGrey" target="_blank"
                    >Contact Us</a
                  >
                </div>
                
              </div>
              <div class="col-lg-7">
                <div class="row">
                  <div class="col-lg-4">
                    <div class="widget">
                      <div class="widget-title">Services</div>
                      <ul class="list">
                        <!--<li><a href="#">Auto</a></li>-->
                        <!--<li><a href="#">Health</a></li>-->
                        <!--<li>-->
                        <!--  <a href="#">Final Expense</a>-->
                        <!--</li>-->
                        <!--<li>-->
                        <!--  <a href="#">Home Insurance</a>-->
                        <!--</li>-->
                        <li><a href="auto.php">Auto</a></li>
                        <!--<li>-->
                        <!--  <a href="#">Home Improvement</a>-->
                        <!--</li>-->
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="widget">
                      <div class="widget-title">Policies</div>
                      <ul class="list">
                        <li><a href="terms.html">Terms</a></li>
                        <li><a href="privacy.html">Privacy</a></li>
                        <!-- <li><a href="#">Partners</a></li> -->
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="widget">
                      <div class="widget-title">Pages</div>
                      <ul class="list">
                        <!-- <li><a href="#">Blogs</a></li> -->
                        <!-- <li><a href="#">About us</a></li> -->
                        <li><a href="#">Contact us</a></li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <div class="copyright-content">
          <div class="container">
            <div class="copyright-text text-center txtA">
              <p style="color: #fff">
                © Copyright 2021 MedicareSolutionsJoy | All Rights Reserved.
              </p>
            </div>
          </div>
        </div>
      </footer>
    </div>

    <a id="scrollTop">
      <i class="fa">&#xf106;</i>
      <!-- <i class="icon-chevron-up"></i><i class="icon-chevron-up"></i> -->
    </a>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.2/jquery.min.js"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.2/js/bootstrap.min.js"></script>
    <script src="assets/js/bootstrap-select.min.js"></script>

    <script src="assets/js/jquery.js"></script>
    <script src="assets/js/plugins.js"></script>

    <script src="assets/js/functions.js"></script>

    <!-- <script>
      $(document).ready(function () {
        $(".mdb-select").materialSelect();
      });
    </script> -->

    <link href="assets/css/jquery.steps.css" rel="stylesheet" />
    <script src="assets/js/jquery.steps.min.js"></script>
    <!-- <script src="https://maps.googleapis.com/maps/api/js?key=YOUR_KEY&callback=myMap"></script> -->

    <script src="assets/js/yearpicker.js"></script>
    <script src="assets/js/validate.min.js"></script>

    <script src="assets/js/custom.js"></script>

    <script>
      $(".yearpicker").yearpicker();
    </script>
  </body>
</html>
