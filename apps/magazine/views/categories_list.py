from django.views.generic import ListView
from magazine.models import Category, Post


class CategoriesList(ListView):
    template_name = 'magazine/index.html'
    model = Category
    paginate_by = 6

    def get_context_data(self, **kwargs):
        ctx = super().get_context_data(**kwargs)
        current_category = Category.objects.get(slug=self.kwargs.get('slug'))
        ctx['title_section'] = current_category.name
        ctx['intro_section'] = current_category.content
        ctx['object'] = Post.objects.filter(online=True, featured=True)[0]
        ctx['share'] = False
        return ctx
