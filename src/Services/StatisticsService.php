<?php

namespace BrianFaust\Affilinet\Services;

/**
 * Statistics Web service.
 *
 * @link http://publisher.affili.net/Solutions/Webservices_Webservices.aspx?nr=1&pnp=57#Statistics
 */
class StatisticsService extends AbstractService
{
    /** @var string */
    const TYPE = 'Publisher';

    /** @var string */
    const WSDL = 'https://api.affili.net/V2.0/PublisherStatistics.svc?wsdl';
}
