document.addEventListener("DOMContentLoaded", () => {
    const c = document.querySelector(".snow-container"), p = 0.1, f = 1.25, pause = true, max = 80, flakes = [];
    let i, a = true;

    const r = s => {
        const z = Math.random() * 5 + 1, vw = innerWidth - z, vh = innerHeight;

        s.style = `width:${z}px;height:${z}px;left:${Math.random() * vw}px;top:-${z}px;animation-duration:${(Math.random() * 3 + 2) / f}s;animation-timing-function:linear;animation-name:${Math.random() < 0.5 ? "fall" : "diagonalfall"}`;

        setTimeout(() => parseInt(s.style.top) < vh ? r(s) : s.remove(), parseFloat(s.style.animationDuration) * 1e3);
    };

    const cr = () => flakes.length < max && (flakes.push(c.appendChild(Object.assign(document.createElement("div"), { className: "snowflake absolute bg-white rounded-full opacity-80 pointer-events-none" }))), r(flakes[flakes.length - 1]));

    const g = () => {
        const n = Math.ceil(innerWidth * innerHeight / 1e3) * p, t = 5e3 / n;
        clearInterval(i);
        i = setInterval(() => (a && flakes.length < max) && requestAnimationFrame(cr), t);
    };

    const v = () => pause && (a = !document.hidden) ? g() : clearInterval(i);

    g();

    addEventListener("resize", () => (clearInterval(i), setTimeout(g, 1e3)));
    addEventListener("visibilitychange", v);
});

window.setRemoveSanta = () => {
    document.querySelectorAll('.santatop, .senta-cap-open').forEach(e => e.classList.add('!hidden'));
    document.querySelectorAll('.santa-cap').forEach(e => e.classList.remove('!hidden'));
};
