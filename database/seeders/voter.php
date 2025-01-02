<?php
namespace Database\Seeders;
use Illuminate\Support\Facades\DB;
use Illuminate\Database\Seeder;

class voter extends Seeder
{
    public function run()
    {
        DB::unprepared("CREATE TRIGGER update_status after DELETE ON token_tabel\n"

        . "       FOR EACH ROW\n"
    
        . "       BEGIN\n"
    
        . "           UPDATE voter a\n"
    
        . "			LEFT JOIN token_tabel b ON a.email = b.email\n"
    
        . "			SET status=1\n"
    
        . "			WHERE b.email IS NULL;END;");

        DB::unprepared("CREATE TRIGGER update_status_2 after INSERT ON token_tabel\n"

        . "       FOR EACH ROW\n"
    
        . "       BEGIN\n"
    
        . "           UPDATE voter a\n"
    
        . "			INNER JOIN token_tabel b ON a.email = b.email\n"
    
        . "			SET status=0;END;");

        DB::table('voter')->insert([
            'email' => 'akbar.fajar2301@mail.ugm.ac.id',
            'nim'   => '21/479890/SV/19543',
            'angkatan' => '2021',
        ]);
    }
}
