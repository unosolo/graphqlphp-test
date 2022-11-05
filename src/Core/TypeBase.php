<?php

namespace GqlSimple\Core;

use GqlSimple\Core\Interfaces\Type;
use GraphQL\Type\Definition\ObjectType;

class TypeBase implements Type {
	// define GraphQL type in an array format
	public function get(): ObjectType {
		return new ObjectType( $this->type() );
	}

	// get graph-php object type for building the schema
	public function type(): array {
		// TODO: Implement type() method.
		return [];
	}
}