// JavaScript untuk efek transisi halaman
document.addEventListener("DOMContentLoaded", function () {
    const body = document.querySelector("body");
    body.style.opacity = "0";
    setTimeout(() => {
        body.style.transition = "opacity 1s";
        body.style.opacity = "1";
    }, 100);
});

// JavaScript untuk jam real time
function updateClock() {
    const clockElement = document.getElementById("real-time-clock");
    const now = new Date();
    const hours = now.getHours().toString().padStart(2, "0");
    const minutes = now.getMinutes().toString().padStart(2, "0");
    const seconds = now.getSeconds().toString().padStart(2, "0");
    clockElement.textContent = `${hours}:${minutes}:${seconds}`;
}

setInterval(updateClock, 1000);