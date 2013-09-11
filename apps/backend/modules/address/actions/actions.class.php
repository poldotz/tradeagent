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
        //$response->addJavaScript('googlemaps.api.js','last');
        $response->addJavascript("https://maps.googleapis.com/maps/api/js?key=".sfConfig::get('app_gmap_api_key')."&sensor=false");
        $response->addJavaScript('gmap3.js','last');


    }

  public function executeGeolocatorSearch(sfWebRequest $request){


  $form = new GeoSearchForm();


  $form->bind($request->getParameter($form->getName()));
  if ($form->isValid())
  {
    $url = Address::buildUrl(implode(' ',$request->getParameter($form->getName())));
    $geocodes = Address::retrieveGeocodesFromUrl($url);
    // versione 5.4
    //$country = $request->getParameter($form->getName())['country'];
    // versione 5.3
    //$country = $request->getParameter($form->getName());
    //$country = $country['country'];
    //$country_url = Address::buildCountryUrl(strtolower($country));
    //$country_code = Address::retrieveGeocodesFromUrl($country_url);

    if ($request->isXmlHttpRequest())
    {
        $this->getUser()->setFlash('geocodes',$geocodes);
        return $this->renderPartial('address/list', array('results' => $geocodes));
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
    $geocode = $request->getParameter('geocodes',null);

     if(isset($geocode) && $this->getUser()->hasFlash('geocodes')){
         $geocodes = $this->getUser()->getFlash('geocodes');
         $geocode = $geocodes[$geocode];
         $address = new Address();

         $street = "";
         $street_number = "";
         $city = "";
         $province = "";
         $region = "";
         $country = "";
         $postal_code = "";

         foreach($geocode->address_components as $component){
             switch($component->types[0]){
                 case 'route':
                     $street = $component->long_name;
                     break;
                 case 'street_number':
                     $street_number = $component->long_name;
                     break;
                 case 'locality':
                     $city = $component->long_name;
                     break;
                 case 'administrative_area_level_2':
                     $province = $component->long_name." (".$component->short_name.")";
                     break;
                 case 'administrative_area_level_1':
                     $region = $component->long_name;
                     break;
                 case 'country':
                     $country = $component->long_name;
                     break;
                 case 'postal_code':
                     $postal_code = $component->long_name;
                     break;
             }
         }
         if(strlen($street_number)){
             $street .= ",".$street_number;
         }
         $address->setRoute($street);
         $address->setCity($city);
         $address->setProvince($province);
         $address->setRegion($region);
         $address->setCountry($country);
         $address->setPostalCode($postal_code);

         $address->setLatitude($geocode->geometry->location->lat);
         $address->setLongitude($geocode->geometry->location->lng);

         $this->form = new AddressForm($address);
     }
     else{
        $this->form = new AddressForm();
     }
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
