<head>
    <title>{$l_articles} | {$title}</title>
</head>
<body>
    <div class="container">
        <div class="center">
            {foreach $category_req as $c}
                <h2 class="display-6">{$l_category}: {$c.name}</h2>
            {/foreach}
            <div class="row">
                {if $articles_nb == 0}
                    <strong>{$l_noarticle}!</strong>
                {else}
                    {foreach $articles_req as $a} 
                        <div class="col-sm-6 col-md-3">
                            <div class="card">
                                <img class="card-img-top" src="{$a.img}">
                                <h5 class="card-title">{$a.title}</h5>
                                <p class="card-text">{$a.descr}</p>
                                <a href="{$link}/article/{$a.id}" class="btn btn-primary">{$l_read} »</a>
                            </div>
                        </div>
                    {/foreach}
                {/if}
            </div>
        </div>
    </div>
</body>