<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use App\Models\Report;

class GenerateReports extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'generate:report';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'Generate report records for a new month';

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        $month = date('Y-m-01');
        $endDate = date('Y-m-t', strtotime($month));

        while ($month <= $endDate) {
            $dayOfWeek = date('l', strtotime($month));

            Report::create([
                'month' => date('m', strtotime($month)),
                'day' => date('d', strtotime($month)),
                'day_of_week' => $dayOfWeek,
            ]);

            $month = date('Y-m-d', strtotime($month.'+1 day'));
        }

        $this->info('Report generated for the new month');
    }
}
