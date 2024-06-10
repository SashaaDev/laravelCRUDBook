<?php

use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Database\Eloquent\Builder;


test('can patch book', function ($request, $findedBooks, array $awaitingResponse) {
    $book = Mockery::mock(Book::class);
    $builder = Mockery::mock(Builder::class);
    $book->shouldReceive('query')->andReturn($builder);
    $builder->shouldReceive('where')->andReturn($builder);
    $builder->shouldReceive('update')->andReturn(true);

    $book->shouldReceive('query')->andReturn($builder);
    $builder->shouldReceive('find')->andReturn($findedBooks);

    $this->app->instance(BookRepository::class, new BookRepository($book));
    $response = $this->patch('/api/books/4', $request)->json();
    expect($response)->toBe($awaitingResponse);
})->with('patch Books');
