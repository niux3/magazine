from django.views.generic import ListView
from magazine.models import Post


class PostsList(ListView):
    template_name = 'magazine/index.html'
    model = Post
    paginate_by = 6
