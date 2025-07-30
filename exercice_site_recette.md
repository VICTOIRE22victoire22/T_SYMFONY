# 🧑‍🍳 Exercice Symfony – Site de Recettes

## 🎯 Objectif

Créer une petite application Symfony permettant :

- d’ajouter des recettes via un formulaire ;
- d’afficher la liste des recettes créées ;
- d'afficher les **3 dernières recettes** en page d'accueil.

---

## 📌 Fonctionnalités attendues

### 🔹 1. Entité `Recipe`

Tu dois créer une entité `Recipe` contenant au minimum les champs suivants :

| Champ       | Type     | Description                          |
|-------------|----------|--------------------------------------|
| `id`        | int      | Identifiant auto-généré              |
| `title`     | string   | Titre de la recette                  |
| `content`   | (à deviner) | Description complète de la préparation (attention : ce champ sera plus long qu’une simple chaîne de caractères) |
| `category`  | (à deviner) | Catégorie de la recette              |
| `createdAt` | datetime | Date de création                     |

> 💡 **Indice** :  
> - Le champ `content` ne sera **pas une simple chaîne courte**. Réfléchis à un type de champ adapté.  
> - Pour `category`, ce n’est **pas un champ string classique**. Il faudra probablement **réfléchir à une structure spéciale** pour ce champ, notamment pour le gérer correctement dans le formulaire.

Exemples de catégories : `Entrée`, `Plat`, `Dessert`, `Boisson`.

---

### 🔹 2. Création de recette

Tu dois créer un formulaire Symfony pour ajouter une nouvelle recette.

Le formulaire doit permettre de :
- saisir un titre et un contenu ;
- **choisir une catégorie** parmi celles disponibles ;
- enregistrer la recette en base de données.

Une fois la recette enregistrée, l’utilisateur est redirigé vers la liste des recettes.

---

### 🔹 3. Listing des recettes

Crée une page `/recipes` qui affiche **toutes les recettes enregistrées**, avec :

- leur titre
- leur catégorie
- leur date de création (format lisible)
- un lien vers la page d'ajout

---

### 🔹 4. Page d’accueil (`/`)

La page d’accueil doit afficher **uniquement les 3 dernières recettes ajoutées**, triées par date de création (de la plus récente à la plus ancienne).

---

### 💡 Bonus

- Ajouter un champ facultatif `image` pour chaque recette
- Afficher dynamiquement la date relative (`il y a 3 jours`)
- Filtrer les recettes par catégorie via une URL (ex: `/recipes?category=plat`)

---

## ✅ Résultat attendu

Un mini-site Symfony fonctionnel qui permet d’ajouter et de consulter des recettes de cuisine, en gérant correctement les catégories et les contenus longs, avec une page d’accueil qui affiche les dernières créations.

> L’interface peut rester sobre : pas de CSS obligatoire.

---

## 🔄 Exemple de navigation

- Accueil (`/`) : affiche les **3 dernières recettes**
- `/recipes` : liste complète des recettes
- `/recipe/add` : formulaire d’ajout
