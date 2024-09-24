<?php

namespace App\Services;

use App\Services\CpanelService;
use App\Services\DatabaseService;
use App\Services\FileService;
use Illuminate\Support\Facades\Config;

class InstanceProvisioningService
{
    private $cpanelService;
    private $databaseService;
    private $fileService;

    public function __construct()
    {
        $this->cpanelService = new CpanelService();
        $this->databaseService = new DatabaseService();
        $this->fileService = new FileService();
    }

    public function provisionInstance($instanceName, $password, $login, $urlSuffix)
    {
        $dbName = $this->databaseService->createDatabase($instanceName);
        if (!$dbName) {
            return false;
        }

        $this->databaseService->importDatabase($dbName);
        $this->databaseService->updateCredentials($login, $dbName, $password);

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