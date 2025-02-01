```mermaid
---
title: Scénario d'Authentification avec Confirmation d'Email
---
flowchart TD
    A[Utilisateur s'inscrit] -->|Envoie formulaire| B[Laravel valide les données]
    B -->|Création utilisateur| C[Enregistrement en base de données]
    C -->|Envoie email de vérification| D[Email envoyé avec lien]
    D -->|Utilisateur clique sur le lien| E[Laravel vérifie l'email]
    E -->|Email validé| F[Compte activé]
    E -->|Lien invalide| G[Erreur - Lien expiré]
    F -->|Peut se connecter| H[Page de connexion]
    H -->|Envoie formulaire| I[Laravel valide les identifiants]
    I -->|Compte vérifié ?| J{Email vérifié ?}
    J -->|Oui| K[Connexion réussie - Accès Dashboard]
    J -->|Non| L[Erreur - Email non vérifié]
    L -->|Propose de renvoyer l'email| D
