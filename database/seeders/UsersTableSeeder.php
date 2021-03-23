<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;
use Carbon\Carbon;

class UsersTableSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        DB::table('users')->insert([
            [
                'name'=> "AHIME SHOPY",
                'phone' => "96547841",
                'address' => 'BP 358, Cotonou, Bénin, Rue 300 Révérend Père Colineau, lot 5252, zongo',         
                'email' => "ahime@ahime.com",
                'password' => bcrypt('adminahime'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name'=> "DEGLA Fabrice",
                'phone' => "67012331",
                'address' => 'BP 358, Cotonou, Bénin, Rue 301 Révérend Père Colineau, lot 5252, zongo',         
                'email' => "fabiodegla15@gmail.com",
                'password' => bcrypt('adeline@1995'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "SODEGLA Karim",
                'phone' => "61300817",
                'address' => 'BP 358, Cotonou, Bénin, Rue 302 Révérend Père Colineau, lot 5252, zongo',
                'email' => "sodeglakarim@gmail.com",
                'password' => bcrypt('sokamsokam'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ALLOI GBODJA Méryvane",
                'phone' => "66022331",
                'address' => 'BP 358, Cotonou, Bénin, Rue 303 Révérend Père Colineau, lot 5252, zongo',
                'email' => "mery@gmail.com",
                'password' => bcrypt('meryalloi1995'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "SODEGLA Félicienne",
                'phone' => "95784513",
                'address' => 'BP 358, Cotonou, Bénin, Rue 304 Révérend Père Colineau, lot 5252, zongo',
                'email' => "felicien@gmail.com",
                'password' => bcrypt('12345678'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "DEGLA Albéric",
                'phone' => "67458124",
                'address' => 'BP 358, Cotonou, Bénin, Rue 305 Révérend Père Colineau, lot 5252, zongo',
                'email' => "eltchouke@gmail.com",
                'password' => bcrypt('21212121'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "GBAGUIDI Cornéilia Orestie",
                'phone' => "62644043",
                'address' => 'BP 358, Cotonou, Bénin, Rue 306 Révérend Père Colineau, lot 5252, zongo',
                'email' => "sandoval@gmail.com",
                'password' => bcrypt('fabiola03'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "VODONNOU Hermione",
                'phone' => "67687220",
                'address' => 'BP 358, Cotonou, Bénin, Rue 307 Révérend Père Colineau, lot 5252, zongo',
                'email' => "fabiolove01@gmail.com",
                'password' => bcrypt('fabiolove01'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "GBAGUIDI Corneille",
                'phone' => "97933120",
                'address' => 'BP 358, Cotonou, Bénin, Rue 308 Révérend Père Colineau, lot 5252, zongo',
                'email' => "corneille13@gmail.com",
                'password' => bcrypt('corneille13'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "DEGLA Arsène",
                'phone' => "95154585",
                'address' => 'BP 358, Cotonou, Bénin, Rue 309 Révérend Père Colineau, lot 5252, zongo',
                'email' => "sese@gmail.com",
                'password' => bcrypt('sisco1998'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "FANTODJI Nestor",
                'phone' => "97266550",
                'address' => 'BP 358, Cotonou, Bénin, Rue 310 Révérend Père Colineau, lot 5252, zongo',
                'email' => "sodeglanestor@gmail.com",
                'password' => bcrypt('sokamnestor'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ASSOUAN Loîc",
                'phone' => "65422331",
                'address' => 'BP 358, Cotonou, Bénin, Rue 311 Révérend Père Colineau, lot 5252, zongo',
                'email' => "lolo@gmail.com",
                'password' => bcrypt('meryalloi2'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ADANDE Louis",
                'phone' => "45784512",
                'address' => 'BP 358, Cotonou, Bénin, Rue 312 Révérend Père Colineau, lot 5252, zongo',
                'email' => "louis@gmail.com",
                'password' => bcrypt('adende1998'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "GBEDIGA Annick",
                'phone' => "62798211",
                'address' => 'BP 358, Cotonou, Bénin, Rue 313 Révérend Père Colineau, lot 5252, zongo',
                'email' => "nicko@gmail.com",
                'password' => bcrypt('fabiolove'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "CISSE Bouba",
                'phone' => "78458124",
                'address' => 'BP 358, Cotonou, Bénin, Rue 314 Révérend Père Colineau, lot 5252, zongo',
                'email' => "bouba@gmail.com",
                'password' => bcrypt('2222222245'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "AKOTOGNON Assiba Adéline",
                'phone' => "63744043",
                'address' => 'BP 358, Cotonou, Bénin, Rue 315 Révérend Père Colineau, lot 5252, zongo',
                'email' => "ade@gmail.com",
                'password' => bcrypt('fabiola02'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "AKE NATONDE",
                'phone' => "45687220",
                'address' => 'BP 358, Cotonou, Bénin, Rue 317 Révérend Père Colineau, lot 5252, zongo',
                'email' => "sonexcellent@gmail.com",
                'password' => bcrypt('hecmecoleleader'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "A. Antonio Forester",
                'phone' => "96647841",
                'address' => 'BP 358, Cotonou, Bénin, Rue 316 Révérend Père Colineau, lot 5252, zongo',
                'email' => "promo@gmail.com",
                'password' => bcrypt('antonioforester'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "YAO Adjoua Lucie",
                'phone' => "47012331",
                'address' => 'BP 358, Cotonou, Bénin, Rue 318 Révérend Père Colineau, lot 5252, zongo',
                'email' => "lucie05@gmail.com",
                'password' => bcrypt('luciemylove'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "YATTA Constant Déo",
                'phone' => "97451124",
                'address' => 'BP 358, Cotonou, Bénin, Rue 319 Révérend Père Colineau, lot 5252, zongo',
                'email' => "constant@gmail.com",
                'password' => bcrypt('constconst'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "DEGLA Yao Fabrice",
                'phone' => "65285002",
                'address' => 'BP 358, Cotonou, Bénin, Rue 320 Révérend Père Colineau, lot 5252, zongo',
                'email' => "dinigeur80@gmail.com",
                'password' => bcrypt('dinigeur80'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "AKPOVI DEGLA Olivier",
                'phone' => "66784513",
                'address' => 'BP 358, Cotonou, Bénin, Rue 321 Révérend Père Colineau, lot 5252, zongo',
                'email' => "olivier@gmail.com",
                'password' => bcrypt('olivier0000'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "KOUASSI Augustine",
                'phone' => "43879650",
                'address' => 'BP 358, Cotonou, Bénin, Rue 322 Révérend Père Colineau, lot 5252, zongo',
                'email' => "augustino@gmail.com",
                'password' => bcrypt('augustino1'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "FAGBE Orestie",
                'phone' => "63644043",
                'address' => 'BP 358, Cotonou, Bénin, Rue 323 Révérend Père Colineau, lot 5252, zongo',
                'email' => "orestie@gmail.com",
                'password' => bcrypt('fabiola457'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "SOSSOU Modeste",
                'phone' => "97690079",
                'address' => 'BP 358, Cotonou, Bénin, Rue 324 Révérend Père Colineau, lot 5252, zongo',
                'email' => "citech@gmail.com",
                'password' => bcrypt('promocitech'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "DANHA Mélanie",
                'phone' => "97360570",
                'address' => 'BP 358, Cotonou, Bénin, Rue 325 Révérend Père Colineau, lot 5252, zongo',
                'email' => "melanie@gmail.com",
                'password' => bcrypt('karimaman'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "COMLAN Leo",
                'phone' => "96547831",
                'address' => 'BP 358, Cotonou, Bénin, Rue 326 Révérend Père Colineau, lot 5252, zongo',
                'email' => "pipi@.com",
                'password' => bcrypt('pipirapide'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "AZE Parfait",
                'phone' => "96547844",
                'address' => 'BP 358, Cotonou, Bénin, Rue 327 Révérend Père Colineau, lot 5252, zongo',
                'email' => "aze@.com",
                'password' => bcrypt('azeseconde'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "COMLAN Ali",
                'phone' => "96547871",
                'address' => 'BP 358, Cotonou, Bénin, Rue 329 Révérend Père Colineau, lot 5252, zongo',
                'email' => "comlan@.com",
                'password' => bcrypt('comlanali'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "KACLE Mahouchi",
                'phone' => "96047841",
                'address' => 'BP 358, Cotonou, Bénin, Rue 330 Révérend Père Colineau, lot 5252, zongo',
                'email' => "kacle@.com",
                'password' => bcrypt('mahouchi'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ASSOU Félicien",
                'phone' => "96547875",
                'address' => 'BP 358, Cotonou, Bénin, Rue 331 Révérend Père Colineau, lot 5252, zongo',
                'email' => "assou@.com",
                'password' => bcrypt('assoufelicien'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ASSOU Félix",
                'phone' => "96547005",
                'address' => 'BP 358, Cotonou, Bénin, Rue 332 Révérend Père Colineau, lot 5252, zongo',
                'email' => "feli@.com",
                'password' => bcrypt('assoufelix'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ASSOU Romiade",
                'phone' => "96547115",
                'address' => 'BP 358, Cotonou, Bénin, Rue 333 Révérend Père Colineau, lot 5252, zongo',
                'email' => "romiade@.com",
                'password' => bcrypt('assouromiade'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ALI Romain",
                'phone' => "96517870",
                'address' => 'BP 358, Cotonou, Bénin, Rue 334 Révérend Père Colineau, lot 5252, zongo',
                'email' => "ali@.com",
                'password' => bcrypt('aliromain'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ALI Simeon",
                'phone' => "90547175",
                'address' => 'BP 358, Cotonou, Bénin, Rue 335 Révérend Père Colineau, lot 5252, zongo',
                'email' => "simeon@.com",
                'password' => bcrypt('alisimeon'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ALI Codjo",
                'phone' => "96547800",
                'address' => 'BP 358, Cotonou, Bénin, Rue 336 Révérend Père Colineau, lot 5252, zongo',
                'email' => "codjo@.com",
                'password' => bcrypt('alicodjo'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "SODE Jean",
                'phone' => "91147875",
                'address' => 'BP 358, Cotonou, Bénin, Rue 337 Révérend Père Colineau, lot 5252, zongo',
                'email' => "jean@.com",
                'password' => bcrypt('sodejean'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "SODE Ali",
                'phone' => "96710875",
                'address' => 'BP 358, Cotonou, Bénin, Rue 353 Révérend Père Colineau, lot 5252, zongo',
                'email' => "sodeali@.com",
                'password' => bcrypt('sodeali15'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "KANDI Olivier",
                'phone' => "96100875",
                'address' => 'BP 358, Cotonou, Bénin, Rue 351 Révérend Père Colineau, lot 5252, zongo',
                'email' => "kandi@.com",
                'password' => bcrypt('kandiolivier'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "KANDI Olive",
                'phone' => "96010775",
                'address' => 'BP 358, Cotonou, Bénin, Rue 350 Révérend Père Colineau, lot 5252, zongo',
                'email' => "olive@.com",
                'password' => bcrypt('kandiolive'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "KANDI Roméo",
                'phone' => "96711000",
                'address' => 'BP 358, Cotonou, Bénin, Rue 360 Révérend Père Colineau, lot 5252, zongo',
                'email' => "romeo@.com",
                'password' => bcrypt('kandiromeo'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ZAÏ Godson",
                'phone' => "66010075",
                'address' => 'BP 358, Cotonou, Bénin, Rue 361 Révérend Père Colineau, lot 5252, zongo',
                'email' => "godson@.com",
                'password' => bcrypt('zaigodson'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ZAÏ Simeon",
                'phone' => "61010075",
                'address' => 'BP 358, Cotonou, Bénin, Rue 362 Révérend Père Colineau, lot 5252, zongo',
                'email' => "zai@.com",
                'password' => bcrypt('zaisimeon'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "ZAÏ comlan",
                'phone' => "60010075",
                'address' => 'BP 358, Cotonou, Bénin, Rue 363 Révérend Père Colineau, lot 5252, zongo',
                'email' => "zaicomlan@.com",
                'password' => bcrypt('zaicomlan'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "LAÏ Godson",
                'phone' => "66000075",
                'address' => 'BP 358, Cotonou, Bénin, Rue 364 Révérend Père Colineau, lot 5252, zongo',
                'email' => "laigodson@.com",
                'password' => bcrypt('laigodson'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
            [
                'name' => "LAÏ Sodem",
                'phone' => "66000005",
                'address' => 'BP 358, Cotonou, Bénin, Rue 365 Révérend Père Colineau, lot 5252, zongo',
                'email' => "laisodem@.com",
                'password' => bcrypt('laisodem'),
                'confirmationToken' => null,
                'created_at' => Carbon::now(),
                'updated_at' => Carbon::now()
            ],
        ]);
    }
}
