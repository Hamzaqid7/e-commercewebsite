const hamburger = document.getElementById('menuToggle');
const navMenu = document.getElementById('navMenu');
let closeTimer; // to store the timer reference
hamburger.addEventListener('click', () => {
const accountimg = document.getElementById('img4user');
const shopping = document.querySelector('.hideontab');
const shoppingq = document.getElementById("p4qty");

  // Only run the menu toggle **if viewport < 1281px**
if (window.innerWidth < 1281) {
  navMenu.classList.toggle('active');
  hamburger.classList.toggle("change");
  if(navMenu.classList.contains('active')) {
    accountimg.style.display = 'inline-block';
    shopping.classList.toggle('active');
    shoppingq.classList.toggle('active');
  }
  else {
    accountimg.style.display = 'none';
    shopping.classList.toggle('active');
    shoppingq.classList.toggle('active');
  }
  // If the menu is now open, start timer
  if (navMenu.classList.contains('active')) {
    startCloseTimer();
  } else {
    // If user closes manually, stop timer
    clearTimeout(closeTimer);
  }
}
window.addEventListener('resize', () => {
  // If we are now on desktop view
  if (window.innerWidth >= 1281) {
    navMenu.classList.remove('active');
    hamburger.classList.remove('change');
    accountimg.style.display = 'none';
    shopping.classList.toggle('active');
    shoppingq.classList.toggle('active');
    clearTimeout(closeTimer);
  }
  // If we are now on mobile view
  if (window.innerWidth <= 767) {
    navMenu.classList.remove('active');
    hamburger.classList.remove('change');
    accountimg.style.display = 'none';
    shopping.classList.toggle('active');
    shoppingq.classList.toggle('active');
    clearTimeout(closeTimer);
  }
  // If we are now on tablet view
  if (window.innerWidth <= 1280) {
    navMenu.classList.remove('active');
    hamburger.classList.remove('change');
    accountimg.style.display = 'none';
    shopping.classList.remove('active');
    shoppingq.classList.remove('active');
    clearTimeout(closeTimer);
  }
});
function startCloseTimer() {
  // Clear old timer before starting a new one
  clearTimeout(closeTimer);

  closeTimer = setTimeout(() => {
    navMenu.classList.remove('active');
    hamburger.classList.remove("change");
    accountimg.style.display = 'none';
    shopping.classList.remove('active');
    shoppingq.classList.remove('active');
  }, 15000); // 15000 ms = 15 seconds
}
});
const searchToggle = document.getElementById("searchToggle");
const searchBox = document.getElementById("searchBox");
const searchInput2 = document.getElementById("searchInput");
const clearBtn2 = document.getElementById("clearBtn");
const herotitle = document.querySelector(".Hero-heading");

let closeTimerh = null; // ✅ must be declared!

// Open/close search bar
searchToggle.addEventListener("click", () => {

  searchBox.classList.toggle("active");

  if (searchBox.classList.contains("active")) {
    // Search bar just opened
    herotitle.style.visibility = "hidden";

    setTimeout(() => searchInput2.focus(), 200);

    // Stop any old timer
    clearTimeout(closeTimerh);

    // Start auto-close timer
    startCloseTimer2();
  } else {
    // Search bar closed manually
    herotitle.style.visibility = "visible";
    clearTimeout(closeTimerh);
  }
});
// Stop timer if user is typing & show clear button
searchInput2.addEventListener("input", () => {
  clearBtn2.classList.toggle("show", searchInput2.value.length > 0);

  // ✅ STOP closing timer when user types
    clearTimeout(closeTimerh);
});
if(document.activeElement !== searchInput2 && searchInput2.value.length > 0) {
    // Start auto-close timer
    startCloseTimer2();
}
// Clear input
clearBtn2.addEventListener("click", () => {
  searchInput2.value = "";
  clearBtn2.classList.remove("show");
  searchInput2.focus();

  startCloseTimer2();
});
// Auto-close function
function startCloseTimer2() {
  clearTimeout(closeTimerh); // avoid duplicate timers

  closeTimerh = setTimeout(() => {
    searchBox.classList.remove("active");
    herotitle.style.visibility = "visible";
  }, 15000); 
}
const scrollBtn = document.querySelector(".btn4scroll");

let lastScrollY = window.scrollY;
let reachedBottom = false;

window.addEventListener("scroll", () => {
  const currentScroll = window.scrollY;

  const atBottom =
    window.innerHeight + currentScroll >=
    document.documentElement.scrollHeight - 2;

  /* =========================
     RESET WHEN BACK AT TOP
  ========================== */
  if (currentScroll === 0) {
    scrollBtn.style.opacity = "1";
    scrollBtn.style.background = "linear-gradient(90deg, #347dcf, #082985)";
    scrollBtn.style.color = "white";
    scrollBtn.style.display = "none";
    reachedBottom = false;
  }

  // Detect bottom
  if (atBottom) {
    reachedBottom = true;
  }

  // User scrolled up after reaching bottom
  if (reachedBottom && currentScroll < lastScrollY) {
    scrollBtn.style.opacity = "0.3"; // or 0
    return;
  }
  if (!reachedBottom) {
    scrollBtn.style.opacity = "1"; 
  }

  // Normal behavior
  if (currentScroll > 2500) {
    scrollBtn.style.display = "flex";
    scrollBtn.style.opacity = "1";
    scrollBtn.style.background = atBottom ? "white" : "linear-gradient(90deg, #347dcf, #082985)";
    scrollBtn.style.color = atBottom ? "#0051ff" : "white";
  } else {
    scrollBtn.style.display = "none";
    reachedBottom = false;
  }

  lastScrollY = currentScroll;
});
// Scroll to top function
function scrollToTop() {
  window.scrollTo({ top: 0, behavior: "smooth" });
}

const trail = document.querySelector(".cursor-trail");
document.addEventListener("mousemove", (e) => {
  const x = e.clientX;
  const y = e.clientY;
  trail.style.transform = `translate(${x}px, ${y}px)`;
});
// To disable the context menu of the website
document.addEventListener('DOMContentLoaded', function() {
        document.addEventListener('contextmenu', function(e) {
            e.preventDefault();
        });
    });
