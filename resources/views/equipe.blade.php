@extends("Layouts.app")

@section("title", "equipe page")

@section("content")
    <h1>Notre équipe</h1>
    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
        <div class="card" style="width: 18rem;">
            <img src="https://media.discordapp.net/attachments/763103053003882526/1405264619953586286/IMG_20250813_205940.png?ex=689e3229&is=689ce0a9&hm=dee388698a7b7e43c6e4fc821847d935884cf03e32344fcab043128c672cf708&=&format=webp&quality=lossless&width=663&height=663" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Nathalie</h5>
                <h5>Experte en communication</h5>
                <p class="card-text">Nathalie est notre experte en communication. Elle adore créer des campagnes créatives et renforcer les liens avec nos clients.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://media.discordapp.net/attachments/763103053003882526/1405264620230414436/IMG_20250813_205920.png?ex=689e322a&is=689ce0aa&hm=2d8a37b2f8377e38d377db4925b77158528eaf0b46cf6b16c1b48ecfec4819a2&=&format=webp&quality=lossless&width=673&height=673" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Elodie</h5>
                <h5>Spécialiste marketing digital</h5>
                <p class="card-text">Elodie est notre spécialiste marketing digital. Elle analyse les tendances et optimise nos campagnes pour toucher le bon public.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://media.discordapp.net/attachments/763103053003882526/1405264620540919818/IMG_20250813_205855.png?ex=689e322a&is=689ce0aa&hm=c96187fdc87717a7fd915aa2d262e03c412f04272f7629d286e3fe41e24def48&=&format=webp&quality=lossless&width=445&height=445" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Melody</h5>
                <h5>Service client</h5>
                <p class="card-text">Melody gère notre service client avec enthousiasme et patience. Elle assure que chaque client reparte satisfait.</p>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://media.discordapp.net/attachments/763103053003882526/1405264620805030039/IMG_20250813_205833.png?ex=689e322a&is=689ce0aa&hm=fa7ce13e697a4024fd72465ece7014a2ee0fed26fc0d262a33bd66c2b5c88efb&=&format=webp&quality=lossless&width=638&height=638" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Emily</h5>
                <h5>Développeuse</h5>
                <p class="card-text">Emily est notre développeuse passionnée. Elle transforme nos idées en applications fonctionnelles et performantes.</p>
            </div>
        </div>
    </div>
@endsection