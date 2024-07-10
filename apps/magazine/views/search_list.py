from django.views.generic import ListView
from django.db.models import Q
from magazine.models import Post


class SearchList(ListView):
    template_name = 'magazine/index.html'
    model = Post
    paginate_by = 6

    def get_context_data(self, **kwargs):
        ctx = super().get_context_data(**kwargs)
        q = self.request.GET.get('q')
        ctx['title_section'] = f"Vous recherchez : {q}"
        ctx['object'] = Post.objects.filter(online=True, featured=True)[0]
        ctx['object_list'] = Post.objects.filter(
            Q(online=True) & 
            (Q(title__contains=q) | Q(sub_title__contains=q) | Q(content__contains=q))
        )
        ctx['share'] = False
        return ctx
