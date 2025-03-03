{{ include('layouts/header.php', {title:'Création compte'})}}
<main>
    <section class="form">
        <h2>Créer un compte</h2>
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
            <div>
                <label for="nomUtilisateur">Nom d'utilisateur</label>
                <input type="text" name="nomUtilisateur" id="nomUtilisateur"
                    placeholder="entrez un nom d'utilisateur sans caractères spéciaux" value="{{utilisateur.nomUtilisateur}}">
                {% if errors.nomUtilisateur is defined %}
                    <span class="span-erreur">{{errors.nomUtilisateur}}</span>
                {% endif %}
            </div>
            <input type="submit" value="Créer le compte" class="bouton">
        </form>
    </section>
</main>
{{ include('layouts/footer.php')}}