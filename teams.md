# 🧑‍💻 Exercice Symfony – Afficher des équipes avec une entité Doctrine

## 🎯 Objectif

Créer une page Symfony qui affiche une **liste d'équipes** stockées en base de données à l’aide de Doctrine, Twig et un contrôleur.

---

## 📌 Consignes

### 🔹 1. Crée une entité `Team`

L’entité `Team` doit contenir les champs suivants :

| Nom du champ | Type   | Description             |
|--------------|--------|-------------------------|
| `id`         | int    | Identifiant auto-généré |
| `name`       | string | Nom de l’équipe         |
| `city`       | string | Ville de l’équipe       |

> Utilise la commande :
```bash
php bin/console make:entity Team
```

---

### 🔹 2. Génère et exécute la migration

Après avoir créé l'entité, génère la migration :

```bash
php bin/console make:migration
php bin/console doctrine:migrations:migrate
```

---

### 🔹 3. Ajoute des données en base de données

Ajoute manuellement **3 lignes** dans la table `team` via :
- ton outil SQL préféré (phpMyAdmin, DBeaver, DataGrip…)
- ou un terminal MySQL/PostgreSQL

> Exemple d'insertion SQL (si tu es en MySQL) :

```sql
INSERT INTO team (name, city) VALUES 
('Les Aigles', 'Paris'),
('Les Tigres', 'Lyon'),
('Les Loups', 'Marseille');
```

---

### 🔹 4. Crée un contrôleur `PageController`

Crée un contrôleur Symfony avec une route `/teams` qui :

- Récupère toutes les équipes en base grâce au `TeamRepository`
- Passe ces équipes à une vue Twig
- Passe aussi un `title` à la vue

---

### 🔹 5. Crée le template `templates/teams.html.twig`

Ce fichier doit :

- Afficher le titre transmis (`{{ title }}`)
- Afficher une liste HTML des équipes avec leur nom et leur ville

> Exemple de rendu attendu :

```html
<h1>Nos équipes</h1>

<ul>
  <li>Les Aigles (Paris)</li>
  <li>Les Tigres (Lyon)</li>
  <li>Les Loups (Marseille)</li>
</ul>
```

---

### ✅ Résultat attendu

En visitant `http://localhost:8000/teams`, l’utilisateur doit voir :

- Le titre
- La liste des équipes insérées en base de données, avec leur nom et leur ville

---

## 💡 Bonus

Ajoute un menu de navigation en haut de la page pour revenir vers les autres pages :

```html
<nav>
  <a href="{{ path('home') }}">Accueil</a> |
  <a href="{{ path('about') }}">À propos</a> |
  <a href="{{ path('teams') }}">Nos équipes</a>
</nav>
```
