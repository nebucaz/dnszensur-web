<!-- allgemeine infos -->
<meta charset="utf-8" />
<meta http-equiv="X-UA-Compatible" content="IE=edge" />
<meta name="viewport" content="width=device-width, initial-scale=1" />

<!-- meta-infos -->
<title>DNSzensur.ch</title>
<meta name="author" content="Markus Ritzmann" />
<meta name="description" content="Schweizer Internet Anbieter wie Swisscom und UPC sperren gewisse Webseiten mittels DNS-Server. DNSzensur.ch überprüft regelmässig Tausende von Domains und findet gesperrte Webseiten." />

<?php // page url for social media tags
$url = ((empty($_SERVER['HTTPS'])) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'];
$full_url = ((empty($_SERVER['HTTPS'])) ? 'http://' : 'https://').$_SERVER['HTTP_HOST'].$_SERVER['REQUEST_URI']; ?>

<!-- Twitter Card -->
<meta name="twitter:card" content="summary" />
<meta name="twitter:site" content="@DNSzensur" />
<meta name="twitter:title" content="DNS Zensur in der Schweiz" />
<meta name="twitter:description" content="Auch Schweizer Internet Provider zensieren das Web." />
<meta name="twitter:image" content="<?php echo $url ?>/src/img/sm_header.png" />

<!-- Open Graph: Wird von Facebook benutzt -->
<meta property="og:url" content="<?php echo $full_url ?>" />
<meta property="og:type" content="article" />
<meta property="og:title" content="DNS Zensur in der Schweiz" />
<meta property="og:description" content="Auch Schweizer Internet Provider zensieren das Web." />
<meta property="og:image:url" content="<?php echo $url ?>/src/img/sm_header.png" />
<meta property="og:image:type" content="image/png" />

<!-- bootstrap core CSS -->
<link rel="stylesheet" href="src/css/bootstrap.min.css" async/>

<!-- custom styles -->
<link rel="stylesheet" href="src/css/custom.css" async/>

<!-- bootstrap-table CSS -->
<link rel="stylesheet" href="src/css/bootstrap-table.min.css" async/>

<!-- font awesome css -->
<link rel="stylesheet" href="src/css/font-awesome.min.css" async/>

<!-- favions and mobile icons -->
<link rel="icon" href="src/img/logo_quadrat.png" />
<link rel="apple-touch-icon" href="src/img/logo_quadrat.png" />
