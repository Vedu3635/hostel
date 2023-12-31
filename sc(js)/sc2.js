document.addEventListener("DOMContentLoaded", function() {
    const scrollToDiv2Button = document.getElementById("scrollToDiv2");
    const homepage1 = document.getElementById("homepage1");

    scrollToDiv2Button.addEventListener("click", function() {
        // Calculate the position of the target div
        const homepage1Position = homepage1.offsetTop;

        // Scroll to the target div
        window.scrollTo({
            top: homepage1Position,
            behavior: "smooth" // Use smooth scrolling for a smoother transition
        });
    });
});
