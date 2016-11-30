<?php

namespace BrianFaust\Affilinet\Services;

/**
 * Account Web service.
 *
 * @link http://publisher.affili.net/Solutions/Webservices_Webservices.aspx?nr=1&pnp=57#Account
 */
class AccountService extends AbstractService
{
    /** @var string */
    const TYPE = 'Publisher';

    /** @var string */
    const WSDL = 'https://api.affili.net/V2.0/AccountService.svc?wsdl';
}
