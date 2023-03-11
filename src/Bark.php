<?php

use yuyaprgrm\AdhocAhodog\CanonicalBlockStatesNBT;

require dirname(__DIR__)."/vendor/autoload.php";

$outdir = "./";
(new CanonicalBlockStatesNBT)->write($outdir."canonical_block_states.yml");