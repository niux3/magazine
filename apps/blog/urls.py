from django.urls import path
from blog.apps import BlogConfig
from blog.views import (
    PostsList,
    PostDetail,
)


app_name = BlogConfig.name


urlpatterns = [
    path('', PostsList.as_view(), name='index'),
    path('<int:id>-<slug:slug>.html', PostDetail.as_view(), name='detail'),
]
