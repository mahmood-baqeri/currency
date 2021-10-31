<?php

namespace Arsinex\Currency;


class Money
{
    public static function all()
    {
        $c = curl_init();
        curl_setopt($c, CURLOPT_RETURNTRANSFER, 1);
        curl_setopt($c, CURLOPT_URL, "207.154.222.252/api/v2/market/list");
        $details = curl_exec($c);
        curl_close($c);
        $responce = json_decode($details);
        return $responce;
    }

    public static function convert($money)
    {
        $data = array('market' => $money);
        $curl = curl_init("207.154.222.252/api/v2/market/marketlast");
        curl_setopt($curl, CURLOPT_POST, true);
        curl_setopt($curl, CURLOPT_POSTFIELDS, http_build_query($data));
        curl_setopt($curl, CURLOPT_RETURNTRANSFER, true);
        $response = curl_exec($curl);
        curl_close($curl);
        return $response;
    }

}



        /*
                post: 207.154.222.252/api/v2/asset/assetlist
                get : 207.154.222.252/api/v2/market/list
                post : 207.154.222.252/api/v2/market/marketlast --> param market (market -> market name)
                market name: BNBTRY, ETHTRY
                give me a composer package that will convert BNB, ETH,  to equal 20TRY
        */
