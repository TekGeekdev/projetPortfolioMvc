{{ include('layouts/header.php', {title:'Création article'})}}
<main>
<section class="form">
<h2>Créer un article</h2>
    <form method="post">
        <div>
            <label for="titre">Entrez un titre</label>
            <input type="text" name="titre" id="titre" placeholder="Saissisez un titre" value="{{article.titre}}">
            {% if errors.titre is defined %}
                <span class="span-erreur"> {{errors.titre}}</span>
            {% endif %}
        </div>
        <div>
            <label for="contenu">Saissisez le contenu de l'article</label>
            <textarea name="contenu" id="contenu" rows="15">{{article.contenu}}</textarea>
            {% if errors.contenu is defined %}
                <span class="span-erreur"> {{errors.contenu}}</span>
            {% endif %}
        <input type="submit" value="Envoyer" class="bouton">
    </form>
</section>
</main>
{{ include('layouts/footer.php')}}