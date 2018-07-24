## Configure Bundle

```
https://github.com/FriendsOfSymfony/FOSElasticaBundle
```


```
$composer update
```

```
$composer require friendsofsymfony/elastica-bundle
```

## Populate

```
php bin/console fos:elastica:populate --no-debug
```

## Resets the popularity counter of each field (If new mapping fields have been added)
```
Kibana
    Management->Index Patterns->Refresh field list
```

## Query Language 
```
http://localhost:9200/_search?q=bell96
```

## Query Language - Kibana

https://www.elastic.co/guide/en/kibana/current/console-kibana.html

Kibana - Example:
```
GET /_search
{
  "query": {
    "match": {
      "user_name": {
        "query": "bell96"
      }
    }
  }
}

```


This example composes two match queries and returns all users containing "mark46" and "ross" in the user_name AND last_name:

```
GET /_search
{
  "query": { 
    "bool": { 
      "must": [
        { "match": { "user_name":   "mark46"        }}, 
        { "match": { "last_name": "ross" }}  
      ]
    }
  }
}
```

In contrast, this example composes two match queries and returns all users containing mark46" OR "ross" in the user_name and last_name::
```
GET /_search
{
  "query": { 
    "bool": { 
      "should": [
        { "match": { "user_name":   "mark46"        }}, 
        { "match": { "last_name": "ross" }}  
      ]
    }
  }
}
```


