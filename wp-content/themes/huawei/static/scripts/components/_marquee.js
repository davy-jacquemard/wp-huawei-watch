
const $scrollingText = document.querySelector(".js-marquee");

const thresholdBase = window.innerHeight;

let translateRatio = 1;

let containerDistance = 0;

if ($scrollingText) {
    window.addEventListener("scroll", onScroll);

    function onScroll() {
        const containerTop = $scrollingText.getBoundingClientRect().top;

        const containerStartThreshold = containerTop - thresholdBase;

        containerDistance = containerStartThreshold;


        if (containerDistance < window.innerHeight * -1) {
            containerDistance = $scrollingText.offsetHeight * -1;
        } else if (containerDistance > 0) {
            containerDistance = 0;
        }

    }

}


let lerpRatio = 0.08;
let distanceLerp = 0;
let targetLerp = 0;

function applyTranslateLerp(containerDistance) {
    const offsetX = containerDistance * 1 * translateRatio;
    targetLerp = offsetX;
    distanceLerp += (targetLerp - distanceLerp) * lerpRatio;
    $scrollingText.style.transform = "translateX(" + distanceLerp + "px)";
}


function onUpdate() {
    applyTranslateLerp(containerDistance);
    requestAnimationFrame(onUpdate);
}

if ($scrollingText) {
    onUpdate();
}


