// ******* LEFT-SIDEBAR *********
document.addEventListener("DOMContentLoaded", function () {

    const links = [
        { href: "http://45.9.41.41/home", iconClass: ".left-home-icon", anchorClass: ".home-anchor" },
        { href: "http://45.9.41.41/profile", iconClass: ".left-profile-icon", anchorClass: ".profile-anchor" },
        { href: "http://45.9.41.41/explore", iconClass: ".left-explore-icon", anchorClass: ".explore-anchor" }
    ];

    if (role === 'admin') {
        links.push({ href: "http://45.9.41.41/admin", iconClass: ".left-admin-icon", anchorClass: ".admin-anchor" });
    }

    function updateStyles(clickedLink) {
        links.forEach(link => {
            const icon = document.querySelector(link.iconClass);
            const anchor = document.querySelector(link.anchorClass);

            if (link.anchorClass === clickedLink) {
                icon.src = icon.src.replace(".png", "-clicked.png");
                anchor.style.fontWeight = "700";
            } else {
                icon.src = icon.src.replace("-clicked.png", ".png");
                anchor.style.fontWeight = "normal";
            }
        });
    }

    function resetStyles() {
        links.forEach(link => {
            const icon = document.querySelector(link.iconClass);
            const anchor = document.querySelector(link.anchorClass);
            icon.src = icon.src.replace("-clicked.png", ".png");
            anchor.style.fontWeight = "normal";
        });
    }

    links.forEach(link => {
        const anchor = document.querySelector(link.anchorClass);

        anchor.addEventListener("click", function (event) {
            event.preventDefault();
            const clickedLink = link.anchorClass;
            resetStyles();
            updateStyles(clickedLink);
            window.location.href = link.href;
        });
    });

    const currentURL = window.location.href;
    links.forEach(link => {
        if (currentURL === link.href) {
            updateStyles(link.anchorClass);
        }
    });
});

const popoverTriggerList = document.querySelectorAll('[data-bs-toggle="popover"]');
const popoverList = [...popoverTriggerList].map(popoverTriggerEl => new bootstrap.Popover(popoverTriggerEl));