@extends('layouts.app')

@section('title', 'Love Letter | Airi & Mal')

@section('content')

<section class="letter-page">

    <p class="eyebrow">A LITTLE LETTER FROM ME TO YOU</p>

    <h1>To my <span>favourite person,</span></h1>

    <p class="intro">
        I wrote something for you.
        Tap the envelope to open it.
    </p>

    <div class="envelope-wrapper" id="envelopeWrapper">

        <div class="envelope" id="envelope">

            <div class="envelope-back"></div>

            <div class="letter-paper" id="letterPaper">

                <p class="letter-date">01 NOVEMBER 2026</p>

                <h2>My dearest Mal,</h2>

                <div class="letter-content">

                    <p>
                        Happy first anniversary, sayang. ♡
                    </p>

                    <p>
                        I still can't believe that it's been a whole year
                        since we became us. One year of laughter,
                        little moments, silly conversations,
                        and memories that I will always keep close to my heart.
                    </p>

                    <p>
                        Thank you for being part of my life.
                        Thank you for making ordinary days feel special
                        just by being there.
                    </p>

                    <p>
                        I know that we're not perfect, and life won't
                        always be easy. But I hope we keep choosing
                        each other, learning about each other,
                        and growing together.
                    </p>

                    <p>
                        If I could go back to the day we first became
                        a couple, I would still choose you.
                        A thousand times over, I would choose you.
                    </p>

                    <p>
                        Here's to our first year, and to all the
                        beautiful years waiting for us.
                    </p>

                    <p class="letter-ending">
                        I love you, always. ♡
                    </p>

                    <p class="signature">
                        Forever yours,<br>
                        <span>Airi</span>
                    </p>

                </div>

            </div>

            <div class="envelope-flap"></div>

            <div class="envelope-front"></div>

            <div class="wax-seal">A ♡ M</div>

        </div>

    </div>

    <button class="open-button" id="openButton">
        Open my letter ♡
    </button>

    <p class="hint" id="hint">
        A little piece of my heart, just for you.
    </p>

    <button class="close-button" id="closeButton">
        Close letter
    </button>

</section>

@endsection

@push('styles')
<style>
    .letter-page {
        min-height: 85vh;
        padding: 80px 20px;
        text-align: center;
        overflow: hidden;
    }

    .eyebrow {
        font-size: 10px;
        letter-spacing: 3px;
        color: #a18a70;
        margin-bottom: 20px;
    }

    .letter-page h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(42px, 7vw, 72px);
        font-weight: 400;
        margin-bottom: 20px;
    }

    .letter-page h1 span {
        font-style: italic;
        color: #a88b6c;
    }

    .intro {
        font-size: 13px;
        color: #8a7867;
        line-height: 1.8;
    }

    .envelope-wrapper {
        width: 320px;
        height: 220px;
        margin: 100px auto 35px;
        perspective: 1200px;
        position: relative;
    }

    .envelope {
        width: 100%;
        height: 100%;
        position: relative;
        transform-style: preserve-3d;
    }

    .envelope-back {
        position: absolute;
        inset: 0;
        background: #d8c5ac;
        border-radius: 4px;
    }

    .letter-paper {
        position: absolute;
        left: 5%;
        width: 90%;
        height: 90%;
        bottom: 5%;
        background: #fffdf7;
        padding: 25px;
        text-align: left;
        overflow: hidden;
        z-index: 2;
        transition: transform 1s ease, height 1s ease;
        box-shadow: 0 0 15px rgba(70, 50, 30, 0.1);
    }

    .letter-date {
        font-size: 9px;
        letter-spacing: 2px;
        color: #a18a70;
        text-align: center;
        margin-bottom: 20px;
    }

    .letter-paper h2 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 25px;
        font-weight: 500;
        margin-bottom: 15px;
    }

    .letter-content {
        font-family: 'Cormorant Garamond', serif;
        font-size: 16px;
        line-height: 1.8;
        color: #665444;
    }

    .letter-content p {
        margin-bottom: 15px;
    }

    .letter-ending {
        font-style: italic;
        font-size: 19px;
    }

    .signature {
        text-align: right;
        margin-top: 25px;
    }

    .signature span {
        font-family: 'Cormorant Garamond', serif;
        font-size: 28px;
        font-style: italic;
    }

    .envelope-flap {
        position: absolute;
        inset: 0;
        background: #cdb69a;
        clip-path: polygon(0 0, 100% 0, 50% 60%);
        transform-origin: top;
        transition: transform 0.8s ease;
        z-index: 5;
    }

    .envelope-front {
        position: absolute;
        inset: 0;
        background: #e5d5bf;
        clip-path: polygon(0 0, 50% 55%, 100% 0, 100% 100%, 0 100%);
        z-index: 4;
    }

    .wax-seal {
        position: absolute;
        top: 45%;
        left: 50%;
        transform: translate(-50%, -50%);
        width: 55px;
        height: 55px;
        background: #a67c62;
        color: #fff5e8;
        border-radius: 50%;
        display: grid;
        place-items: center;
        font-family: 'Cormorant Garamond', serif;
        font-size: 15px;
        z-index: 6;
        transition: opacity 0.4s ease;
    }

    .open-button,
    .close-button {
        padding: 14px 30px;
        border: 1px solid #b9a48b;
        background: transparent;
        color: #78634f;
        cursor: pointer;
        font-family: 'DM Sans', sans-serif;
        font-size: 12px;
        letter-spacing: 1px;
        transition: 0.3s;
    }

    .open-button:hover,
    .close-button:hover {
        background: #78634f;
        color: white;
    }

    .hint {
        margin-top: 25px;
        font-family: 'Cormorant Garamond', serif;
        font-size: 18px;
        font-style: italic;
        color: #a18a70;
    }

    .close-button {
        display: none;
        margin: 20px auto 0;
    }

    /* Open animation */

    .envelope-wrapper.open {
        height: 600px;
        margin-bottom: 20px;
    }

    .envelope-wrapper.open .letter-paper {
        height: 560px;
        bottom: 0;
        transform: translateY(-100px);
        overflow-y: auto;
        z-index: 7;
        transition-delay: 0.5s;
    }

    .envelope-wrapper.open .envelope-flap {
        transform: rotateX(180deg);
        z-index: 1;
    }

    .envelope-wrapper.open .wax-seal {
        opacity: 0;
        pointer-events: none;
    }

    .envelope-wrapper.open .envelope-front {
        opacity: 0.1;
    }

    .envelope-wrapper.open .envelope-back {
        opacity: 0.2;
    }

    @media (max-width: 500px) {
        .envelope-wrapper {
            width: 280px;
        }

        .envelope-wrapper.open {
            height: 650px;
        }

        .envelope-wrapper.open .letter-paper {
            height: 610px;
            transform: translateY(-80px);
        }
    }
</style>
@endpush

@push('scripts')
<script>
    const wrapper = document.getElementById('envelopeWrapper');
    const openButton = document.getElementById('openButton');
    const closeButton = document.getElementById('closeButton');
    const hint = document.getElementById('hint');

    openButton.addEventListener('click', function () {
        wrapper.classList.add('open');

        openButton.style.display = 'none';
        closeButton.style.display = 'inline-block';

        hint.textContent = 'Every word comes straight from my heart. ♡';
    });

    closeButton.addEventListener('click', function () {
        wrapper.classList.remove('open');

        openButton.style.display = 'inline-block';
        closeButton.style.display = 'none';

        hint.textContent = 'A little piece of my heart, just for you.';
    });
</script>
@endpush
