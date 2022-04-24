# Dictionnaire de données

## Personnage (`character`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du personnage|
|name|VARCHAR(64)|NOT NULL|Le nom du personnage|
|description|TEXT|NULL|La description du personnage|
|picture|VARCHAR(128)|NULL|L'URL de l'image du personnage|
|created_at|TIMESTAMP|NOT NULL, DEFAULT CURRENT_TIMESTAMP|La date de création du personnage|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du personnage|
|type|entity|NULL|Le type (autre entité) du personnage|

## Type de personnage (`type`)

|Champ|Type|Spécificités|Description|
|-|-|-|-|
|id|INT|PRIMARY KEY, NOT NULL, UNSIGNED, AUTO_INCREMENT|L'identifiant du type|
|name|VARCHAR(64)|NOT NULL|Le nom du type|
|created_at|TIMESTAMP|DEFAULT CURRENT_TIMESTAMP|La date de création du type|
|updated_at|TIMESTAMP|NULL|La date de la dernière mise à jour du type|
