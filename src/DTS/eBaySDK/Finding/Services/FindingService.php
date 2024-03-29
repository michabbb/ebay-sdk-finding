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

namespace DTS\eBaySDK\Finding\Services;

class FindingService extends \DTS\eBaySDK\Finding\Services\FindingBaseService
{
    /**
     * @param \DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient The object that will handle sending requests to the API.
     * @param array $config Optional configuration option values. 
     */
    public function __construct(\DTS\eBaySDK\Interfaces\HttpClientInterface $httpClient, $config = array())
    {
        parent::__construct($httpClient, $config);
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationRequest $request
     * @return \DTS\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationResponse
     */
    public function getSearchKeywordsRecommendation(\DTS\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationRequest $request)
    {
        return $this->callOperation(
            'getSearchKeywordsRecommendation',
            $request->toXml('getSearchKeywordsRecommendationRequest', true),
            '\DTS\eBaySDK\Finding\Types\GetSearchKeywordsRecommendationResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\FindItemsByKeywordsRequest $request
     * @return \DTS\eBaySDK\Finding\Types\FindItemsByKeywordsResponse
     */
    public function findItemsByKeywords(\DTS\eBaySDK\Finding\Types\FindItemsByKeywordsRequest $request)
    {
        return $this->callOperation(
            'findItemsByKeywords',
            $request->toXml('findItemsByKeywordsRequest', true),
            '\DTS\eBaySDK\Finding\Types\FindItemsByKeywordsResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\FindItemsByCategoryRequest $request
     * @return \DTS\eBaySDK\Finding\Types\FindItemsByCategoryResponse
     */
    public function findItemsByCategory(\DTS\eBaySDK\Finding\Types\FindItemsByCategoryRequest $request)
    {
        return $this->callOperation(
            'findItemsByCategory',
            $request->toXml('findItemsByCategoryRequest', true),
            '\DTS\eBaySDK\Finding\Types\FindItemsByCategoryResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\FindItemsAdvancedRequest $request
     * @return \DTS\eBaySDK\Finding\Types\FindItemsAdvancedResponse
     */
    public function findItemsAdvanced(\DTS\eBaySDK\Finding\Types\FindItemsAdvancedRequest $request)
    {
        return $this->callOperation(
            'findItemsAdvanced',
            $request->toXml('findItemsAdvancedRequest', true),
            '\DTS\eBaySDK\Finding\Types\FindItemsAdvancedResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\FindItemsByProductRequest $request
     * @return \DTS\eBaySDK\Finding\Types\FindItemsByProductResponse
     */
    public function findItemsByProduct(\DTS\eBaySDK\Finding\Types\FindItemsByProductRequest $request)
    {
        return $this->callOperation(
            'findItemsByProduct',
            $request->toXml('findItemsByProductRequest', true),
            '\DTS\eBaySDK\Finding\Types\FindItemsByProductResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\FindItemsIneBayStoresRequest $request
     * @return \DTS\eBaySDK\Finding\Types\FindItemsIneBayStoresResponse
     */
    public function findItemsIneBayStores(\DTS\eBaySDK\Finding\Types\FindItemsIneBayStoresRequest $request)
    {
        return $this->callOperation(
            'findItemsIneBayStores',
            $request->toXml('findItemsIneBayStoresRequest', true),
            '\DTS\eBaySDK\Finding\Types\FindItemsIneBayStoresResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\FindItemsByImageRequest $request
     * @return \DTS\eBaySDK\Finding\Types\FindItemsByImageResponse
     */
    public function findItemsByImage(\DTS\eBaySDK\Finding\Types\FindItemsByImageRequest $request)
    {
        return $this->callOperation(
            'findItemsByImage',
            $request->toXml('findItemsByImageRequest', true),
            '\DTS\eBaySDK\Finding\Types\FindItemsByImageResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\GetHistogramsRequest $request
     * @return \DTS\eBaySDK\Finding\Types\GetHistogramsResponse
     */
    public function getHistograms(\DTS\eBaySDK\Finding\Types\GetHistogramsRequest $request)
    {
        return $this->callOperation(
            'getHistograms',
            $request->toXml('getHistogramsRequest', true),
            '\DTS\eBaySDK\Finding\Types\GetHistogramsResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\GetVersionRequest $request
     * @return \DTS\eBaySDK\Finding\Types\GetVersionResponse
     */
    public function getVersion(\DTS\eBaySDK\Finding\Types\GetVersionRequest $request)
    {
        return $this->callOperation(
            'getVersion',
            $request->toXml('getVersionRequest', true),
            '\DTS\eBaySDK\Finding\Types\GetVersionResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\FindItemsForFavoriteSearchRequest $request
     * @return \DTS\eBaySDK\Finding\Types\FindItemsForFavoriteSearchResponse
     */
    public function findItemsForFavoriteSearch(\DTS\eBaySDK\Finding\Types\FindItemsForFavoriteSearchRequest $request)
    {
        return $this->callOperation(
            'findItemsForFavoriteSearch',
            $request->toXml('findItemsForFavoriteSearchRequest', true),
            '\DTS\eBaySDK\Finding\Types\FindItemsForFavoriteSearchResponse'
        );
    }

    /**
     * @param \DTS\eBaySDK\Finding\Types\FindCompletedItemsRequest $request
     * @return \DTS\eBaySDK\Finding\Types\FindCompletedItemsResponse
     */
    public function findCompletedItems(\DTS\eBaySDK\Finding\Types\FindCompletedItemsRequest $request)
    {
        return $this->callOperation(
            'findCompletedItems',
            $request->toXml('findCompletedItemsRequest', true),
            '\DTS\eBaySDK\Finding\Types\FindCompletedItemsResponse'
        );
    }
}
