<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Property;

class SetPropertySorts extends Command
{
    protected $signature = 'properties:set-sorts';
    protected $description = 'Assign incremental sort values to existing properties';

    public function handle()
    {
        $this->info('Setting sort values...');
        Property::orderBy('id')->get()->each(function($p, $i){
            $p->sort = $i + 1;
            $p->save();
        });
        $this->info('Done.');
        return 0;
    }
}
