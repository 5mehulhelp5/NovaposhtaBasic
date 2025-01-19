<?php

namespace Dragonfly\NovaposhtaBasic\Service;

use Dragonfly\NovaposhtaBasic\Api\Data\ApiDepotsInterface;
use Dragonfly\NovaposhtaBasic\Model\ResourceModel\ApiDepotsModel\ApiDepotsCollectionFactory;

class UpdateDepots
{
    private Api $api;
    private ApiDepotsCollectionFactory $apiDepotsCollectionFactory;
    private Report $report;

    /**
     * @param Api $api
     * @param ApiDepotsCollectionFactory $apiDepotsCollectionFactory
     * @param Report $report
     */
    public function __construct(Api $api, ApiDepotsCollectionFactory $apiDepotsCollectionFactory, Report $report)
    {
        $this->api = $api;
        $this->apiDepotsCollectionFactory = $apiDepotsCollectionFactory;
        $this->report = $report;
    }

    /**
     *
     */
    public function execute()
    {
        $apiDepotsRequest = $this->api->getDepots();
        $data = [];
        foreach ($apiDepotsRequest as $depot) {
            $data[] = $this->api->prepareData($depot, Api::API_DATA_DEPOTS_ASSOCIATION);
        }

        $collection = $this->apiDepotsCollectionFactory->create();
        $collection->setDataToAll(['deleted' => true,]);
        $collection->save();

        foreach ($data as $d) {
            $collection = $this->apiDepotsCollectionFactory->create();
            $collection->addFieldToFilter('ref', $d[ApiDepotsInterface::REF]);
            $record = $collection->fetchItem();

            if (!$record) {
                $record = $collection->getNewEmptyItem();
                $record->setData($d);
                $collection->addItem($record);
                $collection->save();
            } else {
                $collection = $this->apiDepotsCollectionFactory->create();
                $collection->addFieldToFilter('ref', $d[ApiDepotsInterface::REF]);
                $collection->setDataToAll($d);
                $collection->save();
            }
        }
    }

    /**
     * @return string|null
     */
    public function getErrorReportCli(): ?string
    {
        $error = $this->report->getError();
        if (!empty($error)) {
            return implode('; ', $error);
        }

        return null;
    }
}
