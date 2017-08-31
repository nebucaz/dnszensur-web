<?php include ("api/db_connect.php"); /* stellt db verbindung her */ ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ("include/head.php"); ?>
  </head>

  <body>

    <?php include ("include/nav.php"); ?>

    <div class="container">

      <div class="page-header">
        <h1>Häufig gestellte Fragen</h1>
      </div>

      <!-- faq panel -->
      <div id="anzahl" class="panel panel-default">
        <div class="panel-heading"><a href="#anzahl"><i class="fa fa-align-left" aria-hidden="true"></i></a> Wie viele Webseiten werden überprüft?</div>
        <div class="panel-body">
          <p>Wir überprüfen regemlässig mehr als eine Million Webseiten. Die Liste der zu überprüfenden Webseiten wird laufend erweitert.</p>
        </div>
      </div>

      <!-- faq panel -->
      <div id="aktualitaet" class="panel panel-default">
        <div class="panel-heading"><a href="#aktualitaet"><i class="fa fa-align-left" aria-hidden="true"></i></a> Wie häufig werden die Daten aktualisiert?</div>
        <div class="panel-body">
          <p>Normalerweise einmal pro Woche. Es kann jedoch vorkommen, dass vereinzelte Daten auch etwas älter sind.</p>
        </div>
      </div>

      <!-- faq panel -->
      <div id="umgehen" class="panel panel-default">
        <div class="panel-heading"><a href="#umgehen"><i class="fa fa-align-left" aria-hidden="true"></i></a> Kann eine DNS-Sperre umgangen werden?</div>
        <div class="panel-body">
          <p>Ja. Du kannst einen anderen DNS-Server benutzen der nicht zensiert.</p>
            <ul>
              <li>Swiss Privacy Foundation: <a href="https://www.privacyfoundation.ch/de/service/dns-sperren.html" target="_blank">DNS-Sperren umgehen</a></li>
              <li>Digitalcourage: <a href="https://digitalcourage.de/support/zensurfreier-dns-server" target="_blank">Zensurfreier DNS-Server</a></li>
            </ul>
        </div>
      </div>

      <!-- faq panel -->
      <div id="sinvoll" class="panel panel-default">
        <div class="panel-heading"><a href="#sinvoll"><i class="fa fa-align-left" aria-hidden="true"></i></a> Sind DNS-Sperren in manchen Fällen nicht sinvoll?</div>
        <div class="panel-body">
          <p>Nein. Löschen statt Sperren ist effektiver, vor allem weil DNS-Sperren einfach umgangen werden können. Zudem können nicht gut überlegte DNS-Sperren auch &laquo;legitime&raquo; Webseiten gefährden. Für viele Unternehmen könnte ein solcher Schaden existenzgefährdend sein.</p>
          <p>Weiterführende Links:</p>
            <ul>
              <li>Digitale Gesellschaft: <a href="https://www.digitale-gesellschaft.ch/uploads/2017/02/Geldspielgesetz_Netzsperren.pdf" target="_blank">Netzsperren machen das Internet unsicher</a></li>
              <li>Heise: <a href="https://www.heise.de/newsticker/meldung/Bundesregierung-Loeschen-statt-Sperren-von-Online-Kinderporno-funktioniert-2123725.html" target="_blank">"Löschen statt Sperren" von Online-Kinderporno funktioniert</a></li>
              <li>Universität Zürich: <a href="http://www.itsl.uzh.ch/dam/jcr:9607879d-3e04-4de2-b25a-bf46fa58d5ac/Gutachten%20Netzsperren-final.pdf" target="_blank">Gutachten: Netzsperren sind untauglich</a></li>
              <li>ISP-Blog: <a href="https://isp-blog.ch/swisscom-sperrt-jimbo-hostgator/" target="_blank">Swisscom sperrt aus versehen Webseiten von Jimdo und HostGator</a></li>
            </ul>
        </div>
      </div>

      <!-- faq panel -->
      <div id="organisationen" class="panel panel-default">
        <div class="panel-heading"><a href="#organisationen"><i class="fa fa-align-left" aria-hidden="true"></i></a> Ich möchte keine Netz-Zensur. Wie kann ich mich dagegen wehren?</div>
        <div class="panel-body">
          <p>Organisationen wie die <a href="https://www.digitale-gesellschaft.ch/uber-uns/unterstuetzer-werden/" target="_blank">Digitale Gesellschaft</a>, <a href="https://www.isoc.ch/" target="_blank">Internet Society</a>, <a href="https://www.grundrechte.ch/schweiz-will-internetsperren-auf-das-urheberrecht-ausweiten.html" target="_blank">Grundrechte</a> oder auch die <a href="http://www.swico.ch/de/aktuell-medien/aktuell/gutachten-der-universitaet-zuerich-netzsperren-sind-untauglich/5247" target="_blank">Swico</a> setzen sich gegen eine Netzsperre ein. Erkundige Dich bei einer solchen Organisation, werde Mitglied und Engagieren Dich!</p>
        </div>
      </div>

      <!-- faq panel -->
      <div id="kategorisierung" class="panel panel-default">
        <div class="panel-heading"><a href="#kategorisierung"><i class="fa fa-align-left" aria-hidden="true"></i></a> Wie werden die Webseiten kategorisiert?</div>
        <div class="panel-body">
          <p>Swisscom und UPC zeigen beim Aufruf von gesperrten Webseiten eine Hinweisseite. Diese beinhaltet die Begründung.</p>
        </div>
      </div>

    </div><!-- /.container -->

<?php include ("include/footer.php"); ?>

  </body>
</html>
