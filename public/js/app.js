document.addEventListener("DOMContentLoaded", function () {

    /* ===============================
       SCROLL TO TOP BUTTON
    =============================== */
    const scrollBtn = document.getElementById("scrollTopBtn");

    if (scrollBtn) {
        window.addEventListener("scroll", () => {
            if (window.scrollY > 200) {
                scrollBtn.style.display = "block";
            } else {
                scrollBtn.style.display = "none";
            }
        });

        scrollBtn.addEventListener("click", () => {
            window.scrollTo({
                top: 0,
                behavior: "smooth",
            });
        });
    }

    window.toggleOutline = function () {
        const outline = document.getElementById('courseOutline');
        const icon = document.getElementById('toggleIcon');

        if (!outline || !icon) return;

        outline.classList.toggle('show');
        icon.classList.toggle('rotate');
    };


    /* ===============================
       MOBILE MENU TOGGLE
    =============================== */
    const menuToggle = document.getElementById("menuToggle");
    const navMenu = document.getElementById("navMenu");
    const navClose = document.getElementById("navClose");

    if (menuToggle && navMenu) {
        menuToggle.addEventListener("click", () => {
            navMenu.classList.add("active");
        });
    }

    if (navClose && navMenu) {
        navClose.addEventListener("click", () => {
            navMenu.classList.remove("active");
        });
    }


    /* ===============================
       CLOSE MENU ON LINK CLICK (MOBILE)
    =============================== */
    if (navMenu) {
        const navLinks = navMenu.querySelectorAll("a");

        navLinks.forEach(link => {
            link.addEventListener("click", () => {
                navMenu.classList.remove("active");
            });
        });
    }

});
