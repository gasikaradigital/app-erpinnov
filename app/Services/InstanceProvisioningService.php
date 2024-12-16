<?php

namespace App\Services;

use App\Services\CpanelService;
use App\Services\DatabaseService;
use App\Services\FileService;
use App\Services\EncryptApiService;
use Illuminate\Support\Facades\Config;

class InstanceProvisioningService
{
    private $cpanelService;
    private $databaseService;
    private $fileService;
    private $apiService;

    public function __construct()
    {
        $this->cpanelService = new CpanelService();
        $this->databaseService = new DatabaseService();
        $this->fileService = new FileService();
        $this->apiService = new EncryptApiService();
    }


    public function provisionInstance($instanceName, $password, $login, $urlSuffix, $api_key_dolibarr)
    {
        $dbName = $this->databaseService->createDatabase($instanceName);
        if (!$dbName) {
            return false;
        }
        
        $this->databaseService->importDatabase($dbName);
        
        $instance_id = "ad62ff0728deff79f830a2b69cf68aae";
        $api_key = $this->apiService->dolEncryptApi($api_key_dolibarr, $instance_id);
        
        $this->databaseService->updateCredentials($login, $dbName, $password, $api_key);
        
        $documentRoot = $this->cpanelService->createSubdomain($instanceName);
        if (!$documentRoot) {
            return false;
        }

        $this->fileService->copyDolibarrFiles($documentRoot);
        
        $this->fileService->updateConfiguration($documentRoot, $instanceName, $dbName);
        
        return [
            'url' => $urlSuffix . Config::get('dolibarr.domain_suffix'),
            'document_root' => $documentRoot,
        ];
    }
}
