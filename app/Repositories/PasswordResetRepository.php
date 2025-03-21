<?php

// namespace App\Repositories;

// use Illuminate\Support\Carbon;
// use Illuminate\Support\Facades\DB;
// use Illuminate\Support\Facades\Hash;
// use App\Repositories\Interfaces\PasswordResetRepositoryInterface;

// class PasswordResetRepository implements PasswordResetRepositoryInterface
// {
//   public function createResetToken(string $email, string $token)
//   {
//       return DB::table('password_resets')->insert([
//           'email' => $email,
//           'token' => Hash::make($token), 
//           'created_at' => Carbon::now()
//       ]);
//   }
  

//   public function findByToken(string $token)
//   {
//       $records = DB::table('password_resets')->get();
      
//       foreach ($records as $record) {
//           if (Hash::check($token, $record->token)) {
//               return $record;
//           }
//       }
  
//       return null; 
//   }
  

//     public function deleteToken(string $email)
//     {
//         return DB::table('password_resets')->where('email', $email)->delete();
//     }
// }
