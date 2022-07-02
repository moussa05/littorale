
<x-front-layout>
        <div class="bloc-1-detail-article mb-5 d-flex flex-column justify-content-center align-items-center">
            <h1 class="mt-5">{{ $publication->titre }}</h1>
            <p>{{ $nomCategorie }} | <i class="bi bi-calendar"></i> {{ $publication->datePublication }} | <i class="bi bi-pen"></i> {{ $nomAuteur }}</p>
        </div>
        <div class="container">
            <div class="mb-5">
                <img style="max-height: 20rem;" class="img-fluid rounded w-100" src="/img/art3.jpg" alt="imageArticle">
            </div>
            <div class="mb-5">
                <p class="lead">
                    {{ $article->description}}
                </p>
            </div>
        </div>
</x-front-layout>
