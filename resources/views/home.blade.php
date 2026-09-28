@extends('layouts.app')

@section('title', 'Airi & Mal | Our First Anniversary')

@section('content')

<section class="hero">

    <p class="eyebrow">01 NOVEMBER 2025 — FOREVER</p>

    <h1>
        One year of<br>
        <span>loving you.</span>
    </h1>

    <p class="subtitle">
        To my favourite person,<br>
        thank you for making every little moment beautiful.
    </p>

    <div class="countdown">
        <div>
            <span id="days">000</span>
            <small>Days</small>
        </div>

        <div>
            <span id="hours">00</span>
            <small>Hours</small>
        </div>

        <div>
            <span id="minutes">00</span>
            <small>Minutes</small>
        </div>

        <div>
            <span id="seconds">00</span>
            <small>Seconds</small>
        </div>
    </div>

    <a href="{{ route('story') }}" class="btn">
        Explore our story ♡
    </a>

    <div class="heart">♡</div>

</section>

@endsection

@push('styles')
<style>
    .hero {
        min-height: 80vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        text-align: center;
        padding: 60px 20px;
        position: relative;
        overflow: hidden;
    }

    .eyebrow {
        font-size: 11px;
        letter-spacing: 4px;
        color: #9b8065;
        margin-bottom: 25px;
    }

    .hero h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(55px, 9vw, 105px);
        font-weight: 400;
        line-height: 0.95;
        margin-bottom: 30px;
    }

    .hero h1 span {
        font-style: italic;
        color: #a88b6c;
    }

    .subtitle {
        font-size: 14px;
        line-height: 2;
        color: #8a7867;
        margin-bottom: 35px;
    }

    .countdown {
        display: flex;
        gap: 35px;
        margin-bottom: 40px;
    }

    .countdown div {
        display: flex;
        flex-direction: column;
        gap: 8px;
    }

    .countdown span {
        font-family: 'Cormorant Garamond', serif;
        font-size: 35px;
    }

    .countdown small {
        font-size: 10px;
        letter-spacing: 2px;
        color: #9b8065;
        text-transform: uppercase;
    }

    .heart {
        margin-top: 50px;
        font-size: 30px;
        color: #b69a7c;
        animation: heartbeat 1.5s infinite;
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
        .countdown {
            gap: 20px;
        }

        .countdown span {
            font-size: 28px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    const anniversary = new Date('2026-11-01T00:00:00+08:00').getTime();

    function updateCountdown() {
        const now = Date.now();
        const distance = anniversary - now;

        if (distance <= 0) {
            document.querySelector('.countdown').innerHTML =
                '<p>Happy 1st Anniversary, Airi & Mal! ♡</p>';
            return;
        }

        document.getElementById('days').textContent =
            Math.floor(distance / (1000 * 60 * 60 * 24));

        document.getElementById('hours').textContent =
            String(Math.floor((distance / (1000 * 60 * 60)) % 24)).padStart(2, '0');

        document.getElementById('minutes').textContent =
            String(Math.floor((distance / (1000 * 60)) % 60)).padStart(2, '0');

        document.getElementById('seconds').textContent =
            String(Math.floor((distance / 1000) % 60)).padStart(2, '0');
    }

    updateCountdown();
    setInterval(updateCountdown, 1000);
</script>
@endpush
