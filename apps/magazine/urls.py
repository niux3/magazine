from django.urls import path
from magazine.apps import MagazineConfig
from magazine.views import (
    PostsList,
    CategoriesList,
    PostDetail,
    SearchList,
)


app_name = MagazineConfig.name


urlpatterns = [
    path('', PostsList.as_view(), name='index'),
    path('<int:id>-<slug:slug>.html', PostDetail.as_view(), name='detail'),
    path('edition/<slug:slug>.html', CategoriesList.as_view(), name='categories'),
    path('chercher.html', SearchList.as_view(), name='search'),
]
