<?php

namespace App\Repositories;

use App\Exceptions\NotFoundException;
use Illuminate\Database\Eloquent\Model;

class BookRepository
{
    public function __construct(private readonly Model $model)
    {
    }

    /**
     * @return array
     */
    public function getAll(): array
    {
        return $this->model->query()->orderBy('id')->paginate()->toArray();
    }

    /**
     * @param int $id
     * @return array
     * @throws NotFoundException
     */
    public function getById(int $id): array
    {
        $book = $this->model->query()->find($id);
        if (!$book) {
            throw new NotFoundException('Entity not found', 404);

        }
        return $book->toArray();
    }

    /**
     * @param array $data
     * @return array
     */
    public function create(array $data): array
    {
        return $this->model->query()->create($data)->toArray();
    }

    /**
     * @param array $data
     * @param int $id
     * @return bool
     */
    public function update(array $data, int $id): bool
    {
        return $this->model->query()->where('id', $id)->update($data);
    }

    /**
     * @param int $id
     * @return bool
     */
    public function delete(int $id): bool
    {
        return $this->model->query()->where('id', $id)->delete();
    }
}
