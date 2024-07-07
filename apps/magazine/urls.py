from django.urls import path
from magazine.apps import MagazineConfig
from magazine.views import (
    PostsList,
    PostDetail,
)


app_name = MagazineConfig.name


urlpatterns = [
    path('', PostsList.as_view(), name='index'),
    path('<int:id>-<slug:slug>.html', PostDetail.as_view(), name='detail'),
]
