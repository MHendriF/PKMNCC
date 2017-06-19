<?php 

namespace App\Transformers;

use App\User;
use League\Fractal\TransformerAbstract;
use Carbon;

class UserTransformer extends TransformerAbstract
{
	public function transform(User $user)
	{
		return [
			'id'	=> $user->id,
			'name' => $user->name,
			'email' => $user->email,
			'alamat' => $user->alamat,
			'kota_domisili' => $user->kota_domisili,
			'negara_domisili' => $user->negara_domisili,
			'no_hp' => $user->no_hp,
			'status_akun' => $user->status_akun,
			'registered' => $user->created_at->diffForHumans(),
		];
	}
}