<?php

use App\Models\Goal;
use App\Models\TimedGoal;
use App\Models\User;
use Illuminate\Foundation\Testing\WithoutMiddleware;
use Illuminate\Foundation\Testing\DatabaseMigrations;
use Illuminate\Foundation\Testing\DatabaseTransactions;

class GoalTest extends TestCase
{
    protected $user;

    /**
     * @test
     */
    public function a_goal_can_be_assigned_to_a_user()
    {
        $user = $this->getUser();

        $goal = TimedGoal::create([
            'duration' => 24,
            'repeats' => true,
            'name' => 'test',
            'owner_id' => $user->id
        ]);
        
        $user->goals()->save($goal);

        $this->assertEquals($user->goals[0]->id, $goal->id);
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
