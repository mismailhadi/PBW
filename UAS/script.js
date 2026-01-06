const tanggalBalapan = new Date("Nov 10, 2025 14:00:00").getTime();
const elHari = document.getElementById("hari");
const elJam = document.getElementById("jam");
const elMenit = document.getElementById("menit");

const interval = setInterval(function() {
    const sekarang = new Date().getTime();
    const selisih = tanggalBalapan - sekarang;

    if (selisih > 0) {
        const hari = Math.floor(selisih / (1000 * 60 * 60 * 24));
        const jam = Math.floor((selisih % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const menit = Math.floor((selisih % (1000 * 60 * 60)) / (1000 * 60));

        if(elHari) elHari.innerHTML = hari < 10 ? `0${hari}` : hari;
        if(elJam) elJam.innerHTML = jam < 10 ? `0${jam}` : jam;
        if(elMenit) elMenit.innerHTML = menit < 10 ? `0${menit}` : menit;
    }
}, 1000);

const searchInput = document.getElementById("driver-search");
if (searchInput) {
    searchInput.addEventListener("keyup", function() {
        const filter = searchInput.value.toLowerCase();
        const cards = document.querySelectorAll(".card");
        cards.forEach(card => {
            const name = card.querySelector("h2").innerText.toLowerCase();
            card.style.display = name.includes(filter) ? "block" : "none";
        });
    });
}
const targetDate = new Date("Nov 10, 2025 14:00:00").getTime();

const countdownInterval = setInterval(function() {
    const now = new Date().getTime();
    const distance = targetDate - now;

    if (distance > 0) {
        const days = Math.floor(distance / (1000 * 60 * 60 * 24));
        const hours = Math.floor((distance % (1000 * 60 * 60 * 24)) / (1000 * 60 * 60));
        const minutes = Math.floor((distance % (1000 * 60 * 60)) / (1000 * 60));

        if(document.getElementById("hari")) document.getElementById("hari").innerHTML = days < 10 ? "0" + days : days;
        if(document.getElementById("jam")) document.getElementById("jam").innerHTML = hours < 10 ? "0" + hours : hours;
        if(document.getElementById("menit")) document.getElementById("menit").innerHTML = minutes < 10 ? "0" + minutes : minutes;
    } else {
        clearInterval(countdownInterval);
        if(document.getElementById("timer")) document.getElementById("timer").innerHTML = "<h4 style='color:var(--f1-red)'>SEASON 2025 SELESAI.</h4>";
    }
}, 1000);