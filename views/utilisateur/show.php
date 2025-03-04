{{ include('layouts/header.php', {title:'Compte'})}}
<main class="profil">
    <section>
        <h2>Bienvenue {{utilisateur.nomUtilisateur}}</h2>
        <div class="flex f-col">
            <a href="{{base}}/utilisateur/edit?id={{utilisateur.id}}" class="bouton block">Éditer profil</a>
            <a href="{{base}}/article/create?id={{utilisateur.id}}" class="bouton block">Créer un article</a>
            <a href="{{base}}/article/show?id={{utilisateur.id}}" class="bouton block">Mes articles</a>
            <form action="{{base}}/utilisateur/delete" method="post" class="form-delete">
                <input type="hidden" name="id" value="{{utilisateur.id}}">
                <input type="submit" class="bouton block danger" value="Supression du compte">
            </form>
        </div>
    </section>
</main>
{{ include('layouts/footer.php')}}