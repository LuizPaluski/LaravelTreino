<?php

namespace App\Repositories;
use illuminate\Pagination\LengthAwarePaginator;
use App\Repositories\PaginationInterface;
use stdClass;

class PaginationPresenter implements PaginationInterface
{
    /**
     * Summary of items
     * @var stdClass[]
     */
    private array $items;

    public function __construct(
        protected LengthAwarePaginator $paginator,
    )
    {
        $this->items = $this->resolveItems($this->paginator->items());

    }
    /**
     *
     *
     * @return stdClass[]
     */
    public function items() : array{
        return $this->items;
    }

    public function total() : int{
        return $this->paginator->total() ?? 0;
    }
    public function isFirstPage() : bool{
        return $this->paginator->onFirstPage();
    }
    public function isLastPage() : bool{
        return $this->paginator->currentPage() === $this->paginator->lastPage();
    }
    public function currentPage() : int{
        return $this->paginator->currentPage() ?? 1;
    }
    public function getNumberMaxPage() : int{
        return $this->paginator->currentPage() + 1;
    }
    public function getNumberPrevPage(): int{
        return $this->paginator->currentPage() - 1;
    }

    private function resolveItems(array $items): array{
        $response = [];
        foreach($items as $item){
            $stdClassObject = new stdClass;
            foreach($item->toArray() as $key => $value){
                $stdClassObject->$key = $value;

            }
        array_push($response, $stdClassObject);
        }
        return $response;
    }
}
