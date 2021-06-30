<?php
require_once "includes/config.php";
require_once "includes/cookies.php";
require_once "includes/lang.php";
require_once "themes/$theme/config.php";

$smarty->assign("theme_author", $theme_author);
$smarty->assign("theme_authorurl", $theme_authorurl);
$smarty->assign("theme_description", $theme_description);
$smarty->assign("theme_name", $theme_name);
$smarty->assign("theme_version", $theme_version);
?>
<!--

  _ (`-.     ('-.      _   .-')       _ (`-.                ('-.    _   .-')                                .-')      .-')       ('-.                _   .-')      .-')
  ( (OO  )   ( OO ).-. ( '.( OO )_    ( (OO  )             _(  OO)  ( '.( OO )_                             ( OO ).   ( OO ).   _(  OO)              ( '.( OO )_   ( OO ).
 _.`     \   / . --. /  ,--.   ,--.) _.`     \  ,--.      (,------.  ,--.   ,--.) .-'),-----.  ,--. ,--.   (_)---\_) (_)---\_) (,------.    .-----.   ,--.   ,--.)(_)---\_)
(__...--''   | \-.  \   |   `.'   | (__...--''  |  |.-')   |  .---'  |   `.'   | ( OO'  .-.  ' |  | |  |   /    _ |  /    _ |   |  .---'   '  .--./   |   `.'   | /    _ |
 |  /  | | .-'-'  |  |  |         |  |  /  | |  |  | OO )  |  |      |         | /   |  | |  | |  | | .-') \  :` `.  \  :` `.   |  |       |  |('-.   |         | \  :` `.
 |  |_.' |  \| |_.'  |  |  |'.'|  |  |  |_.' |  |  |`-' | (|  '--.   |  |'.'|  | \_) |  |\|  | |  |_|( OO ) '..`''.)  '..`''.) (|  '--.   /_) |OO  )  |  |'.'|  |  '..`''.)
 |  .___.'   |  .-.  |  |  |   |  |  |  .___.' (|  '---.'  |  .--'   |  |   |  |   \ |  | |  | |  | | `-' /.-._)   \ .-._)   \  |  .--'   ||  |`-'|   |  |   |  | .-._)   \
 |  |        |  | |  |  |  |   |  |  |  |       |      |   |  `---.  |  |   |  |    `'  '-'  '('  '-'(_.-' \       / \       /  |  `---. (_'  '--'\   |  |   |  | \       /
 `--'        `--' `--'  `--'   `--'  `--'       `------'   `------'  `--'   `--'      `-----'   `-----'     `-----'   `-----'   `------'    `-----'   `--'   `--'  `-----'

<-- Meta -->
<meta name="title" content="<?= $title?>">
<meta name="description" content="<?= $descr?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<meta name="robots" content="index, follow">
<meta name="language" content="<?= $lang?>">
<meta name="generator" content="PamplemousseCMS">
<meta charset="utf-8">
<meta property="og:title" content="<?= $title?>">
<meta property="og:description" content="<?= $descr?>">
<meta property="og:type" content="website">
<meta property="og:url" content="<?= $link?>/">
<meta property="og:image" content="<?= $link?>/img/favicon.png">
<meta property="twitter:card" content="summary_large_image">
<meta property="twitter:url" content="<?= $link?>/">
<meta property="twitter:title" content="<?= $title?>">
<meta property="twitter:description" content="<?= $descr?>">
<meta property="twitter:image" content="<?= $link?>/img/favicon.png">

<!-- Link & Script -->
<link href="http://fonts.googleapis.com/css?family=Source+Sans+Pro" rel="stylesheet" type="text/css">
<link href="<?= $link?>/themes/<?= $theme?>/css/bootstrap.css" rel="stylesheet" media="all" type="text/css">
<script src="<?= $link?>/themes/<?= $theme?>/js/bootstrap.js"></script>
<script src="https://unpkg.com/@popperjs/core@2"></script>
<script src="https://unpkg.com/tippy.js@6"></script>
<script src="//cdn.jsdelivr.net/npm/sweetalert2@11"></script>
<link rel="shortcut icon" href="<?= $link?>/img/favicon.png" type="image/x-icon"/>
