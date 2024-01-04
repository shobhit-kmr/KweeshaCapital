// <!--================= Progress bar on scroll window js ======================--

let calcScrollValue = () => {
  let scrollProgress = document.getElementById("progress");
  let progressValue = document.getElementById("progress-value");
  let pos = document.documentElement.scrollTop;
  let calcHeight =
    document.documentElement.scrollHeight -
    document.documentElement.clientHeight;
  let scrollValue = Math.round((pos * 100) / calcHeight);

  if (pos > 100) {
    scrollProgress.style.display = "grid";
  } else {
    scrollProgress.style.display = "none";
  }
  scrollProgress.addEventListener("click", () => {
    document.documentElement.scrollTop = 0;
  });
  scrollProgress.style.background = `radial-gradient(white 50%, transparent 51%),
        conic-gradient(transparent 0% ${scrollValue}%, gainsboro ${scrollValue}%),
        conic-gradient( var(--fourth-primary)  0deg, var(--fourth-primary)  90deg,  var(--fourth-primary) 180deg,  var(--fourth-primary))`;
};

window.onscroll = calcScrollValue;
window.onload = calcScrollValue;

const navMenu = document.querySelector(".menu");
function activateLink(link) {
  const navLinks = document.querySelectorAll(".nav-link");
  navLinks.forEach((navLink) => {
    navLink.classList.remove("active");
  });

  link.classList.add("active");
}

/*===== Scroll Section Active Link =====*/

document.addEventListener("DOMContentLoaded", function () {
  const sections = document.querySelectorAll(".section");
  const navLinks = document.querySelectorAll(".nav-link");

  function activateLink(link) {
    navLinks.forEach(function (navLink) {
      navLink.classList.remove("active");
    });
    link.classList.add("active");
  }

  function checkSectionInView() {
    const scrollPosition = window.pageYOffset;

    sections.forEach(function (section) {
      const sectionTop = section.offsetTop - 50;
      const sectionHeight = section.offsetHeight;
      const sectionId = section.getAttribute("id");

      if (
        scrollPosition >= sectionTop &&
        scrollPosition < sectionTop + sectionHeight
      ) {
        navLinks.forEach(function (navLink) {
          if (navLink.getAttribute("href") === `#${sectionId}`) {
            activateLink(navLink);
          }
        });
      }
    });
  }

  window.addEventListener("scroll", checkSectionInView);
});

document.addEventListener("DOMContentLoaded", function () {
  function closeMobileMenu() {
    const navbarCollapse = document.querySelector(".navbar-collapse");
    if (navbarCollapse.classList.contains("show")) {
      navbarCollapse.classList.remove("show");
    }
  }
  const menuLinks = document.querySelectorAll(".menu .nav-link");
  menuLinks.forEach(function (link) {
    link.addEventListener("click", closeMobileMenu);
  });
});
