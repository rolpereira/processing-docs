<?

require('../config.php');

$benchmark_start = microtime_float();

$path = BASEDIR;  //define('BASEDIR',       dirname(__FILE__).'/');

// Pull from GitHub
`cd $path && /usr/bin/git pull https://github.com/processing/processing-docs/`;

$referencepath = $path . "contrib_generate/";

// 
`cd $referencepath && python build_listing.py`;

$benchmark_end = microtime_float();
$execution_time = round($benchmark_end - $benchmark_start, 4);

?>


<p>Generated files in <?=$execution_time?> seconds.</p>