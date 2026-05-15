<?php

// PHPStan bootstrap stubs for cross-project dependencies resolved at runtime
// when this library is installed inside the pathfinder project.
// These are NOT autoloaded and have no effect outside static analysis.

namespace {
    abstract class Prefab {
        /** @return static */
        public static function instance(): static {}
    }
}

namespace lib\logging {
    interface LogInterface {
        public function setMessage(string $message): void;
        public function setData(array $data): void;
        public function setTag(string $tag): void;
        public function buffer(): void;
    }
}

namespace Exodus4D\Pathfinder\Data\Mapper {
    abstract class AbstractIterator {
        protected static $map = [];
        protected static $removeUnmapped = true;

        public function __construct(mixed $data) {}

        public function getData() {}

        protected function camelCaseKeys(array $array): array {}
    }
}
