# dnszensur-web

Hierbei handelt es sich um die Webseite für [DNSzensur.ch](https://dnszensur.ch/). Der Crawler und die Datenbank sind nicht bestandteil dieses Repositorys.

## Installation

### Lokal ausführen

Voraussetzungen: `php7.0`, `php7.0-mysql` _(wurde mit diesen paketen und deren abhängigkeiten unter `Ubuntu 17.04` getestet)_ und eine lokale Datenbank die ein par domains enthält.

1. `git clone https://github.com/mritzmann/dnszensur-web.git`
2. `mv .env-example .env`
3. In `.env` Deine MySQL Zugangsdaten einfüllen.
4. `export $(cat .env | xargs)`
5. `php -S localhost:8080`

Die Webseite ist nun unter [localhost:8080](http://localhost:8080/) erreichbar.
