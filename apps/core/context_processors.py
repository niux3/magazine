from magazine.models import Category


def get_three_posts_by_categories(request):
    return {
        'categories_navigation': [{
            'name': category.name,
            'slug': category.slug,
            'posts': category.magazine_posts_category.all()[:3]
        } for category in Category.objects.all() if len(category.magazine_posts_category.filter(online=True)) > 0]
    }
