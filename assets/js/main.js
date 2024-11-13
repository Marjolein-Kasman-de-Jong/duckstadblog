import { getCurrentYear } from "./helpers/getCurrentYear.js";

// Insert current year in footer
document.addEventListener("DOMContentLoaded", function() {
    document.getElementById("year").textContent = getCurrentYear();
})