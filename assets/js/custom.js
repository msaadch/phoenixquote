// var wizard7 = $("#wizard3");
// var wizHealth = $("#wizardHealth");
// var wizFexpense = $("#wizardFexpense");
// var wizHome = $("#wizardHome");
// var wizMedi = $("#wizardMedicare");
// var wizHi = $("#wizardHI");
// var quoteForm = $("#quoteForm");

// // var thk = document.getElementsByClassName("thankY");
// // console.log(thk);
// // thk.style.display = "inlk";
// // // document.getElementsByClassName("thankY").style[0] = "display:inline";
// // thk.style[0] = "display:inline";

// //auto post data
// $("#wizard3").steps({
//   headerTag: "h3",
//   bodyTag: ".wizard-content",
//   autoFocus: true,
//   enableAllSteps: true,
//   titleTemplate:
//     '<span class="number">#index#</span><span class="title">#title#</span>',
//   onStepChanging: function (event, currentIndex, newIndex) {
//     // Allways allow previous action even if the current form is not valid!
//     if (currentIndex > newIndex) {
//       return true;
//     }
//     return wizard7.valid();
//   },
//   onStepChanged: function (event, currentIndex, priorIndex) {},
//   onFinishing: function (event, currentIndex) {
//     return wizard7.valid();
//   },
//   onFinished: function (event, currentIndex) {
//     var csrf = $("input[name=csrfmiddlewaretoken]").val();
//     var leadId = $("#leadid_token").val();
//     var fname = $("#fname").val();

//     var lname = $("#lname").val();
//     var email = $("#email").val();
//     var dob = $("#dob").val();
//     var phone = $("#phone").val();
//     var address = $("#address").val();
//     var zip = $("#zip").val();
//     var year = $("#year").val();
//     var cmake = $("#cmake").val();
//     var model = $("#model").val();
//     var insured = $("input[name='insured']:checked").val();
//     var dui = $("input[name='dui']:checked").val();
//     var accident = $("input[name='accident']:checked").val();
//     var ticket = $("input[name='ticket']:checked").val();
//     var homeowner = $("input[name='homeowner']:checked").val();
//     console.log(dui);
//     var content = {
//       leadId: leadId,
//       fname: fname,
//       lname: lname,
//       email: email,
//       dob: dob,
//       phone: phone,
//       address: address,
//       zip: zip,
//       year: year,
//       cmake: cmake,
//       model: model,
//       insured: insured,
//       dui: dui,
//       accident: accident,
//       ticket: ticket,
//       homeowner: homeowner,
//     };
//     $.ajax({
//       url: "/auto/",
//       type: "POST",
//       data: {
//         content: JSON.stringify(content),
//         csrfmiddlewaretoken: csrf,
//       },
//       success: function (response) {
//         console.log(response.data);
//         document.getElementById("wizard3").innerHTML =
//           "<div class='dFl'>" +
//           "<img src='/static/pyapp/checked.png'>" +
//           "<h3>Thank You</h3>" +
//           "</div>" +
//           "<div class='text-center'>" +
//           "<p>Our Representative Will Call you Shortly <br/> If You Want To Contact Call <br/>+13213703755</p>";
//         +"</div>";

//         return;
//       },
//     });

//     // INSPIRO.elements.notification(
//     //   "Submited",
//     //   "Thank you, your account has been registed successfully",
//     //   "success"

//     // );
//   },
// });
// //for alphabets only
// jQuery.validator.addMethod(
//   "lettersonly",
//   function (value, element) {
//     return this.optional(element) || /^[a-z]+$/i.test(value);
//   },
//   "Letters only please"
// );
// //for us phone
// jQuery.validator.addMethod(
//   "phoneUS",
//   function (phone_number, element) {
//     phone_number = phone_number.replace(/\s+/g, "");
//     return (
//       this.optional(element) ||
//       (phone_number.length > 9 &&
//         phone_number.match(
//           /^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/
//         ))
//     );
//   },
//   "Please specify a valid US phone number"
// );
// jQuery.validator.addMethod(
//   "zipcodeUS",
//   function (value, element) {
//     return this.optional(element) || /\d{5}-\d{4}$|^\d{5}$/.test(value);
//   },
//   "The specified US ZIP Code is invalid"
// );
// //Validation
// wizard7.validate({
//   errorClass: "is-invalid",
//   validClass: "is-valid",
//   errorElement: "div",

//   rules: {
//     // Step 1 - Account information
//     fname: {
//       required: true,
//       lettersonly: true,
//     },
//     lname: {
//       required: true,
//       lettersonly: true,
//     },
//     email: {
//       required: true,
//       email: true,
//       minlength: 8,
//     },
//     telephone: {
//       required: true,
//       phoneUS: true,
//     },
//     insured: {
//       required: true,
//     },
//     dui: {
//       required: true,
//     },
//     accident: {
//       required: true,
//     },
//     ticket: {
//       required: true,
//     },
//     homeowner: {
//       required: true,
//     },
//     cmake: {
//       required: true,
//     },
//     year: {
//       required: true,
//     },
//     zip: {
//       required: true,
//       zipcodeUS: true,
//     },

//     // Step 4 - Confirmation
//     // reminders: {
//     //   required: true,
//     // },
//     // terms_conditions: {
//     //   required: true,
//     // },
//   },
//   errorPlacement: function (error, element) {
//     $(element).parents(".form-group").append(error);
//   },
// });
// //health post data
// $("#wizardHealth").steps({
//   headerTag: "h3",
//   bodyTag: ".wizard-content",
//   autoFocus: true,
//   enableAllSteps: true,
//   titleTemplate:
//     '<span class="number">#index#</span><span class="title">#title#</span>',
//   onStepChanging: function (event, currentIndex, newIndex) {
//     // Allways allow previous action even if the current form is not valid!
//     if (currentIndex > newIndex) {
//       return true;
//     }
//     return wizHealth.valid();
//   },
//   onStepChanged: function (event, currentIndex, priorIndex) {},
//   onFinishing: function (event, currentIndex) {
//     return wizHealth.valid();
//   },
//   onFinished: function (event, currentIndex) {
//     var csrf = $("input[name=csrfmiddlewaretoken]").val();
//     var leadId = $("#leadid_token").val();
//     var fname = $("#fname").val();

//     var lname = $("#lname").val();
//     var email = $("#email").val();
//     var dob = $("#dob").val();
//     var phone = $("#phone").val();
//     var address = $("#address").val();
//     var zip = $("#zip").val();
//     var heightFt = $("#hFt").val();
//     var heightIn = $("#hInches").val();
//     var height = heightFt + "ft" + "," + heightIn + "inch";
//     console.log(height);
//     var weight = $("#weight").val();
//     var income = $("#income").val();
//     var insured = $("#insured").val();

//     var gender = $("#gender").val();

//     var smoke = $("input[name='smoke']:checked").val();
//     var coverage = $("input[name='coverage']:checked").val();
//     var hospital = $("input[name='hospital']:checked").val();
//     var expect = $("input[name='expect']:checked").val();

//     var content = {
//       leadId: leadId,

//       fname: fname,
//       lname: lname,
//       email: email,
//       dob: dob,
//       phone: phone,
//       address: address,
//       zip: zip,
//       height: height,
//       weight: weight,
//       income: income,
//       insured: insured,
//       gender: gender,
//       smoke: smoke,
//       coverage: coverage,
//       hospital: hospital,
//       expect: expect,
//     };
//     $.ajax({
//       url: "/health/",
//       type: "POST",
//       data: {
//         content: JSON.stringify(content),
//         csrfmiddlewaretoken: csrf,
//       },
//       success: function (response) {
//         console.log(response.data);
//         document.getElementById("wizardHealth").innerHTML =
//           "<div class='dFl'>" +
//           "<img src='/static/pyapp/checked.png'>" +
//           "<h3>Thank You</h3>" +
//           "</div>" +
//           "<div class='text-center'>" +
//           "<p>Our Representative Will Call you Shortly <br/> If You Want To Contact Call <br/>+13213703755</p>";
//         +"</div>";
//         return;
//       },
//     });
//   },
// });
// //for alphabets only
// jQuery.validator.addMethod(
//   "lettersonly",
//   function (value, element) {
//     return this.optional(element) || /^[a-z]+$/i.test(value);
//   },
//   "Letters only please"
// );
// //for us phone
// jQuery.validator.addMethod(
//   "phoneUS",
//   function (phone_number, element) {
//     phone_number = phone_number.replace(/\s+/g, "");
//     return (
//       this.optional(element) ||
//       (phone_number.length > 9 &&
//         phone_number.match(
//           /^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/
//         ))
//     );
//   },
//   "Please specify a valid US phone number"
// );
// jQuery.validator.addMethod(
//   "zipcodeUS",
//   function (value, element) {
//     return this.optional(element) || /\d{5}-\d{4}$|^\d{5}$/.test(value);
//   },
//   "The specified US ZIP Code is invalid"
// );
// //Validation
// wizHealth.validate({
//   errorClass: "is-invalid",
//   validClass: "is-valid",
//   errorElement: "div",
//   rules: {
//     // Step 1 - Account information
//     fname: {
//       required: true,
//       lettersonly: true,
//     },
//     lname: {
//       required: true,
//       lettersonly: true,
//     },
//     email: {
//       required: true,
//       email: true,
//       minlength: 8,
//     },
//     telephone: {
//       required: true,
//       phoneUS: true,
//     },
//     hFt: {
//       required: true,
//     },
//     hInches: {
//       required: true,
//     },
//     weight: {
//       required: true,
//     },
//     insured: {
//       required: true,
//     },
//     income: {
//       required: true,
//     },
//     gender: {
//       required: true,
//     },
//     smoke: {
//       required: true,
//     },
//     coverage: {
//       required: true,
//     },
//     zip: {
//       required: true,
//       zipcodeUS: true,
//     },
//     hospital: {
//       required: true,
//     },
//     expect: {
//       required: true,
//     },
//   },
//   errorPlacement: function (error, element) {
//     $(element).parents(".form-group").append(error);
//   },
// });

// //final expense post data

// $("#wizardFexpense").steps({
//   headerTag: "h3",
//   bodyTag: ".wizard-content",
//   autoFocus: true,
//   enableAllSteps: true,
//   titleTemplate:
//     '<span class="number">#index#</span><span class="title">#title#</span>',
//   onStepChanging: function (event, currentIndex, newIndex) {
//     // Allways allow previous action even if the current form is not valid!
//     if (currentIndex > newIndex) {
//       return true;
//     }
//     return wizFexpense.valid();
//   },
//   onStepChanged: function (event, currentIndex, priorIndex) {},
//   onFinishing: function (event, currentIndex) {
//     return wizFexpense.valid();
//   },
//   onFinished: function (event, currentIndex) {
//     var csrf = $("input[name=csrfmiddlewaretoken]").val();
//     var leadId = $("#leadid_token").val();
//     var fname = $("#fname").val();
//     var lname = $("#lname").val();
//     var email = $("#email").val();
//     var dob = $("#dob").val();
//     var phone = $("#phone").val();
//     var address = $("#address").val();
//     var zip = $("#zip").val();
//     var cRating = $("#creditR").val();
//     var gender = $("#gender").val();
//     var homeType = $("input[name='homeType']:checked").val();

//     var content = {
//       leadId: leadId,

//       fname: fname,
//       lname: lname,
//       email: email,
//       dob: dob,
//       phone: phone,
//       address: address,
//       zip: zip,
//       cRating: cRating,
//       gender: gender,
//       homeType: homeType,
//     };
//     $.ajax({
//       url: "/finalexpense/",
//       type: "POST",
//       data: {
//         content: JSON.stringify(content),
//         csrfmiddlewaretoken: csrf,
//       },
//       success: function (response) {
//         console.log(response.data);
//         document.getElementById("wizardFexpense").innerHTML =
//           "<div class='dFl'>" +
//           "<img src='/static/pyapp/checked.png'>" +
//           "<h3>Thank You</h3>" +
//           "</div>" +
//           "<div class='text-center'>" +
//           "<p>Our Representative Will Call you Shortly <br/> If You Want To Contact Call <br/>+13213703755</p>";
//         +"</div>";
//         return;
//       },
//     });
//   },
// });
// //for alphabets only
// jQuery.validator.addMethod(
//   "lettersonly",
//   function (value, element) {
//     return this.optional(element) || /^[a-z]+$/i.test(value);
//   },
//   "Letters only please"
// );
// //for us phone
// jQuery.validator.addMethod(
//   "phoneUS",
//   function (phone_number, element) {
//     phone_number = phone_number.replace(/\s+/g, "");
//     return (
//       this.optional(element) ||
//       (phone_number.length > 9 &&
//         phone_number.match(
//           /^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/
//         ))
//     );
//   },
//   "Please specify a valid US phone number"
// );
// jQuery.validator.addMethod(
//   "zipcodeUS",
//   function (value, element) {
//     return this.optional(element) || /\d{5}-\d{4}$|^\d{5}$/.test(value);
//   },
//   "The specified US ZIP Code is invalid"
// );
// //Validation
// wizFexpense.validate({
//   errorClass: "is-invalid",
//   validClass: "is-valid",
//   errorElement: "div",
//   rules: {
//     // Step 1 - Account information
//     fname: {
//       required: true,
//       lettersonly: true,
//     },
//     lname: {
//       required: true,
//       lettersonly: true,
//     },
//     email: {
//       required: true,
//       email: true,
//       minlength: 8,
//     },
//     telephone: {
//       required: true,
//       phoneUS: true,
//     },
//     creditR: {
//       required: true,
//     },

//     gender: {
//       required: true,
//     },
//     homeType: {
//       required: true,
//     },
//     zip: {
//       required: true,
//       zipcodeUS: true,
//     },
//   },
//   errorPlacement: function (error, element) {
//     $(element).parents(".form-group").append(error);
//   },
// });

// //home insurance post data
// $("#wizardHome").steps({
//   headerTag: "h3",
//   bodyTag: ".wizard-content",
//   autoFocus: true,
//   enableAllSteps: true,
//   titleTemplate:
//     '<span class="number">#index#</span><span class="title">#title#</span>',
//   onStepChanging: function (event, currentIndex, newIndex) {
//     // Allways allow previous action even if the current form is not valid!
//     if (currentIndex > newIndex) {
//       return true;
//     }
//     return wizHome.valid();
//   },
//   onStepChanged: function (event, currentIndex, priorIndex) {},
//   onFinishing: function (event, currentIndex) {
//     return wizHome.valid();
//   },
//   onFinished: function (event, currentIndex) {
//     var csrf = $("input[name=csrfmiddlewaretoken]").val();
//     var leadId = $("#leadid_token").val();
//     var fname = $("#fname").val();

//     var lname = $("#lname").val();
//     var email = $("#email").val();
//     var dob = $("#dob").val();
//     var phone = $("#phone").val();
//     var address = $("#address").val();
//     var zip = $("#zip").val();
//     var year = $("#year").val();
//     var insuredC = $("#insuredC").val();

//     var approxSq = $("#approxSq").val();
//     var stories = $("#stories").val();

//     var gender = $("#gender").val();
//     var bedroom = $("#bedroom").val();
//     var propertyT = $("#propertyT").val();
//     var bathroom = $("#bathroom").val();
//     var creditR = $("#creditR").val();

//     var homeType = $("input[name='homeType']:checked").val();
//     var live = $("input[name='live']:checked").val();
//     var claim = $("input[name='claim']:checked").val();

//     var content = {
//       leadId: leadId,

//       fname: fname,
//       lname: lname,
//       email: email,
//       dob: dob,
//       phone: phone,
//       address: address,
//       zip: zip,
//       year: year,
//       insuredC: insuredC,
//       approxSq: approxSq,
//       stories: stories,
//       gender: gender,
//       bedroom: bedroom,
//       propertyT: propertyT,
//       bathroom: bathroom,
//       creditR: creditR,
//       homeType: homeType,
//       live: live,
//       claim: claim,
//     };
//     $.ajax({
//       url: "/homeinsurance/",
//       type: "POST",
//       data: {
//         content: JSON.stringify(content),
//         csrfmiddlewaretoken: csrf,
//       },
//       success: function (response) {
//         console.log(response.data);
//         document.getElementById("wizardHome").innerHTML =
//           "<div class='dFl'>" +
//           "<img src='/static/pyapp/checked.png'>" +
//           "<h3>Thank You</h3>" +
//           "</div>" +
//           "<div class='text-center'>" +
//           "<p>Our Representative Will Call you Shortly <br/> If You Want To Contact Call <br/>+13213703755</p>";
//         +"</div>";
//         return;
//       },
//     });
//   },
// });
// //for alphabets only
// jQuery.validator.addMethod(
//   "lettersonly",
//   function (value, element) {
//     return this.optional(element) || /^[a-z]+$/i.test(value);
//   },
//   "Letters only please"
// );
// //for us phone
// jQuery.validator.addMethod(
//   "phoneUS",
//   function (phone_number, element) {
//     phone_number = phone_number.replace(/\s+/g, "");
//     return (
//       this.optional(element) ||
//       (phone_number.length > 9 &&
//         phone_number.match(
//           /^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/
//         ))
//     );
//   },
//   "Please specify a valid US phone number"
// );
// jQuery.validator.addMethod(
//   "zipcodeUS",
//   function (value, element) {
//     return this.optional(element) || /\d{5}-\d{4}$|^\d{5}$/.test(value);
//   },
//   "The specified US ZIP Code is invalid"
// );
// //Validation
// wizHome.validate({
//   errorClass: "is-invalid",
//   validClass: "is-valid",
//   errorElement: "div",
//   rules: {
//     // Step 1 - Account information
//     fname: {
//       required: true,
//       lettersonly: true,
//     },
//     lname: {
//       required: true,
//       lettersonly: true,
//     },
//     email: {
//       required: true,
//       email: true,
//       minlength: 8,
//     },
//     telephone: {
//       required: true,
//       phoneUS: true,
//     },
//     year: {
//       required: true,
//     },
//     insuredC: {
//       required: true,
//     },
//     approxSq: {
//       required: true,
//     },
//     stories: {
//       required: true,
//     },
//     bedroom: {
//       required: true,
//     },
//     gender: {
//       required: true,
//     },
//     propertyT: {
//       required: true,
//     },
//     bathroom: {
//       required: true,
//     },
//     zip: {
//       required: true,
//       zipcodeUS: true,
//     },
//     creditR: {
//       required: true,
//     },
//     homeType: {
//       required: true,
//     },
//     live: {
//       required: true,
//     },
//     claim: {
//       required: true,
//     },
//   },
//   errorPlacement: function (error, element) {
//     $(element).parents(".form-group").append(error);
//   },
// });

// //medicare insurance post data
// $("#wizardMedicare").steps({
//   headerTag: "h3",
//   bodyTag: ".wizard-content",
//   autoFocus: true,
//   enableAllSteps: true,
//   titleTemplate:
//     '<span class="number">#index#</span><span class="title">#title#</span>',
//   onStepChanging: function (event, currentIndex, newIndex) {
//     // Allways allow previous action even if the current form is not valid!
//     if (currentIndex > newIndex) {
//       return true;
//     }
//     return wizMedi.valid();
//   },
//   onStepChanged: function (event, currentIndex, priorIndex) {},
//   onFinishing: function (event, currentIndex) {
//     return wizMedi.valid();
//   },
//   onFinished: function (event, currentIndex) {
//     var csrf = $("input[name=csrfmiddlewaretoken]").val();
//     var leadId = $("#leadid_token").val();
//     var fname = $("#fname").val();

//     var lname = $("#lname").val();
//     var email = $("#email").val();
//     var dob = $("#dob").val();
//     var phone = $("#phone").val();
//     var address = $("#address").val();
//     var zip = $("#zip").val();
//     var heightFt = $("#hFt").val();
//     var heightIn = $("#hInches").val();
//     var height = heightFt + "ft" + "," + heightIn + "inch";
//     console.log(height);
//     var weight = $("#weight").val();
//     var income = $("#income").val();
//     var insured = $("#insured").val();

//     var gender = $("#gender").val();

//     var smoke = $("input[name='smoke']:checked").val();
//     var coverage = $("input[name='coverage']:checked").val();
//     var hospital = $("input[name='hospital']:checked").val();
//     var expect = $("input[name='expect']:checked").val();

//     var content = {
//       leadId: leadId,

//       fname: fname,
//       lname: lname,
//       email: email,
//       dob: dob,
//       phone: phone,
//       address: address,
//       zip: zip,
//       height: height,
//       weight: weight,
//       income: income,
//       insured: insured,
//       gender: gender,
//       smoke: smoke,
//       coverage: coverage,
//       hospital: hospital,
//       expect: expect,
//     };
//     $.ajax({
//       url: "/medicare/",
//       type: "POST",
//       data: {
//         content: JSON.stringify(content),
//         csrfmiddlewaretoken: csrf,
//       },
//       success: function (response) {
//         console.log(response.data);
//         document.getElementById("wizardMedicare").innerHTML =
//           "<div class='dFl'>" +
//           "<img src='/static/pyapp/checked.png'>" +
//           "<h3>Thank You</h3>" +
//           "</div>" +
//           "<div class='text-center'>" +
//           "<p>Our Representative Will Call you Shortly <br/> If You Want To Contact Call <br/>+13213703755</p>";
//         +"</div>";
//         return;
//       },
//     });
//   },
// });
// //for alphabets only
// jQuery.validator.addMethod(
//   "lettersonly",
//   function (value, element) {
//     return this.optional(element) || /^[a-z]+$/i.test(value);
//   },
//   "Letters only please"
// );
// //for us phone
// jQuery.validator.addMethod(
//   "phoneUS",
//   function (phone_number, element) {
//     phone_number = phone_number.replace(/\s+/g, "");
//     return (
//       this.optional(element) ||
//       (phone_number.length > 9 &&
//         phone_number.match(
//           /^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/
//         ))
//     );
//   },
//   "Please specify a valid US phone number"
// );
// jQuery.validator.addMethod(
//   "zipcodeUS",
//   function (value, element) {
//     return this.optional(element) || /\d{5}-\d{4}$|^\d{5}$/.test(value);
//   },
//   "The specified US ZIP Code is invalid"
// );
// //Validation
// wizMedi.validate({
//   errorClass: "is-invalid",
//   validClass: "is-valid",
//   errorElement: "div",
//   rules: {
//     // Step 1 - Account information
//     fname: {
//       required: true,
//       lettersonly: true,
//     },
//     lname: {
//       required: true,
//       lettersonly: true,
//     },
//     email: {
//       required: true,
//       email: true,
//       minlength: 8,
//     },
//     telephone: {
//       required: true,
//       phoneUS: true,
//     },
//     hFt: {
//       required: true,
//     },
//     hInches: {
//       required: true,
//     },
//     weight: {
//       required: true,
//     },
//     insured: {
//       required: true,
//     },
//     income: {
//       required: true,
//     },
//     gender: {
//       required: true,
//     },
//     smoke: {
//       required: true,
//     },
//     coverage: {
//       required: true,
//     },
//     zip: {
//       required: true,
//       zipcodeUS: true,
//     },
//     hospital: {
//       required: true,
//     },
//     expect: {
//       required: true,
//     },
//   },
//   errorPlacement: function (error, element) {
//     $(element).parents(".form-group").append(error);
//   },
// });

// //home improvement post data
// $("#wizardHI").steps({
//   headerTag: "h3",
//   bodyTag: ".wizard-content",
//   autoFocus: true,
//   enableAllSteps: true,
//   titleTemplate:
//     '<span class="number">#index#</span><span class="title">#title#</span>',
//   onStepChanging: function (event, currentIndex, newIndex) {
//     // Allways allow previous action even if the current form is not valid!
//     if (currentIndex > newIndex) {
//       return true;
//     }
//     return wizHi.valid();
//   },
//   onStepChanged: function (event, currentIndex, priorIndex) {},
//   onFinishing: function (event, currentIndex) {
//     return wizHi.valid();
//   },
//   onFinished: function (event, currentIndex) {
//     var csrf = $("input[name=csrfmiddlewaretoken]").val();
//     var leadId = $("#leadid_token").val();
//     var fname = $("#fname").val();

//     var lname = $("#lname").val();
//     var email = $("#email").val();
//     var dob = $("#dob").val();
//     var phone = $("#phone").val();
//     var address = $("#address").val();
//     var zip = $("#zip").val();
//     var year = $("#year").val();
//     var insuredC = $("#insuredC").val();

//     var approxSq = $("#approxSq").val();
//     var stories = $("#stories").val();

//     var gender = $("#gender").val();
//     var bedroom = $("#bedroom").val();
//     var propertyT = $("#propertyT").val();
//     var bathroom = $("#bathroom").val();
//     var creditR = $("#creditR").val();

//     var homeType = $("input[name='homeType']:checked").val();
//     var live = $("input[name='live']:checked").val();
//     var claim = $("input[name='claim']:checked").val();

//     var content = {
//       leadId: leadId,

//       fname: fname,
//       lname: lname,
//       email: email,
//       dob: dob,
//       phone: phone,
//       address: address,
//       zip: zip,
//       year: year,
//       insuredC: insuredC,
//       approxSq: approxSq,
//       stories: stories,
//       gender: gender,
//       bedroom: bedroom,
//       propertyT: propertyT,
//       bathroom: bathroom,
//       creditR: creditR,
//       homeType: homeType,
//       live: live,
//       claim: claim,
//     };
//     $.ajax({
//       url: "/homeimprovement/",
//       type: "POST",
//       data: {
//         content: JSON.stringify(content),
//         csrfmiddlewaretoken: csrf,
//       },
//       success: function (response) {
//         console.log(response.data);
//         document.getElementById("wizardHI").innerHTML =
//           "<div class='dFl'>" +
//           "<img src='/static/pyapp/checked.png'>" +
//           "<h3>Thank You</h3>" +
//           "</div>" +
//           "<div class='text-center'>" +
//           "<p>Our Representative Will Call you Shortly <br/> If You Want To Contact Call <br/>+13213703755</p>";
//         +"</div>";
//         return;
//       },
//     });
//   },
// });
// //for alphabets only
// jQuery.validator.addMethod(
//   "lettersonly",
//   function (value, element) {
//     return this.optional(element) || /^[a-z]+$/i.test(value);
//   },
//   "Letters only please"
// );
// //for us phone
// jQuery.validator.addMethod(
//   "phoneUS",
//   function (phone_number, element) {
//     phone_number = phone_number.replace(/\s+/g, "");
//     return (
//       this.optional(element) ||
//       (phone_number.length > 9 &&
//         phone_number.match(
//           /^(1-?)?(\([2-9]\d{2}\)|[2-9]\d{2})-?[2-9]\d{2}-?\d{4}$/
//         ))
//     );
//   },
//   "Please specify a valid US phone number"
// );
// jQuery.validator.addMethod(
//   "zipcodeUS",
//   function (value, element) {
//     return this.optional(element) || /\d{5}-\d{4}$|^\d{5}$/.test(value);
//   },
//   "The specified US ZIP Code is invalid"
// );
// //Validation
// wizHi.validate({
//   errorClass: "is-invalid",
//   validClass: "is-valid",
//   errorElement: "div",
//   rules: {
//     // Step 1 - Account information
//     fname: {
//       required: true,
//       lettersonly: true,
//     },
//     lname: {
//       required: true,
//       lettersonly: true,
//     },
//     email: {
//       required: true,
//       email: true,
//       minlength: 8,
//     },
//     telephone: {
//       required: true,
//       phoneUS: true,
//     },
//     year: {
//       required: true,
//     },
//     insuredC: {
//       required: true,
//     },
//     approxSq: {
//       required: true,
//     },
//     stories: {
//       required: true,
//     },
//     bedroom: {
//       required: true,
//     },
//     gender: {
//       required: true,
//     },
//     propertyT: {
//       required: true,
//     },
//     bathroom: {
//       required: true,
//     },
//     zip: {
//       required: true,
//       zipcodeUS: true,
//     },
//     creditR: {
//       required: true,
//     },
//     homeType: {
//       required: true,
//     },
//     live: {
//       required: true,
//     },
//     claim: {
//       required: true,
//     },
//   },
//   errorPlacement: function (error, element) {
//     $(element).parents(".form-group").append(error);
//   },
// });
// //quote form
// jQuery.validator.addMethod(
//   "zipcodeUS",
//   function (value, element) {
//     return this.optional(element) || /\d{5}-\d{4}$|^\d{5}$/.test(value);
//   },
//   "The specified US ZIP Code is invalid"
// );
// //Validation
// quoteForm.validate({
//   errorClass: "is-invalid",
//   validClass: "is-valid",
//   errorElement: "div",
//   rules: {
//     // Step 1 - Account information

//     zip: {
//       required: true,
//       zipcodeUS: true,
//     },
//   },
//   errorPlacement: function (error, element) {
//     $(element).parents(".form-group").append(error);
//   },
// });
