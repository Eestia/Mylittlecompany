@extends("Layouts.app")

@section("title", "contact page")

@section("content")
    <div class="d-flex justify-content-center align-items-center"  style=" font-size: 15px; 
            background-image: url('https://media.discordapp.net/attachments/763103053003882526/1405258415630057492/raw.png?ex=689e2c62&is=689cdae2&hm=4737189ef902d76e84f0e5095d9a2420200da4a9c4fd3b779b17aee751a0322b&=&format=webp&quality=lossless&width=1240&height=826');
            background-size: cover; 
            background-position: center;">
        <div style="border: 1px solid rgb(111, 111, 111); padding: 20px; width: 400px; border-radius: 30px; background-color: white; margin-top: 20px; margin-bottom: 20px;">
            <h3>Contactez-nous</h3>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Nom</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="modifier">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Prenom</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="modifier">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Telephone</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="modifier">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">E-mail</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="modifier">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlInput1" class="form-label">Sujet</label>
                <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="modifier">
            </div>
            <div class="mb-3">
                <label for="exampleFormControlTextarea1" class="form-label">Message</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3"></textarea>
            </div>
            <button type="submit" style="color:green; background-color:rgba(172, 255, 47, 0.477); border:none; padding-left:20px; padding-right:20px; border-radius: 30px;">enregistrer</button>
        </div>
    </div>

@endsection