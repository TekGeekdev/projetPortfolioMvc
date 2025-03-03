{{ include('layouts/header.php', {title:'Création article'})}}
<main>
<section class="form">
<h2>Créer un article</h2>
    <form method="post">
        <div>
            <label for="titre">Entrez un titre</label>
            <input type="text" name="titre" id="titre" placeholder="Saissisez un titre">
        </div>
        <div>
            <label for="contenu">Saissisez le contenu de l'article</label>
            <textarea name="contenu" id="contenu" rows="15"></textarea>
        </div>
            <input type="hidden" name="datePublication" id="datePublication" value="<?php echo $datePublication?>">
        <input type="hidden" name="utilisateur_id" value="<?php echo $id?>">
        <input type="submit" value="Envoyer" class="bouton">
    </form>
</section>
</main>
{{ include('layouts/footer.php')}}