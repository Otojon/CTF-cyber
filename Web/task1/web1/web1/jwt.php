<?php

const JWT_SECRET = 's3cr3t';

function base64url_encode($data) {
    return rtrim(strtr(base64_encode($data), '+/', '-_'), '=');
}

function base64url_decode($data) {
    $remainder = strlen($data) % 4;
    if ($remainder) {
        $padlen = 4 - $remainder;
        $data .= str_repeat('=', $padlen);
    }
    return base64_decode(strtr($data, '-_', '+/'));
}

function jwt_sign(array $payload, int $ttlSeconds = 3600) {
    $header = ['alg' => 'HS256', 'typ' => 'JWT'];
    $now = time();
    $payload['iat'] = $now;
    $payload['exp'] = $now + $ttlSeconds;
    $header_b64 = base64url_encode(json_encode($header));
    $payload_b64 = base64url_encode(json_encode($payload));
    $signature = hash_hmac('sha256', $header_b64 . '.' . $payload_b64, JWT_SECRET, true);
    $signature_b64 = base64url_encode($signature);
    return $header_b64 . '.' . $payload_b64 . '.' . $signature_b64;
}

function jwt_verify(string $token) {
    $parts = explode('.', $token);
    if (count($parts) !== 3) return null;
    list($h, $p, $s) = $parts;
    $expected = base64url_encode(hash_hmac('sha256', $h . '.' . $p, JWT_SECRET, true));
    if (!hash_equals($expected, $s)) return null;
    $payload = json_decode(base64url_decode($p), true);
    if (!is_array($payload)) return null;
    if (isset($payload['exp']) && time() >= $payload['exp']) return null;
    return $payload;
}

?>


