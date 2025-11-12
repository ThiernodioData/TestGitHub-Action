# GitHubTest @ 2025-2026

Projet de TP sur GitHub Actions - Tests automatisés avec PHP

## 📋 Prérequis

- Compte GitHub
- Git installé localement
- PHP 8.2+ (pour tester en local)

## 🚀 Installation et déploiement

### Étape 1 : Créer le dépôt GitHub

1. Créez un nouveau dépôt sur GitHub (nommez-le `github-test-tp-2025`)
2. Cochez "Add a README file" lors de la création
3. Clonez le dépôt :

```bash
git clone https://github.com/VOTRE-USERNAME/github-test-tp-2025.git
cd github-test-tp-2025
```

### Étape 2 : Créer la structure du projet

Créez tous les dossiers nécessaires :

```bash
mkdir -p .github/workflows
mkdir -p app
mkdir -p tests
```

### Étape 3 : Copier tous les fichiers

Copiez tous les fichiers que je vous ai fournis dans les bons dossiers :

- `.github/workflows/*.yml` → Tous les fichiers workflow
- `app/Calculator.php` → Code source
- `tests/CalculatorTest.php` → Tests
- `composer.json` → Configuration Composer
- `phpunit.xml` → Configuration PHPUnit
- `.env.example` → Exemple de variables d'environnement

### Étape 4 : Configurer les secrets GitHub

1. Allez sur GitHub : **Settings** → **Secrets and variables** → **Actions**
2. Ajoutez ces secrets :
   - `DB_DATABASE` → `test_database`
   - `DB_USERNAME` → `test_user`
   - `DB_PASSWORD` → `test_password`
   - `DEPLOY_HOOK` → `https://votre-url-deploy.com/hook` (optionnel)

### Étape 5 : Pousser le code

```bash
git add .
git commit -m "feat: Add GitHub Actions workflows for all TPs"
git push origin main
```

### Étape 6 : Vérifier les workflows

1. Allez sur GitHub → **Actions**
2. Vous devriez voir tous les workflows s'exécuter
3. Vérifiez que tous passent au vert ✅

## 📚 Description des TPs

### TP4 - Génération de rapports PHPUnit
✅ Génère des rapports de couverture XML
✅ Upload les artifacts (coverage.xml, report.xml)

### TP5 - CI sur un projet Laravel
✅ Configure l'environnement Laravel
✅ Génère la clé d'application
✅ Execute les tests

### TP6 - Linting et qualité de code
✅ Analyse statique avec PHPStan
✅ Vérification du style avec Pint

### TP7 - Variables et secrets
✅ Utilise les secrets GitHub
✅ Configure les variables d'environnement
✅ Protège les informations sensibles

### TP8 - Pipeline multi-jobs
✅ Build → Tests → Quality
✅ Exécution séquentielle avec dépendances

### TP9 - Déploiement automatique
✅ Deploy uniquement si tests réussis
✅ Simulation de déploiement sur hébergeur

### TP10 - Pipeline complète CI/CD
✅ Build + PHPStan/Pint + PHPUnit + Coverage + Deploy
✅ Workflow complet de bout en bout

## 🧪 Tests en local (optionnel)

```bash
# Installer les dépendances
composer install

# Lancer les tests
vendor/bin/phpunit

# Vérifier le code avec PHPStan
vendor/bin/phpstan analyse --level=max app/

# Vérifier le style avec Pint
vendor/bin/pint --test
```

## 🎯 Résultats attendus

✅ Tous les workflows doivent passer au vert
✅ Les rapports sont disponibles dans l'onglet Artifacts
✅ Les secrets ne sont jamais exposés
✅ Le déploiement s'exécute uniquement si tous les tests passent

## 📝 Notes importantes

- Les workflows se déclenchent sur `push` et `pull_request` sur la branche `main`
- Certains checks peuvent être en `continue-on-error: true` pour ne pas bloquer le pipeline
- Le déploiement (TP9 et TP10) est simulé, configurez `DEPLOY_HOOK` pour un vrai déploiement

## 🐛 Dépannage

Si un workflow échoue :
1. Vérifiez les logs dans l'onglet Actions
2. Assurez-vous que tous les secrets sont configurés
3. Vérifiez que la structure des fichiers est correcte
4. Relancez le workflow manuellement si nécessaire

## 📞 Aide

En cas de problème, vérifiez :
- La version de PHP (doit être 8.2+)
- Les dépendances Composer
- La configuration des secrets
- Les permissions du dépôt

---

**Fait par :** Votre nom  
**Date :** 2025-2026  
**Contexte :** TP GitHub Actions - Formation Test Logiciel