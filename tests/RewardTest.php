<?php

use App\Models\Reward;
use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class RewardTest extends TestCase
{
    protected $user;

    /**
     * @test
     */
    public function a_reward_can_be_assigned_to_a_user()
    {
        $user = $this->getUser();

        $reward = Reward::create([
            'name' => 'test',
            'cost' => 100,
        ]);

        $user->rewards()->save($reward);

        $this->assertEquals($user->rewards[0]->id, $reward->id);
    }

    public function getUser()
    {
        if ($this->user != null) {
            return $this->user;
        }

        $this->user = User::create([
            'name' => 'Testy McTest Face',
            'email' => 'test@test.com',
            'password' => 'test',
        ]);

        return $this->user;
    }
}
