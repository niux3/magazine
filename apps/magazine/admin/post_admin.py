from django.contrib import admin
from magazine.models import Post


@admin.register(Post)
class PostAdmin(admin.ModelAdmin):
    prepopulated_fields = {
        'slug': ['title']
    }
