dmx.config({
  "Main": {
    "api1": [
      {
        "type": "array",
        "name": "data"
      },
      {
        "type": "object",
        "name": "headers"
      }
    ],
    "rss_url": [
      {
        "type": "object",
        "name": "data",
        "sub": [
          {
            "type": "text",
            "name": "status"
          },
          {
            "type": "object",
            "name": "feed",
            "sub": [
              {
                "type": "text",
                "name": "url"
              },
              {
                "type": "text",
                "name": "title"
              },
              {
                "type": "text",
                "name": "link"
              },
              {
                "type": "text",
                "name": "author"
              },
              {
                "type": "text",
                "name": "description"
              },
              {
                "type": "text",
                "name": "image"
              }
            ]
          },
          {
            "type": "array",
            "name": "items",
            "sub": [
              {
                "type": "text",
                "name": "title"
              },
              {
                "type": "text",
                "name": "pubDate"
              },
              {
                "type": "text",
                "name": "link"
              },
              {
                "type": "text",
                "name": "guid"
              },
              {
                "type": "text",
                "name": "author"
              },
              {
                "type": "text",
                "name": "thumbnail"
              },
              {
                "type": "text",
                "name": "description"
              },
              {
                "type": "text",
                "name": "content"
              },
              {
                "type": "object",
                "name": "enclosure",
                "sub": [
                  {
                    "type": "text",
                    "name": "thumbnail"
                  }
                ]
              },
              {
                "type": "array",
                "name": "categories"
              }
            ]
          }
        ]
      },
      {
        "type": "object",
        "name": "headers",
        "sub": [
          {
            "type": "text",
            "name": "access-control-allow-headers"
          },
          {
            "type": "text",
            "name": "access-control-allow-methods"
          },
          {
            "type": "text",
            "name": "access-control-allow-origin"
          },
          {
            "type": "text",
            "name": "access-control-expose-headers"
          },
          {
            "type": "text",
            "name": "cache-control"
          },
          {
            "type": "text",
            "name": "cf-cache-status"
          },
          {
            "type": "text",
            "name": "cf-ray"
          },
          {
            "type": "text",
            "name": "cf-request-id"
          },
          {
            "type": "text",
            "name": "content-encoding"
          },
          {
            "type": "text",
            "name": "content-type"
          },
          {
            "type": "text",
            "name": "date"
          },
          {
            "type": "text",
            "name": "etag"
          },
          {
            "type": "text",
            "name": "expect-ct"
          },
          {
            "type": "text",
            "name": "last-modified"
          },
          {
            "type": "text",
            "name": "server"
          },
          {
            "type": "text",
            "name": "status"
          },
          {
            "type": "text",
            "name": "vary"
          }
        ]
      }
    ],
    "RSSoutput": {
      "meta": [
        {
          "type": "text",
          "name": "title"
        },
        {
          "type": "text",
          "name": "pubDate"
        },
        {
          "type": "text",
          "name": "link"
        },
        {
          "type": "text",
          "name": "guid"
        },
        {
          "type": "text",
          "name": "author"
        },
        {
          "type": "text",
          "name": "thumbnail"
        },
        {
          "type": "text",
          "name": "description"
        },
        {
          "type": "text",
          "name": "content"
        },
        {
          "type": "object",
          "name": "enclosure",
          "sub": [
            {
              "type": "text",
              "name": "thumbnail"
            }
          ]
        },
        {
          "type": "array",
          "name": "categories"
        }
      ],
      "outputType": "array"
    },
    "masonry1": {
      "meta": [
        {
          "type": "text",
          "name": "url"
        },
        {
          "type": "text",
          "name": "title"
        },
        {
          "type": "text",
          "name": "link"
        },
        {
          "type": "text",
          "name": "author"
        },
        {
          "type": "text",
          "name": "description"
        },
        {
          "type": "text",
          "name": "image"
        }
      ],
      "outputType": "object"
    }
  }
});
