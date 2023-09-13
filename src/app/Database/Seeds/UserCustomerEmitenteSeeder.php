<?php

namespace App\Database\Seeds;

use CodeIgniter\Database\Seeder;

class UserCustomerEmitenteSeeder extends Seeder
{
    public function run()
    {
        $faker = \Faker\Factory::create();

        for ($i = 0; $i < 100; $i++) {
            $data = [
                'profile_id_slug' => $this->generateProfileIdSlug($faker),
                'classification' => $this->generateClassification($faker),
                'name' => $this->generateName($faker),
                'gender' => $this->generateGender($faker),
                'rg' => $this->generateRg($faker),
                'cpf' => $this->generateCpf($faker),
                'zip_code' => $this->generateZipCode($faker),
                'street' => $this->generateStreet($faker),
                'number' => $this->generateNumber($faker),
                'neighborhood' => $this->generateNeighborhood($faker),
                'city' => $this->generateCity($faker),
                'state' => $this->generateState($faker),
                'mail' => $this->generateMail($faker),
                'password' => $this->generatePassword($faker),
                'phone' => $this->generatePhone($faker),
                'cellphone' => $this->generateCellphone($faker),
                'asset' => $this->generateAsset($faker),
                'registrationDate' => $this->generateRegistrationDate($faker),
                'expirationDate' => $this->generateExpirationDate($faker),
                'created_at' => $this->generateCreatedAt($faker),
                'updated_at' => $this->generateUpdatedAt($faker),
                'contact' => $this->generateContact($faker),
                'deleted_at' => null,
            ];

            $this->db->table('user_customer_emitente')->insert($data);
        }
    }

    private function generateProfileIdSlug($faker)
    {
        return $faker->word;
    }

    private function generateClassification($faker)
    {
        return $faker->word;
    }

    private function generateName($faker)
    {
        return $faker->name;
    }

    private function generateGender($faker)
    {
        return $faker->randomElement(['Male', 'Female']);
    }

    private function generateRg($faker)
    {
        return $faker->numerify('########');
    }

    private function generateCpf($faker)
    {
        return $faker->numerify('###.###.###-##');
    }

    private function generateZipCode($faker)
    {
        return $faker->numerify('#####-###');
    }

    private function generateStreet($faker)
    {
        return $faker->streetAddress;
    }

    private function generateNumber($faker)
    {
        return $faker->buildingNumber;
    }

    private function generateNeighborhood($faker)
    {
        return $faker->citySuffix;
    }

    private function generateCity($faker)
    {
        return $faker->city;
    }

    private function generateState($faker)
    {
        return $faker->stateAbbr;
    }

    private function generateMail($faker)
    {
        return $faker->email;
    }

    private function generatePassword($faker)
    {
        return password_hash($faker->password, PASSWORD_BCRYPT);
    }

    private function generatePhone($faker)
    {
        return $faker->phoneNumber;
    }

    private function generateCellphone($faker)
    {
        return $faker->phoneNumber;
    }

    private function generateAsset($faker)
    {
        return $faker->randomElement(['Y', 'N']);
    }

    private function generateRegistrationDate($faker)
    {
        return $faker->date();
    }

    private function generateExpirationDate($faker)
    {
        return $faker->date();
    }

    private function generateCreatedAt($faker)
    {
        return $faker->dateTimeThisDecade->format('Y-m-d H:i:s');
    }

    private function generateUpdatedAt($faker)
    {
        return $faker->dateTimeThisDecade->format('Y-m-d H:i:s');
    }

    private function generateContact($faker)
    {
        return $faker->name;
    }
}