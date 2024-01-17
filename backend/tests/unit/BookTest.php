<?php

namespace backend\tests\Unit;

use backend\tests\UnitTester;
use backend\models\Book;
use \Codeception\Test\Unit;

class BookTest extends Unit
{
    /**
     * @var UnitTester
     */
    protected UnitTester $tester;

    /**
     * Test CRUD operations for Book.
     */
    public function testBookCrud()
    {
        // Create
        $this->tester->haveRecord(Book::class, [
            'title' => 'Test Book',
            'description' => 'Test Description',
            'author' => 'Test Author',
            'pages' => 100,
            'created_at' => '2024-01-17T10:34:02.531Z',
            'updated_at' => '2024-01-17T10:34:02.531Z',
        ]);

        $book = Book::findOne(['title' => 'Test Book']);
        $this->assertEquals('Test Book', $book->title);
        $this->assertEquals('Test Description', $book->description);
        $this->assertEquals('Test Author', $book->author);
        $this->assertEquals(100, $book->pages);

        // Read
        $this->tester->seeRecord(Book::class, [
            'title' => 'Test Book',
            'description' => 'Test Description',
            'author' => 'Test Author',
            'pages' => 100,
            'created_at' => '2024-01-17T10:34:02.531Z',
            'updated_at' => '2024-01-17T10:34:02.531Z',
        ]);

        // Update
        $book->title = 'Updated Test Book';
        $book->description = 'Updated Test Description';
        $book->author = 'Updated Test Author';
        $book->pages = 200;
        $book->created_at = '2024-01-17T10:34:02.531Z';
        $book->updated_at = '2024-01-17T11:34:02.531Z';
        $book->save();

        $this->tester->seeRecord(Book::class, [
            'title' => 'Updated Test Book',
            'description' => 'Updated Test Description',
            'author' => 'Updated Test Author',
            'pages' => 200,
            'created_at' => '2024-01-17T10:34:02.531Z',
            'updated_at' => '2024-01-17T11:34:02.531Z',
        ]);

        $this->tester->dontSeeRecord(Book::class, [
            'title' => 'Test Book',
            'description' => 'Test Description',
            'author' => 'Test Author',
            'pages' => 100,
            'created_at' => '2024-01-17T10:34:02.531Z',
            'updated_at' => '2024-01-17T10:34:02.531Z',
        ]);

        // Delete
        $book->delete();

        $this->tester->dontSeeRecord(Book::class, [
            'title' => 'Updated Test Book',
            'description' => 'Updated Test Description',
            'author' => 'Updated Test Author',
            'pages' => 200,
            'created_at' => '2024-01-17T10:34:02.531Z',
            'updated_at' => '2024-01-17T11:34:02.531Z',
        ]);

        $this->tester->dontSeeRecord(Book::class, [
            'title' => 'Test Book',
            'description' => 'Test Description',
            'author' => 'Test Author',
            'pages' => 100,
            'created_at' => '2024-01-17T10:34:02.531Z',
            'updated_at' => '2024-01-17T10:34:02.531Z',
        ]);
    }
}
