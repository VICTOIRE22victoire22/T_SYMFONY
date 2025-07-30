# 🧩 TP Symfony — Gestion de projets et de tâches

## 🎯 Objectif

Créer une application Symfony permettant de gérer des **projets** et les **tâches** associées.

Chaque projet peut avoir plusieurs tâches. Les utilisateurs peuvent :
- Créer des projets
- Voir les détails d’un projet
- Ajouter des tâches à un projet depuis la page de détail
- Gérer une priorité sous forme d’entité liée (et **non un simple enum**)

---

## 📚 Entités à créer

### 🧱 `Project`
- `id`
- `name` (`string`) — **obligatoire**, min **3 caractères**
- `description` (`text`) — **obligatoire**, min **10 caractères**
- `createdAt` (`datetime`)
- 🔁 `OneToMany` vers `Task` (mappedBy `project`)

---

### 🧱 `Task`
- `id`
- `title` (`string`) — **obligatoire**, min **5 caractères**
- `done` (`boolean`)
- `deadline` (`datetime`) — **doit être dans le futur**
- `createdAt` (`datetime`)
- 🔁 `ManyToOne` vers `Project` (inversedBy `tasks`)
- 🔁 `ManyToOne` vers `Priority` (inversedBy `tasks`) — **⚠️ à ne pas confondre avec un champ enum**

---

### 🧱 `Priority`
- `id`
- `label` (`string`) — ex : "Faible", "Normale", "Urgente"
- 🔁 `OneToMany` vers `Task`

---

## ✅ Fonctionnalités attendues

- Une page `/project` listant tous les projets.
- Une page `/project/{id}` affichant :
  - les infos du projet
  - la liste de ses tâches
  - un formulaire pour ajouter une tâche (saisie directe sur cette page)
- Une validation via `Assert` doit être présente sur tous les champs obligatoires.

---

## 💡 Bonus (optionnel)

- Ajouter un filtre ou tri par priorité ou deadline.
- Permettre de modifier ou supprimer une tâche.
- Style conditionnel : les tâches urgentes s’affichent en rouge.

---

## 🔐 Contraintes techniques

- Ne pas utiliser `make:crud`
- Faire les relations à la main
- Utiliser les validations `Assert`
- Le champ `priority` **doit être une entité à part**, liée par une `ManyToOne`