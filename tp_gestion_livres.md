# 📚 TP Symfony – Gestion de livres

## 🎯 Objectif

Créer une application Symfony permettant :

- d’ajouter des livres via un formulaire ;
- de consulter la liste des livres ajoutés ;
- de **supprimer un livre** existant depuis la liste.

---

## 📌 Fonctionnalités attendues

### 🔹 1. Entité `Book`

Tu dois créer une entité `Book` contenant au minimum les champs suivants :

| Champ       | Type     | Description                                |
|-------------|----------|--------------------------------------------|
| `id`        | int      | Identifiant auto-généré                    |
| `title`     | string   | Titre du livre                             |
| `author`    | string   | Nom de l’auteur                            |
| `publishedAt` | date   | Date de publication                        |
| `genre`     | (à deviner) | Type de livre (Roman, Essai, BD, etc.)     |

> 💡 **Indice** : Le champ `genre` ne sera **pas une simple chaîne**. Réfléchis à une manière plus rigoureuse de gérer des catégories prédéfinies dans Symfony.

---

### 🔹 2. Page d’accueil (`/`)

La page d’accueil doit afficher un message de bienvenue et un lien vers la liste des livres.

---

### 🔹 3. Ajout d’un livre

Crée une page `/book/add` avec un **formulaire** permettant de saisir un nouveau livre.  
Le formulaire devra inclure :

- le titre
- l’auteur
- la date de publication
- le genre (choix parmi des valeurs prédéfinies)

Une fois le formulaire validé, le livre est enregistré en base et l’utilisateur est redirigé vers la liste des livres.

---

### 🔹 4. Liste des livres

Crée une page `/books` qui affiche la liste des livres enregistrés avec :

- le titre
- l’auteur
- la date de publication (format lisible)
- le genre
- un **bouton de suppression** pour chaque ligne

---

### 🔹 5. Suppression d’un livre

Depuis la page de liste, l’utilisateur doit pouvoir cliquer sur un lien ou un bouton “🗑 Supprimer” qui :

- supprime le livre concerné de la base ;
- redirige vers la liste mise à jour ;
- (bonus) affiche un message flash de confirmation.

> ⚠️ La suppression doit être **gérée via une route Symfony dédiée** (`/book/delete/{id}` par exemple) et non avec une solution automatique.

---

## 💡 Bonus

- Ajouter une confirmation Javascript avant de supprimer
- Trier la liste des livres par date ou par titre
- Ajouter une route `/books/{genre}` pour filtrer par genre
- Ajouter un champ `Résumé` pour chaque livre (long texte)

---

## ✅ Résultat attendu

L'application permet à l'utilisateur :

- d’ajouter un livre avec les informations demandées ;
- de consulter tous les livres ajoutés ;
- de supprimer un livre individuellement depuis la liste.

---

## 🔄 Exemple de navigation

- `/` : page d’accueil avec lien vers `/books`
- `/books` : liste complète des livres
- `/book/add` : formulaire d’ajout
- `/book/delete/{id}` : suppression du livre
