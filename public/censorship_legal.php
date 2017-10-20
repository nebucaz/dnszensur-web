<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include '../include/head.php'; ?>
  </head>

  <body>

    <?php include '../include/nav.php'; ?>

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
        <table id="table"
               data-toggle="table"
               data-url="https://issues17.api.dnszensur.ch/v1/list/legal.json"
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
