# ✍️ TP Symfony – Gestion d'articles de blog

## 🎯 Objectif

Créer une application Symfony permettant de :

- publier des articles de blog via un formulaire ;
- consulter la liste des articles publiés ;
- supprimer un article depuis la liste.

---

## 📌 Fonctionnalités attendues

### 🔹 1. Entité `BlogPost`

Tu dois créer une entité `BlogPost` avec les champs suivants :

| Champ        | Type         | Description                              |
|--------------|--------------|------------------------------------------|
| `id`         | int          | Identifiant auto-généré                  |
| `title`      | string       | Titre de l’article                       |
| `author`     | string       | Nom de l’auteur                          |
| `summary`    | (à deviner)  | Résumé court de l’article                |
| `content`    | (à deviner)  | Contenu long de l’article                |
| `image`      | string       | URL ou chemin d’une image d’illustration |
| `publishedAt`| datetime     | Date de publication                      |

> 💡 **Indices** :
> - Le champ `summary` sera plus court que `content`, mais plus long qu’un simple texte court.
> - Le champ `content` ne sera **pas une simple chaîne** → choisis un type adapté.
> - Le champ `image` peut être un champ texte contenant l'URL d'une image.

---

### 🔹 2. Page d’accueil (`/`)

Affiche les **3 derniers articles publiés** avec leur titre, résumé, auteur, date et image.

---

### 🔹 3. Ajouter un article

Crée une page `/blog/add` avec un formulaire permettant de créer un article. Le formulaire devra inclure :

- titre
- auteur
- résumé
- contenu
- image (URL)
- date de publication

Une fois le formulaire soumis, l'article est enregistré et l’utilisateur est redirigé vers la liste des articles.

---

### 🔹 4. Liste des articles

La page `/blog` affichera tous les articles avec :

- titre
- auteur
- résumé
- image
- date de publication (format lisible)
- un bouton pour supprimer l’article

---

### 🔹 5. Suppression d’un article

Chaque article de la liste doit pouvoir être supprimé via un lien ou un bouton “🗑 Supprimer”.

> ⚠️ La suppression doit être gérée via une route dédiée (`/blog/delete/{id}`).

---

## 💡 Bonus

- Ajouter une confirmation JS avant suppression
- Afficher le détail complet d’un article via `/blog/{id}` ou `/blog/{slug}`
- Ajouter un champ `tags` (liste ou tableau)

---

## ✅ Résultat attendu

L’application permet à un utilisateur :

- de créer un article de blog ;
- de consulter tous les articles ;
- de supprimer un article individuellement.

---

## 🔄 Exemple de navigation

- `/` : 3 derniers articles publiés
- `/blog` : liste complète
- `/blog/add` : ajout d’un article
- `/blog/delete/{id}` : suppression
