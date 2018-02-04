<?php

namespace App\Http;

/**
 * Description of Helpers
 *
 * @author mhmudhsham
 */
class Helpers {

    function getRequestType($type) {
        if ($type == 0) {
            return "حجز  فردي";
        }
        return "حجز مجموعات";
    }

}
