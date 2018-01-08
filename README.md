This is a very simple example of a nonce calculation done with sha1 hashing algorithm in PHP

Prerequisites:
- Knowledge of the concepts:
                "nonce" calculation,
                "proof of work,"
                and basic PHP programming skills.

1) A 256 character-long random string is generated with a simple function called d256()
2) The string is hashed in sha1
3) An incremented integer is concatenated to the original hash in a loop until the desired "proof of work" difficulty is successfully calculated as a new sha1 hash.
