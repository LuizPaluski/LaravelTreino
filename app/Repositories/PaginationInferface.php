<?php

namespace App\Repositories;

use stdClass;

interface PaginationInferface
{
    /**
     * 
     * 
     * @return stdClass[]
     */
    public function items() : array;
    public function total() : int;
    public function isFirstPage() : bool;
    public function isLastPage() : bool;
    public function currentPage() : int;
    public function getNumberMaxPage() : int;
    public function getNumberPrevPage(): int;
}
