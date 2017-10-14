<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include '../include/head.php'; ?>
  </head>

  <body>

    <?php include '../include/nav.php'; ?>

    <div class="jumbotron">
      <div class="container">
        <h1>DNS Zensur in der Schweiz</h1>
        <p>Auch Schweizer Internet Provider zensieren das Web.</p>
        <div class="btn-group hidden-print">
          <button type="button" class="btn btn-primary btn-lg dropdown-toggle" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Zensur-Datenbank &raquo;
            <span class="sr-only">Toggle Dropdown</span>
          </button>
          <ul class="dropdown-menu">
            <li><a href="censorship_phishing.php">Phishing</a></li>
            <li><a href="censorship_legal.php">Rechtliche Gründe</a></li>
            <li><a href="censorship_unknown.php">Unbekannte Gründe</a></li>
            <li><a href="censorship_cp.php">Kinderpornographie</a></li>
          </ul>
        </div>
      </div>
    </div>

    <div class="container">

      <div class="row">
        <div class="col-md-6">
          <h2>Projekt-Idee</h2>
          <p>Schweizer Internet Anbieter sperren aus unterschiedlichsten Gründen gewisse Webseiten mittels DNS-Server. Wir überprüfen regelmässig mehr als eine Million Webseiten und findet gesperrte Webseiten.</p>
          <p>Die momentan gesperrten Webseiten können thematisch sortiert in der Zensur-Datenbank eingesehen werden.</p>
        </div>
        <div class="col-md-6">
          <h2>Sind DNS-Sperren sinvoll?</h2>
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

    </div><!-- /.container -->

<?php include '../include/footer.php'; ?>

  </body>
</html>
