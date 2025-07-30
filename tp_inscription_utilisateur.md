# 🧩 TP Symfony — Création de compte utilisateur

## 🎯 Objectif

Créer un système d'inscription utilisateur **à la main**.

---

## 🧱 Entité à créer : `User`

Utilise uniquement :

```bash
php bin/console make:entity User
```

Champs requis :

- `id` (auto)
- `firstname` (`string`) – min 2 caractères
- `lastname` (`string`) – min 2 caractères
- `email` (`string`) – **doit être unique** et bien formé
- `password` (`string`) – stocké en base de façon sécurisée

⚠️ Le mot de passe ne doit **jamais** être stocké en clair.

---

## ✍️ Étapes attendues

1. Créer l'entité `User`
2. Ajouter les contraintes `Assert` pour valider les champs (`NotBlank`, `Length`, `Email`)
3. Générer un `UserType` (formulaire Symfony classique)
4. Créer un contrôleur `UserController` avec :
   - une route `/register` pour s'inscrire
   - l'affichage du formulaire
   - la gestion de la soumission
   - le hashage du mot de passe
   - le persist + flush de l'utilisateur
5. Rediriger vers une page de confirmation après inscription

---

## 🧪 Bonus

- Vérifie que l’email n’existe pas déjà (à la main ou via `UniqueEntity`)
- Ajoute un champ de confirmation de mot de passe (non mappé)
- Crée une vue personnalisée pour la page d’inscription

---

Tu peux utiliser :

- `make:entity`
- `make:form`
- `make:controller`
- `make:crud` (facultatif, pas pour l'inscription)

---

## ✅ Résultat attendu

Une page `/register` avec un formulaire fonctionnel, validation des champs, et un utilisateur créé en base avec un mot de passe hashé.