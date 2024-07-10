from magazine.models import Category
from magazine.forms import SearchForm


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
