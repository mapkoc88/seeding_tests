<?php

namespace Tests\Unit;

use phpDocumentor\Reflection\Types\Integer;
use Tests\TestCase;
use Illuminate\Foundation\Testing\WithFaker;
use Illuminate\Foundation\Testing\RefreshDatabase;
use PHPUnit\Framework\Constraint\IsType;
use App\User;

class UserTest extends TestCase
{


    public function testFirstNameMatch()
    {

        $user = User::find(1);

        $this->assertEquals($user->name, 'Miss Georgianna Huel PhD');

    }

    public function testSaveEntry()
    {


        $user = User::find(1);
        $user->name = 'Miss Georgianna Huel PhD';

        $this->assertTrue($user->save());

    }

    public function testAmountOfRecords(){

        $user = User::all();
        $count = $user->count();
        $this->assertLessThanOrEqual(50,$count,'Error');

    }

    public function testDataType(){

        $user = User::find(1);
        $this->assertInternalType(IsType::TYPE_OBJECT, $user);
    }
}




