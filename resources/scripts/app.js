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
const bodyElement = document.querySelector("body");

thumbMenu.addEventListener("click", e => {
  openMenu.classList.remove("hidden");
  thumbMenu.classList.add("hidden");
  bodyElement.classList.add("fixedPosition");
  headerContainer.classList.add("hidden");
});

cancelMenu.addEventListener("click", e => {
  openMenu.classList.add("hidden");
  thumbMenu.classList.remove("hidden");
  bodyElement.classList.remove("fixedPosition");
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

// Filter JS for events
var x, i, j, selElmnt, a, b, c;
/* Look for any elements with the class "custom-select": */
x = document.getElementsByClassName("custom-select");
for (i = 0; i < x.length; i++) {
  selElmnt = x[i].getElementsByTagName("select")[0];
  /* For each element, create a new DIV that will act as the selected item: */
  a = document.createElement("DIV");
  a.setAttribute("class", "select-selected");
  a.innerHTML = selElmnt.options[selElmnt.selectedIndex].innerHTML;
  x[i].appendChild(a);
  /* For each element, create a new DIV that will contain the option list: */
  b = document.createElement("DIV");
  b.setAttribute("class", "select-items select-hide");
  for (j = 1; j < selElmnt.length; j++) {
    /* For each option in the original select element,
    create a new DIV that will act as an option item: */
    c = document.createElement("DIV");
    c.innerHTML = selElmnt.options[j].innerHTML;
    c.addEventListener("click", function(e) {
        /* When an item is clicked, update the original select box,
        and the selected item: */
        var y, i, k, s, h;
        s = this.parentNode.parentNode.getElementsByTagName("select")[0];
        h = this.parentNode.previousSibling;
        for (i = 0; i < s.length; i++) {
          if (s.options[i].innerHTML == this.innerHTML) {
            s.selectedIndex = i;
            h.innerHTML = this.innerHTML;
            y = this.parentNode.getElementsByClassName("same-as-selected");
            for (k = 0; k < y.length; k++) {
              y[k].removeAttribute("class");
            }
            this.setAttribute("class", "same-as-selected");
            break;
          }
        }
        h.click();
    });
    b.appendChild(c);
  }
  x[i].appendChild(b);
  a.addEventListener("click", function(e) {
    /* When the select box is clicked, close any other select boxes,
    and open/close the current select box: */
    e.stopPropagation();
    closeAllSelect(this);
    this.nextSibling.classList.toggle("select-hide");
    this.classList.toggle("select-arrow-active");
  });
}

function closeAllSelect(elmnt) {
  /* A function that will close all select boxes in the document,
  except the current select box: */
  var x, y, i, arrNo = [];
  x = document.getElementsByClassName("select-items");
  y = document.getElementsByClassName("select-selected");
  for (i = 0; i < y.length; i++) {
    if (elmnt == y[i]) {
      arrNo.push(i)
    } else {
      y[i].classList.remove("select-arrow-active");
    }
  }
  for (i = 0; i < x.length; i++) {
    if (arrNo.indexOf(i)) {
      x[i].classList.add("select-hide");
    }
  }
}

/* If the user clicks anywhere outside the select box,
then close all select boxes: */
document.addEventListener("click", closeAllSelect);
