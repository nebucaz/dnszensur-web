<?php include ("../db_connect.php"); /* stellt db verbindung her */ ?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ("../include/head.php"); ?>
  </head>

  <body>

    <?php include ("../include/nav.php"); ?>

    <div class="container">

      <div class="page-header">
        <h1>Datenbank: Gesperrte Webseiten</h1>
      </div>

      <div id="kipo" class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Kinderpornographie</div>
        <div class="panel-body">
          <blockquote><p>Der Begriff Kinderpornografie (manchmal auch mit KiPo oder CP für engl. Child Pornography abgekürzt) bezeichnet die in fast allen Rechtssystemen mit hohen Strafen sanktionierte Darstellung sexueller Handlungen von, an oder vor Kindern.</p><footer><a href="https://de.wikipedia.org/wiki/Kinderpornografie">Wikipedia</a> <cite title="Source Title"><a href="https://de.wikipedia.org/wiki/Wikipedia:Lizenzbestimmungen_Creative_Commons_Attribution-ShareAlike_3.0_Unported">CC-by-sa-3.0</a></cite></footer></blockquote>
          <p>Aus Gründen werden die hier genannten KiPo-Domains zensiert.</p>
        </div>

        <!-- Table -->
        <table class="table" data-toggle="table" data-sort-name="domain">
          <thead>
            <tr> <th data-field="domain" data-sortable="true">Gesperrte Webseiten</th> <th data-field="last_update_swisscom" data-sortable="true">zuletzt geprüft: Swisscom</th> <th data-field="last_update_upc" data-sortable="true">zuletzt geprüft: UPC</th></tr>
          </thead>
          <tbody>
            <?php
              $ergebnis = mysqli_query($db, "SELECT domain, last_update_swisscom, last_update_upc, zensur_status_swisscom, zensur_status_upc FROM domains WHERE zensur_status_swisscom LIKE '2' OR zensur_status_upc LIKE '2'");

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

                $zensur = substr("$row->domain", 0, 3);
                echo "<tr> <td>$zensur*** $badge</td> <td>$zeit_swisscom</td> <td>$zeit_upc</td></tr>";
              }
            ?>
          </tbody>
        </table>
      </div>

    </div><!-- /.container -->

<?php include ("../include/footer.php"); ?>

  </body>
</html>
