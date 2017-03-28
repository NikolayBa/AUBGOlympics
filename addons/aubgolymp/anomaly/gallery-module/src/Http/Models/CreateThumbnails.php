<?php
/**
 * Created by PhpStorm.
 * User: Inkyov
 * Date: 3/27/2017
 * Time: 1:08 AM
 */

namespace  Anomaly\GalleryModule\Http\Models;
use Illuminate\Http\Request;

class CreateThumbnails{
    public function createThumbnails(Request $request){
        $f = new Thumbnail("http://dev.aubgolympics.com/app/aubgolymp/assets/images");

echo "window.alert('hey')";

        while (TRUE)
        {
            sleep(1);

            if ($newFiles = $f->getNewFiles())
            {
                // Code to handle new files
                // $newFiles is an array that contains added files
                foreach ($newFiles as $newFile){
                    make_thumb($newFile, "http://dev.aubgolympics.com/app/aubgolymp/assets/images/thumbnails",350);
                }

                function make_thumb($src, $dest, $desired_width) {

                    /* read the source image */
                    $source_image = imagecreatefromjpeg($src);
                    $width = imagesx($source_image);
                    $height = imagesy($source_image);

                    /* find the "desired height" of this thumbnail, relative to the desired width  */
                    $desired_height = floor($height * ($desired_width / $width));

                    /* create a new, "virtual" image */
                    $virtual_image = imagecreatetruecolor($desired_width, $desired_height);

                    /* copy source image at a resized size */
                    imagecopyresampled($virtual_image, $source_image, 0, 0, 0, 0, $desired_width, $desired_height, $width, $height);

                    /* create the physical thumbnail image to its destination */
                    imagejpeg($virtual_image, $dest);
                }
            }

            $f->updateMonitor();
        }
    }
}

