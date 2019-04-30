<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\DB;

class updatecrypto extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'command:name';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Command description';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return mixed
     */
    public function handle()
    {
        $client = new \GuzzleHttp\Client([
            'headers' => [
                'X-CMC_PRO_API_KEY' => env("CMC_API_KEY", null),
                'Accept-Encoding' => 'deflate, gzip'
            ]
        ]);

        $res = $client->request('GET', 'https://pro-api.coinmarketcap.com/v1/cryptocurrency/listings/latest', [
            'query'        => [
                'limit' => '100',
                'convert' => 'EUR'
            ],
            'Filter'       => ['data']
        ]);

        //$res->getStatusCode();
        $result = json_decode($res->getBody(),true);

        DB::beginTransaction();
        foreach($result["data"] as $item) {
            DB::table('crypto')
                ->updateOrInsert(
                    ['name' => $item["name"], 'symbol' => $item["symbol"]],
                    ['rate' => $item["quote"]["EUR"]["price"]]
                );
        }
        DB::commit();
    }
}
