/* Thumburger menu */

const thumbMenu = document.querySelector(".thumburger-menu");
const openMenu = document.querySelector(".open-menu");
const cancelMenu = document.querySelector(".menu-cancel");
const goToEvent = document.querySelector(".to-event");
const goToAbout = document.querySelector(".to-about");
const goToArchive = document.querySelector(".to-archive");
const goToContact = document.querySelector(".to-contact");
const eventExpand = document.querySelector(".menu-event-expand");
const aboutExpand = document.querySelector(".menu-about-expand");
const archiveExpand = document.querySelector(".menu-archive-expand");
const contactExpand = document.querySelector(".menu-contact-expand");
const headerContainer = document.querySelector(".header-container");

thumbMenu.addEventListener("click", e => {
  openMenu.classList.remove("hidden");
  thumbMenu.classList.add("hidden");
  headerContainer.classList.add("hidden");
});

cancelMenu.addEventListener("click", e => {
  openMenu.classList.add("hidden");
  thumbMenu.classList.remove("hidden");
  headerContainer.classList.remove("hidden");
});

goToEvent.addEventListener("click", e => {
  eventExpand.classList.toggle("flex");
  aboutExpand.classList.remove("flex");
  archiveExpand.classList.remove("flex");
  contactExpand.classList.remove("flex");
});

goToAbout.addEventListener("click", e => {
  aboutExpand.classList.toggle("flex");
  eventExpand.classList.remove("flex");
  archiveExpand.classList.remove("flex");
  contactExpand.classList.remove("flex");
});

goToArchive.addEventListener("click", e => {
  archiveExpand.classList.toggle("flex");
  aboutExpand.classList.remove("flex");
  eventExpand.classList.remove("flex");
  contactExpand.classList.remove("flex");
});

goToContact.addEventListener("click", e => {
  contactExpand.classList.toggle("flex");
  archiveExpand.classList.remove("flex");
  aboutExpand.classList.remove("flex");
  eventExpand.classList.remove("flex");
});
