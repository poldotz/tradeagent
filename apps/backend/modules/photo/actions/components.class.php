<?php
/**
 * Created by JetBrains PhpStorm.
 * User: poldotz
 * Date: 05/09/13
 * Time: 23.54
 * To change this template use File | Settings | File Templates.
 */
class PhotoComponents extends sfComponents
{

    public function executePhotoGallery()
    {
        /*
         * css includes
         */

        $response = $this->getResponse();
        $response->addStylesheet('blueimp-gallery.min.css','last');
        $response->addStylesheet('jquery.fileupload-ui.css','last');

        /*
         * js includes
         */
        $this->gallery_id = $this->gallery->getId();
        $response = $this->getResponse();
        $response->addJavaScript('ajax-jquery.min.js','last');
        $response->addJavaScript('vendor/jquery.ui.widget.js','last');
        $response->addJavaScript('template-gallery.js','last');
        $response->addJavaScript('load-image.min.js','last');
        $response->addJavaScript('canvas-to-blob.min.js','last');
        $response->addJavaScript('blueimp-gallery.min.js','last');
        $response->addJavaScript('jquery.iframe-transport.js','last');
        $response->addJavaScript('jquery.fileupload.js','last');
        $response->addJavaScript('jquery.fileupload-process.js','last');
        $response->addJavaScript('jquery.fileupload-image.js','last');
        $response->addJavaScript('jquery.fileupload-video.js','last');
        $response->addJavaScript('jquery.fileupload-validate.js','last');
        $response->addJavaScript('jquery.fileupload-ui.js','last');
        $response->addJavaScript('main.js','last');

    }
}