<?php

namespace BCC\ExtraToolsBundle\Util\UnitConverter\Extension;

use BCC\ExtraToolsBundle\Util\UnitConverter\BaseRatioUnitProvider;

/**
 * Description of DistanceUnitProvider
 *
 * @author michel
 */
class DistanceUnitProvider extends BaseRatioUnitProvider {
    
    /**
     * {@inheritDoc}
     */
    public function getRatios() {
        return array(
            'm'  => 1,
            'in'  => 0.0254,
            'ft'  => 0.3048
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
            'm'  => 0.001,
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
        return self::LENGTH;
    }
}
