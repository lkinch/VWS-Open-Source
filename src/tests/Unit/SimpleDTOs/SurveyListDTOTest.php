<?php

namespace Tests\Unit;

use App\Http\Controllers\Surveys\SimpleDTOs\PrimaryLevel\SurveyListObject;
use PHPUnit\Framework\TestCase;
class MyFake
{
    public static function create() {
        return true;
    }
};

class SurveyListObjectTest extends TestCase
{
    /**
     * A basic test example.
     *
     * @return void
     */
    public function testSurveyListDtoCanCreateANewSurveyWhenGivenFake()
    {
        $given = new SurveyListObject("Test Survey", "01/01/2021");

        $injectedClass = new MyFake();

        $when = $given->create($injectedClass);

        $this->assertTrue($when);
    }
}
