<?php declare(strict_types=1);

namespace Shohol\AddMultipleProductsToCartAtOnce\Core\Content\MultipleProducts;

use Shopware\Core\Framework\DataAbstractionLayer\Entity;
use Shopware\Core\Framework\DataAbstractionLayer\EntityIdTrait;

class MultipleProductsEntity extends Entity
{
    use EntityIdTrait;

    /**
     * @var string
     */
    protected $sessionId;

    /**
     * @var string
     */
    protected $article;

    /**
     * @var int
     */
    protected $quantity;

    public function getSessionId(): string
    {
        return $this->sessionId;
    }

    public function setSessionId(string $sessionId): void
    {
        $this->sessionId = $sessionId;
    }

    public function getArticle(): string
    {
        return $this->article;
    }

    public function setArticle(string $article): void
    {
        $this->article = $article;
    }

    public function getQuantity(): float
    {
        return $this->quantity;
    }

    public function setQuantity(int $quantity): void
    {
        $this->quantity = $quantity;
    }
}
