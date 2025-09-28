<?php

namespace App\Twig\Components;

use Symfony\UX\LiveComponent\Attribute\AsLiveComponent;
use Symfony\UX\LiveComponent\Attribute\LiveProp;
use Symfony\UX\LiveComponent\DefaultActionTrait;

#[AsLiveComponent]
final class Search
{
    use DefaultActionTrait;

    #[LiveProp(writable: true)]
    public string $query = '';

    private array $demoData = [
        ['id' => 1, 'name' => 'Apple iPhone 15', 'category' => 'Electronics', 'price' => 999],
        ['id' => 2, 'name' => 'Samsung Galaxy S24', 'category' => 'Electronics', 'price' => 899],
        ['id' => 3, 'name' => 'MacBook Pro M3', 'category' => 'Electronics', 'price' => 1999],
        ['id' => 4, 'name' => 'Nike Air Max', 'category' => 'Footwear', 'price' => 120],
        ['id' => 5, 'name' => 'Adidas Ultraboost', 'category' => 'Footwear', 'price' => 180],
        ['id' => 6, 'name' => 'Levi\'s 501 Jeans', 'category' => 'Clothing', 'price' => 89],
        ['id' => 7, 'name' => 'The Great Gatsby', 'category' => 'Books', 'price' => 15],
        ['id' => 8, 'name' => 'Harry Potter Collection', 'category' => 'Books', 'price' => 45],
        ['id' => 9, 'name' => 'Coffee Maker', 'category' => 'Home & Kitchen', 'price' => 79],
        ['id' => 10, 'name' => 'Wireless Headphones', 'category' => 'Electronics', 'price' => 199],
    ];

    public function getFilteredResults(): array
    {
        if (empty($this->query)) {
            return $this->demoData;
        }

        // Demonstrate..
        usleep(500000);

        $query = strtolower(trim($this->query));

        return array_filter($this->demoData, function ($item) use ($query) {
            return str_contains(strtolower($item['name']), $query) ||
                   str_contains(strtolower($item['category']), $query);
        });
    }

    public function getResultsCount(): int
    {
        return count($this->getFilteredResults());
    }
}