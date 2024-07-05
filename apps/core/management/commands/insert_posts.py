from random import randint
from django.core.management.base import BaseCommand, CommandError
from django.utils.text import slugify
from faker import Faker
from blog.models import Post



class Command(BaseCommand):
    help = "insert data in db"

    def handle(self, *args, **options):
        fake = Faker('fr')
        for _ in range(26):
            row = {
                'title': fake.text(max_nb_chars=randint(80, 128)),
                'slug': slugify(fake.text(max_nb_chars=randint(80, 128))),
                'posted': fake.date(),
                'content': fake.paragraph(nb_sentences=randint(10, 50))
            }
            post = Post(**row)
            post.save()
