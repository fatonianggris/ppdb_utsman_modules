<!doctype html>
<title>Site Maintenance</title>
<link href="https://fonts.googleapis.com/css?family=Open+Sans:300,400,700" rel="stylesheet">
<style>
html,
body {
    padding: 0;
    margin: 0;
    width: 100%;
    height: 100%;
}

* {
    box-sizing: border-box;
}

.blink_print {
    animation: blinker 2s linear infinite;
}

@keyframes blinker {
    50% {
        opacity: 0;
    }
}

body {
    text-align: center;
    padding: 0;
    background: #d6433b;
    color: #fff;
    font-family: Open Sans;
}

h1 {
    font-size: 50px;
    font-weight: 700;
    text-align: center;
}

body {
    font-family: Open Sans;
    font-weight: 100;
    font-size: 20px;
    color: #fff;
    text-align: center;
    display: -webkit-box;
    display: -ms-flexbox;
    display: flex;
    -webkit-box-pack: center;
    -ms-flex-pack: center;
    justify-content: center;
    -webkit-box-align: center;
    -ms-flex-align: center;
    align-items: center;
}

article {
    display: block;
    width: 1000px;
    padding: 50px;
    margin: 0 auto;
}

a {
    color: #fff;
    font-weight: bold;
}

a:hover {
    text-decoration: none;
}

svg {
    width: 170px;
}

.countdown {
    width: 100%;
    height: 100%;
    background-color: fade-out(#000, .2);
    font-weight: 600;
    color: #e2e2e2;
}

.title-big {
    font-size: 3em;
    font-weight: 400;
}

.timer-number {
    font-size: 4em;
    position: relative;

    &:not(first-child) {
        padding-left: .5em;
    }
}

@media (min-width: 960px) {
    .countdown {
        font-size: 20px;
    }

    .breaker {
        display: none;
    }
}
</style>

<article>
    <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 202.24 202.24">
        <defs>
            <style>
            .cls-1 {
                fill: #fff;
            }
            </style>
        </defs>
        <title>Asset 3</title>
        <g id="Layer_2" data-name="Layer 2">
            <g id="Capa_1" data-name="Capa 1">
                <path class="cls-1"
                    d="M101.12,0A101.12,101.12,0,1,0,202.24,101.12,101.12,101.12,0,0,0,101.12,0ZM159,148.76H43.28a11.57,11.57,0,0,1-10-17.34L91.09,31.16a11.57,11.57,0,0,1,20.06,0L169,131.43a11.57,11.57,0,0,1-10,17.34Z" />
                <path class="cls-1"
                    d="M101.12,36.93h0L43.27,137.21H159L101.13,36.94Zm0,88.7a7.71,7.71,0,1,1,7.71-7.71A7.71,7.71,0,0,1,101.12,125.63Zm7.71-50.13a7.56,7.56,0,0,1-.11,1.3l-3.8,22.49a3.86,3.86,0,0,1-7.61,0l-3.8-22.49a8,8,0,0,1-.11-1.3,7.71,7.71,0,1,1,15.43,0Z" />
            </g>
        </g>
    </svg>
    <h1 class="blink_print">WE&rsquo;LL BE BACK SOON!</h1>
    <div id="timer" class="countdown">
        <span class="timer-number" id="days"></span>
        <span class="timer-unit">days</span>
        <span class="timer-number" id="hours"></span>
        <span class="timer-unit">hours</span>
        <br class="breaker" />
        <span class="timer-number" id="minutes"></span>
        <span class="timer-unit">minutes</span>
        <span class="timer-number" id="seconds"></span>
        <span class="timer-unit">seconds</span>
    </div>
    <div>
		<?php var_dump($info);exit; ?>
        <p>Sorry for the inconvenience. We&rsquo;re performing some maintenance at the moment. If you need to you can
            always call IT Dev for updates, otherwise we&rsquo;ll be back
            up shortly!</p>
        <p>&mdash; <b>SEKOLAH UTSMAN DEV</b> &mdash;</p>
    </div>
</article>
<script>
let CountDownTimer = (dt, id) => {
    let end = new Date(dt);

    let _second = 1000;
    let _minute = _second * 60;
    let _hour = _minute * 60;
    let _day = _hour * 24;
    let timer;

    let showRemaining = () => {
        let now = new Date();
        let distance = end - now;
        if (distance < 0) {
            clearInterval(timer);
            document.getElementById(id).innerHTML = 'WE ARE HERE!';
            return;
        }
        let days = Math.floor(distance / _day);
        let hours = Math.floor((distance % _day) / _hour);
        let minutes = Math.floor((distance % _hour) / _minute);
        let seconds = Math.floor((distance % _minute) / _second);
        document.getElementById('days').innerHTML = days;
        document.getElementById('hours').innerHTML = hours;
        document.getElementById('minutes').innerHTML = minutes;
        document.getElementById('seconds').innerHTML = seconds;
    }

    timer = setInterval(showRemaining, 1000);
};

// Calculate the date 2 days from now
let now = new Date();
let twoDaysLater = new Date(now.getTime() + 1 * 24 * 60 * 60 * 1000);

// Start the countdown timer
CountDownTimer(twoDaysLater, 'timer');
</script>
