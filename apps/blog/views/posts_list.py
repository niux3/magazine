from django.views.generic import ListView
from blog.models import Post


class PostsList(ListView):
    template_name = 'blog/index.html'
    model = Post
    paginate_by = 6
