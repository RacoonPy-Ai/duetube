
<?php

error_reporting(0);
require 'bliptor_1.2.04/Bliptor.php';

$info = $api->getInfo($_POST['url']);
$thumbnail   = $info['thumbnail'];
$title       = $info['title'];
$description = $info['description'];
$details     = $info['download_details'];

?>

<?php include_once('includes/header.inc.php') ?>
<?php include_once('includes/navbar.inc.php') ?>

    <?php if(!empty($info['thumbnail'])): ?>
    <div class="container vbox">
        <div class="row justify-content-center">
            <div class="col-xl-6">
                <div class="card">
                    <img class="card-img-top" src="<?= $thumbnail ?>" alt="Card image cap">
                    <div class="card-body">
                        <h5 class="card-title"><p><strong>Title: </strong><?= $title ?></p></h5>
                        <p class="card-text"><?=substr( $description,0,200).'...' ?></p>
                        <!-- <a href="#" class="btn btn-primary">Go somewhere</a> -->
                    </div>
                </div>
            </div>
                    
            <div class="col-xl-6" id="download-option">
                <!-- <div class="card-header text-white"><h5>Download Options</h5></div> -->
                <ul class="list-group">
                    <?php foreach($details as $key => $val): ?>
                        <li class="list-group-item d-flex justify-content-between align-items-center">
                        <?= (!empty($val['type'])) ? $val['type'] : 'mp3' ?>
                        <span class="badge badge-pill"><a href="<?= $val['url'] ?>" class="btn btn-sm bg-second text-white">Download</a></span>
                        </li>
                    <?php endforeach; ?>
                </ul>
            </div>
        </div>  
    </div>
    <?php endif; ?>

    <div class="container instructions">
        <h4>How can I save MP4 videos in HD quality?</h4>
        <p>1. Copy the necessary URL to the input field on the top of the page. Press Enter or click the Download button.</p>
        <p>2. Use short domain names: example.com.</p>
        <p>3. Install the browser add-on and download files with one click.</p>
    </div>



    <div class="container instructions">
        <h4>What is the quality of downloaded videos?</h4>
        <p>With our online video downloader, you can save high-quality videos in MP4 format. Our software supports SD, HD, FullHD, 2K, and 4K. If an author uploaded a video in 1080p, you could save it in the same quality.</p>
    </div>



    <div class="container instructions">
        <h4>Which browsers does this online video downloader support?</h4>
        <p>You can use Google Chrome, Mozilla Firefox, Safari, Opera, and all Chromium-based browsers.</p>
    </div>


<?php include_once('includes/footer.inc.php') ?>