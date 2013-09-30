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

  public function executePhotoGallery(sfWebRequest $request){
      if($request->hasParameter('gallery_id')){
        $this->gallery_id = $request->getParameter('gallery_id');
      }
      else{
        $this->redirect('gallery/index');
      }
  }

  public function executeUpload(sfWebRequest $request){

      try{
          $server_url = $request->getUriPrefix();
          $path_info = $request->getPathInfo();
          $gallery_id = $request->getParameter('gallery_id');
          $options = array();
          $options['script_url'] = $server_url.$path_info;
          $options['upload_dir'] = sfConfig::get('sf_upload_dir');
          $options['upload_url'] = $server_url.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.$gallery_id;
          if(isset($gallery_id)){
              $options['upload_dir'] = sfConfig::get('sf_upload_dir').DIRECTORY_SEPARATOR.$gallery_id.DIRECTORY_SEPARATOR;
              $options['upload_url'] = $server_url.DIRECTORY_SEPARATOR.'uploads'.DIRECTORY_SEPARATOR.$gallery_id.DIRECTORY_SEPARATOR;
          }

          $upload = new UploadHandler($options,false);
          $method = $this->getRequest()->getMethod();

          switch ($method) {
              case 'OPTIONS':
              case 'HEAD':
                  $files = $upload->head();
                  break;
              case 'GET':
                  $files = array(); // non viene letto nessun file.
                  $files = $upload->get();
                  $this->files = $files;
                  break;
              case 'PATCH':
              case 'PUT':
              case 'POST':
                $titles = $request->getParameter('title');
                $files= $upload->post();
                $i = 0;
                foreach($files as $file ){
                    $photo = new Photos();
                    $photo->setGalleryId($gallery_id);
                    $photo->setPicpath($file[0]->url);
                    $photo->setTitle($titles[$i]);
                    $photo->save();
                    $i++;
                }
                  break;
              case 'DELETE':
                  $file = $request->getParameter('file');
                  $files = $upload->delete();
                  break;
              default:
                  header('HTTP/1.1 405 Method Not Allowed');
          }
        $upload->head();
        $files = json_encode($files);
        echo $files;
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
