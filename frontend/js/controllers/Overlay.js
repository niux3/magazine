export default class Overlay{
    constructor(){
        this._$main = document.querySelector('main')
        this._$main.insertAdjacentHTML('beforeend', '<div class="overlay">&nbsp;</div>')
        this._$overlay = document.querySelector('.overlay')
    }

    onOverlay(){
        this._$overlay.addEventListener('pointerdown', e =>{
            this._$main.dataset.state = ''
        })
    }
}
