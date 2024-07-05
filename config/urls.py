from django.contrib import admin
from django.urls import path, include
from django.apps import apps

urlpatterns = [
    path('admin/', admin.site.urls),
]

for app_name, app_object in apps.app_configs.items():
    try:
        if(hasattr(app_object, 'url_root')):
            included = include(f'{app_name}.urls', namespace=app_object.name)
            route = path(app_object.url_root, included)
            urlpatterns.append(route)
            print(f'>> urls {app_name} loaded')
    except ImportError as e:
        print(f'The app "{app_name}" has no "urls" module.')

