from django.views.generic import DetailView
from django.shortcuts import get_object_or_404
from magazine.models import Post


class PostDetail(DetailView):
    template_name = 'magazine/show.html'
    
    def get_object(self):
        return get_object_or_404(Post, pk=self.kwargs.get('id'))

    def get_context_data(self, **kwargs):
        ctx = super().get_context_data(**kwargs)
        ctx['title_section'] = self.get_object().category.name
        ctx['share'] = True
        return ctx
