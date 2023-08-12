# http-cache-ttl
## Object for storing common and individual TTLs for different HTTP response status codes for use in caching.

This simple PHP class allows you to assign your own TTL for each HTTP status code (or use default TTL).
What is it for? This can be useful if HTTP responses with different codes need to be cached at different TTL.
