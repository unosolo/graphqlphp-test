<?php

namespace GqlSimple;

class GqlSimpleObjectType {

	public function all(): array {
		$echos = 'GqlSimple\Types\Echos';

		return [
			'query' => (new $echos())->get()
		];
	}

}