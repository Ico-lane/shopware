<?php declare(strict_types=1);

namespace Shopware\Api\Product\Event\ProductContextPrice;

use Shopware\Api\Product\Struct\ProductContextPriceSearchResult;
use Shopware\Context\Struct\ShopContext;
use Shopware\Framework\Event\NestedEvent;

class ProductContextPriceSearchResultLoadedEvent extends NestedEvent
{
    public const NAME = 'product_context_price.search.result.loaded';

    /**
     * @var ProductContextPriceSearchResult
     */
    protected $result;

    public function __construct(ProductContextPriceSearchResult $result)
    {
        $this->result = $result;
    }

    public function getName(): string
    {
        return self::NAME;
    }

    public function getContext(): ShopContext
    {
        return $this->result->getContext();
    }
}