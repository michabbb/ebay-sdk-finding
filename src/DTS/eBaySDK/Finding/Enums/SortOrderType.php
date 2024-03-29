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

namespace DTS\eBaySDK\Finding\Enums;

/**
 *
 */
class SortOrderType
{
    const C_BEST_MATCH = 'BestMatch';
    const C_BID_COUNT_FEWEST = 'BidCountFewest';
    const C_BID_COUNT_MOST = 'BidCountMost';
    const C_COUNTRY_ASCENDING = 'CountryAscending';
    const C_COUNTRY_DESCENDING = 'CountryDescending';
    const C_CURRENT_PRICE_HIGHEST = 'CurrentPriceHighest';
    const C_DISTANCE_NEAREST = 'DistanceNearest';
    const C_END_TIME_SOONEST = 'EndTimeSoonest';
    const C_PRICE_PLUS_SHIPPING_HIGHEST = 'PricePlusShippingHighest';
    const C_PRICE_PLUS_SHIPPING_LOWEST = 'PricePlusShippingLowest';
    const C_START_TIME_NEWEST = 'StartTimeNewest';
}
