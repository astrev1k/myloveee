@extends('layouts.app')

@section('title', 'A Surprise For You | Airi & Mal')

@section('content')

<section class="surprise-page">

    <p class="eyebrow">A LITTLE SOMETHING FOR YOU</p>

    <h1>One last <span>surprise...</span></h1>

    <p class="intro">
        I have one more thing to tell you, sayang.
        Are you ready?
    </p>

    <div class="gift-container" id="giftContainer">

        <div class="gift-box" id="giftBox">

            <div class="gift-lid"></div>

            <div class="gift-body"></div>

            <div class="gift-ribbon"></div>

            <div class="gift-bow">♡</div>

        </div>

    </div>

    <button class="surprise-button" id="surpriseButton">
        Open your surprise ♡
    </button>

    <div class="hidden-message" id="hiddenMessage">

        <div class="message-card">

            <p class="tiny-label">TO MY FAVOURITE PERSON</p>

            <h2>It's always been <span>you.</span></h2>

            <p class="love-message">
                Out of all the people in this world,
                I'm so glad I found you.
            </p>

            <p class="love-message">
                Thank you for being my happiness,
                my comfort, and my favourite hello.
            </p>

            <p class="love-message">
                I hope that when we're older,
                we'll look back at this little website
                and smile at how young and in love we were.
            </p>

            <p class="love-message">
                No matter how many years pass,
                I hope we never stop choosing each other.
            </p>

            <div class="big-heart">♡</div>

            <h3>Happy 1st Anniversary, Mal.</h3>

            <p class="signature">Forever yours, Airi ♡</p>

        </div>

    </div>

    <div class="final-note" id="finalNote">
        <p>One year down, forever to go.</p>
        <span>01.11.2025 — Always & Forever</span>
    </div>

</section>

@endsection

@push('styles')
<style>
    .surprise-page {
        min-height: 85vh;
        text-align: center;
        padding: 80px 20px;
        overflow: hidden;
    }

    .eyebrow {
        font-size: 10px;
        letter-spacing: 3px;
        color: #a18a70;
        margin-bottom: 20px;
    }

    .surprise-page h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(45px, 8vw, 75px);
        font-weight: 400;
        margin-bottom: 20px;
    }

    .surprise-page h1 span {
        color: #a88b6c;
        font-style: italic;
    }

    .intro {
        color: #8a7867;
        font-size: 14px;
        line-height: 1.9;
        max-width: 400px;
        margin: auto;
    }

    .gift-container {
        width: 220px;
        height: 200px;
        margin: 80px auto 35px;
        position: relative;
    }

    .gift-box {
        width: 180px;
        height: 150px;
        position: absolute;
        bottom: 0;
        left: 20px;
    }

    .gift-body {
        position: absolute;
        bottom: 0;
        width: 180px;
        height: 115px;
        background: #c7a98b;
        border-radius: 3px;
    }

    .gift-lid {
        position: absolute;
        top: 10px;
        left: -10px;
        width: 200px;
        height: 40px;
        background: #b28f70;
        border-radius: 3px;
        z-index: 2;
        transition: transform 0.8s ease;
    }

    .gift-ribbon {
        position: absolute;
        left: 75px;
        bottom: 0;
        width: 30px;
        height: 150px;
        background: #f3e5cf;
        z-index: 3;
    }

    .gift-bow {
        position: absolute;
        top: -15px;
        left: 65px;
        width: 50px;
        height: 50px;
        border-radius: 50%;
        background: #f3e5cf;
        color: #a17d5c;
        display: grid;
        place-items: center;
        font-size: 25px;
        z-index: 4;
    }

    .surprise-button {
        padding: 15px 30px;
        border: 1px solid #b9a48b;
        background: transparent;
        color: #78634f;
        cursor: pointer;
        font-size: 12px;
        letter-spacing: 1px;
        transition: 0.3s;
    }

    .surprise-button:hover {
        background: #78634f;
        color: white;
    }

    /* Gift animation */

    .gift-container.open .gift-lid {
        transform: translateY(-100px) rotate(-15deg);
    }

    .gift-container.open {
        animation: giftBounce 0.8s ease;
    }

    @keyframes giftBounce {
        0%, 100% {
            transform: translateY(0);
        }

        50% {
            transform: translateY(-15px);
        }
    }

    .hidden-message {
        display: none;
        max-width: 650px;
        margin: 60px auto 0;
    }

    .hidden-message.show {
        display: block;
        animation: revealMessage 1s ease both;
    }

    .message-card {
        background: #fffdf9;
        border: 1px solid #e9dfd0;
        padding: 55px 40px;
        box-shadow: 0 15px 40px rgba(100, 75, 50, 0.06);
    }

    .tiny-label {
        font-size: 9px;
        letter-spacing: 3px;
        color: #a18a70;
        margin-bottom: 25px;
    }

    .message-card h2 {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(35px, 6vw, 55px);
        font-weight: 400;
        margin-bottom: 30px;
    }

    .message-card h2 span {
        font-style: italic;
        color: #a88b6c;
    }

    .love-message {
        font-family: 'Cormorant Garamond', serif;
        font-size: 20px;
        line-height: 1.9;
        color: #78634f;
        margin-bottom: 20px;
    }

    .big-heart {
        font-size: 55px;
        color: #b28f70;
        margin: 30px 0;
        animation: heartbeat 1.5s infinite;
    }

    .message-card h3 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 28px;
        font-weight: 500;
    }

    .signature {
        font-family: 'Cormorant Garamond', serif;
        font-size: 24px;
        font-style: italic;
        color: #a18a70;
        margin-top: 25px;
    }

    .final-note {
        display: none;
        margin-top: 40px;
    }

    .final-note.show {
        display: block;
        animation: revealMessage 1s ease both;
    }

    .final-note p {
        font-family: 'Cormorant Garamond', serif;
        font-size: 28px;
        font-style: italic;
        margin-bottom: 10px;
    }

    .final-note span {
        font-size: 10px;
        letter-spacing: 2px;
        color: #a18a70;
    }

    @keyframes revealMessage {
        from {
            opacity: 0;
            transform: translateY(25px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @keyframes heartbeat {
        0%, 100% {
            transform: scale(1);
        }

        50% {
            transform: scale(1.2);
        }
    }

    @media (max-width: 500px) {
        .message-card {
            padding: 40px 22px;
        }

        .love-message {
            font-size: 18px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    const giftContainer = document.getElementById('giftContainer');
    const surpriseButton = document.getElementById('surpriseButton');
    const hiddenMessage = document.getElementById('hiddenMessage');
    const finalNote = document.getElementById('finalNote');

    surpriseButton.addEventListener('click', function () {

        giftContainer.classList.add('open');

        surpriseButton.disabled = true;
        surpriseButton.textContent = 'A little love, just for you ♡';

        setTimeout(function () {
            hiddenMessage.classList.add('show');
            finalNote.classList.add('show');

            hiddenMessage.scrollIntoView({
                behavior: 'smooth',
                block: 'start'
            });

            createHearts();

        }, 900);

    });

    function createHearts() {

        const heartSymbols = ['♡', '♥', 'ღ'];

        for (let i = 0; i < 20; i++) {

            const heart = document.createElement('div');

            heart.textContent =
                heartSymbols[Math.floor(Math.random() * heartSymbols.length)];

            heart.style.position = 'fixed';
            heart.style.left = Math.random() * 100 + 'vw';
            heart.style.bottom = '-30px';
            heart.style.fontSize = (15 + Math.random() * 20) + 'px';
            heart.style.color = '#b28f70';
            heart.style.pointerEvents = 'none';
            heart.style.zIndex = '9999';

            document.body.appendChild(heart);

            const duration = 3000 + Math.random() * 3000;

            heart.animate([
                {
                    transform: 'translateY(0) rotate(0deg)',
                    opacity: 1
                },
                {
                    transform: `translateY(-${window.innerHeight + 100}px) rotate(360deg)`,
                    opacity: 0
                }
            ], {
                duration: duration,
                easing: 'ease-out'
            });

            setTimeout(function () {
                heart.remove();
            }, duration);
        }
    }
</script>
@endpush
