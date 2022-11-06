<?php

namespace GqlSimple\Core\Interfaces;

use GraphQL\Type\Definition\ObjectType;

interface Type {
	// define GraphQL type in an array format
	public function type(): array;

	// get graph-php object type for building the schema
	public function get(): ObjectType;
}
