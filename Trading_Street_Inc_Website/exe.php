<div class="container">
    <div class="list-wrapper">


        <?php
        if (file_exists('news.json')) {
            $api_url = 'news.json';
            $newlist = json_decode(file_get_contents($api_url));
        } else {
            $news_key = 'forex'; // we will be fetching only sports news related
            $api_url = 'https://newsapi.org/v2/everything?q=' . $news_key . '&from=2021-04-21&to=2021-04-20&sortBy=popularity&apiKey=e13ea32f8a5344e7bce102118a253256';
            $newlist = file_get_contents($api_url);
            file_put_contents('news.json', $newlist);
            $newlist = json_decode($newlist);
        }

        foreach ($newlist->articles as $news) { ?> <div class="row signle-news">
                <div class="col">
                    <img style="width:100%; background-image: url('<?php echo $news->urlToImage; ?>');" alt="">
                    <hr>
                </div>
                <div class="col-lg-6">
                    <h1><?php echo $news->title; ?></h1>
                    <small><?php echo $news->publishedAt; ?></small>
                    <small><?php echo $news->source->name; ?></small>
                    <?php if ($news->author && $news->author != "") { ?>
                        <small><?php echo $news->author; ?></small>
                    <?php } ?>
                    <p><?php echo $news->description; ?></p>
                    <a href="<?php echo $news->url; ?>" target="_blank">Read More</a>
                    <hr>
                </div>
            </div>
        <?php } ?>
    </div>
</div>










<div class="container">
    <div class="list-wrapper">


        <?php
        if (file_exists('news.json')) {
            $api_url = 'news.json';
            $newlist = json_decode(file_get_contents($api_url));
        } else {
            $news_key = 'forex'; // we will be fetching only sports news related
            $api_url = 'https://newsapi.org/v2/everything?q=' . $news_key . '&from=2021-04-21&to=2021-04-20&sortBy=popularity&apiKey=e13ea32f8a5344e7bce102118a253256';
            $newlist = file_get_contents($api_url);
            file_put_contents('news.json', $newlist);
            $newlist = json_decode($newlist);
        }

        foreach ($newlist->articles as $news) { ?> <div class="row signle-news">
                <div class="col">
                    <img style="width:100%;" src="<?php echo $news->urlToImage; ?>" alt="">
                    <hr>
                </div>
                <div class="col-lg-6">
                    <h1><?php echo $news->title; ?></h1>
                    <small><?php echo $news->publishedAt; ?></small>
                    <small><?php echo $news->source->name; ?></small>
                    <?php if ($news->author && $news->author != "") { ?>
                        <small><?php echo $news->author; ?></small>
                    <?php } ?>
                    <p><?php echo $news->description; ?></p>
                    <a href="<?php echo $news->url; ?>" target="_blank">Read More</a>
                    <hr>
                </div>
            </div>
        <?php } ?>
    </div>
</div>

</div>

</div>
<!-- End Of Body -->


































<?php
if (file_exists('news.json')) {
    $api_url = 'news.json';
    $newlist = json_decode(file_get_contents($api_url));
} else {
    $news_key = 'forex'; // we will be fetching only sports news related
    $api_url = 'https://newsapi.org/v2/everything?q=' . $news_key . '&from=2021-04-21&to=2021-04-20&sortBy=popularity&apiKey=e13ea32f8a5344e7bce102118a253256';
    $newlist = file_get_contents($api_url);
    file_put_contents('news.json', $newlist);
    $newlist = json_decode($newlist);
}

foreach ($newlist->articles as $news) { ?> <div class="row signle-news">
        <div class="col-sm col-md col-lg-6">
            <div class="card-container">
                <div class="card card-1 w-100">
                    <div class="card-img"></div>
                    <a href="<?php echo $news->url; ?>" class="card-link">
                        <img style="width:100%;" class="card-img-hovered img-fluid" src="<?php echo $news->urlToImage; ?>" alt="">
                    </a>
                    <div class="card-info">
                        <div class="card-about">
                            <a class="card-tag tag-news">NEWS</a>
                            <div class="card-time"> <small><?php echo $news->publishedAt; ?></small></div>
                        </div>
                        <h1 class="card-title"><?php echo $news->title; ?></h1>
                        <div class="card-creator">by <small><?php echo $news->source->name; ?></small>
                            <?php if ($news->author && $news->author != "") { ?>
                                <small><?php echo $news->author; ?></small>
                            <?php } ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    <?php } ?>
    </div>














































































    <div style="background-color: #F8FEFF;" class="col-sm col-md col-lg-3">
        <br>
        <div class="container">
            <!-- Services -->
            <div class="row">
                <div class="col">
                    <ul class="p-0 m-0" style="list-style-type: none;">
                        <li class="bg-dark p-3 text-white" style="border-left: 3px solid  #17A2B8;font-weight: 100;">
                            <h4>Our Services</h4>
                        </li>
                        <li class="bg-white text-uppercase p-3 text-dark" style="font-weight:bolder;border-bottom: 3px solid   #F8FEFF;">General Mentorship</li>
                        <li class="bg-white text-uppercase p-3 text-dark" style="font-weight:bolder;border-bottom: 3px solid   #F8FEFF;">Developmental</li>
                        <li class="bg-white text-uppercase p-3 text-dark" style="font-weight:bolder;border-bottom: 3px solid   #F8FEFF;visibility: hidden;"></li>
                    </ul>

                </div>
            </div>
            <!-- End Of Services -->
            <br>
            <br>
            <br>
            <!-- Get In touch -->
            <div class="row">
                <div class="col">
                    <ul class="p-0 m-0" style="list-style-type: none;">
                        <li class="bg-white p-3 text-dark">
                            <h4 style="font-weight: bolder;font-family:'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;">Get In Touch</h4>
                            <div style="border-bottom: 3px solid  #17A2B8;display: block;height: 10px;width:80px;"></div>
                        </li>
                        <li class="bg-white small p-3 text-muted"> <i class="fas fa-1x info-color fa-map-marker-alt"></i><span>&ensp; 1st Floor Street Harare</span></li>
                        <li class="bg-white small p-3 text-muted"> <i class="fas fa-1x fa-envelope info-color"></i> <span>&ensp; sales@tradingstreet.co.zw</span></li>
                        <li class="bg-white small p-3 text-muted"> <i class="fas fa-1x fa-phone-alt info-color"></i> <span>&ensp; +263 77 175 7160</span></li>
                        <li class="bg-white small p-3 text-muted"> <i class="fas fa-1x fa-clock info-color"></i> <span>&ensp; Open Hours: Mon - Sun 9:00 - 17:00</span></li>

                    </ul>

                </div>
            </div>
            <!-- End Of Get In Touch -->
        </div>

    </div>
    <!-- End Of Side bar -->

    <!-- News Content -->