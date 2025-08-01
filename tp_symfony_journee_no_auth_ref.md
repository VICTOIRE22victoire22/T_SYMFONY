# 🧩 TP Symfony — Application collaborative : Projets, Tâches, Commentaires

## 🎯 Objectif

Créer une application Symfony complète permettant à un utilisateur de gérer des **projets** et leurs **tâches**, ainsi que des **commentaires** sur ces tâches. L’exercice couvre la création d'entités, les relations entre celles-ci, la validation des données, et la structuration logique de l’application.

Durée estimée : 🕒 1 journée

---

## 🧱 Entités à créer

### 👤 User
- `id`
- `firstname` (string, min 2)
- `lastname` (string)
- `email` (string, unique, email valide)
- `password` (string) — stocké hashé
- 🔁 OneToMany avec `Project`

> ⚠️ Le mot de passe doit être hashé avant sauvegarde. À gérer **manuellement** dans le contrôleur avec `UserPasswordHasherInterface`.

---

### 📦 Project
- `id`
- `title` (string, min 3)
- `description` (text, min 10)
- `createdAt` (datetime)
- 🔁 ManyToOne vers `User` (propriétaire)
- 🔁 OneToMany vers `Task`

---

### ✅ Task
- `id`
- `title` (string, min 5)
- `done` (bool)
- `deadline` (datetime futur)
- 🔁 ManyToOne vers `Project`
- 🔁 OneToMany vers `Comment`

---

### 💬 Comment
- `id`
- `content` (text, min 10)
- `author` (string, min 2)
- `createdAt` (datetime)
- 🔁 ManyToOne vers `Task`

---

## 🧪 Fonctionnalités à implémenter

### 🔹 Création de compte
- Route `/register`
- Formulaire d'inscription
- Validation des données (email unique, longueur, etc.)
- Hash du mot de passe
- Sauvegarde du nouvel utilisateur

### 🔹 Interface Projet
- Liste des projets de l’utilisateur
- Création / modification / suppression d’un projet
- Détail d’un projet (titre, description, date)
- Liste des tâches associées

### 🔹 Interface Tâche
- Ajout d'une tâche depuis la vue d’un projet
- Marquer une tâche comme faite
- Supprimer une tâche

### 🔹 Commentaires (bonus)
- Ajouter un commentaire sur une tâche depuis sa page
- Afficher les commentaires existants

---

## ✅ Contraintes

- Utiliser : `make:entity`, `make:controller`, `make:form`, `make:crud`
- Utiliser des relations Doctrine (`OneToMany`, `ManyToOne`)
- Valider les données avec les annotations `Assert\*`

---

## 🎁 Bonus

- Ajouter un champ `Priority` dans `Task` en tant qu’entité liée
- Mettre un champ de confirmation de mot de passe dans le formulaire d’inscription
- Implémenter un système de filtre ou de tri dans la liste des tâches

---

## ✅ Résultat attendu

- Un formulaire d’inscription avec validations et hash du mot de passe
- Une base utilisateur avec projets et tâches associés
- Des pages fonctionnelles de création et gestion des projets/tâches
- Des commentaires visibles et ajoutables sur les tâches