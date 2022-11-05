<?php

namespace GqlSimple;

use GraphQL\Type\Definition\ObjectType;
use GraphQL\Type\Definition\Type;

class GqlSimpleObjectType {

	public function queryType(): ObjectType {
		return new ObjectType([
			'name' => 'Query',
			'fields' => [
				'echo' => [
					'type' => Type::string(),
					'resolve' => function( $rootValue, array $args): string {
						error_log(var_export($rootValue), 3, 'debug.log');
						error_log(var_export($args), 3, 'debug.log');
						return 'Hello world';
					}
				]
			]
		]);
	}

	public function all(): array {
		return [
			'query' => $this->queryType()
		];
	}
}