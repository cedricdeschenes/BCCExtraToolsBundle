<?php

namespace BCC\ExtraToolsBundle\Util\UnitConverter\Extension;

use BCC\ExtraToolsBundle\Util\UnitConverter\BaseRatioUnitProvider;

/**
 * Description of DistanceUnitProvider
 *
 * @author michel
 */
class VolumeUnitProvider extends BaseRatioUnitProvider {

    /**
     * {@inheritDoc}
     */
    public function getRatios() {
        return array(
            'm3'  => 1,
            'in3'  => 0.0610,
            'ft3'  => 0.0283
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getPrefixes() {
        return array (
            'k'  => 1000,
            'da' => 10,
            'd'  => 0.1,
            'c'  => 0.01,
            'n'  => 0.000000001,
        );
    }

    /**
     * {@inheritDoc}
     */
    public function getLocale() {
        return '';
    }

    /**
     * {@inheritDoc}
     */
    public function getUnit() {
        return self::VOLUME;
    }
}
