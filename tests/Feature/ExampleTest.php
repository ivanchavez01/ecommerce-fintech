<?php

namespace Tests\Feature;

use Illuminate\Foundation\Testing\RefreshDatabase;
use Soft\Ecommerce\Application\Product;
use Soft\Ecommerce\Infrastructure\ElasticSearchProductRepository;
use Soft\Fintech\Wallet\Application\Wallet;
use Soft\Fintech\Wallet\Domain\Entities\Applicant;
use Soft\Fintech\Wallet\Domain\Entities\Person;
use Soft\Fintech\Wallet\Domain\Entities\PhysicalPerson;
use Tests\TestCase;

class ExampleTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testBasicTest()
    {
        /*$product = new Product(new ElasticSearchProductRepository());
        $product->find(189);*/



        Wallet::create(
            new PhysicalPerson(
              "Ivan",
                "Ernesto",
                "Chavez",
                "Sanchez",
                "CASI9001HSRHNV04",
                "CASI9001KL0"
            )
        );

        $response = $this->get('/');

        $response->assertStatus(200);
    }
}
