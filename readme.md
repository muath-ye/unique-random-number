{
    "name": "muath-ye/unique-random-number",
    "description": "Generate ranged digits random number from table id, so its unique",
    "keywords": [
        "framework",
        "http",
        "rest",
        "web service",
        "curl",
        "client",
        "HTTP client"
    ],
    "type": "project",
    "license": "MIT",
    "authors": [
        {
            "name": "Muath Assawadi",
            "email": "muathye@gmail.com"
        }
    ],
    "minimum-stability": "stable",
    "autoload": {
        "psr-4": {
            "Muathye\\UniqueRandomNumber\\": "src/"
        }
    },
    "require": {},
    "extra": {
        "laravel": {
            "providers": [
                "Muathye\\UniqueRandomNumber\\ServiceProvider"
            ],
            "aliases": {
                "Debugbar": "Muathye\\UniqueRandomNumber\\Facade"
            }
        }
    }
}
