<?php
/**
 * Created by PhpStorm.
 * User: ArnoH
 * Date: 28/08/2018
 * Time: 9:41
 */

namespace pocketmine\block;

interface IndirectRedstoneSource{

    const POWER_MODE_ALL = 0;
    const POWER_MODE_ALL_EXCEPT_WIRE = 1;

    const REDSTONE_POWER_MIN = 0;
    const REDSTONE_POWER_MAX = 15;


    public function getIndirectRedstonePower(Block $block, int $face, int $powerMode) : int;

    public function hasIndirectRedstonePower(Block $block, int $face, int $powerMode) : bool;

    public function getRedstonePower(Block $block, int $powerMode = self::POWER_MODE_ALL) : int;

    public function hasRedstonePower(Block $block, int $powerMode = self::POWER_MODE_ALL) : bool;

    public function isRedstoneConductor() : bool;
}