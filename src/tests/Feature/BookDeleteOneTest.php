<?php

use App\Models\Book;
use App\Repositories\BookRepository;
use Illuminate\Database\Eloquent\Builder;


test('can delete book', function () {
    $book = Mockery::mock(Book::class);
    $builder = Mockery::mock(Builder::class);
    $book->shouldReceive('query')->andReturn($builder);
    $builder->shouldReceive('where')->andReturn($builder);
    $builder->shouldReceive('delete')->andReturn(true);
    $this->app->instance(BookRepository::class, new BookRepository($book));
    $response = $this->delete('/api/books/1')->json();
    expect($response)->toBeTrue();
});
