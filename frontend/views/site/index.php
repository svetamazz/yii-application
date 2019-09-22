<?php 
use yii\widgets\LinkPager;
use yii\helpers\Url;
?>

<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

            <div>
                <input type="text" class="form-control empty" id="searchInput" placeholder="&#xF002;" />
                <input type='button' class='btn btn-primary' id='search' value='шукати'>
            </div>

                <div id="songs">
                    <?php foreach($songs as $song):?>
                        <div class="audio">
                            <span class="songName"> <?=$song['name']?></span>
                            <span class="songAuthor"> <?=$song['author']?> </span>
                            <span><a href="#" class="downloadBtn"><img class="downloadImg" src="/public/images/complaint.png"></a><span><br/> 
                            <audio controls src="/uploads/<?=$song['fileName']?>"></audio>    
                        </div>
                    <?php endforeach; ?>

                </div>
              
                <?php
                    echo LinkPager::widget([
                        'pagination' => $pagination,
                    ]);
                ?>
            </div>
            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    
                    
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Жанри</h3>
                        <ul>
                            <?php foreach($categories as $categ):?>
                                <li>
                                    <a href="<?= Url::toRoute(['site/category','id'=>$categ['id']]); ?>"><?=$categ['name']?></a>
                                </li>
                            <?php endforeach; ?>    
                        </ul>
                    </aside>
                </div>
            </div>
        </div>
    </div>
</div>
<!-- end main content-->