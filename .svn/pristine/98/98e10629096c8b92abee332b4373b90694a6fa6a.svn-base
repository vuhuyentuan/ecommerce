<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Maatwebsite\Excel\Facades\Excel;
use App\Imports\LangImport;
use App\Translation;

class UpdateLangs extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'update:lang';

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
        $array = Excel::toArray(new LangImport, public_path('lang.xlsx'));
        foreach($array[0] as $lang)
        {
            if($lang[0] == 'en')
            {
                continue;
            }
            $tran = Translation::where('lang', 'vn')->where('lang_key', $lang[0])->first();
            if($tran)
            {
                $tran->lang_value = $lang[1];
                $tran->save();
            }else {
                $tran = new Translation;
                $tran->lang = 'vn';
                $tran->lang_key = $lang[0];
                $tran->lang_value = $lang[1];
                $tran->save();
            }
        }
    }
}
