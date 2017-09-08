<?php include ("../db_connect.php"); /* stellt db verbindung her */ ?>
<?php
  $total = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains");
  $totalrow = mysqli_fetch_assoc($total);

  $totalgesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 1 OR zensur_status_swisscom LIKE 2 OR zensur_status_swisscom LIKE 3 OR zensur_status_swisscom LIKE 4 OR zensur_status_upc LIKE 1 OR zensur_status_upc LIKE 2 OR zensur_status_upc LIKE 3 OR zensur_status_upc LIke 4");
  $totalgesperrtrow = mysqli_fetch_assoc($totalgesperrt);

  $totalphishinggesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 1 OR zensur_status_upc LIKE 1");
  $totalphishinggesperrtrow = mysqli_fetch_assoc($totalphishinggesperrt);

  $totalrechtlichgesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 3 OR zensur_status_upc LIKE 3");
  $totalrechtlichgesperrtrow = mysqli_fetch_assoc($totalrechtlichgesperrt);

  $totalunbekanntgesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 4 OR zensur_status_upc LIKE 4");
  $totalunbekanntgesperrtrow = mysqli_fetch_assoc($totalunbekanntgesperrt);

  $totalkipogesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 2 OR zensur_status_upc LIKE 2");
  $totalkipogesperrtrow = mysqli_fetch_assoc($totalkipogesperrt);

  /* -------------------- */

  $swisscomtotal = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 1 OR zensur_status_swisscom LIKE 2 OR zensur_status_swisscom LIKE 3 OR zensur_status_swisscom LIKE 4");
  $swisscomtotalrow = mysqli_fetch_assoc($swisscomtotal);

  $swisscomtotalphishinggesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 1");
  $swisscomtotalphishinggesperrtrow = mysqli_fetch_assoc($swisscomtotalphishinggesperrt);

  $swisscomtotalrechtlichgesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 3");
  $swisscomtotalrechtlichgesperrtrow = mysqli_fetch_assoc($swisscomtotalrechtlichgesperrt);

  $swisscomtotalunbekanntgesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 4");
  $swisscomtotalunbekanntgesperrtrow = mysqli_fetch_assoc($swisscomtotalunbekanntgesperrt);

  $swisscomtotalkipogesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_swisscom LIKE 2");
  $swisscomtotalkipogesperrtrow = mysqli_fetch_assoc($swisscomtotalkipogesperrt);

  /* -------------------- */

  $upctotal = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_upc LIKE 1 OR zensur_status_upc LIKE 2 OR zensur_status_upc LIKE 3 OR zensur_status_upc LIKE 4");
  $upctotalrow = mysqli_fetch_assoc($upctotal);

  $upctotalphishinggesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_upc LIKE 1");
  $upctotalphishinggesperrtrow = mysqli_fetch_assoc($upctotalphishinggesperrt);

  $upctotalrechtlichgesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_upc LIKE 3");
  $upctotalrechtlichgesperrtrow = mysqli_fetch_assoc($upctotalrechtlichgesperrt);

  $upctotalunbekanntgesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_upc LIKE 4");
  $upctotalunbekanntgesperrtrow = mysqli_fetch_assoc($upctotalunbekanntgesperrt);

  $upctotalkipogesperrt = mysqli_query($db, "SELECT COUNT(domain) AS anzahl FROM domains WHERE zensur_status_upc LIKE 2");
  $upctotalkipogesperrtrow = mysqli_fetch_assoc($upctotalkipogesperrt);
?>
<!DOCTYPE html>
<html lang="de">
  <head>
    <?php include ("../include/head.php"); ?>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/Chart.js/2.6.0/Chart.bundle.min.js"></script>
  </head>

  <body>

    <?php include ("../include/nav.php"); ?>

    <div class="container">

      <div class="page-header">
        <h1>Statistiken: Gesperrte Webseiten</h1>
      </div>

      <div class="row">

        <!-- panel -->
        <div class="col-md-6">
          <div id="total_provider" class="panel panel-default">
            <div class="panel-heading"><a href="#total_provider"><i class="fa fa-align-left" aria-hidden="true"></i></a> Total nach Provider</div>
            <div class="panel-body">
              <canvas id="chart_total_provider" width="100" height="50px"></canvas>
            </div>
          </div>
        </div>

        <!-- panel -->
        <div class="col-md-6">
          <div id="total_kategorie" class="panel panel-default">
            <div class="panel-heading"><a href="#total_kategorie"><i class="fa fa-align-left" aria-hidden="true"></i></a> Total nach Kategorie</div>
            <div class="panel-body">
              <canvas id="chart_total_kategorie" width="100" height="50px"></canvas>
            </div>
          </div>
        </div>

        <!-- panel -->
        <div class="col-md-6">
          <div id="swisscom" class="panel panel-default">
            <div class="panel-heading"><a href="#swisscom"><i class="fa fa-align-left" aria-hidden="true"></i></a> Swisscom</div>
            <div class="panel-body">
              <canvas id="chart_swisscom" width="100" height="50px"></canvas>
            </div>
          </div>
        </div>

        <!-- panel -->
        <div class="col-md-6">
          <div id="upc" class="panel panel-default">
            <div class="panel-heading"><a href="#upc"><i class="fa fa-align-left" aria-hidden="true"></i></a> UPC</div>
            <div class="panel-body">
              <canvas id="chart_upc" width="100" height="50px"></canvas>
            </div>
          </div>
        </div>

      </div>

      <script>
      var ctx = document.getElementById("chart_total_provider");
      var chart_total_provider = new Chart(ctx,{
        type: 'pie',
                data: {
                    datasets: [{
                      data: [<?php echo $swisscomtotalrow[anzahl] ?>, <?php echo $upctotalrow[anzahl] ?>],
                      backgroundColor: [
                          "#1af",
                          "#249",
                      ]
                    }],
                    labels: [
                        "Swisscom",
                        "UPC",
                    ]
                },
                options: {
                    responsive: true
                }
      });

      </script>

      <script>
      var ctx = document.getElementById("chart_total_kategorie");
      var chart_total_kategorie = new Chart(ctx,{
        type: 'pie',
                data: {
                    datasets: [{
                      data: [<?php echo $totalphishinggesperrtrow[anzahl] ?>, <?php echo $totalrechtlichgesperrtrow[anzahl] ?>, <?php echo $totalunbekanntgesperrtrow[anzahl] ?>, <?php echo $totalkipogesperrtrow[anzahl] ?>],
                      backgroundColor: [
                        "green",
                        "yellow",
                        "grey",
                        "red",
                      ]
                    }],
                    labels: [
                      "Phishing",
                      "Rechtliche Gründe",
                      "Unbekannte Gründe",
                      "Kinderpornographie",
                    ]
                },
                options: {
                    responsive: true
                }
      });

      </script>

      <script>
      var ctx = document.getElementById("chart_swisscom");
      var chart_swisscom = new Chart(ctx,{
        type: 'pie',
                data: {
                    datasets: [{
                      data: [<?php echo $swisscomtotalphishinggesperrtrow[anzahl] ?>, <?php echo $swisscomtotalrechtlichgesperrtrow[anzahl] ?>, <?php echo $swisscomtotalunbekanntgesperrtrow[anzahl] ?>, <?php echo $swisscomtotalkipogesperrtrow[anzahl] ?>],
                      backgroundColor: [
                          "green",
                          "yellow",
                          "grey",
                          "red",
                      ]
                    }],
                    labels: [
                        "Phishing",
                        "Rechtliche Gründe",
                        "Unbekannte Gründe",
                        "Kinderpornographie",
                    ]
                },
                options: {
                    responsive: true
                }
      });

      </script>

      <script>
      var ctx = document.getElementById("chart_upc");
      var chart_upc = new Chart(ctx,{
        type: 'pie',
                data: {
                    datasets: [{
                      data: [<?php echo $upctotalphishinggesperrtrow[anzahl] ?>, <?php echo $upctotalrechtlichgesperrtrow[anzahl] ?>, <?php echo $upctotalunbekanntgesperrtrow[anzahl] ?>, <?php echo $upctotalkipogesperrtrow[anzahl] ?>],
                      backgroundColor: [
                          "green",
                          "yellow",
                          "grey",
                          "red",
                      ]
                    }],
                    labels: [
                        "Phishing",
                        "Rechtliche Gründe",
                        "Unbekannte Gründe",
                        "Kinderpornographie",
                    ]
                },
                options: {
                    responsive: true
                }
      });

      </script>

    </div><!-- /.container -->

<?php include ("../include/footer.php"); ?>


  </body>
</html>
