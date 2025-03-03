{{ include('layouts/header.php', {title:'Modifier Profil'})}}
<main>
    <section class="form">
        <h2>Modifier Profil</h2>
        <form method="post">
            <div>
                <label for="email">Mail</label>
                <input type="email" name="email" id="email" 
                placeholder="Entrez un email de type abc@gmail.com" value="{{utilisateur.email}}">
                {% if errors.email is defined %}
                <span class="span-erreur"> {{errors.email}}</span>
            {% endif %}
            </div>
            <div>
                <label for="motDePasse">Mot de passe</label>
                <input type="password" name="motDePasse" id="motDePasse"
                    placeholder="Entrez un mot de passe qui contient des chiffres et des lettres">
                {% if errors.motDePasse is defined %}
                    <span class="span-erreur"> {{errors.nmotDePasse}}</span>
                {% endif %}
            </div>
            <input type="submit" value="Valider" class="bouton">
        </form>
    </section>
</main>
{{ include('layouts/footer.php')}}