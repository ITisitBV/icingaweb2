<?php
/* Icinga Web 2 | (c) 2013-2015 Icinga Development Team | GPLv2+ */

namespace Icinga\Module\Monitoring\Hook;

abstract class DataviewExtensionHook
{
    public function getAdditionalQueryColumns($queryName)
    {
        $cols = $this->provideAdditionalQueryColumns($queryName);

        return $cols;
    }

    abstract public function provideAdditionalQueryColumns($queryName);
}
