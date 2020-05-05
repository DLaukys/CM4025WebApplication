<?php
require('../../dmxConnectLib/dmxConnect.php');


$app = new \lib\App();

$app->define(<<<'JSON'
{
  "settings": {
    "options": {}
  },
  "meta": {
    "options": {
      "linkedFile": "/Login.php",
      "linkedForm": "serverconnectform1"
    },
    "$_POST": [
      {
        "type": "text",
        "fieldName": "email",
        "options": {
          "rules": {
            "core:email": {}
          }
        },
        "name": "email"
      },
      {
        "type": "text",
        "fieldName": "password",
        "name": "password"
      }
    ]
  },
  "exec": {
    "steps": [
      "Connections/db",
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
      },
      {
        "name": "identity",
        "module": "auth",
        "action": "login",
        "options": {
          "provider": "security1",
          "username": "{{$_POST.user{{$_POST.email}}OST.email}}",
          "password": "{{$_POST.password.sha256(\"SimpleRSSreader\")}}"
        },
        "output": true,
        "meta": []
      }
    ]
  }
}
JSON
);
?>