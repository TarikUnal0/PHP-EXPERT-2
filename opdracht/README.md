# PHP-EXPERT-2 Eindopdracht

## Inleiding

De eindopdracht voor PHP EXPERT 2 gaat over de inhoud van PHP EXPERT en MYSQL Advanced. Daarnaast is de vereiste dat je authenticatie inbouwt (login).

Je dient gebruik te maken van

- CREATE, READ, UPDATE, DELETE (CRUD) en JOINS
- PDO
- HTML
- CSS (Bootstrap mag)
- PHP
- MYSQL
- POST en GET
- SESSION

`Alleen in overleg mag je een PHP framework gebruiken`

## Casus

Fietsenmaker Snelle Jelle wil na een reparatiebeurt zijn klanten per SMS of Whatspapp op de hoogte stellen dat de reparatie van de fiets klaar is. In dit bericht wil hij ook vertellen hoe hoog de reparatiekosten zijn.​

- Iedere gebruiker dient in te loggen en uit te loggen​

- Er zijn twee type gebruikers: **medewerkers** en **klanten​**
- Iedere klant kan 0 of meerdere fietsen hebben

Een **klant** kan ​

- Al haar reparaties in een overzicht zien​
- Kan alle reparaties aan een specifieke fiets bekijken

Een **medewerker** kan ​

- Alle reparaties bekijken, wijzigen of verwijderen​
- Alle fietsen bekijken, wijzigen of verwijderen​
- Alle klanten bekijken, wijzigen of verwijderen​

Een **medewerker** heeft de volgende eigenschappen:

- voornaam
- achternaam
- email
- telefoonnummer
- wachtwoord
- rol

Een **reparatie** heeft de volgende eigenschappen:

- titel
- datum
- tijdstip
- opmerkingen
- kosten

Een **fiets** heeft de volgende eigenschappen:

- merk
- model (man of vrouw)
- type (elektrisch of niet)
- kleur
- soort rem

## Opdracht

Jij dient een volledig werkende Webapplicatie op te leveren. Je wordt beoordeeld op je presentatie van het product en de uitleg van de flow van je code.

### Projectgrens

Klanten hoeven niet werkelijk een bericht te krijgen op Whatsapp. Dit mag je simuleren.
