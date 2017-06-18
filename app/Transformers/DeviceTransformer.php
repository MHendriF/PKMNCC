<?php 

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\Devices;
use Carbon;

class DeviceTransformer extends TransformerAbstract
{
	public function transform(Devices $device)
	{
		return [
			'id'	=> $device->id,
			'nama_device' => $device->nama_device,
			'status_device' => $device->status_device,
			'deskripsi' => $device->deskripsi,
		];
	}
}