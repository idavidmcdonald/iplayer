<!doctype html>
<html class="no-js" lang="en">
  <head>
    <meta charset="utf-8" />
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>A to Z - <?= strtoupper($letter) ?></title>
    <link rel="stylesheet" href="/css/foundation.css" />
    <link rel="stylesheet" href="/css/app.css" />
  </head>
  <body>
    <div class="row">
      <div class="small-12 medium-10 small-centered columns">
        <div class="row">
          <div class="small-12 columns">
            <h1 class="text-center">iPlayer A to Z</h1>
          </div>
        </div>
        <div class="row">
          <?php foreach ($letters as $l): ?>
            <div class="small-2 medium-1 column end text-center">
              <?php if($l == $letter){ ?> 
                <div class="letter-choice active">
                  <?= strtoupper($l) ?>
                </div>
              <?php } else { ?>
                <a href="/<?= $l ?>/1" id="letter-choice-<?= $l ?>">
                  <div class="letter-choice">
                    <?= strtoupper($l) ?>
                  </div>
                </a>
              <?php } ?>
            </div>
          <?php endforeach; ?>
        </div>
        <div class="row small-up-1 medium-up-2">
          <?php foreach ($programmes as $programme): ?>
            <div class="programme-container column">
              <h5 class="programme-title"><?= $programme->title ?></h5>
              <img class="programme-image" src="<?= str_replace('{recipe}', '560x315', $programme->images->standard) ?>" alt="Photo of <?= $programme->title ?>">
            </div>
          <?php endforeach; ?>
        </div>
      </div>
    </div>
  </body>
</html>
