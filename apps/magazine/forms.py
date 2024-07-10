from django import forms


class SearchForm(forms.Form):
    q = forms.CharField(label='q', widget=forms.TextInput(attrs={
            'type': 'search',
            'autocomplete': 'off',
            'placeholder': "Rechercher sur Contexte"
        }
    ))
