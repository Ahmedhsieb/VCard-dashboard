<?php

namespace Ahmed\Vcard\core\saas\contract;

interface ISaas
{
    public function run($subdomain);

    public function setSubdomain($dbname);

    public function getSubdomain($subdomain);

    public function isSubDomain();
}