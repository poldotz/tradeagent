<?php

/**
 * address actions.
 *
 * @package    tradeagent
 * @subpackage address
 * @author     Your name here
 * @version    SVN: $Id: actions.class.php 23810 2009-11-12 11:07:44Z Kris.Wallsmith $
 */
class addressActions extends sfActions
{

    public function preExecute()
    {
        $response = $this->getResponse();
        $response->addStylesheet('gmap3.css','last');
    }

    public function postExecute(){
        $response = $this->getResponse();
        $response->addJavaScript('googlemaps.api.js','last');
        $response->addJavaScript('gmap3.js','last');


    }

  public function executeGeolocatorSearch(sfWebRequest $request){


  $form = new GeolocatorSearchForm();


  $form->bind($request->getParameter($form->getName()));
  if ($form->isValid())
  {
    $url = Address::buildUrl(implode(' ',$request->getParameter($form->getName())));
    $geocodes = Address::retrieveGeocodesFromUrl($url);

    $country = $request->getParameter($form->getName())['country'];
    $country_url = Address::buildCountryUrl(strtolower($country));
    $country_code = Address::retrieveGeocodesFromUrl($country_url);

    if ($request->isXmlHttpRequest())
    {
        return $this->renderPartial('address/list', array('results' => $geocodes,'country'=>$country_code));
        //sfView::SUCCESS;
    }
  }
  else{
          if ($request->isXmlHttpRequest())
          {
              return $this->renderPartial('address/errorList', array('form' => $form));
              //sfView::SUCCESS;
          }
      }
  }


  public function executeIndex(sfWebRequest $request)
  {
    $this->addresss = Doctrine_Core::getTable('Address')
      ->createQuery('a')
      ->execute();
  }

  public function executeNew(sfWebRequest $request)
  {
    $this->form = new AddressForm();
  }

  public function executeCreate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST));

    $this->form = new AddressForm();

    $this->processForm($request, $this->form);

    $this->setTemplate('new');
  }

  public function executeEdit(sfWebRequest $request)
  {
    $this->forward404Unless($address = Doctrine_Core::getTable('Address')->find(array($request->getParameter('id'))), sprintf('Object address does not exist (%s).', $request->getParameter('id')));
    $this->form = new AddressForm($address);
  }

  public function executeUpdate(sfWebRequest $request)
  {
    $this->forward404Unless($request->isMethod(sfRequest::POST) || $request->isMethod(sfRequest::PUT));
    $this->forward404Unless($address = Doctrine_Core::getTable('Address')->find(array($request->getParameter('id'))), sprintf('Object address does not exist (%s).', $request->getParameter('id')));
    $this->form = new AddressForm($address);

    $this->processForm($request, $this->form);

    $this->setTemplate('edit');
  }

  public function executeDelete(sfWebRequest $request)
  {
    $request->checkCSRFProtection();

    $this->forward404Unless($address = Doctrine_Core::getTable('Address')->find(array($request->getParameter('id'))), sprintf('Object address does not exist (%s).', $request->getParameter('id')));
    $address->delete();

    $this->redirect('address/index');
  }

  protected function processForm(sfWebRequest $request, sfForm $form)
  {
    $form->bind($request->getParameter($form->getName()), $request->getFiles($form->getName()));
    if ($form->isValid())
    {
      $address = $form->save();

      $this->redirect('address/edit?id='.$address->getId());
    }
  }
}
