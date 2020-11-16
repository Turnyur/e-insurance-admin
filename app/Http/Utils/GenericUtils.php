<?php

namespace App\Http\Utils;

use Closure;
use Illuminate\Http\Request;
use stdClass;

class GenericUtils {

    public static function makeSuccessToast(Closure $evalCondition, array $onSuccess, array $onError){
        $notificationMessage = new stdClass();
        if ($evalCondition()) {

            $successToastMessage[]= $onSuccess['message'];
            $successToastMessage[]= $onSuccess['title'];

            $notificationMessage->success=$successToastMessage;
            $notificationMessage->status=true;

        }else{

            $errorToastMessage[]= $onError['message'];
            $errorToastMessage[]= $onError['title'];

            $notificationMessage->error=$errorToastMessage;
            $notificationMessage->status=false;

        }

        return $notificationMessage;
    }



}
