function seeAllEventsBtn() {
  window.location.href = "http://localhost/polisgather/all-events.php";
}

let currentPopup = null;

function openSignUpForm() {
  if (currentPopup) {
    currentPopup.style.display = "none";
  }
  currentPopup = document.getElementById("signUpForm");
  currentPopup.style.display = "block";

}

function closeSignUpForm() {

  if (currentPopup) {
    currentPopup.style.display = "none";
  }
  currentPopup = null;
}

function openLoginForm() {

  if (currentPopup) {
    currentPopup.style.display = "none";
  }
  currentPopup = document.getElementById("loginForm");
  currentPopup.style.display = "block";
}

function closeLoginForm() {
  if (currentPopup) {
    currentPopup.style.display = "none";
  }
  currentPopup = null;
}

function closeWarning() {
  document.getElementById('emailExistsPopup').style.display = 'none';
}

populateFeaturedEvents(featuredEventsList);

