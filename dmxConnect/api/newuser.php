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
      "linkedFile": "/Register.php",
      "linkedForm": "register1"
    },
    "$_POST": [
      {
        "type": "text",
        "fieldName": "email",
        "options": {
          "rules": {
            "core:required": {
              "param": "",
              "message": "A valid email is required"
            },
            "core:email": {}
          }
        },
        "name": "email"
      },
      {
        "type": "text",
        "fieldName": "password",
        "options": {
          "rules": {
            "core:required": {
              "param": "",
              "message": "A password is required"
            }
          }
        },
        "name": "password"
      }
    ]
  },
  "exec": {
    "steps": [
      "Connections/db",
      {
        "name": "validate1",
        "module": "validator",
        "action": "validate",
        "options": {
          "data": [
            {
              "name": "validate_1",
              "value": "{{$_POST.email}}",
              "rules": {
                "db:notexists": {
                  "param": {
                    "connection": "db",
                    "table": "users",
                    "column": "email"
                  },
                  "message": "Email Has Already Been used."
                }
              },
              "fieldName": "email"
            }
          ]
        }
      },
      {
        "name": "insertuser",
        "module": "dbupdater",
        "action": "insert",
        "options": {
          "connection": "db",
          "sql": {
            "type": "insert",
            "values": [
              {
                "table": "users",
                "column": "email",
                "type": "text",
                "value": "{{$_POST.email.sha256(\"testsalt\")}}"
              },
              {
                "table": "users",
                "column": "avatar",
                "type": "text",
                "value": "{{$_POST.password.sha256(\"testsalt\")}}"
              }
            ],
            "table": "users",
            "query": "INSERT INTO users\n(email, avatar) VALUES (:P1 /* {{$_POST.email.sha256(\"testsalt\")}} */, :P2 /* {{$_POST.password.sha256(\"testsalt\")}} */)",
            "params": [
              {
                "name": ":P1",
                "type": "expression",
                "value": "{{$_POST.email.sha256(\"testsalt\")}}"
              },
              {
                "name": ":P2",
                "type": "expression",
                "value": "{{$_POST.password.sha256(\"testsalt\")}}"
              }
            ]
          }
        },
        "meta": [
          {
            "name": "identity",
            "type": "text"
          },
          {
            "name": "affected",
            "type": "number"
          }
        ]
      }
    ]
  }
}
JSON
);
?>