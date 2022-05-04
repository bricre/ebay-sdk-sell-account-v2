<?php

namespace Ebay\Sell\Account\V2;

use OpenAPI\Runtime\ResponseTypes as AbstractResponseTypes;

class ResponseTypes extends AbstractResponseTypes
{
    public array $types = [
        'search' => [
            '200.' => 'Ebay\\Commerce\\Catalog\\Model\\ProductSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'searchByImage' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\SearchPagedCollection',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Item',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemByLegacyId' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Item',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItems' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\Items',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemsByItemGroup' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\ItemGroup',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'checkCompatibility' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\CompatibilityResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'addItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getShoppingCart' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'removeItem' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateQuantity' => [
            '200.' => 'Ebay\\Buy\\Browse\\Model\\RemoteShopcartResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDealItems' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\DealItemSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getEvent' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\Event',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getEvents' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\EventSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getEventItems' => [
            '200.' => 'Ebay\\Buy\\Deal\\Model\\EventItemSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getAccess' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\ApplicationAccess',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFeedType' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\FeedType',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFeedTypes' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\FeedTypeSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'downloadFile' => [
            '200.' => 'OpenAPI\\Runtime\\GenericResponse',
            '206.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '416.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFile' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\FileMetadata',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFiles' => [
            '200.' => 'Ebay\\Buy\\Feed\\Model\\FileMetadataSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getMerchandisedProducts' => [
            '200.' => 'Ebay\\Buy\\Marketing\\Model\\BestSellingProductResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getBidding' => [
            '200.' => 'Ebay\\Buy\\Offer\\Model\\Bidding',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'placeProxyBid' => [
            '200.' => 'Ebay\\Buy\\Offer\\Model\\PlaceProxyBidResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'applyGuestCoupon' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getGuestCheckoutSession' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'initiateGuestCheckoutSession' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'removeGuestCoupon' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateGuestQuantity' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateGuestShippingAddress' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateGuestShippingOption' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestCheckoutSessionResponseV2',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getGuestPurchaseOrder' => [
            '200.' => 'Ebay\\Buy\\Order\\Model\\GuestPurchaseOrderV2',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getProduct' => [
            '200.' => 'Ebay\\Commerce\\Catalog\\Model\\Product',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCharityOrg' => [
            '200.' => 'Ebay\\Commerce\\Charity\\Model\\CharityOrg',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCharityOrgs' => [
            '200.' => 'Ebay\\Commerce\\Charity\\Model\\CharitySearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCharityOrgByLegacyId' => [
            '200.' => 'Ebay\\Commerce\\Charity\\Model\\CharityOrg',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getUser' => [
            '200.' => 'Ebay\\Commerce\\Identity\\Model\\UserResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getPublicKey' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\PublicKey',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getTopic' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Topic',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getTopics' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\TopicSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getSubscriptions' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\SubscriptionSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createSubscription' => [
            '201.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '403.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getSubscription' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Subscription',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'enableSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'disableSubscription' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'test' => [
            '202.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDestinations' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\DestinationSearchResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createDestination' => [
            '201.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDestination' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Destination',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateDestination' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteDestination' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getConfig' => [
            '200.' => 'Ebay\\Commerce\\Notification\\Model\\Config',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateConfig' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'fetchItemAspects' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCategoriesAspectResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getDefaultCategoryTreeId' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\BaseCategoryTree',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategoryTree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategoryTree',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategorySubtree' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySubtree',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCategorySuggestions' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\CategorySuggestionResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getItemAspectsForCategory' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\AspectMetadata',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCompatibilityProperties' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityMetadataResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCompatibilityPropertyValues' => [
            '200.' => 'Ebay\\Commerce\\Taxonomy\\Model\\GetCompatibilityPropertyValuesResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'translate' => [
            '200.' => 'Ebay\\Commerce\\Translation\\Model\\TranslateResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getRateLimits' => [
            '200.' => 'Ebay\\Developer\\Anlaytics\\Model\\RateLimitsResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getUserRateLimits' => [
            '200.' => 'Ebay\\Developer\\Anlaytics\\Model\\RateLimitsResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCustomPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\CustomPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createCustomPolicy' => [
            '201.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getCustomPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\CustomPolicy',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateCustomPolicy' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createFulfillmentPolicy' => [
            '201.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetFulfillmentPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFulfillmentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\FulfillmentPolicy',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateFulfillmentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetFulfillmentPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteFulfillmentPolicy' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFulfillmentPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\FulfillmentPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getFulfillmentPolicyByName' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\FulfillmentPolicy',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getPaymentPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createPaymentPolicy' => [
            '201.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetPaymentPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getPaymentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentPolicy',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updatePaymentPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetPaymentPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deletePaymentPolicy' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getPaymentPolicyByName' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentPolicy',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getPaymentsProgram' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentsProgramResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getPaymentsProgramOnboarding' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\PaymentsProgramOnboardingResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getPrivileges' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SellingPrivileges',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getOptedInPrograms' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\Programs',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'optInToProgram' => [
            '200.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'optOutOfProgram' => [
            '200.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getRateTables' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\RateTableResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getReturnPolicies' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\ReturnPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createReturnPolicy' => [
            '201.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetReturnPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getReturnPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\ReturnPolicy',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateReturnPolicy' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SetReturnPolicyResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteReturnPolicy' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getReturnPolicyByName' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\ReturnPolicy',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getSalesTax' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SalesTax',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'createOrReplaceSalesTax' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'deleteSalesTax' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getSalesTaxes' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\SalesTaxes',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getKYC' => [
            '200.' => 'Ebay\\Sell\\Account\\V1\\Model\\KycResponse',
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'getRateTable' => [
            '200.' => 'Ebay\\Sell\\Account\\V2\\Model\\RateTableDetails',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
        'updateShippingCost' => [
            '204.' => 'OpenAPI\\Runtime\\GenericResponse',
            '400.' => 'OpenAPI\\Runtime\\GenericResponse',
            '404.' => 'OpenAPI\\Runtime\\GenericResponse',
            '409.' => 'OpenAPI\\Runtime\\GenericResponse',
            '500.' => 'OpenAPI\\Runtime\\GenericResponse',
        ],
    ];
}
