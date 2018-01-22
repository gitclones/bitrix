<?php

//echo '<pre>';
//print_r($arResult);
?>

<? if(count($arResult['ITEMS']) > 0): ?>
    <div>
        <? foreach ($arResult['ITEMS'] as $aItem): ?>
            <?= $aItem['PROPERTIES']['AUTHOR']['VALUE']; ?>
            <?= $aItem['PROPERTIES']['DATA_PUBLIC']['VALUE']; ?>
            <img src="<?= $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC']; ?>">

            <img src="<?= $aItem['DETAIL_PICTURE']['SRC']; ?>">
            <?= $aItem['DISPLAY_PROPERTIES']['LIKES']['VALUE']; ?>
            <?= $aItem['DISPLAY_PROPERTIES']['COMMENTS']['VALUE']; ?>

            <? foreach ($aItem['PROPERTIES']['TAGS']['VALUE'] as $aValue): ?>
                <?= $aValue ?>
            <? endforeach; ?>
            <br><br><br>
        <? endforeach; ?>
    </div>
<? endif; ?>

<?php

//echo '<pre>';
//print_r($arResult);
?>


<? if(count($arResult['ITEMS']) > 0): ?>
<div>
    <? foreach ($arResult['ITEMS'] as $aItem): ?>
    <div class="photo">
        <div class="headplug">
            <div class="ava"><img src="<?= $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC']; ?>" class="round"></a></div>
            <div class="author"><a href="#"><?= $aItem['PROPERTIES']['AUTHOR']['VALUE']; ?></a></div><br>
            <div class="time"><?= $aItem['PROPERTIES']['DATA_PUBLIC']['VALUE']; ?></div>
            <a href="#" title="" target="_blank"><img src="<?= $aItem['DETAIL_PICTURE']['SRC']; ?>"></a>
            <div class="voting">
                <div class="like" href="#"></div>
                <span id="likes"><?= $aItem['DISPLAY_PROPERTIES']['LIKES']['VALUE']; ?></span>
                <div class="save" href="#"></div>
            </div>

            <div class="tags">
                <ul class="keys">
                    <li><a href="#"><?= $aItem['DISPLAY_PROPERTIES']['COMMENT']['VALUE']; ?><br>
                            <? foreach ($aItem['PROPERTIES']['TAGS']['VALUE'] as $aValue): ?>
                                <?= $aValue ?>
                            <? endforeach; ?></a></li>

                </ul>
            </div>
        </div>
    </div>
        <? endforeach; ?>
    </div>
    <div class="clear"></div>
    <? endif; ?>
