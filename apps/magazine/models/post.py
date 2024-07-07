from django.db import models
from django.utils.timezone import now
from django.contrib.auth.models import User
from magazine.models.category import Category


class Post(models.Model):
    class Meta:
        ordering = ['-updated']
    
    title = models.CharField(max_length=255)
    sub_title = models.TextField()
    slug = models.SlugField(max_length=255)
    content = models.TextField()
    online = models.BooleanField(default=True)
    created = models.DateTimeField(auto_now_add=True)
    updated = models.DateTimeField(auto_now=True)
    featured = models.BooleanField(default=False)
    illustration = models.CharField(max_length=255)

    category = models.ForeignKey(Category, on_delete=models.CASCADE, related_name='magazine_posts_category')
    author = models.ForeignKey(User, on_delete=models.CASCADE, related_name='magazine_posts_user')

    def __str__(self):
        return f'{self.pk} - {self.slug}'
