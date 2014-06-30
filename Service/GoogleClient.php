<?php

namespace Cekurte\GoogleApiBundle\Service;

/**
 * GoogleService
 *
 * Configure a Google Client API Service.
 *
 * @author João Paulo Cercal <sistemas@cekurte.com>
 * @version 1.0
 */
class GoogleClient extends \Google_Client
{
    /**
     * Constructor
     *
     * @param string $appName       the app name
     * @param string $clientId      the google console client id
     * @param string $clientSecret  the google console secret key
     * @param string $redirectUri   the uri to redirect on response
     * @param string $developerKey  the developer key
     * @param string $state the     the state, example: auth
     * @param string $accessType    the access type, values: auto, online or offline
     * @param string $approvalPrompt the approval prompt, values: auto or force
     *
     * @param boolean $useObjects   if true return stdClass, else return associative array on google client response
     */
    public function __construct($appName, $clientId, $clientSecret, $redirectUri, $developerKey, $state, $accessType, $approvalPrompt, $useObjects = true)
    {
        parent::__construct(array(
            'use_objects' => $useObjects
        ));

        $this->setApplicationName($appName);
        $this->setClientId($clientId);
        $this->setClientSecret($clientSecret);
        $this->setRedirectUri($redirectUri);
        $this->setDeveloperKey($developerKey);

        $this->setState($state);
        $this->setAccessType($accessType);
        $this->setApprovalPrompt($approvalPrompt);
    }
}
