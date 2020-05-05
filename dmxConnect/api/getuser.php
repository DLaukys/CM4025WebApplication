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
      "linkedFile": "/Main.php"
    },
    "$_GET": [
      {
        "type": "text",
        "name": "sort"
      },
      {
        "type": "text",
        "name": "dir"
      }
    ]
  },
  "exec": {
    "steps": [
      "Connections/db",
      "SecurityProviders/security1",
      {
        "name": "query1",
        "module": "dbconnector",
        "action": "select",
        "options": {
          "connection": "db",
          "sql": {
            "type": "SELECT",
            "columns": [
              {
                "table": "users",
                "column": "id"
              },
              {
                "table": "users",
                "column": "email"
              }
            ],
            "table": {
              "name": "users"
            },
            "joins": [],
            "wheres": {
              "condition": "AND",
              "rules": [
                {
                  "id": "users.id",
                  "field": "users.id",
                  "type": "double",
                  "operator": "equal",
                  "value": "{{security1.identity}}",
                  "data": {
                    "table": "users",
                    "column": "id",
                    "type": "number"
                  },
                  "operation": "="
                }
              ],
              "conditional": null,
              "valid": true
            },
            "query": "SELECT id, email\nFROM users\nWHERE id = :P1 /* {{security1.identity}} */",
            "params": [
              {
                "operator": "equal",
                "type": "expression",
                "name": ":P1",
                "value": "{{security1.identity}}"
              }
            ]
          }
        },
        "output": true,
        "meta": [
          {
            "name": "id",
            "type": "number"
          },
          {
            "name": "email",
            "type": "text"
          }
        ],
        "outputType": "array"
      },
      {
        "name": "RSSApi",
        "module": "api",
        "action": "send",
        "options": {
          "url": "https://api.rss2json.com/v1/api.json",
          "dataType": "json"
        },
        "output": true
      }
    ]
  }
}
JSON
);
?>