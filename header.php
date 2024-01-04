<html lang="en"><head><meta charset="UTF-8"><meta content="width=device-width,initial-scale=1"name="viewport"><title>Document</title></head><body><header><div class="text-light container-fluid header-bg-color"id="header"><div class="align-items-center p-2 row"><div class="col d-lg-block d-md-block d-none col-5"><p class="text-light m-0 fs-4 text-capitalize">Benvenuti<br><span class="fontsize">All'Alltime Vacations Pvt. Ltd</span></p></div><div class="col d-flex col-12 col-md-5 justify-content-center justify-content-md-start"><a href="index.html"><img height="200"src="assets/images/logo.webp"width="600"alt="logo"class="img-fluid logo"></a></div><div class="col d-flex col-6 col-md-2 d-lg-block d-md-block d-none flex-column gap-2"><div class="d-flex gap-2 align-items-center justify-content-center"><img height="40"src="https://img.icons8.com/ios-filled/30/ffffff/apple-phone.png"width="40"><path d="M1.885.511a1.745 1.745 0 0 1 2.61.163L6.29 2.98c.329.423.445.974.315 1.494l-.547 2.19a.678.678 0 0 0 .178.643l2.457 2.457a.678.678 0 0 0 .644.178l2.189-.547a1.745 1.745 0 0 1 1.494.315l2.306 1.794c.829.645.905 1.87.163 2.611l-1.034 1.034c-.74.74-1.846 1.065-2.877.702a18.634 18.634 0 0 1-7.01-4.42 18.634 18.634 0 0 1-4.42-7.009c-.362-1.03-.037-2.137.703-2.877L1.885.511z"fill-rule="evenodd"><p class="text-light m-0">+39 351 8664836</p></div></div></div></div></header></body><script>document.addEventListener("DOMContentLoaded", function() {
        const navbar = document.getElementById("header");
        const banner = document.querySelector(".banner-section");

        // Function to toggle the "scrolled" class based on scroll position
        function toggleNavbarColor() {
            if (window.scrollY > banner.offsetHeight) {
                navbar.classList.add("scrolled");
            } else {
                navbar.classList.remove("scrolled");
            }
        }

        // Attach the event listener to the scroll event
        window.addEventListener("scroll", toggleNavbarColor);
    });</script></html>