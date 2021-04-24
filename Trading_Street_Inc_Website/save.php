<div class="container-fluid pt-0 mt-0">
    <div class="row no-gutters p-0 m-0">
        <!-- Side Bar -->

        <?php
        if (file_exists('news.json')) {
            $api_url = 'news.json';
            $newlist = json_decode(file_get_contents($api_url));
        } else {
            $news_key = 'forex'; // we will be fetching only sports news related
            $api_url = 'https://newsapi.org/v2/everything?q=' . $news_key . '&from=2021-04-23&to=2021-04-23&sortBy=popularity&apiKey=e13ea32f8a5344e7bce102118a253256';
            $newlist = file_get_contents($api_url);
            file_put_contents('news.json', $newlist);
            $newlist = json_decode($newlist);
        }



        $break_out   = 8;
        $counter     = 0;

        foreach ($newlist->articles as $news) {
            $counter++;
            if ($counter > $break_out)
                break; ?>
            <div class="col-sm col-md  m-0 col-lg">

                <div class="card-container rounded-0 border-0">
                    <div class="card card-1  bg-dark rounded-0 border-0">
                        <div class="card-img"></div>
                        <a href="<?php echo $news->url; ?>" class="card-link">
                            <div style="background-image: var(--card-img-hovered-overlay), url(<?php echo $news->urlToImage; ?>);" class="card-img-hovered">
                                <p style="background-color: red;" class=" w-50 text-center text-white "> <small style=" font-weight:400;"><?php echo $news->source->name; ?></small></p>
                            </div>
                        </a>
                        <div class="card-info text-white">
                            <div class="card-about">
                                <a class="card-tag info-bg tag-news">NEWS</a>
                                <div class="card-time"> <small><?php echo $news->publishedAt; ?></small></div>
                            </div>
                            <h1 class="card-title"><?php echo $news->title; ?></h1>
                            <div class="card-creator">by <a href=""> <?php if ($news->author && $news->author != "") { ?>
                                        <small><?php echo $news->author; ?></small>
                                    <?php } ?></a></div>
                        </div>
                    </div>
                </div>
            </div>
        <?php } ?>
    </div>
</div>