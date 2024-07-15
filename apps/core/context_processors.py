from magazine.models import Category
from magazine.forms import SearchForm
from django.contrib.auth.forms import AuthenticationForm


def get_three_posts_by_categories(request):
    return {
        'categories_navigation': [{
            'name': category.name,
            'slug': category.slug,
            'posts': category.magazine_posts_category.all()[:3]
        } for category in Category.objects.all() if len(category.magazine_posts_category.filter(online=True)) > 0]
    }

def get_search_form(request):
    return {
        'search_form': SearchForm
    }

def get_auth_form(request):
    return {
        'login_form': AuthenticationForm
    }
