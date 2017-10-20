<?php

function echoActiveClassIfRequestMatches($requestUri)
{
    $current_file_name = basename($_SERVER['REQUEST_URI'], '.php');

    if ($current_file_name == $requestUri) {
        echo 'active';
    }
}

?>

<nav class="navbar navbar-default navbar-fixed-top">
  <div class="container">
    <div class="navbar-header">
      <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
        <span class="sr-only">Toggle navigation</span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
        <span class="icon-bar"></span>
      </button>
      <a class="navbar-brand" href="/">DNSzensur.ch</a>
    </div>
    <div id="navbar" class="collapse navbar-collapse">
      <ul class="nav navbar-nav">
        <li class="<?=echoActiveClassIfRequestMatches('')?>"><a href="/">Home</a></li>
        <li class="dropdown <?=echoActiveClassIfRequestMatches('censorship_phishing')?><?=echoActiveClassIfRequestMatches('censorship_legal')?><?=echoActiveClassIfRequestMatches('censorship_unknown')?><?=echoActiveClassIfRequestMatches('censorship_cp')?>">
          <a href="#" class="dropdown-toggle" data-toggle="dropdown" role="button" aria-haspopup="true" aria-expanded="false">Datenbank <span class="caret"></span></a>
          <ul class="dropdown-menu">
            <li><a href="censorship_phishing.php">Phishing</a></li>
            <li><a href="censorship_legal.php">Rechtliche Gründe</a></li>
            <li><a href="censorship_unknown.php">Unbekannte Gründe</a></li>
            <li><a href="censorship_cp.php">Kinderpornographie</a></li>
          </ul>
        </li>
        <li class="<?=echoActiveClassIfRequestMatches('stat')?>"><a href="stat.php">Statistiken</a></li>
        <li class="<?=echoActiveClassIfRequestMatches('faq')?>"><a href="faq.php">FAQ</a></li>
      </ul>
      <ul class="nav navbar-nav navbar-right hidden-xs">
        <li><a href="https://www.facebook.com/DNSzensur" target="_blank" title="Facebook"><i class="fa fa-lg fa-facebook" aria-hidden="true"></i></a></li>
        <li><a href="https://twitter.com/DNSzensur" target="_blank" title="Twitter"><i class="fa fa-lg fa-twitter" aria-hidden="true"></i></a></li>
      </ul>
    </div><!--/.nav-collapse -->
  </div>
</nav>
