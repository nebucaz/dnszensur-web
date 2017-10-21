<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include '../include/head.php'; ?>
  </head>

  <body>

    <?php include '../include/nav.php'; ?>

    <div class="container">

      <div class="page-header">
        <div class="alert alert-warning" role="alert">Jetzt das Referendum gegen Netzsperren durch das Geldspielgesetz <a href="https://www.digitale-gesellschaft.ch/referendum/" class="alert-link" target="_blank">unterschreiben</a>, um weitere Netzsperren zu verhindern!</div>
        <h1>Gesperrte Webseiten: Kinderpornographie</h1>
      </div>

      <div id="kipo" class="panel panel-default">
        <!-- Default panel contents -->
        <div class="panel-heading">Datenbank</div>
        <div class="panel-body">
          <blockquote><p>Der Begriff Kinderpornografie (manchmal auch mit KiPo oder CP für engl. Child Pornography abgekürzt) bezeichnet die in fast allen Rechtssystemen mit hohen Strafen sanktionierte Darstellung sexueller Handlungen von, an oder vor Kindern.</p><footer><a href="https://de.wikipedia.org/wiki/Kinderpornografie">Wikipedia</a> <cite title="Source Title"><a href="https://de.wikipedia.org/wiki/Wikipedia:Lizenzbestimmungen_Creative_Commons_Attribution-ShareAlike_3.0_Unported">CC-by-sa-3.0</a></cite></footer></blockquote>
          <p>Aus Gründen werden die hier genannten KiPo-Domains zensiert.</p>
        </div>

        <!-- Table -->
        <table id="table"
               data-toggle="table"
               data-url="https://issues17.api.dnszensur.ch/v1/list/cp.json"
               data-sort-name="domain"
               data-search="true"
               data-show-columns="true"
               data-show-toggle="false">
          <thead>
            <tr>
              <th data-field="domain" data-sortable="true">Webseite</th>
              <th data-field="zensur_status_swisscom" data-sortable="true" data-formatter="zensurtypFormatter">Swisscom</th>
              <th data-field="zensur_status_upc" data-sortable="true" data-formatter="zensurtypFormatter">UPC</th>
              <th data-field="last_update_swisscom" data-sortable="true" data-visible="false">zuletzt geprüft: Swisscom</th>
              <th data-field="last_update_upc" data-sortable="true" data-visible="false">zuletzt geprüft: UPC</th>
            </tr>
          </thead>
        </table>
      </div>

    </div><!-- /.container -->

<?php include '../include/footer.php'; ?>

<script>

  // Ersetzt id durch font awesome icons
  function zensurtypFormatter(value) {
    if (value.match(0)) {
            var icon = 'fa-check text-success';
            tooltiptext = 'nicht gesperrt';
            } else if (value.match(1)) {
              icon = 'fa-ban text-danger';
              tooltiptext = 'gesperrt';
            } else if (value.match(2)) {
              icon = 'fa-ban text-danger';
              tooltiptext = 'gesperrt';
            } else if (value.match(3)) {
            icon = 'fa-ban text-danger';
            tooltiptext = 'gesperrt';
            } else if (value.match(4)) {
              icon = 'fa-ban text-danger';
              tooltiptext = 'gesperrt';
            } else {
            icon = 'black';
            };
    return  '<i class="fa ' + icon + '" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="' + tooltiptext + '"></i>';
  }

</script>

  </body>
</html>
