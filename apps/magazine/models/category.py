from django.db import models


class Category(models.Model):
    name = models.CharField(max_length=64)
    slug = models.SlugField(max_length=64)
    content = models.TextField(blank=True, null=True)

    def __str__(self):
        return '%s %s' % (self.id, self.slug)
