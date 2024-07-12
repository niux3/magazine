from django.urls import path
from account.apps import AccountConfig
from account.views import (
    temp
)


app_name = AccountConfig.name

urlpatterns = [
    path('yo-yo', temp, name='temp'),
]
