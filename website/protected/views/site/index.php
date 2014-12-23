<div id="content_GameVictoriousTexture" style="top: 0;">
    <div id="home_featured_banners">
        <div class="scroller4">
            <div class="scroller-inner">
                <div class="window">
                    <ol class="teaser-items">
                        <?php foreach ($slides as $slide):?>
                        <li id="holidaybanner" style="background: #000; max-height: 650px;">
                            <div class="banner_copy_vertical_left" style="width: 51%; max-width: 500px;">
                                <h2 class="headline" style="color: #f0e000;">It's Not Too Late.</h2>
                                <p class="subhead">You can still find gifts for gaming! Save up to $250 on select Alienware ships fast systems.​</p>
                                <p class="cta">
                                    <a href="http://www.alienware.com/landings/promotions.aspx">Start Gaming <img src="http://image.alienware.com/images/landings/sprites/button-icon.png" alt=">" /></a>
                                </p>
                            </div> 
                            <a href="<?php echo $slide->link?>">
                                <div class="banner_image_fullsize">
                                        <img style="margin: 0; float: right;" src="<?php echo $slide->path?>">
                                </div>
                            </a>
                        </li>
                        <?php endforeach;?>
                    </ol>
                </div>
                <?php if (($count = count($slides)) > 1):?>
                <div class="teaser-header" id="buttons">
                    <ol>
                        <?php for($i = 0; $i < $count; $i++):?>
                        <li><a href="javascript:;"></a></li>
                        <?php endfor;?>                        
                    </ol>
                </div>
                <div class="slideshow-controls" id="arrows">
                    <ul>
                        <li><a rel="prev" class="prev" href="javascript:;"></a></li>
                        <li class="rightArrow"><a rel="next" class="next" href="javascript:;"></a></li>
                    </ul>
                </div>
                <?php endif;?>
            </div>
        </div>
    </div>    
    <div id="homepage_buckets">
        <?php foreach ($buckets as $bucket):?>
        <div id="bucket1" class="homepage_bucket">
            <a href="<?php echo $bucket->link?>"> <img src="<?php echo $bucket->path?>" class="bucket_image" alt="<?php echo $bucket->alt?>" />
                <div class="bucket_label"><?php echo $bucket->word?></div>
            </a>
        </div>
        <?php endforeach;?>
    </div>    
</div>