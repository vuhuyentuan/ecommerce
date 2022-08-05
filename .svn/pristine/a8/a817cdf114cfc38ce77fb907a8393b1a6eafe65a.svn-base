<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use App\Translation;
use App\Imports\LangImport;

class UpdateLangsV2 extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:lang_2';

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
        $array = Excel::toArray(new LangImport, public_path('lang.csv'));
        foreach($array[0] as $lang)
        {
            if($lang[1] == 'vn')
            {
                $tran = Translation::where('lang', 'vn')->where('lang_key', $lang[2])->first();
                if($tran)
                {
                    $tran->lang_value = $lang[3];
                    $tran->save();
                }else {
                    $tran = new Translation;
                    $tran->lang = 'vn';
                    $tran->lang_key = $lang[2];
                    $tran->lang_value = $lang[3];
                    $tran->save();
                }
            }
        }
    }
}
