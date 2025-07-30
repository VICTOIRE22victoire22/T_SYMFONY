# 🧑‍💻 Exercice Symfony – Affichage de pages statiques avec Twig

## 🎯 Objectif

Créer un mini-site Symfony avec **trois pages statiques** :  
- Accueil  
- À propos  
- Contact  

Chacune sera affichée via un **template Twig**.

---

## 📌 Consignes

Tu dois créer une application Symfony avec les éléments suivants :

### 🔹 Routing

Trois routes accessibles dans le navigateur :

| URL       | Nom de la page |
|-----------|----------------|
| `/`       | Accueil        |
| `/about`  | À propos       |
| `/contact`| Contact        |

---

### 🔹 Contrôleur

Crée un **contrôleur unique** `PageController` contenant une **méthode par page**.

Chaque méthode devra :
- Retourner un rendu Twig
- Passer une variable `title` à la vue

---

### 🔹 Fichiers Twig

Dans le dossier `templates/`, crée **trois fichiers Twig** :

- `home.html.twig`
- `about.html.twig`
- `contact.html.twig`

Chacun devra :
- Afficher le titre (`{{ title }}`) reçu depuis le contrôleur
- Afficher un petit paragraphe de ton choix

---

### 💡 Bonus

Ajoute un **menu de navigation commun** en haut de chaque page avec des liens vers les 3 pages :

```html
<nav>
  <a href="{{ path('home') }}">Accueil</a> |
  <a href="{{ path('about') }}">À propos</a> |
  <a href="{{ path('contact') }}">Contact</a>
</nav>
