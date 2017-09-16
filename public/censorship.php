<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ("../include/head.php"); ?>
  </head>

  <body>

    <?php include ("../include/nav.php"); ?>

    <div class="container">

      <div class="page-header">
        <h1>Gesperrte Webseiten</h1>
      </div>

      <div class="row">
        <div class="col-md-6">
          <!-- faq panel -->
          <div id="infotext" class="panel panel-default">
            <div class="panel-heading"><a href="#infotext"><i class="fa fa-align-left" aria-hidden="true"></i></a> Info</div>
            <div class="panel-body">
              <p>Die nachfolgende Tabelle beinhaltet alle durch DNSzensur.ch gefundene Webseiten, die von Swisscom oder UPC gesperrt werden.</p>
              <p>Siehe <a href="faq.php">häufig gestellte Fragen</a></p>
            </div>
          </div>
        </div>

        <div class="col-md-6">
          <!-- faq panel -->
          <div id="legende" class="panel panel-default">
            <div class="panel-heading"><a href="#legende"><i class="fa fa-align-left" aria-hidden="true"></i></a> Legende</div>
            <div class="panel-body">
              <p><i class="fa fa-user-secret" aria-hidden="true"></i> phishing</p>
              <p><i class="fa fa-gavel" aria-hidden="true"></i> rechliche gründe</p>
              <p><i class="fa fa-question-circle" aria-hidden="true"></i> unbekannte gründe</p>
              <p><i class="fa fa-child" aria-hidden="true"></i> kinderpornographie</p>
              <p><i class="fa fa-check" aria-hidden="true"></i> nicht zensiert</p>
            </div>
          </div>
        </div>

          <div class="col-md-12">
            <!-- faq panel -->
            <div id="filter" class="panel panel-default">
              <div class="panel-heading"><a href="#filter"><i class="fa fa-align-left" aria-hidden="true"></i></a> Filter</div>
              <div class="panel-body">
                <button id="filter_ph" class="btn btn-default">phishing</button>
                <button id="filter_re" class="btn btn-default">rechtliche gründe</button>
                <button id="filter_un" class="btn btn-default">unbekannte gründe</button>
                <button id="filter_ki" class="btn btn-default">kinderpornographie</button>
              </div>
            </div>
          </div>
      </div>

        <table id="table"
               data-toggle="table"
               data-url="api/list.json"
               data-sort-name="domain"
               data-search="true"
               data-show-columns="true"
               data-show-toggle="false">
          <thead>
            <tr>
              <th data-field="domain" data-sortable="true">Webseiten</th>
              <th data-field="last_update_swisscom" data-sortable="true" data-visible="false">zuletzt geprüft: Swisscom</th>
              <th data-field="last_update_upc" data-sortable="true" data-visible="false">zuletzt geprüft: UPC</th>
              <th data-field="zensur_status_swisscom" data-sortable="true" data-formatter="zensurtypFormatter">Swisscom</th>
              <th data-field="zensur_status_upc" data-sortable="true" data-formatter="zensurtypFormatter">UPC</th>
            </tr>
          </thead>
        </table>
    </div><!-- /.container -->

<?php include ("../include/footer.php"); ?>
<script>

// Ersetzt id durch font awesome icons
function zensurtypFormatter(value) {
  if (value.match(0)) {
          var icon = 'fa-check';
          } else if (value.match(1)) {
          icon = 'fa-user-secret';
          tooltiptext = 'Phishing';
          } else if (value.match(2)) {
          icon = 'fa-child';
          tooltiptext = 'Kinderpornographie';
          } else if (value.match(3)) {
          icon = 'fa-gavel';
          tooltiptext = 'Rechtliche Gründe';
          } else if (value.match(4)) {
          icon = 'fa-question-circle';
          tooltiptext = 'Unbekannte Gründe';
          } else {
          icon = 'black';
          };
  return  '<i class="fa ' + icon + '" aria-hidden="true" data-toggle="tooltip" data-placement="right" title="' + tooltiptext + '"></i>';
}

// aktiviert tooltop erst nachdem tabelle geladen wurde
$('#table').on('all.bs.table', function (e, name, args) {
    $('[data-toggle="tooltip"]').tooltip()
})

// filter buttons
var $table = $('#table'),
    $button_ph = $('#filter_ph');
    $button_re = $('#filter_re');
    $button_un = $('#filter_un');
    $button_ki = $('#filter_ki');

$(function () {
    $button_ph.click(function () {
        $table.bootstrapTable('filterBy', {
            zensur_status_upc: ["1"], zensur_status_swisscom: ["1"]
        });
    });
    $button_re.click(function () {
        $table.bootstrapTable('filterBy', {
            zensur_status_upc: ["3"], zensur_status_swisscom: ["3"]
        });
    });
    $button_un.click(function () {
        $table.bootstrapTable('filterBy', {
            zensur_status_upc: ["4"], zensur_status_swisscom: ["4"]
        });
    });
    $button_ki.click(function () {
        $table.bootstrapTable('filterBy', {
            zensur_status_upc: ["2"], zensur_status_swisscom: ["2"]
        });
    });
});

</script>
  </body>
</html>
