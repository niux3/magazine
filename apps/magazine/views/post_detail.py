from django.views.generic import DetailView
from django.shortcuts import get_object_or_404
from magazine.models import Post


class PostDetail(DetailView):
    template_name = 'magazine/show.html'
    
    def get_object(self):
        print(self.kwargs)
        return get_object_or_404(Post, pk=self.kwargs.get('id'))
