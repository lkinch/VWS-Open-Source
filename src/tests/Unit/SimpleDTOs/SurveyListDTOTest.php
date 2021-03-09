<?php

namespace Tests\Unit;

use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\SurveyListDTO;
use PHPUnit\Framework\TestCase;
class MyFake 
{
    public static function create() {
        return true;
    }
};

class SurveyListDTOTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSurveyListDtoCanCreateANewSurveyWhenGivenFake()
    {
        $given = new SurveyListDTO("Test Survey", "01/01/2021");

        $injectedClass = new MyFake();

        $when = $given->create($injectedClass);

        $this->assertTrue($when);
    }
}
