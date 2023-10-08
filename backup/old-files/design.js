let yPosition = window.scrollY; // get Y position immediately
let prevScroll = yPosition;
let navbarIcon = document.getElementById('navbar-icon');;

let navbarIconClicked = false;
let scrolled = false;

window.addEventListener('scroll', () => {
    scrolled = true;

    const currentScroll = window.scrollY; // get Y position when scrolled
    const isScrollDown = currentScroll < prevScroll; // check if user scrolled down

    if (isScrollDown) {
        // user scrolled down
        document.getElementById("navbar").style.top = "0";
    } else {
        // user scrolled up
        document.getElementById("navbar").style.top = "-85px"; 
        document.getElementById("navbar").style.backgroundColor = "rgba(209, 255, 189, 1)";
    }
    
    prevScroll = currentScroll;
    if (currentScroll == 0) {
        scrolled = false;
        document.getElementById("navbar").style.top = "0";
        document.getElementById("navbar").style.backgroundColor = "rgba(209, 255, 189, 0.2)";
    }
});

navbarIcon.addEventListener('click', function navbarClick() {
    if (!scrolled) {
        if (!navbarIconClicked) {
            document.getElementById("navbar").style.backgroundColor = "rgba(209, 255, 189, 1)";
        } else {
            document.getElementById("navbar").style.backgroundColor = "rgba(209, 255, 189, 0.2)";
        }
    }
    navbarIconClicked = !navbarIconClicked;
});

