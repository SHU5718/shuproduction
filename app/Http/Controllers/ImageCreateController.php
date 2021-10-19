<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ImageCreateController extends Controller
{
    function create_image() {
        $im = imagecreatefrompng('images/base.png');

        // Color
        $text_color = imagecolorallocate($im, 38, 38, 38);

        // ID
        $fbid = uniqid(mt_rand(), 1);

        // Text
        $line1 = $_GET["top_word"];
        $line2 = $_GET["nakasiti"];
        $line3 = $_GET["bot_word"];
        $fake_text = 'あ';

        // Font
        $font = 'KleeOne-SemiBold.otf';
        $font_size = '30';

        // Line 1
        // -- Bounding box
        $bbox = imagettfbbox(30, 0, $font, $fake_text);
        // -- X & Y
        $x = $bbox[0] + imagesx($im) - $bbox[4] - 90;
        $y = $bbox[1] + $bbox [5] + 70;
        // -- 文字
        foreach (preg_split("//u", $line1) as $char1) {
            $char = str_replace("ー", "丨", $char1);
            imagettftext($im, $font_Size, 0, $x, $y, $black, $font, $char);
            $y += 35;
        }

        // Line 2
        // -- Bounding box
        $bbox = imagettfbbox(30, 0, $font, $fake_text);
        // -- X & Y
        $x = $bbox[0] + (imagesx($im) / 2) - $font_size;
        $y = $bbox[1] + (imagesx($im) / 2) - ($font_size / 2) - 120;
        // -- 文字
        foreach (preg_split("//u", $line2) as $char1) {
            $char = str_replace("ー", "丨", $char1);
            imagettftext($im, $font_Size, 0, $x, $y, $black, $font, $char);
            $y += 35;
        }

        // Line 3
        // -- Bounding box
        $bbox = imagettfbbox(30, 0, $font, $fake_text);
        // -- X & Y
        $x = $bbox[0] + 75;
        $y = $bbox[1] + (imagesx($im) / 2);
        // -- 文字
        foreach (preg_split("//u", $line3) as $char1) {
            $char = str_replace("ー", "丨", $char1);
            imagettftext($im, $font_Size, 0, $x, $y, $black, $font, $char);
            $y += 35;
        }

        // アップロードディレクトリー
        $upload_dir = '../../../public/uploaded_images/';
        // ファイル名
        $name = $upload_dir.$fbid.".png";

        // Output to browser
        header('Content-Type: image/png');

        imagepng($im, $name);
        imagedestroy($im);
    }
}
