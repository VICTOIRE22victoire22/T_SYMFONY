# 🚀 Rappels – Création d’un projet Symfony et commandes essentielles

## 🛠️ Créer un projet Symfony

```bash
symfony new nomDuProjet --version="7.3.x" --webapp
```

> Cela crée un nouveau projet Symfony avec tous les composants nécessaires pour une application web (Twig, Doctrine, sécurité, etc.).

---

## 🧭 Créer un contrôleur

```bash
php bin/console make:controller PageController
```

> Cette commande crée automatiquement un fichier contrôleur et un fichier Twig associé.

---

## 🗄️ Connexion à la base de données

Dans le fichier `.env`, modifie la ligne suivante pour configurer ta base de données :

```env
DATABASE_URL="mysql://login:password@127.0.0.1:3306/nom_de_la_base?serverVersion=9.1.0&charset=utf8mb4"
```

Puis crée la base de données avec :

```bash
php bin/console doctrine:database:create
```

> Cela permet de vérifier que la connexion est bien configurée.

---

## 🧱 Créer ou modifier une entité (modèle)

Si l'entité est déjà existante, cette commande permet aussi d'ajouter des champs :

```bash
php bin/console make:entity Customer
```

> Tu définis les champs (attributs) de ton entité via une interface interactive.

---

## 📦 Générer et exécuter les migrations

### Générer le fichier de migration :

```bash
php bin/console make:migration
```

> Cette commande génère un fichier avec les requêtes SQL nécessaires pour créer ou modifier la table.

### Exécuter la migration :

```bash
php bin/console doctrine:migrations:migrate
```

> Applique les changements dans la base de données.

---

## 📝 Créer un formulaire Symfony

```bash
php bin/console make:form TeamType
```

> Crée un fichier de formulaire basé sur une entité, permettant de générer automatiquement les champs d’un formulaire HTML.

---

## ⚙️ Générer un CRUD complet automatiquement

```bash
php bin/console make:crud Article
```

> Cette commande génère un contrôleur, les vues Twig, un formulaire et les routes pour gérer une entité en lecture/écriture complète.

---

> ✅ Ces commandes sont à utiliser dans l’ordre logique de création d’un projet avec entités, base de données, formulaires et fonctionnalités CRUD.
