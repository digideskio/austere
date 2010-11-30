<?php // $Id: page.tpl.php,v 1.1.2.5.2.14.2.12 2010/03/01 13:37:46 psynaptic Exp $ ?>
<?php $nodeId = $node->nid ?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Strict//EN"
  "http://www.w3.org/TR/xhtml1/DTD/xhtml1-strict.dtd">
<html<?php print drupal_attributes($html_attr); ?>>

<head>
  <?php print $head; ?>
  <?php print $styles; ?>
  <?php print $scripts; ?>
  <!--[if lt IE 8]><link type="text/css" rel="stylesheet" media="all" href="/shop/sites/all/themes/clean/css/ie-lt8.css" /><![endif]-->
  <!--[if lte IE 6]><link type="text/css" rel="stylesheet" media="all" href="/shop/sites/all/themes/austere/ie-lte6.css" /><![endif]-->
  <title><?php print $head_title; ?></title>
</head>

<body<?php print drupal_attributes($attr); ?>>
<div id="container">

  <div id="fixedHeader">
      <div id="branding">
        <div class="limiter clear-block">
          <?php print $logo_themed; ?>
          <?php print $site_name_themed; ?>
          <?php print $site_slogan_themed; ?>
          <?php print $mission_themed; ?>
          <?php print $search_box; ?>
        </div>
      </div>
      <div id="navigation">
        <div class="limiter clear-block">
          <?php print $skip_link; ?>
          <?php print $primary_links; ?>
          <?php print $secondary_links; ?>
        </div>
      </div>
      <?php if ($header): ?>
        <div id="header">
            <div class="limiter clear-block">
                <?php print $header; ?>
            </div>
        </div>
      <?php endif; ?>
  </div>

  <div id="page">
    <div class="limiter clear-block">
      <div id="main" class="clear-block">

        <?php if ($left): ?>
          <div id="left" class="sidebar">
            <?php if(! $user->uid == 0) { ?>
                <p id="loggedInAs">Logged in as: <a href="/shop/user"><?php print $user->name ?></a></p>
            <?php } ?>
            <?php print $left; ?>
          </div>
        <?php endif; ?>

        <div id="content" class="clear-block">
          <?php print $tabs; ?>
          <?php print $messages; ?>
          <?php print $help; ?>

          <?php print $breadcrumb; ?>
          <?php if ($title && $nodeId!=22 && $nodeId!=7 && $nodeId!=8): ?>
            <h1 class="page-title"><?php print $title; ?></h1>
          <?php endif; ?>

          <?php print $content; ?>
        </div>

        <?php if ($right): ?>
          <div id="right" class="sidebar">
            <?php print $right; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>

  <div id="footer">
    <div class="limiter clear-block">
      <?php print $feed_icons; ?>
      <?php print $footer; ?>
      <?php print $footer_message; ?>
    </div>
  </div>

  <?php print $closure; ?>
</div>
</body>
</html>
