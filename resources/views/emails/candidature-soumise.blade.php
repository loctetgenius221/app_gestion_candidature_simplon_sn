{{-- @component('mail::message')
# Bonjour {{ $candidature->candidat->prenom }},

Votre candidature pour la formation **{{ $candidature->formation->nom }}** a bien été soumise.

Merci de votre intérêt.

Cordialement,<br>
{{ config('app.name') }}
@endcomponent --}}


<!DOCTYPE html>
<html>
<head>
    <title>Candidature Soumise</title>
</head>
<body>
    <h1>Votre candidature a été soumise avec succès</h1>
    <p>Bonjour {{ $candidature->candidat->prenom }} {{ $candidature->candidat->nom }},</p>
    <p>Nous avons bien reçu votre candidature pour la formation {{ $candidature->formation->nom }}.</p>
    <p>Nous vous tiendrons informé de la suite donnée à votre dossier.</p>
    <p>Cordialement,<br>L'équipe de Simplon Sénégal</p>
</body>
</html>
