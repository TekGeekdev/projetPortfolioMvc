{{ include('layouts/header.php', {title:'Acceuil'})}}
<main>
            <header>
                <div>
                    <h2>Ledeur Mathieu</h2>
                    <h3>Junior Web Developpeur</h3>
                    <p>Passionné par le web, découvrez mes réalisations et mes compétences.</p>
                </div>
                <img src="{{asset}}/images/dev-img.jpg" alt="image programmeur">
            </header>
            <section>
                <h2>Mes derniers articles</h2>
                {% for article in articles %}
                    <article class="last-posts">
                        <h3>{{article.titre}}</h3>
                        <p>{{article.contenu}}</p>
                        <p>Date : {{article.datePublication}}</p>
                        <p>Auteur : {{article.authorName}}</p>
                    </article>
                {% endfor %}
            </section>
    </main>

    {{ include('layouts/footer.php')}}