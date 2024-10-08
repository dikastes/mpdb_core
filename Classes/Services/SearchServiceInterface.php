<?php
namespace Slub\MpdbCore\Services;

use Illuminate\Support\Collection;
use Slub\MpdbCore\Domain\Model\Publisher;

interface SearchServiceInterface
{
    public function setIndex(string $index): SearchServiceInterface;

    public function setPublisher(string $publisher): SearchServiceInterface;

    public function setSearchterm(string $searchTerm): SearchServiceInterface;

    public function setId(string $ud): SearchServiceInterface;

    public function setFrom(int $from): SearchServiceInterface;

    public function setSize(int $size): SearchServiceInterface;

    public function search(): Collection;

    public function count(): int;
}
