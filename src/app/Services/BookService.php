<?php

namespace App\Services;

use App\Exceptions\NotFoundException;
use App\Repositories\BookRepository;
use Exception;

class BookService
{

    public function __construct(
        private readonly BookRepository $bookRepository
    )
    {
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->bookRepository->getAll();
    }

    /**
     * @param int $id
     * @return array
     * @throws Exception
     */
    public function getById(int $id): array
    {
        return $this->bookRepository->getById($id);
    }

    /**
     * @param array $data
     * @return array
     */
    public function create(array $data): array
    {
        return $this->bookRepository->create($data);
    }

    /**
     * @param array $data
     * @param int $id
     * @return array
     * @throws NotFoundException
     */
    public function update(array $data, int $id): array
    {
        $updated = $this->bookRepository->update($data, $id);
        if ($updated) {
            return $this->bookRepository->getById($id);
        }
        throw new NotFoundException('Entity not found', 404);
    }

    /**
     * @param $id
     * @return bool
     */
    public function delete($id): bool
    {
        return $this->bookRepository->delete($id);
    }
}
