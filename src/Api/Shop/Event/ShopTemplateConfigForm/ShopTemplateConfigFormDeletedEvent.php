<?php declare(strict_types=1);

namespace Shopware\Api\Shop\Event\ShopTemplateConfigForm;

use Shopware\Api\Entity\Write\DeletedEvent;
use Shopware\Api\Entity\Write\WrittenEvent;
use Shopware\Api\Shop\Definition\ShopTemplateConfigFormDefinition;

class ShopTemplateConfigFormDeletedEvent extends WrittenEvent implements DeletedEvent
{
    public const NAME = 'shop_template_config_form.deleted';

    public function getName(): string
    {
        return self::NAME;
    }

    public function getDefinition(): string
    {
        return ShopTemplateConfigFormDefinition::class;
    }
}