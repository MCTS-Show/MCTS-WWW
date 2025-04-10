let hour = 18; // 18:00
let minutes = 0;
let day = 31; // 31st
let month = 5; // may
let year = 2025; // 2025
const target = new Date(year, month - 1, day, hour, minutes);
const countdown_top = document.getElementById('countdown_top');
const countdown = document.getElementById('countdown');

function update() {
    const now = new Date();
    let diff = target - now;

    if (diff <= 1000) {
        countdown_top.innerHTML = "MCTS 4 WŁAŚNIE TRWA!";
        countdown.innerHTML = "";
        return;
    }

    const days = Math.floor(diff / 86400000);
    diff %= 86400000;
    const hours = Math.floor(diff / 3600000);
    diff %= 3600000;
    const minutes = Math.floor(diff / 60000);
    diff %= 60000;
    const seconds = Math.floor(diff / 1000);

    let content = '';

    if(days > 0) content += `${days} d `;
    if(days > 0 || hours > 0) content += `${hours} h `;
    if(days > 0 || hours > 0 || minutes > 0) content += `${minutes} m `;
    if(days > 0 || hours > 0 || minutes > 0 || seconds > 0) content += `${seconds} s`;

    countdown.innerHTML = content;
}

setInterval(update, 1000);
update();