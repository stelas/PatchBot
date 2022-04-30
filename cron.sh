#!/bin/bash

SCRIPTDIR="`dirname "$(readlink -f "$0")"`"
SITEDIR="/var/www/virtual/steffen/patchbot.de"

"$SCRIPTDIR/PatchCollector.php" || exit 1
"$SCRIPTDIR/PatchViewer.php" > "$SITEDIR/index.html"
"$SCRIPTDIR/PatchFeeder.php" > "$SITEDIR/rss.xml"
[ -e "$SCRIPTDIR/TwitterKey.php" ]  && "$SCRIPTDIR/PatchTwitter.php"
[ -e "$SCRIPTDIR/MastodonKey.php" ] && "$SCRIPTDIR/PatchMastodon.php"

