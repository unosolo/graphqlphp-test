<?php

namespace GqlSimple\Types;

use GqlSimple\Core\TypeBase;

use GraphQL\Type\Definition\Type;

class Echos extends TypeBase {
	public function type(): array {
		return [
			'name' => 'Query',
			'fields' => [
				'echos' => [
					'type' => Type::string(),
					'args' => [
						'userName' => Type::string(),
					],
					'resolve' => function ($rootValue, array $args) {
						return $this->resolveEcho($rootValue, $args);
					}
				]
			]
		];
	}

	public function resolveEcho($rootValue, array $args): string {
		$target = empty($args['userName']) ? 'World' : $args['userName'];
		error_log(var_export($rootValue, true), 3, 'debug.log');
		error_log(var_export($args, true), 3, 'debug.log');
		return 'Hello ' . $target . '!';
	}
}