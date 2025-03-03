{{ include('layouts/header.php', {title:'Création article'})}}
<main>
    <section class="table">
        <h2>Mes articles</h2>
        <table>
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
            <td> <a href="{{base}}/article/edit?id={{article.id}}"" class="btn">Éditer</a></td>
            <td>
            <form action="" method="post">
                    <input type="hidden" name="id" value="">
                    <input type="submit" class="btn red" value="delete">
                </form>
            </td>
        </tr>
        {% endfor %}
    </tbody>
</table>
    </section>
</main>

{{ include('layouts/footer.php')}}
