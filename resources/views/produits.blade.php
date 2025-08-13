@extends("Layouts.app")

@section("title", "produits page")

@section("content")
    <h1>Nos produits</h1>
    <div style="display: flex; justify-content: center; flex-wrap: wrap; gap: 20px;">
        <div class="card" style="width: 18rem;">
            <img src="https://c02.purpledshub.com/uploads/sites/45/2023/07/51Tg9i5t4NL.ACSL1500-211b6b1.jpg?webp=1&w=1200" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Surligneur</h5>
                <p class="card-text">Mettez en valeur vos notes et documents avec ce surligneur lumineux et précis. Parfait pour le bureau, l’école ou vos projets créatifs.</p>
                <h5>1.99€</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://img4.dhresource.com/webp/m/f3/albu/jc/y/29/33f29f1f-9e40-4a08-b165-1bb8ec53ad8d.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Calculatrice</h5>
                <p class="card-text">Simplifiez vos calculs quotidiens grâce à cette calculatrice compacte et fiable. Idéale pour les étudiants, professionnels ou amateurs de chiffres.</p>
                <h5>2.75€</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://i.etsystatic.com/9357497/r/il/c5abfc/6727951882/il_570xN.6727951882_1xae.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Mug</h5>
                <p class="card-text">Commencez vos journées avec style grâce à ce mug élégant et résistant. Parfait pour le café, le thé ou toute boisson chaude de votre choix.</p>
                <h5>5.75€</h5>
            </div>
        </div>
        <div class="card" style="width: 18rem;">
            <img src="https://images-cdn.ubuy.ci/6454221b021f6030864282ab-domikee-cute-color-office-school-time.jpg" class="card-img-top" alt="...">
            <div class="card-body">
                <h5 class="card-title">Agenda</h5>
                <p class="card-text">Organisez votre emploi du temps efficacement avec cet agenda pratique et coloré. Gardez vos rendez-vous, notes et idées toujours à portée de main.</p>
                <h5>8.25€</h5>
            </div>
        </div>
    </div>
@endsection