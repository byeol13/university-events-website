function openForm() {
  document.getElementById("popupForm").style.display = "block";
}

function closeForm() {
  document.getElementById("popupForm").style.display = "none";
}

function shareOnTwitter(eventName) {
  console.log("Twitter share called with eventName: " + eventName);
  const url = encodeURIComponent(window.location.href);
  window.open(`https://twitter.com/intent/tweet?text=Check out this event: ${encodeURIComponent(eventName)}&url=${url}`, '_blank');
}

function shareOnFacebook(eventName) {
  console.log("Facebook share called with eventName: " + eventName);
  const url = encodeURIComponent(window.location.href);
  window.open(`https://www.facebook.com/sharer/sharer.php?u=${url}&quote=Check out this event: ${encodeURIComponent(eventName)}`, '_blank');
}

function shareOnLinkedin(eventName) {
  console.log("Linkedin share called with eventName: " + eventName);
  const url = encodeURIComponent(window.location.href);
  window.open(`https://www.linkedin.com/shareArticle?mini=true&url=${url}&title=Check out this event: ${encodeURIComponent(eventName)}`, '_blank');
}



