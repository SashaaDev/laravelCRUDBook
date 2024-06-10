<?php

namespace App\Http\Controllers;

use App\Http\Requests\CreateBookRequest;
use App\Http\Requests\UpdateBookRequest;
use App\Services\BookService;
use Exception;
use Illuminate\Http\JsonResponse;

class BookController extends Controller
{
    public function __construct(
        private readonly BookService $bookService
    )
    {
    }

    /**
     * @return JsonResponse
     */
    public function getAll(): JsonResponse
    {
        return response()->json($this->bookService->getAll());
    }

    /**
     * @param int $id
     * @return JsonResponse
     * @throws Exception
     */
    public function getById(int $id): JsonResponse
    {
        return response()->json($this->bookService->getById($id));
    }

    /**
     * @param CreateBookRequest $request
     * @return JsonResponse
     */
    public function create(CreateBookRequest $request): JsonResponse
    {
        return response()->json($this->bookService->create($request->all()));
    }

    /**
     * @param UpdateBookRequest $request
     * @param int $id
     * @return JsonResponse
     * @throws Exception
     */
    public function update(UpdateBookRequest $request, int $id): JsonResponse
    {
        return response()->json($this->bookService->update($request->all(), $id));
    }

    /**
     * @param int $id
     * @return JsonResponse
     */
    public function delete(int $id): JsonResponse
    {
        return response()->json($this->bookService->delete($id));
    }
}
