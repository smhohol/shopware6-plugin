<?php declare(strict_types=1);

namespace Shohol\AddMultipleProductsToCartAtOnce\Core\Content\MultipleProducts;

use Shopware\Core\Framework\DataAbstractionLayer\EntityDefinition;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\PrimaryKey;
use Shopware\Core\Framework\DataAbstractionLayer\Field\Flag\Required;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IdField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\IntField;
use Shopware\Core\Framework\DataAbstractionLayer\Field\StringField;
use Shopware\Core\Framework\DataAbstractionLayer\FieldCollection;

class MultipleProductsDefinition extends EntityDefinition
{
    public function getEntityName(): string
    {
        return 'shohol_multiple_products';
    }

    public function getEntityClass(): string
    {
        return MultipleProductsEntity::class;
    }

    public function getCollectionClass(): string
    {
        return MultipleProductsCollection::class;
    }

    protected function defineFields(): FieldCollection
    {
        return new FieldCollection([
            (new IdField('id', 'id'))->addFlags(new Required(), new PrimaryKey()),
            (new StringField('session_id', 'sessionId'))->addFlags(new Required()),
            (new StringField('article', 'article'))->addFlags(new Required()),
            (new IntField('quantity', 'quantity'))->addFlags(new Required()),
        ]);
    }
}
