# Luminar Rest API with laravel 5.7

Rest api avec laravel 5.7 pour commnicatin avec une application client

## Installation
Cloner mon repertoire et fait un coup de

```
    composer update
```
pour obtenir les packets

## Fonctionnalité

Il met à votre disposition 5 routes:
* (get) 'luminars/{id}' // retrouver un element par l'id
* (get) 'luminars' // recuperer tout les enregistrements de la base de données
* (put) 'luminars/{id}' // mise à jour d'un element 
* (post) 'luminars' // Sauvegarder un element
* (delete) 'luminars/{id} // Supprimer un element suivant la valeur id

## Usage
Pour l'utiliser, completer l'url avec 'api'.
* Pour la methode get retournant tout les elements disponible dans la base de données, l'url à utiliser est:
```
    api/luminars
```
### NB 
vous devez completer l'url avec l'host et le numero de port.
dans mon cas j'obtient
```
    https://localhost:8000/api/luminars
```

## Contribution
Merci et faites en bonne usage