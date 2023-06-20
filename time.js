let timeRef = Date.now();
let timewatching = false;
let accumulated = 0;

function start() {
    timewatching = true;
}
function pause() {
    timewatching = false
}
function restart() {
    accumulated = 0;
}
setInterval(() => {
    let time = document.getElementById("time");
    if (timewatching) {
    accumulated += Date.now() - timeRef;
    }
    timeRef = Date.now();
    time.innerHTML = formatMS(accumulated);
    }, 1000 / 60);
function formatMS(time_ms) {
    let MS = time_ms % 1000;
    let St = Math.floor(((time_ms - MS) / 1000));
    let S = St%60;
    let M = Math.floor((St / 60) % 60);
    let H = Math.floor((St/60/60));
    Number.prototype.zeros = function (n) {
        return (this + "").padStart(n, 0);
    }
    return H.zeros(2) + ":" + M.zeros(2) + ":" + S.zeros(2) + "." + MS.zeros(3);
}