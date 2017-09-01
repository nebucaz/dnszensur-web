# dnszensur-web

Hierbei handelt es sich um die Webseite für [DNSzensur.ch](https://dnszensur.ch/). Der Crawler und die Datenbank sind nicht bestandteil dieses Repositorys.

## Installation

### Lokal ausführen

Voraussetzungen: `php7.0`, `php7.0-mysql` _(wurde mit diesen paketen und deren abhängigkeiten unter `Ubuntu 17.04` getestet)_ und eine lokale MySQL-Datenbank die ein par domains enthält (Als Grundlage kann `exampledb.sql` benutzt werden).

1. `git clone https://github.com/mritzmann/dnszensur-web.git`
2. `mv .env-example .env`
3. In `.env` Deine MySQL Zugangsdaten einfüllen.
4. `export $(cat .env | xargs)`
5. `php -S localhost:8080`

Die Webseite ist nun unter [localhost:8080](http://localhost:8080/) erreichbar.

### In Heroku ausühuren

Voraussetzungen: [Heroku CLI](https://devcenter.heroku.com/articles/heroku-cli), Heroku Account und eine MySQL-Datenbank die ein par Domains enthält und über das Internet erreichbar ist (Als Grundlage kann `exampledb.sql` benutzt werden).

1. `git clone https://github.com/mritzmann/dnszensur-web.git`
2. `heroku create`
3. `heroku config:set DB_HOST='localhost' DB_NAME=dnszensur DB_PASSWORD=P@ssw00rd DB_USER=root` (Durch Deine eigenen Zugangsdaten ersetzen)
4. `git push heroku master`

Die Webseite ist nun unter der bei `heroku create` erhaltenen URL erreichbar. Alternativ lässt sich die Webseite mit `heroku open` öffnen.
