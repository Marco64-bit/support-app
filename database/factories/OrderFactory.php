<?php

namespace Database\Factories;

use Illuminate\Database\Eloquent\Factories\Factory;
use App\Models\User;
/**
 * @extends \Illuminate\Database\Eloquent\Factories\Factory<\App\Models\Order>
 */
class OrderFactory extends Factory
{
    /**
     * Define the model's default state.
     *
     * @return array<string, mixed>
     */
    public function definition(): array
    {
        $userIds = User::pluck('id');
        $orderTitle = ['Laptop Won’t Boot', 'Keyboard Malfunction', 'Overheating Issues', 'Data Recovery Needed', 'Virus Removal'];
        $orderDesc = ['The laptop powers on, but the screen remains black, and there’s no sign of booting.',
        'Several keys on the keyboard are unresponsive or type random characters.',
        'The laptop heats up excessively during normal usage, causing performance slowdowns.',
        'Accidentally deleted important files? We can help recover your data.',
        'Pop-ups, slow performance, and suspicious behavior? Let us clean your system.'];
        return [
            'customerID' => $userIds->random(),
            'title' => $this->faker->randomElement($orderTitle),
            'description' => $this->faker->randomElement($orderDesc),
        ];

    }
}
