<?php
$exports = <<<'JSON'
{
  "name": "security1",
  "module": "auth",
  "action": "provider",
  "options": {
    "secret": "IpV4yukJuARFD0y",
    "provider": "Database",
    "connection": "db",
    "users": {
      "table": "users",
      "identity": "id",
      "username": "email",
      "password": "avatar"
    },
    "permissions": {}
  },
  "meta": [
    {
      "name": "identity",
      "type": "text"
    }
  ]
}
JSON;
?>