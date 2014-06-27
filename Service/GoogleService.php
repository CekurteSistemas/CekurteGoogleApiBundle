<?php

namespace Cekurte\GoogleApiBundle\Service;

use \Google_Client;

/**
 * GoogleService
 *
 * Configure a Google Client API Service.
 *
 * @author João Paulo Cercal <sistemas@cekurte.com>
 * @version 1.0
 */
class GoogleService
{
    /**
     * @var \Google_Client
     */
    protected $client;

    /**
     * Constructor
     *
     * @param string $appName      the app name
     * @param string $clientId     the google console client id
     * @param string $clientSecret the google console secret key
     * @param string $redirectUri  the uri to redirect on response
     * @param string $developerKey the developer key
     * @param boolean $useObjects  if true return stdClass, else return associative array on google client response
     */
    public function __construct($appName, $clientId, $clientSecret, $redirectUri, $developerKey, $useObjects = true)
    {
        $googleClient = new \Google_Client(array(
            'use_objects' => $useObjects
        ));

        $googleClient->setApplicationName($appName);
        $googleClient->setClientId($clientId);
        $googleClient->setClientSecret($clientSecret);
        $googleClient->setRedirectUri($redirectUri);
        $googleClient->setDeveloperKey($developerKey);

        $this->setClient($googleClient);
    }

    /**
     * Gets the value of client.
     *
     * @return \Google_Client
     */
    public function getClient()
    {
        return $this->client;
    }

    /**
     * Sets the value of client.
     *
     * @param \Google_Client $client the client
     *
     * @return GoogleService
     */
    protected function setClient(\Google_Client $client)
    {
        $this->client = $client;

        return $this;
    }
}