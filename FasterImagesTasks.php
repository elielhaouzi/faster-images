<?php

namespace Statamic\Addons\FasterImages;

use Statamic\Extend\Tasks;
use Illuminate\Console\Scheduling\Schedule;

class FasterImagesTasks extends Tasks
{
    /**
     * Define the task schedule
     *
     * @param \Illuminate\Console\Scheduling\Schedule $schedule
     */
    public function schedule(Schedule $schedule)
    {
        // $schedule->command('cache:clear')->weekly();
    }
}
