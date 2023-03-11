<?php

declare(strict_types=1);

namespace yuyaprgrm\AdhocAhodog;

use pocketmine\nbt\tag\CompoundTag;
use pocketmine\nbt\TreeRoot;
use pocketmine\network\mcpe\protocol\serializer\NetworkNbtSerializer;

final class CanonicalBlockStatesNBT{

    const FILE_PATH = BEDROCK_DATA_PATH."canonical_block_states.nbt";

    public function write(string $filename) : void{
        $blockPaletteContents = file_get_contents(self::FILE_PATH);
        $translated = array_map(
			function(TreeRoot $root) : array{
				$tag =  $root->mustGetCompoundTag();
                return [
                    "name" => $tag->getString("name"),
                    "states" => $tag->getCompoundTag("states")->toString(),
                    "version" => $tag->getInt("version")
                ];
			},
			(new NetworkNbtSerializer())->readMultiple($blockPaletteContents)
		);

        yaml_emit_file($filename, $translated);
    }
}