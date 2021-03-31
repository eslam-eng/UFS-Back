<?php


namespace App\Helper;


class StatusCode
{
    public static    $PREPARE = 1;
    public static    $DELIVERED = 2;
    public static    $RETURN_WITH_CHARGE = 3;
    public static    $RETURN_WITHOUT_CHARGE = 4;
    public static    $CLOSED = 5;
    public static    $OUT_FOR_DELIVERY = 6;
    public static    $COLLECTED = 7;
    public static    $PAID_TO_CUSTOMER = 8;

}
