<?php
/**
 * Copyright 2014 David T. Sadler
 *
 * Licensed under the Apache License, Version 2.0 (the "License");
 * you may not use this file except in compliance with the License.
 * You may obtain a copy of the License at
 *
 * http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software
 * distributed under the License is distributed on an "AS IS" BASIS,
 * WITHOUT WARRANTIES OR CONDITIONS OF ANY KIND, either express or implied.
 * See the License for the specific language governing permissions and
 * limitations under the License.
 */

namespace DTS\eBaySDK\Finding\Types;

/**
 *
 * @property string $delimiter
 * @property boolean $expeditedShipping
 * @property integer $handlingTime
 * @property boolean $intermediatedShipping
 * @property boolean $oneDayShippingAvailable
 * @property string $shipToLocations
 * @property DTS\eBaySDK\Finding\Types\Amount $shippingServiceCost
 * @property string $shippingType
 */
class ShippingInfo extends \DTS\eBaySDK\Types\BaseType
{
    /**
     * @var array Properties belonging to objects of this class.
     */
    private static $propertyTypes = array(
        'delimiter' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'delimiter'
        ),
        'expeditedShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'expeditedShipping'
        ),
        'handlingTime' => array(
            'type' => 'integer',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'handlingTime'
        ),
        'intermediatedShipping' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'intermediatedShipping'
        ),
        'oneDayShippingAvailable' => array(
            'type' => 'boolean',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'oneDayShippingAvailable'
        ),
        'shipToLocations' => array(
            'type' => 'string',
            'unbound' => true,
            'attribute' => false,
            'elementName' => 'shipToLocations'
        ),
        'shippingServiceCost' => array(
            'type' => 'DTS\eBaySDK\Finding\Types\Amount',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingServiceCost'
        ),
        'shippingType' => array(
            'type' => 'string',
            'unbound' => false,
            'attribute' => false,
            'elementName' => 'shippingType'
        )
    );

    /**
     * @param array $values Optional properties and values to assign to the object.
     */
    public function __construct(array $values = array())
    {
        $elementNamesMap = self::buildElementNamesMap(self::$propertyTypes);

        list($parentValues, $childValues) = self::getParentValues($elementNamesMap, self::$propertyTypes, $values);

        parent::__construct($parentValues);

        if (!array_key_exists(__CLASS__, self::$properties)) {
            self::$properties[__CLASS__] = array_merge(self::$properties[get_parent_class()], self::$propertyTypes);
        }

        if (!array_key_exists(__CLASS__, self::$elementNames)) {
            self::$elementNames[__CLASS__] = array_merge(self::$elementNames[get_parent_class()], $elementNamesMap);
        }

        if (!array_key_exists(__CLASS__, self::$xmlNamespaces)) {
            self::$xmlNamespaces[__CLASS__] = 'http://www.ebay.com/marketplace/search/v1/services';
        }

        $this->setValues(__CLASS__, $childValues);
    }
}
