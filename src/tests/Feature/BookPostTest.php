<?php

use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Database\Eloquent\Builder;


test('can post book', function ($request, $findedBooks, array $awaitingResponse) {
    $book = Mockery::mock(Book::class);
    $builder = Mockery::mock(Builder::class);
    $book->shouldReceive('query')->andReturn($builder);
    $builder->shouldReceive('create')->andReturn($findedBooks);
    $this->app->instance(BookRepository::class, new BookRepository($book));
    $response = $this->post('/api/books', $request)->json();
    expect($response)->toBe($awaitingResponse);
})->with('post Books');
