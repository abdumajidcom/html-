<?php

namespace Class\PHP29102024;

use Exception;

class zooPark
{
    /**
     * @throws Exception
     */
    public function map($type, $data1, $data2, $data3 = null): warden|animals|clients
    {
        if (!in_array($type, ['warden', 'animals','clients'])) {
            throw new Exception('This type of class not found. Please try again.');
        }
        if ($type === 'warden') {
            $object = new warden($data1);
        } elseif ($type =="animals"){
            $object = new animals($data2);
        } else {
            $object = new clients($data3);
        }
        return $object;
    }
}