<?php include ("include/db_connect.php"); /* stellt db verbindung her */ ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ("include/head.php"); ?>
  </head>

  <body>

    <?php include ("include/nav.php"); ?>

    <div class="container">

      <div class="page-header">
        <h1>Datenbank: Gesperrte Webseiten</h1>
      </div>

      <div id="rechtlich" class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Rechtliche Gründe</div>
        <div class="panel-body">
          <p>2002 wurden mehrere Internet Provider von einem waadtländischen Gericht zur Sperrung von mehreren Webseiten verpflichtet.</p>
          <ul>
            <li>heise.de: <a href="https://www.heise.de/newsticker/meldung/Schweizer-Richterin-verlangt-Website-Sperrung-von-Providern-71791.html?view=print" target="_blank">Schweizer Richterin verlangt Website-Sperrung von Providern</a></li>
          </ul>
        </div>

        <!-- Table -->
        <table class="table" data-toggle="table" data-sort-name="domain">
          <thead>
            <tr> <th data-field="domain" data-sortable="true">Gesperrte Webseiten</th> <th data-field="last_update_swisscom" data-sortable="true">zuletzt geprüft: Swisscom</th> <th data-field="last_update_upc" data-sortable="true">zuletzt geprüft: UPC</th></tr>
          </thead>
          <tbody>
            <?php
              $ergebnis = mysqli_query($db, "SELECT domain, last_update_swisscom, last_update_upc, zensur_status_swisscom, zensur_status_upc FROM domains WHERE zensur_status_swisscom LIKE '3' OR zensur_status_upc LIKE '3'");

              while($row = mysqli_fetch_object($ergebnis))
              {
                $badge_swisscom = "<span class=\"label label-default\">Swisscom</span>";
                $badge_upc      = "<span class=\"label label-default\">UPC</span>";
                $badge          = "";

                if ($row->zensur_status_swisscom) {
                  $badge = $badge_swisscom;
                }

                if ($row->zensur_status_upc) {
                  $badge = $badge . " " . $badge_upc;
                }

                // konvertiert Y-m-d zu d.m.Y
                $zeit_swisscom = date("d.m.Y",strtotime($row->last_update_swisscom));
                $zeit_upc = date("d.m.Y",strtotime($row->last_update_upc));

                echo "<tr> <td>$row->domain $badge</td> <td>$zeit_swisscom</td> <td>$zeit_upc</td></tr>";
              }
            ?>
          </tbody>
        </table>
      </div>

    </div><!-- /.container -->

<?php include ("include/footer.php"); ?>

  </body>
</html>
