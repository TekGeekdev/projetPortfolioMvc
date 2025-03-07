create database projetBlogMvcFinalEtape;

create table final_privilege(
id int not null auto_increment primary key,
type varchar(45) not null
);

create table final_utilisateur(
id int not null auto_increment primary key,
email varchar(50) not null,
motDePasse varchar(255) not null,
nomUtilisateur varchar(45) not null,
final_privilege_id int not null,
constraint unique_nomUtilisateur unique(nomUtilisateur),
constraint fk_final_privilege_id foreign key (final_privilege_id) references final_privilege(id)
);

create table final_article(
id int not null auto_increment primary key,
titre varchar(75) not null,
contenu text not null,
datePublication date not null,
final_utilisateur_id int not null,
image varchar(255),
constraint fk_final_utilisateur_id foreign key (final_utilisateur_id) references final_utilisateur(id)
);

create table final_commentaire(
id int not null auto_increment primary key,
contenu text not null,
dateCommentaire date not null,
final_utilisateur_id int not null,
final_article_id int not null,
constraint fk_comment_final_utilisateur_id foreign key (final_utilisateur_id) references final_utilisateur(id),
constraint fk_comment_final_article_id foreign key (final_article_id) references final_article(id)
);

create table final_categorie(
id int not null auto_increment primary key,
nom varchar(45) not null
);

create table final_article_has_final_categorie(
final_article_id int not null,
final_categorie_id int not null,
constraint pk_final_article_has_final_categorie primary key (final_article_id,final_categorie_id),
constraint fk_art_has_cat_final_article_id foreign key (final_article_id) references final_article(id),
constraint fk_art_has_cat_final_categorie_id foreign key (final_categorie_id) references final_categorie(id)
);

select * from utilisateur;
select * from article;