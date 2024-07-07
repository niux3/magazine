from django.views.generic import ListView
from magazine.models import Post


class PostsList(ListView):
    template_name = 'magazine/index.html'
    model = Post
    paginate_by = 6

    def get_context_data(self, **kwargs):
        ctx = super().get_context_data(**kwargs)
        ctx['title_section'] = "Les derniers articles"
        ctx['object'] = Post.objects.filter(online=True, featured=True)[0]
        ctx['share'] = False
        return ctx
