<!--main content start-->
<div class="main-content">
    <div class="container">
        <div class="row">
            <div class="col-md-8">

                <div class="audio">
                        <span class="songName"> <?=$song['name']?></span>
                        <span class="songAuthor"> <?=$song['author']?> </span>
                        <span>
                            <a href="#" class="downloadBtn"><img class="downloadImg" src="/public/images/complaint.png"></a>
                        <span>   
                        <audio controls src="/uploads/<?=$song['fileName']?>"></audio>    
                </div>

                <br/>

                <p class="info"> <strong>Назва:</strong> <?=$song['name']?></p>
                <p class="info"><strong>Автор:</strong> <?=$song['author']?></p>
                <p class="info"><strong>Розмір:</strong> <?=$songSize?></p>

                <br/>

                <a href="#"> <input type="button" class="btn btn-primary" value="Скачати"> </a>
                
            </div>

            <div class="col-md-4" data-sticky_column>
                <div class="primary-sidebar">
                    <aside class="widget border pos-padding">
                        <h3 class="widget-title text-uppercase text-center">Жанри</h3>
                        <ul>
                            <?php foreach($categories as $categ):?>
                                <li>
                                    <a href="#"><?=$categ['name']?></a>
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