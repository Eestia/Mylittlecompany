@extends("Layouts.app")

@section("title", "home page")

@section("content")

<style>
    .carousel-caption h5,
    .carousel-caption p {
        color: black !important;
        background-color: rgba(235, 197, 170, 0.514);
        padding-left: 10px; 
        border-radius: 20px;
    }
    </style>
{{-- carou: --}}
<div id="carouselExampleCaptions" class="carousel slide" style="margin-bottom: 90px;">
    <div class="carousel-indicators">
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
        <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
    </div>
    <div class="carousel-inner">
        <div class="carousel-item active">
            <img src="https://media.discordapp.net/attachments/763103053003882526/1405258415630057492/raw.png?ex=689e2c62&is=689cdae2&hm=4737189ef902d76e84f0e5095d9a2420200da4a9c4fd3b779b17aee751a0322b&=&format=webp&quality=lossless&width=1240&height=826" class="d-block w-100" style="height:550px; object-fit:cover;" alt="company-table">
            <div class="carousel-caption d-none d-md-block">
                <h5>Nos bureaux</h5>
                <p>Chaque employé a son propre espace de travail spacieux et ordonné.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://media.discordapp.net/attachments/763103053003882526/1405258460643201166/raw.png?ex=689e2c6d&is=689cdaed&hm=7a66e0937b3be9e2459cad4ade8e8865d581ffe6f56560de338176398d3e2dd0&=&format=webp&quality=lossless&width=1240&height=826" class="d-block w-100" style="height:550px; object-fit:cover;" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Nos espaces détente</h5>
                <p>Nous mettons un point d'honneur sur votre bien-être.</p>
            </div>
        </div>
        <div class="carousel-item">
            <img src="https://media.discordapp.net/attachments/763103053003882526/1405258500182900927/raw.png?ex=689e2c76&is=689cdaf6&hm=6ac3fc308effb49cff5dfe96a66b5dec165c27d3ee839d8a4898f577a2a33e90&=&format=webp&quality=lossless&width=1240&height=826" class="d-block w-100" style="height:550px; object-fit:cover;" alt="...">
            <div class="carousel-caption d-none d-md-block">
                <h5>Atteindre ses objectifs</h5>
                <p>Ici, nous travaillons dur pour obtenir toujours plus de résultats positifs.</p>
            </div>
        </div>
    </div>
    <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="prev">
        <span class="carousel-control-prev-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Previous</span>
    </button>
    <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide="next">
        <span class="carousel-control-next-icon" aria-hidden="true"></span>
        <span class="visually-hidden">Next</span>
    </button>
</div>
{{-- 3 sections --}}
<div class="d-flex justify-content-center">
    <div class="card mb-3" style="max-width: 1040px;">
        <div class="row g-0">
            <div class="col-md-4">
                <img src="https://media.discordapp.net/attachments/892785229356482610/1405234210343616633/1755104144914.png?ex=689e15d7&is=689cc457&hm=1653ca0186c5ef2d385ba78b5f48488f6c3d072c249f89d771d630e03433c4f8&=&format=webp&quality=lossless&width=800&height=800" class="img-fluid rounded-start" alt="...">
            </div>
            <div class="col-md-8">
                <div class="card-body">
                    <h5 class="card-title" style="margin-bottom: 20px; margin-top: 20px;">Notre compagnie</h5>
                    <p class="card-text">Depuis sa création, notre compagnie s'engage à fournir des services de haute qualité tout en cultivant un environnement de travail épanouissant pour ses employés.  
                        Chaque membre de notre équipe bénéficie d'espaces de travail modernes et confortables, propices à la créativité et à la collaboration.  
                        Nous croyons fermement à l'innovation, à l'esprit d'équipe et à l'excellence dans tout ce que nous entreprenons.  
                        Notre objectif est de dépasser les attentes de nos clients tout en favorisant un développement durable et responsable de notre activité.  
                        Rejoindre notre compagnie, c'est participer à une aventure où performance et bien-être vont de pair.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- 2eme card --}}
    <div class="d-flex justify-content-center">
        <div class="card mb-3" style="max-width: 1040px;">
            <div class="row g-0">
                <div class="col-md-4">
                    <img src="https://media.discordapp.net/attachments/892785229356482610/1405234209441972284/1755104222302.png?ex=689e15d7&is=689cc457&hm=4b4bbe1ecb4ea7cf41a6b064634243fa50c3efea12b8bfcf0bed4c82503b18d0&=&format=webp&quality=lossless&width=800&height=800" class="img-fluid rounded-start" alt="...">
                </div>
                <div class="col-md-8">
                    <div class="card-body">
                        <h5 class="card-title" style="margin-bottom: 20px; margin-top: 20px;">Nos espaces détente</h5>
                        <p class="card-text">Chez notre compagnie, nous savons que le bien-être des employés est essentiel pour la productivité et la créativité.  
                            C’est pourquoi nous avons aménagé des espaces détente modernes et accueillants, où chacun peut se relaxer et se ressourcer tout au long de la journée.  
                            Ces zones sont pensées pour favoriser les échanges entre collègues, stimuler la créativité et réduire le stress.  
                            Qu’il s’agisse de coins lecture, de salles de jeux ou de zones calmes pour se concentrer, chaque espace contribue à créer un équilibre parfait entre travail et relaxation.  
                            Nous croyons qu’un employé épanoui est la clé d’une entreprise performante et innovante.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        {{-- 3eme card --}}
        <div class="d-flex justify-content-center">
            <div class="card mb-3" style="max-width: 1040px;">
                <div class="row g-0">
                    <div class="col-md-4">
                        <img src="https://media.discordapp.net/attachments/892785229356482610/1405234208779276339/1755104283426.png?ex=689e15d7&is=689cc457&hm=40fed52e765aed849d6facf2fa1d1ebcc0c74bec53bd02115060fcad015c8f08&=&format=webp&quality=lossless&width=800&height=800" class="img-fluid rounded-start" alt="...">
                    </div>
                    <div class="col-md-8">
                        <div class="card-body">
                            <h5 class="card-title" style="margin-bottom: 20px; margin-top: 20px;">Atteindre ses objectifs</h5>
                            <p class="card-text">Chez notre compagnie, nous encourageons chaque employé à se fixer des objectifs ambitieux et à progresser constamment.  
                                Nous mettons à disposition des outils et un accompagnement adaptés pour permettre à chacun d’atteindre son plein potentiel.  
                                La performance individuelle et collective est valorisée, tout en respectant un équilibre sain entre vie professionnelle et personnelle.  
                                Chaque succès est célébré et chaque apprentissage est reconnu, afin de créer une culture d’excellence et de motivation durable.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            
@endsection