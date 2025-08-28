<?php
require_once __DIR__ . '/jwt.php';

function get_jwt_from_cookie() {
    if (isset($_COOKIE['token'])) {
        return $_COOKIE['token'];
    }
    return null;
}

function require_auth() {
    $token = get_jwt_from_cookie();
    if (!$token) {
        header('Location: login.php');
        exit;
    }
    $payload = jwt_verify($token);
    if (!$payload) {
        header('Location: login.php');
        exit;
    }
    return $payload;
}

function require_admin() {
    $payload = require_auth();
    if (!isset($payload['role']) || $payload['role'] !== 'admin') {
        http_response_code(403);
        echo 'Forbidden: Admins only';
        exit;
    }
    return $payload;
}

?>


