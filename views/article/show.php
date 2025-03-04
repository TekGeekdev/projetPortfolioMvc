{{ include('layouts/header.php', {title:'Création article'})}}
<main>
    <section class="table">
        <h2>Mes articles</h2>
        <table class="table">
    <thead>
        <tr>
            <th>Titre</th>
            <th>Contenu</th>
            <th>Date de publication</th>
            <th>Modifier</th>
            <th>Supprimer</th>
        </tr>
    </thead>
    <tbody>
        {% for article in articles %}
        <tr>
            <td>{{article.titre}}</td>
            <td>{{article.contenu}}</td>
            <td>{{article.datePublication}}</td>
            <td> <a href="{{base}}/article/edit?id={{article.id}}"" class="bouton block">Éditer</a></td>
            <td>
            <form action="{{base}}/article/delete" method="post" class="form-delete">
                    <input type="hidden" name="utilisateur_id" value="{{article.utilisateur_id}}">
                    <input type="hidden" name="id" value="{{article.id}}">
                    <input type="submit" class="bouton block danger" value="Supression de l'article">
                </form>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
    </section>
</main>

{{ include('layouts/footer.php')}}
