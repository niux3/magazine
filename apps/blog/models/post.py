from django.db import models
from django.utils.timezone import now


class Post(models.Model):
    class Meta:
        ordering = ['-posted']
    
    title = models.CharField(max_length=255)
    slug = models.SlugField(max_length=255)
    content = models.TextField()
    online = models.BooleanField(default=True)
    created = models.DateTimeField(auto_now_add=True)
    updated = models.DateTimeField(auto_now=True)
    posted = models.DateField(default=now)

    def __str__(self):
        return f'{self.pk} - {self.slug}'

