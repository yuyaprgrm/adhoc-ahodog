<?php

declare(strict_types=1);

namespace yuyaprgrm\AdhocAhodog;

use function define;
use function defined;
use function dirname;

if(defined('yuyaprgrm\AdhocAhodog\_CORE_CONSTANTS_INCLUDED')){
	return;
}
define('yuyaprgrm\AdhocAhodog\_CORE_CONSTANTS_INCLUDED', true);

define('yuyaprgrm\AdhocAhodog\BEDROCK_DATA_PATH', dirname(__DIR__) . '/vendor/pocketmine/bedrock-data/');