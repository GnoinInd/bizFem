let currentFeaturesIndex = 0;
let featuresTimeIntervelVal = undefined;
const featuresElementsId = [
  "v-pills-home-tab",
  "v-pills-profile-tab",
  "v-pills-disabled-tab",
  "v-pills-messages-tab",
  "v-pills-settings-tab",
  "v-pills-home-tab0",
  "v-pills-profile-tab1",
  "v-pills-disabled-tab2",
  "v-pills-messages-tab3",
  "v-pills-settings-tab4",
];

function autoscroll() {
  console.log("called");
  let featuresWrapper = document.getElementById("features-wrapper");
  if (!isInViewport(featuresWrapper)) {
    clearInterval(featuresTimeIntervelVal);
  }
  if (currentFeaturesIndex === featuresElementsId.length - 1) {
    currentFeaturesIndex = -1;
  }
  currentFeaturesIndex++;
  let screenSize = window.innerWidth;
  if (screenSize > 400) {
    let element = document.getElementById("features-headers-list");
    if (currentFeaturesIndex < 4) {
      element.scrollTo({
        top: 0,
        behavior: "smooth",
      });
    } else if (currentFeaturesIndex < 8) {
      element.scrollTo({
        top: 450,
        behavior: "smooth",
      });
    } else if (currentFeaturesIndex < 12) {
      element.scrollTo({
        top: 900,
        behavior: "smooth",
      });
    }
    let navLinks = document.querySelectorAll(".nav-link");
    //all navelink class remove when tis funcation call
    navLinks.forEach((link) => link.classList.remove("active"));
    document
      .getElementById(featuresElementsId[currentFeaturesIndex])
      .classList.add("active");
    let data = document
      .getElementById(featuresElementsId[currentFeaturesIndex])
      .getAttribute("data-bs-target");
    let tabPanes = document.querySelectorAll(".tab-pane");
    tabPanes.forEach((pane) => pane.classList.remove("show", "active"));
    let targetPane = document.querySelector(`${data}`);
    if (targetPane) {
      targetPane.classList.add("show", "active");
    }
  }
}

function isInViewport(element) {
  let elementTop = element.offsetTop;
  let elementBottom = elementTop + element.offsetHeight;

  let viewportTop = window.pageYOffset;
  let viewportBottom = viewportTop + window.innerHeight;

  return elementBottom > viewportTop && elementTop < viewportBottom;
}
window.addEventListener("resize", function () {
  let featuresWrapper = document.getElementById("features-wrapper");
  if (isInViewport(featuresWrapper)) {
    if (featuresTimeIntervelVal) {
      clearInterval(featuresTimeIntervelVal);
    }
    featuresTimeIntervelVal = setInterval(autoscroll, 4000);
  } else {
    clearInterval(featuresTimeIntervelVal);
  }
});

window.addEventListener("scroll", function () {
  let featuresWrapper = document.getElementById("features-wrapper");
  if (isInViewport(featuresWrapper)) {
    if (featuresTimeIntervelVal) {
      clearInterval(featuresTimeIntervelVal);
    }
    featuresTimeIntervelVal = setInterval(autoscroll, 4000);
  } else {
    clearInterval(featuresTimeIntervelVal);
  }
});

document.addEventListener("DOMContentLoaded", function () {
  setTimeout(function () {
    var myModal = new bootstrap.Modal(document.getElementById("exampleModal1"));
    myModal.show();
  }, 5000);
});

document.addEventListener("DOMContentLoaded", function () {
  const phoneInput = document.getElementById("mobileinputlogin");
  const emailInput = document.getElementById("emailinputlogin");
  const loginSwitch = document.querySelector("#login-switch");
  loginSwitch.innerText = "Login using phone";

  loginSwitch.addEventListener("click", function () {
    if (phoneInput.style.display === "none") {
      phoneInput.style.display = "block";
      emailInput.style.display = "none";
      loginSwitch.innerText = "Login using email";
    } else {
      phoneInput.style.display = "none";
      emailInput.style.display = "block";
      loginSwitch.innerText = "Login using phone";
    }
  });
});

$(function () {
  $("#myForm").validate({
    rules: {
      Username: "required",
      phone: {
        required: true,
        minlength: 10,
        maxlength: 10,
      },
      Otp: {
        required: true,
        digits: true,
        minlength: 4,
        maxlength: 6,
      },
      email: {
        required: true,
        email: true,
      },
      pincode: {
        required: true,
        digits: true,
        minlength: 6,
        maxlength: 6,
      },
    },
    messages: {
      Username: "Please enter your name",
      phone: {
        required: "Please enter your phone number",
        minlength: "Your phone number must be at least 10 digits",
        maxlength: "Your phone number cannot exceed 15 digits",
      },
      Otp: {
        required: "Please enter the OTP",
        digits: "Please enter a valid OTP",
        minlength: "Your OTP must be at least 4 digits",
        maxlength: "Your OTP cannot exceed 6 digits",
      },
      email: "Please enter a valid email address",
      pincode: {
        required: "Please enter your pincode",
        digits: "Please enter a valid 6-digit pincode",
        minlength: "Your pincode must be 6 digits",
        maxlength: "Your pincode must be 6 digits",
      },
    },

    submitHandler: function (form) {
      alert("form Submitted");
      form.submit();
    },
  });
});

$(function () {
  $("#myformbottom").validate({
    rules: {
      Username: "required",
      phone: {
        required: true,
        minlength: 10,
        maxlength: 10,
      },
      Otp: {
        required: true,
        digits: true,
        minlength: 4,
        maxlength: 6,
      },
      email: {
        required: true,
        email: true,
      },
      pincode: {
        required: true,
        digits: true,
        minlength: 6,
        maxlength: 6,
      },
    },
    messages: {
      Username: "Please enter your name",
      phone: {
        required: "Please enter your phone number",
        minlength: "Your phone number must be at least 10 digits",
        maxlength: "Your phone number cannot exceed 15 digits",
      },
      Otp: {
        required: "Please enter the OTP",
        digits: "Please enter a valid OTP",
        minlength: "Your OTP must be at least 4 digits",
        maxlength: "Your OTP cannot exceed 6 digits",
      },
      email: "Please enter a valid email address",
      pincode: {
        required: "Please enter your pincode",
        digits: "Please enter a valid 6-digit pincode",
        minlength: "Your pincode must be 6 digits",
        maxlength: "Your pincode must be 6 digits",
      },
    },

    submitHandler: function (form) {
      alert("form Submitted");
      form.submit();
    },
  });
});

document.addEventListener("DOMContentLoaded", function () {
  function getParameterByName(name, url) {
    if (!url) url = window.location.href;
    name = name.replace(/[\[\]]/g, "\\$&");
    var regex = new RegExp("[?&]" + name + "(=([^&#]*)|&|#|$)"),
      results = regex.exec(url);
    if (!results) return null;
    if (!results[2]) return "";
    return decodeURIComponent(results[2].replace(/\+/g, " "));
  }
  var openModalParam = getParameterByName("openModal");
  if (openModalParam === "true") {
    var myModal = new bootstrap.Offcanvas(
      document.getElementById("offcanvasRight")
    );
    myModal.show();
  }
});
