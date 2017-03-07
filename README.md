# HackSandbox Identity Service
HackSandbox identity service. Used by HackSandbox to authenticate users.

### Advanced Security Standard

Your client application must be able to handle RSA. In another word, it must be able to handle
<img src="https://wikimedia.org/api/rest_v1/media/math/render/svg/98b7f857d10d5b056d5db624bd3a475d2cb475cd" /> with extremely large `e`,`d` and `n` (over trillion).

Your client application must be able to hash strings using `SHA512`, `MD5` and `SHA256`.

Your client application must be able to encrypt and decrypt data using `AES` with `OCB` mode.

### Server Requirements

* PHP 5
* MySQL
* Support `/dev/random` TRNG. (Linux or macOS, Windows does not support UNIX TRNG).
* Prefer Intel processor that supports Intel DRNG.
* It is highly perfered to mount `dev/random` to Docker container's `dev/random` to increase entropy size. And prevent attacks during starup sequence.
