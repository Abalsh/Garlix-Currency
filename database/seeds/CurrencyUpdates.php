<?php

use Illuminate\Database\Seeder;

class CurrencyUpdates extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        ///This is a PHP(4/5) script example on how eurofxref-daily.xml can be parsed 
        //Read eurofxref-daily.xml file in memory  
        //For this command you will need the config  
        //option allow_url_fopen=On (default) 

        

        $XMLContent=file("http://www.ecb.europa.eu/stats/eurofxref/eurofxref-daily.xml"); 
        //the file is updated at around 16:00 CET 
        
        $i = 0;

        foreach($XMLContent as $line){ 
            if(preg_match("/currency='([[:alpha:]]+)'/",$line,$currencyCode)){ 
            if(preg_match("/rate='([[:graph:]]+)'/",$line,$rate)){ 
                //Output the value of 1EUR for a currency code 
                echo'1&euro;='.$rate[1].' '.$currencyCode[1].'<br/>'; 
                $list = array("US dollar", "Japanese yen", "Bulgarian lev", "Czech koruna", "Danish krone", "Pound sterling","Hungarian forint", "Polish zloty", "Romanian leu", "Swedish krona", "Swiss franc", "Icelandic krona", "Norwegian krone", "Croatian kuna", "Russian rouble", "Turkish lira", "Australian dollar", "Brazilian real", "US dollar", "Canadian dollar", "Chinese yuan renminbi", "Hong Kong dollar", "Indonesian rupiah", "Israeli shekel", "Indian rupee", "South Korean won", "Mexican peso", "Malaysian ringgit", "New Zealand dollar", "Philippine peso", "Singapore dollar", "Thai baht", "South African rand");
                
                //-------------------------------------------------- 
                //Here you can add your code for inserting 
                //$rate[1] and $currencyCode[1] into your database 
                DB::table('currency')
                    ->updateOrInsert(
                        ['iso' => $currencyCode[1], 'name' => $list[$i]],
                        ['rates' => $rate[1]]
                    );
                ++$i;
                   //-------------------------------------------------- 
            } 
            } 
        }
    }
}
