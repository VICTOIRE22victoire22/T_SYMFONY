# 🚀 Tutoriel d’installation de WampServer avec mises à jour (PHP, Apache, phpMyAdmin)

> 📅 Mis à jour en août 2025 – Source : [https://wampserver.aviatechno.net](https://wampserver.aviatechno.net)

---

## 🛠️ Prérequis

- Windows 10 ou 11 (64 bits)
- Droits administrateur
- Aucun autre serveur local (ex. XAMPP) actif

---

## 🧱 Étape 1 : Installer les Redistribuables Visual C++

1. Sur le site, descendez jusqu'à la section **"All VC Redistributable Packages (x86_x64) (32 & 64bits) MD5 "**
2. Téléchargez **tous** les paquets proposés (x86 **et** x64)
3. Installez-les avant de lancer WAMP

---

## 🧩 Étape 2 : Télécharger WampServer

1. Rendez-vous sur 👉 [https://wampserver.aviatechno.net](https://wampserver.aviatechno.net)
2. Cliquez sur **"Wampserver 3.3.7 64 bit – Télécharger"** ou via le lien direct [Wampserver 3.3.7 64 bit](https://wampserver.aviatechno.net/files/install/wampserver3.3.7_x64.exe)
3. Lancez l’installeur : `wampserver3.3.x_x64.exe`
4. Recommandations :
   - Installez dans `C:\wamp64`
   - Ne modifiez pas les ports par défaut
   - Choisissez Chrome ou Firefox comme navigateur si besoin

---

## 🚀 Étape 3 : Lancer WampServer

1. Ouvrez **Wampserver 64** depuis le bureau
2. Vérifiez que l’icône WAMP devient **verte** dans la barre système

---

## 🔧 Étape 4 : Installer les dernières versions

### ✅ PHP

- Allez dans **"Add-ons PHP"** du site
- Téléchargez par ex. [PHP 8.4.11 - x64](https://wampserver.aviatechno.net/files/php/wampserver3_x64_addon_php8.4.11.exe)
- Installez, puis :
  - Clic gauche sur WAMP > PHP > Version > Choisissez celle installée

### ✅ Apache

- Section **"Add-ons Apache"**
- Téléchargez [exeApache 2.4.65 - x64](https://wampserver.aviatechno.net/files/apache/wampserver3_x64_addon_apache2.4.65.)
- Installez et sélectionnez via le menu WAMP

### ✅ phpMyAdmin

- Section **"Add-ons phpMyAdmin"**
- Téléchargez [phpMyAdmin 5.2.2](https://wampserver.aviatechno.net/files/apps/wampserver3_x64_phpmyadmin5.2.2.exe)
- Accessible via : [http://localhost/phpmyadmin](http://localhost/phpmyadmin)

---

## 🧮 Étape 5 : Ajouter PHP et MySQL au PATH (variables d’environnement)

> 🎯 Pour pouvoir utiliser `php`, `mysql`, `composer` dans le terminal (CMD, PowerShell ou Terminal VSCode)

### 📌 Étapes :

1. Appuyez sur `Win + S`, tapez `variables d'environnement`
2. Cliquez sur **"Modifier les variables d’environnement système"**
3. Cliquez en bas de la fenêtre sur le bouton **"Variables d'environnement"**
4. Dans la section **variables systeme**, sélectionnez `Path` > **Modifier**
5. Cliquez sur **Nouveau**, puis ajoutez :

   ```text
   C:\wamp64\bin\php\php8.4.11

---

## 🔍 Étape 6 : Tester et configurer

- Accédez à [http://localhost](http://localhost)
- Vérifiez :
  - Affichage de la page d’accueil WAMP
  - Version PHP via `phpinfo`
  - Accès à phpMyAdmin

---

## 🧼 Astuces

- Pour changer de version PHP :
  - Clic gauche WAMP > PHP > Version > Sélection rapide

- Pour activer des extensions PHP :
  - PHP > Extensions > cochez ex. `openssl`, `pdo_mysql`, etc.

---

## 📦 Bonus : Installer Composer

- Télécharger Composer : [https://getcomposer.org/](https://getcomposer.org/)

---

## ✅ Récapitulatif

| Composant     | Où le trouver ?                           |
|---------------|--------------------------------------------|
| WampServer    | Page d’accueil du site                    |
| PHP           | Menu “Add-ons PHP”                        |
| Apache        | Menu “Add-ons Apache”                     |
| phpMyAdmin    | Menu “Add-ons phpMyAdmin”                 |
| Visual C++    | Section “Redistribuables Visual C++”      |

---

👍 Une fois installé, vous êtes prêt à développer vos projets web en local avec les dernières versions à jour !
