<?php

namespace Silnik\Browser\Model;

use Silnik\Browser\Model\Primitive\NameVersion;

class Using extends NameVersion
{
    private $name;
    /**
     * Get an array of all defined properties
     *
     * @internal
     *
     * @return array
     */

    public function toArray()
    {
        $result = [];

        if (!empty($this->name) && empty($this->version)) {
            return $this->name;
        }

        if (!empty($this->name)) {
            $result['name'] = $this->name;
        }

        if (!empty($this->version)) {
            $result['version'] = $this->version->toArray();
        }

        return $result;
    }
}
