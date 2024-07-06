export default class Navigation{
    constructor(){
        this._$burgerOpen = document.getElementById('burgerOpen')
        this._$burgerClose = document.getElementById('burgerClose')
        this._$main = document.querySelector('main')

        if(document.querySelectorAll('.overlay').length === 0){
            this._$main.insertAdjacentHTML('beforeend', '<div class="overlay">&nbsp;</div>')
        }
        this._$overlay = document.querySelector('.overlay')
        this._$accordions = document.querySelectorAll('nav .accordion')
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

    onAccordion(){
        this._$accordions.forEach($el =>{
            $el.querySelector('button').addEventListener('pointerdown', e =>{
                if($el.classList.contains('show')){
                    $el.classList.remove('show')
                }else{
                    this._$accordions.forEach($el => $el.classList.remove('show'))
                    $el.classList.add('show')
                }
            })
        })
    }
}
