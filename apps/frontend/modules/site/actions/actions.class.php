<?php

/**
 * site actions.
 *
 * @package    tradeagent
 * @subpackage site
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class siteActions extends sfActions
{

    public function preExecute()
    {
        $response = $this->getResponse();
        $response->addStylesheet('gallery/blueimp-gallery.min.css','last');
        $response->addStylesheet('gallery/blueimp-gallery-indicator.css','last');
        $response->addStylesheet('gallery/blueimp-gallery-video.css','last');
        $response->addStylesheet('gallery/demo.css','last');

    }

    public function postExecute(){
        $response = $this->getResponse();
        $response->addJavaScript('gallery/blueimp-helper.js','last');
        $response->addJavaScript('gallery/blueimp-gallery.js','last');
        $response->addJavaScript('gallery/blueimp-fullscreen.js','last');
        $response->addJavaScript('gallery/blueimp-indicator.js','last');
        $response->addJavaScript('//ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js','last');
        $response->addJavaScript('jquery.blueimp-gallery.min.js','last');
        $response->addJavaScript('demo.js','last');

        /*<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
        <!--[if (gte IE 8)&(lt IE 10)]>
        <script src="js/cors/jquery.xdr-transport.js"></script>
        <![endif]-->*/
    }
 /**
  * Executes index action
  *
  * @param sfRequest $request A request object
  */
  public function executeIndex(sfWebRequest $request)
  {
      $files = sfFinder::type('file')->name('.csv')->in('uploads/thumbnail');
      if(is_array($files)){
          foreach($files as $file){

          }
      }

  }
}
