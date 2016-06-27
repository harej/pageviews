<!DOCTYPE html>
<html>
  <head>
    <?php include "../../_head.php"; ?>
    <title>
      <?php echo $I18N->msg( 'topviews-title' ) . ' – ' . $I18N->msg( 'url-structure' ); ?>
    </title>
  </head>
  <body>
    <div class="container">
      <header class="col-lg-12 text-center">
        <h4>
          <strong>
            <?php echo $I18N->msg( 'topviews-title' ); ?>
          </strong>
          <small class="app-description">
            <?php echo $I18N->msg( 'url-structure' ); ?>
          </small>
        </h4>
      </header>
      <main class="col-lg-10 col-lg-offset-1">
        <div>
          <?php $topviewsLink = "<pre>//tools.wmflabs.org/topviews?project=en.wikipedia.org</pre>"; ?>
          <?php $project = "<code>en.wikipedia.org</code>"; ?>
          <?php $sitematrixLink = "<a href='https://meta.wikimedia.org/w/api.php?action=sitematrix&amp;formatversion=2'>" . strtolower( $I18N->msg( 'project' ) ) . "</a>"; ?>
          <?php $excludes = "<code>excludes</code>"; ?>
          <?php echo $I18N->msg( 'url-structure-topviews-example', array( 'variables' => array( $topviewsLink, $project, $sitematrixLink, $excludes ), 'parsemag' => true ) ); ?>
        </div>
        <div>
          <h3>
            <?php echo $I18N->msg( 'url-structure-parameters' ); ?>
            <small><?php echo $I18N->msg( 'url-structure-parameters-order' ); ?></small>
          </h3>
          <hr>
          <dl class="dl-horizontal">
            <?php include "../../url_parts/project.php"; ?>
            <dt>excludes</dt>
            <dd>
              <?php echo $I18N->msg( 'url-structure-excludes' ); ?>
            </dd>
            <?php $defaultRange = 'last-week'; ?>
            <?php include "../../url_parts/date_ranges.php"; ?>
            <?php include "../../url_parts/platform.php"; ?>
          </dl>
        </div>
        <div class="col-lg-12 text-center tm">
          <a href="/topviews">
            <?php echo $I18N->msg( 'faq-return-to', array( 'variables' => array( $I18N->msg( 'topviews-title' ) ), 'parsemag' => true ) ); ?>
          </a>
        </div>
        <?php $currentApp = "topviews"; ?>
        <?php include "../../_footer.php"; ?>
      </main>
    </div>
  </body>
</html>