<?php

declare(strict_types=1);

namespace GqlSimple;

require_once __DIR__ . '/../vendor/autoload.php';

use GraphQL\Server\ServerConfig;
use GraphQL\Server\StandardServer;
use GraphQL\Type\Schema;

$schema = new Schema( (new GqlSimpleObjectType())->all() );

$config = ServerConfig::create()
     ->setSchema($schema); //     ->setContext($myContext);

$graphql_server = new StandardServer( $config );

$graphql_server->handleRequest();