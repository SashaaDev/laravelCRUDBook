<?php

use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Database\Eloquent\Builder;


test('can get books', function ($findedBooks, array $awaitingResponse) {
    $book = Mockery::mock(Book::class);
    $builder = Mockery::mock(Builder::class);
    $book->shouldReceive('query')->andReturn($builder);
    $builder->shouldReceive('orderBy')->andReturn($builder);
    $builder->shouldReceive('paginate')->andReturn($findedBooks);
    $this->app->instance(BookRepository::class, new BookRepository($book));
    $response = $this->get('/api/books')->json();
    expect($response)->toBe($awaitingResponse);
})->with('get Books');
