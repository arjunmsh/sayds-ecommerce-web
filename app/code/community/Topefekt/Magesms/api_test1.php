<?php
    $url_address = ""; //write url of your eshop, without http://
    $folder = ""; //eshop subfolder on hosting
    $to = ""; // number, in international format, no leading zeros or a “+” sign, e.g., 447971796595
    $text = "hello world"; // SMS text
    $unicode = 1; // unicode yes=1, no=0
    $key = ""; // security key from module configuration

    $status = "";
    $query = "to=".$to."&text=".$text."&unicode=".$unicode."&key=".$key;

    if(strlen(trim($folder)) > 0)
    {
        $folder = "/".$folder;
    }

    $fp = fsockopen($url_address, 80, $errno, $errstr, 30);
    if (!$fp)
    {
        die("Not connected");
    }
    else
    {
        fwrite($fp, "POST ".$folder."/magesms/api HTTP/1.0\r\n");
        fwrite($fp, "User-Agent: Mozilla/4.0\r\n");
        fwrite($fp, "Host: ".$url_address."\r\n");
        fwrite($fp, "Content-type: application/x-www-form-urlencoded; charset=utf-8\r\n");
        fwrite($fp, "Content-length: ".strlen ($query)."\r\n");
        fwrite($fp, "\r\n".$query."\r\n");

        while (!feof($fp))
        {
            $res= fgets ($fp, 30000);
            if(preg_match("/SMSSTATUS:OK/i",$res))
            {
                $status = "OK";
            }
            if(preg_match ("/SMSSTATUSERROROK:OK/i",$res))
            {
                $status = "ERROR";
            }
        }
        fclose ($fp);
    }
    if(strlen($status) > 0)
    {
        echo "status: ".$status; //print status of SMS sending
    }
    else
    {
        die("Not connected");
    }
