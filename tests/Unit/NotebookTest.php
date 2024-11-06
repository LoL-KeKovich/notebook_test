<?php

namespace Tests\Unit;

use Tests\TestCase;

class NotebookTest extends TestCase
{
    public function test_index(): void {

        $response = $this->get('/api/v1/notebook');
        $this->assertEquals(200, $response->status());
    }

    public function test_store(): void {
        $response = $this->post('/api/v1/notebook', [
            'FIO' => 'AAAA',
            'company' => 'asdasd',
            'phone' => '146578698',
            'email' => 'asdasd@asdasdas',
            'birthday' => '21.21.2021',
            'image' => ''
        ]);
        $this->assertEquals(200, $response->status());
    }

    public function test_store_2(): void {
        $response = $this->post('/api/v1/notebook', [
            'FIO' => 'SADAS',
            'company' => 'VVVVVVV',
            'phone' => '146578698',
            'email' => 'asdasd@asdasdas',
            'birthday' => '12.11.2000',
            'image' => ''
        ]);
        $this->assertEquals(200, $response->status());
    }

    public function test_update(): void {
        $response = $this->post('/api/v1/notebook/1', [
            'FIO' => 'BBBB',
            'company' => 'asdasd',
            'phone' => '11111',
            'email' => 'asdasd@asdasdas',
            'birthday' => '21.21.1999',
            'image' => ''
        ]);
        $this->assertEquals(200, $response->status());
    }

    public function test_findById(): void {
        $response = $this->get('/api/v1/notebook/1');
        $this->assertEquals(200, $response->status());
    }
}
