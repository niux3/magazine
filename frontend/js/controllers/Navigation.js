export default class Navigation{
    constructor(){
        this._$burgerOpen = document.getElementById('burgerOpen')
        this._$burgerClose = document.getElementById('burgerClose')
        this._$main = document.querySelector('main')

        if(document.querySelectorAll('.overlay').length === 0){
            this._$main.insertAdjacentHTML('beforeend', '<div class="overlay">&nbsp;</div>')
        }
        this._$overlay = document.querySelector('.overlay')
    }

    openNav(){
        this._$burgerOpen.addEventListener('pointerdown', e =>{
            this._$main.classList.add('onNav')
        })
    }

    closeNav(){
        this._$burgerClose.addEventListener('pointerdown', e =>{
            this._$main.classList.remove('onNav')
        })
    }

    onOverlay(){
        this._$overlay.addEventListener('pointerdown', e =>{
            this._$main.classList.remove('onNav')
        })
    }
}
