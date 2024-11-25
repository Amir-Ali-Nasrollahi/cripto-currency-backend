<?php


namespace Core;

interface Middleware {
    public function check(array|string $request);
}