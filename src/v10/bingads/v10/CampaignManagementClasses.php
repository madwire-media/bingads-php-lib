<?php
// Generated on 11/16/2015 7:01:11 AM

namespace BingAds\v10\CampaignManagement
{
    use DateTime;

    final class CampaignManagementServiceSettings
    {
        const ServiceNamespace = 'https://bingads.microsoft.com/CampaignManagement/v10';
        const ProductionEndpoint = 'https://campaign.api.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V10/CampaignManagementService.svc';
        const SandboxEndpoint = 'https://campaign.api.sandbox.bingads.microsoft.com/Api/Advertiser/CampaignManagement/V10/CampaignManagementService.svc';
    }

    /**
     * Defines the editorial review status values of an ad.
     * @link http://msdn.microsoft.com/en-us/library/cc565084(v=msads.100).aspx AdEditorialStatus Value Set
     * 
     * @used-by Ad
     * @used-by GetAdsByEditorialStatusRequest
     */
    final class AdEditorialStatus
    {
        /** The ad passed editorial review. */
        const Active = 'Active';

        /** The ad failed editorial review. */
        const Disapproved = 'Disapproved';

        /** One or more elements of the ad is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The ad passed editorial review in one or more markets, and one or more elements of the ad is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

    /**
     * Defines the possible status values of an ad.
     * @link http://msdn.microsoft.com/en-us/library/cc580692(v=msads.100).aspx AdStatus Value Set
     * 
     * @used-by Ad
     */
    final class AdStatus
    {
        /** The ad is undergoing editorial review or has failed editorial review. */
        const Inactive = 'Inactive';

        /** The ad can be served. */
        const Active = 'Active';

        /** The ad will not serve until the owner resumes it. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the type of ad.
     * @link http://msdn.microsoft.com/en-us/library/bb671537(v=msads.100).aspx AdType Value Set
     * 
     * @used-by Ad
     */
    final class AdType
    {
        /** The ad is a text ad. */
        const Text = 'Text';

        /** Reserved for future use. */
        const Image = 'Image';

        /** The ad is a product ad. */
        const Product = 'Product';

        /** Reserved for future use. */
        const AppInstall = 'AppInstall';
    }

    /**
     * Defines the possible budget types that you can specify for a campaign.
     * @link http://msdn.microsoft.com/en-us/library/bb672035(v=msads.100).aspx BudgetLimitType Value Set
     * 
     * @used-by Campaign
     */
    final class BudgetLimitType
    {
        /** A monthly budget that is spent until it is depleted. */
        const MonthlyBudgetSpendUntilDepleted = 'MonthlyBudgetSpendUntilDepleted';

        /** A daily budget that is spent until it is depleted. */
        const DailyBudgetAccelerated = 'DailyBudgetAccelerated';

        /** A daily budget that is spread throughout the day. */
        const DailyBudgetStandard = 'DailyBudgetStandard';
    }

    /**
     * Defines the possible status values of a campaign.
     * @link http://msdn.microsoft.com/en-us/library/bb672025(v=msads.100).aspx CampaignStatus Value Set
     * 
     * @used-by Campaign
     */
    final class CampaignStatus
    {
        /** The campaign is active, which indicates that the campaign's ads can be served. */
        const Active = 'Active';

        /** The campaign is paused, which indicates that the campaign's ads will not serve. */
        const Paused = 'Paused';

        /** The campaign is paused, which indicates that the campaign's ads will not serve. */
        const BudgetPaused = 'BudgetPaused';

        /** The campaign is paused, which indicates that the campaign's ads will not serve. */
        const BudgetAndManualPaused = 'BudgetAndManualPaused';

        /** The campaign is deleted. */
        const Deleted = 'Deleted';

        /** Your campaign has been suspended and no ads are eligible for delivery because of potentially fraudulent activity. */
        const Suspended = 'Suspended';
    }

    /**
     * Defines the possible campaign types.
     * @link http://msdn.microsoft.com/en-us/library/dn913129(v=msads.100).aspx CampaignType Value Set
     * 
     * @used-by Campaign
     * @used-by GetCampaignsByAccountIdRequest
     * @used-by GetCampaignsByIdsRequest
     */
    final class CampaignType
    {
        /** The campaign is a search and content campaign. */
        const SearchAndContent = 'SearchAndContent';

        /** The campaign is a Bing Shopping campaign. */
        const Shopping = 'Shopping';
    }

    /**
     * Defines the ad distribution for the ad group.
     * @link http://msdn.microsoft.com/en-us/library/bb671585(v=msads.100).aspx AdDistribution Value Set
     * 
     * @used-by AdGroup
     */
    final class AdDistribution
    {
        /** The search network includes Bing. */
        const Search = 'Search';

        /** The content network is the ad distribution network for Bing Ads running in Windows apps. */
        const Content = 'Content';
    }

    /**
     * Defines the possible ad rotation types that you can apply to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj219947(v=msads.100).aspx AdRotationType Value Set
     * 
     * @used-by AdRotation
     */
    final class AdRotationType
    {
        /** Favor the best performing ads. */
        const OptimizeForClicks = 'OptimizeForClicks';

        /** Rotate ads evenly into the auction. */
        const RotateAdsEvenly = 'RotateAdsEvenly';
    }

    /**
     * Defines the bidding model for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dd796906(v=msads.100).aspx BiddingModel Value Set
     * 
     * @used-by AdGroup
     */
    final class BiddingModel
    {
        /** The ad group bidding is keyword-based. */
        const Keyword = 'Keyword';

        /** The ad group bidding is website-placement-based. */
        const SitePlacement = 'SitePlacement';
    }

    /**
     * Defines the possible search networks on which an ad can display.
     * @link http://msdn.microsoft.com/en-us/library/ff986253(v=msads.100).aspx Network Value Set
     * 
     * @used-by AdGroup
     */
    final class Network
    {
        /** Display ads on owned and operated networks, as well as syndicated search networks. */
        const OwnedAndOperatedAndSyndicatedSearch = 'OwnedAndOperatedAndSyndicatedSearch';

        /** Display ads on only owned and operated networks. */
        const OwnedAndOperatedOnly = 'OwnedAndOperatedOnly';

        /** Display ads on only syndicated search networks. */
        const SyndicatedSearchOnly = 'SyndicatedSearchOnly';
    }

    /**
     * Defines the pricing model for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/cc580680(v=msads.100).aspx PricingModel Value Set
     * 
     * @used-by AdGroup
     */
    final class PricingModel
    {
        /** The pricing model is cost-per-click (CPC). */
        const Cpc = 'Cpc';

        /** The pricing model is cost per thousand-impressions (CPM). */
        const Cpm = 'Cpm';
    }

    /**
     * Defines the possible status values of an ad group.
     * @link http://msdn.microsoft.com/en-us/library/bb671715(v=msads.100).aspx AdGroupStatus Value Set
     * 
     * @used-by AdGroup
     */
    final class AdGroupStatus
    {
        /** The ad group is active, which indicates that the ad group's ads can be served. */
        const Active = 'Active';

        /** The ad group is paused, which indicates that the ad group's ads will not serve. */
        const Paused = 'Paused';

        /** The ad group expired. */
        const Expired = 'Expired';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the possible age range values that you can use to target ads to users.
     * @link http://msdn.microsoft.com/en-us/library/bb671742(v=msads.100).aspx AgeRange Value Set
     * 
     * @used-by AgeTargetBid
     */
    final class AgeRange
    {
        /** Users from the ages of 18 through 24 years. */
        const EighteenToTwentyFive = 'EighteenToTwentyFive';

        /** Users from the ages of 25 through 34 years. */
        const TwentyFiveToThirtyFive = 'TwentyFiveToThirtyFive';

        /** Users from the ages of 35 through 49 years. */
        const ThirtyFiveToFifty = 'ThirtyFiveToFifty';

        /** Users from the ages of 50 through 64 years. */
        const FiftyToSixtyFive = 'FiftyToSixtyFive';

        /** Users 65 years of age and older. */
        const SixtyFiveAndAbove = 'SixtyFiveAndAbove';
    }

    /**
     * Defines the day values that you can specify for day of the week targeting.
     * @link http://msdn.microsoft.com/en-us/library/bb671717(v=msads.100).aspx Day Value Set
     * 
     * @used-by DayTimeTargetBid
     */
    final class Day
    {
        const Sunday = 'Sunday';
        const Monday = 'Monday';
        const Tuesday = 'Tuesday';
        const Wednesday = 'Wednesday';
        const Thursday = 'Thursday';
        const Friday = 'Friday';
        const Saturday = 'Saturday';
    }

    /**
     * Defines the possible minute values for a day and time target hour range.
     * @link http://msdn.microsoft.com/en-us/library/dn743745(v=msads.100).aspx Minute Value Set
     * 
     * @used-by DayTimeTargetBid
     */
    final class Minute
    {
        /** The starting or ending minute of the hour range is zero. */
        const Zero = 'Zero';

        /** The starting or ending minute of the hour range is fifteen. */
        const Fifteen = 'Fifteen';

        /** The starting or ending minute of the hour range is thirty. */
        const Thirty = 'Thirty';

        /** The starting or ending minute of the hour range is forty-five. */
        const FortyFive = 'FortyFive';
    }

    /**
     * Defines the genders that are available for ad group or campaign targeting.
     * @link http://msdn.microsoft.com/en-us/library/bb671519(v=msads.100).aspx GenderType Value Set
     * 
     * @used-by GenderTargetBid
     */
    final class GenderType
    {
        const Male = 'Male';
        const Female = 'Female';
    }

    /**
     * Defines the possible intent options for location targeting, for example to target people in, searching for, or viewing pages about your targeted location.
     * @link http://msdn.microsoft.com/en-us/library/dn743742(v=msads.100).aspx IntentOption Value Set
     * 
     * @used-by LocationTarget
     */
    final class IntentOption
    {
        /** Show ads to people in, searching for, or viewing pages about your targeted location. */
        const PeopleInOrSearchingForOrViewingPages = 'PeopleInOrSearchingForOrViewingPages';

        /** Show ads to people in your targeted location. */
        const PeopleIn = 'PeopleIn';

        /** Show ads to people searching for or viewing pages about your targeted location. */
        const PeopleSearchingForOrViewingPages = 'PeopleSearchingForOrViewingPages';
    }

    /**
     * Defines the possible distance units of a geographical location.
     * @link http://msdn.microsoft.com/en-us/library/dn743740(v=msads.100).aspx DistanceUnit Value Set
     * 
     * @used-by RadiusTargetBid
     */
    final class DistanceUnit
    {
        /** The distance of the specified geographical location is specified in miles. */
        const Miles = 'Miles';

        /** The distance of the specified geographical location is specified in kilometers. */
        const Kilometers = 'Kilometers';
    }

    /**
     * Defines the editorial review status values of a keyword.
     * @link http://msdn.microsoft.com/en-us/library/cc565085(v=msads.100).aspx KeywordEditorialStatus Value Set
     * 
     * @used-by Keyword
     * @used-by GetKeywordsByEditorialStatusRequest
     */
    final class KeywordEditorialStatus
    {
        /** The keyword passed editorial review. */
        const Active = 'Active';

        /** The keyword failed editorial review. */
        const Disapproved = 'Disapproved';

        /** One or more elements of the keyword is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The keyword passed editorial review in one or more markets, and one or more elements of the keyword is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

    /**
     * Defines the possible match types for a keyword bid.
     * @link http://msdn.microsoft.com/en-us/library/dn249974(v=msads.100).aspx MatchType Value Set
     * 
     * @used-by Keyword
     * @used-by NegativeKeyword
     */
    final class MatchType
    {
        /** The keyword match type is Exact. */
        const Exact = 'Exact';

        /** The keyword match type is Phrase. */
        const Phrase = 'Phrase';

        /** The keyword match type is Broad. */
        const Broad = 'Broad';

        /** The keyword match type is Content. */
        const Content = 'Content';
    }

    /**
     * Defines the possible status values of a keyword.
     * @link http://msdn.microsoft.com/en-us/library/bb671482(v=msads.100).aspx KeywordStatus Value Set
     * 
     * @used-by Keyword
     */
    final class KeywordStatus
    {
        /** The keyword can be used to match user search queries. */
        const Active = 'Active';

        /** The keyword cannot be used to match user search queries until the owner resumes it. */
        const Paused = 'Paused';

        /** This status is for internal use only. */
        const Deleted = 'Deleted';

        /** The keyword is undergoing editorial review or has failed editorial review. */
        const Inactive = 'Inactive';
    }

    /**
     * Defines the possible types of entities.
     * @link http://msdn.microsoft.com/en-us/library/jj622172(v=msads.100).aspx EntityType Value Set
     * 
     * @used-by AppealEditorialRejectionsRequest
     * @used-by GetEditorialReasonsByIdsRequest
     */
    final class EntityType
    {
        /** The entity is a Campaign object. */
        const Campaign = 'Campaign';

        /** The entity is an AdGroup object. */
        const AdGroup = 'AdGroup';

        /** The entity is a Target object. */
        const Target = 'Target';

        /** The entity is an Ad object or an object that derives from it, such as the TextAd object. */
        const Ad = 'Ad';

        /** The entity is a Keyword object. */
        const Keyword = 'Keyword';

        /** For future use. */
        const AdExtension = 'AdExtension';
        const AdGroupCriterion = 'AdGroupCriterion';
    }

    /**
     * Defines the status of a website placement bid.
     * @link http://msdn.microsoft.com/en-us/library/dd797148(v=msads.100).aspx SitePlacementStatus Value Set
     * 
     * @used-by SitePlacement
     */
    final class SitePlacementStatus
    {
        /** The website placement bid is active. */
        const Active = 'Active';

        /** The website placement bid is paused. */
        const Paused = 'Paused';

        /** The website placement bid is deleted. */
        const Deleted = 'Deleted';

        /** The website placement bid is inactive */
        const Inactive = 'Inactive';
    }

    /**
     * Defines the values that you use to determine whether an editorial rejection is appealable.
     * @link http://msdn.microsoft.com/en-us/library/jj631643(v=msads.100).aspx AppealStatus Value Set
     * 
     * @used-by EditorialReasonCollection
     */
    final class AppealStatus
    {
        /** The editorial rejection is appealable. */
        const Appealable = 'Appealable';

        /** The editorial rejection is appealable and an appeal has been submitted. */
        const AppealPending = 'AppealPending';

        /** The editorial rejection is not appealable. */
        const NotAppealable = 'NotAppealable';
    }

    final class MigrationStatus
    {
        const NotInPilot = 'NotInPilot';
        const NotStarted = 'NotStarted';
        const InProgress = 'InProgress';
        const Completed = 'Completed';
    }

    /**
     * Defines the possible status values of an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/jj134386(v=msads.100).aspx AdExtensionStatus Value Set
     * 
     * @used-by AdExtension
     */
    final class AdExtensionStatus
    {
        /** The ad extension is active. */
        const Active = 'Active';

        /** The ad extension is deleted. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the possible status values that indicate the progress of determining the latitude and longitude values of a business.
     * @link http://msdn.microsoft.com/en-us/library/dd796820(v=msads.100).aspx BusinessGeoCodeStatus Value Set
     * 
     * @used-by LocationAdExtension
     */
    final class BusinessGeoCodeStatus
    {
        /** In the process of determining the latitude and longitude of the business. */
        const Pending = 'Pending';

        /** Successfully determined the latitude and longitude of the business. */
        const Complete = 'Complete';

        /** Unable to determine the latitude and longitude of the business, possibly because the address did not resolve. */
        const Invalid = 'Invalid';

        /** Unable to determine the latitude and longitude of the business. */
        const Failed = 'Failed';
    }

    /**
     * Version 10 of the Campaign Management service is in preview.
     * @link http://msdn.microsoft.com/en-us/library/jj134394(v=msads.100).aspx AdExtensionsTypeFilter Value Set
     * 
     * @used-by GetAdExtensionIdsByAccountIdRequest
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsByIdsRequest
     */
    final class AdExtensionsTypeFilter
    {
        /** An ad extension that contains one or more site links to include in an ad. */
        const SiteLinksAdExtension = 'SiteLinksAdExtension';

        /** An ad extension that contains the address and phone number of the business to include an ad. */
        const LocationAdExtension = 'LocationAdExtension';

        /** An ad extension that contains a phone number to include in the ad and whether it's the only clickable item in an ad. */
        const CallAdExtension = 'CallAdExtension';

        /** An ad extension that contains an image with alternative text to include in the ad. */
        const ImageAdExtension = 'ImageAdExtension';

        /** An ad extension that contains a link to install an application from a supported app store. */
        const AppAdExtension = 'AppAdExtension';
    }

    /**
     * Defines the entity type or types associated with an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/dn249973(v=msads.100).aspx AssociationType Value Set
     * 
     * @used-by AdExtensionAssociation
     * @used-by DeleteAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionIdsByAccountIdRequest
     * @used-by GetAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsEditorialReasonsRequest
     * @used-by SetAdExtensionsAssociationsRequest
     */
    final class AssociationType
    {
        /** Specifies ad extension associations with campaigns. */
        const Campaign = 'Campaign';

        /** Specifies ad extension associations with ad groups. */
        const AdGroup = 'AdGroup';

        /** Reserved for future use. */
        const Account = 'Account';
    }

    /**
     * Defines the editorial review status values of an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/dn249989(v=msads.100).aspx AdExtensionEditorialStatus Value Set
     * 
     * @used-by AdExtensionAssociation
     */
    final class AdExtensionEditorialStatus
    {
        /** The ad extension passed editorial review. */
        const Active = 'Active';

        /** The ad extension failed editorial review. */
        const Disapproved = 'Disapproved';

        /** One or more elements of the ad extension is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The ad extension passed editorial review in one or more markets, and one or more elements of the ad extension is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

    /**
     * Defines the possible values representing entities that are enabled for media such as images.
     * @link http://msdn.microsoft.com/en-us/library/dn766195(v=msads.100).aspx MediaEnabledEntityFilter Value Set
     * 
     * @used-by MediaAssociation
     * @used-by GetMediaAssociationsRequest
     * @used-by GetMediaMetaDataByAccountIdRequest
     */
    final class MediaEnabledEntityFilter
    {
        /** The media enabled entity is an ImageAdExtension. */
        const ImageAdExtension = 'ImageAdExtension';
    }

    /**
     * Defines the possible types of ad group criterions.
     * @link http://msdn.microsoft.com/en-us/library/jj689543(v=msads.100).aspx CriterionType Value Set
     * 
     * @used-by AddAdGroupCriterionsRequest
     * @used-by DeleteAdGroupCriterionsRequest
     * @used-by GetAdGroupCriterionsByIdsRequest
     * @used-by UpdateAdGroupCriterionsRequest
     */
    final class CriterionType
    {
        /** The ad group criterion represents a Bing Shopping product partition. */
        const ProductPartition = 'ProductPartition';
    }

    /**
     * Defines the possible types of product partitions.
     * @link http://msdn.microsoft.com/en-us/library/dn913120(v=msads.100).aspx ProductPartitionType Value Set
     * 
     * @used-by ProductPartition
     */
    final class ProductPartitionType
    {
        /** The ProductPartition is a product group subdivision. */
        const Subdivision = 'Subdivision';

        /** The ProductPartition is a product group unit. */
        const Unit = 'Unit';
    }

    /**
     * Defines the possible status values that determine whether to apply the criterion to the ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj689542(v=msads.100).aspx AdGroupCriterionStatus Value Set
     * 
     * @used-by AdGroupCriterion
     */
    final class AdGroupCriterionStatus
    {
        /** Apply the criterion to the ad group. */
        const Active = 'Active';

        /** Do not apply the criterion to the ad group. */
        const Paused = 'Paused';

        /** The criterion was deleted. */
        const Deleted = 'Deleted';
    }

    /**
     * Defines the editorial review status values of an ad group criterion.
     * @link http://msdn.microsoft.com/en-us/library/dn195643(v=msads.100).aspx AdGroupCriterionEditorialStatus Value Set
     * 
     * @used-by BiddableAdGroupCriterion
     */
    final class AdGroupCriterionEditorialStatus
    {
        /** The criterion passed editorial review. */
        const Active = 'Active';

        /** The criterion failed editorial review. */
        const Disapproved = 'Disapproved';

        /** The criterion is undergoing editorial review. */
        const Inactive = 'Inactive';

        /** The criterion passed editorial review in one or more markets, and one or more elements of the criterion is undergoing editorial review in another market. */
        const ActiveLimited = 'ActiveLimited';
    }

    /**
     * Defines the possible types of item actions, for example to add, delete, or update the BiddableAdGroupCriterion or NegativeAdGroupCriterion, specifically one that contains a ProductPartition.
     * @link http://msdn.microsoft.com/en-us/library/dn913119(v=msads.100).aspx ItemAction Value Set
     * 
     * @used-by AdGroupCriterionAction
     */
    final class ItemAction
    {
        /** The requested action is to add the item, for example add the ProductPartition. */
        const Add = 'Add';

        /** The requested action is to delete the item, for example delete the ProductPartition. */
        const Delete = 'Delete';

        /** The requested action is to update the item, for example update the ProductPartition. */
        const Update = 'Update';
    }

    /**
     * Defines the possible types of campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913131(v=msads.100).aspx CampaignCriterionType Value Set
     * 
     * @used-by AddCampaignCriterionsRequest
     * @used-by DeleteCampaignCriterionsRequest
     * @used-by GetCampaignCriterionsByIdsRequest
     * @used-by UpdateCampaignCriterionsRequest
     */
    final class CampaignCriterionType
    {
        /** The criterion identifies a Bing Merchant Center product filter. */
        const ProductScope = 'ProductScope';
    }

    final class AccountMigrationStatusesInfo
    {
        public $AccountId;
        public $MigrationStatusInfo;
    }

    /**
     * Defines the base object of an ad.
     * @link http://msdn.microsoft.com/en-us/library/bb671952(v=msads.100).aspx Ad Data Object
     * 
     * @uses AdEditorialStatus
     * @uses AppUrl
     * @uses KeyValuePairOfstringstring
     * @uses AdStatus
     * @uses AdType
     * @uses CustomParameters
     * @used-by AddAdsRequest
     * @used-by GetAdsByAdGroupIdResponse
     * @used-by GetAdsByEditorialStatusResponse
     * @used-by GetAdsByIdsResponse
     * @used-by UpdateAdsRequest
     */
    class Ad
    {
        /**
         * This element determines whether the preference is for text ads to be displayed on mobile devices or all devices.
         * @var integer
         */
        public $DevicePreference;

        /**
         * The editorial review status of the ad, which indicates whether the ad is pending review, has been approved, or has been disapproved.
         * @var AdEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The mobile landing page URL.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system generated identifier of the ad.
         * @var integer
         */
        public $Id;

        /**
         * The status of the ad.
         * @var AdStatus
         */
        public $Status;

        /**
         * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * The type of the ad.
         * @var AdType
         */
        public $Type;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/dd796873(v=msads.100).aspx AdApiError Data Object
     * 
     * @used-by AdApiFaultDetail
     */
    final class AdApiError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that contains additional details about the error.
         * @var string
         */
        public $Detail;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines the base object from which all fault detail objects derive.
     * @link http://msdn.microsoft.com/en-us/library/dd796870(v=msads.100).aspx ApplicationFault Data Object
     */
    class ApplicationFault
    {
        /**
         * The identifier of the log entry that contains the details of the API call.
         * @var string
         */
        public $TrackingId;
    }

    /**
     * Defines a fault object that operations return when generic errors occur, such as an authentication error.
     * @link http://msdn.microsoft.com/en-us/library/dd797002(v=msads.100).aspx AdApiFaultDetail Data Object
     * 
     * @uses AdApiError
     */
    final class AdApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of AdApiError objects that contains the details that explain why the service operation failed.
         * @var AdApiError[]
         */
        public $Errors;
    }

    /**
     * Defines a postal address.
     * @link http://msdn.microsoft.com/en-us/library/jj721596(v=msads.100).aspx Address Data Object
     * 
     * @used-by LocationAdExtension
     */
    final class Address
    {
        /**
         * The name of the city where the street address is located.
         * @var string
         */
        public $CityName;

        /**
         * The country where the street address is located.
         * @var string
         */
        public $CountryCode;

        /**
         * The postal or zip code.
         * @var string
         */
        public $PostalCode;

        /**
         * A code that identifies the state or province where the street address is located.
         * @var string
         */
        public $ProvinceCode;

        /**
         * The name of the state or province where the street address is located.
         * @var string
         */
        public $ProvinceName;

        /**
         * The first line of the address.
         * @var string
         */
        public $StreetAddress;

        /**
         * The second line of the address.
         * @var string
         */
        public $StreetAddress2;
    }

    /**
     * Defines the base object of an ad extension.
     * @link http://msdn.microsoft.com/en-us/library/hh527708(v=msads.100).aspx AdExtension Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @uses AdExtensionStatus
     * @used-by AdExtensionAssociation
     * @used-by AddAdExtensionsRequest
     * @used-by GetAdExtensionsByIdsResponse
     * @used-by UpdateAdExtensionsRequest
     */
    class AdExtension
    {
        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system-generated identifier of the ad extension.
         * @var integer
         */
        public $Id;

        /**
         * The status of the ad extension.
         * @var AdExtensionStatus
         */
        public $Status;

        /**
         * The type of ad extension.
         * @var string
         */
        public $Type;

        /**
         * The number of times the contents of the ad extension has been updated.
         * @var integer
         */
        public $Version;
    }

    /**
     * Defines an object that associates an ad extension and its editorial status to a supported entity, for example ad group or campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn250012(v=msads.100).aspx AdExtensionAssociation Data Object
     * 
     * @uses AdExtension
     * @uses AssociationType
     * @uses AdExtensionEditorialStatus
     * @used-by AdExtensionAssociationCollection
     */
    final class AdExtensionAssociation
    {
        /**
         * The ad extension associated with a supported entity.
         * @var AdExtension
         */
        public $AdExtension;

        /**
         * The type of entity associated with the ad extension.
         * @var AssociationType
         */
        public $AssociationType;

        /**
         * The editorial status of the ad extension.
         * @var AdExtensionEditorialStatus
         */
        public $EditorialStatus;

        /**
         * The identifier of an entity associated with the ad extension.
         * @var integer
         */
        public $EntityId;
    }

    /**
     * Defines an array of objects that associate an ad extension and its editorial status to a supported entity, for example ad group or campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn250010(v=msads.100).aspx AdExtensionAssociationCollection Data Object
     * 
     * @uses AdExtensionAssociation
     * @used-by GetAdExtensionsAssociationsResponse
     */
    final class AdExtensionAssociationCollection
    {
        /**
         * An array of objects that associate an ad extension and its editorial status to a supported entity, for example ad group or campaign.
         * @var AdExtensionAssociation[]
         */
        public $AdExtensionAssociations;
    }

    /**
     * Defines an object that you can use to determine the component of an ad extension that failed editorial review, and the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/jj134398(v=msads.100).aspx AdExtensionEditorialReason Data Object
     * 
     * @used-by AdExtensionEditorialReasonCollection
     */
    final class AdExtensionEditorialReason
    {
        /**
         * The component of the ad extension that failed editorial review.
         * @var string
         */
        public $Location;

        /**
         * The list of publisher countries whose editorial guidelines do not allow the specified term.
         * @var string[]
         */
        public $PublisherCountries;

        /**
         * A code that identifies the reason for the failure.
         * @var integer
         */
        public $ReasonCode;

        /**
         * The term that failed editorial review.
         * @var string
         */
        public $Term;
    }

    /**
     * Defines a collection of ad extensions that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/jj134393(v=msads.100).aspx AdExtensionEditorialReasonCollection Data Object
     * 
     * @uses AdExtensionEditorialReason
     * @used-by GetAdExtensionsEditorialReasonsResponse
     */
    final class AdExtensionEditorialReasonCollection
    {
        /**
         * The identifier of the ad extension that failed editorial review.
         * @var integer
         */
        public $AdExtensionId;

        /**
         * A list of AdExtensionEditorialReason objects that identify the component of an ad extension that failed editorial review, and the reason for the failure.
         * @var AdExtensionEditorialReason[]
         */
        public $Reasons;
    }

    /**
     * Defines an object that identifies an ad extension revision.
     * @link http://msdn.microsoft.com/en-us/library/jj134392(v=msads.100).aspx AdExtensionIdentity Data Object
     * 
     * @used-by AddAdExtensionsResponse
     */
    final class AdExtensionIdentity
    {
        /**
         * The system-generated identifier of the ad extension.
         * @var integer
         */
        public $Id;

        /**
         * The number of times the contents of the ad extension has been updated.
         * @var integer
         */
        public $Version;
    }

    /**
     * Defines an object that associates an ad extension to a supported entity, for example ad group or campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn249980(v=msads.100).aspx AdExtensionIdToEntityIdAssociation Data Object
     * 
     * @used-by DeleteAdExtensionsAssociationsRequest
     * @used-by GetAdExtensionsEditorialReasonsRequest
     * @used-by SetAdExtensionsAssociationsRequest
     */
    final class AdExtensionIdToEntityIdAssociation
    {
        /**
         * The system-generated identifier of the ad extension.
         * @var integer
         */
        public $AdExtensionId;

        /**
         * The identifier of an entity associated with the ad extension.
         * @var integer
         */
        public $EntityId;
    }

    /**
     * Defines an ad group.
     * @link http://msdn.microsoft.com/en-us/library/bb671956(v=msads.100).aspx AdGroup Data Object
     * 
     * @uses AdDistribution
     * @uses AdRotation
     * @uses BiddingModel
     * @uses Bid
     * @uses Date
     * @uses KeyValuePairOfstringstring
     * @uses Network
     * @uses PricingModel
     * @uses Setting
     * @uses AdGroupStatus
     * @uses CustomParameters
     * @used-by AddAdGroupsRequest
     * @used-by GetAdGroupsByCampaignIdResponse
     * @used-by GetAdGroupsByIdsResponse
     * @used-by UpdateAdGroupsRequest
     */
    final class AdGroup
    {
        /**
         * Determines whether the ads within this ad group will be displayed on the content distribution channel, search distribution channel, or both.
         * @var AdDistribution
         */
        public $AdDistribution;

        /**
         * Determines the ad rotation type.
         * @var AdRotation
         */
        public $AdRotation;

        /**
         * Determines whether the ad group bids on keyword matches or site placement matches.
         * @var BiddingModel
         */
        public $BiddingModel;

        /**
         * The bid to use when the keywords that the service extracts from the content page and the ad group's keywords match by using an exact match comparison.
         * @var Bid
         */
        public $ContentMatchBid;

        /**
         * The date that the ads in the ad group will expire.
         * @var Date
         */
        public $EndDate;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system generated identifier of the ad group.
         * @var integer
         */
        public $Id;

        /**
         * The language of the ads and keywords in the ad group.
         * @var string
         */
        public $Language;

        /**
         * The name of the ad group.
         * @var string
         */
        public $Name;

        /**
         * The percent amount by which to adjust your bid for native ads above or below the base ad group or keyword bid.
         * @var integer
         */
        public $NativeBidAdjustment;

        /**
         * The search networks where you want your ads to display.
         * @var Network
         */
        public $Network;

        /**
         * You can specify a pricing model based on cost per click (CPC) or cost per 1000 impressions (CPM).
         * @var PricingModel
         */
        public $PricingModel;

        /**
         * The default bid to use when the user's query and the ad group's keywords match by using either a broad, exact, or phrase match comparison.
         * @var Bid
         */
        public $SearchBid;

        /**
         * Reserved for future use.
         * @var Setting[]
         */
        public $Settings;

        /**
         * The date that the ads in the ad group can begin serving; otherwise, the service can begin serving the ads in the ad group the day that the ad group becomes active.
         * @var Date
         */
        public $StartDate;

        /**
         * The status of the ad group.
         * @var AdGroupStatus
         */
        public $Status;

        /**
         * The tracking template to use as a default for all URLs in your ad group.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines the base class of an ad group criterion.
     * @link http://msdn.microsoft.com/en-us/library/jj738614(v=msads.100).aspx AdGroupCriterion Data Object
     * 
     * @uses Criterion
     * @uses AdGroupCriterionStatus
     * @used-by AdGroupCriterionAction
     * @used-by AddAdGroupCriterionsRequest
     * @used-by GetAdGroupCriterionsByIdsResponse
     * @used-by UpdateAdGroupCriterionsRequest
     */
    class AdGroupCriterion
    {
        /**
         * The identifier of the ad group to apply the criterion to.
         * @var integer
         */
        public $AdGroupId;

        /**
         * The criterion to apply to the ad group.
         * @var Criterion
         */
        public $Criterion;

        /**
         * The system-generated identifier that identifies this ad group criterion.
         * @var integer
         */
        public $Id;

        /**
         * A status value that determines whether to apply the criterion to the ad group.
         * @var AdGroupCriterionStatus
         */
        public $Status;

        /**
         * The type of ad group criterion.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines the action to apply to a BiddableAdGroupCriterion or NegativeAdGroupCriterion, specifically one that contains a ProductPartition.
     * @link http://msdn.microsoft.com/en-us/library/dn913128(v=msads.100).aspx AdGroupCriterionAction Data Object
     * 
     * @uses ItemAction
     * @uses AdGroupCriterion
     * @used-by ApplyProductPartitionActionsRequest
     */
    final class AdGroupCriterionAction
    {
        /**
         * The action to be applied for the AdGroupCriterion.
         * @var ItemAction
         */
        public $Action;

        /**
         * The ad group criterion of either type BiddableAdGroupCriterion or NegativeAdGroupCriterion, which contains a ProductPartition and FixedBid.
         * @var AdGroupCriterion
         */
        public $AdGroupCriterion;
    }

    /**
     * Defines an object that contains the negative site URLs of an ad group.
     * @link http://msdn.microsoft.com/en-us/library/hh300117(v=msads.100).aspx AdGroupNegativeSites Data Object
     * 
     * @used-by GetNegativeSitesByAdGroupIdsResponse
     * @used-by SetNegativeSitesToAdGroupsRequest
     */
    final class AdGroupNegativeSites
    {
        /**
         * The identifier of the ad group to which the negative site URLs belong.
         * @var integer
         */
        public $AdGroupId;

        /**
         * A list of URLs of the websites on which you do not want your ads displayed.
         * @var string[]
         */
        public $NegativeSites;
    }

    /**
     * Defines an object that specifies the type of ad rotation to apply to the ad group.
     * @link http://msdn.microsoft.com/en-us/library/jj219952(v=msads.100).aspx AdRotation Data Object
     * 
     * @uses AdRotationType
     * @used-by AdGroup
     */
    final class AdRotation
    {
        /**
         * For future use only.
         * @var \DateTime
         */
        public $EndDate;

        /**
         * For future use only.
         * @var \DateTime
         */
        public $StartDate;

        /**
         * The type of ad rotation to apply to the ad group.
         * @var AdRotationType
         */
        public $Type;
    }

    /**
     * Defines a list of age ranges to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb672084(v=msads.100).aspx AgeTarget Data Object
     * 
     * @uses AgeTargetBid
     * @used-by Target
     */
    final class AgeTarget
    {
        /**
         * An array of of age ranges to target with bid adjustments.
         * @var AgeTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific age target range with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/bb671720(v=msads.100).aspx AgeTargetBid Data Object
     * 
     * @uses AgeRange
     * @used-by AgeTarget
     */
    final class AgeTargetBid
    {
        /**
         * The age range to target.
         * @var AgeRange
         */
        public $Age;

        /**
         * The percent amount used to adjust the base bid.
         * @var integer
         */
        public $BidAdjustment;
    }

    /**
     * Defines a fault object that operations return when web service-specific errors occur, such as when the request message contains incomplete or invalid data.
     * @link http://msdn.microsoft.com/en-us/library/bb671467(v=msads.100).aspx ApiFaultDetail Data Object
     * 
     * @uses BatchError
     * @uses OperationError
     */
    final class ApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of batch errors that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * An array of operation errors that contains the reasons that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

    /**
     * Defines an app ad extension that can be included in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/dn817898(v=msads.100).aspx AppAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class AppAdExtension extends AdExtension
    {
        /**
         * The application platform.
         * @var string
         */
        public $AppPlatform;

        /**
         * The application identifier provided by the app store.
         * @var string
         */
        public $AppStoreId;

        /**
         * The URL of the app store download webpage that users are taken to when they click the app extension link.
         * @var string
         */
        public $DestinationUrl;

        /**
         * This element determines whether the preference is for the app extension to be displayed on mobile devices or all devices.
         * @var integer
         */
        public $DevicePreference;

        /**
         * The text displayed in the app ad extension.
         * @var string
         */
        public $DisplayText;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Reserved for future use.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Reserved for future use.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines the operating system platform and URL of the app store download webpage.
     * @link http://msdn.microsoft.com/en-us/library/mt179359(v=msads.100).aspx AppUrl Data Object
     * 
     * @used-by Ad
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by SiteLink
     */
    final class AppUrl
    {
        /**
         * Reserved for future use.
         * @var string
         */
        public $OsType;

        /**
         * Reserved for future use.
         * @var string
         */
        public $Url;
    }

    /**
     * Defines an error object that identifies the item within the batch of items in the request message that caused the operation to fail, and describes the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/bb671765(v=msads.100).aspx BatchError Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by ApiFaultDetail
     * @used-by BatchErrorCollection
     * @used-by EditorialApiFaultDetail
     * @used-by AddAdGroupsResponse
     * @used-by AddAdsResponse
     * @used-by AddCampaignsResponse
     * @used-by AddKeywordsResponse
     * @used-by AddListItemsToSharedListResponse
     * @used-by AddSharedEntityResponse
     * @used-by AppealEditorialRejectionsResponse
     * @used-by ApplyProductPartitionActionsResponse
     * @used-by DeleteAdGroupCriterionsResponse
     * @used-by DeleteAdGroupsResponse
     * @used-by DeleteAdsResponse
     * @used-by DeleteCampaignCriterionsResponse
     * @used-by DeleteCampaignsResponse
     * @used-by DeleteKeywordsResponse
     * @used-by DeleteListItemsFromSharedListResponse
     * @used-by DeleteMediaResponse
     * @used-by DeleteSharedEntitiesResponse
     * @used-by DeleteSharedEntityAssociationsResponse
     * @used-by GetAdExtensionsAssociationsResponse
     * @used-by GetAdGroupsByIdsResponse
     * @used-by GetAdsByIdsResponse
     * @used-by GetCampaignCriterionsByIdsResponse
     * @used-by GetCampaignsByIdsResponse
     * @used-by GetEditorialReasonsByIdsResponse
     * @used-by GetKeywordsByIdsResponse
     * @used-by GetMediaAssociationsResponse
     * @used-by GetMediaMetaDataByIdsResponse
     * @used-by GetNegativeKeywordsByEntityIdsResponse
     * @used-by GetNegativeSitesByAdGroupIdsResponse
     * @used-by GetNegativeSitesByCampaignIdsResponse
     * @used-by GetSharedEntityAssociationsByEntityIdsResponse
     * @used-by GetSharedEntityAssociationsBySharedEntityIdsResponse
     * @used-by GetTargetsByAdGroupIdsResponse
     * @used-by GetTargetsByCampaignIdsResponse
     * @used-by SetAdExtensionsAssociationsResponse
     * @used-by SetNegativeSitesToAdGroupsResponse
     * @used-by SetNegativeSitesToCampaignsResponse
     * @used-by SetSharedEntityAssociationsResponse
     * @used-by UpdateAdGroupsResponse
     * @used-by UpdateAdsResponse
     * @used-by UpdateCampaignsResponse
     * @used-by UpdateKeywordsResponse
     * @used-by UpdateSharedEntitiesResponse
     */
    class BatchError
    {
        /**
         * A numeric error code that identifies the error.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * The name of the data object's element where the error occurred.
         * @var string
         */
        public $FieldPath;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The zero-based index of the item in the batch of items in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;

        /**
         * Reserved for internal use.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines an error object that contains batch error details for the top level list index and a list of batch errors corresponding to the nested list index.
     * @link http://msdn.microsoft.com/en-us/library/dn743731(v=msads.100).aspx BatchErrorCollection Data Object
     * 
     * @uses BatchError
     * @uses KeyValuePairOfstringstring
     * @used-by AddAdGroupCriterionsResponse
     * @used-by AddCampaignCriterionsResponse
     * @used-by AddNegativeKeywordsToEntitiesResponse
     * @used-by DeleteNegativeKeywordsFromEntitiesResponse
     * @used-by UpdateAdGroupCriterionsResponse
     * @used-by UpdateCampaignCriterionsResponse
     */
    final class BatchErrorCollection
    {
        /**
         * A list of batch errors corresponding to the nested list index.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * A numeric error code that identifies the error for the top level list index.
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the batch error for the top level list index.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error for the top level list index.
         * @var string
         */
        public $ErrorCode;

        /**
         * Reserved for future use.
         * @var string
         */
        public $FieldPath;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The zero-based top level list index in the request message that failed.
         * @var integer
         */
        public $Index;

        /**
         * A message that describes the error for the top level list index.
         * @var string
         */
        public $Message;

        /**
         * Reserved for internal use.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines a bid.
     * @link http://msdn.microsoft.com/en-us/library/dd797130(v=msads.100).aspx Bid Data Object
     * 
     * @used-by AdGroup
     * @used-by FixedBid
     * @used-by Keyword
     * @used-by SitePlacement
     */
    final class Bid
    {
        /**
         * The bid value.
         * @var double
         */
        public $Amount;
    }

    /**
     * Defines the conditions that determine whether product ads in the ad group get served.
     * @link http://msdn.microsoft.com/en-us/library/jj689538(v=msads.100).aspx BiddableAdGroupCriterion Data Object
     * 
     * @uses CriterionBid
     * @uses AdGroupCriterionEditorialStatus
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class BiddableAdGroupCriterion extends AdGroupCriterion
    {
        /**
         * The bid to use in the auction.
         * @var CriterionBid
         */
        public $CriterionBid;

        /**
         * The URL of the webpage that the user is taken to when they click the ad.
         * @var string
         */
        public $DestinationUrl;
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * Reserved for future use.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Reserved for future use.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Version 10 of the Campaign Management service is in preview.
     * @link http://msdn.microsoft.com/en-us/library/dn411606(v=msads.100).aspx BMCStore Data Object
     * 
     * @used-by GetBMCStoresByCustomerIdResponse
     */
    final class BMCStore
    {
        /**
         * Value will be true if the store has a catalog of items, and otherwise the value is false.
         * @var boolean
         */
        public $HasCatalog;

        /**
         * The unique identifier for the Bing Merchant Center store.
         * @var integer
         */
        public $Id;

        /**
         * Value will be true if the store is active, and otherwise the value is false.
         * @var boolean
         */
        public $IsActive;

        /**
         * Value will be true if the store is enabled for product ads in Bing Ads, and otherwise the value is false.
         * @var boolean
         */
        public $IsProductAdsEnabled;

        /**
         * Defines the name of the store as defined in the Bing Merchant Center.
         * @var string
         */
        public $Name;
    }

    /**
     * Defines an object that specifies a click-to-call phone number to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/jj721598(v=msads.100).aspx CallAdExtension Data Object
     */
    final class CallAdExtension extends AdExtension
    {
        /**
         * The country code where the phone number is registered.
         * @var string
         */
        public $CountryCode;

        /**
         * This element determines whether the preference is for the click to call phone number to be displayed on mobile devices or all devices.
         * @var integer
         */
        public $DevicePreference;

        /**
         * A Boolean value that determines whether the phone number is the only clickable item in the ad.
         * @var boolean
         */
        public $IsCallOnly;

        /**
         * A Boolean value that determines whether call tracking is enabled for the call ad extension.
         * @var boolean
         */
        public $IsCallTrackingEnabled;

        /**
         * The phone number to include in the ad.
         * @var string
         */
        public $PhoneNumber;

        /**
         * A Boolean value that determines whether a toll-free tracking number should be created for call tracking.
         * @var boolean
         */
        public $RequireTollFreeTrackingNumber;
    }

    /**
     * Defines a campaign.
     * @link http://msdn.microsoft.com/en-us/library/bb672054(v=msads.100).aspx Campaign Data Object
     * 
     * @uses BudgetLimitType
     * @uses KeyValuePairOfstringstring
     * @uses CampaignStatus
     * @uses CustomParameters
     * @uses CampaignType
     * @uses Setting
     * @used-by AddCampaignsRequest
     * @used-by GetCampaignsByAccountIdResponse
     * @used-by GetCampaignsByIdsResponse
     * @used-by UpdateCampaignsRequest
     */
    final class Campaign
    {
        public $BudgetType;
        public $DailyBudget;
        public $DaylightSaving;
        public $Description;
        public $ForwardCompatibilityMap;
        public $Id;
        public $MonthlyBudget;
        public $Name;
        public $NativeBidAdjustment;
        public $Status;
        public $TimeZone;
        public $TrackingUrlTemplate;
        public $UrlCustomParameters;
        public $CampaignType;
        public $Settings;
    }

    /**
     * Defines the base class of a campaign criterion.
     * @link http://msdn.microsoft.com/en-us/library/dn913126(v=msads.100).aspx CampaignCriterion Data Object
     * 
     * @uses Criterion
     * @uses KeyValuePairOfstringstring
     * @used-by AddCampaignCriterionsRequest
     * @used-by GetCampaignCriterionsByIdsResponse
     * @used-by UpdateCampaignCriterionsRequest
     */
    class CampaignCriterion
    {
        /**
         * Reserved for future use.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The identifier of the campaign to apply the criterion to.
         * @var integer
         */
        public $CampaignId;

        /**
         * The criterion to apply to the campaign.
         * @var Criterion
         */
        public $Criterion;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system-generated identifier that identifies this campaign criterion.
         * @var integer
         */
        public $Id;

        /**
         * The type of campaign criterion.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines an object that contains the negative site URLs of a campaign.
     * @link http://msdn.microsoft.com/en-us/library/hh299890(v=msads.100).aspx CampaignNegativeSites Data Object
     * 
     * @used-by GetNegativeSitesByCampaignIdsResponse
     * @used-by SetNegativeSitesToCampaignsRequest
     */
    final class CampaignNegativeSites
    {
        /**
         * The identifier of the campaign to which the negative site URLs belong.
         * @var integer
         */
        public $CampaignId;

        /**
         * A list of URLs of the websites on which you do not want your ads displayed.
         * @var string[]
         */
        public $NegativeSites;
    }

    final class CampaignSize
    {
        public $CampaignId;
        public $Size;
    }

    /**
     * Defines a list of cities to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dd796959(v=msads.100).aspx CityTarget Data Object
     * 
     * @uses CityTargetBid
     * @used-by LocationTarget
     */
    final class CityTarget
    {
        /**
         * An array of cities to target with bid adjustments.
         * @var CityTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific city target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dd796932(v=msads.100).aspx CityTargetBid Data Object
     * 
     * @used-by CityTarget
     */
    final class CityTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted city.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The city to target.
         * @var string
         */
        public $City;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;
    }

    /**
     * Defines a list of countries or regions to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb671605(v=msads.100).aspx CountryTarget Data Object
     * 
     * @uses CountryTargetBid
     * @used-by LocationTarget
     */
    final class CountryTarget
    {
        /**
         * An array of countries or regions to target with bid adjustments.
         * @var CountryTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific country or region target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/bb671882(v=msads.100).aspx CountryTargetBid Data Object
     * 
     * @used-by CountryTarget
     */
    final class CountryTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted country/region.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The country to target.
         * @var string
         */
        public $CountryAndRegion;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;
    }

    /**
     * Defines the base object of a criterion.
     * @link http://msdn.microsoft.com/en-us/library/jj738613(v=msads.100).aspx Criterion Data Object
     * 
     * @used-by AdGroupCriterion
     * @used-by CampaignCriterion
     */
    class Criterion
    {
        /**
         * The type of criterion.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines a base class for criterion bids.
     * @link http://msdn.microsoft.com/en-us/library/jj689540(v=msads.100).aspx CriterionBid Data Object
     * 
     * @used-by BiddableAdGroupCriterion
     */
    class CriterionBid
    {
        /**
         * The type of criterion bid.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines a key and value custom parameter for URL tracking.
     * @link http://msdn.microsoft.com/en-us/library/mt179360(v=msads.100).aspx CustomParameter Data Object
     * 
     * @used-by CustomParameters
     */
    final class CustomParameter
    {
        /**
         * The name of the custom parameter that you want to track.
         * @var string
         */
        public $Key;

        /**
         * The value to track using your custom parameter.
         * @var string
         */
        public $Value;
    }

    /**
     * Defines a collection of key and value custom parameters for URL tracking.
     * @link http://msdn.microsoft.com/en-us/library/mt179361(v=msads.100).aspx CustomParameters Data Object
     * 
     * @uses CustomParameter
     * @used-by Ad
     * @used-by AdGroup
     * @used-by AppAdExtension
     * @used-by BiddableAdGroupCriterion
     * @used-by Campaign
     * @used-by ImageAdExtension
     * @used-by Keyword
     * @used-by SiteLink
     */
    final class CustomParameters
    {
        /**
         * The collection of key and value custom parameters for URL tracking.
         * @var CustomParameter[]
         */
        public $Parameters;
    }

    /**
     * Represents a date.
     * @link http://msdn.microsoft.com/en-us/library/bb671903(v=msads.100).aspx Date Data Object
     * 
     * @used-by AdGroup
     */
    final class Date
    {
        /**
         * Specifies the day of the month.
         * @var integer
         */
        public $Day;

        /**
         * Specifies the month.
         * @var integer
         */
        public $Month;

        /**
         * Specifies the year.
         * @var integer
         */
        public $Year;
    }

    /**
     * Defines a list of days of the week and time range to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dn743766(v=msads.100).aspx DayTimeTarget Data Object
     * 
     * @uses DayTimeTargetBid
     * @used-by Target
     */
    final class DayTimeTarget
    {
        /**
         * An array of DayTimeTargetBid objects that each specify the day of the week and time to target with bid adjustment to apply to the base bid.
         * @var DayTimeTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific day of the week and time range to target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dn743741(v=msads.100).aspx DayTimeTargetBid Data Object
     * 
     * @uses Day
     * @uses Minute
     * @used-by DayTimeTarget
     */
    final class DayTimeTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid for the specified day and time range.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The day of the week to target.
         * @var Day
         */
        public $Day;

        /**
         * The starting hour range to target.
         * @var integer
         */
        public $FromHour;

        /**
         * The starting minute of the hour to target.
         * @var Minute
         */
        public $FromMinute;

        /**
         * The ending hour range to target.
         * @var integer
         */
        public $ToHour;

        /**
         * The ending minute of the hour to target.
         * @var Minute
         */
        public $ToMinute;
    }

    /**
     * Defines a list of devices to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/hh527704(v=msads.100).aspx DeviceOSTarget Data Object
     * 
     * @uses DeviceOSTargetBid
     * @used-by Target
     */
    final class DeviceOSTarget
    {
        /**
         * An array of devices to target with bid adjustments.
         * @var DeviceOSTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific device target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dn249988(v=msads.100).aspx DeviceOSTargetBid Data Object
     * 
     * @used-by DeviceOSTarget
     */
    final class DeviceOSTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid for the specified device target.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The name of the device to target.
         * @var string
         */
        public $DeviceName;

        /**
         * This element is deprecated and will be sunset in a future version of the API.
         * @var string[]
         */
        public $OSNames;
    }

    /**
     * Defines dimension information for media on a website.
     * @link http://msdn.microsoft.com/en-us/library/dd796881(v=msads.100).aspx Dimension Data Object
     * 
     * @used-by MediaType
     */
    final class Dimension
    {
        /**
         * The height.
         * @var integer
         */
        public $Height;

        /**
         * The width.
         * @var integer
         */
        public $Width;
    }

    /**
     * Defines a fault object that operations such as AddAdGroupCriterions, UpdateAdGroupCriterions, SetAdExtensionsAssociations, and UpdateAdExtensions return when one or more criterion or ad extensions in your request message fail editorial review.
     * @link http://msdn.microsoft.com/en-us/library/cc197200(v=msads.100).aspx EditorialApiFaultDetail Data Object
     * 
     * @uses BatchError
     * @uses EditorialError
     * @uses OperationError
     */
    final class EditorialApiFaultDetail extends ApplicationFault
    {
        /**
         * An array of batch errors that identifies the items in the batch of items in the request message that caused the operation to fail.
         * @var BatchError[]
         */
        public $BatchErrors;

        /**
         * An array of editorial errors that contains the details that explain why the criterion or ad extension was disapproved.
         * @var EditorialError[]
         */
        public $EditorialErrors;

        /**
         * An array of operation errors that contains the details that explain why the service operation failed when the error is not related to a specific item in the batch of items.
         * @var OperationError[]
         */
        public $OperationErrors;
    }

    /**
     * Defines an error object that identifies the entity with the batch of entities that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/cc197190(v=msads.100).aspx EditorialError Data Object
     * 
     * @used-by EditorialApiFaultDetail
     */
    final class EditorialError extends BatchError
    {
        /**
         * Reserved for future use.
         * @var boolean
         */
        public $Appealable;

        /**
         * The text that caused the entity to be disapproved.
         * @var string
         */
        public $DisapprovedText;

        /**
         * The element or property of the entity that caused the entity to be disapproved.
         * @var string
         */
        public $Location;

        /**
         * The corresponding country or region for the flagged editorial issue.
         * @var string
         */
        public $PublisherCountry;

        /**
         * A numeric code that identifies the error.
         * @var integer
         */
        public $ReasonCode;
    }

    /**
     * Defines an object that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/ff728493(v=msads.100).aspx EditorialReason Data Object
     * 
     * @used-by EditorialReasonCollection
     */
    final class EditorialReason
    {
        /**
         * The component of the ad or keyword that failed editorial review.
         * @var string
         */
        public $Location;

        /**
         * A list of countries where the ad or keyword failed editorial review.
         * @var string[]
         */
        public $PublisherCountries;

        /**
         * A code that identifies the reason for the failure.
         * @var integer
         */
        public $ReasonCode;

        /**
         * The term that failed editorial review.
         * @var string
         */
        public $Term;
    }

    /**
     * Defines a collection of ads or keywords that failed editorial review, and the reason for the failure.
     * @link http://msdn.microsoft.com/en-us/library/ff728504(v=msads.100).aspx EditorialReasonCollection Data Object
     * 
     * @uses AppealStatus
     * @uses EditorialReason
     * @used-by GetEditorialReasonsByIdsResponse
     */
    final class EditorialReasonCollection
    {
        /**
         * Identifies the ad group which is the parent of the ad or keyword that failed editorial review.
         * @var integer
         */
        public $AdGroupId;

        /**
         * Identifies the ad or keyword that failed editorial review.
         * @var integer
         */
        public $AdOrKeywordId;

        /**
         * A value that determines whether you can appeal the issues found by the editorial review.
         * @var AppealStatus
         */
        public $AppealStatus;

        /**
         * An array of editorial reasons that you can use to determine the component of an ad or keyword that failed editorial review, and the reason for the failure.
         * @var EditorialReason[]
         */
        public $Reasons;
    }

    /**
     * Defines an object that contains the unique system identifier of an entity such as ad or keyword, and the identifier of its parent.
     * @link http://msdn.microsoft.com/en-us/library/mt179358(v=msads.100).aspx EntityIdToParentIdAssociation Data Object
     * 
     * @used-by AppealEditorialRejectionsRequest
     * @used-by GetEditorialReasonsByIdsRequest
     */
    final class EntityIdToParentIdAssociation
    {
        /**
         * The system-generated unique identifier of an entity such as ad or keyword.
         * @var integer
         */
        public $EntityId;

        /**
         * The identifier of the entity's parent.
         * @var integer
         */
        public $ParentId;
    }

    /**
     * Defines an object that contains a set of negative keywords that are only associated with the corresponding entity such as a campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743733(v=msads.100).aspx EntityNegativeKeyword Data Object
     * 
     * @uses NegativeKeyword
     * @used-by AddNegativeKeywordsToEntitiesRequest
     * @used-by DeleteNegativeKeywordsFromEntitiesRequest
     * @used-by GetNegativeKeywordsByEntityIdsResponse
     */
    final class EntityNegativeKeyword
    {
        /**
         * The system-generated identifier of a campaign or ad group that is associated with the negative keywords.
         * @var integer
         */
        public $EntityId;

        /**
         * The type of entity such as a campaign that is associated with the negative keywords.
         * @var string
         */
        public $EntityType;

        /**
         * An array of negative keywords that are associated with the corresponding campaign or ad group.
         * @var NegativeKeyword[]
         */
        public $NegativeKeywords;
    }

    /**
     * Defines the monetary bid to use in the auction.
     * @link http://msdn.microsoft.com/en-us/library/jj689541(v=msads.100).aspx FixedBid Data Object
     * 
     * @uses Bid
     */
    final class FixedBid extends CriterionBid
    {
        /**
         * The amount to bid in the auction.
         * @var Bid
         */
        public $Bid;
    }

    /**
     * Defines a list of genders to target with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb671655(v=msads.100).aspx GenderTarget Data Object
     * 
     * @uses GenderTargetBid
     * @used-by Target
     */
    final class GenderTarget
    {
        /**
         * An array of genders to target with bid adjustments.
         * @var GenderTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific gender target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/bb671554(v=msads.100).aspx GenderTargetBid Data Object
     * 
     * @uses GenderType
     * @used-by GenderTarget
     */
    final class GenderTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * The gender to target.
         * @var GenderType
         */
        public $Gender;
    }

    /**
     * Defines an object that contains the longitude and latitude coordinates of a geographical location.
     * @link http://msdn.microsoft.com/en-us/library/jj721599(v=msads.100).aspx GeoPoint Data Object
     * 
     * @used-by LocationAdExtension
     */
    final class GeoPoint
    {
        /**
         * The latitude specified in micro degrees.
         * @var integer
         */
        public $LatitudeInMicroDegrees;

        /**
         * The longitude specified in micro degrees.
         * @var integer
         */
        public $LongitudeInMicroDegrees;
    }

    /**
     * Defines an object that contains a list of identifiers, for example negative keyword identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn743736(v=msads.100).aspx IdCollection Data Object
     * 
     * @used-by AddNegativeKeywordsToEntitiesResponse
     */
    final class IdCollection
    {
        /**
         * A list of identifiers, for example negative keyword identifiers.
         * @var integer[]
         */
        public $Ids;
    }

    /**
     * Defines the base object of media.
     * @link http://msdn.microsoft.com/en-us/library/dn195580(v=msads.100).aspx Media Data Object
     * 
     * @used-by AddMediaRequest
     * @used-by GetMediaByIdsResponse
     */
    class Media
    {
        /**
         * The system generated identifier of the media.
         * @var integer
         */
        public $Id;

        /**
         * This read-only element is the name of the media subclass.
         * @var string
         */
        public $MediaType;

        /**
         * The type of media to add to the library.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines an image object that can be added to an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn195581(v=msads.100).aspx Image Data Object
     */
    final class Image extends Media
    {
        /**
         * A base64 string that represents the image or icon to add to the library.
         * @var string
         */
        public $Data;
    }

    /**
     * Currently this feature is only available for pilot participants.
     * @link http://msdn.microsoft.com/en-us/library/dn766199(v=msads.100).aspx ImageAdExtension Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     */
    final class ImageAdExtension extends AdExtension
    {
        /**
         * Alternative description of the image media for usability.
         * @var string
         */
        public $AlternativeText;

        /**
         * Description that can be used by the advertiser, agency, or account manager to track, label, or manage image media.
         * @var string
         */
        public $Description;

        /**
         * The URL of the webpage to take the user to when they click the image.
         * @var string
         */
        public $DestinationUrl;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * Reserved for future use.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The identifiers of the images to include in the ad.
         * @var integer[]
         */
        public $ImageMediaIds;

        /**
         * Reserved for future use.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Reserved for future use.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines a media representation base class that includes a media download Url.
     * @link http://msdn.microsoft.com/en-us/library/dn766194(v=msads.100).aspx MediaRepresentation Data Object
     * 
     * @used-by MediaMetaData
     */
    class MediaRepresentation
    {
        /**
         * The name of the media representation.
         * @var string
         */
        public $Name;

        /**
         * The type of the media representation, for example ImageMediaRepresentation.
         * @var string
         */
        public $Type;

        /**
         * The media download URL.
         * @var string
         */
        public $Url;
    }

    /**
     * Defines an image media representation with height and width.
     * @link http://msdn.microsoft.com/en-us/library/dn766197(v=msads.100).aspx ImageMediaRepresentation Data Object
     */
    final class ImageMediaRepresentation extends MediaRepresentation
    {
        /**
         * The height of the image in pixels.
         * @var integer
         */
        public $Height;

        /**
         * The width of the image in pixels.
         * @var integer
         */
        public $Width;
    }

    /**
     * Defines the minimum and maximum impressions per day for a website.
     * @link http://msdn.microsoft.com/en-us/library/dd796854(v=msads.100).aspx ImpressionsPerDayRange Data Object
     * 
     * @used-by PlacementDetail
     */
    final class ImpressionsPerDayRange
    {
        /**
         * The maximum number of impressions per day for the website.
         * @var integer
         */
        public $Maximum;

        /**
         * The minimum number of impressions per day for the website.
         * @var integer
         */
        public $Minimum;
    }

    final class KeyValuePairOfstringstring
    {
        public $key;
        public $value;
    }

    /**
     * Defines a keyword.
     * @link http://msdn.microsoft.com/en-us/library/bb671833(v=msads.100).aspx Keyword Data Object
     * 
     * @uses Bid
     * @uses KeywordEditorialStatus
     * @uses AppUrl
     * @uses KeyValuePairOfstringstring
     * @uses MatchType
     * @uses KeywordStatus
     * @uses CustomParameters
     * @used-by AddKeywordsRequest
     * @used-by GetKeywordsByAdGroupIdResponse
     * @used-by GetKeywordsByEditorialStatusResponse
     * @used-by GetKeywordsByIdsResponse
     * @used-by UpdateKeywordsRequest
     */
    final class Keyword
    {
        /**
         * The bid to use when the user's search term and the keyword match.
         * @var Bid
         */
        public $Bid;

        /**
         * The URL of the webpage to take the user to when they click the ad.
         * @var string
         */
        public $DestinationUrl;

        /**
         * The editorial review status of the keyword, which indicates whether the keyword is pending review, has been approved, or has been disapproved.
         * @var KeywordEditorialStatus
         */
        public $EditorialStatus;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The mobile landing page URL.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system-generated identifier of the keyword.
         * @var integer
         */
        public $Id;

        /**
         * The type of match to compare the keyword and the user's search term.
         * @var MatchType
         */
        public $MatchType;

        /**
         * The string to use as the substitution value in an ad if the ad's title, text, display URL, or destination URL contains the {Param1} dynamic substitution string.
         * @var string
         */
        public $Param1;

        /**
         * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param2} dynamic substitution string.
         * @var string
         */
        public $Param2;

        /**
         * The string to use as the substitution value in an ad if the title, text, display URL, or destination URL contains the {Param3} dynamic substitution string.
         * @var string
         */
        public $Param3;

        /**
         * The keyword's status.
         * @var KeywordStatus
         */
        public $Status;

        /**
         * The keyword text.
         * @var string
         */
        public $Text;

        /**
         * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines an ad extension that specifies a business' address and phone number to include in a text ad.
     * @link http://msdn.microsoft.com/en-us/library/jj721600(v=msads.100).aspx LocationAdExtension Data Object
     * 
     * @uses Address
     * @uses BusinessGeoCodeStatus
     * @uses GeoPoint
     */
    final class LocationAdExtension extends AdExtension
    {
        /**
         * The business' address.
         * @var Address
         */
        public $Address;

        /**
         * The name of the business.
         * @var string
         */
        public $CompanyName;

        /**
         * A status value that indicates whether the business' latitude and longitude coordinates have been determined.
         * @var BusinessGeoCodeStatus
         */
        public $GeoCodeStatus;

        /**
         * The latitude and longitude coordinates of the specified Address element.
         * @var GeoPoint
         */
        public $GeoPoint;

        /**
         * The identifier of an icon used to mark the business' location on Bing Maps.
         * @var integer
         */
        public $IconMediaId;

        /**
         * The identifier of the image to include in the ad.
         * @var integer
         */
        public $ImageMediaId;

        /**
         * The business' phone number to include in the ad.
         * @var string
         */
        public $PhoneNumber;
    }

    /**
     * Defines an object that can contain different types of geographical targets, for example lists of city and state targets.
     * @link http://msdn.microsoft.com/en-us/library/bb671646(v=msads.100).aspx LocationTarget Data Object
     * 
     * @uses CityTarget
     * @uses CountryTarget
     * @uses IntentOption
     * @uses MetroAreaTarget
     * @uses PostalCodeTarget
     * @uses RadiusTarget
     * @uses StateTarget
     * @used-by Target
     */
    final class LocationTarget
    {
        /**
         * The cities to target.
         * @var CityTarget
         */
        public $CityTarget;

        /**
         * The countries/regions to target.
         * @var CountryTarget
         */
        public $CountryTarget;

        /**
         * Determines whether the audience must be physically located in the targeted location in order for the ad to display.
         * @var IntentOption
         */
        public $IntentOption;

        /**
         * The metropolitan areas to target.
         * @var MetroAreaTarget
         */
        public $MetroAreaTarget;

        /**
         * The postal codes to target.
         * @var PostalCodeTarget
         */
        public $PostalCodeTarget;

        /**
         * The geographical locations to target.
         * @var RadiusTarget
         */
        public $RadiusTarget;

        /**
         * The states, provinces, or territories to target.
         * @var StateTarget
         */
        public $StateTarget;
    }

    /**
     * Defines an object that represents the identified media and an associated entity, for example media associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn798358(v=msads.100).aspx MediaAssociation Data Object
     * 
     * @uses MediaEnabledEntityFilter
     * @used-by GetMediaAssociationsResponse
     */
    final class MediaAssociation
    {
        /**
         * The system identifier of the media enabled entity, for example the identifier of an ImageAdExtension.
         * @var integer
         */
        public $EntityId;

        /**
         * Determines the type of media to get.
         * @var MediaEnabledEntityFilter
         */
        public $MediaEnabledEntity;

        /**
         * The system identifier of the media.
         * @var integer
         */
        public $MediaId;
    }

    /**
     * Defines a media meta data object.
     * @link http://msdn.microsoft.com/en-us/library/dn766198(v=msads.100).aspx MediaMetaData Data Object
     * 
     * @uses MediaRepresentation
     * @used-by GetMediaMetaDataByAccountIdResponse
     * @used-by GetMediaMetaDataByIdsResponse
     */
    final class MediaMetaData
    {
        /**
         * The system identifier of the media meta data.
         * @var integer
         */
        public $Id;

        /**
         * The name of the media subclass.
         * @var string
         */
        public $MediaType;

        /**
         * An array of MediaRepresentation-derived objects, for example ImageMediaRepresentation, that each include download Urls for one or more media representations.
         * @var MediaRepresentation[]
         */
        public $Representations;

        /**
         * The type of media in the library.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines media type information for a website.
     * @link http://msdn.microsoft.com/en-us/library/dd797128(v=msads.100).aspx MediaType Data Object
     * 
     * @uses Dimension
     * @used-by PlacementDetail
     */
    final class MediaType
    {
        /**
         * The media dimensions.
         * @var Dimension[]
         */
        public $Dimensions;

        /**
         * The name of the media type.
         * @var string
         */
        public $Name;
    }

    /**
     * Defines a list of metro area targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/bb671815(v=msads.100).aspx MetroAreaTarget Data Object
     * 
     * @uses MetroAreaTargetBid
     * @used-by LocationTarget
     */
    final class MetroAreaTarget
    {
        /**
         * An array of MetroAreaTargetBid objects that specifies the metropolitan areas to target and the incremental bid percentages to apply to the base bid.
         * @var MetroAreaTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a metropolitan area to target and the percentage used to adjust the base bid.
     * @link http://msdn.microsoft.com/en-us/library/bb672080(v=msads.100).aspx MetroAreaTargetBid Data Object
     * 
     * @used-by MetroAreaTarget
     */
    final class MetroAreaTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted metropolitan area.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The metropolitan area to target.
         * @var string
         */
        public $MetroArea;
    }

    final class MigrationStatusInfo
    {
        public $MigrationType;
        public $StartTimeInUtc;
        public $Status;
    }

    /**
     * Defines a negative ad group criterion that can be used to abstain from bidding on the Bing Shopping products in this ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn913133(v=msads.100).aspx NegativeAdGroupCriterion Data Object
     */
    final class NegativeAdGroupCriterion extends AdGroupCriterion
    {
    }

    /**
     * This object is reserved for future use.
     * @link http://msdn.microsoft.com/en-us/library/dn913130(v=msads.100).aspx NegativeCampaignCriterion Data Object
     */
    final class NegativeCampaignCriterion extends CampaignCriterion
    {
    }

    /**
     * Defines the base class of a shared list item.
     * @link http://msdn.microsoft.com/en-us/library/dn743738(v=msads.100).aspx SharedListItem Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by AddListItemsToSharedListRequest
     * @used-by AddSharedEntityRequest
     * @used-by GetListItemsBySharedListResponse
     */
    class SharedListItem
    {
        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The type of the shared list item.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines a negative keyword with match type.
     * @link http://msdn.microsoft.com/en-us/library/dn743739(v=msads.100).aspx NegativeKeyword Data Object
     * 
     * @uses MatchType
     * @used-by EntityNegativeKeyword
     */
    final class NegativeKeyword extends SharedListItem
    {
        /**
         * The system-generated identifier of the negative keyword.
         * @var integer
         */
        public $Id;

        /**
         * The type of match to compare the negative keyword and the user's search term.
         * @var MatchType
         */
        public $MatchType;

        /**
         * The negative keyword text.
         * @var string
         */
        public $Text;
    }

    /**
     * Defines the base class of a shared entity.
     * @link http://msdn.microsoft.com/en-us/library/dn743735(v=msads.100).aspx SharedEntity Data Object
     * 
     * @uses KeyValuePairOfstringstring
     * @used-by AddSharedEntityRequest
     * @used-by DeleteSharedEntitiesRequest
     * @used-by GetSharedEntitiesByAccountIdResponse
     * @used-by UpdateSharedEntitiesRequest
     */
    class SharedEntity
    {
        /**
         * The number of active associations between this object and an entity such as a campaign.
         * @var integer
         */
        public $AssociationCount;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * The system-generated identifier of the shared entity.
         * @var integer
         */
        public $Id;

        /**
         * The name of the shared entity.
         * @var string
         */
        public $Name;

        /**
         * The type of the shared entity.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines the base class of a shared list.
     * @link http://msdn.microsoft.com/en-us/library/dn743734(v=msads.100).aspx SharedList Data Object
     * 
     * @used-by AddListItemsToSharedListRequest
     * @used-by DeleteListItemsFromSharedListRequest
     * @used-by GetListItemsBySharedListRequest
     */
    class SharedList extends SharedEntity
    {
        /**
         * The number of SharedListItem objects that are added to this shared list.
         * @var integer
         */
        public $ItemCount;
    }

    /**
     * Defines a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743737(v=msads.100).aspx NegativeKeywordList Data Object
     */
    final class NegativeKeywordList extends SharedList
    {
    }

    /**
     * Defines an error object that contains the details that explain why the service operation failed.
     * @link http://msdn.microsoft.com/en-us/library/bb671973(v=msads.100).aspx OperationError Data Object
     * 
     * @used-by ApiFaultDetail
     * @used-by EditorialApiFaultDetail
     */
    final class OperationError
    {
        /**
         * A numeric error code that identifies the error
         * @var integer
         */
        public $Code;

        /**
         * A message that provides additional details about the error.
         * @var string
         */
        public $Details;

        /**
         * A symbolic string constant that identifies the error.
         * @var string
         */
        public $ErrorCode;

        /**
         * A message that describes the error.
         * @var string
         */
        public $Message;
    }

    /**
     * Defines the size and type of media that the publisher website supports for ad placements.
     * @link http://msdn.microsoft.com/en-us/library/dd796936(v=msads.100).aspx PlacementDetail Data Object
     * 
     * @uses ImpressionsPerDayRange
     * @uses MediaType
     * @used-by GetPlacementDetailsForUrlsResponse
     */
    final class PlacementDetail
    {
        /**
         * Not supported.
         * @var ImpressionsPerDayRange
         */
        public $ImpressionsRangePerDay;

        /**
         * The URL of the publisher's website.
         * @var string
         */
        public $PathName;

        /**
         * The identifier of the publisher.
         * @var integer
         */
        public $PlacementId;

        /**
         * An array of MediaType objects that contains the size and type of media that the publisher website supports.
         * @var MediaType[]
         */
        public $SupportedMediaTypes;
    }

    /**
     * Defines a list of postal code targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dn743743(v=msads.100).aspx PostalCodeTarget Data Object
     * 
     * @uses PostalCodeTargetBid
     * @used-by LocationTarget
     */
    final class PostalCodeTarget
    {
        /**
         * An array of PostalCodeTargetBid objects that specifies the times of the postal code to target and the bid adjustment to apply to the base bid.
         * @var PostalCodeTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific postal code target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dn743767(v=msads.100).aspx PostalCodeTargetBid Data Object
     * 
     * @used-by PostalCodeTarget
     */
    final class PostalCodeTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted postal code area.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The postal code to target.
         * @var string
         */
        public $PostalCode;
    }

    /**
     * Defines a product ad.
     * @link http://msdn.microsoft.com/en-us/library/jj738612(v=msads.100).aspx ProductAd Data Object
     */
    final class ProductAd extends Ad
    {
        /**
         * The promotional text to display in a product ad.
         * @var string
         */
        public $PromotionalText;
    }

    /**
     * Defines a condition that determines whether a product is selected from a customer's Bing Merchant Center catalog file.
     * @link http://msdn.microsoft.com/en-us/library/jj721705(v=msads.100).aspx ProductCondition Data Object
     * 
     * @used-by ProductPartition
     * @used-by ProductScope
     */
    final class ProductCondition
    {
        /**
         * The condition's attribute value.
         * @var string
         */
        public $Attribute;

        /**
         * The condition's operand.
         * @var string
         */
        public $Operand;
    }

    /**
     * Defines an ad group level product partition with one condition that helps determine whether a product from the Bing Merchant Center store gets served as a product ad.
     * @link http://msdn.microsoft.com/en-us/library/dn913123(v=msads.100).aspx ProductPartition Data Object
     * 
     * @uses ProductCondition
     * @uses ProductPartitionType
     */
    final class ProductPartition extends Criterion
    {
        /**
         * A condition that helps determine whether a product from the Bing Merchant Center store gets served as an ad.
         * @var ProductCondition
         */
        public $Condition;

        /**
         * The identifier of the parent BiddableAdGroupCriterion or NegativeAdGroupCriterion.
         * @var integer
         */
        public $ParentCriterionId;

        /**
         * The type of product partition, for example Subdivision or Unit.
         * @var ProductPartitionType
         */
        public $PartitionType;
    }

    /**
     * Defines a campaign level product scope with list of conditions that help determine whether a product from the Bing Merchant Center store gets served as a product ad.
     * @link http://msdn.microsoft.com/en-us/library/dn913124(v=msads.100).aspx ProductScope Data Object
     * 
     * @uses ProductCondition
     */
    final class ProductScope extends Criterion
    {
        /**
         * A list of up to 7 product conditions that helps determine whether a product from the Bing Merchant Center store gets served as an ad.
         * @var ProductCondition[]
         */
        public $Conditions;
    }

    /**
     * Defines a list of geographical radius targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dd796953(v=msads.100).aspx RadiusTarget Data Object
     * 
     * @uses RadiusTargetBid
     * @used-by LocationTarget
     */
    final class RadiusTarget
    {
        /**
         * An array of RadiusTargetBid objects that specifies an area surrounding a geographical location to target and the incremental bid percentages to apply to the base bid.
         * @var RadiusTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a specific geographical radius target with bid adjustment.
     * @link http://msdn.microsoft.com/en-us/library/dd796863(v=msads.100).aspx RadiusTargetBid Data Object
     * 
     * @uses DistanceUnit
     * @used-by RadiusTarget
     */
    final class RadiusTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted geographical location radius.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Reserved for future use.
         * @var integer
         */
        public $Id;

        /**
         * Reserved for future use.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The latitude, in degrees, of the target location.
         * @var double
         */
        public $LatitudeDegrees;

        /**
         * The longitude, in degrees, of the target location.
         * @var double
         */
        public $LongitudeDegrees;

        /**
         * The name of the geographical location being targeted.
         * @var string
         */
        public $Name;

        /**
         * The radius that specifies the area surrounding the geographical location to target.
         * @var double
         */
        public $Radius;

        /**
         * The unit of measurement for the specified radius, for example kilometers or miles.
         * @var DistanceUnit
         */
        public $RadiusUnit;
    }

    /**
     * Defines the base class of a setting.
     * @link http://msdn.microsoft.com/en-us/library/dn913122(v=msads.100).aspx Setting Data Object
     * 
     * @used-by AdGroup
     * @used-by Campaign
     */
    class Setting
    {
        /**
         * The type of setting.
         * @var string
         */
        public $Type;
    }

    /**
     * Defines an object that contains association information for a campaign and shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743769(v=msads.100).aspx SharedEntityAssociation Data Object
     * 
     * @used-by DeleteSharedEntityAssociationsRequest
     * @used-by GetSharedEntityAssociationsByEntityIdsResponse
     * @used-by GetSharedEntityAssociationsBySharedEntityIdsResponse
     * @used-by SetSharedEntityAssociationsRequest
     */
    final class SharedEntityAssociation
    {
        /**
         * The system-generated identifier of the campaign that is associated with the shared entity.
         * @var integer
         */
        public $EntityId;

        /**
         * The type of entity.
         * @var string
         */
        public $EntityType;

        /**
         * The system-generated identifier of the shared entity.
         * @var integer
         */
        public $SharedEntityId;

        /**
         * The type of the shared entity.
         * @var string
         */
        public $SharedEntityType;
    }

    /**
     * Defines a shopping setting for a Bing Shopping Campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn913132(v=msads.100).aspx ShoppingSetting Data Object
     */
    final class ShoppingSetting extends Setting
    {
        /**
         * Helps determine which Bing Shopping campaign serves ads, in the event that two or more campaigns use the product catalog feed from the same Bing Merchant Center store.
         * @var integer
         */
        public $Priority;

        /**
         * The country code for the Bing Merchant Center store.
         * @var string
         */
        public $SalesCountryCode;

        /**
         * The unique identifier for the Bing Merchant Center store that your product catalog feed belongs to.
         * @var integer
         */
        public $StoreId;
    }

    /**
     * Defines a site link to include in an ad.
     * @link http://msdn.microsoft.com/en-us/library/jj134381(v=msads.100).aspx SiteLink Data Object
     * 
     * @uses AppUrl
     * @uses CustomParameters
     * @used-by SiteLinksAdExtension
     */
    final class SiteLink
    {
        /**
         * The site link description line 1.
         * @var string
         */
        public $Description1;

        /**
         * The site link description line 2.
         * @var string
         */
        public $Description2;

        /**
         * The URL of the webpage that users are taken to when they click the site link.
         * @var string
         */
        public $DestinationUrl;

        /**
         * This element determines whether the preference is for site links to be displayed on mobile devices or all devices.
         * @var integer
         */
        public $DevicePreference;

        /**
         * The site-link text displayed in the ad.
         * @var string
         */
        public $DisplayText;

        /**
         * Reserved for future use.
         * @var AppUrl[]
         */
        public $FinalAppUrls;

        /**
         * The mobile landing page URL.
         * @var string[]
         */
        public $FinalMobileUrls;

        /**
         * The landing page URL.
         * @var string[]
         */
        public $FinalUrls;

        /**
         * The tracking template to use as a default for all FinalUrls and FinalMobileUrls.
         * @var string
         */
        public $TrackingUrlTemplate;

        /**
         * Your custom collection of key and value parameters for URL tracking.
         * @var CustomParameters
         */
        public $UrlCustomParameters;
    }

    /**
     * Defines an ad extension that specifies one or more site links to add to a text ad.
     * @link http://msdn.microsoft.com/en-us/library/jj134387(v=msads.100).aspx SiteLinksAdExtension Data Object
     * 
     * @uses SiteLink
     */
    final class SiteLinksAdExtension extends AdExtension
    {
        /**
         * A list of site links.
         * @var SiteLink[]
         */
        public $SiteLinks;
    }

    /**
     * Defines a website placement bid.
     * @link http://msdn.microsoft.com/en-us/library/dd797248(v=msads.100).aspx SitePlacement Data Object
     * 
     * @uses Bid
     * @uses SitePlacementStatus
     * @used-by AddSitePlacementsRequest
     * @used-by GetSitePlacementsByAdGroupIdResponse
     * @used-by GetSitePlacementsByIdsResponse
     * @used-by UpdateSitePlacementsRequest
     */
    final class SitePlacement
    {
        /**
         * The bid for text ad space on the specified publisher's website.
         * @var Bid
         */
        public $Bid;

        /**
         * A system-generated identifier that identifies this object.
         * @var integer
         */
        public $Id;

        /**
         * The identifier of the publisher website where you want to display your text ads.
         * @var integer
         */
        public $PlacementId;

        /**
         * The status of this site placement bid.
         * @var SitePlacementStatus
         */
        public $Status;

        /**
         * The URL of the website where you want your text ads to display.
         * @var string
         */
        public $Url;
    }

    /**
     * Defines a list of state targets with bid adjustments.
     * @link http://msdn.microsoft.com/en-us/library/dd796793(v=msads.100).aspx StateTarget Data Object
     * 
     * @uses StateTargetBid
     * @used-by LocationTarget
     */
    final class StateTarget
    {
        /**
         * An array of StateTargetBid objects that specifies the states/provinces/territories to target and the incremental bid percentages to apply to the base bid.
         * @var StateTargetBid[]
         */
        public $Bids;
    }

    /**
     * Defines a sub geography, specifically a state or province to target, and the percentage used to adjust the base bid.
     * @link http://msdn.microsoft.com/en-us/library/dd796942(v=msads.100).aspx StateTargetBid Data Object
     * 
     * @used-by StateTarget
     */
    final class StateTargetBid
    {
        /**
         * The percent amount by which to adjust the base bid if the user is in the targeted sub geography.
         * @var integer
         */
        public $BidAdjustment;

        /**
         * Set this element to true if you want to exclude the location from targeting.
         * @var boolean
         */
        public $IsExcluded;

        /**
         * The sub geography to target.
         * @var string
         */
        public $State;
    }

    /**
     * Defines the types of targeting that you can use to target your ads to users.
     * @link http://msdn.microsoft.com/en-us/library/bb671789(v=msads.100).aspx Target Data Object
     * 
     * @uses AgeTarget
     * @uses DayTimeTarget
     * @uses DeviceOSTarget
     * @uses KeyValuePairOfstringstring
     * @uses GenderTarget
     * @uses LocationTarget
     * @used-by AddTargetsToLibraryRequest
     * @used-by GetTargetsByAdGroupIdsResponse
     * @used-by GetTargetsByCampaignIdsResponse
     * @used-by GetTargetsByIdsResponse
     * @used-by UpdateTargetsInLibraryRequest
     */
    final class Target
    {
        /**
         * Targets ads to users within one or more age ranges.
         * @var AgeTarget
         */
        public $Age;

        /**
         * Targets ads to run on specific days and hours of the week.
         * @var DayTimeTarget
         */
        public $DayTime;
        public $DeviceOS;

        /**
         * The list of key and value strings for forward compatibility.
         * @var KeyValuePairOfstringstring[]
         */
        public $ForwardCompatibilityMap;

        /**
         * Targets ads to men only or women only.
         * @var GenderTarget
         */
        public $Gender;

        /**
         * A system-generated identifier that identifies this target object.
         * @var integer
         */
        public $Id;

        /**
         * Determines whether the target library contains this target object.
         * @var boolean
         */
        public $IsLibraryTarget;

        /**
         * Targets ads to users within a specific location; for example, users within a certain radius of your business or within a specific state.
         * @var LocationTarget
         */
        public $Location;

        /**
         * The name of the target.
         * @var string
         */
        public $Name;
    }

    /**
     * Defines information about a target in your library.
     * @link http://msdn.microsoft.com/en-us/library/dd796878(v=msads.100).aspx TargetInfo Data Object
     * 
     * @used-by GetTargetsInfoFromLibraryResponse
     */
    final class TargetInfo
    {
        /**
         * The identifier of the target.
         * @var integer
         */
        public $Id;

        /**
         * The name of the target.
         * @var string
         */
        public $Name;
    }

    /**
     * Defines a text ad.
     * @link http://msdn.microsoft.com/en-us/library/bb672081(v=msads.100).aspx TextAd Data Object
     */
    final class TextAd extends Ad
    {
        public $DestinationUrl;
        public $DisplayUrl;
        public $Text;
        public $Title;
    }

    /**
     * Adds one or more ad extensions to an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.100).aspx AddAdExtensions Request Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::AddAdExtensions
     */
    final class AddAdExtensionsRequest
    {
        public $AccountId;
        public $AdExtensions;
    }

    /**
     * Adds one or more ad extensions to an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn236319(v=msads.100).aspx AddAdExtensions Response Object
     * 
     * @uses AdExtensionIdentity
     * @used-by BingAdsCampaignManagementService::AddAdExtensions
     */
    final class AddAdExtensionsResponse
    {
        public $AdExtensionIdentities;
    }

    /**
     * This service operation is reserved for future use.
     * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.100).aspx AddAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
     */
    final class AddAdGroupCriterionsRequest
    {
        public $AccountId;
        public $AdGroupCriterions;
        public $CriterionType;
    }

    /**
     * This service operation is reserved for future use.
     * @link http://msdn.microsoft.com/en-us/library/dn277499(v=msads.100).aspx AddAdGroupCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddAdGroupCriterions
     */
    final class AddAdGroupCriterionsResponse
    {
        public $AdGroupCriterionIds;
        public $NestedPartialErrors;
    }

    /**
     * Adds new ad groups to a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.100).aspx AddAdGroups Request Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::AddAdGroups
     */
    final class AddAdGroupsRequest
    {
        public $CampaignId;
        public $AdGroups;
    }

    /**
     * Adds new ad groups to a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277502(v=msads.100).aspx AddAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAdGroups
     */
    final class AddAdGroupsResponse
    {
        public $AdGroupIds;
        public $PartialErrors;
    }

    /**
     * Adds one or more ads to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.100).aspx AddAds Request Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::AddAds
     */
    final class AddAdsRequest
    {
        public $AdGroupId;
        public $Ads;
    }

    /**
     * Adds one or more ads to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277506(v=msads.100).aspx AddAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddAds
     */
    final class AddAdsResponse
    {
        public $AdIds;
        public $PartialErrors;
    }

    /**
     * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
     * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.100).aspx AddCampaignCriterions Request Object
     * 
     * @uses CampaignCriterion
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
     */
    final class AddCampaignCriterionsRequest
    {
        public $CampaignCriterions;
        public $CriterionType;
    }

    /**
     * Adds one or more campaign criterions that help determine whether ads in each campaign get served.
     * @link http://msdn.microsoft.com/en-us/library/dn913127(v=msads.100).aspx AddCampaignCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddCampaignCriterions
     */
    final class AddCampaignCriterionsResponse
    {
        public $CampaignCriterionIds;
        public $NestedPartialErrors;
    }

    /**
     * Adds one or more campaigns to the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.100).aspx AddCampaigns Request Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::AddCampaigns
     */
    final class AddCampaignsRequest
    {
        public $AccountId;
        public $Campaigns;
    }

    /**
     * Adds one or more campaigns to the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277510(v=msads.100).aspx AddCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddCampaigns
     */
    final class AddCampaignsResponse
    {
        public $CampaignIds;
        public $PartialErrors;
    }

    /**
     * Adds one or more keywords to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.100).aspx AddKeywords Request Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::AddKeywords
     */
    final class AddKeywordsRequest
    {
        public $AdGroupId;
        public $Keywords;
    }

    /**
     * Adds one or more keywords to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277513(v=msads.100).aspx AddKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddKeywords
     */
    final class AddKeywordsResponse
    {
        public $KeywordIds;
        public $PartialErrors;
    }

    /**
     * Adds list items such as negative keywords to the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743721(v=msads.100).aspx AddListItemsToSharedList Request Object
     * 
     * @uses SharedListItem
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
     */
    final class AddListItemsToSharedListRequest
    {
        public $ListItems;
        public $SharedList;
    }

    /**
     * Adds list items such as negative keywords to the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743721(v=msads.100).aspx AddListItemsToSharedList Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddListItemsToSharedList
     */
    final class AddListItemsToSharedListResponse
    {
        public $ListItemIds;
        public $PartialErrors;
    }

    /**
     * Adds the specified media to an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.100).aspx AddMedia Request Object
     * 
     * @uses Media
     * @used-by BingAdsCampaignManagementService::AddMedia
     */
    final class AddMediaRequest
    {
        public $AccountId;
        public $Media;
    }

    /**
     * Adds the specified media to an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277518(v=msads.100).aspx AddMedia Response Object
     * 
     * @used-by BingAdsCampaignManagementService::AddMedia
     */
    final class AddMediaResponse
    {
        public $MediaIds;
    }

    /**
     * Adds negative keywords to the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.100).aspx AddNegativeKeywordsToEntities Request Object
     * 
     * @uses EntityNegativeKeyword
     * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
     */
    final class AddNegativeKeywordsToEntitiesRequest
    {
        public $EntityNegativeKeywords;
    }

    /**
     * Adds negative keywords to the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743724(v=msads.100).aspx AddNegativeKeywordsToEntities Response Object
     * 
     * @uses IdCollection
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::AddNegativeKeywordsToEntities
     */
    final class AddNegativeKeywordsToEntitiesResponse
    {
        public $NegativeKeywordIds;
        public $NestedPartialErrors;
    }

    /**
     * Adds a shared entity such as a negative keyword list to the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743722(v=msads.100).aspx AddSharedEntity Request Object
     * 
     * @uses SharedEntity
     * @uses SharedListItem
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
    final class AddSharedEntityRequest
    {
        public $SharedEntity;
        public $ListItems;
    }

    /**
     * Adds a shared entity such as a negative keyword list to the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743722(v=msads.100).aspx AddSharedEntity Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AddSharedEntity
     */
    final class AddSharedEntityResponse
    {
        public $ListItemIds;
        public $PartialErrors;
        public $SharedEntityId;
    }

    /**
     * Adds one or more website placement bids to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.100).aspx AddSitePlacements Request Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::AddSitePlacements
     */
    final class AddSitePlacementsRequest
    {
        public $AdGroupId;
        public $SitePlacements;
    }

    /**
     * Adds one or more website placement bids to an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277523(v=msads.100).aspx AddSitePlacements Response Object
     * 
     * @used-by BingAdsCampaignManagementService::AddSitePlacements
     */
    final class AddSitePlacementsResponse
    {
        public $SitePlacementIds;
    }

    /**
     * Adds targets to your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277526(v=msads.100).aspx AddTargetsToLibrary Request Object
     * 
     * @uses Target
     * @used-by BingAdsCampaignManagementService::AddTargetsToLibrary
     */
    final class AddTargetsToLibraryRequest
    {
        public $Targets;
    }

    /**
     * Adds targets to your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277526(v=msads.100).aspx AddTargetsToLibrary Response Object
     * 
     * @used-by BingAdsCampaignManagementService::AddTargetsToLibrary
     */
    final class AddTargetsToLibraryResponse
    {
        public $TargetIds;
    }

    /**
     * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.100).aspx AppealEditorialRejections Request Object
     * 
     * @uses EntityIdToParentIdAssociation
     * @uses EntityType
     * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
     */
    final class AppealEditorialRejectionsRequest
    {
        public $EntityIdToParentIdAssociations;
        public $EntityType;
        public $JustificationText;
    }

    /**
     * Appeals the editorial rejections of one or more ads or keywords that failed editorial review.
     * @link http://msdn.microsoft.com/en-us/library/dn277533(v=msads.100).aspx AppealEditorialRejections Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::AppealEditorialRejections
     */
    final class AppealEditorialRejectionsResponse
    {
        public $PartialErrors;
    }

    /**
     * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
     * @link http://msdn.microsoft.com/en-us/library/dn913134(v=msads.100).aspx ApplyProductPartitionActions Request Object
     * 
     * @uses AdGroupCriterionAction
     * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
     */
    final class ApplyProductPartitionActionsRequest
    {
        public $CriterionActions;
    }

    /**
     * Applies an add, update, or delete action to each of the specified BiddableAdGroupCriterion or NegativeAdGroupCriterion, which each contain a ProductPartition.
     * @link http://msdn.microsoft.com/en-us/library/dn913134(v=msads.100).aspx ApplyProductPartitionActions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::ApplyProductPartitionActions
     */
    final class ApplyProductPartitionActionsResponse
    {
        public $AdGroupCriterionIds;
        public $PartialErrors;
    }

    /**
     * Deletes one or more ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.100).aspx DeleteAdExtensions Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensions
     */
    final class DeleteAdExtensionsRequest
    {
        public $AccountId;
        public $AdExtensionIds;
    }

    /**
     * Deletes one or more ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277537(v=msads.100).aspx DeleteAdExtensions Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensions
     */
    final class DeleteAdExtensionsResponse
    {
    }

    /**
     * Removes the specified association from the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236305(v=msads.100).aspx DeleteAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
     */
    final class DeleteAdExtensionsAssociationsRequest
    {
        public $AccountId;
        public $AdExtensionIdToEntityIdAssociations;
        public $AssociationType;
    }

    /**
     * Removes the specified association from the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236305(v=msads.100).aspx DeleteAdExtensionsAssociations Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdExtensionsAssociations
     */
    final class DeleteAdExtensionsAssociationsResponse
    {
    }

    /**
     * This service operation is reserved for future use.
     * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.100).aspx DeleteAdGroupCriterions Request Object
     * 
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsRequest
    {
        public $AccountId;
        public $AdGroupCriterionIds;
        public $AdGroupId;
        public $CriterionType;
    }

    /**
     * This service operation is reserved for future use.
     * @link http://msdn.microsoft.com/en-us/library/dn236302(v=msads.100).aspx DeleteAdGroupCriterions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroupCriterions
     */
    final class DeleteAdGroupCriterionsResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes one or more ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.100).aspx DeleteAdGroups Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAdGroups
     */
    final class DeleteAdGroupsRequest
    {
        public $CampaignId;
        public $AdGroupIds;
    }

    /**
     * Deletes one or more ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn236307(v=msads.100).aspx DeleteAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAdGroups
     */
    final class DeleteAdGroupsResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes one or more ads in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.100).aspx DeleteAds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteAds
     */
    final class DeleteAdsRequest
    {
        public $AdGroupId;
        public $AdIds;
    }

    /**
     * Deletes one or more ads in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236310(v=msads.100).aspx DeleteAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteAds
     */
    final class DeleteAdsResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.100).aspx DeleteCampaignCriterions Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
     */
    final class DeleteCampaignCriterionsRequest
    {
        public $CampaignCriterionIds;
        public $CriterionType;
    }

    /**
     * Deletes one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913125(v=msads.100).aspx DeleteCampaignCriterions Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteCampaignCriterions
     */
    final class DeleteCampaignCriterionsResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes one or more campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.100).aspx DeleteCampaigns Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteCampaigns
     */
    final class DeleteCampaignsRequest
    {
        public $AccountId;
        public $CampaignIds;
    }

    /**
     * Deletes one or more campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236314(v=msads.100).aspx DeleteCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteCampaigns
     */
    final class DeleteCampaignsResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes one or more keywords in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.100).aspx DeleteKeywords Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteKeywords
     */
    final class DeleteKeywordsRequest
    {
        public $AdGroupId;
        public $KeywordIds;
    }

    /**
     * Deletes one or more keywords in a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236318(v=msads.100).aspx DeleteKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteKeywords
     */
    final class DeleteKeywordsResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes list items such as negative keywords from the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.100).aspx DeleteListItemsFromSharedList Request Object
     * 
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
     */
    final class DeleteListItemsFromSharedListRequest
    {
        public $ListItemIds;
        public $SharedList;
    }

    /**
     * Deletes list items such as negative keywords from the corresponding list.
     * @link http://msdn.microsoft.com/en-us/library/dn743723(v=msads.100).aspx DeleteListItemsFromSharedList Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteListItemsFromSharedList
     */
    final class DeleteListItemsFromSharedListResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766193(v=msads.100).aspx DeleteMedia Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteMedia
     */
    final class DeleteMediaRequest
    {
        public $AccountId;
        public $MediaIds;
    }

    /**
     * Deletes the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766193(v=msads.100).aspx DeleteMedia Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteMedia
     */
    final class DeleteMediaResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743725(v=msads.100).aspx DeleteNegativeKeywordsFromEntities Request Object
     * 
     * @uses EntityNegativeKeyword
     * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
     */
    final class DeleteNegativeKeywordsFromEntitiesRequest
    {
        public $EntityNegativeKeywords;
    }

    /**
     * Deletes negative keywords from the specified campaign or ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn743725(v=msads.100).aspx DeleteNegativeKeywordsFromEntities Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::DeleteNegativeKeywordsFromEntities
     */
    final class DeleteNegativeKeywordsFromEntitiesResponse
    {
        public $NestedPartialErrors;
    }

    /**
     * Deletes shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.100).aspx DeleteSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesRequest
    {
        public $SharedEntities;
    }

    /**
     * Deletes shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743726(v=msads.100).aspx DeleteSharedEntities Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntities
     */
    final class DeleteSharedEntitiesResponse
    {
        public $PartialErrors;
    }

    /**
     * Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.100).aspx DeleteSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsRequest
    {
        public $Associations;
    }

    /**
     * Removes the association between a shared entity such as a negative keyword list and an entity such as a campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn743727(v=msads.100).aspx DeleteSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::DeleteSharedEntityAssociations
     */
    final class DeleteSharedEntityAssociationsResponse
    {
        public $PartialErrors;
    }

    /**
     * Deletes one or more website-placement bids from an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236315(v=msads.100).aspx DeleteSitePlacements Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteSitePlacements
     */
    final class DeleteSitePlacementsRequest
    {
        public $AdGroupId;
        public $SitePlacementIds;
    }

    /**
     * Deletes one or more website-placement bids from an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236315(v=msads.100).aspx DeleteSitePlacements Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteSitePlacements
     */
    final class DeleteSitePlacementsResponse
    {
    }

    /**
     * Removes the specified target association for the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277500(v=msads.100).aspx DeleteTargetFromAdGroup Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetFromAdGroup
     */
    final class DeleteTargetFromAdGroupRequest
    {
        public $AdGroupId;
    }

    /**
     * Removes the specified target association for the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277500(v=msads.100).aspx DeleteTargetFromAdGroup Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetFromAdGroup
     */
    final class DeleteTargetFromAdGroupResponse
    {
    }

    /**
     * Removes the target association for the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277503(v=msads.100).aspx DeleteTargetFromCampaign Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetFromCampaign
     */
    final class DeleteTargetFromCampaignRequest
    {
        public $CampaignId;
    }

    /**
     * Removes the target association for the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277503(v=msads.100).aspx DeleteTargetFromCampaign Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetFromCampaign
     */
    final class DeleteTargetFromCampaignResponse
    {
    }

    /**
     * Removes targets from your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277507(v=msads.100).aspx DeleteTargetsFromLibrary Request Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetsFromLibrary
     */
    final class DeleteTargetsFromLibraryRequest
    {
        public $TargetIds;
    }

    /**
     * Removes targets from your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn277507(v=msads.100).aspx DeleteTargetsFromLibrary Response Object
     * 
     * @used-by BingAdsCampaignManagementService::DeleteTargetsFromLibrary
     */
    final class DeleteTargetsFromLibraryResponse
    {
    }

    /**
     * Gets the ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.100).aspx GetAdExtensionIdsByAccountId Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::GetAdExtensionIdsByAccountId
     */
    final class GetAdExtensionIdsByAccountIdRequest
    {
        public $AccountId;
        public $AdExtensionType;
        public $AssociationType;
    }

    /**
     * Gets the ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277509(v=msads.100).aspx GetAdExtensionIdsByAccountId Response Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdExtensionIdsByAccountId
     */
    final class GetAdExtensionIdsByAccountIdResponse
    {
        public $AdExtensionIds;
    }

    /**
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.100).aspx GetAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
     */
    final class GetAdExtensionsAssociationsRequest
    {
        public $AccountId;
        public $AdExtensionType;
        public $AssociationType;
        public $EntityIds;
    }

    /**
     * Gets the respective ad extension associations by the specified campaign and ad group identifiers.
     * @link http://msdn.microsoft.com/en-us/library/dn236309(v=msads.100).aspx GetAdExtensionsAssociations Response Object
     * 
     * @uses AdExtensionAssociationCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsAssociations
     */
    final class GetAdExtensionsAssociationsResponse
    {
        public $AdExtensionAssociationCollection;
        public $PartialErrors;
    }

    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.100).aspx GetAdExtensionsByIds Request Object
     * 
     * @uses AdExtensionsTypeFilter
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
     */
    final class GetAdExtensionsByIdsRequest
    {
        public $AccountId;
        public $AdExtensionIds;
        public $AdExtensionType;
    }

    /**
     * Gets the specified ad extensions from the account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277515(v=msads.100).aspx GetAdExtensionsByIds Response Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsByIds
     */
    final class GetAdExtensionsByIdsResponse
    {
        public $AdExtensions;
    }

    /**
     * Gets editorial rejection reasons for the respective ad extension and entity associations.
     * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.100).aspx GetAdExtensionsEditorialReasons Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
     */
    final class GetAdExtensionsEditorialReasonsRequest
    {
        public $AccountId;
        public $AdExtensionIdToEntityIdAssociations;
        public $AssociationType;
    }

    /**
     * Gets editorial rejection reasons for the respective ad extension and entity associations.
     * @link http://msdn.microsoft.com/en-us/library/dn236313(v=msads.100).aspx GetAdExtensionsEditorialReasons Response Object
     * 
     * @uses AdExtensionEditorialReasonCollection
     * @used-by BingAdsCampaignManagementService::GetAdExtensionsEditorialReasons
     */
    final class GetAdExtensionsEditorialReasonsResponse
    {
        public $EditorialReasons;
    }

    /**
     * Gets the specified criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.100).aspx GetAdGroupCriterionsByIds Request Object
     * 
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
     */
    final class GetAdGroupCriterionsByIdsRequest
    {
        public $AccountId;
        public $AdGroupCriterionIds;
        public $AdGroupId;
        public $CriterionType;
    }

    /**
     * Gets the specified criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn277520(v=msads.100).aspx GetAdGroupCriterionsByIds Response Object
     * 
     * @uses AdGroupCriterion
     * @used-by BingAdsCampaignManagementService::GetAdGroupCriterionsByIds
     */
    final class GetAdGroupCriterionsByIdsResponse
    {
        public $AdGroupCriterions;
    }

    /**
     * Gets the ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.100).aspx GetAdGroupsByCampaignId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
     */
    final class GetAdGroupsByCampaignIdRequest
    {
        public $CampaignId;
    }

    /**
     * Gets the ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277524(v=msads.100).aspx GetAdGroupsByCampaignId Response Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByCampaignId
     */
    final class GetAdGroupsByCampaignIdResponse
    {
        public $AdGroups;
    }

    /**
     * Gets the specified ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.100).aspx GetAdGroupsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
    final class GetAdGroupsByIdsRequest
    {
        public $CampaignId;
        public $AdGroupIds;
    }

    /**
     * Gets the specified ad groups that exist within a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277529(v=msads.100).aspx GetAdGroupsByIds Response Object
     * 
     * @uses AdGroup
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdGroupsByIds
     */
    final class GetAdGroupsByIdsResponse
    {
        public $AdGroups;
        public $PartialErrors;
    }

    /**
     * Retrieves the ads that are associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.100).aspx GetAdsByAdGroupId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
     */
    final class GetAdsByAdGroupIdRequest
    {
        public $AdGroupId;
    }

    /**
     * Retrieves the ads that are associated with an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277534(v=msads.100).aspx GetAdsByAdGroupId Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByAdGroupId
     */
    final class GetAdsByAdGroupIdResponse
    {
        public $Ads;
    }

    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.100).aspx GetAdsByEditorialStatus Request Object
     * 
     * @uses AdEditorialStatus
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusRequest
    {
        public $AdGroupId;
        public $EditorialStatus;
    }

    /**
     * Retrieves the ads that belong to the specified ad group and have the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277538(v=msads.100).aspx GetAdsByEditorialStatus Response Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::GetAdsByEditorialStatus
     */
    final class GetAdsByEditorialStatusResponse
    {
        public $Ads;
    }

    /**
     * Retrieves the specified ads from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.100).aspx GetAdsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetAdsByIds
     */
    final class GetAdsByIdsRequest
    {
        public $AdGroupId;
        public $AdIds;
    }

    /**
     * Retrieves the specified ads from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236296(v=msads.100).aspx GetAdsByIds Response Object
     * 
     * @uses Ad
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetAdsByIds
     */
    final class GetAdsByIdsResponse
    {
        public $Ads;
        public $PartialErrors;
    }

    /**
     * Gets the Bing Merchant Center stores for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn411607(v=msads.100).aspx GetBMCStoresByCustomerId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdRequest
    {
    }

    /**
     * Gets the Bing Merchant Center stores for the specified customer.
     * @link http://msdn.microsoft.com/en-us/library/dn411607(v=msads.100).aspx GetBMCStoresByCustomerId Response Object
     * 
     * @uses BMCStore
     * @used-by BingAdsCampaignManagementService::GetBMCStoresByCustomerId
     */
    final class GetBMCStoresByCustomerIdResponse
    {
        public $BMCStores;
    }

    /**
     * Gets the specified campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.100).aspx GetCampaignCriterionsByIds Request Object
     * 
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
     */
    final class GetCampaignCriterionsByIdsRequest
    {
        public $CampaignCriterionIds;
        public $CampaignId;
        public $CriterionType;
    }

    /**
     * Gets the specified campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913135(v=msads.100).aspx GetCampaignCriterionsByIds Response Object
     * 
     * @uses CampaignCriterion
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignCriterionsByIds
     */
    final class GetCampaignCriterionsByIdsResponse
    {
        public $CampaignCriterions;
        public $PartialErrors;
    }

    /**
     * Retrieves all the campaigns that exist within a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.100).aspx GetCampaignsByAccountId Request Object
     * 
     * @uses CampaignType
     * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
     */
    final class GetCampaignsByAccountIdRequest
    {
        public $AccountId;
        public $CampaignType;
    }

    /**
     * Retrieves all the campaigns that exist within a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236299(v=msads.100).aspx GetCampaignsByAccountId Response Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::GetCampaignsByAccountId
     */
    final class GetCampaignsByAccountIdResponse
    {
        public $Campaigns;
    }

    /**
     * Retrieves the specified campaigns from the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.100).aspx GetCampaignsByIds Request Object
     * 
     * @uses CampaignType
     * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
     */
    final class GetCampaignsByIdsRequest
    {
        public $AccountId;
        public $CampaignIds;
        public $CampaignType;
    }

    /**
     * Retrieves the specified campaigns from the specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn236303(v=msads.100).aspx GetCampaignsByIds Response Object
     * 
     * @uses Campaign
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetCampaignsByIds
     */
    final class GetCampaignsByIdsResponse
    {
        public $Campaigns;
        public $PartialErrors;
    }

    final class GetCampaignSizesByAccountIdRequest
    {
        public $AccountId;
        public $CampaignIds;
    }

    final class GetCampaignSizesByAccountIdResponse
    {
        public $CampaignSizes;
    }

    final class GetConfigValueRequest
    {
        public $ConfigKey;
    }

    final class GetConfigValueResponse
    {
        public $ConfigValue;
    }

    /**
     * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
     * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.100).aspx GetEditorialReasonsByIds Request Object
     * 
     * @uses EntityIdToParentIdAssociation
     * @uses EntityType
     * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
     */
    final class GetEditorialReasonsByIdsRequest
    {
        public $AccountId;
        public $EntityIdToParentIdAssociations;
        public $EntityType;
    }

    /**
     * Gets the reasons why the specified entities failed editorial review and whether the rejection is appealable.
     * @link http://msdn.microsoft.com/en-us/library/dn236306(v=msads.100).aspx GetEditorialReasonsByIds Response Object
     * 
     * @uses EditorialReasonCollection
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetEditorialReasonsByIds
     */
    final class GetEditorialReasonsByIdsResponse
    {
        public $EditorialReasons;
        public $PartialErrors;
    }

    /**
     * Retrieves the keywords for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.100).aspx GetKeywordsByAdGroupId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
     */
    final class GetKeywordsByAdGroupIdRequest
    {
        public $AdGroupId;
    }

    /**
     * Retrieves the keywords for an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236311(v=msads.100).aspx GetKeywordsByAdGroupId Response Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::GetKeywordsByAdGroupId
     */
    final class GetKeywordsByAdGroupIdResponse
    {
        public $Keywords;
    }

    /**
     * Retrieves the keywords with the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277501(v=msads.100).aspx GetKeywordsByEditorialStatus Request Object
     * 
     * @uses KeywordEditorialStatus
     * @used-by BingAdsCampaignManagementService::GetKeywordsByEditorialStatus
     */
    final class GetKeywordsByEditorialStatusRequest
    {
        public $AdGroupId;
        public $EditorialStatus;
    }

    /**
     * Retrieves the keywords with the specified editorial review status.
     * @link http://msdn.microsoft.com/en-us/library/dn277501(v=msads.100).aspx GetKeywordsByEditorialStatus Response Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::GetKeywordsByEditorialStatus
     */
    final class GetKeywordsByEditorialStatusResponse
    {
        public $Keywords;
    }

    /**
     * Retrieves the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.100).aspx GetKeywordsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
     */
    final class GetKeywordsByIdsRequest
    {
        public $AdGroupId;
        public $KeywordIds;
    }

    /**
     * Retrieves the specified keywords.
     * @link http://msdn.microsoft.com/en-us/library/dn277505(v=msads.100).aspx GetKeywordsByIds Response Object
     * 
     * @uses Keyword
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetKeywordsByIds
     */
    final class GetKeywordsByIdsResponse
    {
        public $Keywords;
        public $PartialErrors;
    }

    /**
     * Gets the list items such as the negative keywords of a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.100).aspx GetListItemsBySharedList Request Object
     * 
     * @uses SharedList
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListRequest
    {
        public $SharedList;
    }

    /**
     * Gets the list items such as the negative keywords of a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743729(v=msads.100).aspx GetListItemsBySharedList Response Object
     * 
     * @uses SharedListItem
     * @used-by BingAdsCampaignManagementService::GetListItemsBySharedList
     */
    final class GetListItemsBySharedListResponse
    {
        public $ListItems;
    }

    /**
     * Gets the media associations of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn798359(v=msads.100).aspx GetMediaAssociations Request Object
     * 
     * @uses MediaEnabledEntityFilter
     * @used-by BingAdsCampaignManagementService::GetMediaAssociations
     */
    final class GetMediaAssociationsRequest
    {
        public $MediaEnabledEntities;
        public $MediaIds;
    }

    /**
     * Gets the media associations of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn798359(v=msads.100).aspx GetMediaAssociations Response Object
     * 
     * @uses MediaAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetMediaAssociations
     */
    final class GetMediaAssociationsResponse
    {
        public $MediaAssociations;
        public $PartialErrors;
    }

    /**
     * Gets the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.100).aspx GetMediaByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetMediaByIds
     */
    final class GetMediaByIdsRequest
    {
        public $AccountId;
        public $MediaIds;
    }

    /**
     * Gets the specified media from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn277511(v=msads.100).aspx GetMediaByIds Response Object
     * 
     * @uses Media
     * @used-by BingAdsCampaignManagementService::GetMediaByIds
     */
    final class GetMediaByIdsResponse
    {
        public $Media;
    }

    /**
     * Gets the media meta data of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766196(v=msads.100).aspx GetMediaMetaDataByAccountId Request Object
     * 
     * @uses MediaEnabledEntityFilter
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByAccountId
     */
    final class GetMediaMetaDataByAccountIdRequest
    {
        public $MediaEnabledEntities;
    }

    /**
     * Gets the media meta data of the specified entity type from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766196(v=msads.100).aspx GetMediaMetaDataByAccountId Response Object
     * 
     * @uses MediaMetaData
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByAccountId
     */
    final class GetMediaMetaDataByAccountIdResponse
    {
        public $MediaMetaData;
    }

    /**
     * Gets the specified media meta data from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766200(v=msads.100).aspx GetMediaMetaDataByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
    final class GetMediaMetaDataByIdsRequest
    {
        public $MediaIds;
    }

    /**
     * Gets the specified media meta data from an account's media library.
     * @link http://msdn.microsoft.com/en-us/library/dn766200(v=msads.100).aspx GetMediaMetaDataByIds Response Object
     * 
     * @uses MediaMetaData
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetMediaMetaDataByIds
     */
    final class GetMediaMetaDataByIdsResponse
    {
        public $MediaMetaData;
        public $PartialErrors;
    }

    /**
     * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.100).aspx GetNegativeKeywordsByEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
     */
    final class GetNegativeKeywordsByEntityIdsRequest
    {
        public $EntityIds;
        public $EntityType;
        public $ParentEntityId;
    }

    /**
     * Gets the negative keywords that are only associated with the specified campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn743730(v=msads.100).aspx GetNegativeKeywordsByEntityIds Response Object
     * 
     * @uses EntityNegativeKeyword
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetNegativeKeywordsByEntityIds
     */
    final class GetNegativeKeywordsByEntityIdsResponse
    {
        public $EntityNegativeKeywords;
        public $PartialErrors;
    }

    /**
     * Gets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.100).aspx GetNegativeSitesByAdGroupIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
     */
    final class GetNegativeSitesByAdGroupIdsRequest
    {
        public $CampaignId;
        public $AdGroupIds;
    }

    /**
     * Gets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277521(v=msads.100).aspx GetNegativeSitesByAdGroupIds Response Object
     * 
     * @uses AdGroupNegativeSites
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByAdGroupIds
     */
    final class GetNegativeSitesByAdGroupIdsResponse
    {
        public $AdGroupNegativeSites;
        public $PartialErrors;
    }

    /**
     * Gets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.100).aspx GetNegativeSitesByCampaignIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
     */
    final class GetNegativeSitesByCampaignIdsRequest
    {
        public $AccountId;
        public $CampaignIds;
    }

    /**
     * Gets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277525(v=msads.100).aspx GetNegativeSitesByCampaignIds Response Object
     * 
     * @uses CampaignNegativeSites
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetNegativeSitesByCampaignIds
     */
    final class GetNegativeSitesByCampaignIdsResponse
    {
        public $CampaignNegativeSites;
        public $PartialErrors;
    }

    /**
     * Retrieves placement information for the specified URLs.
     * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.100).aspx GetPlacementDetailsForUrls Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetPlacementDetailsForUrls
     */
    final class GetPlacementDetailsForUrlsRequest
    {
        public $Urls;
    }

    /**
     * Retrieves placement information for the specified URLs.
     * @link http://msdn.microsoft.com/en-us/library/dn277530(v=msads.100).aspx GetPlacementDetailsForUrls Response Object
     * 
     * @uses PlacementDetail
     * @used-by BingAdsCampaignManagementService::GetPlacementDetailsForUrls
     */
    final class GetPlacementDetailsForUrlsResponse
    {
        public $PlacementDetails;
    }

    /**
     * Gets the shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.100).aspx GetSharedEntitiesByAccountId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdRequest
    {
        public $SharedEntityType;
    }

    /**
     * Gets the shared entities such as negative keyword lists from the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743728(v=msads.100).aspx GetSharedEntitiesByAccountId Response Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::GetSharedEntitiesByAccountId
     */
    final class GetSharedEntitiesByAccountIdResponse
    {
        public $SharedEntities;
    }

    /**
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.100).aspx GetSharedEntityAssociationsByEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
    final class GetSharedEntityAssociationsByEntityIdsRequest
    {
        public $EntityIds;
        public $EntityType;
        public $SharedEntityType;
    }

    /**
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743771(v=msads.100).aspx GetSharedEntityAssociationsByEntityIds Response Object
     * 
     * @uses SharedEntityAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsByEntityIds
     */
    final class GetSharedEntityAssociationsByEntityIdsResponse
    {
        public $Associations;
        public $PartialErrors;
    }

    /**
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743773(v=msads.100).aspx GetSharedEntityAssociationsBySharedEntityIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
     */
    final class GetSharedEntityAssociationsBySharedEntityIdsRequest
    {
        public $EntityType;
        public $SharedEntityIds;
        public $SharedEntityType;
    }

    /**
     * Gets associations between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743773(v=msads.100).aspx GetSharedEntityAssociationsBySharedEntityIds Response Object
     * 
     * @uses SharedEntityAssociation
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::GetSharedEntityAssociationsBySharedEntityIds
     */
    final class GetSharedEntityAssociationsBySharedEntityIdsResponse
    {
        public $Associations;
        public $PartialErrors;
    }

    /**
     * Retrieves all the website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.100).aspx GetSitePlacementsByAdGroupId Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByAdGroupId
     */
    final class GetSitePlacementsByAdGroupIdRequest
    {
        public $AdGroupId;
    }

    /**
     * Retrieves all the website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277535(v=msads.100).aspx GetSitePlacementsByAdGroupId Response Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByAdGroupId
     */
    final class GetSitePlacementsByAdGroupIdResponse
    {
        public $SitePlacements;
    }

    /**
     * Retrieves the specified website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.100).aspx GetSitePlacementsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByIds
     */
    final class GetSitePlacementsByIdsRequest
    {
        public $AdGroupId;
        public $SitePlacementIds;
    }

    /**
     * Retrieves the specified website-placement bids from the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277539(v=msads.100).aspx GetSitePlacementsByIds Response Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::GetSitePlacementsByIds
     */
    final class GetSitePlacementsByIdsResponse
    {
        public $SitePlacements;
    }

    /**
     * Retrieves detailed information about the targets that are associated with the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.100).aspx GetTargetsByAdGroupIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds
     */
    final class GetTargetsByAdGroupIdsRequest
    {
        public $AdGroupIds;
    }

    /**
     * Retrieves detailed information about the targets that are associated with the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236297(v=msads.100).aspx GetTargetsByAdGroupIds Response Object
     * 
     * @uses BatchError
     * @uses Target
     * @used-by BingAdsCampaignManagementService::GetTargetsByAdGroupIds
     */
    final class GetTargetsByAdGroupIdsResponse
    {
        public $PartialErrors;
        public $Targets;
    }

    /**
     * Retrieves detailed information about the targets that are associated with the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.100).aspx GetTargetsByCampaignIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsByCampaignIds
     */
    final class GetTargetsByCampaignIdsRequest
    {
        public $CampaignIds;
    }

    /**
     * Retrieves detailed information about the targets that are associated with the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn236300(v=msads.100).aspx GetTargetsByCampaignIds Response Object
     * 
     * @uses BatchError
     * @uses Target
     * @used-by BingAdsCampaignManagementService::GetTargetsByCampaignIds
     */
    final class GetTargetsByCampaignIdsResponse
    {
        public $PartialErrors;
        public $Targets;
    }

    /**
     * Retrieves detailed information about the specified targets.
     * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.100).aspx GetTargetsByIds Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsByIds
     */
    final class GetTargetsByIdsRequest
    {
        public $TargetIds;
    }

    /**
     * Retrieves detailed information about the specified targets.
     * @link http://msdn.microsoft.com/en-us/library/dn236304(v=msads.100).aspx GetTargetsByIds Response Object
     * 
     * @uses Target
     * @used-by BingAdsCampaignManagementService::GetTargetsByIds
     */
    final class GetTargetsByIdsResponse
    {
        public $Targets;
    }

    /**
     * Retrieves detailed information about all the targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236308(v=msads.100).aspx GetTargetsInfoFromLibrary Request Object
     * 
     * @used-by BingAdsCampaignManagementService::GetTargetsInfoFromLibrary
     */
    final class GetTargetsInfoFromLibraryRequest
    {
    }

    /**
     * Retrieves detailed information about all the targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236308(v=msads.100).aspx GetTargetsInfoFromLibrary Response Object
     * 
     * @uses TargetInfo
     * @used-by BingAdsCampaignManagementService::GetTargetsInfoFromLibrary
     */
    final class GetTargetsInfoFromLibraryResponse
    {
        public $TargetsInfo;
    }

    /**
     * Associates the specified ad extensions with the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.100).aspx SetAdExtensionsAssociations Request Object
     * 
     * @uses AdExtensionIdToEntityIdAssociation
     * @uses AssociationType
     * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
     */
    final class SetAdExtensionsAssociationsRequest
    {
        public $AccountId;
        public $AdExtensionIdToEntityIdAssociations;
        public $AssociationType;
    }

    /**
     * Associates the specified ad extensions with the respective campaigns or ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn277532(v=msads.100).aspx SetAdExtensionsAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetAdExtensionsAssociations
     */
    final class SetAdExtensionsAssociationsResponse
    {
        public $PartialErrors;
    }

    /**
     * Sets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.100).aspx SetNegativeSitesToAdGroups Request Object
     * 
     * @uses AdGroupNegativeSites
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
     */
    final class SetNegativeSitesToAdGroupsRequest
    {
        public $CampaignId;
        public $AdGroupNegativeSites;
    }

    /**
     * Sets the negative site URLs of the specified ad groups.
     * @link http://msdn.microsoft.com/en-us/library/dn236317(v=msads.100).aspx SetNegativeSitesToAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToAdGroups
     */
    final class SetNegativeSitesToAdGroupsResponse
    {
        public $PartialErrors;
    }

    /**
     * Sets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.100).aspx SetNegativeSitesToCampaigns Request Object
     * 
     * @uses CampaignNegativeSites
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
     */
    final class SetNegativeSitesToCampaignsRequest
    {
        public $AccountId;
        public $CampaignNegativeSites;
    }

    /**
     * Sets the negative site URLs of the specified campaigns.
     * @link http://msdn.microsoft.com/en-us/library/dn277504(v=msads.100).aspx SetNegativeSitesToCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetNegativeSitesToCampaigns
     */
    final class SetNegativeSitesToCampaignsResponse
    {
        public $PartialErrors;
    }

    /**
     * Sets the association between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.100).aspx SetSharedEntityAssociations Request Object
     * 
     * @uses SharedEntityAssociation
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
    final class SetSharedEntityAssociationsRequest
    {
        public $Associations;
    }

    /**
     * Sets the association between a campaign and a shared entity such as a negative keyword list.
     * @link http://msdn.microsoft.com/en-us/library/dn743780(v=msads.100).aspx SetSharedEntityAssociations Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::SetSharedEntityAssociations
     */
    final class SetSharedEntityAssociationsResponse
    {
        public $PartialErrors;
    }

    /**
     * Associates the specified target with the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277508(v=msads.100).aspx SetTargetToAdGroup Request Object
     * 
     * @used-by BingAdsCampaignManagementService::SetTargetToAdGroup
     */
    final class SetTargetToAdGroupRequest
    {
        public $AdGroupId;
        public $TargetId;
        public $ReplaceAssociation;
    }

    /**
     * Associates the specified target with the specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277508(v=msads.100).aspx SetTargetToAdGroup Response Object
     * 
     * @used-by BingAdsCampaignManagementService::SetTargetToAdGroup
     */
    final class SetTargetToAdGroupResponse
    {
    }

    /**
     * Associates the specified target with the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277512(v=msads.100).aspx SetTargetToCampaign Request Object
     * 
     * @used-by BingAdsCampaignManagementService::SetTargetToCampaign
     */
    final class SetTargetToCampaignRequest
    {
        public $CampaignId;
        public $TargetId;
        public $ReplaceAssociation;
    }

    /**
     * Associates the specified target with the specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277512(v=msads.100).aspx SetTargetToCampaign Response Object
     * 
     * @used-by BingAdsCampaignManagementService::SetTargetToCampaign
     */
    final class SetTargetToCampaignResponse
    {
    }

    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.100).aspx UpdateAdExtensions Request Object
     * 
     * @uses AdExtension
     * @used-by BingAdsCampaignManagementService::UpdateAdExtensions
     */
    final class UpdateAdExtensionsRequest
    {
        public $AccountId;
        public $AdExtensions;
    }

    /**
     * Updates one or more ad extensions within an account's ad extension library.
     * @link http://msdn.microsoft.com/en-us/library/dn277522(v=msads.100).aspx UpdateAdExtensions Response Object
     * 
     * @used-by BingAdsCampaignManagementService::UpdateAdExtensions
     */
    final class UpdateAdExtensionsResponse
    {
    }

    /**
     * This service operation is reserved for future use.
     * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.100).aspx UpdateAdGroupCriterions Request Object
     * 
     * @uses AdGroupCriterion
     * @uses CriterionType
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsRequest
    {
        public $AccountId;
        public $AdGroupCriterions;
        public $CriterionType;
    }

    /**
     * This service operation is reserved for future use.
     * @link http://msdn.microsoft.com/en-us/library/dn277527(v=msads.100).aspx UpdateAdGroupCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateAdGroupCriterions
     */
    final class UpdateAdGroupCriterionsResponse
    {
        public $NestedPartialErrors;
    }

    /**
     * Updates the specified ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.100).aspx UpdateAdGroups Request Object
     * 
     * @uses AdGroup
     * @used-by BingAdsCampaignManagementService::UpdateAdGroups
     */
    final class UpdateAdGroupsRequest
    {
        public $CampaignId;
        public $AdGroups;
        public $UpdateNativeBidAdjustment;
    }

    /**
     * Updates the specified ad groups in a specified campaign.
     * @link http://msdn.microsoft.com/en-us/library/dn277528(v=msads.100).aspx UpdateAdGroups Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAdGroups
     */
    final class UpdateAdGroupsResponse
    {
        public $PartialErrors;
    }

    /**
     * Updates the specified ads within a particular ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.100).aspx UpdateAds Request Object
     * 
     * @uses Ad
     * @used-by BingAdsCampaignManagementService::UpdateAds
     */
    final class UpdateAdsRequest
    {
        public $AdGroupId;
        public $Ads;
    }

    /**
     * Updates the specified ads within a particular ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn277531(v=msads.100).aspx UpdateAds Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateAds
     */
    final class UpdateAdsResponse
    {
        public $PartialErrors;
    }

    /**
     * Updates one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.100).aspx UpdateCampaignCriterions Request Object
     * 
     * @uses CampaignCriterion
     * @uses CampaignCriterionType
     * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
     */
    final class UpdateCampaignCriterionsRequest
    {
        public $CampaignCriterions;
        public $CriterionType;
    }

    /**
     * Updates one or more campaign criterions.
     * @link http://msdn.microsoft.com/en-us/library/dn913121(v=msads.100).aspx UpdateCampaignCriterions Response Object
     * 
     * @uses BatchErrorCollection
     * @used-by BingAdsCampaignManagementService::UpdateCampaignCriterions
     */
    final class UpdateCampaignCriterionsResponse
    {
        public $NestedPartialErrors;
    }

    /**
     * Updates specified campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.100).aspx UpdateCampaigns Request Object
     * 
     * @uses Campaign
     * @used-by BingAdsCampaignManagementService::UpdateCampaigns
     */
    final class UpdateCampaignsRequest
    {
        public $AccountId;
        public $Campaigns;
    }

    /**
     * Updates specified campaigns in a specified account.
     * @link http://msdn.microsoft.com/en-us/library/dn277536(v=msads.100).aspx UpdateCampaigns Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateCampaigns
     */
    final class UpdateCampaignsResponse
    {
        public $PartialErrors;
    }

    /**
     * Updates the keywords within a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.100).aspx UpdateKeywords Request Object
     * 
     * @uses Keyword
     * @used-by BingAdsCampaignManagementService::UpdateKeywords
     */
    final class UpdateKeywordsRequest
    {
        public $AdGroupId;
        public $Keywords;
    }

    /**
     * Updates the keywords within a specified ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236295(v=msads.100).aspx UpdateKeywords Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateKeywords
     */
    final class UpdateKeywordsResponse
    {
        public $PartialErrors;
    }

    /**
     * Updates shared entities such as negative keyword lists within the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.100).aspx UpdateSharedEntities Request Object
     * 
     * @uses SharedEntity
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesRequest
    {
        public $SharedEntities;
    }

    /**
     * Updates shared entities such as negative keyword lists within the account's library.
     * @link http://msdn.microsoft.com/en-us/library/dn743732(v=msads.100).aspx UpdateSharedEntities Response Object
     * 
     * @uses BatchError
     * @used-by BingAdsCampaignManagementService::UpdateSharedEntities
     */
    final class UpdateSharedEntitiesResponse
    {
        public $PartialErrors;
    }

    /**
     * Updates one or more website-placement bids in an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236298(v=msads.100).aspx UpdateSitePlacements Request Object
     * 
     * @uses SitePlacement
     * @used-by BingAdsCampaignManagementService::UpdateSitePlacements
     */
    final class UpdateSitePlacementsRequest
    {
        public $AdGroupId;
        public $SitePlacements;
    }

    /**
     * Updates one or more website-placement bids in an ad group.
     * @link http://msdn.microsoft.com/en-us/library/dn236298(v=msads.100).aspx UpdateSitePlacements Response Object
     * 
     * @used-by BingAdsCampaignManagementService::UpdateSitePlacements
     */
    final class UpdateSitePlacementsResponse
    {
    }

    /**
     * Updates targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236301(v=msads.100).aspx UpdateTargetsInLibrary Request Object
     * 
     * @uses Target
     * @used-by BingAdsCampaignManagementService::UpdateTargetsInLibrary
     */
    final class UpdateTargetsInLibraryRequest
    {
        public $Targets;
    }

    /**
     * Updates targets in your target library.
     * @link http://msdn.microsoft.com/en-us/library/dn236301(v=msads.100).aspx UpdateTargetsInLibrary Response Object
     * 
     * @used-by BingAdsCampaignManagementService::UpdateTargetsInLibrary
     */
    final class UpdateTargetsInLibraryResponse
    {
    }
}
