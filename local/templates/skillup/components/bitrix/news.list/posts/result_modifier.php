<?php

$aSizePost = [
    'width' => '280',
    'height' => '280',
];

$aSizeAvatar = [
    'width' => '60',
    'height' => '60',
];

foreach ($arResult['ITEMS'] as &$aItem) {

    $aPicture = CFile::ResizeImageGet(
        $aItem['DETAIL_PICTURE'],
        $aSizePost,
        BX_RESIZE_IMAGE_EXACT);

    $aItem['DETAIL_PICTURE']['SRC'] = $aPicture['src'];

    $aPictureAvatar = CFile::ResizeImageGet(
        $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE'],
        $aSizeAvatar,
        BX_RESIZE_IMAGE_EXACT);
    $aItem['DISPLAY_PROPERTIES']['AVATAR']['FILE_VALUE']['SRC'] = $aPictureAvatar['src'];

}

