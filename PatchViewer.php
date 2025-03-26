#!/usr/bin/php
<?php

require('PatchObject.php');
require('Database.php');

date_default_timezone_set('UTC');
$db = new Database(__DIR__ . '/db.json');
if (!$db->load()) {
	exit(1);
}
$db->sort();

?>
<!doctype html>
<html lang="en" data-bs-theme="auto">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="title" content="PatchBot">
    <meta name="author" content="Steffen Lange">
    <meta name="date" content="<?php echo date(DATE_W3C); ?>">
    <meta name="description" content="Patch Notification Robot provides you the latest update notifications.">
    <meta property="og:type" content="website">
    <meta property="og:url" content="https://www.patchbot.de/">
    <meta property="og:title" content="PatchBot">
    <meta property="og:description" content="Patch Notification Robot provides you the latest update notifications.">
    <meta property="og:image" content="https://www.patchbot.de/assets/patchbot.jpg">
    <meta property="twitter:card" content="summary">
    <meta property="twitter:url" content="https://www.patchbot.de/">
    <meta property="twitter:title" content="PatchBot">
    <meta property="twitter:description" content="Patch Notification Robot provides you the latest update notifications.">
    <meta property="twitter:image" content="https://www.patchbot.de/assets/patchbot.jpg">
    <link rel="icon" href="favicon.ico">
    <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="assets/font/bootstrap-icons.min.css">
    <link rel="stylesheet" type="text/css" href="assets/css/datatables.min.css">
    <script src="assets/js/jquery-3.7.1.slim.min.js"></script>
    <script src="assets/js/datatables.min.js"></script>
    <script src="assets/js/bootstrap.bundle.min.js"></script>
    <script>
      $(document).ready(function() {
        $('[data-toggle="tooltip"]').tooltip();
        $('#patches').DataTable( {
          stateSave: true
        } );
      });
    </script>
    <title>Patch Notification Robot</title>
  </head>
  <body>
    <div class="container p-5">
      <h1 class="mb-4">Patch Notification Robot</h1>
      <p class="text-center"><a href="https://www.paypal.com/cgi-bin/webscr?cmd=_s-xclick&amp;hosted_button_id=WYQZCVJPVSS5L&amp;source=url" title="Donate with PayPal" target="_blank" rel="noopener"><img alt="Donate with PayPal" title="Donate with PayPal" src="assets/btn_donateCC_LG.gif" width="147" height="47"></a></p>
      <p><a href="https://www.patchbot.de/rss.xml" title="RSS"><i class="bi-rss"></i><span class="visually-hidden">Subscribe</span></a> <a rel="me" href="https://mastodon.social/@Patchbot_de" title="Mastodon"><i class="bi-mastodon"></i><span class="visually-hidden">Follow me</span></a> <a href="https://github.com/stelas/PatchBot" title="GitHub"><i class="bi-github"></i><span class="visually-hidden">Fork me</span></a> Providing you the latest update notifications.</p>
      <table id="patches" class="table table-bordered table-striped table-sm" data-order='[[ 4, "desc" ]]' data-page-length='25'>
        <thead class="table-primary">
          <tr>
            <th>Vendor</th>
            <th>Product</th>
            <th>Branch</th>
            <th>Version</th>
            <th data-toggle="tooltip" title="*) or first discovery time">Release Date<sup>*</sup></th>
          </tr>
        </thead>
        <tbody>
<?php

	for ($i = 0; $i < $db->count(); $i++) {
		$patch = $db->get($i);
		echo '          <tr>';
		echo '<td>' . htmlentities($patch->getVendor()) . '</td>';
		echo '<td><a href="' . htmlspecialchars($patch->getURL()) . '" title="Download ' . htmlentities($patch->getProduct()) . '">' . htmlentities($patch->getProduct()) . '</a></td>';
		echo '<td>' . htmlentities($patch->getBranch()) . '</td>';
		echo '<td>' . htmlentities($patch->getVersion()) . '</td>';
		echo '<td>' . date('Y-m-d', $patch->getTimestamp()) . '</td>';
		echo '</tr>' . "\n";
	}

?>
        </tbody>
      </table>
      <hr>
      <p class="text-end">Information are provided without any warranty. Trademarks are property of their respective owners.<br>
      &copy; 2019-<?php echo date('y'); ?> <a href="https://steffen.lange.tel/" title="Steffen Lange">Steffen Lange</a> | <a href="https://www.dateihal.de/cms/imprint" title="Imprint">Imprint</a> | <a href="https://www.dateihal.de/cms/privacy" title="Privacy">Privacy</a></p>
    </div>
<script>
/*!
 * Color mode toggler for Bootstrap's docs (https://getbootstrap.com/)
 * Copyright 2011-2023 The Bootstrap Authors
 * Licensed under the Creative Commons Attribution 3.0 Unported License.
 */

(() => {
  'use strict'

  const getStoredTheme = () => localStorage.getItem('theme')
  const setStoredTheme = theme => localStorage.setItem('theme', theme)

  const getPreferredTheme = () => {
    const storedTheme = getStoredTheme()
    if (storedTheme) {
      return storedTheme
    }

    return window.matchMedia('(prefers-color-scheme: dark)').matches ? 'dark' : 'light'
  }

  const setTheme = theme => {
    if (theme === 'auto' && window.matchMedia('(prefers-color-scheme: dark)').matches) {
      document.documentElement.setAttribute('data-bs-theme', 'dark')
    } else {
      document.documentElement.setAttribute('data-bs-theme', theme)
    }
  }

  setTheme(getPreferredTheme())

  const showActiveTheme = (theme, focus = false) => {
    const themeSwitcher = document.querySelector('#bd-theme')

    if (!themeSwitcher) {
      return
    }

    const themeSwitcherText = document.querySelector('#bd-theme-text')
    const activeThemeIcon = document.querySelector('.theme-icon-active use')
    const btnToActive = document.querySelector(`[data-bs-theme-value="${theme}"]`)
    const svgOfActiveBtn = btnToActive.querySelector('svg use').getAttribute('href')

    document.querySelectorAll('[data-bs-theme-value]').forEach(element => {
      element.classList.remove('active')
      element.setAttribute('aria-pressed', 'false')
    })

    btnToActive.classList.add('active')
    btnToActive.setAttribute('aria-pressed', 'true')
    activeThemeIcon.setAttribute('href', svgOfActiveBtn)
    const themeSwitcherLabel = `${themeSwitcherText.textContent} (${btnToActive.dataset.bsThemeValue})`
    themeSwitcher.setAttribute('aria-label', themeSwitcherLabel)

    if (focus) {
      themeSwitcher.focus()
    }
  }

  window.matchMedia('(prefers-color-scheme: dark)').addEventListener('change', () => {
    const storedTheme = getStoredTheme()
    if (storedTheme !== 'light' && storedTheme !== 'dark') {
      setTheme(getPreferredTheme())
    }
  })

  window.addEventListener('DOMContentLoaded', () => {
    showActiveTheme(getPreferredTheme())

    document.querySelectorAll('[data-bs-theme-value]')
      .forEach(toggle => {
        toggle.addEventListener('click', () => {
          const theme = toggle.getAttribute('data-bs-theme-value')
          setStoredTheme(theme)
          setTheme(theme)
          showActiveTheme(theme, true)
        })
      })
  })
})()
</script>
  </body>
</html>
