@extends('layouts.app')

@section('title', 'Our Memories | Airi & Mal')

@section('content')

<section class="memories-hero">
    <p class="eyebrow">LITTLE MOMENTS, BIG MEMORIES</p>

    <h1>Our <span>Memories</span></h1>

    <p>
        Every picture holds a little piece of our story.
        Here are some moments I wish I could relive forever.
    </p>
</section>

<section class="gallery">

    <div class="polaroid" onclick="openPhoto(this)">
        <div class="photo">
            <img src="{{ asset('images/memories/photo1.jpg') }}"
                 alt="Our first memory"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';">

            <div class="photo-placeholder">
                <span>♡</span>
                <small>Our first picture</small>
            </div>
        </div>

        <div class="caption">
            <p>Our first picture ♡</p>
            <small>01 November 2025</small>
        </div>
    </div>

    <div class="polaroid" onclick="openPhoto(this)">
        <div class="photo">
            <img src="{{ asset('images/memories/photo2.jpg') }}"
                 alt="A special moment"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';">

            <div class="photo-placeholder">
                <span>♡</span>
                <small>A special moment</small>
            </div>
        </div>

        <div class="caption">
            <p>My favourite person</p>
            <small>A memory with you</small>
        </div>
    </div>

    <div class="polaroid" onclick="openPhoto(this)">
        <div class="photo">
            <img src="{{ asset('images/memories/photo3.jpg') }}"
                 alt="A happy memory"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';">

            <div class="photo-placeholder">
                <span>♡</span>
                <small>Our happy days</small>
            </div>
        </div>

        <div class="caption">
            <p>Happiness looks like you</p>
            <small>One of my favourite days</small>
        </div>
    </div>

    <div class="polaroid" onclick="openPhoto(this)">
        <div class="photo">
            <img src="{{ asset('images/memories/photo4.jpg') }}"
                 alt="A beautiful memory"
                 onerror="this.style.display='none'; this.nextElementSibling.style.display='grid';">

            <div class="photo-placeholder">
                <span>♡</span>
                <small>Forever us</small>
            </div>
        </div>

        <div class="caption">
            <p>Always you & me</p>
            <small>More memories to come</small>
        </div>
    </div>

</section>

<div class="gallery-end">
    <p>And many more memories to make together...</p>

    <a href="{{ route('letter') }}" class="btn">
        Read My Love Letter ♡
    </a>
</div>

<div class="photo-modal" id="photoModal" onclick="closePhoto()">
    <button class="close-modal" aria-label="Close">&times;</button>
    <img id="modalImage" src="" alt="Memory">
    <p id="modalCaption"></p>
</div>

@endsection

@push('styles')
<style>
    .memories-hero {
        text-align: center;
        padding: 90px 20px 50px;
    }

    .eyebrow {
        font-size: 11px;
        letter-spacing: 3px;
        color: #a18a70;
        margin-bottom: 20px;
    }

    .memories-hero h1 {
        font-family: 'Cormorant Garamond', serif;
        font-size: clamp(48px, 8vw, 80px);
        font-weight: 400;
        margin-bottom: 20px;
    }

    .memories-hero h1 span {
        font-style: italic;
        color: #a88b6c;
    }

    .memories-hero > p:last-child {
        max-width: 430px;
        margin: auto;
        font-size: 14px;
        line-height: 1.9;
        color: #8a7867;
    }

    .gallery {
        max-width: 1000px;
        margin: auto;
        padding: 30px 25px 70px;
        display: grid;
        grid-template-columns: repeat(2, minmax(0, 1fr));
        gap: 45px;
    }

    .polaroid {
        background: #fffdf9;
        padding: 15px 15px 25px;
        box-shadow: 0 8px 25px rgba(80, 60, 40, 0.10);
        cursor: pointer;
        transition: transform 0.3s ease, box-shadow 0.3s ease;
    }

    .polaroid:nth-child(odd) {
        transform: rotate(-2deg);
    }

    .polaroid:nth-child(even) {
        transform: rotate(2deg);
    }

    .polaroid:hover {
        transform: rotate(0deg) translateY(-8px);
        box-shadow: 0 15px 35px rgba(80, 60, 40, 0.15);
    }

    .photo {
        width: 100%;
        aspect-ratio: 4 / 3;
        background: #e9dfd0;
        position: relative;
        overflow: hidden;
    }

    .photo img {
        width: 100%;
        height: 100%;
        object-fit: cover;
    }

    .photo-placeholder {
        position: absolute;
        inset: 0;
        display: grid;
        place-content: center;
        justify-items: center;
        gap: 10px;
        color: #9c8265;
        background: #eee5d8;
    }

    .photo-placeholder span {
        font-size: 40px;
    }

    .photo-placeholder small {
        font-family: 'Cormorant Garamond', serif;
        font-size: 20px;
        font-style: italic;
    }

    .caption {
        text-align: center;
        padding-top: 20px;
    }

    .caption p {
        font-family: 'Cormorant Garamond', serif;
        font-size: 23px;
        font-style: italic;
    }

    .caption small {
        display: block;
        margin-top: 8px;
        font-size: 10px;
        letter-spacing: 1px;
        color: #a18a70;
    }

    .gallery-end {
        text-align: center;
        padding: 0 20px 90px;
    }

    .gallery-end p {
        font-family: 'Cormorant Garamond', serif;
        font-size: 26px;
        font-style: italic;
        margin-bottom: 25px;
    }

    .photo-modal {
        display: none;
        position: fixed;
        inset: 0;
        z-index: 999;
        background: rgba(35, 28, 22, 0.9);
        align-items: center;
        justify-content: center;
        flex-direction: column;
        padding: 30px;
    }

    .photo-modal.active {
        display: flex;
        animation: fadeIn 0.3s ease;
    }

    .photo-modal img {
        max-width: 90%;
        max-height: 75vh;
        object-fit: contain;
        border: 12px solid #fffdf9;
        border-bottom-width: 50px;
    }

    .photo-modal p {
        color: white;
        font-family: 'Cormorant Garamond', serif;
        font-size: 24px;
        margin-top: 20px;
    }

    .close-modal {
        position: absolute;
        top: 20px;
        right: 30px;
        font-size: 40px;
        color: white;
        background: none;
        border: none;
        cursor: pointer;
    }

    @keyframes fadeIn {
        from { opacity: 0; }
        to { opacity: 1; }
    }

    @media (max-width: 600px) {
        .gallery {
            grid-template-columns: 1fr;
            max-width: 420px;
            gap: 35px;
        }
    }
</style>
@endpush

@push('scripts')
<script>
    function openPhoto(card) {
        const img = card.querySelector('.photo img');

        if (!img || !img.complete || img.naturalWidth === 0) {
            return;
        }

        document.getElementById('modalImage').src = img.src;
        document.getElementById('modalCaption').textContent =
            card.querySelector('.caption p').textContent;

        document.getElementById('photoModal').classList.add('active');
    }

    function closePhoto() {
        document.getElementById('photoModal').classList.remove('active');
    }

    document.addEventListener('keydown', function(event) {
        if (event.key === 'Escape') {
            closePhoto();
        }
    });
</script>
@endpush
