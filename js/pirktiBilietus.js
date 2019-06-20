const standart = document.querySelector('.standart');
const vip = document.querySelector('.vip');

classChecker = () => {
  if (standart.classList.contains('display-none')) {
    standart.classList.remove('display-none');
    vip.classList.add('display-none');
  } else if (vip.classList.contains('display-none')) {
    standart.classList.add('display-none');
    vip.classList.remove('display-none');
  } else {
    console.log('there is no class');
  }
};

document.querySelector('.arrow-left').addEventListener('click', () => {
  classChecker();
});

document.querySelector('.arrow-right').addEventListener('click', () => {
  classChecker();
});

function startTimer(duration, display) {
  let timer = duration,
    hours,
    minutes,
    seconds;
  setInterval(function() {
    hours = parseInt(timer / 60, 10);
    minutes = parseInt(timer / 60, 10);
    seconds = parseInt(timer % 60, 10);

    hours = hours < 10 ? '0' + hours : hours;
    minutes = minutes < 10 ? '0' + minutes : minutes;
    seconds = seconds < 10 ? '0' + seconds : seconds;

    display.textContent = `${hours}:${minutes}:${seconds}`;

    if (--timer < 0) {
      timer = duration;
    }
  }, 1000);
}

window.onload = function() {
  let nodeList = [];
  let clock = 60 * 3;
  document.querySelectorAll('.timeClock').forEach(el => nodeList.push(el));
  console.log(nodeList);
  startTimer(clock, nodeList[0]);
  startTimer(clock, nodeList[1]);
};
