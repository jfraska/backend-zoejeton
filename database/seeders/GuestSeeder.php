<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Str;

class GuestSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $guests = [
            [
                'id' => (string) Str::uuid(),
                'code' => 'GUEST001',
                'name' => 'John Doe',
                'address' => '123 Elm Street',
                'category' => "VIP",
                'status' => 1,
                'sosmed' => json_encode([
                    'instagram' => 'https://instagram.com/johndoe'
                ]),
                'attended' => json_encode([
                    'ceremony' => true,
                    'reception' => false
                ]),
                'invitation_id' => '550e8400-e29b-41d4-a716-446655440111', // Replace with actual UUID from invitations table
                'group_id' => 1, // Replace with actual ID from groups table
            ],
            [
                'id' => (string) Str::uuid(),
                'code' => 'GUEST002',
                'name' => 'Jane Smith',
                'address' => '456 Oak Avenue',
                'category' => "Reguler",
                'status' => 0,
                'sosmed' => json_encode([
                    'instagram' => 'https://instagram.com/janesmith'
                ]),
                'attended' => json_encode([
                    'ceremony' => false,
                    'reception' => false
                ]),
                'invitation_id' => '550e8400-e29b-41d4-a716-446655440222', // Replace with actual UUID from invitations table
                'group_id' => 2, // Replace with actual ID from groups table
            ],
            [
                'id' => (string) Str::uuid(),
                'code' => 'GUEST003',
                'name' => 'Michael Johnson',
                'address' => '789 Pine Road',
                'category' => "Reguler",
                'status' => 1,
                'sosmed' => json_encode([
                    'instagram' => 'https://instagram.com/in/michaeljohnson'
                ]),
                'attended' => json_encode([
                    'ceremony' => true,
                    'reception' => true
                ]),
                'invitation_id' => '550e8400-e29b-41d4-a716-446655440333', // Replace with actual UUID from invitations table
                'group_id' => 3, // Replace with actual ID from groups table
            ],
            [
                'id' => (string) Str::uuid(),
                'code' => 'GUEST004',
                'name' => 'Emily Davis',
                'address' => '101 Maple Lane',
                'category' => "VIP",
                'status' => 0,
                'sosmed' => json_encode([
                    'instagram' => 'https://instagram.com/add/emilydavis'
                ]),
                'attended' => json_encode([
                    'ceremony' => false,
                    'reception' => true
                ]),
                'invitation_id' => '550e8400-e29b-41d4-a716-446655440111', // Replace with actual UUID from invitations table
                'group_id' => 4, // Replace with actual ID from groups table
            ],
            [
                'id' => (string) Str::uuid(),
                'code' => 'GUEST005',
                'name' => 'Sarah Wilson',
                'address' => '202 Birch Street',
                'category' => "VIP",
                'status' => 1,
                'sosmed' => json_encode([
                    'instagram' => 'https://instagram.com/sarahwilson'
                ]),
                'attended' => json_encode([
                    'ceremony' => true,
                    'reception' => true
                ]),
                'invitation_id' => '550e8400-e29b-41d4-a716-446655440111', // Replace with actual UUID from invitations table
                'group_id' => 2, // Replace with actual ID from groups table
            ]
        ];

        foreach ($guests as $guest) {
            DB::table('guests')->insert($guest);
        }
    }
}
