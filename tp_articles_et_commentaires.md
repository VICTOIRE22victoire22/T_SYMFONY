# 🧑‍💻 TP Symfony – Deux entités liées : Articles et Commentaires

## 🎯 Objectif

Créer une application Symfony permettant de :

- gérer des **articles** (ajout, édition, suppression, affichage) ;
- gérer des **commentaires** de manière indépendante ;
- mettre en place une **relation OneToMany / ManyToOne** entre les deux entités ;
- comprendre la logique des entités liées dans une base de données relationnelle.

---

## 📌 Entités à créer

### 🔹 Entité `Article`

Champs attendus :

| Champ        | Type      | Description                       |
|--------------|-----------|-----------------------------------|
| `id`         | int       | Identifiant auto-généré           |
| `title`      | string    | Titre de l’article                |
| `content`    | (à deviner) | Contenu complet de l’article     |
| `author`     | string    | Nom de l’auteur                   |
| `publishedAt`| datetime  | Date de publication               |

---

### 🔹 Entité `Comment`

Champs attendus :

| Champ        | Type      | Description                         |
|--------------|-----------|-------------------------------------|
| `id`         | int       | Identifiant auto-généré             |
| `content`    | (à deviner) | Texte du commentaire               |
| `author`     | string    | Auteur du commentaire               |
| `createdAt`  | datetime  | Date de création                    |
| `article`    | relation  | ⚠️ ManyToOne vers `Article`         |

> 💡 Indice : un commentaire est **lié à un seul article**, mais un article peut avoir plusieurs commentaires.

---

## 🔹 CRUDs à réaliser

### 🔸 Pour `Article`

- `/articles` → liste des articles
- `/article/add` → ajout
- `/article/edit/{id}` → édition
- `/article/delete/{id}` → suppression
- `/article/{id}` → affichage détaillé (titre, contenu, date, auteur)

### 🔸 Pour `Comment`

- `/comments` → liste des commentaires
- `/comment/add` → ajout d’un commentaire avec sélection de l’article lié
- `/comment/delete/{id}` → suppression d’un commentaire

> 💡 Les commentaires sont **gérés sur des pages séparées** dans ce TP.

---

## 💡 Bonus

- Afficher les commentaires directement sur la page d’un article (`/article/{id}`)
- Ajouter une note (1 à 5) à chaque commentaire
- Trier les commentaires du plus récent au plus ancien
- Ajouter un filtre dans `/comments` pour voir ceux d’un article spécifique

---

## ✅ Résultat attendu

- Deux entités créées avec une vraie relation entre elles
- Deux formulaires d’ajout distincts
- Une page d’article détaillée
- Une page d’ajout de commentaire avec choix de l’article

---

## 🔄 Exemple de navigation

- `/articles` → liste complète des articles
- `/article/add` → formulaire d’ajout d’un article
- `/article/{id}` → page de détail
- `/comments` → liste complète des commentaires
- `/comment/add` → formulaire d’ajout d’un commentaire
- `/comment/delete/{id}` → suppression
