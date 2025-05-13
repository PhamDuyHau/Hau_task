$(document).ready(function () {
    // Initialize Slick slider with responsive settings
    $('.slick-slider').slick({
        infinite: true,
        slidesToShow: 4,  // Show 4 slides on desktop
        slidesToScroll: 1,
        dots: true,
        arrows: true,
        prevArrow: '<button type="button" class="slick-prev"></button>',
        nextArrow: '<button type="button" class="slick-next"></button>',
        responsive: [
            {
                breakpoint: 1025, // For tablet and below
                settings: {
                    slidesToShow: 3, // Show 3 slides on tablet
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: true,
                }
            },
            {
                breakpoint: 769, // For mobile and below
                settings: {
                    slidesToShow: 1, // Show 1 slide on mobile
                    slidesToScroll: 1,
                    infinite: true,
                    dots: true,
                    arrows: true,
                }
            }
        ]
    });

    // Inject custom styles for Slick navigation
    const customStyles = `
        .slick-prev, .slick-next {
            width: 24px;
            height: 20px;
            font-size: 24px;
            z-index: 10;
        }
        .slick-prev:before, .slick-next:before {
            font-size: 30px;
            color: black;
        }
        .slick-dots li button:before {
            font-size: 18px;
            color: #333;
        }
    `;
    $('<style>').text(customStyles).appendTo('head');



    // Handle bottom navbar dropdown toggle for mobile
    const navItems = document.querySelectorAll('.bottom-navbar li');

    navItems.forEach(function (item) {
        item.addEventListener('click', function (e) {
            if (window.innerWidth <= 576) { // Mobile size
                e.preventDefault();
                
                // Close all other dropdowns first
                document.querySelectorAll('.bottom-navbar li.open').forEach(function (openItem) {
                    if (openItem !== item) {
                        openItem.classList.remove('open');
                    }
                });

                // Toggle the clicked item
                item.classList.toggle('open');
            }
        });
    });

    // Close dropdowns when clicking outside
    document.addEventListener('click', function (e) {
        if (window.innerWidth <= 576) {
            const nav = document.querySelector('.bottom-navbar');
            const isClickInside = e.target.closest('.bottom-navbar') || e.target.closest('.mobile-menu-toggle');
            if (!isClickInside) {
                document.querySelectorAll('.bottom-navbar li.open').forEach(el => el.classList.remove('open'));
            }
        }
    });

    // Mobile menu toggle for the bottom navbar
    const hamburgerIcon = document.querySelector('.mobile-menu-toggle');
    const navbarWrapper = document.querySelector('.bottom-navbar-wrapper');

    if (hamburgerIcon) {
        hamburgerIcon.addEventListener('click', function () {
            navbarWrapper.classList.toggle('active');
        });
    }
});
