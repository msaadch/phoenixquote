<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <meta http-equiv="X-UA-Compatible" content="IE=edge" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link rel="icon" type="image/png" href="assets/img/favicon.png" />
    <title>MedicareSolutionsJoy</title>
    <!-- <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/3.4.1/css/bootstrap.min.css"
      integrity="sha384-HSMxcRTRxnN+Bdg0JdbxYKrThecOKuH5zCYotlSAcp1+c8xmyTe9GYg1l9a69psu"
      crossorigin="anonymous"
    /> -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    /> -->
    <link rel="stylesheet" href="assets/css/bootstrap-select.min.css" />

    <link href="assets/css/plugins.css" rel="stylesheet" /> -->
    <link href="assets/css/style.css" rel="stylesheet" />
    <link href="assets/css/custom.css" rel="stylesheet" />
    <link rel="stylesheet" type="text/css" href="multi-form.css" />

    <!-- <link href="assets/css/yearpicker.css" rel="stylesheet" /> -->
    <!-- <link
      href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css"
      rel="stylesheet"
      integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3"
      crossorigin="anonymous"
    /> -->
    <!-- <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/css/bootstrap.min.css"> -->
    <!-- <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script> -->
    
    <style type="text/css">
	.bgBorder-1 {
    border: 1px solid #e6e8eb !important;
    padding: 2px 4px;
	}
  </style>

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
                      <a href="#" class="dropdown">SERVICES</a>
                      <ul class="dropdown-menu">
                        <!--<li><a href="#">AUTO</a></li>-->
                        <!--<li><a href="#">HEALTH</a></li>-->
                        <!--<li>-->
                        <!--  <a href="#">FINAL EXPENSE</a>-->
                        <!--</li>-->

                        <!--<li>-->
                        <!--  <a href="#">HOME INSURANCE</a>-->
                        <!--</li>-->
                        <li><a href="medicare.php">MEDICARE</a></li>
                        <!--<li>-->
                        <!--  <a href="#">HOME IMPROVEMENT</a>-->
                        <!--</li>-->
                      </ul>
                    </li>

                    <!-- <li>
                      <a href="#">GET QUOTES</a>
                    </li> -->
                    <li>
                      <a href="#">ABOUT US</a>
                    </li>
                    <li>
                      <a href="#">TERMS</a>
                    </li>
                    <li>
                      <a href="#">PRIVACY</a>
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

      <section id="page-title" style="background-image: url(assets/img/Covermedicare.jpg);">
        <div class="container">
          <div class="page-title">
            <h1 class="text-uppercase text-medium">MEDICARE</h1>
            <span
              >securing the customer's interest and providing them with
              felicitous insurance deal.</span
            >
          </div>
        </div>
      </section>

<!-- wizard form -->

<div class="container">
    <h1></h1>
	<!-- <div class="progress">
		<div class="progress-bar progress-bar-striped active" role="progressbar" aria-valuemin="40" aria-valuemax="100"></div>
	</div> -->
	
	<form id="regiration_form" action="action.php" method="POST">
      <!-- <h1>Your Personal</h1> -->
      <!-- One "tab" for each step in the form: -->
      <div class="tab">
        <h3>Please fill Your Personal Information</h3>
        <div class="form-row d-flex">
          <div class="form-group col-md-6">
            <label for="username">First Name</label>
            <input
              type="text"
              id="fname"
              class="form-control"
              name="fname"
              required
            />
          </div>
          <div class="form-group col-md-6">
            <label for="username">Last Name</label>
            <input
              type="text"
              id="lname"
              class="form-control"
              name="lname"
              required
            />
          </div>
        </div>
        <div class="form-row d-flex">
          <div class="form-group col-md-6">
            <label for="email">Email</label>
            <input
              type="email"
              id="email"
              class="form-control"
              name="email"
              required
            />
          </div>
          <div class="form-group col-md-6">
            <label for="gender">Date of Birth</label>
            <input
              class="form-control"
              id="dob"
              type="date"
              value=""
              name="dateofbirth"
              required
            />
          </div>
        </div>
        <div class="form-row d-flex">
          <div class="form-group col-md-4">
            <label for="telephone">Phone</label>
            <input
              class="form-control"
              id="phone"
              type="tel"
              name="phone"
              required
            />
          </div>
          <div class="form-group col-md-4">
            <label for="address">Address</label>
            <input
              type="text"
              id="address"
              class="form-control"
              name="address"
              required
            />
          </div>

          <div class="form-group col-md-4">
            <label>Zip Code:</label>
            <input
              type="number"
              id="zip"
              class="form-control zipcode"
              name="zip"
              required
            />
          </div>
        </div>
      </div>

      <div class="tab">
        <div class="h5 mb-4">Please fill Your Health Insurance Information</div>
        <div class="form-row d-flex">
          <div class="form-group col-md-4">
            <div class="">
              <label for="gender">Height</label>
              <select id="height" name="height" class="form-control" required>
                <option></option>
                <option value="4ftt-5inchestt">4ftt-5inchestt</option>
                <option value="4ft-6inches">4ft-6inches</option>
                <option value="4ft-7inchestt">4ft-7inchestt</option>
                <option value="4tftt8tinchestt">4tftt8tinchestt</option>
                <option value="4tftt9tinchestt">4tftt9tinchestt</option>
                <option value="4tftt10tinchestt">4tftt10tinchestt</option>
                <option value="4tftt11tinchestt">4tftt11tinchestt</option>
                <option value="5tftt0tinchestt">5tftt0tinchestt</option>
                <option value="5tftt1tinchestt">5tftt1tinchestt</option>
                <option value="5tftt2tinchestt">5tftt2tinchestt</option>
                <option value="5tftt3tinchestt">5tftt3tinchestt</option>
                <option value="5tftt4tinchestt">5tftt4tinchestt</option>
                <option value="5tftt5tinchestt">5tftt5tinchestt</option>
                <option value="5tftt6tinchestt">5tftt6tinchestt</option>
                <option value="5tftt7tinchestt">5tftt7tinchestt</option>
                <option value="5tftt8tinchestt">5tftt8tinchestt</option>
                <option value="5tftt9tinchestt">5tftt9tinchestt</option>
                <option value="5tftt10tinchestt">5tftt10tinchestt</option>
                <option value="5tftt11tinchestt">5tftt11tinchestt</option>
                <option value="6tftt0tinchestt">6tftt0tinchestt</option>
                <option value="6tftt1tinchestt">6tftt1tinchestt</option>
                <option value="6tftt2tinchestt">6tftt2tinchestt</option>
                <option value="6tftt3tinchestt">6tftt3tinchestt</option>
                <option value="6tftt4tinchestt">6tftt4tinchestt</option>
                <option value="6tftt5tinchestt">6tftt5tinchestt</option>
                <option value="6tftt6tinchestt">6tftt6tinchestt</option>
                <option value="6tftt7tinchestt">6tftt7tinchestt</option>
                <option value="6tftt8tinchestt">6tftt8tinchestt</option>
                <option value="6tftt9tinchestt">6tftt9tinchestt</option>
                <option value="6tftt10tinchestt">6tftt10tinchestt</option>
                <option value="6tftt11tinchestt">6tftt11tinchestt</option>
                <option value="7tftt0tinchestt">7tftt0tinchestt</option>
                <option value="7tftt1tinchestt">7tftt1tinchestt</option>
                <option value="7tftt2tinchestt">7tftt2tinchestt</option>
                <option value="7tftt3tinchestt">7tftt3tinchestt</option>
                <option value="7tftt4tinchestt">7tftt4tinchestt</option>
                <option value="7tftt5tinchestt">7tftt5tinchestt</option>
                <option value="7tftt6tinchestt">7tftt6tinchestt</option>
                <option value="7tftt7tinchestt">7tftt7tinchestt</option>
                <option value="7tftt8tinchestt">7tftt8tinchestt</option>
                <option value="7tftt9tinchestt">7tftt9tinchestt</option>
                <option value="7tftt10tinchestt">7tftt10tinchestt</option>
                <option value="7tftt11tinchestt">7tftt11tinchestt</option>
                <option value="8tftt0tinchestt">8tftt0tinchestt</option>
              </select>
            </div>
          </div>

          <div class="form-group col-md-4">
            <label for="address2">Weight (lbs)</label>
            <select id="weight" name="weight" class="form-control" required>
              <option></option>
              <option value="100">100</option>
              <option value="105">105</option>
              <option value="110">110</option>
              <option value="115">115</option>
              <option value="120">120</option>
              <option value="125">125</option>
              <option value="130">130</option>
              <option value="135">135</option>
              <option value="140">140</option>
              <option value="145">145</option>
              <option value="150">150</option>
              <option value="155">155</option>
              <option value="160">160</option>
              <option value="165">165</option>
              <option value="170">170</option>
              <option value="175">175</option>
              <option value="180">180</option>
              <option value="185">185</option>
              <option value="190">190</option>
              <option value="195">195</option>
              <option value="200">200</option>
              <option value="205">205</option>
              <option value="210">210</option>
              <option value="215">215</option>
              <option value="220">220</option>
              <option value="225">225</option>
              <option value="230">230</option>
              <option value="235">235</option>
              <option value="240">240</option>
              <option value="245">245</option>
              <option value="250">250</option>
              <option value="250+">Above 250</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="income">Annual Household Income</label>
            <select name="income" id="income" class="form-control" required>
              <option></option>
              <option value="Below $30K">Below $30K</option>
              <option value="$30-$45K">$30K-$45K</option>
              <option value="$45-$59.99K">$45K-$59.99K</option>
              <option value="$60-$74.99K">$60K-$74.99K</option>
              <option value="Above $75K">Above $75K</option>
            </select>
          </div>
        </div>

        <div class="form-row d-flex">
          <div class="form-group col-md-4">
            <label for="insured">Currently Insured?</label>
            <select name="insured" id="insured" class="form-control" required>
              <option></option>
              <option value="Currently Not Insured">
                Currently Not Insured
              </option>
              <option value="Cigna">Cigna</option>
              <option value="Blue Cross Blue Shield">
                Blue Cross Blue Shield
              </option>
              <option value="Assurant">Assurant</option>
              <option value="Ameriprise">Ameriprise</option>
              <option value="American Repuplic">American Repuplic</option>
              <option value="American Family">American Family</option>
              <option value="Aflac">Aflac</option>
              <option value="Aetna">Aetna</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <label for="gender">Gender</label>
            <select name="gender" id="gender" class="form-control" required>
              <option></option>
              <option value="Male">Male</option>
              <option value="Female">Female</option>
            </select>
          </div>
          <div class="form-group col-md-4">
            <div class="bgBorder">
              <label for="city">Do you Smoke?</label>
              <div class="form-check">
                <fieldset id="smoke">
                  <input type="radio" value="yes" name="smoke" />
                  <label class="form-check-label" for="smoke"> YES </label>
                  <input type="radio" value="no" name="smoke" />
                  <label class="form-check-label" for="smoke"> NO </label>
                </fieldset>
              </div>
            </div>
          </div>
        </div>

        <div class="form-row d-flex">
          <div class="form-group col-md-4">
            <div class="bgBorder">
              <label for="city">Have You been Denied Coverage?</label>
              <div class="form-check">
                <fieldset id="coverage">
                  <input type="radio" value="yes" name="coverage" />
                  <label class="form-check-label" for="coverage"> YES </label>
                  <input type="radio" value="no" name="coverage" />
                  <label class="form-check-label" for="coverage"> NO </label>
                </fieldset>
              </div>
            </div>
          </div>

          <div class="form-group col-md-4">
            <div class="bgBorder">
              <label for="city">Hospitalization?</label>
              <div class="form-check">
                <fieldset id="hospital">
                  <input type="radio" value="yes" name="hospital" />
                  <label class="form-check-label" for="hospital"> YES </label>
                  <input type="radio" value="no" name="hospital" />
                  <label class="form-check-label" for="hospital"> NO </label>
                </fieldset>
              </div>
            </div>
          </div>

          <div class="form-group col-md-4">
            <div class="bgBorder">
              <label for="city">Are You an Expecting Parent?</label>
              <div class="form-check">
                <fieldset id="expect">
                  <input type="radio" value="yes" name="expect" />
                  <label class="form-check-label" for="expect"> YES </label>
                  <input type="radio" value="no" name="expect" />
                  <label class="form-check-label" for="expect"> NO </label>
                </fieldset>
              </div>
            </div>
          </div>
        </div>
        
      </div>

      <div class="tab">
        <!-- <h3>Confirmation</h3> -->
        <div class="">
          <div class="h5 mb-4">Confimration</div>
          <p>
            By checking this box and submitting this form, I agree to the
            <a href="terms.html" target="_blank">Terms and Conditions</a> and
            <a href="privacy.html" target="_blank">Privacy Policy</a> and authorize
            insurance companies, their agents and marketing
            <a href="#" target="_blank"> partners</a> to contact me
            about Medicare insurance and other non-insurance offers by telephone
            calls and text messages to the number I provided above.
          </p>
          <p>
            I agree to receive telemarketing calls and pre-recorded messages via
            an auto dialed phone system, even if my telephone number is a mobile
            number that is currently listed on any state, federal or corporate
            Do Not Call list. I understand that my consent is not a condition of
            purchase of any goods or services and that I may revoke my consent
            at any time. I understand that standard message and data rates may
            apply.
          </p>
          <div class="form-group mb-1 mt-5">
            <div class="custom-control custom-checkbox">
              <input
                type="checkbox"
                name="reminders"
                id="reminders3"
                class="custom-control-input"
                required
              />
              <label
                class="custom-control-label"
                id="leadid_tcpa_disclosure"
                for="reminders3"
                >I AGREE</label
              >
            </div>
          </div>
        </div>
      </div>
      <div style="overflow: auto;">
        <div style="float: right; margin-top: 5px;">
          <button type="button" class="previous">Previous</button>
          <button type="button" class="next">Next</button>
          <button type="button" class="submit">Submit</button>
        </div>
      </div>
      <!-- Circles which indicates the steps of the form: -->
      <div style="text-align: center; margin-top: 40px; display: none;">
        <span class="step">1</span>
        <span class="step">2</span>
        <!-- <span class="step">3</span> -->
        <span class="step">3</span>
      </div>
    </form>
</div>

<!-- <noscript><img src='//create.leadid.com/noscript.gif?lac=234b1f51-6336-9a31-5e22-81ab624567d5&lck=67f0c081-7c92-72d6-7fb6-482017f7abe6&snippet_version=2' /></noscript> -->

<footer id="footer">
        <div class="footer-content">
          <div class="container">
            <div class="row">
              <div class="col-lg-5">
                <div class="widget">
                  <div class="widget-title">MedicareSolutionsJoy</div>
                  <p class="mb-5">
                    MedicareSolutionsJoy is an insurance broker company,
                    securing the customers’ interest and providing them with
                    felicitous insurance deal.
                  </p>
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
                        <li><a href="medicare.php">Medicare</a></li>
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
                        <li><a href="#">Partners</a></li>
                      </ul>
                    </div>
                  </div>
                  <div class="col-lg-4">
                    <div class="widget">
                      <div class="widget-title">Pages</div>
                      <ul class="list">
                        <!-- <li><a href="#">Blogs</a></li> -->
                        <li><a href="#">About us</a></li>
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
 
  </body>
</html>
<!-- <script src="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.5/js/bootstrap.min.js"></script> -->
<script src="https://code.jquery.com/jquery-3.4.1.js"></script>
<script src="https://cdn.jsdelivr.net/npm/jquery-validation@1.17.0/dist/jquery.validate.min.js"></script>
<script type="text/javascript" src="multi-form.js"></script>
<script type="text/javascript">
  $(document).ready(function () {
    $.validator.addMethod(
      "username",
      function (value, element, param) {
        var nameRegex = /^[a-zA-Z0-9]+$/;
        return value.match(nameRegex);
      },
      "Only a-z, A-Z, 0-9 characters are allowed"
    );

    var val = {
      // Specify validation rules
      rules: {
        fname: "required",
        lname: "required",
        email: {
          required: true,
          email: true,
        },
        phone: {
          required: true,
          minlength: 10,
          maxlength: 10,
          digits: true,
        },
        smoke: {
          required: true,
        },
        coverage: {
          required: true,
        },
        hospital: {
          required: true,
        },
        expect: {
          required: true,
        },
      },
      // Specify validation error messages
      messages: {
        fname: "First name is required",
        email: {
          required: "Email is required",
          email: "Please enter a valid e-mail",
        },
        phone: {
          required: "Phone number is requied",
          minlength: "Please enter 10 digit mobile number",
          maxlength: "Please enter 10 digit mobile number",
          digits: "Only numbers are allowed in this field",
        },
        username: {
          required: "Username is required",
          minlength: "Username should be minimum 4 characters",
          maxlength: "Username should be maximum 16 characters",
        },
      },
    };
    $("#regiration_form")
      .multiStepForm({
        // defaultStep:0,
        beforeSubmit: function (form, submit) {
          console.log("called before submiting the form");
          console.log(form);
          console.log(submit);
        },
        validations: val,
      })
      .navigateTo(0);
  });
</script>