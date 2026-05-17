#!/bin/bash
ROOT_DIR="$(cd "$(dirname "$0")/.." && pwd)"
php -S 127.0.0.1:8888 "$ROOT_DIR/_tools/router.php"
