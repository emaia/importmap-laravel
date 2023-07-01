<?php

namespace Tonysm\ImportmapLaravel\Commands;

use Illuminate\Console\Command;
use Tonysm\ImportmapLaravel\Npm;
use Tonysm\ImportmapLaravel\PackageVersion;

class PackagesCommand extends Command
{
    public $signature = 'importmap:packages';

    public $description = 'Displays the importmap packages with version numbers.';

    public function handle(Npm $npm): int
    {
        $npm->packagesWithVersion()->each(fn (PackageVersion $package) => (
            $this->output->writeln(sprintf('%s %s', $package->name, $package->version))
        ));

        return self::SUCCESS;
    }
}
