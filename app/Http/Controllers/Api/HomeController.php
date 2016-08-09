<?php

namespace App\Http\Controllers\Api;

class HomeController extends ApiController {

	public function get() {
		return $this->response([
			'player' => '/player',
			'player.join' => '/player/join'
		]);
	}

}