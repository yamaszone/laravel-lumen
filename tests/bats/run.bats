#!/usr/bin/env bats

load test_helper

@test "'run' script displays help." {
	run ./run
	assert_contains "$output" "Usage:"
}

@test "'run' script launches app." {
	run docker-compose exec lumen php --version
	assert_contains "$output" "PHP 5.6"

	run docker-compose exec lumen nginx -v
	assert_contains "$output" "nginx/1.11"

	run docker-compose exec lumen /bin/bash -c lumen
	assert_contains "$output" "Usage:"
}
