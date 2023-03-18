<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Database\Seeders\Demo;
use Tests\TestCase;

class AccessCardControllerTest extends TestCase
{
    use RefreshDatabase;

    /**
     * Test that the '/access-card/search' end-point behaves as expected.
     *
     * @param string $cardNumber
     * @param array  $expectedResult
     *
     * @dataProvider searchData
     */
    public function testSearch(string $cardNumber, array $expectedResult): void
    {
        $this->seed(Demo::class);
        $response = $this->get('/access-card/search?cn='.$cardNumber);

        $response->assertStatus(200);
        $response->assertExactJson($expectedResult);
    }

    /**
     * Data for testSearch
     *
     * @return array[]
     */
    public function searchData(): array
    {
        return [
            'Test Julius Caesar'   => [
                'cardNumber'       => '142594708f3a5a3ac2980914a0fc954f',
                'expectedResponse' => [
                    'full_name'    => 'Julius Caesar',
                    'department'   => ['Director', 'Development']
                ]
            ],
            'Test not_found'       => [
                'cardNumber'       => 'not_found',
                'expectedResponse' => [
                    'full_name'    => '',
                    'department'   => []
                ]
            ],
            'Test empty string'    => [
                'cardNumber'       => '',
                'expectedResponse' => [
                    'full_name'    => '',
                    'department'   => []
                ]
            ]
        ];
    }
}
