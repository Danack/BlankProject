<?php


use Danack\Console\Application;
use Danack\Console\Output\BufferedOutput;
use Danack\Console\Command\Command;
use Danack\Console\Input\InputArgument;


require __DIR__.'/../src/bootstrap.php';

//chdir(realpath(__DIR__).'/../imagick');

$injector = bootstrapInjector();

try {
    $application = createApplication();
}
catch(\Exception $e) {
    echo "Exception: ".$e->getMessage()."\n";
}

//Figure out what Command was requested.
try {
    $parsedCommand = $application->parseCommandLine();
}
catch(\Exception $e) {
    //@TODO change to just catch parseException when that's implemented 
    $output = new BufferedOutput();
    $application->renderException($e, $output);
    echo $output->fetch();
    exit(-1);
}

try {
    $input = $parsedCommand->getInput();
    $keynames = formatKeyNames($parsedCommand->getParams());
    $injector->execute(
        $parsedCommand->getCallable(),
        $keynames
    );
}
catch(\Exception $e) {
    echo "Unexpected exception of type ".get_class($e)." running %PROJECT%: ".$e->getMessage().PHP_EOL;
    echo $e->getTraceAsString();
    exit(-2);
}


/**
 * @param $params
 * @return array
 */
function formatKeyNames($params) {
    $newParams = [];
    foreach ($params as $key => $value) {
        $newParams[':'.$key] = $value;
    }

    return $newParams;
}



/**
 * Creates a console application with all of the commands attached.
 * @return Application
 */
function createApplication() {


    $statsCommand = new Command('statsRunner', 'Stats\SimpleStats::run');
    $statsCommand->setDescription("Run the stats collector and send the results to Librato.");

//    $taskCommand = new Command('imageRunner', 'ImagickDemo\Queue\ImagickTaskRunner::run');
//    $taskCommand->setDescription("Pull image request jobs off the queue and generated the images.");
//
//    
//    $clearCacheCommand = new Command('clearCache', 'ImagickDemo\Config\APCCacheEnvReader::clearCache');
//    $clearCacheCommand->setDescription("Clear the apc cache.");
//
//    $clearRedisCommand = new Command('clearRedis', 'ImagickDemo\Queue\ImagickTaskQueue::clearStatusQueue');
//    $clearRedisCommand->setDescription("Clear the imagick task queue."); 

    $console = new Application("%PROJECT%", "1.0.0");
//    $console->add($statsCommand);
//    $console->add($taskCommand);

    return $console;
}