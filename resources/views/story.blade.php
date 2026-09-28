@extends('layouts.app')

@section('title', 'Our Story | Airi & Mal')

@section('content')

<section class="story-hero">
    <p class="eyebrow">EVERY LOVE HAS A STORY</p>

    <h1>Our <span>Story</span></h1>

    <p>
        From two strangers to two hearts that found each other.
        This is the beginning of our forever.
    </p>
</section>

<section class="timeline">

    <div class="timeline-item">
        <div class="timeline-dot">♡</div>

        <div class="timeline-card">
            <span class="date">01 NOVEMBER 2025</span>

            <h2>The Day We Became Us</h2>

            <p>
                The day our story officially began.
                One little moment that became the start
                of something so beautiful.
            </p>

            <span class="memory">Our first day together ♡</span>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot">♡</div>

        <div class="timeline-card">
            <span class="date">OUR LITTLE MOMENTS</span>

            <h2>Getting Closer</h2>

            <p>
                Every conversation, every laugh,
                and every little moment made me
                fall for you a little more.
            </p>

            <span class="memory">My favourite person.</span>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot">♡</div>

        <div class="timeline-card">
            <span class="date">OUR BEAUTIFUL MEMORIES</span>

            <h2>Growing Together</h2>

            <p>
                We made memories, learned about each other,
                and created a little world that belongs
                only to us.
            </p>

            <span class="memory">Us, always.</span>
        </div>
    </div>

    <div class="timeline-item">
        <div class="timeline-dot">♡</div>

        <div class="timeline-card">
            <span class="date">01 NOVEMBER 2026</span>

            <h2>Our First Anniversary</h2>

            <p>
                One year of loving you.
                And if I could choose all over again,
                I would still choose you.
            </p>

            <span class="memory">To many more years together ♡</span>
        </div>
    </div>

</section>

<div class="story-end">
    <p>And our story continues...</p>

    <a href="{{ route('memories') }}" class="btn">
        See Our Memories ♡
    </a>
</div>

@endsection

@push('styles')
<style>
    .story-hero {
        text-align: center;
        padding: 90px 20px 60px;
    }

    .eyebrow {
        font-size: 11px;
        letter-spacing: 3px;
        color: #a18a70;
        margin-bottom: 20px;
    }

    .story-hero h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(55px, 8vw, 85px);
        font-weight: 400;
        margin-bottom: 20px;
    }

    .story-hero h1 span {
        font-style: italic;
        color: #a88b6c;
    }

    .story-hero > p:last-child {
        max-width: 430px;
        margin: auto;
        color: #8a7867;
        line-height: 1.9;
        font-size: 14px;
    }

    .timeline {
        max-width: 750px;
        margin: 0 auto;
        padding: 20px 25px 60px;
        position: relative;
    }

    .timeline::before {
        content: '';
        position: absolute;
        top: 0;
        bottom: 0;
        left: 43px;
        width: 1px;
        background: #d9c8b4;
    }

    .timeline-item {
        position: relative;
        padding-left: 65px;
        margin-bottom: 45px;
        animation: fadeUp 0.8s ease both;
    }

    .timeline-dot {
        position: absolute;
        left: 0;
        top: 0;
        width: 37px;
        height: 37px;
        border-radius: 50%;
        background: #e9dfd0;
        color: #8a7054;
        display: grid;
        place-items: center;
        font-size: 18px;
        z-index: 1;
    }

    .timeline-card {
        background: #fffdf9;
        padding: 30px;
        border: 1px solid #e9dfd0;
        box-shadow: 0 10px 30px rgba(100, 75, 50, 0.04);
    }

    .date {
        font-size: 10px;
        letter-spacing: 2px;
        color: #a18a70;
    }

    .timeline-card h2 {
        font-family: 'Cormorant Garamond', serif;
        font-size: 32px;
        font-weight: 500;
        margin: 15px 0;
    }

    .timeline-card p {
        font-size: 14px;
        color: #887766;
        line-height: 1.9;
    }

    .memory {
        display: block;
        margin-top: 20px;
        font-family: 'Cormorant Garamond', serif;
        font-size: 19px;
        font-style: italic;
        color: #a18a70;
    }

    .story-end {
        text-align: center;
        padding: 20px 20px 90px;
    }

    .story-end p {
        font-family: 'Cormorant Garamond', serif;
        font-size: 30px;
        font-style: italic;
        margin-bottom: 25px;
    }

    @keyframes fadeUp {
        from {
            opacity: 0;
            transform: translateY(20px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    @media (max-width: 500px) {
        .timeline-card {
            padding: 22px;
        }

        .timeline-card h2 {
            font-size: 27px;
        }
    }
</style>
@endpush
