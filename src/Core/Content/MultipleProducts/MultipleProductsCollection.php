<?php declare(strict_types=1);

namespace Shohol\AddMultipleProductsToCartAtOnce\Core\Content\MultipleProducts;

use Shopware\Core\Framework\DataAbstractionLayer\EntityCollection;

/**
 * @method void              add(MultipleProductsEntity $entity)
 * @method void              set(string $key, MultipleProductsEntity $entity)
 * @method MultipleProductsEntity[]    getIterator()
 * @method MultipleProductsEntity[]    getElements()
 * @method MultipleProductsEntity|null get(string $key)
 * @method MultipleProductsEntity|null first()
 * @method MultipleProductsEntity|null last()
 */
class MultipleProductsCollection extends EntityCollection
{
    protected function getExpectedClass(): string
    {
        return MultipleProductsEntity::class;
    }
}
