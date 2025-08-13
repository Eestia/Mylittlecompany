<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    <style>
    .carousel-caption h5,
    .carousel-caption p {
      color: black !important;
      background-color: rgba(235, 197, 170, 0.514);
      padding-left: 10px; 
      border-radius: 20px;
    }
  </style>
    @vite(["resources/css/app.css","resources/js/app.js"])
</head>
<body>
    <nav class="navbar navbar-expand-lg bg-body-tertiary">
  <div class="container-fluid">
    <a class="navbar-brand" href="#">My little company</a>
    <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
        <li class="nav-item">
          <a class="nav-link" href="/home">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="#">Link</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
{{-- carou: --}}
<div id="carouselExampleCaptions" class="carousel slide" style="margin-bottom: 90px;">
  <div class="carousel-indicators">
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="0" class="active" aria-current="true" aria-label="Slide 1"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="1" aria-label="Slide 2"></button>
    <button type="button" data-bs-target="#carouselExampleCaptions" data-bs-slide-to="2" aria-label="Slide 3"></button>
  </div>
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img src="https://sdmntpritalynorth.oaiusercontent.com/files/00000000-618c-6246-bf23-c9684c921a26/raw?se=2025-08-13T17%3A23%3A29Z&sp=r&sv=2024-08-04&sr=b&scid=99fe8d13-1a28-5e34-84b1-545b3857396a&skoid=82a3371f-2f6c-4f81-8a78-2701b362559b&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-08-13T05%3A07%3A55Z&ske=2025-08-14T05%3A07%3A55Z&sks=b&skv=2024-08-04&sig=gN3WIFda%2BzXieakTCImiY7u0LVvE1Fgo6wzzbj9E5sk%3D" class="d-block w-100" style="height:550px; object-fit:cover;" alt="company-table">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nos bureaux</h5>
        <p>Chaque employé a son propre espace de travail spacieux et ordonné.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://sdmntprnortheu.oaiusercontent.com/files/00000000-6ef8-61f4-9feb-9f6dfb41d6cd/raw?se=2025-08-13T17%3A28%3A27Z&sp=r&sv=2024-08-04&sr=b&scid=ad18e7d5-e7a6-53dc-9351-e70425e1cd72&skoid=82a3371f-2f6c-4f81-8a78-2701b362559b&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-08-13T03%3A36%3A50Z&ske=2025-08-14T03%3A36%3A50Z&sks=b&skv=2024-08-04&sig=rnujUH8TUc%2B1aESKp1Xe805Q406dP14ei5S5SgKvIhw%3D" class="d-block w-100" style="height:550px; object-fit:cover;" alt="...">
      <div class="carousel-caption d-none d-md-block">
        <h5>Nos espaces détente</h5>
        <p>Nous mettons un point d'honneur sur votre bien-être.</p>
      </div>
    </div>
    <div class="carousel-item">
      <img src="https://sdmntprnortheu.oaiusercontent.com/files/00000000-6d34-61f4-b72b-c86487d40ee1/raw?se=2025-08-13T17%3A34%3A13Z&sp=r&sv=2024-08-04&sr=b&scid=ff8f8f39-4c89-5317-b654-07491d5b207d&skoid=82a3371f-2f6c-4f81-8a78-2701b362559b&sktid=a48cca56-e6da-484e-a814-9c849652bcb3&skt=2025-08-13T08%3A33%3A02Z&ske=2025-08-14T08%3A33%3A02Z&sks=b&skv=2024-08-04&sig=5roYbWZQilux930rAshjnvDW78oP79UHP1SvR52WCeU%3D" class="d-block w-100" style="height:550px; object-fit:cover;" alt="...">
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

</body>
</html>