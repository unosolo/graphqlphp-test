<?php

namespace GqlSimple\Types;

use GqlSimple\Core\TypeBase;

use GraphQL\Type\Definition\Type;

class Echos extends TypeBase {

	/**
	 * For request
	 * {
	 *      echos(userName: "Julio")
	 *  }
	 *
	 * @return array
	 */
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
		log_message('$rootValue', $rootValue); // DEBUG
		log_message('$args', $args); // DEBUG
		return 'Hello ' . $target . '!';
	}
}