<?php

$config = <<< END


[program:'%PROJECT%TaskRunner]
directory=${'%PROJECT%.root.directory'}
command=php bin/cli.php taskRunner
process_name=%(program_name)s_%(process_num)d
numprocs=2
autostart=true
autorestart=true
user=%PROJECT%
stdout_logfile=${'php.log.directory'}/%PROJECT%TaskRunner_stdout.log
stdout_logfile_maxbytes=1MB
stderr_logfile=${'php.log.directory'}/%PROJECT%TaskRunner_stderr.log
stderr_logfile_maxbytes=1MB
log_stdout=true             ; if true, log program stdout (default true)
log_stderr=true             ; if true, log program stderr (def false)


END;

return $config;

