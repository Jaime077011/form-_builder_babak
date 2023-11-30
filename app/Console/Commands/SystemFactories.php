<?php

namespace App\Console\Commands;

use App\Models\Dashboard\Company;
use App\Models\Dashboard\jobTitle;
use App\Models\Dashboard\Nationality;
use Illuminate\Console\Command;
use App\Models\Dashboard\Employer;
use App\Models\Dashboard\EmployerFile;
use App\Models\Dashboard\CompanyFile;
use App\Models\Dashboard\Country;


class SystemFactories extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'system:factory {count}';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Creates multiple factories';

    /**
     * Execute the console command.
     */
    public function handle()
    {
        $count = (int) $this->argument('count');

      

        for ($i = 0; $i < $count; $i++) {
          Country::factory()->create();
          Company::factory()->create();
          jobTitle::factory()->create();
          
          Nationality::factory()->create();
          Employer::factory()->create();
          EmployerFile::factory()->create();
          //CompanyFile::factory()->create();
         

          }

        $this->info('Successfully created multiple factories');
    }
}
