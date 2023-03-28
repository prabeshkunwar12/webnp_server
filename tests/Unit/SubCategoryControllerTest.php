<?php

namespace Tests\Unit;

use PHPUnit\Framework\TestCase;
use app\Http\Controllers\SubCategoriesController;

class SubCategoryControllerTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function test_getAllSubCategories()
    {
        $subCategoriesController = new SubCategoriesController();
        $subCategories = $subCategoriesController->getAllSubCategories();
        $subCategories[0]->name->assertTrue("Abdominal Pain");
    }
}
