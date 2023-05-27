const navbarSetting = document.querySelector('a[href="#setting"]');
const settingSection = document.getElementById("setting-section");

settingSection.style.display = "none";

navbarSetting.addEventListener("click", function (event) {
  event.preventDefault();

  if (settingSection.style.display === "none") {
    settingSection.style.display = "block";
  } else {
    settingSection.style.display = "none";
  }
});

document.addEventListener("DOMContentLoaded", function () {
  var settingButton = document.getElementById("setting");
  var settingSection = document.getElementById("setting-section");

  settingSection.style.display = "none";

  settingButton.addEventListener("click", function () {
    if (settingSection.style.display === "none") {
      settingSection.style.display = "block";
    } else {
      settingSection.style.display = "none";
    }
  });
});
