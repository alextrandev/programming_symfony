# Twig tips

- Component can be export to a new file like "\_component.html.twig"
- Exported component can be render with:

```php
{% include('path', {parameter:parameter}) %}
```

- Generate url with path(), pass props as a parameter

```php
{{ path('path_name', {id:key}) }}
```
