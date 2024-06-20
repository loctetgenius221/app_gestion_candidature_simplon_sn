<!DOCTYPE html>
<html>
<head>
    <title>Statut de votre candidature</title>
</head>
<body>
    <h1>Statut de votre candidature</h1>
    <p>Bonjour {{ $candidature->candidat->prenom }} {{ $candidature->candidat->nom }},</p>
    <p>Votre candidature pour la formation {{ $candidature->formation->nom }} a été {{ $candidature->statut }}.</p>
    <p>Cordialement,<br>L'équipe de Simplon Sénégal</p>
</body>
</html>
