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

thumbMenu.addEventListener("click", (e) => {
  openMenu.classList.remove("hidden");
  thumbMenu.classList.add("hidden");
});

cancelMenu.addEventListener("click", (e) => {
  openMenu.classList.add("hidden");
  thumbMenu.classList.remove("hidden");
});

goToEvent.addEventListener("click", (e) => {
  eventExpand.classList.toggle("hidden");
  aboutExpand.classList.add("hidden");
  archiveExpand.classList.add("hidden");
  contactExpand.classList.add("hidden");
});

goToAbout.addEventListener("click", (e) => {
  aboutExpand.classList.toggle("hidden");
  eventExpand.classList.add("hidden");
  archiveExpand.classList.add("hidden");
  contactExpand.classList.add("hidden");
});

goToArchive.addEventListener("click", (e) => {
  archiveExpand.classList.toggle("hidden");
  aboutExpand.classList.add("hidden");
  eventExpand.classList.add("hidden");
  contactExpand.classList.add("hidden");
});

goToContact.addEventListener("click", (e) => {
  contactExpand.classList.toggle("hidden");
  archiveExpand.classList.add("hidden");
  aboutExpand.classList.add("hidden");
  eventExpand.classList.add("hidden");
});
