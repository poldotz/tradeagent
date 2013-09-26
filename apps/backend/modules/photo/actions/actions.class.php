<?php

/**
 * photo actions.
 *
 * @package    tradeagent
 * @subpackage photo
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class photoActions extends sfActions
{

    public function preExecute()
    {
        $response = $this->getResponse();
        $response->addStylesheet('blueimp-gallery.min.css','last');
        $response->addStylesheet('jquery.fileupload-ui.css','last');
        //$response->addStylesheet('jquery.fileupload-ui-noscript.css','last');

    }

    public function postExecute(){
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
        /*<!-- The XDomainRequest Transport is included for cross-domain file deletion for IE 8 and IE 9 -->
        <!--[if (gte IE 8)&(lt IE 10)]>
        <script src="js/cors/jquery.xdr-transport.js"></script>
        <![endif]-->*/
    }

    public function executeResult(sfWebRequest $request){


    }



  public function executeIndex(sfWebRequest $request)
  {
    $this->photoss = Doctrine_Core::getTable('Photos')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new PhotosForm();
  }

  public function executeUpload(sfWebRequest $request){
      $request = $request;
      try{
        $upload = new UploadHandler();
      }
      catch(Exception $e){
          print_r($e->getMessage());
      }


  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new PhotosForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($photos = Doctrine_Core::getTable('Photos')->find(array($request->getParameter('id'))), sprintf('Object photos does not exist (%s).', $request->getParameter('id')));
    $this->form = new PhotosForm($photos);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($photos = Doctrine_Core::getTable('Photos')->find(array($request->getParameter('id'))), sprintf('Object photos does not exist (%s).', $request->getParameter('id')));
    $this->form = new PhotosForm($photos);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($photos = Doctrine_Core::getTable('Photos')->find(array($request->getParameter('id'))), sprintf('Object photos does not exist (%s).', $request->getParameter('id')));
    $photos->delete();

    $this->redirect('photo/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $photos = $form->save();

      $this->redirect('photo/edit?id='.$photos->getId());
    }
  }
}
